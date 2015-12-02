<?php
//Здания, информация о которых есть в сервисе

namespace StudyApp\APIBundle\Controller;

use StudyApp\StudyAppBundle\Utils\AppLib;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use StudyApp\FirmBundle\Entity\Firm;
use \StudyApp\StudyAppBundle\Utils\AppLib AS Tool;

class FirmController extends Controller
{
    /**
     * @Route("/firms", name="study_app_firms", requirements={ "_method" : "GET" })
     * @Template()
     */
    public function indexAction()
    {
        return $this->pageAction(1);
    }

    /**
     * json
     * @Route("/firms/{id}", name="study_app_firms_by_id", requirements={ "_method" : "GET" })
     * Template("StudyAppAPIBundle:Default:index.html.twig")
     */
    public function firmAction($id)
    {
        $id = (int)$id;
        $response = array();
        if ($id) {
            $query_filter = array('id' => $id, 'is_deleted' => 0, 'is_accepted' => 1);
            $collection = $this->getDoctrine()->getRepository('StudyAppFirmBundle:Firm')->findBy(
                $query_filter
            );
            foreach ($collection as $building) {
                $item = Tool::toArray($building);
                $response['firm'] = $item;
            }
            if (!isset($response['firm'])) {
                return Tool::json404($response);
            }
            return Tool::json($response);
        } else {
            return Tool::json404($response);
        }
    }

    /**
     * json
     * @Route("/firms/page/{page}", name="study_app_firms_page", requirements={ "_method" : "GET" })
     * Template("StudyAppAPIBundle:Default:index.html.twig")
    */
    public function pageAction($page)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $filter = $request->get('filter');
        $query_filter = array('is_deleted' => 0, 'is_accepted' => 1);

        if (is_array($filter)) {
            if (isset($filter['building_id']) && (int)$filter['building_id'] > 0) {
                $query_filter['building_id'] = (int)$filter['building_id'];
            }
            if (isset($filter['rubric_id']) && (int)$filter['rubric_id'] > 0) {
                $buf = $this->_getFirmInRubric((int)$filter['rubric_id']);
                if(count($buf)) {
                    $query_filter['id'] = $buf;
                }
            }
            if (!isset($query_filter['building_id']) && isset($filter['latitude']) && (double)$filter['latitude'] > 0) {
                if (isset($filter['longitude']) && (double)$filter['longitude'] > 0) {
                    if (isset($filter['radius']) && (int)$filter['radius'] > 0) {
                        $buf = $this->_getBuildingInArea((double)$filter['latitude'], (double)$filter['longitude'], (int)$filter['radius']);
                        if (count($buf)) {
                            $query_filter['building_id']  = $buf;
                        }
                    }
                }
            }
            if (isset($filter['name']) && strlen($filter['name']) > 0) {
                $buf = $this->_getFirmByName($filter['name']);
                if(count($buf)) {
                    $query_filter['id'] = $buf;
                }
            }
        }
        $page = (int)$page;
        $page = $page ? $page : 1;
        $limit = $this->container->getParameter('output')['list']['size'];
        $offset = ($page - 1) * $limit;
        $response = array();
        $response['list'] = array();
        $collection = $this->getDoctrine()->getRepository('StudyAppFirmBundle:Firm')->findBy(
            $query_filter,
            array('id' => 'asc'),
            $limit,
            $offset
        );

        foreach ($collection as $building) {
            $item = Tool::toArray($building);
            $response['list'][] = $item;
        }
        $response['total'] = current($this->getDoctrine()->getEntityManager()->createQuery('SELECT COUNT(c.id) FROM StudyAppFirmBundle:Firm AS c WHERE ' . $this->_decodeTotalFilter($query_filter))->getSingleResult());
        $response['page'] = $page;
        $response['items_per_page'] = $limit;
        if (!count($response['list'])) {
            return Tool::json404($response);
        }
        return Tool::json($response);
    }

    /**
     * Преобразует пары имя_поля => знаяение в фрагмент условия sql запроса
     * @param array $filter
    */
    private function _decodeTotalFilter($filter)
    {
        $buf = array();
        foreach ($filter as $key => $item) {
            if (is_string($item)) {
                $item = str_replace("'", '`', strval($item));
                $buf[] = "c.{$key} = '$item'";
            } elseif(is_array($item)) {
                $enum = array();
                foreach ($item as $i) {
                    $enum[] = "'" . str_replace("'", '`', strval($i)) . "'";
                }
                $item = join(',', $enum);
                $buf[] = "c.{$key} IN ($item)";
            }

        }
        return join(' AND ', $buf);
    }
    /**
     * @param double $latitude широта точки
     * @param double $longitude долгота точки
     * @param integer $radius расстояние вокруг точки
     * @return Массив идентификаторов зданий в области радиусом radius вокруг точки latitude, longitude
    */
    private function _getBuildingInArea($latitude, $longitude, $radius)
    {
        $latDegreeAsMetres = $this->container->getParameter('degreeAsMetres')['Moscow']['lat'];
        $lonDegreeAsMetres = $this->container->getParameter('degreeAsMetres')['Moscow']['lon'];
        $latRadius = $radius / $latDegreeAsMetres;
        $lonRadius = $radius / $lonDegreeAsMetres;
        $left   = $latitude - $latRadius;
        $right  = $latitude + $latRadius;
        $top    = $longitude - $lonRadius;
        $bottom = $longitude + $lonRadius;

        $result = $this->getDoctrine()->getEntityManager()->createQuery(
            "SELECT c.id FROM StudyAppLocationBundle:Building AS c WHERE c.latitude <= {$right} AND c.latitude >= {$left} AND c.longitude <= {$bottom} AND c.longitude >= {$top}")
            ->getResult();
        $data = array();
        foreach ($result as $item) {
            if (is_array($item) && isset($item['id'])) {
                $data[] = $item['id'];
            }
        }
        return $data;
    }
    /**
     * @param string $name
     * @return Массив идентификаторов зданий в области радиусом radius вокруг точки latitude, longitude
     */
    private function _getFirmByName($name)
    {
        $name = str_replace("'", '`', $name);
        $result = $this->getDoctrine()->getEntityManager()->createQuery(
            "SELECT c.id FROM StudyAppFirmBundle:Firm AS c WHERE c.name LIKE '%{$name}%'")
            ->getResult();
        $data = array();
        foreach ($result as $item) {
            if (is_array($item) && isset($item['id'])) {
                $data[] = $item['id'];
            }
        }
        return $data;
    }
    /**
     * Получить фирмы, входящие в определенные рубрики, заданную и в потомки заданной
     * @return array
    */
    private function _getFirmInRubric($rubricId)
    {
        $collection = $this->getDoctrine()->getRepository('StudyAppFirmBundle:Rubric')->findBy(
            ['is_accepted' => 1, 'is_deleted' => 0]
        );
        $tree = array();
        foreach ($collection as $model) {
            $tree[$model->getId()] = AppLib::toArray($model);
        }
        //собираем всех потомков рубрики
        foreach ($tree as $id => $node) {
            if ($node['parent_id'] > 0) {
                if (!isset($tree[ $node['parent_id'] ] ['children'])) {
                    $tree[ $node['parent_id'] ] ['children'] = array();
                }
                $tree[ $node['parent_id'] ] ['children'][$id] = 1;
            }
        }
        $set = array($rubricId);
        $i = 0;
        while (true) {
            if (isset($set[$i])) {
                $rubricId = $set[$i];
            } else {
                break;
            }
            if (isset($tree[$rubricId]['children'])) {
                $ids = array_keys($tree[$rubricId]['children']);
                $set = array_merge($set, $ids);
            }
            $i++;
        }

        //и получаем все фирмы, входящие в данные рубрики
        $collection = $this->getDoctrine()->getRepository('StudyAppFirmBundle:FirmRubricBind')->findBy(
            ['is_accepted' => 1, 'is_deleted' => 0, 'rubric_id' => $set]
        );
        $result = array();
        foreach ($collection as $model) {
            $result[] = $model->getId();
        }
        return $result;
    }
}

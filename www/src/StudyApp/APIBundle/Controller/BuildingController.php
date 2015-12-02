<?php
//Здания, информация о которых есть в сервисе

namespace StudyApp\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use StudyApp\LocationBundle\Entity\Building;
use \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use \StudyApp\StudyAppBundle\Utils\AppLib AS Tool;

class BuildingController extends Controller
{
    /**
     * @Route("/buildings", name="study_app_buildings", requirements={ "_method" : "GET" })
     * @Template()
     */
    public function indexAction()
    {
        return $this->pageAction(1);
    }
    /**
     * json
     * @Route("/buildings/page/{page}", name="study_app_buildings_page", requirements={ "_method" : "GET" })
     * Template("StudyAppAPIBundle:Default:index.html.twig")
    */
    public function pageAction($page, $form = null, $has_errors = false)
    {
        $page = (int)$page;
        $page = $page ? $page : 1;
        $limit = 10;
        $offset = ($page - 1) * $limit;
        $response = array();
        $response['list'] = array();
        $collection = $this->getDoctrine()->getRepository('StudyAppLocationBundle:Building')->findBy(
            [],
            array('id' => 'desc'),
            $limit,
            $offset
        );
        foreach ($collection as $building) {
            $item = Tool::toArray($building);
            $response['list'][] = $item;
        }
        $response['total'] = current($this->getDoctrine()->getEntityManager()->createQuery('SELECT COUNT(c.id) FROM StudyAppLocationBundle:Building AS c WHERE c.is_deleted = 0 AND c.is_accepted = 1')->getSingleResult());
        $response['page'] = $page;
        $response['items_per_page'] = $limit;
        if (!count($response['list'])) {
            return Tool::json404($response);
        }
        return Tool::json($response);
    }
}

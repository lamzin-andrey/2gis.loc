<?php
//Здания, информация о которых есть в сервисе

namespace StudyApp\APIBundle\Controller;

use StudyApp\StudyAppBundle\Utils\AppLib;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use StudyApp\FirmBundle\Entity\Rubric;
use \StudyApp\StudyAppBundle\Utils\AppLib AS Tool;

class RubricController extends Controller
{
    /**
     * json
     * @Route("/rubrics/{id}", name="study_app_rubrics_branch", requirements={ "_method" : "GET" })
     * Template("StudyAppAPIBundle:Default:index.html.twig")
    */
    public function treeAction($id)
    {
        $response = array();
        $response['tree'] = $this->_getTree($id);
        if (!count($response['tree'])) {
            return Tool::json404($response);
        }
        return Tool::json($response);
    }
    /**
     * @Route("/rubrics", name="study_app_rubrics", requirements={ "_method" : "GET" })
     * @Template()
     */
    public function indexAction()
    {
        return $this->treeAction(0);
    }

    /**
     * Получить дерево фирм
     * @return array
    */
    private function _getTree($rubricId)
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
            while ($node['parent_id'] > 0) {
                if (!isset($tree[ $node['parent_id'] ] ['children'])) {
                    $tree[ $node['parent_id'] ] ['children'] = array();
                }
                unset($node['is_moved']);
                $tree[ $node['parent_id'] ] ['children'][$id] = $node;
                $tree[$id]['is_moved'] = 1;
                $id = $node['parent_id'];
                $node = $tree[ $node['parent_id'] ];
            }
        }

        if ($rubricId > 0) {
            if (isset($tree[$rubricId])) {
                $tree = [$rubricId => $tree[$rubricId]];
            } else {
                return array();
            }
        }

        if ($rubricId == 0) {
            foreach ($tree as $id => $node) {
                if (isset($node['is_moved'])) {
                    unset($tree[$id]);
                }
            }
        }
        /*echo '<pre>';
        print_r($tree);
        echo '</pre>';
        die;*/
        return $tree;
    }
}

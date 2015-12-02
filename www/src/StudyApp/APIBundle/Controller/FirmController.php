<?php
//Здания, информация о которых есть в сервисе

namespace StudyApp\APIBundle\Controller;

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
     * @Route("/firms/page/{page}", name="study_app_firms_page", requirements={ "_method" : "GET" })
     * Template("StudyAppAPIBundle:Default:index.html.twig")
    */
    public function pageAction($page)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $filter = $request->get('filter');

        $query_filter = array();
        if (is_array($filter)) {
            if (isset($filter['building_id']) && (int)$filter['building_id'] > 0) {
                $query_filter['building_id'] = (int)$filter['building_id'];
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
        $response['total'] = current($this->getDoctrine()->getEntityManager()->createQuery('SELECT COUNT(c.id) FROM StudyAppLocationBundle:Building AS c WHERE c.is_deleted = 0 AND c.is_accepted = 1')->getSingleResult());
        $response['page'] = $page;
        $response['items_per_page'] = $limit;
        if (!count($response['list'])) {
            return Tool::json404($response);
        }
        return Tool::json($response);
    }
}

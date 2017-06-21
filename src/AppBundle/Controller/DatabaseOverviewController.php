<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DatabaseOverviewController
 * Controller that fetches all data from the database.
 * @package AppBundle\Controller
 */
class DatabaseOverviewController extends Controller
{
    /**
     * @Route("/overview", name="overview")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $salesorders = $this->getDoctrine()->getRepository('AppBundle:SalesOrders')->findAll();
        $items = $this->getDoctrine()->getRepository('AppBundle:Items')->findAll();
        $rep = $this->getDoctrine()->getRepository('AppBundle:Rep')->findAll();
        $region = $this->getDoctrine()->getRepository('AppBundle:Region')->findAll();

        return $this->render('default/overview.html.twig', array(
            'salesorders' => $salesorders,
            'items' => $items,
            'rep' => $rep,
            'region' => $region
        ));
    }
}

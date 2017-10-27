<?php

namespace TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('TiendaBundle:Cerveza');
        $cerveza = $repository->find(1);
        return $this->render('TiendaBundle:Default:index.html.twig',array("cerveza"=>$cerveza));
    }
}

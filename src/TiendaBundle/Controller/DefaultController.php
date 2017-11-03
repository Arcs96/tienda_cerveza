<?php

namespace TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TiendaBundle\Entity\Cerveza;

class DefaultController extends Controller
{
    /**
     * @Route("/listar", name="cervezas_listar")
     */
    public function listarAction()
    {
        $repository = $this->getDoctrine()->getRepository('TiendaBundle:Cerveza');
        $cerveza = $repository->find(1);
        return $this->render('TiendaBundle:Cerveza:listarCerveza.html.twig',array("cerveza"=>$cerveza));
    }

    /**
     * @Route("/insertar/{name}/{pais}/{poblacion}/{tipo}", name="cervezas_insertar")
     */
    public function insertarAction($name,$pais,$pobl,$tipo,$import=0,$medida=15,$fecha='2017-11-01',$cantidad=33)
    {
        // Nuevo objeto cerveza
        $cerveza = new Cerveza();
        $cerveza->setNombre($name);
        $cerveza->setPais($pais);
        $cerveza->setPoblacion($pobl);
        $cerveza->setTipo($tipo);
        $cerveza->setImportacion($import);
        $cerveza->setMedida($medida);
        $cerveza->setFechaAlmacenamiento($fecha);
        $cerveza->setCantidad($cantidad);
        $cerveza->setFoto('http://profesionalhoreca.com/wp-content/uploads/2015/01/Profesionalhoreca-cerveza-gredos.jpg');

        //Doctrine
        $mDoct=$this->getDoctrine()->getManager();
        $mDoct->persist($cerveza);
        $mDoct->flush($cerveza);

        return $this->render('TiendaBundle:Cerveza:insertarCerveza.html.twig',array("cerveza"=>$cerveza));
    }

    /**
     * @Route("/actualizar/{id}/{pobl}", name="cervezas_actualizar")
     */
    public function actualizarAction($id,$pobl)
    {
      $mDoct=$this->getDoctrine()->getManager();

      $cerveza = $mDoct->getRepository(Cerveza::class)->find($id);
      $cerveza->setPoblacion($pobl);
      $cerveza->setTipo('Tipo indefinido');

      $mDoct->flush($cerveza);
      return $this->redirectToRoute('cervezas_listar');
    }
}

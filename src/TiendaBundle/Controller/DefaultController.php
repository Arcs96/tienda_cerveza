<?php

namespace TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TiendaBundle\Entity\Cerveza;
use TiendaBundle\Form\CervezaType;
use Symfony\Component\HttpFoundation\Request;

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

    /**
     * @Route("/forminsert", name="forminsert")
     */
    public function formAction(Request $request)
    {
        $cerveza = new Cerveza();
        $form = $this->createForm(CervezaType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          // $form->getData() holds the submitted values
          // but, the original `$task` variable has also been updated
          $cerveza = $form->getData();

          // ... perform some action, such as saving the task to the database
          // for example, if Task is a Doctrine entity, save it!
          $em = $this->getDoctrine()->getManager();
          $em->persist($cerveza);
          $em->flush();

          return $this->redirectToRoute('formulario');
    }
        return $this->render('TiendaBundle:Cerveza:form.html.twig',array("form"=>$form->createView()));
    }

    /**
     * @Route("/formupdate/{id}", name="formupdate")
     */
    public function formUpdateAction(Request $request,$id)
    {
      $cerveza = $this->getDoctrine()->getRepository('TiendaBundle:Cerveza')->find($id);
      if(!$cerveza){return $this->redirectToRoute('cervezas_listar');}

      $form = $this->createForm(CervezaType::class,$cerveza);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()){
        $em = $this->getDoctrine()->getManager();
        $em->persist($cerveza);
        $em->flush();
        return $this->redirectToRoute('cervezas_listar');
      }
      return $this->render('TiendaBundle:Cerveza:form.html.twig',array("form"=>$form->createView()));
    }
}

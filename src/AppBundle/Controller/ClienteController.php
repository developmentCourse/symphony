<?php

namespace AppBundle\Controller;

use AppBundle\Document\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClienteController extends Controller
{
    /**
     * @Route("/cliente/crear", name="crear_cliente")
     */
    public function crearAction(Request $request)
    {
        return $this->render("Cliente/crear.html.twig");
    }
    /**
     * @Route("/api/cliente/crear", name="api_crear_cliente")
     */
    public function crearApiAction(Request $request)
    {
        //RECIBIMOS POR POST
        $nombre = $request->request->get('nombre');
        $apP = $request->request->get('apPaterno');
        $apM = $request->request->get('apMaterno');
        $cliente = new Cliente();
        $cliente->setNombre($nombre);
        $cliente->setApPaterno($apP);
        $cliente->setApMaterno($apM);
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($cliente);
        $dm->flush();
        return new Response("Cliente Guardado");
    }

    /**
     * @Route("/cliente/listar", name="listar_clientes")
     */
    public function listarAction(Request $request)
    {
        $id = "5fc7f0987342343c2a6db012";
        $clientes = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Cliente')
            ->findAll();
        return $this->render('Cliente/listar.html.twig',array(
            "clientes"=>$clientes
        ));
    }
    /**
     * @Route("/cliente/actualizar/{id}", name="actualizar_clientes")
     */
    public function actualizarAction($id, Request $request)
    {
        $cliente = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Cliente')
            ->find($id);
        return $this->render('Cliente/actualizar.html.twig',array(
            "cliente"=>$cliente
        ));
    }
    /**
     * @Route("/api/cliente/actualizar", name="api_actualizar_clientes")
     */
    public function actualizarApiAction(Request $request)
    {
        $id = $request->request->get('id');
        $nombre = $request->request->get('nombre');
        $apPaterno = $request->request->get('apPaterno');
        $apMaterno = $request->request->get('apMaterno');
        $cliente = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Cliente')
            ->find($id);

        $cliente->setNombre($nombre);
        $cliente->setApPaterno($apPaterno);
        $cliente->setApMaterno($apMaterno);
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($cliente);
        $dm->flush();
        return new Response('Datos Actualizados');
    }

    /**
     * @Route("/api/cliente/eliminar", name="api_eliminar_clientes")
     */
    public function eliminarApiAction(Request $request)
    {
        $id = $request->request->get('id');
        $cliente = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Cliente')
            ->find($id);

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->remove($cliente);
        $dm->flush();
        return new Response('Cliente Eliminado Correctamente');
    }

    /**
     * @Route("/cliente/listar2", name="listar_clientes2")
     */
    public function listar2Action(Request $request)
    {
        $clientes = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Cliente')
            ->buscarPorGeneroyEdad('M',10);

        return $this->render('Cliente/listar.html.twig',array(
            "clientes"=>$clientes
        ));
    }
    /**
     * @Route("/cliente/listar3", name="listar_clientes3")
     */
    public function listar3Action(Request $request)
    {
        $clientes2 = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Cliente')
            ->buscarPorGeneroyEdadA('M',10);
        return $this->render('Cliente/listar3.html.twig',array(
            "clientes"=>$clientes2
        ));
    }
}

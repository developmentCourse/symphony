<?php

namespace AppBundle\Controller;

use AppBundle\Document\Cliente;
use AppBundle\Document\Proyecto;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProyectoController extends Controller
{
    /**
     * @Route("/proyecto/crear", name="crear_proyecto")
     */
    public function crearAction(Request $request)
    {
        $clientes = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Cliente')
            ->findAll();
        return $this->render("Proyecto/crear.html.twig",array(
            "clientes" => $clientes,
        ));
    }
    /**
     * @Route("/api/proyecto/crear", name="api_crear_proyecto")
     */
    public function crearApiAction(Request $request)
    {
        //RECIBIMOS POR POST
        $nombre = $request->request->get('nombre');
        $descripcion = $request->request->get('descripcion');
        $idCliente = $request->request->get('cliente');
        $cliente = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Cliente')
            ->find($idCliente)
        ;
        $p = new Proyecto();
        $p->setNombre($nombre);
        $p->setDescripcion($descripcion);
        $p->setCliente($cliente);
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($p);
        $dm->flush();
        return new Response("Proyecto Guardado");
    }
    /**
     * @Route("/proyecto/listar", name="listar_proyecto")
     */
    public function listarAction(Request $request)
    {
        $proyectos = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Proyecto')
            ->findAll();
        return $this->render('Proyecto/listar.html.twig',array(
            "proyectos" => $proyectos,
        ));
    }
}

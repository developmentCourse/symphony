<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/saludo/{nombre}/{apellido}", name="saludar")
     */
    public function saludarAction($nombre, $apellido, Request $request){
        $saludo = "<html><body><h1>Hola Mundo!</h1></body></html>";

        return $this->render("demo/saludo.html.twig",array(
            "nombre" => $nombre,
            "apPaterno" => $apellido,
        ));
    }
    /**
     * @Route("/personas/listar", name="saludar")
     */
    public function listarAction(Request $request){

        $personas = array(
            ["nombre" => "Juan", "apellido" => "Perez"],
            ["nombre" => "Maria", "apellido" => "Cabrera"],
            ["nombre" => "Hernan", "apellido" => "Leyton"],
            ["nombre" => "Claudia", "apellido" => "Sanchez"],
        );

        return $this->render("demo/personas.html.twig",array(
            "personas" => $personas,
        ));
    }

    /**
     * @Route("/admin1", name="admin1")
     */
    public function admin1Action(Request $request){
        return new Response("<h1>Esta pagina es para administradores 1</h1>");
    }
    /**
     * @Route("/restringido1", name="restringido1")
     */
    public function restringido1Action(Request $request){
        if ($this->get('security.authorization_checker')
            ->isGranted('IS_AUTHENTICATED_FULLY')){
            $usuario = $this->getUser();
            return new Response("<h1>Esta pagina es para usuarios autenticados 1</h1>Bienvenido: ".$usuario->getUsername());
        }else{
            return new Response("ERROR, PERMISO DENEGADO");
        }

    }

    /**
     * @Route("/restringido2", name="restringido2")
     */
    public function restringido2Action(Request $request){

        $this->denyAccessUnlessGranted("IS_AUTHENTICATED_FULLY");

        return new Response("<h1>Esta pagina es para usuarios autenticados 1</h1>");

    }
}

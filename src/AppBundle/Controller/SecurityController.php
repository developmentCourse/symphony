<?php

namespace AppBundle\Controller;

use AppBundle\Document\Cliente;
use AppBundle\Document\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();
        return $this->render('User/login.html.twig',array(
            "last_username" => $lastUsername,
            "error" => $error
        ));
    }
    /**
     * @Route("/registroUsuario", name="registroUsuario")
     */
    public function registroAction(Request $request, AuthenticationUtils $authUtils)
    {
        return $this->render('User/registro.html.twig',array(
        ));
    }
    /**
     * @Route("/registroUsuario/completar", name="completar_registro_usuario")
     */
    public function completarRegistroAction(Request $request, UserPasswordEncoderInterface $pi)
    {
        $u = $request->request->get('_username');
        $p = $request->request->get('_password');
        $user = new User();
        $user->setUsername($u);
        $user->setIsActive(true);
        $password = $pi->encodePassword($user, $p);
        $user->setPassword($password);
        $user->setRoles(['ROLE_USER']);
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($user);
        $dm->flush();
        return new Response("Usuario Creado");
    }
}

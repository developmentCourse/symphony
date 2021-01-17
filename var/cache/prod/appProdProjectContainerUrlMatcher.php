<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/cliente')) {
            // crear_cliente
            if ('/cliente/crear' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ClienteController::crearAction',  '_route' => 'crear_cliente',);
            }

            if (0 === strpos($pathinfo, '/cliente/listar')) {
                // listar_clientes
                if ('/cliente/listar' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ClienteController::listarAction',  '_route' => 'listar_clientes',);
                }

                // listar_clientes2
                if ('/cliente/listar2' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ClienteController::listar2Action',  '_route' => 'listar_clientes2',);
                }

                // listar_clientes3
                if ('/cliente/listar3' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ClienteController::listar3Action',  '_route' => 'listar_clientes3',);
                }

            }

            // actualizar_clientes
            if (0 === strpos($pathinfo, '/cliente/actualizar') && preg_match('#^/cliente/actualizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizar_clientes')), array (  '_controller' => 'AppBundle\\Controller\\ClienteController::actualizarAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api/cliente')) {
                // api_crear_cliente
                if ('/api/cliente/crear' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ClienteController::crearApiAction',  '_route' => 'api_crear_cliente',);
                }

                // api_actualizar_clientes
                if ('/api/cliente/actualizar' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ClienteController::actualizarApiAction',  '_route' => 'api_actualizar_clientes',);
                }

                // api_eliminar_clientes
                if ('/api/cliente/eliminar' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ClienteController::eliminarApiAction',  '_route' => 'api_eliminar_clientes',);
                }

            }

            // api_crear_proyecto
            if ('/api/proyecto/crear' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProyectoController::crearApiAction',  '_route' => 'api_crear_proyecto',);
            }

            // admin1
            if ('/admin1' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::admin1Action',  '_route' => 'admin1',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // saludar
            if ('/personas/listar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listarAction',  '_route' => 'saludar',);
            }

            // crear_proyecto
            if ('/proyecto/crear' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProyectoController::crearAction',  '_route' => 'crear_proyecto',);
            }

            // listar_proyecto
            if ('/proyecto/listar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProyectoController::listarAction',  '_route' => 'listar_proyecto',);
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // restringido1
            if ('/restringido1' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::restringido1Action',  '_route' => 'restringido1',);
            }

            // restringido2
            if ('/restringido2' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::restringido2Action',  '_route' => 'restringido2',);
            }

            if (0 === strpos($pathinfo, '/registroUsuario')) {
                // registroUsuario
                if ('/registroUsuario' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registroAction',  '_route' => 'registroUsuario',);
                }

                // completar_registro_usuario
                if ('/registroUsuario/completar' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::completarRegistroAction',  '_route' => 'completar_registro_usuario',);
                }

            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

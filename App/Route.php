<?php

namespace App;

use MyFramework\Init\AppLaunch;

class Route extends AppLaunch
{
    protected function initRoutes()
    {
        /* Default code for route creation */
		$routes['home'] = array(
		    'path' => '/',
		    'controller' => 'RoutesController',
		    'action' => 'home'
		);
		
		/* You can create new routes here following the same pattern as above code */
		$routes['adm-livros'] = array(
		    'path' => '/adm-livros',
		    'controller' => 'RoutesController',
		    'action' => 'admLivros'
		);
		
		$routes['adm-clientes'] = array(
		    'path' => '/adm-clientes',
		    'controller' => 'RoutesController',
		    'action' => 'admClientes'
		);
		
		$routes['adm-reservas'] = array(
		    'path' => '/adm-reservas',
		    'controller' => 'RoutesController',
		    'action' => 'admReservas'
		);
		
		$routes['cadastra-cliente'] = array(
		    'path' => '/cadastra-cliente',
		    'controller' => 'ClientesController',
		    'action' => 'create'
		);
		
		$routes['cadastra-livro'] = array(
		    'path' => '/cadastra-livro',
		    'controller' => 'LivrosController',
		    'action' => 'create'
		);
		
		$routes['efetua-reserva'] = array(
		    'path' => '/efetua-reserva',
		    'controller' => 'ReservasController',
		    'action' => 'create'
		);
		
		$routes['module-delete'] = array(
		    'path' => '/module-delete',
		    'controller' => 'ModulesController',
		    'action' => 'delete'
		);
		
		$routes['module-create'] = array(
		    'path' => '/module-create',
		    'controller' => 'ModulesController',
		    'action' => 'create'
		);

        $this->setRoutes($routes);
    }
}

?>
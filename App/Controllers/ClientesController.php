<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class ClientesController extends Action
{
    public function create()
    {
        $cliente = Container::getModel('Cliente');

        $cliente->__set('nome', $_POST['nome']);
        $cliente->__set('email', $_POST['email']);
        $cliente->__set('telefone', $_POST['telefone']);
        $cliente->__set('cpf', $_POST['cpf']);

        $cliente->create();
        
        redirect('adm-clientes');
    }

    public static function read()
    {
        $cliente = Container::getModel('Cliente');

        return $cliente->read();
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public static function search()
    {
        $cliente = Container::getModel('Cliente');

        $search = $_POST['pesquisar'];
        
        return $cliente->search($search);
    }
}

?>
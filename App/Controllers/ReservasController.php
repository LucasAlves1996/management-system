<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class ReservasController extends Action
{
    public function create()
    {
        $reserva = Container::getModel('Reserva');

        $reserva->__set('data_retirada', $_POST['data_retirada']);
        $reserva->__set('data_devolucao', $_POST['data_devolucao']);
        $reserva->__set('id_cliente', $_POST['id_cliente']);
        $reserva->__set('id_livro', $_POST['id_livro']);

        $reserva->create();
        
        redirect('adm-reservas');
    }

    public function read()
    {
        $reserva = Container::getModel('Reserva');

        return $reserva->read();
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public static function atualizaStatus()
    {
        $reserva = Container::getModel('Reserva');

        $id = $_POST['id'];

        $reserva->atualizaStatus($id);
    }
}

?>
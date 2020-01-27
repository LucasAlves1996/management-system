<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class RoutesController extends Action
{
    private $siteName = "MinhaBiblioteca";

    public function home()
    {
        $modules = ModulesController::read();
        
        $this->view->dados = [
            'title'    => 'Início | '.$this->siteName,
            'modules'   => $modules
        ];
        $this->render('home', true);
    }
    
    public function admLivros()
    {
        if(isset($_POST['pesquisar'])){
            $livros = LivrosController::search();
        }
        else{
            $livros = LivrosController::read();
        }
        $this->view->dados = [
            'title' => 'Livros | '.$this->siteName,
            'livros' => $livros
        ];
        $this->render('adm-livros', true);
    }
    
    public function admClientes()
    {
        if(isset($_POST['pesquisar'])){
            $clientes = ClientesController::search();
        }
        else{
            $clientes = ClientesController::read();
        }
        $this->view->dados = [
            'title' => 'Clientes | '.$this->siteName,
            'clientes' => $clientes
        ];
        $this->render('adm-clientes', true);
    }
    
    public function admReservas()
    {
        if(isset($_POST['id'])){
            ReservasController::atualizaStatus();
        }
        if(isset($_POST['id_livro'])){
            LivrosController::atualizaStatus();
        }
        $reservas = ReservasController::read();
        $clientes = ClientesController::read();
        $livros = LivrosController::loadAvailableBooks();
        $this->view->dados = [
            'title' => 'Reservas | '.$this->siteName,
            'reservas' => $reservas,
            'clientes' => $clientes,
            'livros' => $livros
        ];
        $this->render('adm-reservas', true);
    }
    
    public function error($error)
    {
        $this->view->dados = [
            'title' => '404 | '.$this->siteName,
            'error' => $error
        ];
        $this->render('error', true);
    }
}

?>
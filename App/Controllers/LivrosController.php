<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class LivrosController extends Action
{
    public function create()
    {
        $livro = Container::getModel('Livro');

        $livro->__set('nome', $_POST['nome']);
        $livro->__set('editora', $_POST['editora']);
        $livro->__set('autor', $_POST['autor']);
        $livro->__set('img_localizacao', "App/Views/template/files/imgs/".$_FILES['img']['name']);

        $this->upload_img();

        $livro->create();
        
        redirect('adm-livros');
    }

    public function read()
    {
        $livro = Container::getModel('Livro');

        return $livro->read();
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function upload_img()
    {
        $uploadDir = 'App/Views/template/files/imgs/';
        $uploadFile = $uploadDir.$_FILES['img']['name'];

        move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile);
    }

    public static function search()
    {
        $livro = Container::getModel('Livro');

        $search = $_POST['pesquisar'];
        
        return $livro->search($search);
    }

    public static function loadAvailableBooks()
    {
        $livro = Container::getModel('Livro');

        return $livro->loadAvailableBooks();
    }

    public static function atualizaStatus()
    {
        $livro = Container::getModel('Livro');

        $id = $_POST['id_livro'];

        $livro->atualizaStatus($id);
    }
}

?>
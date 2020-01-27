<?php

namespace App\Models;

use MyFramework\Model\Model;

class Livro extends Model
{
    private $id;	
    private $nome;	
    private $editora;	
    private $autor;	
    private $img_localizacao;

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    public function create()
    {
        $sql = "INSERT INTO livros (nome,editora,autor,img_localizacao) VALUES (:nome,:editora,:autor,:img_localizacao)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome',$this->__get('nome'));
        $stmt->bindValue(':editora',$this->__get('editora'));
        $stmt->bindValue(':autor',$this->__get('autor'));
        $stmt->bindValue(':img_localizacao',$this->__get('img_localizacao'));
        $stmt->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM livros";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function loadAvailableBooks()
    {
        $sql = "SELECT * FROM livros WHERE status = 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function search($search)
    {
        $sql = "SELECT * FROM livros WHERE nome LIKE '%$search%' LIMIT 5";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function atualizaStatus($id)
    {
        $sql2 = "UPDATE livros SET status = 1 WHERE id = ".$id."";
        $stmt2 = $this->db->prepare($sql2);
        $stmt2->execute();
    }
}

?>
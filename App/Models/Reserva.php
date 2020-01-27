<?php

namespace App\Models;

use MyFramework\Model\Model;

class Reserva extends Model
{
    private $id;	
    private $data_retirada;	
    private $data_devolucao;	
    private $id_cliente;	
    private $id_livro;

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
        $sql = "INSERT INTO reservas (data_retirada,data_devolucao,id_cliente,id_livro) VALUES (:data_retirada,:data_devolucao,:id_cliente,:id_livro)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':data_retirada',$this->__get('data_retirada'));
        $stmt->bindValue(':data_devolucao',$this->__get('data_devolucao'));
        $stmt->bindValue(':id_cliente',$this->__get('id_cliente'));
        $stmt->bindValue(':id_livro',$this->__get('id_livro'));
        $stmt->execute();

        $sql2 = "UPDATE livros SET status = 0 WHERE id = ".$this->__get('id_livro')."";
        $stmt2 = $this->db->prepare($sql2);
        $stmt2->execute();
    }

    public function read()
    {
        $sql = "SELECT r.id, r.data_retirada, r.data_devolucao, r.status, c.nome AS nome_cliente, l.id AS id_livro, l.nome AS nome_livro
        FROM reservas AS r
        INNER JOIN clientes AS c ON r.id_cliente = c.id
        INNER JOIN livros AS l ON r.id_livro = l.id
        ORDER BY r.id";
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

    public function atualizaStatus($id)
    {
        $sql2 = "UPDATE reservas SET status = 0 WHERE id = ".$id."";
        $stmt2 = $this->db->prepare($sql2);
        $stmt2->execute();
    }
}

?>
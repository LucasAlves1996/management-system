<?php

namespace App\Models;

use MyFramework\Model\Model;

class Cliente extends Model
{
    private $id;	
    private $nome;	
    private $email;	
    private $telefone;	
    private $cpf;

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
        $sql = "INSERT INTO clientes (nome,email,telefone,cpf) VALUES (:nome,:email,:telefone,:cpf)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome',$this->__get('nome'));
        $stmt->bindValue(':email',$this->__get('email'));
        $stmt->bindValue(':telefone',$this->__get('telefone'));
        $stmt->bindValue(':cpf',$this->__get('cpf'));
        $stmt->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM clientes";
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
        $sql = "SELECT * FROM clientes WHERE nome LIKE '%$search%' LIMIT 5";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
}

?>
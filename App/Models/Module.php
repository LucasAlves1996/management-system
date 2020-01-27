<?php

namespace App\Models;

use MyFramework\Model\Model;

class Module extends Model
{
    public function create($post)
    {
        //createRoute();

        //createAction();

        createFile($post['module_view']);

        $sql = "INSERT INTO modules VALUES (null,".getArrayContent($post).")";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM modules";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update()
    {

    }

    public function delete($post)
    {
    	$sql = "DELETE FROM modules WHERE module_id IN (".getArrayContent($post).")";
    	$stmt = $this->db->prepare($sql);
    	$stmt->execute();
    }
}

?>
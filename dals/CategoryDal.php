<?php
require_once 'DB.php';
require_once 'ICrud.php';

class CategoryDal extends DB implements ICrud
{
    public function __construct()
    {
        //gọi lên constructor của thằng cha
        parent::__construct();
        $this->setTableName('category');
    }

    function add($payload)
    {
        // TODO: Implement add() method.
        $prps = $this->db->prepare("INSERT INTO $this->tableName(name) VALUES (:name)");
        $prps->bindParam(":name", $payload['name']);
        try {
            $prps->execute();
        } catch (Exception $exception) {
            return false;
        }
        return true;
    }

    function update($id, $payload)
    {
        // TODO: Implement update() method.
        $prps = $this->db->prepare("UPDATE $this->tableName SET name = :name WHERE id=:id");
        $prps->bindParam(":name", $payload['name']);
        $prps->bindParam(":id", $id);
        try {
            $prps->execute();
        } catch (Exception $exception) {
            return false;
        }
        return true;
    }

    function listAll($page = 1)
    {
        // TODO: Implement listAll() method.
        //thuật toán phân trang
        //LIMIT offset, rows
        //offset = (page-1) * rows
        //(1-1) * rows =0
        //(2-1) * rows =10
        //(3-1) * rows =20
        $offset = ($page - 1) * 10;
        $rs = $this->db->query("SELECT * FROM $this->tableName LIMIT $offset,10");
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
        // TODO: Implement update() method.
        $prps = $this->db->prepare("DELETE FROM $this->tableName WHERE id=:id");
        $prps->bindParam(":id", $id);
        try {
            $prps->execute();
        } catch (Exception $exception) {
            return false;
        }
        return true;
    }

    public function getCount()
    {
        // TODO: Implement getCount() method.
        $rs = $this->db->query("SELECT COUNT(*) as total FROM $this->tableName");
        return $rs->fetchObject();
    }

}
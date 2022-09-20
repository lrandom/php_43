<?php
require_once 'DB.php';
require_once 'ICrud.php';

class ProductDal
    extends DB implements ICrud
{
    public function __construct()
    {
        //gọi lên constructor của thằng cha
        parent::__construct();
        $this->setTableName('products');
    }

    function add($payload)
    {
        // TODO: Implement add() method.
        $prps = $this->db->prepare("INSERT INTO $this->tableName(name) VALUES (:name,:price,:content)");
        $prps->bindParam(":name", $payload['name']);
        $prps->bindParam(":price", $payload['price']);
        $prps->bindParam(":content", $payload['content']);
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
        $prps = $this->db->prepare("UPDATE $this->tableName SET name = :name,content=:content,
                 price=:price WHERE id=:id");
        $prps->bindParam(":name", $payload['name']);
        $prps->bindParam(":price", $payload['price']);
        $prps->bindParam(":content", $payload['content']);
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
}


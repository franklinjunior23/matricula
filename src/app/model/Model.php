<?php

namespace App\Model;

use App\Config\Config;
use PDO;

class Model extends Config
{
    private $conn;
    private $db;
    public function __construct()
    {
        $this->conn = new Config();
        $this->db = $this->conn->getConnect();
    }
    protected  function GetAll($table)
    {
        $sql = $this->db->query(" SELECT * FROM $table ;");
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    protected function GetOne($table, $id)
    {
        $sql = $this->db->query("SELECT * FROM $table WHERE dni = $id");
        $result = $sql->fetch();
        return $result;
    }
    protected function Create($table, $data)
    {
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO `$table` ($columns) VALUES ($values)";
        $stmt = $this->db->prepare($sql);

        $stmt->execute(array_values($data));

        $insertedRows = $stmt->rowCount();
        return $insertedRows > 0 ? 1 : 0;
    }
    protected function DeletOne($table, $id)
    {
        $sql = $this->db->query("DELETE FROM `$table` WHERE `$table`.`id` = $id");
        $result = $sql;
        return $result;
    }
    protected function Update($table, $data, $condition)
    {
        $setValues = [];
        foreach ($data as $key => $value) {
            $setValues[] = "$key = ?";
        }
        $setClause = implode(',', $setValues);

        $sql = "UPDATE `$table` SET $setClause WHERE $condition";
        $stmt = $this->db->prepare($sql);

        $stmt->execute(array_values($data));

        $updatedRows = $stmt->rowCount();
        return $updatedRows > 0 ? 1 : 0;
    }
}

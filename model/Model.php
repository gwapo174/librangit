<?php
require("../database/database.php");
class Model{
 
    public $name;
    public $email;
    public $username;
    public $password;
    private $db;
    private $tablename = "user";

    public function __construct(){
        $this->db = new database();
    }

    public function insertC5(){
        $sql = "INSERT INTO $this->tablename (name, email,username,password) VALUES('$this->name')"; //case #5
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }
    public function insert(){
       
        $sql = "INSERT INTO $this->tablename (name, email,username,password) VALUES('$this->name','$this->email','$this->username', '$this->password')";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    public function update(){
       $sql = "UPDATE user set password = '$this->password' where id = $this->id";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    public function delete(){
        $sql = "DELETE from $this->tablename where id = $this->id";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    
    public function __destruct(){
        unset($this->db);
    }
}


?>
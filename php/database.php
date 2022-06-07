<?php

class db{

protected $host;
protected $user;
protected $pass;
protected $db;
public $db_object;

function __construct($host,$user,$pass,$db){
    $this->host = $host;
    $this->user = $user;
    $this->pass = $pass;
    $this->db = $db;
   $this->db_object =  new mysqli($this->host,$this->user,$this->pass,$this->db);
   if($this->db_object->connect_error)
   {
       die("Database error !");
   }
   else
   {
     // echo "Success !";
   }
}


}

$db = new db('localhost','root','','crud');


?>
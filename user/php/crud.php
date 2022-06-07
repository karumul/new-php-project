<?php 

require_once "../../php/database.php";



class Crud {
    
    protected $name;
    protected $age;
    protected $mobile;
    protected $subject;
    protected $data;
    protected $pre;
    protected $query;
    protected $mysql;
    protected $message;
    public $user_data  = array();
    public $outside_data = array();

    function __construct(){

        
        
         

        $db = new db('localhost','root','','crud');
        $this->mysql = $db->db_object;
        $this->message;
        
        if($_SERVER['REQUEST_METHOD']=="POST" && (!isset($_POST['id'])))
        {
        $this->name = htmlspecialchars(trim($_POST['name']));
        $this->mobile = htmlspecialchars(trim($_POST['mobile']));
        $this->age = htmlspecialchars(trim($_POST['age']));
        $this->subject = htmlspecialchars(trim($_POST['subject']));
       
        $this->store_data();
        }


        if($_SERVER['REQUEST_METHOD']=="GET")
        {
        $this->get_data();
        }


        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['update']))
        {
        $this->update_data();
        }


        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['id']) && ! isset($_POST['update']))
        {
        $this->remove_data();
        }


    }
    //store data
    private function store_data(){
       
       
        $this->result = $this->mysql->query("SHOW TABLES FROM crud LIKE '%users%'");
         
          if($this->result->num_rows != 0) {
            $this->pre = $this->mysql->prepare("INSERT INTO users(namee,mobile,age,subjectt) VALUES(?,?,?,?)");
            $this->pre->bind_param("siis",$this->name,$this->mobile,$this->age,$this->subject);
            if($this->pre->execute())
            {
                $this->message =  "Data store !";
            }
            else
            {
                $this->message =  "Failed to store!";
            } 
        }
        else
        {
            $this->query = "CREATE TABLE users(
                id INT(10) NOT NULL AUTO_INCREMENT,
                namee VARCHAR(100),
                mobile INT(20),
                age INT(10),
                subjectt VARCHAR(100),
                PRIMARY KEY(id)
                  )";

if($this->mysql->query($this->query))
{
 $this->pre = $this->mysql->prepare("INSERT INTO users(namee,mobile,age,subjectt) VALUES(?,?,?,?)");
 $this->pre->bind_param("siis",$this->name,$this->mobile,$this->age,$this->subject);
 if($this->pre->execute())
 {

     $this->message =  "Data store !";

 }
 else
 {
     $this->message =  "Failed to store!";
 }
}
else
{
    $this->message =  "Failed to create table !"; 
}
        }
      echo  json_encode($this->message);
    }




    private function get_data(){
        $this->result = $this->mysql->query("SELECT *  FROM users LIMIT 5 ");
        while($this->data  = $this->result->fetch_assoc())
        {
            //$this->user_data =  $this->data;
          array_push($this->user_data,$this->data);
 
       
        }
        echo  json_encode($this->user_data);
        
    }

    private function update_data(){

        $this->name = htmlspecialchars(trim($_POST['name']));
        $this->mobile = htmlspecialchars(trim($_POST['mobile']));
        $this->age = htmlspecialchars(trim($_POST['age']));
        $this->subject = htmlspecialchars(trim($_POST['subject']));
        $id =  (int)$_POST['id'];
       
        $this->result = $this->mysql->query("UPDATE users SET namee ='$this->name', mobile='$this->mobile',age='$this->age',subjectt='$this->subject' WHERE id = '$id'"); //error

         if($this->result)
         {
            $this->message =  "Updated !"; 
         }
         else
         {
            $this->message =  "Failed to update !"; 
         }
         echo json_encode($this->message);
    }




    private function remove_data(){
        $id =  $_POST['id'];
        $this->query = "DELETE FROM users WHERE id=$id";
      if($this->mysql->query($this->query))
      {
          $this->message = "Delete success !";
      }

    echo json_encode($this->message);
       
    }
    
}


$s_object = new Crud();


?>
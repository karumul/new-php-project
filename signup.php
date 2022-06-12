<?php


require_once "php/database.php";
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['full_name'];
// echo "<br>";
// echo $_POST['password'];
// echo "<br>";
// echo $_POST['con_password'];


$emt_array = array();
$validate_array = array();
$data = array();

//Check username empty
if(empty(trim($_POST['email'])))
{
$username_error = "Please enter username";
array_push($emt_array,$username_error);
}
else
{

$email =  mysqli_real_escape_string($db->db_object,$_POST['email']);
// Function to validate email using regular expression
function email_validation($email) {
    return (!preg_match(
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email))
        ? FALSE : TRUE;
}

// Function call validation email
if(!email_validation($email)) {
    $e_validate =  "Invalid email !";
   // echo "In_Valid";
    array_push($validate_array,$e_validate);
}
else {
   // echo "Valid !";
    $e_validate =  "Valid mail !"; 
    array_push($validate_array,$e_validate);    
}
}
  




//Validate full name
if(empty(trim($_POST['full_name'])))
{
    $full_name_error = "Please enter your full name!";
    array_push($emt_array,$full_name_error);
}
else
{
    $full_name =  mysqli_real_escape_string($db->db_object,$_POST['full_name']);

    //Minimum eight characters, at least one letter and one number:
    if(preg_match("^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$^",$full_name))
    {
        $fullname_errror = "Valid fullname !";
        array_push($validate_array,$fullname_errror);
    }
    else
    {
        $fullname_errror = "Invalid fullname !";
        array_push($validate_array,$fullname_errror);
    }
}

  



//check password
if(empty(trim($_POST['password'])))
{
    $password_error = "Please enter your password";
    array_push($emt_array,$password_error);
}
else
{
    $password =  mysqli_real_escape_string($db->db_object,$_POST['password']);

    //Minimum eight characters, at least one letter and one number:
    if(preg_match("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$^",$password))
    {
        $p_error = "pass_valid !";
        array_push($validate_array,$p_error);
    }
    else
    {
        $p_error = "pass_invalid !";
        array_push($validate_array,$p_error);
    }
}


//check con_password
if(empty(trim($_POST['con_password'])))
{
$c_password_error = "Please enter your con_password";
array_push($emt_array,$c_password_error);
}
else
{
$con_password =  mysqli_real_escape_string($db->db_object,$_POST['con_password']);

   //Minimum eight characters, at least one letter and one number:
if(preg_match("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$^",$con_password))
{
    $c_p_error = "con_pass_valid !";
    array_push($validate_array,$c_p_error);
}
else
{
    $c_p_error = "con_pass_invalid !".$con_password;
    array_push($validate_array,$c_p_error);
}
}


$data = [$validate_array,$emt_array];

if(empty($emt_array))
{
  if($validate_array[0]==="Valid mail !" && $validate_array[1]==="Valid fullname !" && $validate_array[2]==="pass_valid !" && $validate_array[3]==="con_pass_valid !")
  {      
    $s_object = new Signup($data);
    $s_object->signup_user();
  }
}








class Signup {
protected $email;
protected $f_name;
protected $pass;
protected $con_password;
protected $result;
protected $data;
protected $pre;
protected $query;
protected $mysql;
protected $message;
public $inside_data  = array();
public $outside_data = array();



function __construct($data){
    $db = new db('localhost','root','','crud');
    $this->mysql = $db->db_object;
    $this->message;
    $this->outside_array = $data;
}

public function signup_user(){
    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
        $this->email = htmlspecialchars(trim($_POST['email']));
        $this->f_name = htmlspecialchars(trim($_POST['full_name']));
        $this->pass = htmlspecialchars(trim($_POST['password']));
        $this->con_password = htmlspecialchars(trim($_POST['con_password']));
        $this->pass =   password_hash($this->pass,PASSWORD_DEFAULT);
        $this->con_password = password_hash($this->con_password,PASSWORD_DEFAULT);
      
    
    
        $this->result = $this->mysql->query("SHOW TABLES  FROM crud");
            if($this->result->num_rows != 0) {
                $this->result = $this->mysql->query("SELECT *  FROM profilee");
                while($this->data  = $this->result->fetch_assoc())
                {
                    //print_r($this->data);
                    if($this->data['email'] ==$this->email)
                    {
                         $this->message = "User already exit !";
                         array_push($this->inside_data,$this->message);
              array_push($this->outside_data,$this->inside_data);
              echo    json_encode($this->outside_data);
                        exit;
                    }
                }
            
                 $this->pre = $this->mysql->prepare("INSERT INTO profilee(f_name,email,passwordd,con_passwordd) VALUES(?,?,?,?)");
                 $this->pre->bind_param("ssss",$this->f_name,$this->email,$this->pass,$this->con_password);
                 if($this->pre->execute())
                 {
                     $this->message =  "Signup success !";
                    
                 }
                 else
                 {
                     $this->message =  "Signup failed !";
                 }
            }
            else
            {
                $this->query = "CREATE TABLE profilee(
                    id INT(10) NOT NULL AUTO_INCREMENT,
                    f_name VARCHAR(200),
                    email VARCHAR(80),
                    passwordd VARCHAR(200),
                    con_passwordd VARCHAR(200),
                    PRIMARY KEY(id)
                      )";
                      if($this->mysql->query($this->query))
                      {
                       $this->pre = $this->mysql->prepare("INSERT INTO profilee(f_name,email,passwordd,con_passwordd) VALUES(?,?,?,?)");
                       $this->pre->bind_param("ssss",$this->f_name,$this->email,$this->pass,$this->con_password);
                       if($this->pre->execute())
                       {
               
                           $this->message =  "Signup success !";
    
                       }
                       else
                       {
                           $this->message =  "Signup failed !";
                       }
                      }
                      else
                      {
                          $this->message =  "Failed to create table !"; 
                      }
            }
//return false;
    }
    
     //$data(json_encode(array($this->message)));
     array_push($this->inside_data,$this->message);
     array_push($this->outside_data,$this->inside_data);
     echo    json_encode($this->outside_data);
     exit;
}
}


$data = [$validate_array,$emt_array];
echo json_encode($data);









?>
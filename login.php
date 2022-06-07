<?php

require_once "php/database.php";

header('Access-Control-Allow-Origin: *');


session_start();

// echo $_POST['email'];
// echo "<br>";
// echo $_POST['password'];
// echo "<br>";
// echo $_POST['con_password'];



$emt_array = array();
$validate_array = array();


//Check username empty
if(empty(trim($_POST['email'])))
{
$username_error = "Please enter username ";
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
  


// Function call
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

  



//check password
if(empty(trim($_POST['password'])))
{
    $password_error = "Please enter your password";
    array_push($emt_array,$password_error);
}
else
{
    $password =  mysqli_real_escape_string($db->db_object,$_POST['password']);
   
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

if(preg_match("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$^",$con_password))
{
    $c_p_error = "con_pass_valid !";
    array_push($validate_array,$c_p_error);
}
else
{
    $c_p_error = "con_pass_invalid !";
    array_push($validate_array,$c_p_error);
}
}

$data = array($validate_array,$emt_array);


if(empty($emt_array))
{
  if($validate_array[0]==="Valid mail !" && $validate_array[1]==="pass_valid !" && $validate_array[2]==="con_pass_valid !")
  {
     new userlogin($email,$password,$con_password,$db,$data);
  }
}













class userlogin {

    private  $email;
    private $password;
    private $con_password;
    private $sql;
    private $stmt;
    private $result;
    private $row;
    private $db;
    public $inside_data  = array();
    public $outside_data;
    public $new_array = array();



   function __construct($email,$password,$con_password,$db,$data){
    
        $this->email = $email;
        $this->password = $password;
        $this->con_password = $con_password;
        $this->db = $db->db_object;
        $this->outside_data = $data;

        

        $this->login();



   }
   

   public  function login(){

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
            // echo $email."<br>";
            // echo $password."<br>";
            // echo $con_password;
            $this->sql = "select id,email,passwordd,con_passwordd from profilee where email=?";
            $this->stmt = $this->db->prepare($this->sql);
            $this->stmt->bind_param("s",$this->email);
             $this->stmt->execute();
            $this->result = $this->stmt->get_result();
            $this->row = $this->result->fetch_assoc();
            if($this->row['email'] ===$this->email)
            {
              if(password_verify($this->password,$this->row['passwordd'])) 
              {
                
                if(password_verify($this->con_password,$this->row['con_passwordd']))
                {
                   
                    
                   

                    $this->message = "User login !";
                   

                    $_SESSION['user_email'] = $this->email;

                 

                }
                else
                {
                     $this->message = "Con_password wrong !";
                } 
          
              }
              else
              {
                 $this->message = "Password wrong !";
              }
            }
            else
            {
                 $this->message = "Wrong username !";
            }
    
        // $email =  mysqli_real_escape_string($db->db_object,$_POST['email']);
        // $password =  mysqli_real_escape_string($
        //db->db_object,$_POST['password']);
        // $con_password =  mysqli_real_escape_string($db->db_object,$_POST['con_password']);
    }
         array_push($this->inside_data,$this->message);
        // array_push($this->outside_data,$this->inside_data);
     $this->inside_array =    array(array_replace($this->outside_data,$this->inside_data));
          
         echo    json_encode(array($this->inside_array));


         exit;

    }

  
}

$data = array($validate_array,$emt_array);
echo json_encode($data);




$db = new db('localhost','root','','test');
//print_r($db->db_object);


?>
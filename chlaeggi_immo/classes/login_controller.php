<?php
/**
 * Klasse für das Login Handling
 */
class LoginController{

  private $username="";
  private $password=""; 

  public function initialise($username, $password){
    $myusername=$username;
    $mypassword=$password;
  }
  
  public funtion check(){
    //Connect to a file with the username and pw as a hashvalue and get them
    //TODO

    // If result matched $myusername and $mypassword, table row must be 1 row
    
    if($count==1){
    	// Register $myusername, $mypassword and redirect to file "login_success.php"
    	session_register("myusername");
    	session_register("mypassword"); 
    }
    else {
    	echo "Wrong Username or Password";
    }
    
    //TODO Rueckgabewert anpassen
    return true;
  }
?>

<?php
// define variables and set to empty values
$name = $email = $gender = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      echo "Name is required<br/>";
    } 
    
    if ( empty($_POST["email"]) || strpos($_POST["email"], '@')==false ) {
      echo "Email is required<br/>";
    }
      
    if(!empty($_POST["password"])) {
        $password = test_input($_POST["password"]);

        if(!preg_match("#[0-9]+#",$password)) {
            echo "you must enter at least one number<br/>";
        }
    }else{
      echo "Password is required<br/>";
    }

    if (empty($_POST["gender"])) {
      echo "Gender is required<br/>";
    }
}

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

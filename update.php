
<?php
 
 session_start();
$servername = "localhost";
$username = "root";
$password = "12345678";
$db = "premier";
$conn = new mysqli($servername, $username, $password ,$db);

 $user_name = $_POST["name"];
 $user_team = $_POST["team"];
 $user_id = $_POST["username"];
 $pw = $_SESSION["pass"];
 if($user_team == "Select your favourite team"){
  $user_team="-";
}
 $sql = "UPDATE users SET user_name='$user_name' WHERE user_pw='$pw'"; 
 $sql3 = "UPDATE users SET user_id='$user_id' WHERE user_pw='$pw'"; 
 $sql4 = "UPDATE users SET user_team='$user_team' WHERE user_pw='$pw'"; 
 
 if($conn->query($sql) === TRUE  &&$conn->query($sql3) === TRUE &&$conn->query($sql4) === TRUE  ){  
  $_SESSION["username"] = $user_id;
    $_SESSION["name"] = $user_name;
    $_SESSION["team"] = $user_team; 
    session_start(); 
    $loc = $_SESSION["username"];
   header("Location: profile.php/?user_id=$loc");
  } 
  else{   
    
    echo'<script language = "javascript">';
    echo'alert("This username is already exist");';
    echo'window.location.href="edit.php";';
    echo'</script>';

  }?>
 



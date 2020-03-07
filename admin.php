<?php 

$servername = "localhost";
$username = "root";
$password = "12345678";
$db = "premier";

// Create connection
$conn = new mysqli($servername, $username, $password ,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    
    $user_name = $_POST["name"];
    $user_email = $_POST["email"];
    $user_id = $_POST["username"];
    $user_team = $_POST["team"];
    $user_password = $_POST["password"];
    $user_pp = "img/profile.jpg";
  
    if($user_team == "Select your favourite team"){
        $user_team="-";
    }
    $add = "INSERT INTO users (user_name, user_email, user_id, user_team, user_pw, user_pp) VALUES ('$user_name','$user_email','$user_id','$user_team','$user_password','$user_pp')";
    if ($conn->query($add)) {
        echo'<script language = "javascript">';
        echo'alert("Registration is completed.");';
        echo'window.location.href="index.php";';
        echo'</script>';
    } 
    else{
        echo'<script language = "javascript">';
        echo'alert("Registration is uncompleted !!");';
        echo'window.location.href="register.html";';
        echo'</script>';

    }
   

    // $conn->close();
}


?>
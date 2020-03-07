<?php
session_start();
$user = $_SESSION["username"];
$servername = "localhost";
$username = "root";
$password = "12345678";
$db = "premier";
$db=new mysqli($servername, $username, $password ,$db);
if($db->connect_errno){
echo $db->connect_error;
}
else{
    $pull="SELECT * from topic where user_id='$user'";

    $allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
    $extension = @end(explode(".", $_FILES["file"]["name"]));
    if(isset($_POST['pupload'])){
        

    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/JPG")
    || ($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "image/pjpeg"))
    && in_array($extension, $allowedExts))
    {
     if ($_FILES["file"]["error"] > 0)
     {
     echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
     }
     else
     {
     if (file_exists("upload/" . $_FILES["file"]["name"]))
     {
     unlink("upload/" . $_FILES["file"]["name"]);
     }
     else{
     $pic=$_FILES["file"]["name"];
     $conv=explode(".",$pic);
     $ext=$conv['1'];
     move_uploaded_file($_FILES["file"]["tmp_name"],"upload/". $user.".".$ext);
     $url=$user.".".$ext;
     $query="UPDATE users set user_pp='$url' where user_id='$user'";
     if($upl=$db->query($query)){
        session_start(); 
        $_SESSION["pp"]=$url;
        echo'<script language = "javascript">';
        echo'window.location.href="profile.php";';
        echo'</script>';
     }
     }
     }
    }
    }
    ?>
   
<?php } ?>
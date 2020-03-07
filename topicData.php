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
    
    $title = $_POST["title"];
    $cat = $_POST["category"];
    $photo = $_POST["file"];
    $content = $_POST["content"];
    session_start();
    $user_id = $_SESSION["id"];
    
    $add = "INSERT INTO topic (category, title, text, user_id) VALUES ('$cat','$title','$content','$user_id')";
    if ($conn->query($add)) {
        $sql="SELECT * FROM topic WHERE title='$title'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $user = $row["id"];



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
         if (file_exists("postPhoto/" . $_FILES["file"]["name"]))
         {
         unlink("postPhoto/" . $_FILES["file"]["name"]);
         }
         else{
         $pic=$_FILES["file"]["name"];
         $conv=explode(".",$pic);
         $ext=$conv['1'];
         move_uploaded_file($_FILES["file"]["tmp_name"],"postPhoto/". $user.".".$ext);
         $url=$user.".".$ext;
        
        $query="UPDATE topic set post_photo='27.jpg' where title='$title'";
         
         if($upl=$db->query($query)){
            echo$url;
            
             header("Location: index.php");
         }
        }
    }
    } 
}
    }
    else{
        

    }
    }


   

    // $conn->close();}


?>
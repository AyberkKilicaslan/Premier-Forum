<?php
 
 session_start();
 ob_start();
$servername = "localhost";
$username = "root";
$password = "12345678";
$db = "premier";
$conn = new mysqli($servername, $username, $password ,$db);

session_start();

// giriş formundan gelen kullanıcı adı (kuladi) ve şifre(sifre) değişkenlere atıyoruz
$email=$_POST['email'];
$password=$_POST['password'];

//kullanıcı adı ve şifeyi sorguluyoruz
$sql="SELECT * FROM users WHERE user_email='$email' and user_pw='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//Eğer sorgulanan kullanıcı adı var ise bir oturum oluşturup home.php ye yönlendiriyoruz
//Yok ise hata verdiriyoruz.

if(mysqli_num_rows($result) == 1)
{
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $email;
    $_SESSION["pass"] = $password;
    $_SESSION["username"] = $row["user_id"];
    $_SESSION["name"] = $row["user_name"];
    $_SESSION["team"] = $row["user_team"];
    $_SESSION["date"] = $row["user_date"];
    $_SESSION["pp"] = $row["user_pp"];
    $_SESSION["id"] = $row["id"];




header("location: index.php");
}
else{
    $number = 0;
}

ob_end_flush();
?>
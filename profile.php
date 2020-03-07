<!doctype html>
<html lang="en">


  <!--------------------Head (meta/title/css files)-------------------------------->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" >
    <script src="https://kit.fontawesome.com/45222797f9.js"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" >
    <link rel="stylesheet" href="../css/forum.css" type="text/css" >

    <title>Premier Forum</title>
  </head>

  <!------------------------------------Body----------------------------------->


  <body  >
        
    <!----up navbar section(gif)-->
        <div class="first-div">
           <a href="#">
               <img class="head-image" src="../img/bpl logo.png"alt="pl header"></a>
        </div>
     
     
               
        <?php  session_start(); if(isset($_SESSION["login"])) {      //LOGIN IF............ ?>   
        
  <!--NAV BAR SECTION--------->
  <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:#4ff6c8ff ;">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nvbCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#" class="navbar-brand mb-0 h1" style="color:#ec4e5aff">Premier Forum</a>
        
        <div class="collapse navbar-collapse" id="nvbCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.php"><i class="fa fa-fw fa-home"></i> Homepage</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="../index.php"><i class="fab fa-wpforms"></i> Forum</a>
                </li>
                
                  <li class="nav-item dropdown">
                                        <a href="http://www.jquery2dotnet.com" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile </a>
                                        <ul class="dropdown-menu" style="padding: 15px;min-width: 220px;">
                                          
                                           <li class="sign-li">
                                           <div class="profile-div">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="cat-link" href="../profile.php/?user_id=<?php session_start(); echo$_SESSION["username"]; ?>"> View Profile</a>
                                        
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="#">Messages</a>
                                          
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="../edit.php">Profile Settings</a>
                                            
                                   
                                        
                               
                     </div>
                                           </li>
                                        </ul>
                                </li>
                
                
                <li class="nav-item">
                        <a class="nav-link" target="../logout.php" href="../logout.php"><i class="fa fa-fw fa-user-plus"></i> Logout</a>
                        
                </li>
                </ul>
                </nav>
                 <!------------searching box section-------------------->
            
                 <div class="search-engine">
                    <form>
                        <div class="form-box mx-auto">
                           <input type="text" class="search-field location" placeholder="Search">
                           <button class="search-btn" type="button">Search</button>
                       </div>
                       
                   </form>
                </div>


        <!------------------PROFILE SECTION------------>        
         
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
                         else{   //////////////////////////////////ELSE KAPANMADI
                           $id = strval($_GET['user_id']);  ?>
                           
                          
                

            <section class="profile-section">
              <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <?php  
                        session_start();
                        if($id==$_SESSION["username"]){    ////KENDİSİ Mİ (KENDİSİ)??????
                         $pics=$_SESSION["pp"];
                         echo "<img src='../upload/$pics'/>";
                         ?>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <p><?php session_start(); echo $_SESSION["username"] ?></p>
                                    </h5>
                                    <h6>
                                        Favourite Team:
                                        <?php session_start(); if($_SESSION["team"]!="Select your favourite team"){ echo $_SESSION["team"]; } else{echo"-";}?>
                                    </h6>
                                    <p>Registration Date : <span> <?php session_start(); echo $_SESSION["date"] ?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <h5>Topics</h5>





                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="../edit.php">Edit Profile </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Name : <?php session_start(); echo$_SESSION["name"] ?></p>
                            <p>Email : <?php session_start(); echo$_SESSION["user"] ?></p>
                            <a href="#">Messages</a><br>
                           
                        </div>
                    </div>
            </form>           
        </div>
            </section>

                <?php } else {  //BAŞKASIIII
                    
                    $sql="SELECT * FROM users WHERE user_id='$id' ";
                           $result=mysqli_query($conn,$sql);
                           $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                           
                           //Eğer sorgulanan kullanıcı adı var ise bir oturum oluşturup home.php ye yönlendiriyoruz
                           //Yok ise hata verdiriyoruz.
                           
                           if(mysqli_num_rows($result) == 1)
                           {
                               
                               $email =  $row["user_email"];
                               $userid = $row["user_id"];
                               $name = $row["user_name"];
                               $team = $row["user_team"];
                               $date = $row["user_date"];
                               $pp = $row["user_pp"];
                              }


                         echo "<img src='../upload/$pp'/>";?>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <p><?php  echo $userid; ?></p>
                                    </h5>
                                    <h6>
                                        Favourite Team:
                                        <?php if($team!="Select your favourite team"){ echo $team; } else{echo"-";}?>
                                    </h6>
                                    <p>Registration Date : <span> <?php  echo $date;?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <h5>Topics</h5>





                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Name : <?php  echo$name; ?></p>
                            <p>Email : <?php echo$email; ?></p>
                            <a href="#">Send a message</a><br>
                            <a href="#">Report</a>
                           
                        </div>
                    </div>
            </form>           
        </div>
            </section>

                    <?php } ?>
                <?php } ?>
                

<?php } else {   ///GİRİŞ YAPILMAMIŞ?>
 <!--NAV BAR SECTION--------->
 <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:#4ff6c8ff ;">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nvbCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#" class="navbar-brand mb-0 h1" style="color:#ec4e5aff">Premier Forum</a>
        
        <div class="collapse navbar-collapse" id="nvbCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.php"><i class="fa fa-fw fa-home"></i> Homepage</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="../index.php"><i class="fab fa-wpforms"></i> Forum</a>
                </li>
                <li class="nav-item dropdown">
                            <a href="http://www.jquery2dotnet.com" class="nav-link dropdown-toggle" data-toggle="dropdown">Sign in </a>
                            <ul class="dropdown-menu" style="padding: 15px;min-width: 320px;">
                                    <p class="sign-title">Sign-in for forum</p>
                               <li class="sign-li">
                                  <div class="row">
                                     <div class="col-md-12">
                                        <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                                           <div class="form-group">
                                              <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                              <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Email address" required>
                                           </div>
                                           <div class="form-group">
                                              <label class="sr-only" for="exampleInputPassword2">Password</label>
                                              <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password" required>
                                           </div>
                                           <div class="checkbox">
                                              <label>
                                              <input type="checkbox"> Remember me
                                              </label>
                                           </div>
                                           <div class="form-group">
                                              <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                           </div>
                                        </form>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                    </li>
                
                
                
                <li class="nav-item">
                        <a class="nav-link" href="../register.html"><i class="fa fa-fw fa-user-plus"></i> Register</a>
                        
                </li>
            </ul>

            
    </nav>
     <!------------searching box section-------------------->
            
     <div class="search-engine">
                    <form>
                        <div class="form-box mx-auto">
                           <input type="text" class="search-field location" placeholder="Search">
                           <button class="search-btn" type="button">Search</button>
                       </div>
                       
                   </form>
                </div>


        <!------------------PROFILE SECTION------------>        
                
            <section class="profile-section">
              <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
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
                         else{  //BAŞKA ELSE
                           $id = strval($_GET['user_id']);

                           $sql="SELECT * FROM users WHERE user_id='$id' ";
                           $result=mysqli_query($conn,$sql);
                           $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                           
                           //Eğer sorgulanan kullanıcı adı var ise bir oturum oluşturup home.php ye yönlendiriyoruz
                           //Yok ise hata verdiriyoruz.
                           
                           if(mysqli_num_rows($result) == 1)
                           {
                               
                               $email =  $row["user_email"];
                               $userid = $row["user_id"];
                               $name = $row["user_name"];
                               $team = $row["user_team"];
                               $date = $row["user_date"];
                               $pp = $row["user_pp"];
                              }


                         echo "<img src='../upload/$pp'/>";?>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <p><?php  echo $userid; ?></p>
                                    </h5>
                                    <h6>
                                        Favourite Team:
                                        <?php if($team!="Select your favourite team"){ echo $team; } else{echo"-";}?>
                                    </h6>
                                    <p>Registration Date : <span> <?php  echo $date;?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <h5>Topics</h5>





                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Name : <?php  echo$name; ?></p>
                            <p>Email : <?php echo$email; ?></p>
                           
                        </div>
                    </div>
            </form>           
        </div>
            </section>
                            <?php } ?>

<?php } ?>
<footer class="font-small">

<!-- Footer Elements -->
<div class="container4">

  <!-- Grid row-->
  
    <!-- Grid column -->
    <div class="col-md-12 py-1">
      <div class="flex-center">

        <!-- Facebook -->
        <a href="#" class="fb-ic">
          <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!-- Twitter -->
        <a href="#" class="tw-ic">
          <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!-- Google +-->
        <a href="#" class="gplus-ic">
          <i class="fab fa-google fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Linkedin -->
        <a href="#" class="li-ic">
          <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Instagram-->
        <a href="#" class="ins-ic">
          <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Pinterest-->
        <a href="#" class="pin-ic">
          <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
        </a>
      </div>
    </div>
    <!-- Grid column -->

  <!-- Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="https://www.youtube.com/watch?v=vU9LDkIKmJY" target="_blank"> hazardao & ayboc</a>
</div>
<!-- Copyright -->

</footer>












<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="../javascript/jquery-3.4.1.js"></script>
<script src="../javascript/popper.min.js"></script>
<script type="text/javascript" src="../javascript/bootstrap.js"></script>
<script src="../javascript/javascript.js"></script>
</body>
        </html>
<!doctype html>
<html lang="en">


  <!--------------------Head (meta/title/css files)-------------------------------->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <script src="https://kit.fontawesome.com/45222797f9.js"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" >

    <title>Premier Forum</title>
  </head>

  <!------------------------------------Body----------------------------------->


  <body  >
        
    <!----up navbar section(gif)-->
        <div class="first-div">
           <a href="#">
               <img class="head-image" src="img/bpl logo.png"alt="pl header"></a>
        </div>
     
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
                    <a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i> Homepage</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fab fa-wpforms"></i> Forum</a>
                </li>
               
                <?php session_start(); if(isset($_SESSION["login"])) { ?>
                
                  <li class="nav-item dropdown">
                                        <a href="http://www.jquery2dotnet.com" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile </a>
                                        <ul class="dropdown-menu" style="padding: 15px;min-width: 220px;">
                                          
                                           <li class="sign-li">
                                           <div class="profile-div">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="cat-link" href="profile.php/?user_id=<?php session_start(); echo$_SESSION["username"]; ?>"> View Profile</a>
                                        
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="#">Messages</a>
                                          
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="edit.php">Profile Settings</a>
                                            
                                   
                                        
                               
                     </div>
                                           </li>
                                        </ul>
                                </li>
                
                
                <li class="nav-item">
                        <a class="nav-link" target="logout.php" href="logout.php"><i class="fa fa-fw fa-user-plus"></i> Logout</a>
                        
                </li>

            <?php } else { ?>
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
                        <a class="nav-link" href="register.html"><i class="fa fa-fw fa-user-plus"></i> Register</a>
                        
                </li>
                <?php } ?>
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
<div class="main-div">
     <div class="container" >
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
       
       
        You can change your informations.
      </div>
      <?php session_start(); ?>
      
      <div class="form-group"> 
      <div class="text-center">
                 <?php session_start(); 
                  $pics=$_SESSION["pp"];
                    echo "<img id='pp-edit' src='upload/$pics'/>";?>
        <h6>Upload a different photo...</h6>
        <form action="rst.php" target="rst.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
       <button type="submit" name="pupload" class="btn btn-primary" value="Upload">Upload</button>
      </form>
      </div>
      <h3>Personal info</h3>
       <form class="form-horizontal" role="form" enctype="multipart/form-data"  action="update.php" target="update.php" method="POST">
    </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Full Name:</label>
          <div class="col-lg-8">
            <input class="form-control"  value="<?php echo $_SESSION['name']; ?>"  name="name" id="name" type="text">
          </div>
        </div>
      
        <div class="form-group">
          <label class="col-lg-3 control-label">Favourite Team:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="user_time_zone" class="form-control" name="team">
              <option selected=""> Select your favourite team</option>
                            <option>Arsenal</option>
                            <option>Aston Villa</option>
                            <option>AFC Bournemouth</option>
                            <option>Brighton and Hove Albion</option>
                            <option>Burnley</option>
                            <option>Chelsea</option>
                            <option>Crystal Palace</option>
                            <option>Everton</option>
                            <option>Leicester City</option>
                            <option>Liverpool</option>
                            <option>Manchester City</option>
                            <option>Manchester United</option>
                            <option>Newcastle United</option>
                            <option>Norwich City</option>
                            <option>Sheffield United</option>
                            <option>Southampton</option>
                            <option>Tottenham Hotspur</option>
                            <option>Watford</option>
                            <option>West Ham United</option>
                            <option>Wolverhampton Wanderers</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value="<?php echo $_SESSION['username']; ?>"  type="text" name="username">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
          <button class="btn btn-primary" name="submitButton" type="submit" value = "Submit" class="btn btn-primary btn-block"> Change </button>
          
            <span> <button  name="submitButton"class="btn btn-light" value="Clear" type="reset"> Clear</button></span>
           
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
                
    
</div>

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
  
    <script src="javascript/jquery-3.4.1.js"></script>
    <script src="javascript/popper.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.js"></script>
    <script src="javascript/javascript.js"></script>
  </body>
</html>
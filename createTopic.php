<!doctype html>
<html lang="en">


  <!--------------------Head (meta/title/css files)-------------------------------->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <!-- scripts -->
    <script src="https://kit.fontawesome.com/45222797f9.js"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    
    


    <!-- Style CSS -->
    
    <?php echo '<link href="css/style.css" rel="stylesheet" type="text/css" >'; ?>
    <link rel="stylesheet" href="css/forum.css" type="text/css" >

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
                                <a class="nav-link" href="#"><i class="fa fa-fw fa-home"></i> Homepage</a>
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
                                        <a class="cat-link" href="profile.php"> View Profile</a>
                                        
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="#">Messages</a>
                                          
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="#">Profile Settings</a>
                                            
                                   
                                        
                               
                                        </div>
                                           </li>
                                        </ul>
                                </li>
                            
                            
                            
                            
                            <li class="nav-item">
                                    <a class="nav-link" target="popup" href="logout.php"><i class="fa fa-fw fa-user-plus"></i> Logout</a>
                                    
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


        <!------------------header (football clubs logos------------>        
                
        <header>
              
            </header>


        <!----------------------PREMIER LEAGUE SECTION--------------------------->
    
        <section class="create-topic">
          <form action="topicData.php"  target="topicData.php" method="POST"enctype="multipart/form-data">
<div class="container-boxes">

	<div class="row-topic input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="title" required />
					<label>Title</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
        <select class="form-control" name="category">
                            <option class="op" selected=""><?php session_start(); $rest = substr( $_SESSION["currentTopic"], 1, -1); echo$rest;  ?></option>
                        </select>
				</div>
			</div>
      <div class="text-center">
      <div class="col-xs-12">
				<div class="styled-input wide">
          <br>
					<input type="file" name="file"/>
					<label><h4>Upload a photo...</h4></label> 
				</div>
			</div>
                        </div>

			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="content" required></textarea>
					<label>Content</label>
				</div>
			</div>
			<div class="col-xs-12">
      <button type="submit" name="pupload" class="btn btn-primary" style="width:100px;" value="Upload">Post</button>
			</div>
	</div>
</div>
                        </form>
        </section>
                                

      

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
    <script src="./javascript/javascript.js"></script>
  </body>
</html>
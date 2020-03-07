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
                                        <a class="cat-link" href="profile.php/?user_id=<?php session_start(); echo$_SESSION["username"]; ?>"> View Profile</a>
                                        
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


        <!------------------header (football clubs logos------------>        
                
        <header>
                <div class="container2">
                    
                    <div class="row">
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo arsenal"><a href="#"> <img class="team" src="./img/logos/arsenal.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo aston"><a href="#"> <img class="team" src="./img/logos/aston.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo bournemouth"><a href="#"> <img class="team" src="./img/logos/borne.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo brighton"><a href="#"> <img class="team2" src="./img/logos/bright.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo burnley"><a href="#"> <img class="team" src="./img/logos/burnley.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo chelsea"><a href="#"> <img class="team" src="./img/logos/chelsea.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo crystal"><a href="#"> <img class="team" src="./img/logos/crystal.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo everton"><a href="#"> <img class="team" src="./img/logos/everton.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo leicest"><a href="#"> <img class="team" src="./img/logos/leicester.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo liverpool"><a href="#"> <img class="team" src="./img/logos/liver.png"></a></div>
 
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo manc"><a href="#"> <img class="team" src="./img/logos/icity.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo manu"><a href="#"> <img class="team" src="./img/logos/united.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo newcastle"><a href="#"> <img class="team2" src="./img/logos/newc.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo norwich"><a href="#"> <img class="team" src="./img/logos/norwich.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo sheff"><a href="#"> <img class="team" src="./img/logos/sheiff.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo south"><a href="#"> <img class="team" src="./img/logos/south.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo spurs"><a href="#"> <img class="team" src="./img/logos/tottt.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo watford"><a href="#"> <img class="team" src="./img/logos/watford.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo westh"><a href="#"> <img class="team" src="./img/logos/west.png"></a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 logo wolves"><a href="#"> <img class="team" src="./img/logos/wolves.png"></a></div>
                    </div>
                                    
                </div>
               
            </header>


        <!----------------------PREMIER LEAGUE SECTION--------------------------->
    
                                    
        <section id="premier-league">
                <div class="forum-title"><img id="bpl-section-logo" src="./img/bpl logo.png"></div>
                    <div class="container3">
                            <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="cat-link" href="topics.php/?category='News'"><i class="fas fa-newspaper"></i> News</a>
                                        <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='analysis'"><i class="fas fa-chart-bar"></i> Analysis</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='transfers'"><i class="fas fa-exchange-alt"></i> Transfers</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='weekly'"><i class="fas fa-calendar-alt"></i> Weekly Match-Ups</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='teams'"><i class="fas fa-users"></i> Teams</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                        
                                </ul>
                     </div>
        </section>

        <section id="lower-leagues">
                <div class="forum-title"><img id="bpl-section-logo" src="/premier%20forum/img/logo 1.png"><span class="logo2"><img id="bpl-section-logo2" src="/premier%20forum/img/logo 2.png"></span></span></div>
                    <div class="container3">
                            <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="cat-link" href="topics.php/?category='championship'"><i class="fas fa-award"></i> Championship</a>
                                        <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='league12'"><i class="far fa-futbol"></i> League One & Two</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='facup'"><i class="fas fa-trophy"></i> FA Cup</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='general'"><i class="fas fa-comments"></i> General Discussion</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                        
                                </ul>
        
                     </div>
        </section>

        <section id="others">
                <div class="forum-title"><img id="bpl-section-logo3" src="/premier%20forum/img/othersss.png"></div>
                    <div class="container3">
                            <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="cat-link" href="topics.php/?category='fifa'"><i class="fas fa-futbol"></i> FIFA Series</a>
                                        <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='fm'"><i class="fab fa-black-tie"></i> Football Manager Series</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='other'"><i class="fas fa-basketball-ball"></i> Other Sports</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="cat-link" href="topics.php/?category='betting'"><i class="fi-xwsuhl-thumb-solid"></i> Betting</a>
                                            <span class="badge badge-primary badge-pill">100</span>
                                    </li>
                                        
                                </ul>
        
                     </div>
        </section>
                              
                               
                                <!-- <script>
                                        function category(currentcat){
                                                
                                                var current = currentcat;
                                                sessionStorage.setItem("currentTopic", current);
                                                alert(sessionStorage.getItem("currentTopic"));
                                                window.location="topics.php";
                                        }
                                </script> -->
                                

                               

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
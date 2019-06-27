<?php 

    if(!isset($_SESSION)) { 
        session_start(); 
    }

    
?>    


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="index.php" class="text-primary">SM Vision</a>
            </div>
            
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="index.php #home-section" class="nav-link">Home</a></li>
                  <li><a href="index.php #about-section" class="nav-link">About</a></li>
                  <li><a href="index.php #donate-section" class="nav-link">Donate</a></li>
                
                    <?php 
                        
                        if(isset($_SESSION["loggedin"])==true) {    
                            
                            if($_SESSION["isAdmin"]) {
                                echo '<li><a href="admin.php" class="nav-link">AdminPanel</a></li>';
                            }
                            echo '<li><a href="logout.php" class="nav-link">'.$_SESSION["username"].'(Logout)</a></li>';
                        }
                        else
                            echo '<li><a href="login.php" class="nav-link">Login</a></li>';
                    ?>
                  
                  <li><a href="index.php #contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
          
            

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
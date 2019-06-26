<?php 
    
    include "config.php";

    $sql_list = "SELECT * FROM student_list ORDER BY rand() LIMIT 3";
    $result_list = mysqli_query($link, $sql_list);
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SM Vision &mdash; Education Charity Organization</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700|Anton" rel="stylesheet">
    

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
      
<?php include 'header.php'; ?>
    
    <div class="owl-carousel slide-one-item">
      <a href="#"><img src="images/hero_1.jpg" alt="Image" class="img-fluid"></a>
      <a href="#"><img src="images/hero_2.jpg" alt="Image" class="img-fluid"></a>
    </div>
    
    <div class="d-block d-md-flex intro-engage">
      <div class="">
        <h2>Rescue An Orphan</h2>
        <p>Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
      </div>
      <div>
        <h2>Feed The Hungry</h2>
        <p>Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
      </div>
      <div>
        <h2>Free Education</h2>
        <p>Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
      </div>
    </div>

    <div class="site-section bg-image overlay counter" style="background-image: url('images/hero_1_no-text.jpg');" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 mb-4">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="https://vimeo.com/45830194" class="popup-vimeo">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="images/hero_1_no-text.jpg" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto align-self-lg-center">
            <h2 class="text-black mb-4 text-uppercase section-title">Our Mission</h2>
            <p class="text-black">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut, praesentium magnam, pariatur quae, necessitatibus</p>
            <p class="text-black">Dolor, eligendi voluptate ducimus itaque esse autem perspiciatis sint! Recusandae dolor aliquid inventore sit,</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="15">0</span></span>
              <span class="caption text-black">Number of Orphanage</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="392">0</span></span>
              <span class="caption text-black">Number of Donations</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="3293">0</span></span>
              <span class="caption text-black">Number of Volunteers</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="1212">0</span></span>
              <span class="caption text-black">Number of Orphans</span>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1_no-text.jpg');" id="donate-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-5 text-center">
            <h2 class="text-white mb-4">Make A Donation Now! You May Change Lives Forever</h2>
            <p><a href="#" class="btn btn-primary px-4 py-3 btn-block">Donate Now</a></p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-piggy-bank d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Make Donation</h3>
            <p>Accusantium dignissimos voluptas rem consequatur ratione illo sit quasi.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-blood d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Medical Health</h3>
            <p>Praesentium magnam pariatur quae necessitatibus eligendi voluptate ducimus.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-food d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Food for the Poor</h3>
            <p>Accusantium dignissimos voluptas rem consequatur ratione illo sit quasi.</p>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-donation d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Help &amp; Love</h3>
            <p>Accusantium dignissimos voluptas rem consequatur ratione illo sit quasi.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-dollar d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Give To The Needy</h3>
            <p>Praesentium magnam pariatur quae necessitatibus eligendi voluptate ducimus.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-unity d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Volunteer</h3>
            <p>Accusantium dignissimos voluptas rem consequatur ratione illo sit quasi.</p>
          </div>

        </div>
      </div>
    </div>



    <div class="site-section" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
              <h2 class="text-black text-uppercase section-title">Our Students In Need</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis, eius, eos consectetur consequuntur sit. Aut, perspiciatis, reprehenderit.</p>
          </div>
        </div>
        <div class="row">
            <?php while($result = mysqli_fetch_array($result_list)) { ?>
            
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
                <div class="block-team-member-1 text-center rounded">
                  <figure>
                    <img src="images/<?php echo $result['img_name'] ?>" alt="Image" class="img-fluid rounded-circle">
                  </figure>
                  <h3 class="font-size-20 text-black"><?php echo $result['first_name'] ." ". $result['last_name'] ?></h3>
                  <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3"><?php echo $result['university_name'] ?></span>
                  <p class="px-3 mb-3">Age: <?php echo $result['age'] ?> <br> Gender: <?php echo $result['gender'] ?> <br> School Name: <?php echo $result['school_name'] ?> <br>Sponsor Duration: <?php echo $result['sponsor_duration'] ?><br> Sponsor Requirement: RM<?php echo $result['sponsor_requirement'] ?></p>
                  <div class="">
                    <a href="student-detail.php?id=<?php echo $result['id'] ?>" class="btn btn-primary px-4 py-3 btn-block">More Detail</a>
                  </div>
                </div>
              </div>
            
            <?php } ?>
        </div>
         <div class="row mb-5 mt-5 justify-content-center">
          <div class="col-md-4 text-center">
              <p><a href="student-list.php" class="btn btn-primary px-4 py-3 btn-block">View More Students</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-black section-title text-uppercase">Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-5">
            <form class="contact-form" action="contactus.php" method="post">
              <input type="text" name="name" placeholder="your name">
              <input type="text" name="mail" placeholder="email">
               <textarea name="message"  placeholder="Write your message."></textarea>
               
              <button type="submit" name="submit"> send mail</button>
            </form>
          </div>
          
        </div>
      </div>
    </div>


<?php include 'footer.php'; ?>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
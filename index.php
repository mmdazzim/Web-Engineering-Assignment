<?php 
    
    include "config.php";

    $sql_list = "SELECT * FROM student_list ORDER BY rand() LIMIT 3";
    $result_list = mysqli_query($link, $sql_list);

    $sql_count = "SELECT COUNT(*) AS total FROM student_list";
    $result_row = mysqli_query($link, $sql_count);
    $row = mysqli_fetch_array($result_row);

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
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
    </script>
    
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
        <h2>Our Team</h2>
        <p>The people who are crazy enough to think they can change the world, are the ones who do.</p>
      </div>
      <div>
        <h2>Invest in their future</h2>
        <p>Become a Friend by giving monthly, and we’ll keep you updated on the continuous impact we’re making together.</p>
      </div>
      <div>
        <h2>Free Education</h2>
        <p>The nature of the consequence of the error of the blandishments of pleasure worthy of accusing him to be as great as if she were present,</p>
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
            <p class="text-black"> Our mission is to provide a platform for donors to donate a needy student for their educations.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="<?php echo $row['total'] ?>">0</span></span>
              <span class="caption text-black">Number of Students</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number">RM<span data-number="392">0</span></span>
              <span class="caption text-black">Number of Donations</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="3293">0</span></span>
              <span class="caption text-black">Number of Donors</span>
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

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-piggy-bank d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Make Donation</h3>
            <p>As a consequence of that is worthy of denouncing pleasure.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-blood d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Power</h3>
            <p>We believe in the power of education to close the gaps that separate low-income students and students of color from other young Americans.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-food d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Studies</h3>
            <p>We believe schools and colleges, appropriately organized, can help virtually all students master the knowledge they need to succeed.</p>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-donation d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Help &amp; Love</h3>
            <p>We believe a strong education improves the lives of young people.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-dollar d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Give To The Needy</h3>
            <p>The pleasure of a great manufacturers to choose the things that we consider the needs of the present.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 text-center">
            <span class="flaticon-unity d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Volunteer</h3>
            <p>As a consequence of that is worthy of denouncing pleasure.</p>
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
            <form class="contact-form" action="mailto:ghanthas@gmail.com" method="post" enctype="text/plain">
      <div class="form-group row">
       <div class="col-md-6 mb-4 mb-lg-0">
         <input name='name' type="text"  class="form-control" placeholder="Your name">
       </div>
     </div>

     <div class="form-group row">
       <div class="col-md-12">
         <input name='mail' type="text" class="form-control" placeholder="Email address" a >
       </div>
     </div>

     <div class="form-group row">
       <div class="col-md-12">
         <textarea name="message"  placeholder="Write your message." cols="30" rows="10"></textarea>
       </div>
     </div>
     <div class="form-group row">
       <div class="col-md-6 ml-auto">
         <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
       </div>
     </div>
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
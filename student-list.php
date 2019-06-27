<?php 
    
    include "config.php";

    $offset = 0;
    $limit = 3;
    $sql_list = "SELECT * FROM student_list LIMIT $offset,$limit";
    $result_list = mysqli_query($link, $sql_list);

    $sql_count = "SELECT COUNT(*) AS total FROM student_list";
    $result_row = mysqli_query($link, $sql_count);
    $row = mysqli_fetch_array($result_row);
    $total_row = ceil($row['total'] / 3);
    $total_col = $row['total'];
      
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
    

      <div class="container mb-5 mt-5">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
              <h2 class="text-black text-uppercase section-title">Our Students In Need</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis, eius, eos consectetur consequuntur sit. Aut, perspiciatis, reprehenderit.</p>
          </div>
        </div>
          
        <?php for($y=0;$y < $total_row; $y++) { ?>  
          
            <div class="row mb-5 mt-5">
                
            <?php while($list = mysqli_fetch_array($result_list)) { $x = 0; $x++; ?>
                
                <div id="container-num-<?php echo $x;?>" class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
                    <div class="block-team-member-1 text-center rounded">
                      <figure>
                        <img src="images/<?php echo $list['img_name'] ?>" alt="Image" class="img-fluid rounded-circle">
                      </figure>
                      <h3 class="font-size-20 text-black"><?php echo $list['first_name'] ." ". $list['last_name'] ?></h3>
                      <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3"><?php echo $list['university_name'] ?></span>
                      <p class="px-3 mb-3">Age: <?php echo $list['age'] ?> <br> Gender: <?php echo $list['gender'] ?> <br> School Name: <?php echo $list['school_name'] ?> <br>Sponsor Duration: <?php echo $list['sponsor_duration'] ?><br> Sponsor Requirement: RM<?php echo $list['sponsor_requirement'] ?></p>
                      <div class="">
                          <a href="student-detail.php?id=<?php echo $list['id'] ?>" class="btn btn-primary px-4 py-3 btn-block">More Detail</a>
                      </div>
                    </div>
                  </div>

            <?php }
    
                echo $offset += 3; 
                $sql_list = "SELECT * FROM student_list LIMIT $offset,$limit";
                $result_list = mysqli_query($link, $sql_list);
                
            ?>
                
            </div>
          
        <?php } mysqli_close($link); ?>

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
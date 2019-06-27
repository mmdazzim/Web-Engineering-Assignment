<?php 
    if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

    include "config.php";

    

    $id = $_GET['id'];
    $sql_list = "SELECT * FROM student_list WHERE id = $id";
    $result_list = mysqli_query($link, $sql_list);
    $result = mysqli_fetch_array($result_list);
    

    $_SESSION["student_name"] = $result['first_name']." ".$result['last_name'];

    $current_user = $_SESSION["username"];

        $sql_get_user = "SELECT * FROM users WHERE username = $current_user";
        $result_list = mysqli_query($link, $sql_get_user);
        $user_id = $result_list["id"];

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $sql_insert = "INSERT INTO sponsor_application (student_id, user_id) VALUES ('$id', '$user_id')";
            if ($link->query($sql_insert) === TRUE) {
                
                $sql_update = "UPDATE student_list SET sponsor_status = 'Sponsored' WHERE id= $id;";
                    if ($link->query($sql) === TRUE) {
                        echo "Success!";
                    } else {
                        echo "Error: " . $sql . "<br>" . $link->error;
                    }
                
                echo "Success!";
                header("location: student_list.php");
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
                }
            
            
        }

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
    <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
            <h2 class="text-black text-uppercase section-title">Student Profile</h2>
            <p>Details of student.</p>
        </div>
    </div>
    <div class="container mb-5 mt-5">
        <div class="block-team-member-1 text-center rounded">
            <figure>
                <img src="images/<?php echo $result['img_name'] ?>" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black"><?php echo $result['first_name'] ." ". $result['last_name'] ?></h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3"><?php echo $result['university_name'] ?></span>
            <p class="px-3 mb-3">Age: <?php echo $result['age'] ?> <br> Gender: <?php echo $result['gender'] ?> <br> School Name: <?php echo $result['school_name'] ?> <br>Sponsor Duration: <?php echo $result['sponsor_duration'] ?><br> Sponsor Requirement: RM<?php echo $result['sponsor_requirement'] ?></p>
        <div class="">
            <a href="sponsor-form.php?id=<?php echo $id ?>" class="btn btn-primary px-4 py-3 btn-block">Sponsor Now</a>
        </div>
<!--
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                        <input type="submit" class="btn btn-primary px-4 py-3 btn-block" value="SPONSOR NOW">
                    </div>
            </form>
-->
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
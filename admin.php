<?php 

    require_once "config.php";

    $sql_list = "SELECT * FROM student_list";
    $result_list = mysqli_query($link, $sql_list);

    $first_name = $last_name = $age = $school_name = $university_name = $sponsor_duration = $sponsor_requirement = "";
    $first_name_err = $last_name_err = $age_err = $gender_err = $school_name_err = $university_name_err = $sponsor_duration_err = $sponsor_requirement_err =  "";
    
    if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
    $tmp = explode('.',$_FILES['image']['name']);   
      $file_ext=strtolower(end($tmp));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $gender = $_POST["gender"];
        
        if (empty($_POST["first_name"])) {
        $first_name_err = "First Name is required";
    } 
    else {
        $first_name = test_input($_POST["first_name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
          $first_name_err = "Only letters and white space allowed"; 
        }
    }
        
        if (empty($_POST["last_name"])) {
        $last_name_err = "Last Name is required";
    } 
    else {
        $last_name = test_input($_POST["last_name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
          $last_name_err = "Only letters and white space allowed"; 
        }
    }
        
        if (empty($_POST["age"])) {
        $age_err = "Age is required";
    } 
    else {
        $age = test_input($_POST["age"]);
    }
        
        if (empty($_POST["school_name"])) {
        $school_name_err = "School Name is required";
    } 
    else {
        $school_name = test_input($_POST["school_name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$school_name)) {
          $school_name_err = "Only letters and white space allowed"; 
        }
    }
        
        if (empty($_POST["university_name"])) {
        $university_name_err = "University Name is required";
    } 
    else {
        $university_name = test_input($_POST["university_name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$university_name)) {
          $university_name_err = "Only letters and white space allowed"; 
        }
    }
        
        if (empty($_POST["sponsor_duration"])) {
        $sponsor_duration_err = "Sponsor duration is required";
    } 
    else {
        $sponsor_duration = test_input($_POST["sponsor_duration"]);
    }
        
        if (empty($_POST["sponsor_requirement"])) {
        $sponsor_requirement_err = "Sponsor Requirement is required";
    } 
    else {
        $sponsor_requirement = test_input($_POST["sponsor_requirement"]);
    }
        
    $sql = "INSERT INTO student_list (first_name, last_name, age, gender, school_name, university_name, sponsor_duration, sponsor_requirement, img_name) VALUES ('$first_name', '$last_name', '$age', '$gender', '$school_name', '$university_name', '$sponsor_duration', '$sponsor_requirement', '$file_name')";

    if(empty($first_name_err) && empty($last_name_err) && empty($age_err) && empty($school_name_err) && empty($university_name_err)){
        if ($link->query($sql) === TRUE) {
            echo "Success!";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
    }
    mysqli_close($link);
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
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
      <style>
      
        .my-custom-scrollbar {
            position: relative;
            height: 350px;
            overflow: auto;
            }
        .table-wrapper-scroll-y {
            display: block;
            }
          .table td, th {
    background-color: white !important;
              
}
          
      </style>
    
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
      
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
    

    <div class="site-section bg-image overlay counter" style="background-image: url('images/hero_1_no-text.jpg');" id="about-section">
      <div class="container col-md-8 justify-content-center">     
         <div class="wrapper text-black">
             <div class="col-md-12 text-center">
                <h2 class="text-black text-uppercase section-title">Admin Panel</h2>
                <p>Welcome, <?php echo $_SESSION["username"] ?></p>
            </div>
            <h2>Student List</h2>
             <div class="table-wrapper-scroll-y my-custom-scrollbar">
              <table class="table table-bordered table-striped mb-0">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">University Name</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php while($list = mysqli_fetch_array($result_list)) { ?>
                    
                  <tr>
                    <th scope="row"><?php echo $list["id"]?></th>
                    <td><?php echo $list["first_name"]?></td>
                    <td><?php echo $list["last_name"]?></td>
                    <td><?php echo $list["age"]?></td>
                    <td><?php echo $list["university_name"]?></td>
                    <td><?php echo $list["sponsor_status"]?></td>
                  </tr>
                    
                <?php } ?>
                </tbody>
              </table>
             </div>
        </div>
        <div class="wrapper mt-5 text-black">
            <h2>Add Student</h2>
                <p>Please fill this form to add a student for sponsorship.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype = "multipart/form-data">

                    <div class="form-group <?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>">
                        <span class="text-danger"><?php echo $first_name_err; ?></span>
                    </div>    

                    <div class="form-group <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>">
                        <label>Last Name</label>
                        <input type="last_name" name="last_name" class="form-control" value="<?php echo $last_name; ?>">
                        <span class="text-danger"><?php echo $last_name_err; ?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($age_err)) ? 'has-error' : ''; ?>">
                        <label>Age</label>
                        <input type="age" name="age" class="form-control" value="<?php echo $age; ?>">
                        <span class="text-danger"><?php echo $age_err; ?></span>
                    </div>

                    <div class="form-group">
                        <label>Gender</label><br>
                        <input type="radio" name="gender" value="male" checked> Male<br>
                        <input type="radio" name="gender" value="female"> Female<br>
                    </div>

                    <div class="form-group <?php echo (!empty($school_name_err)) ? 'has-error' : ''; ?>">
                        <label>School Name</label>
                        <input type="text" name="school_name" class="form-control" value="<?php echo $school_name; ?>">
                        <span class="text-danger"><?php echo $school_name_err; ?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($university_name_err)) ? 'has-error' : ''; ?>">
                        <label>University Name</label>
                        <input type="text" name="university_name" class="form-control" value="<?php echo $university_name; ?>">
                        <span class="text-danger"><?php echo $university_name_err; ?></span>
                    </div>
                    
                    <div class="form-group <?php echo (!empty($sponsor_duration_err)) ? 'has-error' : ''; ?>">
                        <label>Sponsor Duration</label>
                        <input type="number" min="4" name="sponsor_duration" class="form-control" value="<?php echo $sponsor_duration; ?>">
                        <span class="text-danger"><?php echo $sponsor_duration_err; ?></span>
                    </div>
                    
                    <div class="form-group <?php echo (!empty($sponsor_requirement_err)) ? 'has-error' : ''; ?>">
                        <label>Sponsor Requirement(RM)</label>
                        <input type="number" min="1000" name="sponsor_requirement" class="form-control" value="<?php echo $sponsor_requirement; ?>">
                        <span class="text-danger"><?php echo $sponsor_requirement_err; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label>Upload Profile Picture</label><br>
                        <input type = "file" name = "image" /><br><br>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-default" value="Reset">
                    </div>
                </form>
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
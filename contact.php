<?php
require"link/links.php";
require"db/config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="bootstrap-colorpicker.min.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap-colorpicker.js"></script>
    <title>Contact us Adventure</title>
  </head>
  <body>
    <?php
        include"navbar.php";
    ?>   
<div class="container-fluid">
    <div class="col-lg-8 offset-lg-2 mt-2">
    <?php
        if(isset($_POST['submit'])){
            $name =mysqli_real_escape_string($conn, $_POST['name']);
            $email =mysqli_real_escape_string($conn, $_POST['email']);
            $mobile =mysqli_real_escape_string($conn, $_POST['mobile']);
            $message =mysqli_real_escape_string($conn, $_POST['message']);
            if(empty($name) && empty($email) && empty($mobile) && empty($message)){
                ?>
                <div class="alert alert-danger text-align-center" role="alert">
                    Please enter all field !!</div>
                <?php 
            }
            else {
                $contact = "insert into contact(name, email, mobile, message) values('$name','$email','$mobile','$message')";
                $con_update= mysqli_query($conn, $contact);
                if($con_update){

                    ?>
                <div class="alert alert-success text-align-center" role="alert">
                    Contact form submitted !! We will get in touch with you soon.</div>
                <?php 

                }
                else{
                    ?>
                    <div class="alert alert-danger text-align-center" r! We ole="alert">
                        Contact form submitted failed</div>
                    <?php 

                }

            }

        }
     ?>


        <!-- THE CONTACT FORM IS HERE -->
        <div class="anim">
            <img class="rounded-circle d-flex m-auto anim" src="img/logo.jpg" alt="" width="72" height="72">
        </div>
            <h2 class="text-center">Contact Us!</h2>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                        <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter your Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Your Phone Number (with country code)</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter your Phone Number" name="mobile" required>
                </div>
                <div class="form-group">
                    <label for="description">Describe what you want to contact me for here</label>
                    <textarea type="text" class="form-control" id="message" placeholder="Your message" name="message" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-2 mb-5">Submit</button>
            </form>
        
    </div>
  </div>

        

  <?php
    include"footer.php";
    ?>
  </body>
</html>
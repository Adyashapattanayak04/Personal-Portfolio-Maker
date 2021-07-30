<?php
    include 'config.php';

    error_reporting(0);
    
    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location: index.php");
    }
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $branch = $_POST['branch'];
        $year = $_POST['year'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
    
        if ($password == $cpassword) {


               $sql = "SELECT * FROM users WHERE email='$email'";
               $result = mysqli_query($conn, $sql);
               if (!$result->num_rows > 0) {
                    $sql = "INSERT INTO users (username, email, number, branch, year, password)
                    VALUES ('$username', '$email', '$number' , '$branch' , '$year' , '$password')";
                    $result = mysqli_query($conn, $sql);
                   if ($result) {
                      echo "<script>alert('Wow! User Registration Completed.')</script>";
                      $username = "";
                      $email = "";
                      $number="";
                      $branch ="";
                      $year = "";
                      $_POST['password'] = "";
                       $_POST['cpassword'] = "";
                    }
                   else {
                       echo "<script>alert('Woops! Something Wrong Went.')</script>";
                    }
                } 
            
                else {
                    echo "<script>alert('Woops! Email Already Exists.')</script>";
                }
            
       } 
            
            else {
            echo "<script>alert('Password Not Matched.')</script>";
            }
    }


 


?>

<!DOCTYPE html>
<html lang="en">
    <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="signup.css">

</head>
<body>

    <header>
    <div id="menu" class="fas fa-bars"></div>
    <a href="#" class="logo">Personal Portfolio.com</a>

    
    
</header>

    <div class = "container">
        <div class="title">Sign Up</div>
        <form action=""  method="POST">


    

            <div class="user-details"> 
                    <!--1. full name-->
                <div class="input-box">
                    <span class="details"><label for="username">Full Name</label></span>
                    <input type="text"  placeholder="Enter your name"   id ="username"  name="username"  value="<?php echo $username; ?>" required>
              </div>
              <!--email-->

              <div class="input-box">
                     <span class="details"><label for="email">Email</label></span>
                     <input type="text"  placeholder="Enter your email"  id ="email"  name="email"  value="<?php echo $email; ?>" required>
                </div>

              <!-- mobile number-->
                <div class="input-box">
                    <span class="details"><label for="number"> Phone Number</label> </span>
                    <input type="text"  placeholder="Enter your phone number"  id="number" name="number"  value="<?php echo $number; ?>" required>
               </div>
               <!-- branch-->
               <div class="input-box">
                 <span class="details"><label for="branch">Branch</label></span>
                  <input type="text"  placeholder="Enter your branch" id="branch" name="branch"  value="<?php echo $branch; ?>" required>
               </div>
               <!-- year-->
               
               <div class="input-box">
                     <span class="details">Year</span>
                     <input list="year" name="year" placeholder="Year" value="<?php echo $year; ?>" required>
                            <datalist id="year">
                                  <option value="1st year">
                                 <option value="2nd year">
                                 <option value="3rd year">
                                 <option value="4th year">
                                
                            </datalist>
               </div>

               <!--password-->
               <div class="input-box">
                   <span class="details"><label for="password">Password</label></span>
                    <input type="password"  placeholder="Password" id="password" name="password"  value="<?php echo $_POST['password']; ?>" required>
               </div>
               <!--confiem password-->

               <div class="input-box">
                    <span class="details"><label for="cpassword">Confirm Password</label></span>
                     <input type="password"  placeholder="Confirm Password" id="cpassword"  name="cpassword" value="<?php echo $_POST['cpassword']; ?>"  required>
                 </div>

            </div>



            <div class="button">
                <input type="submit"  name="submit" value="Sign Up">
            </div>
            <p> Already a user? <a href="index.php"><b>Log in</b></a></p>
       
        </form>

      

        


    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="spectrumjs.js"></script>



</body>
</html>
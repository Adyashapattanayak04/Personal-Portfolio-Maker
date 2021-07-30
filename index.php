
<?php 


include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: detailsform.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: detailsform.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}




?>









<!DOCTYPE html>
<html lang="en">
    <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="login.css">

</head>
<body>


    <header>
        
            <div id="menu" class="fas fa-bars"></div>
            <a href="#" class="logo">Personal Portfolio.com</a>
        
            
            
       
    
    </header>
    



    <div class = "container">
        <div class="title">Log-In</div>
        <form action=""  method="POST">





            <div class="user-details"> 
                   
              <!--email-->

              <div class="input-box">
                     <span class="details"><label for="email">Email</label></span>
                     <input type="text"  placeholder="Enter your email"  id ="email"  name="email"   value="<?php echo $email; ?>" required>
                </div>

              
               <!--password-->
               <div class="input-box">
                   <span class="details"><label for="password">Password</label></span>
                    <input type="password"  placeholder="Password" id="password" name="password"  value="<?php echo $_POST['password']; ?>" required>
               </div>
               

            </div>



            <div class="button">
                <input type="submit"   name="submit" value="Log-In">
            </div>
         
            <p>Not a user?<a href="signup.php"><b>Sign Up here</b></a></p> 
       </form>       

        
        


    </div>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="spectrumjs.js"></script>



</body>
</html>
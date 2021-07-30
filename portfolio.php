
<?php
include 'config.php';

session_start();
$fullname= $_SESSION['fullname']; 

$sql = "SELECT * FROM details WHERE fullname = '$fullname';";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($result);

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Portfolio Website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bars" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#education">Education</a>
        <a href="#skill">skill</a>
        <a href="#project">Projects</a>
        <a href="#contact">contact</a>
        <a href="logout.php">Log Out</a>
    </nav>

</header>

<!-- header section ends -->

<!--php-->



<!-- home section starts  -->

<section class="home" id="home">

    <div id="particles-js"></div>

    <div class="content">
        <img src="images/profile.jpg" alt="">
        <h3><?php echo $res['fullname']; ?></h3>
        <p> i am a <span> front end developer </span> </p>
        <a href="#about" class="btn">about me</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> about me </h1>

    <div class="row">

        <div class="image">
            <img class="tilt" src="images/profile.jpg" alt="">
        </div>

        <div class="content">
            <h3> my name is <span> <?php echo $res['fullname']; ?></span> </h3>
            <p class="info"><?php echo $res['about']; ?></p>
            
            
                 <div class="box-container">
                      <div class="box">
                        
                        <p> <span> College : </span> <?php echo $res['college']; ?> </p>
                        <p> <span> Program : </span> <?php echo $res['program']; ?> </p>
                        <p> <span> Branch: </span><?php echo $res['branch']; ?></p>
                        <p> <span> Year : </span> <?php echo $res['yr']; ?></p>
                         
                   </div>
                    <div class="box">
                        <p> <span> DOB : </span><?php echo $res['dob']; ?></p>
                        <p> <span> email : </span><?php echo $res['email']; ?> </p>
                    
                        <p> <span> phone : </span><?php echo $res['phone']; ?></p>
                        
                        <p> <span> address : </span><?php echo $res['place']; ?></p>
                   </div>
             </div>


           


            <a href="<?php echo $res['linkedin']; ?>"  target=blank class="btn">Know More!</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

    <h1 class="heading"> <span> MY </span> education</h1>

    <div class="box-container">

        <div class="box tilt">
            <i class="fas fa-code"></i>
            <h3>Graduation</h3>
            <ul>
                <li>Graduation Year:<span><?php echo $res['gyear']; ?></span></li>
                <li>Score:<span><?php echo $res['gscore']; ?></span></li>
                <li>University:<span><?php echo $res['college']; ?></span></li>
            </ul>
        </div>

        <div class="box tilt">
            <i class="fas fa-paint-brush"></i>
            <h3>Higher Secondary Education</h3>
            <ul>
                <li>Graduation Year:<span><?php echo $res['hsyear']; ?></span></li>
                <li>Score:<span><?php echo $res['hsscore']; ?></span></li>
                <li>University:<span><?php echo $res['hscollege']; ?></span></li>
            </ul>
          
        </div>

        <div class="box tilt">
            <i class="fas fa-bullhorn"></i>
            <h3>Secondary Education</h3>
            <ul>
                <li>Graduation Year:<span><?php echo $res['syear']; ?></span></li>
                <li>Score:<span><?php echo $res['sscore']; ?></span></li>
                <li>University:<span><?php echo $res['school']; ?></span></li>
            </ul>
        </div>
     </div>

</section>

<!-- education section ends -->
<!--skill section-->

<section id="skill" class="skill">
    <h1 class="heading"> my Skills</h1>
   <div class="skills">

   <ul>
       <li>Skill-1: <span class="bar"><?php echo $res['skill1']; ?></span></li>
       <li>Skill-2: <span class="bar"><?php echo $res['skill2']; ?></span></li>
       <li>Skill-3: <span class="bar"><?php echo $res['skill3']; ?></span></li>
       <li>Skill-4: <span class="bar"><?php echo $res['skill4']; ?></span></li>
       <li>Skill-5: <span class="bar"><?php echo $res['skill5']; ?></span></li>
   </ul>
</div>
</section>
<!--skill section end-->







































<!-- Project  section starts  -->

<section class="project" id="project">

    <h1 class="heading"> my Projects</h1>

    <div class="box-container">
        
        <div class="box tilt">
            <img src="images/blog-img-1.jpg" alt="">
            <h3><?php echo $res['proj1']; ?> </h3>
            
            <a href="<?php echo $res['link1']; ?>" class="btn">learn more</a>
        </div>

        <div class="box tilt">
            <img src="images/blog-img-2.jpg" alt="">
            <h3><?php echo $res['proj2']; ?></h3>
            
            <a href="<?php echo $res['link2']; ?>" class="btn">learn more</a>
        </div>

        <div class="box tilt">
            <img src="images/blog-img-3.jpg" alt="">
            <h3><?php echo $res['proj3']; ?></h3>
            
            <a href="<?php echo $res['link3']; ?>" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- project section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> contact me</h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <input type="text" placeholder="subject" class="box">

            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" class="btn" value="send message">

        </form>
        <div class="social">
            <ul>
                <li><a href="<?php echo $res['fb']; ?>"><i id="fa" class="fab fa-facebook"></i></a></li>
               
                <li><a href="<?php echo $res['linkedin']; ?>"><i id="fa" class="fab fa-linkedin-in"></i></a></li> 
                <li><a href="<?php echo $res['git']; ?>"><i id="fa"  class="fab fa-github"></i></a></li>
            </ul>
        </div>

    </div>
   

</section>

<!-- contact section ends -->

<!-- footer section  -->
<footer  class="footer">

    <div class="name"> created by <span> Adyasha </span> | all rights reserved! </div>
</footer>















<!-- javascript part  -->

<!-- typed.js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

<!-- particles.js links  -->
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>

<!-- vanilla-tilt.js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

<script>

let menu = document.querySelector('#menu-bars');
let header = document.querySelector('header');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    header.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    header.classList.remove('active');
};

VanillaTilt.init(document.querySelectorAll('.tilt'),{
    max:25
});

</script>

</body>
</html>
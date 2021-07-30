<?php 
include 'config.php';

session_start();
error_reporting(0);
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

    
   



if (isset($_POST['submit']))
{
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $place = $_POST['place'];
        $dob = $_POST['dob'];
        
        $program = $_POST['program'];
        $branch = $_POST['branch'];
        $yr = $_POST['yr'];
       
        $gyear = $_POST['gyear'];
        $gscore = $_POST['gscore'];
        $college = $_POST['college'];
        $hsyear = $_POST['hsyear'];
        $hsscore = $_POST['hsscore'];
        $hscollege = $_POST['hscollege'];
        $syear = $_POST['syear'];
        $sscore = $_POST['sscore'];
        $school = $_POST['school'];
       
        $skill1 = $_POST['skill1'];
        $skill2 = $_POST['skill2'];
        $skill3 = $_POST['skill3'];
        $skill4 = $_POST['skill4'];
        $skill5 = $_POST['skill5'];
     
        $proj1 = $_POST['proj1'];
        $link1 = $_POST['link1'];
        $proj2 = $_POST['proj2'];
        $link2 = $_POST['link2'];
        $proj3 = $_POST['proj3'];
        $link3 = $_POST['link3'];
       
        $fb = $_POST['fb'];
        $linkedin = $_POST['linkedin'];
        $git = $_POST['git'];
        $about = $_POST['about'];
      ////////////////////////////////////////
        $_SESSION['fullname'] = $fullname;
       
        
        
        $sql = " INSERT INTO details (fullname, email, phone, place, dob, program, branch, yr, gyear, gscore,  college, hsyear, hsscore, hscollege, syear, sscore, school, skill1, skill2, skill3, skill4, skill5, proj1, link1, proj2, link2, proj3, link3,  fb, linkedin , git,  about) 
                              VALUES ('$fullname', '$email' , '$phone' , '$place' , '$dob' ,  '$program' , '$branch' , '$yr', '$gyear' , '$gscore', '$college', '$hsyear', '$hsscore' , '$hscollege' ,'$syear', '$sscore' , '$school' , '$skill1', '$skill2' , '$skill3' , '$skill4' , '$skill5' , '$proj1' , '$link1', '$proj2' , '$link2' , '$proj3' , '$link3',  '$fb' , '$linkedin' , '$git' , '$about')";
   
        $result = mysqli_query($conn, $sql) or die("but not executed" . mysqli_error($conn));
         
        if ($result) {
            echo "<script>alert('Form Submited')</script>";
            $fullname = "";
            $email = "";
            $phone = "";
            header("Location: portfolio.php");
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }

}


?>














<!DOCTYPE html>
<html lang="en">
    <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details form</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="detailsform.css">

</head>
<body style="background:url(homepagebackground.png); padding:0px;">




  
        <div class="navbar" style="background: rgb(52, 16, 87); padding:20px; width: 100%; height: 10%; display: flex; align-items: center; justify-content: space-between;}">
        <button type="button"><a  style="color:white; font-size: 15px; text-decoration:none;" class="log" href="index.php">Home</a></button>

            <button type="button"><a  style="color:white; font-size: 15px; text-decoration:none;" class="log" href="logout.php">Log Out</a></button>
            <button type="button"><a  style="color:white; font-size: 15px; text-decoration:none;" class="log" href="portfolio.php">Portfolio</a></button>
        </div>




    <div  id="detailform" class = "container">
        <div class="title">Personal Details</div>
        <form action=""  method="POST">





            <div class="user-details"> 
                   
                
                
                
                <!--1. full name-->
                <div class="input-box">
                    <span class="details"><label for="fullname">Full Name</label></span>
                    <input style="width:70%;" type="text"  placeholder="Enter your name"   id ="fullname"  name="fullname"  value="<?php echo $fullname; ?>"  required>
              </div>
              <!--email-->

              <div class="input-box">
                     <span class="details"><label for="email">Email</label></span>
                     <input style="width:70%;" type="email"  placeholder="Enter your email"  id ="email"  name="email" value="<?php echo $email; ?>" required>
                </div>

              <!-- mobile number-->
                <div class="input-box">
                    <span class="details"><label for="phone"> Phone Number</label> </span>
                    <input style="width:70%;" type="text"  placeholder="Enter your phone number"  id="phone" name="phone"  value="<?php echo $phone; ?>" required>
               </div>

                  <!-- Address-->
                  <div class="input-box">
                    <span class="details"><label for="place">Address</label></span>
                     <input style="width:70%;" type="text"  placeholder="Enter your address" id="place" name="place" value="<?php echo $place; ?>" required>
                  </div>


                   <!-- DOB-->
                <div class="input-box">
                    <span class="details"><label for="dob">DOB</label> </span>
                    <input style="width:50%;" type="date"  placeholder="dd/mm/yyyy"  id="dob" name="dob"  value="<?php echo $dob; ?>" required>
               </div>


               
               <!-- program-->
               <div class="input-box">
                <span class="details"><label for="program">Program</label></span>
                 <input  style="width:70%;" type="text"  placeholder="Enter your program" id="program" name="program" value="<?php echo $program; ?>" required>
              </div>
         

               
               <!-- branch-->
               <div class="input-box">
                 <span class="details"><label for="branch">Branch</label></span>
                  <input style="width:70%;" type="text"  placeholder="Enter your branch" id="branch" name="branch" value="<?php echo $branch; ?>"  required>
               </div>
               <!-- year-->
               
               <div class="input-box">
                     <span class="details">Year</span>
                     <input style="width:50%;" list="yr" name="yr"  value="<?php echo $yr; ?>" placeholder="Year">
                            <datalist id="yr">
                                  <option value="1st year">
                                 <option value="2nd year">
                                 <option value="3rd year">
                                 <option value="4th year">
                                
                            </datalist>
               </div>

           

               <!--qualifications-->
               <h4 style="color:white;  text-decoration: underline;">Qualification:</h4>

               <h6 style="color:white;  text-decoration: underline;">Graduation</h6>

               <!--graduation-->
               <div class="input-box">
                   
                  <span class="details"><label for="gyear">Graduation year</label></span>
                  <input style="width:300px;" type="text"  placeholder="Year" id="gyear" name="gyear"  value="<?php echo $gyear; ?>"  required>
                 
                </div>


                <div class="input-box">
                  <span class="details"><label for="gscore">Score</label></span>
                  <input style="width:300px;" type="text"  placeholder="Score" id="gscore" name="gscore"  value="<?php echo $gscore; ?>" required>
                 
                </div>
                     

                <div class="input-box">
                  <span class="details"><label for="college">College</label></span>
                  
                 <input  style="width:300px;" type="text"  placeholder="College" id="college" name="college"    value="<?php echo $college; ?>"  required>
                </div>

                    
                <!--higher secondary-->



                <h6 style="color:white;  text-decoration: underline;">Higher Secondary</h6>

               
               <div class="input-box">
                   
                  <span class="details"><label for="hsyear">Graduation year</label></span>
                  <input style="width:300px;"  type="text"  placeholder="Year" id="hsyear" name="hsyear" value="<?php echo $hsyear; ?>"  required>
                  
                </div>


                

                <div class="input-box">
                  <span class="details"><label for="hsscore">Score</label></span>
                  <input style="width:300px;"  type="text"  placeholder="Score" id="hsscore" name="hsscore"  value="<?php echo $hsscore; ?>"  required>
                  
                </div>


                
                <div class="input-box">
                  <span class="details"><label for="hscollege">College</label></span>
                  <input style="width:300px;" type="text"  placeholder="College" id="hscollege" name="hscollege" value="<?php echo $hscollege; ?>"  required>
                
                </div>



                         
                       <!--secondary education-->



                       <h6 style="color:white;  text-decoration: underline;">Secondary</h6>

               
                          <div class="input-box">
                            <span class="details"><label for="syear">Graduation year</label></span>
                            <input style="width:300px;" type="text"  placeholder="Year" id="syear" name="syear"  value="<?php echo $syear; ?>"  required>
   
                       </div>


 

                        <div class="input-box">
                           <span class="details"><label for="sscore">Score</label></span>
                           <input  style="width:300px;" type="text"  placeholder="Score" id="sscore" name="sscore"  value="<?php echo $sscore; ?>" required>
                          
   
                        </div>


 
                       <div class="input-box">
                          <span class="details"><label for="school">School</label></span>
                          <input style="width:300px;"  type="text"  placeholder="School" id="school" name="school" value="<?php echo $school; ?>"  required>
 
                        </div>



                <!--Qualification ends-->


                <!--skills-->
               <div class="input-box">
                  <span class="details"><label for="skill1">Skill 1</label></span>
                   <input style="width:30%;"  type="text"  placeholder="ex:HTML" id="skill1" name="skill1" value="<?php echo $skill1; ?>"  required>
                </div>
                

                <div class="input-box">
                    <span class="details"><label for="skill2">Skill 2</label></span>
                     <input  style="width:30%;" type="text"  placeholder="ex:HTML" id="skill2" name="skill2" value="<?php echo $skill2; ?>" required>
                </div>


                <div class="input-box">
                    <span class="details"><label for="skill3">Skill 3</label></span>
                     <input style="width:30%;"  type="text"  placeholder="ex:HTML" id="skill3" name="skill3" value="<?php echo $skill3; ?>" required>
                 </div>
                

                 <div class="input-box">
                     <span class="details"><label for="skill4">Skill 4</label></span>
                      <input style="width:30%;"  type="text"  placeholder="ex:HTML" id="skill4" name="skill4" value="<?php echo $skill4; ?>" required>
                  </div>


                  <div class="input-box">
                      <span class="details"><label for="skill5">Skill 5</label></span>
                       <input style="width:30%;"  type="text"  placeholder="ex:HTML" id="skill5" name="skill5"  value="<?php echo $skill5; ?>" required>
                  </div>

                  <!--skills end-->

               <!--projects-->

               <div class="input-box">
                 <span class="details"><label for="proj1">Project 1</label></span>
                 <input style="width:70%;" type="text"  placeholder="Title" id="proj1" name="proj1"  value="<?php echo $proj1; ?>"  required><br>
                
               </div>

               <div class="input-box">
                 <span class="details"><label for="link1">Link 1</label></span>
                <input  style="width:70%;" type="url" placeholder="Provide a git link" id="link1" name="link1" value="<?php echo $link1; ?>" >
               </div>
               

               <div class="input-box">
                 <span class="details"><label for="proj2">Project 2</label></span>
                 <input style="width:70%;" type="text"  placeholder="Title" id="proj2" name="proj2" value="<?php echo $proj2; ?>"  required><br>
                
               </div>

               <div class="input-box">
                 <span class="details"><label for="link2">Link 2</label></span>
                
                 <input  style="width:70%;" type="text"  placeholder="Provide a link" id="link2" name="link2" value="<?php echo $link2; ?>">
               </div>

               <div class="input-box">
                 <span class="details"><label for="proj3">Project 3</label></span>
                 <input style="width: 70%;"  type="text"  placeholder="Title" id="proj3" name="proj3" value="<?php echo $proj3; ?>" required><br>
                
               </div>


               <div class="input-box">
                 <span class="details"><label for="link3">Link 3</label></span>
                
                 <input  style="width:70%;" type="text"  placeholder="Provide a link" id="link3" name="link3" value="<?php echo $link3; ?>">
               </div>
            <!--contacts social media-->

               <div class="input-box">
                   <span class="details" style="font-style: italic; color:blueviolet">Social Media Links</span>

                   <span class="details"><label for="fb">Facebook</label></span>
                   <input style="width:50%;"  type="text"  placeholder="Facebook link" id="fb" name="fb" value="<?php echo $fb; ?>">

                   <span class="details"><label for="linkedin">LinkedIn</label></span>
                    <input style="width:50%;"  type="text"  placeholder="LinkedIn link" id="linkedin" name="linkedin" value="<?php echo $linkedin; ?>" required>


                    <span class="details"><label for="git">GitHub</label></span>
                  <input style="width:50%;" type="text"  placeholder="GitHub link" id="git" name="git" value="<?php echo $git; ?>"  required>
                </div>


              


               <!--about u-->
               <div class="input-box">
                  <span class="details"><label for="about">About you?</label></span>
                  <textarea style="width:70%; height:5%;" name="about" id="about" value="<?php echo $about; ?>" rows="10" cols="30">.</textarea>
                </div>
              

            </div>



            <div class="button">
                <input style="width:20%;" type="submit"  name="submit" value="submit"> 
            </div>

            <div class="reset">
                <input style="width:20%;"  type="reset">
            </div>
            
        </form>


        


    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="spectrumjs.js"></script>



</body>
</html>
<?php
session_start();
if (!isset($_SESSION['full_name'])) {
    header("Location: signin.php");
}
$full_name = $_SESSION['full_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style/home.css" />

</head>
<body>
    <div class="heading">
        <div><a class="enroll-button" href="../Controller/courseContinueAction.php">My Course</a></div>
         <div><h2>Welcome, <?php echo $full_name; ?></h2></div>
    </div>
    
    <div class="main-box">
         <img class="logo" src="img/C13706CC13.gif" alt="course image" >
         
         <div class="ins-info">
              <div class="ins-info-right">
                   <div>
                       <img class="ins-img" src="img/insT.png" alt="instructor picture" >
                   </div>
                    <div class="ins-details">
                        <p class="ins-name">Shafin Talukder(Nill)</p>
                        <p>Instructor Id:1766</p>
                    </div>
              </div>
               <div>
                    <!-- <a class="enroll-button" href="signin.php">Enroll The Course</a> -->
                    <a class="enroll-button" href="../Controller/enrollCourseAction.php?param1=CV/Resume%20Basic%20Tricks&param2=Shafin%20Talukder(Nill)">Enroll The Course</a>

               </div>
         </div>
         <?php
                if (isset($_COOKIE["errorMessage"])) {
                    echo '<div class="alert-danger">' . $_COOKIE["errorMessage"] . '</div>';
                }
            ?>

          <div class="course-content">
            <p class="cc-title">C13706 : CV/Resume Basic Tricks</p>
            <p>CC13 | Job Preparation | Medium of instruction : Bangla</p>  
          </div>
          <p class="underline"></p>
    </div>
    
</body>
</html>

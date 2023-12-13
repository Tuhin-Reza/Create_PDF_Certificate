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
    <link rel="stylesheet" href="style/courseContinue.css" />
</head>
<body>
    <h2>Welcome, <?php echo $full_name; ?></h2>

  <?php
if (isset($_COOKIE['enrolledCourses'])) {
?>
    <div class="main-box">
        <img class="logo" src="img/C13706CC13.gif" alt="course image">
        <div class="certificate-button">
            <div>
                <div><a class="enroll-button" href="../View/verifiedCertificatePDF.php">Participation Certificate</a></div>
            </div>
            <div>
                <div><a class="enroll-button" href="../View/completeCertificatePDF.php">Complete Cirtificate</a></div>
            </div>
        </div>
        <div class="course-content">
            <p class="cc-title">C13706 : CV/Resume Basic Tricks</p>
            <p>CC13 | Job Preparation | Medium of instruction : Bangla</p>
        </div>
        <p class="underline"></p>
    </div>


<?php
} else {
    echo "No enrolled courses found.";
}
?>    
</body>
</html>

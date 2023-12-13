<?php
session_start();

$userEmail = $_SESSION['email'];
echo  $_SESSION['email'];
$dbHost = "localhost";
$dbPort = "5432";
$dbName = "iLearnX";
$dbUser = "postgres";
$dbPassword = "pgAdmin4";

$conn = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPassword");

if ($conn) {
    $checkQuery = "SELECT * FROM enrollDetails 
                   WHERE userEmail = '$userEmail'";

    $checkResult = pg_query($conn, $checkQuery);

    if (pg_num_rows($checkResult) > 0) {
        $courses = array();

        while ($row = pg_fetch_assoc($checkResult)) {
            $courses[] = $row['coursename'];
        }
        setcookie("enrolledCourses", implode(',', $courses), time() + 86400, "/"); 
        header("Location:../View/courseContinue.php");
    } else {
        header("Location:../View/home.php");
    }

    pg_close($conn);
} else {
    echo "Failed to connect to the database.";
}
?>

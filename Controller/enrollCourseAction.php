<?php
session_start();

if (isset($_GET['param1']) && isset($_GET['param2'])) {
    $param1 = $_GET['param1'];
    $param2 = $_GET['param2'];
    $_SESSION['course_name']=$param2;
   
    $full_name = $_SESSION['full_name'] ;
    $userEmail = $_SESSION['email'] ;

    $dbHost = "localhost";
    $dbPort = "5432";
    $dbName = "iLearnX";
    $dbUser = "postgres";
    $dbPassword = "pgAdmin4";

    $conn = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPassword");

    if ($conn) {
        $checkQuery = "SELECT * FROM enrollDetails 
                       WHERE userEmail = '$userEmail' AND courseName = '$param1'";

        $checkResult = pg_query($conn, $checkQuery);

        if (pg_num_rows($checkResult) > 0) {
            $errorMessage = "Course Already Enrolled.";
            setcookie("errorMessage", $errorMessage, time() + 5, "/");
            header("Location:../View/home.php");
        }
        $insertQuery = "INSERT INTO enrollDetails (userName, userEmail, courseName, instructorName) 
                        VALUES (' $full_name', '$userEmail', '$param1', '$param2')";

        $insertResult = pg_query($conn, $insertQuery);

        if ($insertResult) {
            echo "Values inserted successfully.";
        } else {
            echo "Error: " . pg_last_error($conn);
        }
        
        pg_close($conn);
    } else {
        echo "Failed to connect to the database.";
    }
} else {
    echo "Parameters not set in the URL.";
}
?>

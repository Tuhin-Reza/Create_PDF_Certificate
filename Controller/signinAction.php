<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (!empty($email) && !empty($password)) {

        $dbHost = "localhost";
        $dbPort = "5432";
        $dbName = "iLearnX"; 
        $dbUser = "postgres";
        $dbPassword = "pgAdmin4";

        $conn = pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbPassword");

        if ($conn) {
            $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $result = pg_query($conn, $query);

            if ($result) {
                $userFound = pg_num_rows($result) > 0;

                if ($userFound) {
                    $userData = pg_fetch_assoc($result);
                    $_SESSION['full_name'] = $userData['full_name'];
                    $_SESSION['email'] =$email;
                    header("Location:../View/home.php");
                    
                } else {
                    $errorMessage = "Invalid email and password fields.";
                    setcookie ("errorMessage",$errorMessage,time()+ 5,"/");
                    header("Location:../View/signin.php");
                }
            } else {
                echo "Error executing query: " . pg_last_error($conn);
            }
            pg_close($conn);
        } else {
            echo "Failed to connect to the database.";
        }
    } else {
        $errorMessage = "Please fill in both email and password fields.";
        setcookie ("errorMessage",$errorMessage,time()+ 5,"/");
        header("Location:../View/signin.php");
    }
} else {
    echo "Access denied.";
}
?>

<?php
include "db_conn.php";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mob'];
$password = $_POST['password'];

// check if user already exists
$check = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "Account already exists";
} 
else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $insert = "INSERT INTO users (name,email,mobile,password)
               VALUES ('$name','$email','$mobile','$hashedPassword')";

               if (mysqli_query($conn, $insert)) {
                    //echo "succes";
                    header("Location: ../home/index.php");
                    exit();
               } 
               else 
                {
                    echo mysqli_error($conn);
                    }


    
}
?>

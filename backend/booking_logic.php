<?php
include "db_conn.php";

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$doctor_name = $_POST['doctor_name'];




    $insert = "INSERT INTO appointments(name,email,address,phone,age,gender,doctor_name)
               VALUES ('$name','$email','$address','$phone','$age','$gender','$doctor_name')";

               if (mysqli_query($conn, $insert)) {
                    echo "succes";
                    //header("Location: ../home/index.php");
                    //exit();
               } 
               else 
                {
                    echo mysqli_error($conn);
                }


?>

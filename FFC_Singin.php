<?php

    if (isset($_POST['submit'])) {

        $fname = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = array();

        if(empty($fname) || empty($lName) || empty($email) || empty($password)) {
            array_push($errors,'All fields are required');
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            array_push($errors,'EMAIL NOT VALID');
        }

        if(count($errors)>0){
            foreach($errors as $error){
                echo"<div class='alert-danger'>$error</div>";
            }
        }
        else{

            // data base connection start

        $hostName="localhost";
        $dbUser="root";
        $dbPass="";
        $dbName="login";

        $conn = mysqli_connect("$hostName","$dbUser","$dbPass","$dbName");

        if (!$conn) {
            die("something went wrong". mysqli_connect_error());
        }

        // data base connection end

        $sql = "INSERT INTO users (firstName, lastName, password,email) VALUES ('$fname','$lName', '$password', '$email')";
        mysqli_query($conn, $sql);

        echo"<script> alert('data insert'); </script> ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="FFC_Login.css">
</head>

<body>
    <div class="box" id="singin">
        <span class="borderLine"></span>
        <form method="post" action="">
            <h2>Sing In</h2>

            <div class="inputBox">
                <input type="text" name="fName" id="fName" required="required">
                <span>First Name</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="text" name="lName" id="lName" required="required">
                <span>Last Name</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="email" name="email" id="email" required="required">
                <span>Email</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name="password" id="password" required="required">
                <span>Password</span>
                <i></i>
            </div>

            <div class="links">
                <a href="#"></a>
                <a href="FFC_Login.php" id="btnLogin">Login</a>
            </div>

            <button type="submit" name="submit">submit</button>

        </form>
    </div>
</body>

</html>
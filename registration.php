<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $errors = [];

    // Validate inputs
    if (empty($fname) || empty($lName) || empty($email) || empty($pass)) {
        array_push($errors, 'All fields are required.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Email is not valid.');
    }
    if (strlen($pass) < 8 || !preg_match('/[A-Za-z]/', $pass) || !preg_match('/[0-9]/', $pass)) {
        array_push($errors, 'Password must be at least 8 characters and include both letters and numbers.');
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert-danger'>$error</div>";
        }
    } else {
        // Secure database connection
        $hostName = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "login";

        $conn = new mysqli($hostName, $dbUser, $dbPass, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Secure password storage
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        // Prepared statement
        $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, password, email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lName, $hashedPass, $email);

        if ($stmt->execute()) {
            echo "<script>alert('Account successfully added!');</script>";
        } else {
            echo "<div class='alert-danger'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
        $conn->close();
    }
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingUp Page</title>

     <!-- Font Icon -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Main css -->
    <link rel="stylesheet" href="login_page.css">

</head>
<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="fName"><i class='bx bx-rename'></i></i></label>
                                <input type="text" name="fName" id="fName" placeholder="Your First Name"/>
                            </div>
                            <div class="form-group">
                                <label for="lName"><i class='bx bx-rename'></i></label>
                                <input type="text" name="lName" id="lName" placeholder="Your Last Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class='bx bx-envelope' ></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class='bx bx-lock-alt' ></i></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                            <button type="submit" name="submit">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="FFCimg/cbum.jpg" alt="sing up image"></figure>
                        <a href="login_page.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
<?php
session_start();
$error = "";
$success = false; // Flag for successful login

if (isset($_POST["login"])) {
    $email = trim($_POST["email"]);
    $pass = trim($_POST["pass"]);

    $hostName = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "login";

    $conn = new mysqli($hostName, $dbUser, $dbPass, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($pass, $user['password'])) {
            // Successful login
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $success = true; // Set success flag
        } else {
            $error = "Incorrect password. Please try again.";
        }
    } else {
        $error = "Email not found. Please register or try again.";
    }

    $stmt->close();
    $conn->close();
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <!-- Font Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Main css -->
    <link rel="stylesheet" href="login_page.css">
</head>
<body>

<div class="main">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="FFCimg/shaki.jpg" alt="sign in image"></figure>
                    <a href="registration.php" class="signup-image-link">Create an account</a>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Login</h2>

                    <!-- Display error message -->
                    <?php if (!empty($error)) { ?>
                        <div class="alert"><?php echo $error; ?></div>
                    <?php } ?>

                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your email" required />
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" required />
                        </div>
                        <div class="form-group form-button">
                            <button type="submit" name="login" id="login" class="form-submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- JavaScript -->
<script>
    <?php if ($success) { ?>
        alert("Login successful!");
        window.location.href = "FFC.php"; // Redirect after alert
    <?php } ?>
</script>

</body>
</html>

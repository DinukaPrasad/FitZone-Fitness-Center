<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="FFC_Login.css">
</head>

<body>
    <div class="box" id="login">
        <!-- <span class="borderLine"></span> -->
        <form method="post" action="">
            <h2>Login</h2>

            <div class="inputBox">
                <input type="email" name="email" id="email" required="required">
                <span>Email</span>
                <i><i class='bx bx-envelope'></i></i>
            </div>

            <div class="inputBox">
                <input type="password" id="password" required="required">
                <span>Password</span>
                <i><i class='bx bx-lock-alt' style='color:#ffffff' ></i></i>
            </div>

            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="FFC_Singin.php" id="btnSingUp">SingUp</a>
            </div>

            <input type="submit" class="btn" value="Login" name="login" id="btnLogin">

        </form>
    </div>
</body>

</html>

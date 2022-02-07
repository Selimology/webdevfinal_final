<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Time Tracker Web Dev Final Project</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="loginform">

        <h1>Internship Time Tracker</h1>

        <form action="authentication.php" method="POST">
            <input type="hidden" name="checkUser">
            <div class="loginform__control">
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="loginform__control">
                <input type="password" required>
                <label>Password</label>
            </div>
            <button name="loginform_submit" class="loginform__btn">Login</button>
            <div class="loginform__signup">
                Don't have an account? <a href="registerform.php">Register</a>
            </div>
        </form>
    </div>

    <script src="./js/textWigglyEffect.js"></script>
</body>

</html>
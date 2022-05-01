<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>
<body>



    <div class="conatiner">
        <form method="post" action="process.php">
            <h2>Login Here</h2>
            <label for="name">Username:</label>
            <input type="email" id="email" name="email" required><br>
            <label for=" pass">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" name="submit" value="Login">
            <a href="" style="margin-left: 70px;" >forget password?</a>
            <p>Don't have an account? <a href="signup.php">click here</a></p>
            <a href="home.php" style="margin-left: 120px; color: black;">Go to home menu</a>
        </form>
    </div>
    
</body>
</html>
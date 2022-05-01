
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
        <form method="post" action="user.php">
            <h2>Signup Here</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name"style="margin-left: 50px;" required><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your Address"style="margin-left: 32px;" required><br>
            <label for="address">Contact:</label>
            <input type="text" id="contact" name="contact" placeholder="Enter mobile number"style="margin-left: 32px;" required><br>
            <label for="name">Username:</label>
            <input type="email" id="email" name="email" placeholder="e.g. asianhack@gmail.com"style="margin-left: 16px;" required><br>
            <label for=" pass">Password:</label>
            <input type="password" id="password" placeholder="Enter password" name="password"style="margin-left: 20px;"required><br>
            <label for=" pass">cpassword:</label>
            <input type="password" id="cpassword" name="cpassword" placeholder="confirm password"require><br>
            <input type="submit" name="submit" value="signup">
            <p>Already have an account? <a href="login.php">click here</a></p>
        </form>
    </div>
    
</body>
</html>
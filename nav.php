<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Navbar here</title>
    <style type="text/css">
      .navbar-nav>li>a
      {
        color: black;
        margin-top: 4px;
      }
      .navbar-nav>li>a:hover
      {
        box-sizing: border-box;
        color: Black;
        background-color: white;
        border-radius: 10px;
      }
      .navbar-brand 
      {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
    color: black;
    margin-top: 4px;
    
}

    </style>
</head>
<body>
    <nav class="navbar"position="fixed" style="background-color:cadetblue;height: 60px;" >
        <div class="container-fluid" style="color: aqua;" >
          <div class="navbar-header">
            <a class="navbar-brand" href="home.html" style="font-size: 30px;font-family: Georgia, 'Times New Roman', Times, serif;margin-left: 5px;">DECODERS</a>
          </div>
          <ul class="nav navbar-nav" style="margin-left: 50px;display: flex; font-size: 20px;">
            <li><a href="home.php">Home</a></li>
            <li><a href="services.php">Services </a></li>
            <li><a href="Products.php">Products</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right" style="margin-right:40px; font-size: 20px; ">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav>
      
</body>
</html>
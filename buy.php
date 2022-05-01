<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buy button of items</title>
    <style>
        body {font-family: Verdana, Geneva, Tahoma, sans-serif;}
        * {box-sizing: border-box;}
        
        .form-popup {
            opacity: 1;
          position: relative;
        }
        
        .form-container {
          max-width: 320px;
          padding: 10px;
          margin-left: 2%;
          margin-top: 50px;
          background-color: grey;
        }
        
        .form-container input[type=text]{
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: white;
        }
        
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
          background-color: pink;
          outline: none;
        }
    
        .form-container .btn {
          background-color: #02603d;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          margin-bottom:10px;
        }
        
        .form-container .cancel {
          background-color: rgb(144, 144, 4);
          text-decoration: none;
        }
        
        .form-container .btn:hover, .open-button:hover {
          opacity: 1;
        }
        .form-container h1{
            text-align: center;
        }
        .form-container p{
            text-align: center;
            color: red;
        }
        label b{
            text-align: center;
        }
        </style>
</head>
<body>   
    
    <div class="form-popup" id="myForm">
      <form class="form-container">
          <p>! please login first.</p>
        <h1>Payment system</h1>
    
        <label for="pay"><b>Price</b></label>
        <input type="text" placeholder="Rs." name="email" required >
    
        <label for="psw"><b>Paypal account</b></label>
        <input type="text" placeholder="Enter paypal account" name="psw" required>
    
        <button type="submit" class="btn">Pay</button>
        <button type="button" class="btn cancel"><a href="Products.php" style="text-decoration: none; color:white">close</a></button>
        <a href="signup.php" style="text-decoration: none; color: black;">Signup</a>
        <a href="login.php" style="text-decoration: none; color: black; margin-left: 180px;">login</a>
      </form>
    </div>
    
    <script>
    </script>
</body>
</html>
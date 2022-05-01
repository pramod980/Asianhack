<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
      body{
        background-color:rgb(239, 234, 234);
      }
   
   .footer-f{
            padding: 5px;
            border: 1px solid black;
            background-color:cadetblue;
            color: white;
            overflow: hidden;
            margin-top: 30px;
        }
        .footer-f a{
            margin-top: 3px;
            color: white;

        }
        .footer-i
        {
            margin-left: 150px;
        }
        .row .col-sm-6
        {
          margin-left: 1000px;
          margin-top: -60px;
        }
  .container-fluid h3
  {
    text-align: center;
    font-size: 25px;
    color: red;
    margin-top: 30px;
  }
  .container-fluid h3:hover
  {
    box-sizing: border-box;
    box-shadow: 0 3px 0 6px rgb(0,0,0,.1);
    color: rgb(221, 54, 221);
  }
  .col-sm-4
  {
    margin-top: 15px;
    width: 450px;
    margin-left: 48px;

  }
  .col-sm-4:hover{
    box-shadow: 0 3px 0px 5px rgb(0,0,0,.1);
    background-color: cadetblue;
    background-size: 400px 290px;
    cursor: pointer;
    width: 400px;
  }
  .container-fluid h2
  {
    font-size: 40px;

  }
  .container-fluid h4
{
  font-size:15px;
}
.row image:hover
{
  height: 250px;
  width: 250px;

}

.col-sm-4 image:hover

{
  background-color: red;
  height: 250px;
  width: 250px;
}
.col-sm-4 button
{
  background-color: grey;
}
#pricing h2{
  color: green;
}



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
        <a class="navbar-brand" href="home.html" style="font-size: 30px;font-family: Georgia, 'Times New Roman', Times, serif;margin-left: 5px;">THE DECODERS</a>
      </div>
      <ul class="nav navbar-nav" style="margin-left: 50px;display: flex; font-size: 20px;">
        <li><a href="home.php">Home</a></li>
        <li><a href="services.php">Services </a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-right:40px; font-size: 20px; ">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>









  <div>

    <div id="pricing" class="container-fluid">
        <div class="text-center">
          <h2>Our Production</h2>
          <h4>Choose a product that you want</h4>
          <h3>BAMBOO PRODUCT</h3>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Doko</h1>
                <img src="photos/doko.png" class="image" style="height: 200px; width: 200px;">
              </div>
              <div class="panel-footer">
                <h4>Rs.400</h4>
                <button class="btn btn-lg"><a href="buy.html" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>     
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Hat</h1>
                <img src="photos/hat.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>Rs.700</h4>
                
                <button class="btn btn-lg"><a href="buy.php"style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>       
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Flute</h1>
                <img src="photos/flute.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>RS.200</h4>
        
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>    
        </div>
      </div>
      <div id="pricing" class="container-fluid">
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Muda</h1>
                <img src="photos/mudo.png" style="height: 200px; width: 200px;">
              </div>
              <div class="panel-footer">
                <h4>Rs.750</h4>
                <button class="btn btn-lg"><a href="buy.php"style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>     
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Nanglo</h1>
                <img src="photos/nalglo.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>Rs.450</h4>
                
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>       
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Dalo</h1>
                <img src="photos/dalo.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>RS.1200</h4>
        
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>    
        </div>
      </div>
      <div id="pricing" class="container-fluid">
        <div class="text-center">
          <h3>PAINTING</h3>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Abstract</h1>
                <img src="photos/abstract.png" class="image" style="height: 200px; width: 200px;">
              </div>
              <div class="panel-footer">
                <h4>Rs.2000</h4>
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>     
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Abstract</h1>
                <img src="photos/abstarct1.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>Rs.1500</h4>
                
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>       
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Abstract</h1>
                <img src="photos/abstract2.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>RS.2500</h4>
        
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>    
        </div>
      </div>
      <div id="pricing" class="container-fluid">
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Thanka</h1>
                <img src="photos/thanka.png" style="height: 200px; width: 200px;">
              </div>
              <div class="panel-footer">
                <h4>Rs.5000</h4>
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>     
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Mithila</h1>
                <img src="photos/mithila.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>Rs.3000</h4>
                
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>       
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Painting</h1>
                <img src="photos/painting.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>RS.1000</h4>
        
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>    
        </div>
      </div>

      <div id="pricing" class="container-fluid">
        <div class="text-center">
          <h3>CROCHTE</h3>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Hat</h1>
                <img src="photos/chat.png" class="image" style="height: 200px; width: 200px;">
              </div>
              <div class="panel-footer">
                <h4>Rs.1000</h4>
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>     
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Sweater</h1>
                <img src="photos/csweater.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>Rs.2300</h4>
                
                <button class="btn btn-lg"><a href="buy.php"style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>       
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Socks</h1>
                <img src="photos/csocks.png" style="height: 200px; width: 200px;">
              </div>
              <div class="panel-footer">
                <h4>RS.500</h4>
                <button class="btn btn-lg"><a href="buy.php" style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>    
        </div>
      </div>



      <div id="pricing" class="container-fluid">
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Lace</h1>
                <img src="photos/clace.png" style="height: 200px; width: 200px;">
              </div>
              <div class="panel-footer">
                <h4>Rs.300</h4>
                <button class="btn btn-lg"><a href="buy.php"style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>     
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Shirt</h1>
                <img src="photos/cshirt.png" style="height: 200px; width: 200px;">

              </div>
              <div class="panel-footer">
                <h4>Rs.2500</h4>
                
                <button class="btn btn-lg"><a href="buy.php"style="text-decoration: none; color: black;">Buy</a></button>
              </div>
            </div>      
          </div>          
        </div>
      </div>
      
      
      </div>




      <footer class="footer-f">
        <div class="row">
            <div class="col-sm-5">
                <p class="footer-links">
                    <a href="#">Home</a>|
                    <a href="#">Services</a>|
                    <a href="#">Products</a>    |
                    <a href="#">About US</a>|
                </p>
                <p class="footer-company-name">Copyright © 2022 <strong>The DECODERS</strong> All rights reserved</p>
            </div>
            <div class="col-sm-5">

                <div>
                    <i class="glyphicon glyphicon-map-marker"></i>
                    <span>Tokha, </span>Kathmandu
                </div>
                <div>
                    <i class="glyphicon glyphicon-phone"></i>
                    <span>+997 9808548601</span>
                </div>
                <div>
                    <i class="glyphicon glyphicon-envelope"></i>
                    <a href="mailto:surakstha84@gmail.com">surakstha84@gmail.com</a>
                </div>
            </div>
            <div class="col-sm-6">
                <p class="footer-company-about">
                    <span style="margin-left: 200px;">About us:</span><br>
                    <p style="margin-left: 60px;">Helping <b>Physically Disable</b> to stood up on their own feet </p> 
                </p>
                <div class="footer-i">
                    <a href="https://www.facebook.com/" ><img src="photos/icons8-facebook-48.png" alt="facebook" height="30px" width="30px"></a>
                    <a href="https://www.instagram.com/" ><img src="photos/icons8-instagram-48.png" alt="instagram" height="30px" width="30px" ></a>
                    <a href="https://www.linkedin.com/" ><img src="photos/icons8-linkedin-50.png" alt="linkedin" height="30px" width="30px"></a>
                    <a href="https://twitter.com/" ><img src="photos/icons8-twitter-48.png" alt="twitter" height="30px" width="30px"></a>
                    <a href="https://www.youtube.com/" ><img src="photos/icons8-youtube-48.png" alt="youtube" height="30px" width="30px"></a>  
                </div>
            </div>
          </div>
    
    </footer>
      
      




</body>
</html>
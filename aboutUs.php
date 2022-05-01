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
    <style type="text/css">

body{
        background-color:rgb(239, 234, 234);
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






        .tm{
    margin-left: 100px;
    margin-top: 50px;
    width: 250px;
    height: 250px;
    border-radius: 100%;
    overflow: hidden;
    background-color: blue;

    
}
.click{
    background-color: blueviolet;
    
}
.d{
    text-align: center;
    padding: 10px;
}
.more h1{
    text-align: center;
    font-size: 50px;
    color:  rgb(85, 196, 85);
    margin-top: 800px;
}
.more{
    margin-top: 10px;
    margin-bottom: 60px;
}
.all .col-sm-6
{
    box-sizing: border-box;
    width: 480px;
    overflow-x:clip;
    background-color:cadetblue;
}
.a{
    color: black;
    margin-left: 170px;
}
.col-sm-6 .a button
{
    color:black;
    margin-left: 10px;
}
.all
{
    margin-left: 35px;
}
.all h1{
    font-size: 50px;
    color:  rgb(85, 196, 85);
    
}
.more .col-sm-3
{
    margin-left: 35px;
    border: .5px solid silver;
    background-color: snow;
    box-shadow: 0 3px 0 5px rgb(0,0,0,.1);
    stroke-opacity: 0;
    margin-top: 10px;
}
.more .col-sm-3 span
{
    font-size: 20px;
    color: black;
}
.more .col-sm-3 a
{
    font-size: 20px;
    color: black;
}
.more .col-sm-3 p{
    font-size: 20px;
    color: blue;
}
.more .col-sm-3  input[type="submit"]
{
    cursor: pointer;
    font-size: 20px;
    background-color: grey;
    margin-left: 46%;
    margin-top: 6px;
}
.all p
{
    color:black;
    font-size: 20px;
    text-align: center;
}
.more p{
    font-size: 20px;
    color:black;
    text-align: center;

}



.footer-f{
            padding: 5px;
            border: 1px solid black;
            background-color:cadetblue;
            color: white;
            margin-top: 500px;
        }
        .footer-f a{
            margin-top: 3px;
            color: white;

        }
        .footer-i
        {
            margin-left: 150px;
        }
    </style>

</head>
<body>


    <nav class="navbar"position="fixed" style="background-color:cadetblue;height: 60px;" >
        <div class="container-fluid" style="color: aqua;" >
          <div class="navbar-header">
            <a class="navbar-brand" href="home.php" style="font-size: 30px;font-family: Georgia, 'Times New Roman', Times, serif;margin-left: 5px;">THE DECODERS</a>
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
      









<div>
    <div class="all">
        <h1 class="d">Our Teams</h1>
        <P>Let introduce our best team who initiate project concept and implemented into system for the welfare <br>of physically disable people.They have given their best effort to make system user interactive and fexible.</P>
        <div class="col-sm-6">
            <img class="tm" src="photos/home/trials.jpg" >
            <h4 class="a">Soniya Poudel <br><br>
                <button type="button" data-toggle="popover" data-content="Some content inside the popover">
                    see more
                </button>
            </h4>
        </div> 
        <div class="col-sm-6">
            <img class="tm" src="photos/home/trials.jpg" >
            <h4 class="a">Suraj Shrestha <br><br>
                <button type="button" data-toggle="popover" data-content="loremLorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis facere veniam debitis! Incidunt fugiat deserunt explicabo delectus ipsa consequatur blanditiis sed rerum eum. Veniam, vel voluptatibus. Asperiores nobis consectetur cupiditate.">
                    see more
            
                </button>
            </h4>
        </div>  
        <div class="col-sm-6">
            <img class="tm" src="photos/home/trials.jpg" >
            <h4 class="a">Bimala Gadtaula <br><br>
                <button type="button" data-toggle="popover" data-content="Some content inside the popover">
                    see more
                </button>
            </h4>
        </div>  
        <div class="col-sm-6">
            <img class="tm" src="photos/home/trials.jpg"  >
            <h4 class="a">Pramod Silwal <br><br>
                <button type="button" data-toggle="popover" data-content="Some content inside the popover">
                    see more
                </button>
            </h4>
        </div> 
        <div class="col-sm-6">
            <img class="tm" src="photos/home/trials.jpg"  >
            <h4 class="a">William Power <br><br>
                <button type="button" data-toggle="popover" data-content="Some content inside the popover">
                    see more
                </button>
            </h4>
        </div>
        <div class="col-sm-6">
            <img class="tm" src="photos/home/trials.jpg"  >
            <h4 class="a">William Power <br><br>
                <button type="button" data-toggle="popover" data-content="Some content inside the popover">
                    see more
                </button>
            </h4>
        </div>  
    </div><br>
    <div class="more">
        <h1>Contact Us</h1>
        <P style="border-bottom: 1px solid silver;box-shadow: 0 4px 0 3px rgb(0,0,0,.1);">You can visit our office or can contact from the detailed shown below.</P>
        <div class="col-sm-3">
            <br><br><br>
            <div>
                <i class="glyphicon glyphicon-map-marker"></i>
                <span>Gongabu,Kathmandu </span>
            </div><br>
            <div>
                <i class="glyphicon glyphicon-phone"></i>
                <span>+997-9808548601</span>
            </div><br>
            <div>
                <i class="glyphicon glyphicon-envelope"></i>
                <a href="mailto:surakstha84@gmail.com">surakstha84@gmail.com</a>
            </div><br>
            <div>
                <img src="photos/icons8-web-64.png" height="17px" width="17px">
                <a href="#">websiteName</a>
            </div><br>
                <P>  Feedback</p>
                <textarea name="feedback" placeholder="write your feed back here" class="fb" style="width: 100%;height: 80px;"></textarea><br>
            <input type="submit" name="submit" value="sumbit">

        </div>
        <div class="col-sm-5">
            <div style="text-decoration:none; overflow:hidden;max-width:100%;width:500px;height:300px;margin-top: 55px;margin-left: 60%;"><div id="googlemaps-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=gongabu+kathmandu&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemap-html" href="https://www.embed-map.com" id="getdata-formap">https://www.embed-map.com</a><style>#googlemaps-display img{max-height:none;max-width:none!important;background:none!important;}</style></div>

        </div>
    </div>
    </div>





    <footer class="footer-f">
        <div class="row">
            <div class="col-sm-4">
                <p class="footer-links">
                    <a href="#">Home</a>|
                    <a href="#">Services</a>|
                    <a href="#">Products</a>    |
                    <a href="#">About US</a>|
                </p>
                <p class="footer-company-name">Copyright © 2022 <strong>The DECODERS</strong> All rights reserved</p>
            </div>
            <div class="col-sm-4">

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
            <div class="col-sm-4">
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





    <script>
        $(document).ready(function(){
          $('[data-toggle="popover"]').popover();   
        });
    </script>
</body>
</html>

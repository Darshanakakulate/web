<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>AgroMart Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <footer>
			<div class="footer-content">
				<h3>Agro_Mart</h3>
				<p>We are providing Best Services as well as Information About Crops & Seeds</p>
				<ul class="socials">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
				</ul>
			</div>
			<div class="footer-bottom">
				<p>copyright &copy; <a href="#">AgroMart</a>  </p>
						<div class="footer-menu">
						  <ul class="f-menu">
							<li><a href="home.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
						  </ul>
						</div>
			</div>
		</footer>
	
		<!--Footer Section END-->
        <style>
            /*Footer Styiling*/

footer{
	position: relative;
	bottom: 0;
	left: 0;
	right: 0;
	background: #111;
	height: auto;
	width: 100vw;
    padding-top: 40px;
	color: #fff;
  }
  .footer-content{
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	text-align: center;
  }
  .footer-content h3{
	font-size: 2.1rem;
	font-weight: 500;
	text-transform: capitalize;
	line-height: 3rem;
  }
  .footer-content p{
	max-width: 500px;
	margin: 10px auto;
	line-height: 28px;
	font-size: 14px;
	color: #cacdd2;
  }
  .socials{
	list-style: none;
	display: flex;
	align-items: center;
	justify-content: center;
	margin: 1rem 0 3rem 0;
  }
  .socials li{
	margin: 0 10px;
  }
  .socials a{
	text-decoration: none;
	color: #fff;
	border: 1.1px solid white;
	padding: 5px;
  
	border-radius: 50%;
  
  }
  .socials a i{
	font-size: 1.1rem;
	width: 20px;
  
  
	transition: color .4s ease;
  
  }
  .socials a:hover i{
	color: aqua;
  }
  
  .footer-bottom{
	background: #000;
	width: 100vw;
	padding: 20px;
  padding-bottom: 40px;
	text-align: center;
  }
  .footer-bottom p{
  float: left;
	font-size: 14px;
	word-spacing: 2px;
	text-transform: capitalize;
  }
  .footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
  }
  .footer-bottom span{
	text-transform: uppercase;
	opacity: .4;
	font-weight: 200;
  }
  .footer-menu{
  float: right;
  
  }
  .footer-menu ul{
  display: flex;
  }
  .footer-menu ul li{
  padding-right: 10px;
  display: block;
  }
  .footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
  }
  .footer-menu ul li a:hover{
  color: #27bcda;
  }
  
  @media (max-width:500px) {
  .footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
  }
  }
  
            </style>
               </div>
           </div>
            <br><br> <br><br><br><br>
          
        </div>
    </body>
</html>
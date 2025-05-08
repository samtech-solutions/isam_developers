
<!DOCTYPEhtml>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Contact Form</title>
 
   <!---------------------------Font awesome icons-------------------------->
   <link rel="stylesheet" type="text/css" href="./css/all.css" media="all"/>
   
   <!---------------------------Animation on scroll library-------------------------->
   <link rel="stylesheet" type="text/css" href="./css/aos.css" media="all"/>
   
    <!---------------------------Owl Carousel-------------------------->
   <link rel="stylesheet" type="text/css" href="./css/owl.carousel.min.css" media="all"/>
   <link rel="stylesheet" type="text/css" href="./css/owl.theme.default.min.css" media="all"/>
   
   <!---------------------------Custom Style-------------------------------->
   <link rel="stylesheet" type="text/css" href="./css/style.css" media="all"/>
   
   <!---------------------------form Style-------------------------------->
   <link rel="stylesheet" type="text/css" href="./css/style2.css" media="all"/>
</head>

<body onload="hideloader()">

 <!----------------------------Loader--------------------------------->
     <div id="loader">
		<img src="assets/loader1.gif" alt="loading..."/>
		</div>
   <!----------------------------Navigation--------------------------------->
     <nav class="nav">
     <div class="nav-menu flex-row">
	   <div class="nav-brand">
		 <img class="text-gray" src="./assets/logo1.png" alt="logo" width="100px" height="80px">
	   </div>
	   <div class="toggle-collapse">
	    <div class="toggle-icons">
		 <i class="fas fa-bars"></i>
		</div>
	   </div>
	   <div>
	     <ul class="nav-items">
		   <li class="nav-link">
		      <a href="index.html"><i class="fa fa-home fa-1x" style="color:black"></i>&nbsp; Home</a>
		   </li>
		   
		  <!-- <li class="nav-link">
		      <a href="products.html"><i class="fa fa-cat fa-1x" style="color:black"></i>&nbsp; Products</a>
		   </li> --->
		   
		   <li class="nav-link">
		      <a href="ebook.html"><i class="fa fa-store fa-1x" style="color:black"></i>&nbsp; Ebooks</a>
		   </li>
		   
		   <li class="nav-link">
		      <a href="services.html"><i class="fa fa-book fa-1x" style="color:black" ></i>&nbsp; Services</a>
		   </li>
		   
		    <!-- <li class="nav-link">
		      <a href="videos/index.html"><i class="fa fa-tv fa-1x" style="color:black" ></i>&nbsp; Tv</a>
		   </li> -->
		    <li class="nav-link">
		      <a href="+254716660942"><i class="fa fa-phone fa-1x" style="color:black"></i>&nbsp; Send Message</a>
		   </li>
		  
		 </ul>
	   </div>
	   <div class="social text-gray">
	    <a href="https://www.facebook.com/profile.php?id=100067991291048&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
		 <a href="https://www.instagram.com/sami_nduxh?igsh=MTdmYm9sd2w4ZjNsNQ=="><i class="fab fa-instagram"></i></a>
		 <a href="https://x.com/Sammy77311117?t=tyD7BO2qI53kZwOhBOyu7A&s=09"><i class="fab fa-twitter"></i></a>
		 <a href="https://www.youtube.com/@isamdevelopers3849"><i class="fab fa-youtube" style="color:red"></i></a>
		 
		 
	   </div>
     </div>
   </nav>
   <!------------xxxxxx---------- Navigation---------xxxxx------------------->
   
   <!---------------------Main Site Section-------------------------------->
   
   <main>
	   <p class="pinfo">Feel free to email us and we will get back to you soon as we can</p>
		<form id="feedback" action="email.php" method="POST">

		
		<div class="form-group">
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-user"></i></span>
			<input  name="name" placeholder="Enter Your Name i.e John Doe" class="form-control"  type="text" id="name" required />
			 </div>
		  </div>
		</div>
		
		
		<div class="form-group">
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			<input name="email" type="email" class="form-control" placeholder="Enter Your  Email i.e john.doe@yahoo.com" id="email" required />
			 </div>
		  </div>
		</div>

		<div class="form-group">
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-book"></i></span>
		  <input  placeholder="Enter Your Subject Here" class="form-control"   type="text" name="subject" id="subject" required />
			</div>
		  </div>
		</div>


		<div class="form-group">
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-comment"></i></span>
		  <textarea class="form-control" placeholder="Enter Your Message Here.." id="review" type="text" name="message" rows="3" required></textarea>
		 
			</div>
		  </div>
		</div>
		<input type="submit" class="btn btn-primary" value="Send" name="submit"/ >


		</form>
		   
		   
		   
   </main>
   
   <!------------xxxxxx----Main Site Section-----xxxxx--------------------->
   
   <!----------------------Footer section------------------------------->
   
       <footer class="footer">
	      <div class="container">
		     <div class="about-us" data-aos="fade-right" data-aos-delay="200"><h2>About us</h2>
			<p>We deal with Web design and reselling Agricultural ebooks.</p>
			 </div>
			 
			<div class="instagram" data-aos="fade-left" data-aos-delay="200"><h2>Instagram</h2>
			    <div class="flex-row">
				  <img src="./Ebook 2025/images/what money.jpg" alt="what money">
				    <img src="./Ebook 2025/images/real truth.jpg" alt="real truth">
				      <img src="./Ebook 2025/images/copy 101.jpg" alt="icopy 101">
				</div>
				
				<div class="flex-row">
				  <img src="./Ebook 2025/images/why broke.jpg" alt="why broke">
				    <img src="./Ebook 2025/images/time robbers.jpg" alt="time robbers">
				      <img src="./Ebook 2025/images/sell brain.jpg" alt="sell brain">
				</div>
				
			 </div>
			 
			 <div class="follow" data-aos="fade-left" data-aos-delay="200"><h2>Follow Us</h2>
			  <p>Let us be Social</p>
			     <div>
					 <a href="https://www.facebook.com/profile.php?id=100067991291048&mibextid=ZbWKwL"><i class="fab fa-facebook-f" style="color:white;margin-left:15px"></i></a>
					 <a href="https://www.instagram.com/sami_nduxh?igsh=MTdmYm9sd2w4ZjNsNQ=="><i class="fab fa-instagram" style="color:white;margin-left:15px"></i></a>
					 <a href="https://x.com/Sammy77311117?t=tyD7BO2qI53kZwOhBOyu7A&s=09"><i class="fab fa-twitter" style="color:white;margin-left:15px"></i></a>
					 <a href="https://www.youtube.com/@isamdevelopers3849"><i class="fab fa-youtube" style="color:red;margin-left:15px"></i></a>
				   </div>
 			 </div>
		  </div>
		  <div class="rights flex-row">
		   <h4 class="text-gray">Copyright &copy;2025, All rights reserved | Made by <i class="fab fa-youtube"></i><a href="https://www.youtube.com/@isamdevelopers3849" target="_blank">
			iSam Developers</a></h4>
		   </div>
		   
		   <div class="move-up">
		     <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
		   </div>
	   </footer>
   <!------------xxxxxx----Footer Section-----xxxxx--------------------->
   


	   <!-------------------------Jquery library------------------------------>
		  <script src="js/jquery3.4.1.min.js"></script>
		  
	   <!---------------------------Owl Carousel----------------------------->
	   
		  <script src="js/owl.carousel.min.js"></script> 
		  
	   <!---------------------------Animation on scroll libray----------------------------->
		  <script src="js/aos.js"></script> 	
		  
	   <!-------------------------Custom Javascript file----------------------->
		  <script src="js/main.js"></script>
	   
								  
 <!-------------------------Loader Javascript file----------------------->
				<script type="text/javascript"> 
					  function hideloader(){
						 document.getElementById("loader").style.display ="none";
						}  
		          </script>
								  
					  
</body>

</html>
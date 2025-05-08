
<!DOCTYPEhtml>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>isam_developers</title>
 
   <!---------------------------Font awesome icons-------------------------->
   <link rel="stylesheet" type="text/css" href="./css/all.css" media="all"/>
   
   <!---------------------------Animation on scroll library-------------------------->
   <link rel="stylesheet" type="text/css" href="./css/aos.css" media="all"/>
   
    <!---------------------------Owl Carousel-------------------------->
   <link rel="stylesheet" type="text/css" href="./css/owl.carousel.min.css" media="all"/>
   <link rel="stylesheet" type="text/css" href="./css/owl.theme.default.min.css" media="all"/>
   
   <!---------------------------Custom Style-------------------------------->
   <link rel="stylesheet" type="text/css" href="./css/style.css" media="all"/>
  
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" media="all" />
   
   <style>
    .logo {
        margin-top: -7%;
        width: 250px;
        height: 150px;
    }
    .nav-brand img{
		width: 100px;
        height: 80px;
		border-radius:50%;
        margin-left:10%;
	}
   
    label {
        text-align: left !important;
        color: green;
    }

    .logo1 {
        margin-top: -30px;
        width: auto;
        height: 100px;
    }

    .img {
        width: 150px;
        height: 150px;
        margin-left: 6%;
    }
	  .container1{
	   width:50%;
	   height:auto;
	   margin-bottom:10%;
	   border:1px dotted rgb(246, 239, 239);
	   text-align:center;
	   margin-left:20%;
	   margin-top:-5%;
	   
	}
	.loader {
	  border: 16px solid #f3f3f3;
	  border-radius: 50%;
	  border-top: 6px solid blue;
	  border-right: 6px solid green;
	  border-bottom: 6px solid red;
	  border-left: 6px solid pink;
	  width: 120px;
	  height: 120px;
	  margin-left:35%;
	  margin-top:10%;
	  margin-bottom:5%;
	  -webkit-animation: spin 2s linear infinite;
	  animation: spin 2s linear infinite;
	}
	@-webkit-keyframes spin {
	  0% { -webkit-transform: rotate(0deg); }
	  100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
	  0% { transform: rotate(0deg); }
	  100% { transform: rotate(360deg); }
	}
 .text-gray{
	
	 font-size:18px !important;
 }
 a{
	 text-decoration:none !important; 
 }
    /*-----------------Viewport less than or equal to 520px----------------*/

    @media (max-width: 520px) {
	.img {
		width: 120px;
		height: 120px;
		margin-left: 10%;
	}
	.logo {
	margin-top: -10%;
	width: 200px;
	height: 100px;
    }
	.container1 {
    width:70%;
    height:30%;
    text-align:center;
    margin-left:10%;
    margin-top:-20%;
    
      }
	.loader {
	border-radius: 50%;
	width: 80px;
	height: 80px;
	margin-left:30%;
	margin-top:30%;
	  }
	  .text-gray{
	    font-size:12px !important;
		margin-bottom:20px;
     }
	   .nav img{
		  width: 100px;
		  height: 80px;
		  padding:5px;
		  border-radius:50%;
		  margin-left:-10%;
	  }
	  .instagram .flex-row >img{
		  width:20% !important;
	  }
	  h2{
		 font-size:16px;  
	  }
	  p{
		 font-size:14px;  
	  }
	   h4{
		font-size:13px;
        margin-left:-4%;		 
	  }
    }
  </style>
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
		<img class="text-gray" src="./assets/logo1.png" alt="logo">
	   </div>
	  
	   </div>
     </div>
   </nav>
   <!------------xxxxxx---------- Navigation---------xxxxx------------------->
   
   <!---------------------Main Site Section-------------------------------->
   
   <main>
    
	<!------------------------Site Title----------------------------------->

	<div class="container1">
		<div class="loader"></div>
		<?php
		echo '<meta http-equiv="refresh" content="20;url=paid.php">';
		echo '<br>';
		echo '<span class="itext" style="color: green">Confirming your payment. Please Wait...</span>';
		?>
	  </div>	

	
	<!---------xxxx-----------Site Title-----------xxxx-------------------->
	
	
	
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
				  <img src="./assets/what money.jpg" alt="what money">
				    <img src="./assets/real truth.jpg" alt="real truth">
				      <img src="./assets/copy 101.jpg" alt="copy 101">
				</div>
			   
			   <div class="flex-row">
				  <img src="./assets/why broke.jpg" alt="why broke">
				    <img src="./assets/time robbers.jpg" alt="time robbers">
				      <img src="./assets/sell brain.jpg" alt="sell brain">
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
	  
   <!---------------------------Animation on scroll libray--------------->
	  <script src="js/aos.js"></script> 	
	  
   <!-------------------------Custom Javascript file--------------------->
	  <script src="js/main.js"></script>
   
								  
 <!-------------------------Loader Javascript file----------------------->
				<script type="text/javascript"> 
					  function hideloader(){
						 document.getElementById("loader").style.display ="none";
						}  
		          </script>
	<script src="https://www.paypal.com/sdk/js?client-id=AbtGy1PN6NZHyX_NC4FwcwA6Qa1Bdhu3t3vCWxsQldhZpUisz5MV0uYyRwXwzGfY_vJhtJ3D9G13cnfx"></script>

    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
							  
					  
</body>

</html>
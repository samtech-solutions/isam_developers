
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
   <style>
    #container {
      width: 100%;
      height: 80%;
      margin-left:25%;
      margin-right:10px;
	  margin-bottom:5%;
    }

    .plan {
      width: 400px;
      height: 350px;
      background-color: white;
      margin: 5px;
    }
    .nav img{
	  width: 120px;
      height: 100px;
      padding:2px;
	  border-radius:50%;
	}
    img {
      width: 300px;
      height: 200px;
      padding:5px;
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      flex-direction: rows;
      width: auto;
    
    }
      .plan .btn {
      color:blue;
      }
    a {
      text-decoration: none;
      ;
    }
    /*=============== PAGE==========*/

    /*-----------------Viewport less than or equal to 520px----------------*/

    @media (max-width: 520px) {
      #container {
       width: 100%;
       height:20%;
       margin-left:10px;
       margin-right:10px;
	   margin-bottom:-45%;
	   margin-top:0%;
      }
      .nav img{
		  width: 100px;
		  height: 80px;
		  padding:5px;
		  border-radius:50%;
		  margin-left:-15%;
	}
      .buttons {
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        width: 90%;
        height:50%;
        margin-left:-40px;  
      }
  
      img {
        width: 250px;
        height: 150px;
      }

     .plan {
        width: 70%;
        height: 550px;
        background-color: white;
        margin-left: 20%;
      }

     .text-gray {
        margin-left: 20px;
		font-size:12px;
      }

      .plan .btn {
        width: 80% !important;
		height:10%;
        margin-bottom:0px !important;
        margin-left:0 !important;
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
    
	<!------------------------Site Title----------------------------------->

	
	<div id="container" style="background-color:white;width:80%">

    <div class="buttons">
     
      <div class="plan">
       <!-- <h4 style="text-align:center">Starter Package Version</h4>-->
        <a style="text-decoration: none; color: purple" href="pay.php">

          <img src="../images/real truth.jpg"></img>
          <h2 style="margin-left:50px;">Price <b>200 KSH</b></h2>
         
          <button class="btn btn-primary" name="pay" style="margin-left:40px;margin-bottom:-20px;";>Buy Now</button>
        
        </a>
      </div>
     
    </div>
  
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
								  
					  
</body>

</html>
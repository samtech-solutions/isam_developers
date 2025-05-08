
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
        margin-top: -5%;
        width: 250px;
        height: 150px;
    }
    .nav-brand img{
		width: 120px;
        height: 100px;
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
  h5 a{
	 text-decoration:none;
  }
    /*-----------------Viewport less than or equal to 520px----------------*/

    @media (max-width: 520px) {
      #container{
		  height:50% !important;
	  } 
	   .img {
            width: 120px;
            height: 120px;
            margin-left: 5%;

        }
		.logo {
        margin-top: -20%;
        width: 200px;
        height: 100px;
    }
	.plan .btn {
        width: 80% !important;
		height:10%;
        margin-bottom:0px !important;
        margin-left:0 !important;
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
	  h3{
		 font-size:16px;  
	  }
	  p{
		 font-size:14px;  
	  }
	   h5{
		font-size:13px;
        margin-left:-5%;		 
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

	 <div id="container" style="background-color:white;width:100%;height:500px">
        <h3 align="center"><img src="./assets/dollar-payment-logo.jpg" class="logo"></h3>

        <br>
        <div class="img"><img src="./assets/mpesa.jpg" class="logo"></div>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:40%;margin-top:-20%;">Proceed To Payment</button>

         <div class="img"><img src="./assets/paypal.png" class="logo"></div>
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="##exampleModal1" style="margin-left:40%;margin-top:-20%">COMING SOON</button>
   

    </div>


    <!-- Modal for Starter Package Version mpesa pay-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">TINYPESA STK PUSH</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="confirm_payment.php" method="POST">
                    <div class="modal-body">
                        
                            <label for="username" class="name-label">Phone number</label>
                            <br>
                            <input type="text" id="number" name="number" pattern=".*[^ ]*." placeholder="Enter Your Phone Number" required>
                            <br>
                            <label for="amount" class="name-label">Amount</label>
                            <br>
                            <input type="number" id="amount" name="amount" value="200" readonly>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"> &nbsp;  </i> Close</button>
                        <button type="submit" name="pay" id="pay" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"> &nbsp;  <i class="fa fa-save" aria-hidden="true"></i> Make Payment</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- end modal-->

    <!-- Modal for Starter Package Version paypal pay-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">PAYPAL PAYMENT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="POST">
                    <div class="modal-body">
                       
                            <p style="color:blue">Amount to Pay <b>2?> USD Dollar</b> plan</p>

                            <input type="hidden" name='amount' id='amount' value="2?>">
                            <br>
                            <div id="paypal-payment-button">
                            </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- end modal-->

	

	
	<!---------xxxx-----------Site Title-----------xxxx-------------------->
	
	
	
   </main>
   
   <!------------xxxxxx----Main Site Section-----xxxxx--------------------->
   
   <!----------------------Footer section------------------------------->
   
       <footer class="footer">
	      <div class="container">
		     <div class="about-us" data-aos="fade-right" data-aos-delay="200"><h3>About us</h3>
			<p>We deal with Web design and reselling Agricultural ebooks.</p>
			 </div>
			
			 <div class="instagram" data-aos="fade-left" data-aos-delay="200"><h3>Instagram</h3>
			   <div class="flex-row">
				  <img src="./assets/why broke.jpg" alt="why broke">
				    <img src="./assets/time robbers.jpg" alt="time robbers">
				      <img src="./assets/sell brain.jpg" alt="sell brain">
				</div>

			   <div class="flex-row">
				  <img src="./assets/what money.jpg" alt="what money">
				    <img src="./assets/real truth.jpg" alt="real truth">
				      <img src="./assets/copy 101.jpg" alt="copy 101">
				</div>
				
			 </div>
			 <div class="follow" data-aos="fade-left" data-aos-delay="200"><h3>Follow Us</h3>
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
		   <h5 class="text-gray">Copyright &copy;2025, All rights reserved | Made by <i class="fab fa-youtube"></i><a href="https://www.youtube.com/@isamdevelopers3849" target="_blank">
			iSam Developers</a></h5>
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
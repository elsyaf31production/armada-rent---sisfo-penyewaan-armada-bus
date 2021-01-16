<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Cloud Aplikasi Armada</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<script src="web/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="web/js/bootstrap.js" type="text/javascript"></script>
<script src="web/js/bootstrap.min.js" type="text/javascript"></script>
<script src="web/js/owl.carousel.js" type="text/javascript"></script>
 <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
   <!-- Start Header -->
<div class="header ">	
   	 	    
            <div class="header-top">
   	 	      <div class="wrap"> 
   	 	    	 <div class="header-top-left">
   	 	    	 	<p ></p>
   	 	    	 </div>
   				  <div class="header-top-right">
				        <ul>
				            
				            <li  class="login">
				              <div id="loginContainer">
				            	   <a href="#" id="loginButton"><span><i class="fa fa-lock"></i>Login</span></a>
						                <div id="loginBox" class="login-form">    
						                	<h3>Login into Your Account</h3>            
						                      <form id="loginForm">
						                                <span>
											 	    		<i><img src="web/images/user.png" alt="" /></i>
											 	    		 <input type="text" value="yourname@mail.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yourname@mail.com';}" name="email">
											 	    	</span>
						                                <span>
												 	     <i><img src="web/images/lock.png" alt="" /></i>
											 	         <input type="password" value="........." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '.........';}" id="password" name="password">
												 	    </span>
						                               <input type="submit" name="login" value="Login">
				                          </form>
                                <div id="pesan"></div>
			                    </div>
				              </div>
		                  </li>
				               <li><a href="indexAdminCloud.php" ><i class="fa fa-gears"></i>Admin</a></li>
		            </ul>
			    </div>
			      <div class="clear"></div>
		      </div> 
  </div>
             <div class="header-logo-nav">
             	  <div class="navbar navbar-inverse navbar-static-top nav-bg" role="navigation">
				      <div class="container">
				        <div class="navbar-header">
				          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				         <div class="logo"> <a class="navbar-brand" href="index.php"><img src="web/images/logo.png" alt="" /></a></div>
				          <div class="clear"></div>
				        </div>
				        <div class="collapse navbar-collapse">
				          <ul class=" menu nav navbar-nav">
				            <li ><a href="?page_name=home">Home</a></li>
				            
				            <li><a href="?page_name=products">Products and SignUp</a></li>
				            <li><a href="?page_name=contact">Contact Us</a></li>
				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
		       </div>
		         <div class="clear"></div>
	        </div>
          </div>
   <!-- End Header -->
   
   <!-- Start Main Content -->
	 <div class="main">	 
	 	
         
						<?php 
            /*
             * A Design by W3layouts
            Author: W3layouts
            Author URL: http://w3layouts.com
            License: Creative Commons Attribution 3.0 Unported
            License URL: http://creativecommons.org/licenses/by/3.0/
             *
             */
            //include "app/config.php";
            //include "app/detect.php";
            
            
            $page_name = $_GET['page_name'];
            
            $browser_t = "web";
            
            if ($page_name=='') {
                include $browser_t.'/home.php';
                }
            elseif ($page_name=='home') {
                include $browser_t.'/home.php';
                }
            elseif ($page_name=='about') {
                include $browser_t.'/about.php';
                }
            elseif ($page_name=='products') {
                include $browser_t.'/products.php';
                }
            elseif ($page_name=='solutions') {
                include $browser_t.'/solutions.php';
                }
            elseif ($page_name=='support') {
                include $browser_t.'/support.php';
                }
            elseif ($page_name=='contact') {
                include $browser_t.'/contact.php';
                }
            elseif ($page_name=='login') {
                include $browser_t.'/login.php';
                }
            elseif ($page_name=='404') {
                include $browser_t.'/404.php';
                }
            elseif ($page_name=='contact-post') {
                include 'app/contact.php';
                }
            else
                {
                    include $browser_t.'/404.php';
                }
            
			include "web/input_pendaftaran.php";
            ?>
         
        
   	</div> 		
            
            
   <!-- End Main Content -->
	   
  <!-- Start Footer -->
      <!-- <span class="footer-arrow"></span>-->
       <div class="footer-bottom">
	 	  <div class="wrap">
			 	<div class="copy-right">
			 		<p>armadaRent cloud Copyright 2016 </p>
		 	</div>
		 	<div class="social-icons">
		 	    <ul>
		 			  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		 			  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		 			  <li><a href="#"><i class="fa fa-rss"></i></a></li>
		 			  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			 		</ul>
			 	</div>
			 	<div class="clear"></div>
		 </div>
</div>
  <!-- End Footer -->
 
 <script>
    $(document).ready(function() {
		//ketika form login dicklik
		$('#loginForm').on('submit', function(e){
	
				e.preventDefault();
			
			$.ajax({
	url: "cek_login.php", 
	type: "POST",            
	data: new FormData(this), 
	contentType: false,       
	cache: false,            
	processData:false,        
	success: function(data)   
	{
		   
		   $("#pesan").html(data);
		   $("#email").val('');
		    $("#password").val('');
		   
	    	      }
	     }); 
			
		
		});
	
		
		//dari web 
      var owl = $("#owl-demo");

      owl.owlCarousel({

      items :4, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })

    });
   
  // Login Form
	$(function() {
	    var button = $('#loginButton');
	    var box = $('#loginBox');
	    var form = $('#loginForm');
	    button.removeAttr('href');
	    button.mouseup(function(login) {
	        box.toggle();
	        button.toggleClass('active');
	    });
	    form.mouseup(function() { 
	        return false;
	    });
	    $(this).mouseup(function(login) {
	        if(!($(login.target).parent('#loginButton').length > 0)) {
	            button.removeClass('active');
	            box.hide();
	        }
	    });
	});
  </script>
  
</body>
</html>

    	
    	
            



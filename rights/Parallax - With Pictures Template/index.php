<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
	
	// require a name from user
	if(trim($_POST['contactName']) === '') {
		$nameError =  'Forgot your name!'; 
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}
	
	// need valid email
	if(trim($_POST['email']) === '')  {
		$emailError = 'Forgot your e-mail address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'Invalid email address!';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
		
	// we need at least some content
	if(trim($_POST['comments']) === '') {
		$commentError = 'You your message!';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}
		
	// upon no failure errors let's email now!
	if(!isset($hasError)) {
		
		$emailTo = 'youremail@email.com'; // ADD YOUR EMAIL ADDRESS HERE FOR CONTACT FORM!
		$subject = 'Submitted message from '.$name; // ADD YOUR EMAIL SUBJECT LINE HERE FOR CONTACT FORM!
		$sendCopy = trim($_POST['sendCopy']);
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Parallax Template</title>
		<link href="css/jquery.bxslider.css" rel="stylesheet" />
		<link href="style.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet"/>
		<link rel="shortcut icon" type="image/png" href="img/w3-favicon.png"/>
		<meta name="description" content="">
	</head>
<body>
	<a name="home">
<!--- Start Navigation -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/main.js"></script> <!--- For Navigation -->
		<div class="nav-outer">
		<div class="nav-wrap">
			<nav class="navigation">
				<div class="logo"><img src="img/logo.png" alt="Newbie"></div>
				<div class='nav' nav-menu-style="yoga">
					<ul class="nav-menu">
						<li><a href="#home">Home</a></li>
						<li><a href="#about">About Us</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#testimonials">Testimonials</a></li> 
						<li><a href="#contact">Contact</a></li>
					</ul>	
				</div>
			</nav>
		</div>
	</div>
	<div class="nav-clear"></div>
<!--- End Navigation -->
	<div class="clearfix"></div>
<!--- Start Slider -->
		<script src="js/jquery.bxslider.min.js"></script><!--For Image Slider-->
		<div class="slide-wrap">
			<section class="slider">
				<ul class="slider1">
					<li><img src="https://www.w3newbie.com/wp-content/uploads/slider-image-3.png" title="" /></li>
					<li><img src="https://www.w3newbie.com/wp-content/uploads/slider-image-1.png" title="" /></li>
					<li><img src="https://www.w3newbie.com/wp-content/uploads/slider-image-2.png" title="" /></li>
					<li><img src="https://www.w3newbie.com/wp-content/uploads/slider-image-4.png" title="" /></li>
				</ul>
			</section>
		</div>
		<script type="text/javascript">
			$('.slider1').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,
				
			});
			$('.slider2').bxSlider({
				pager:false,
				captions: true,
				maxSlides: 3,
				minSlides: 1,
				slideWidth: 230,
				slideMargin: 10
			});
			$('.slider3').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,
				controls:false,
			});
		</script>
<!--- End Slider -->
<!--- Sart Banner Wrapper -->
	<a name="about">
	<div id="banner-wrapper">
		<h1>Welcome To Our Website</h1>
			<div class="welcome-column">
				<div class="welcome-icon">
					<i class="fa fa-keyboard-o"></i>
				</div>
				<div class="welcome-text">
					<h3>heading title section</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</div>
			</div>
			<div class="welcome-column">
				<div class="welcome-icon">
					<i class="fa fa-laptop"></i>
				</div>
				<div class="welcome-text">
					<h3>heading title section</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</div>
			</div>
	</div>
<!--- End Banner Wrapper -->
<!--- End Four Column Icon Section -->
	<div class="clearfix"></div>
<!--- Start Parallax Section -->
<section class="parallax-1">
	<div class="parallax-inner">
<!--- Start Heading & Text Section -->
		<section class="one-third">
			<td><i class="fa fa-youtube-play"></i></td>
			<h3>Heading title</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</section>
		<section class="one-third">
			<td><i class="fa fa-html5"></i></td>
			<h3>Heading title</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>		</section>
		<section class="one-third">
			<td><i class="fa fa-desktop"></i></td>
			<h3>heading title</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>		</section>
<!--- End Heading & Text Section -->
	</div>
</section>
<!--- End Parallax Section -->
	<div id="banner-wrapper">
	<div class="clearfix"></div>
<!--- Start Heading & Text Sections -->
	<a name="services">
		<section class="left-col">
			<h1>Heading title Text</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</section>
<!--- End Heading & Text Sections -->
<!--- Start Shedule & Contact Sidebar -->
		<section class="sidebar">
			<img src="https://www.w3newbie.com/wp-content/uploads/beach-building.jpg" title=""/>				
		</section>
<!--- End Shedule & Contact Sidebar -->
			<div class="welcome-column">
				<div class="welcome-icon">
					<i class="fa fa-keyboard-o"></i>
				</div>
				<div class="welcome-text">
					<h3>heading title section</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</div>
			</div>
			<div class="welcome-column">
				<div class="welcome-icon">
					<i class="fa fa-laptop"></i>
				</div>
				<div class="welcome-text">
					<h3>heading title section</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</div>
			</div>
	<div class="clearfix"></div>
<!--- Start Four Column Pictures & Text -->
	<a name="testimonials">
		<section class="one-fourth">
			<img src="https://www.w3newbie.com/wp-content/uploads/lemons.png" title=""/>
		</section>
		<section class="one-fourth">
			<img src="https://www.w3newbie.com/wp-content/uploads/flower.png" title=""/>
		</section>
		<section class="one-fourth">
			<img src="https://www.w3newbie.com/wp-content/uploads/watermelon.png" title=""/>
		</section>
		<section class="one-fourth">
			<img src="https://www.w3newbie.com/wp-content/uploads/coffee.png" title=""/>
		</section>
<!--- End Four Column Pictures & Text -->
	</div>
<!--- End Banner Wrapper -->
	<div class="clearfix"></div>
<!--- Start Parallax Section -->
<section class="parallax-2">
	<div class="parallax-inner">
<!--- Start Heading & Text Section -->
		<section class="one-third">
			<td><i class="fa fa-laptop"></i></td>
			<h3>Heading title</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</section>
		<section class="one-third">
			<td><i class="fa fa-camera-retro"></i></td>
			<h3>Heading title</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>		</section>
		<section class="one-third">
			<td><i class="fa fa-keyboard-o"></i></td>
			<h3>heading title</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>		</section>
<!--- End Heading & Text Section -->
	</div>
</section>
<!--- End Parallax Section -->
	<div id="banner-wrapper">
	<div class="clearfix"></div>
<!--- Start Image Section -->
			<section class="left-col">
				<img src="https://www.w3newbie.com/wp-content/uploads/beach-surf.jpg" title=""/>
			</section>
<!--- End Image Section -->
<!--- Start Heading & Text -->
			<section class="sidebar">
				<h3>Heading Title Text</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</section>
<!--- End Heading & Text -->
	<div class="clearfix"></div>
<!--- Start Heading & Text Section -->
			<h1>Full width heading title section</h1>
<!--- End Heading & Text Section -->
	<div class="clearfix"></div>
<!--- Start Image, Title & Text -->
		<section class="one-third">
			<img src="https://www.w3newbie.com/wp-content/uploads/beach-camera.png" title=""/>
			<h3>Heading title text</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</section>
		<section class="one-third">
			<img src="https://www.w3newbie.com/wp-content/uploads/girl-camera.png" title=""/>
			<h3>heading title text</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</section>
		<section class="one-third">
			<img src="https://www.w3newbie.com/wp-content/uploads/girl-beach.png" title=""/>
			<h3>Heading title text</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</section>
<!--- End Image, Title & Text -->
	</div>
	<div class="clearfix"></div>
<!--- Start Parallax Section -->
<section class="parallax-3">
	<div class="parallax-inner2">
	</div>
</section>
<!--- End Parallax Section -->
	<a name="contact">
		<ul class="social">
			<li><a href="https://www.facebook.com/w3newbie" target="_blank"title=""><i class="fa fa-facebook" id="facebook"></i></a></li>
			<li><a href="https://plus.google.com/+DrewRyan_w3/posts" target="_blank"title=""><i class="fa fa-google-plus" id="google-plus"></i></a></li>
			<li><a href="https://twitter.com/DrewOnCue" target="_blank"title=""><i class="fa fa-twitter" id="twitter"></i></a></li>
			<li><a href="https://youtube.com/user/DrewOnCue" target="_blank"title=""><i class="fa fa-youtube" id="youtube"></i></a></li>
		</ul>
	<div class="clearfix"></div>
	<!--- Sart Banner Wrapper -->
	<div id="banner-wrapper">
<!-- Start Contact Form -->
	<section class="contact">
	<div id="contact-area">
	<div id="contact" class="section">
		<div class="container content">
	        <?php if(isset($emailSent) && $emailSent == true) { ?>
                <p class="info">Your email was sent. Huzzah!</p>
            <?php } else { ?>		
				</div>	
				<div id="contact-form">
					<?php if(isset($hasError) || isset($captchaError) ) { ?>
                        <p class="alert">Error submitting the form</p>
                    <?php } ?>
				
					<form id="contact-us" action="index.php" method="post">
						<div class="formblock">
							<label class="screen-reader-text">Name</label>
							<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" />
							<?php if($nameError != '') { ?>
								<br /><span class="error"><?php echo $nameError;?></span> 
							<?php } ?>
						</div>
                        <div class="clearfix"></div>
						<div class="formblock">
							<label class="screen-reader-text">Email</label>
							<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
							<?php if($emailError != '') { ?>
								<br /><span class="error"><?php echo $emailError;?></span>
							<?php } ?>
						</div>
                        <div class="clearfix"></div>
						<div class="formblock">
							<label class="screen-reader-text">Message</label>
							 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
							<?php if($commentError != '') { ?>
								<br /><span class="error"><?php echo $commentError;?></span> 
							<?php } ?>
						</div>
                      <div class="clearfix"></div>  
							<button name="submit" type="submit" class="subbutton">SUBMIT</button>
							<input type="hidden" name="submitted" id="submitted" value="true" />
					</form>			
			<?php } ?>
		</div>
    </div>
<script type="text/javascript">
	<!--//--><![CDATA[//><!--
	$(document).ready(function() {
		$('form#contact-us').submit(function() {
			$('form#contact-us .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Forgot your '+labelText+'!</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Sorry! Invalid '+labelText+'!</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#contact-us').slideUp("fast", function() {				   
						$(this).before('<p class="tick"><h3>Thanks! Your email has been delivered!</h3></p>');
					});
				});
			}
			
			return false;	
		});
	});
	//-->!]]>
</script>
			</div>
		</section>
<!-- End Contact Form -->
		</div>
<!--- End Banner Wrapper -->			
<!--- Start Footer -->
		<footer>
			<p>&copy; The Parallax Template, 2017.</p>
		</footer>
<!--- End Footer -->
<!--- Top Scroll Start -->
	<a href="#0" class="cd-top">Top</a>
		<script src="js/top.js"></script> <!-- Gem jQuery -->
		<script src="js/modernizr.js"></script>
<!--- Top Scroll End -->
	</body>
</html>
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
		
		$emailTo = 'abrighterstartchildcare@gmail.com'; // ADD YOUR EMAIL ADDRESS HERE FOR CONTACT FORM!
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
		<title>A BRIGHTER START CHILDCARE</title>
		<link href="css/jquery.bxslider.css" rel="stylesheet" />
		<link href="style.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet"/>
		<link rel="shortcut icon" type="image/png" href="logo.png"/>
		<meta name="description" content="A Brighter Start Childcare is an educational based childcare center. Dedicated to educating children and preparing them for a bright future.">
	</head>
<body>
	<a name="home">
<!--- Start Navigation -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/main.js"></script> <!--- For Navigation -->
		<div class="nav-outer">
		<div class="nav-wrap">
			<nav class="navigation">
				<div class="logo"><img src="logo.png" alt="Newbie"></div>
				<div class='nav' nav-menu-style="yoga">
					<ul class="nav-menu">
						<li><a href="#home">Home</a></li>
						<li><a href="#about" class="transition">Mission</a></li>
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
					<li><img src="img/Daycare1.jpg" title="" /></li>
					<li><img src="img/duckduck.jpg" title="" /></li>
					<li><img src="img/IMG_1855.jpg" title="" /></li>
					<li><img src="img/slider-2000x800.png" title="" /></li>
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
		<h1>A Brighter Start Childcare</h1>
			<div class="welcome-column">
				<div class="welcome-icon">
					<i class="fa fa-keyboard-o"></i>
				</div>
				<div class="welcome-text">
					<h3>Mission Statement</h3>
					<p>At A Brighter Start, we believe in building a strong foundation for each child to grow emotionally, socially, and cognitively at his/her own pace.</p>
				</div>
			</div>
			<div class="welcome-column">
				<div class="welcome-icon">
					<i class="fa fa-laptop"></i>
				</div>
				<div class="welcome-text">
					<h3>Teaching Environment</h3>
					<p>In our fun and exciting environment we believe that children deserves to receive all the love, support and the respect it takes to establish a strong foundation for their future success.</p>
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
			<h3>Assesments</h3>
			<p>We provide routine assessments for compliance of procedures, curriculum, general happiness and the well being of each child.</p>
		</section>
		<section class="one-third">
			<td><i class="fa fa-html5"></i></td>
			<h3>Bright Children</h3>
			<p>Our program has a wide variety of experiences to help children learn about themselves and their world around them. </p>		</section>
		<section class="one-third">
			<td><i class="fa fa-desktop"></i></td>
			<h3>Bright Curriculum</h3>
			<p>Our curriculum values the need to engage the student in sustained meaningful encounters.</p>		</section>
<!--- End Heading & Text Section -->
	</div>
</section>
<!--- End Parallax Section -->
	<div id="banner-wrapper">
	<div class="clearfix"></div>
<!--- Start Heading & Text Sections -->
	<a name="services">
		<section class="left-col">
			<h1>Our Program</h1>
			<p>Our program includes experience such as computers, math, language arts, music, drama, physical fitness, dance, motor skills, group play, social-dramatic play, crafts, science, kitchen/home experience as well as our exciting early reading program. </p>
			<p>Our curriculum shows that learning through play produces a vigorous cognitive growth that focus on a combination of linguistic and logical intelligence. </p>
			<p>We promote an open door policy so communication with parents is always welcomed. We focus on quality assurance.</p>
		</section>
<!--- End Heading & Text Sections -->
<!--- Start Shedule & Contact Sidebar -->
		<section class="sidebar">
			<img src="img/sidebar-image-500x747.jpg" title=""/>				
		</section>
<!--- End Shedule & Contact Sidebar -->
			<div class="welcome-column">
				<div class="welcome-icon">
					<i class="fa fa-keyboard-o"></i>
				</div>
				<div class="welcome-text">
					<h3>Birthdays</h3>
					<p>Beginning 2015, each child’s birthday is his/her “special day.” Unfortunately, we request that children save the cake and ice cream for home.</p>
				</div>
			</div>
			<div class="welcome-column">
				<div class="welcome-icon">
					<i class="fa fa-laptop"></i>
				</div>
				<div class="welcome-text">
					<h3>Commitment</h3>
					<p>As an individual who works with young children, we commit myself to furthering the values of early childhood education as they are reflected in the ideals and principles of NAEYC Code of Ethical Conduct. </p>
				</div>
			</div>
	<div class="clearfix"></div>
<!--- Start Four Column Pictures & Text -->
	<a name="testimonials">
		<section class="one-fourth">
			<img src="img/500x371.png" title=""/>
		</section>
		<section class="one-fourth">
			<img src="img/500x371.png" title=""/>
		</section>
		<section class="one-fourth">
			<img src="img/500x371.png" title=""/>
		</section>
		<section class="one-fourth">
			<img src="img/500x371.png" title=""/>
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
			<h3>1st Peson Nice Words</h3>
			<p>Some of our preschoolers are reading on a kindergarten level.</p>
		</section>
		<section class="one-third">
			<td><i class="fa fa-camera-retro"></i></td>
			<h3>Testimony 2</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>		</section>
		<section class="one-third">
			<td><i class="fa fa-keyboard-o"></i></td>
			<h3>Testimony 3</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>		</section>
<!--- End Heading & Text Section -->
	</div>
</section>
<!--- End Parallax Section -->
	<div id="banner-wrapper">
	<div class="clearfix"></div>
<!--- Start Image Section -->
		<div class="review">
			<section class="left-col">
				<img src="img/740x370.jpg" title=""/>
			</section>
<!--- End Image Section -->
<!--- Start Heading & Text -->
			<section class="sidebar">
				<h3>Heading Title Text</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</section>
		</div>
<!--- End Heading & Text -->
	<div class="clearfix"></div>
<!--- Start Heading & Text Section -->
			<h1>Full width heading title section</h1>
<!--- End Heading & Text Section -->
	<div class="clearfix"></div>
<!--- Start Image, Title & Text -->
		<section class="one-third">
			<img src="img/500x371.png" title=""/>
			<h3>Heading title text</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</section>
		<section class="one-third">
			<img src="img/500x371.png" title=""/>
			<h3>heading title text</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</section>
		<section class="one-third">
			<img src="img/500x371.png" title=""/>
			<h3>Heading title text</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</section>
<!--- End Image, Title & Text -->
	<div class="clearfix"></div>
		</div>
<!--- End Banner Wrapper -->
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
			<p>&copy; Rodney Allen, 2018.</p>
		</footer>
<!--- End Footer -->
<!--- Top Scroll Start -->
	<a href="#0" class="cd-top">Top</a>
		<script src="js/top.js"></script> <!-- Gem jQuery -->
		<script src="js/modernizr.js"></script>
<!--- Top Scroll End -->
	</body>
</html>
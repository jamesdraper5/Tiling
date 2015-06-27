<?php session_start(); ?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js" itemscope itemtype="http://schema.org/GeneralContractor"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>West Cork Tiling | Quality, Affordable Tiler in West Cork</title>
	<meta name="author" content="James Draper">
	<meta name="keywords" content="tiling Cork, tiling West Cork, cheap tiling Cork, quality tiling Cork, budget tiling West Cork">
	<meta name="description" content="West Cork Tiling offers high quality tiling in the West Cork area at an affordable price. If you need a tiler in the West Cork area then look no further.">
	<link rel="stylesheet" href="css/reset.css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Italianno|Mate+SC|Arvo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/text.css" media="screen" />
	<link rel="stylesheet" href="css/960.css" media="screen" />
	<link rel='stylesheet' href='css/style.css' media="screen" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="js/modernizr-2.0.6.min.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-29737013-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>
<body id="contact">
	<div class="container_12 wrapper">
		<header>
			<div class="grid_6">
				<a id="logo" href="index.php"><h1>West Cork Tiling</h1></a>
			</div>

			<nav class="grid_6">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="tiling-work.php">Work</a></li>
					<li><a class="active" href="contact.php">Contact</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
			</nav>
		</header>
	
	<div class="clear"></div>

	<section>
		<div class="grid_12">
			<h1>Get In Touch</h1>
			<p>If you would like to book a tiling job, please contact us at the the numbers below, send us an email or fill out the contact form, and we will get back to you as soon as possible.</p>
		</div>
		<div id="contact-details" class="grid_4">
			<h2>Contact Details</h2>
			<ul class="bullets">
				<li itemprop="telephone">(028) 38460</li>
				<li itemprop="telephone">(087) 6244562</li>
				<li itemprop="email">info@westcorktiling.com</li>
				<li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<span itemprop="name">Bob Draper,</span><br>
					<span itemprop="streetAddress">Ardralla,</span><br>
					<span>Church Cross,</span><br>
					<span itemprop="addressLocality">Skibbereen,</span><br>
					<span itemprop="addressregion">Co. Cork<span>
				</li>
			</ul>
		</div>
		<div id="contact-form" class="grid_8">		
	        <h2>Contact Form</h2>
	        <?php
			//init variables
			$cf = array();
			$sr = false;
			
			if(isset($_SESSION['cf_returndata'])){
				$cf = $_SESSION['cf_returndata'];
			 	$sr = true;
			}
	        ?>
	        <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
	            <li id="info">There were some problems with your form submission:</li>
	            <?php 
				if(isset($cf['errors']) && count($cf['errors']) > 0) :
					foreach($cf['errors'] as $error) :
				?>
	            <li><?php echo $error ?></li>
	            <?php
					endforeach;
				endif;
				?>
	        </ul>
	        <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! I will get back to you ASAP!</p>
	        <form method="post" action="process.php">
	            <label for="name">Name: <span class="required">*</span></label>
	            <input type="text" id="name" name="name" 
	            	value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Your Name" required autofocus />
	            
	            <label for="email">Email Address: <span class="required">*</span></label>
	            <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" 
	            	placeholder="email@example.com" required />
	            
	            <label for="telephone">Telephone: </label>
	            <input type="tel" id="telephone" name="telephone" 
	            	value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
	            
	            <label for="address">Your Location: </label>
	            <input type="text" id="address" name="address" 
	            	value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['address'] : '' ?>" placeholder="e.g. Skibbereen" />

	            <label for="enquiry">Enquiry: </label>
	            <select id="enquiry" name="enquiry">
	                <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>General</option>
	                <option value="Tiling" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Tiling') ? "selected='selected'" : '' ?>>Tiling</option>
	                <option value="Other" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Other') ? "selected='selected'" : '' ?>>Other</option>
	            </select>
	            
	            <label for="message">Message: <span class="required">*</span></label>
	            <textarea id="message" name="message"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
	            
	            <span id="loading"></span>
	            <input type="submit" value="Go!" id="submit-button" class="cta" />
	            <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
	        </form>
	        
	    </div>
	</section>

	 <div class="clear"></div>

	</div> <!-- End container_12 -->

	<footer>
		<div class="container_12">
			<aside class="grid_6">
				<small>&copy; 2012 Bob Draper Tiling. Website Design by <a href="http://www.jamesdraper.info">James Draper</a></small>
			</aside>
			<nav class="grid_6">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="tiling-work.php">Work</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
			</nav>
		</div>
	</footer>

</body>
</html>
<?php unset($_SESSION['cf_returndata']); ?>
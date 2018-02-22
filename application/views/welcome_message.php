<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <?php //$this->load->view('components/header/head'); ?>

<!DOCTYPE html>
	<html lang="en"  xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php $this->load->view('components/header/meta'); ?>
		<?php $this->load->view('components/header/title'); ?>
		<?php $this->load->view('components/header/schema'); ?>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/styles/main_layout.css');?>">
		<link href="https://fonts.googleapis.com/css?family=Oswald|Press+Start+2P" rel="stylesheet">
	</head>

<body class="background">

<div id="container">
  	
  	
    <hgroup id="name-header">
		<h1><a href="">Chris <span class="surname-color">Tully</span></a></h1>
		<h2 class="mid-color-text"><em>Web Developer | Digital Marketer  </em></h2>
    </hgroup>
    <div id="main" class="light" role="main">
    	<div class="outer-border"></div>
    	
		<nav id="main-navigation" class="dark semi-light-text">
			<ul>
				<li title="Home"><a class="active"><img src="img/icons/UI/user.png" alt="Home"><img class="active-image" src="img/icons/UI/user_dark.png" alt="Home"></a></li>
				<li title="Resume"><a><img src="img/icons/UI/document_fill.png" alt="Resume"><img class="active-image" src="img/icons/UI/document_fill_dark.png" alt="Resume"></a></li>
				<li title="Portfolio"><a><img src="img/icons/UI/folder_fill.png" alt="Portfolio"><img class="active-image" src="img/icons/UI/folder_fill_dark.png" alt="Portfolio"></a></li>
				<li title="Contact"><a><img src="img/icons/UI/mail_alt.png" alt="Contact"><img class="active-image" src="img/icons/UI/mail_alt_dark.png" alt="Mail"></a></li>
			</ul>
		</nav>
		<div class="scroll-wrapper">
			
			
	    	<section id="home" class="semi-dark-text">
	    		
	    		<article id="about">
	    			<div class="inner-border"></div>
	    			<h1 class="dark-text">About Me</h1>
	    			
	    			<aside><img src="/assets/images/profile_pic_pixel_120x120.png" alt="Profile"></aside>
	    			<p>
	    				Hi I'm Chris. I develop web sites, and excel at various digital marketing aspects.
					</p>
					<p class="secondary">
						
					</p>
	    		</article>
	    		<div id="social-links">
		    		<div class="inner-border"></div>
		    		
		    		<ul>
		    			<li><a href="#"><img src="img/icons/social/icon_Facebook.png" alt="Facebook">Facebook</a></li>
		    			<li><a href="#"><img src="img/icons/social/icon_Twitter%20(alt).png" alt="Twitter">Twitter</a></li>
		    			<li><a href="#"><img src="img/icons/social/icon_LinkedIn%20(alt).png" alt="LinkedIn">Linked In</a></li>
		    			<li><a href="#"><img src="img/icons/social/icon_Flickr.png" alt="Flickr">Flickr</a></li>
		    			<li><a href="#"><img src="img/icons/social/icon_Vimeo.png" alt="Vimeo">Vimeo</a></li>
		    			<li><a href="#"><img src="img/icons/social/icon_Dribbble.png" alt="Dribbble">Dribbble</a></li>
		    		</ul>
		    	</div>
	    	</section>
	    	
	    	
	    	<section id="resume" class="semi-dark-text">
	    		
	    		<div class="left-column">
	    			<div class="inner-border"></div>
	    			<h1 class="dark-text">My Skillset</h1>
	    			
		    		<div id="skillset">
		    			
		    			<ul class="bar-graph">
		    				<li data-graph-percent="100" style="height: 28px; line-height: 28px;"><div class="bar" style="width: 150px; height: 23px;"></div><span class="bar-title">HTML/CSS</span>
								<aside>
									<p>
									Write any info about the skill here.
									You can include any number of skillsets in the graph to the left, 
									it will automatically stretch the bars to fit the graph.
									</p>
								    <p class="secondary">
									Sed ut <a href="#">perspiciatis</a> unde omnis iste natus error sit voluptatem accusantium doloremque 
	    							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
	    							architecto beatae vitae dicta sunt explicabo. 
	    							</p>
								</aside>
							</li>
							<li data-graph-percent="70" style="height: 28px; line-height: 28px;"><div class="bar" style="width: 105px; height: 23px;"></div><span class="bar-title">Actionscript 3.0</span>
								<aside>
									<p>
									Write any info about the skill here.
									You can include any number of skillsets in the graph to the left, 
									it will automatically stretch the bars to fit the graph.
									</p>
								   <p class="secondary">
									Sed ut <a href="#">perspiciatis</a> unde omnis iste natus error sit voluptatem accusantium doloremque 
	    							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
	    							architecto beatae vitae dicta sunt explicabo. 
	    							</p>
								</aside>
							</li>
		    				<li data-graph-percent="85" style="height: 28px; line-height: 28px;"><div class="bar" style="width: 127px; height: 23px;"></div><span class="bar-title">Javascript</span>
								<aside>
									<p>
									Write any info about the skill here.
									You can include any number of skillsets in the graph to the left, 
									it will automatically stretch the bars to fit the graph.
									</p>
								   <p class="secondary">
									Sed ut <a href="#">perspiciatis</a> unde omnis iste natus error sit voluptatem accusantium doloremque 
	    							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
	    							architecto beatae vitae dicta sunt explicabo. 
	    							</p>
								</aside>
							</li>
		    				<li data-graph-percent="55" style="height: 28px; line-height: 28px;"><div class="bar" style="width: 82px; height: 23px;"></div><span class="bar-title">Photoshop</span>
								<aside>
									<p>
									Write any info about the skill here.
									You can include any number of skillsets in the graph to the left, 
									it will automatically stretch the bars to fit the graph.
									</p>
								   <p class="secondary">
									Sed ut <a href="#">perspiciatis</a> unde omnis iste natus error sit voluptatem accusantium doloremque 
	    							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
	    							architecto beatae vitae dicta sunt explicabo. 
	    							</p>
								</aside>
							</li>
		    			</ul>
		    		</div>
		    		<div id="work"> 
		    			<h1>What I Do</h1> 
		    			<ul> 
		    				<li>Web Front-End Development</li> 
		    				<li>Addicting Flash Games</li> 
		    				<li>Beautiful Wordpress Themes</li> 
		    				<li>Awesome Graphic Design</li> 
		    			</ul> 
		    		</div> 
	    		</div>
    			<article class="bar-graph-info">
	    				<div class="inner-border"></div>
	    				<div class="container">
		    				<div class="content">
		    					
		    				</div>
		    			</div>
		    		<noscript>&lt;strong&gt;Please enable Javascript to see info about my skillset, or&lt;/strong&gt;</noscript>
	    				
		    		<a class="resume-download" href="#"><strong>Download Full Resume (PDF)</strong></a>
	    		</article>
    		</section>
    		
    		<section id="portfolio">
    			<div id="portfolio-timer" class="semi-light"></div>
				<div id="portfolio-info" class="semi-light-text dark-semi-transparent"></div>
				<nav id="portfolio-navigation"><div class="portfolio-button active"></div><div class="portfolio-button"></div><div class="portfolio-button"></div><div class="portfolio-button"></div><div class="portfolio-button"></div><div class="portfolio-button"></div></nav>
    			<div id="grid-overlay" style="display: none;"></div>
    			
    			<ul id="portfolio-images" class="semi-light-text">
    				<li class="first">
    					<img src="img/image1.jpg" alt="" style="display: block;">
    					<aside class="dark-semi-transparent">
    						<h1>Envato</h1>
    						<p>
    							Welcome to the portfolio slide&shy;show!
    						</p>
    						<p>
    							Write something informative about your
    							work here. Keep it short and interesting!
    						</p>
    						<a href="#" class="portfolio-link">Visit Site</a>
    					</aside>
    				</li>
    				<li>
    					<img src="img/image2.jpg" alt="" style="display: none;">
    					<aside class="dark-semi-transparent">
    						<h1>Themeforest</h1>
    						<p>
    							Move your mouse outside the image to hide
    							this info and the navigation menu. This also starts
    							the slideshow timer.
    						</p>
    						<p>
    							This box expands vertically to contain more
    							text.
    						</p>
    						<a href="#" class="portfolio-link">Visit Site</a>
    					</aside>
    				</li>
    				<li><img src="img/image3.jpg" alt="" style="display: none;"></li>
    				<li>
    					<img src="img/image4.jpg" alt="" style="display: none;">
    					<aside class="dark-semi-transparent">
    						<h1>Codecanyon</h1>
    						<p>
    							This info is optional, as seen in the previous
    							image. Links are also optional, of course.
    						</p>
    					</aside>
    				</li>
    				<li>
    					<img src="img/image5.jpg" alt="" style="display: none;">
    					<aside class="dark-semi-transparent">
    						<h1>Community</h1>
    						<p>
    							Have you tried clicking on the image?
    						</p>
    						<p>
    							Notice how the image fades out starting
    							from where you clicked.
    						</p>
    						<p>
    							You can also use the navigation buttons
    							at the bottom left to jump to any image
    							in the slideshow.
    						</p>
    						<a href="#" class="portfolio-link">Visit Site</a>
    					</aside>
    				</li>	 
    				<li>
    					<img src="img/image6.jpg" alt="" style="display: none;">
    					<aside class="dark-semi-transparent">
    						<h1>Graphicriver</h1>
    						<p>
    							Lets fill this box out to the max!
    						</p>
    						<p>
    							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
			    				labore et dolore magna aliqua. 
	    					</p>
	    					<p>
	    						Ut enim ad minim veniam, quis nostrud exercitation ullamco
			    				laboris nisi ut aliquip. Sed ut unde omnis iste natus error.
			    				Nemo enim ipsam voluptatem quia.
    						</p>
    						<a href="#" class="portfolio-link">Visit Site</a>
    					</aside>
    				</li>
    			</ul>
    			<noscript>
    				&lt;div class="dark-semi-transparent semi-light-text"&gt;Please enable Javascript to see more of my projects.&lt;/div&gt;
    			</noscript>
    		</section>
    		
    		<section id="contact">
				<h1 class="dark-text">Contact Me</h1>
				<form action="sendform.php" method="post" id="contact-form">
					<div class="inner-border"></div>
					<input type="text" name="name" id="contact-name" placeholder="Name" size="30">
					<span class="error" id="name-error">Invalid name</span> <br>
					<input type="text" name="email" id="contact-email" placeholder="Email" size="30">
					<span class="error" id="email-error">Invalid email</span>
					<textarea name="message" id="contact-message" cols="65" rows="10" placeholder="Message..."></textarea>
					<input type="submit" name="submit" value="Submit" id="contact-submit" class="semi-dark semi-light-text">
					<span class="error" id="message-error">Type in a message first</span>
					<span class="success" id="message-success">I'll get back to you soon!</span>
				</form>
    			<div id="contact-info">
    				<div class="inner-border"></div>
    				<ul class="semi-dark-text">
    					<li><img src="img/icons/UI/map_pin_stroke.png" alt="Location">1523 Lorem St, <br> <span class="second-row">Ipsum, Dolor</span></li>
    					<li><img src="img/icons/UI/iphone.png" alt="Phone">(123) 456 789 00<br><span class="second-row">(987) 654 321 00</span></li>
    					<li><a href="mailto:john@doe.com"><img src="img/icons/UI/mail.png" alt="Email">john@doe.com</a></li>
    					<li><a href="#"><img src="img/icons/UI/home.png" alt="Homepage">www.jdcompany.com</a></li>
    					<li><a href="#"><img src="img/icons/UI/user_alt.png" alt="vCard"><strong>Download My vCard</strong></a></li>
    				</ul>
    			</div>
    		</section>
	    </div>
    <div class="panel" style="top: 0px; left: 0px; background-position: 0px 0px;"></div><div class="panel" style="top: 0px; left: 60px; background-position: -60px 0px;"></div><div class="panel" style="top: 0px; left: 120px; background-position: -120px 0px;"></div><div class="panel" style="top: 0px; left: 180px; background-position: -180px 0px;"></div><div class="panel" style="top: 0px; left: 240px; background-position: -240px 0px;"></div><div class="panel" style="top: 0px; left: 300px; background-position: -300px 0px;"></div><div class="panel" style="top: 0px; left: 360px; background-position: -360px 0px;"></div><div class="panel" style="top: 0px; left: 420px; background-position: -420px 0px;"></div><div class="panel" style="top: 0px; left: 480px; background-position: -480px 0px;"></div><div class="panel" style="top: 0px; left: 540px; background-position: -540px 0px;"></div><div class="panel" style="top: 0px; left: 600px; background-position: -600px 0px;"></div><div class="panel" style="top: 60px; left: 0px; background-position: 0px -60px;"></div><div class="panel" style="top: 60px; left: 60px; background-position: -60px -60px;"></div><div class="panel" style="top: 60px; left: 120px; background-position: -120px -60px;"></div><div class="panel" style="top: 60px; left: 180px; background-position: -180px -60px;"></div><div class="panel" style="top: 60px; left: 240px; background-position: -240px -60px;"></div><div class="panel" style="top: 60px; left: 300px; background-position: -300px -60px;"></div><div class="panel" style="top: 60px; left: 360px; background-position: -360px -60px;"></div><div class="panel" style="top: 60px; left: 420px; background-position: -420px -60px;"></div><div class="panel" style="top: 60px; left: 480px; background-position: -480px -60px;"></div><div class="panel" style="top: 60px; left: 540px; background-position: -540px -60px;"></div><div class="panel" style="top: 60px; left: 600px; background-position: -600px -60px;"></div><div class="panel" style="top: 120px; left: 0px; background-position: 0px -120px;"></div><div class="panel" style="top: 120px; left: 60px; background-position: -60px -120px;"></div><div class="panel" style="top: 120px; left: 120px; background-position: -120px -120px;"></div><div class="panel" style="top: 120px; left: 180px; background-position: -180px -120px;"></div><div class="panel" style="top: 120px; left: 240px; background-position: -240px -120px;"></div><div class="panel" style="top: 120px; left: 300px; background-position: -300px -120px;"></div><div class="panel" style="top: 120px; left: 360px; background-position: -360px -120px;"></div><div class="panel" style="top: 120px; left: 420px; background-position: -420px -120px;"></div><div class="panel" style="top: 120px; left: 480px; background-position: -480px -120px;"></div><div class="panel" style="top: 120px; left: 540px; background-position: -540px -120px;"></div><div class="panel" style="top: 120px; left: 600px; background-position: -600px -120px;"></div><div class="panel" style="top: 180px; left: 0px; background-position: 0px -180px;"></div><div class="panel" style="top: 180px; left: 60px; background-position: -60px -180px;"></div><div class="panel" style="top: 180px; left: 120px; background-position: -120px -180px;"></div><div class="panel" style="top: 180px; left: 180px; background-position: -180px -180px;"></div><div class="panel" style="top: 180px; left: 240px; background-position: -240px -180px;"></div><div class="panel" style="top: 180px; left: 300px; background-position: -300px -180px;"></div><div class="panel" style="top: 180px; left: 360px; background-position: -360px -180px;"></div><div class="panel" style="top: 180px; left: 420px; background-position: -420px -180px;"></div><div class="panel" style="top: 180px; left: 480px; background-position: -480px -180px;"></div><div class="panel" style="top: 180px; left: 540px; background-position: -540px -180px;"></div><div class="panel" style="top: 180px; left: 600px; background-position: -600px -180px;"></div><div class="panel" style="top: 240px; left: 0px; background-position: 0px -240px;"></div><div class="panel" style="top: 240px; left: 60px; background-position: -60px -240px;"></div><div class="panel" style="top: 240px; left: 120px; background-position: -120px -240px;"></div><div class="panel" style="top: 240px; left: 180px; background-position: -180px -240px;"></div><div class="panel" style="top: 240px; left: 240px; background-position: -240px -240px;"></div><div class="panel" style="top: 240px; left: 300px; background-position: -300px -240px;"></div><div class="panel" style="top: 240px; left: 360px; background-position: -360px -240px;"></div><div class="panel" style="top: 240px; left: 420px; background-position: -420px -240px;"></div><div class="panel" style="top: 240px; left: 480px; background-position: -480px -240px;"></div><div class="panel" style="top: 240px; left: 540px; background-position: -540px -240px;"></div><div class="panel" style="top: 240px; left: 600px; background-position: -600px -240px;"></div><div class="panel" style="top: 300px; left: 0px; background-position: 0px -300px;"></div><div class="panel" style="top: 300px; left: 60px; background-position: -60px -300px;"></div><div class="panel" style="top: 300px; left: 120px; background-position: -120px -300px;"></div><div class="panel" style="top: 300px; left: 180px; background-position: -180px -300px;"></div><div class="panel" style="top: 300px; left: 240px; background-position: -240px -300px;"></div><div class="panel" style="top: 300px; left: 300px; background-position: -300px -300px;"></div><div class="panel" style="top: 300px; left: 360px; background-position: -360px -300px;"></div><div class="panel" style="top: 300px; left: 420px; background-position: -420px -300px;"></div><div class="panel" style="top: 300px; left: 480px; background-position: -480px -300px;"></div><div class="panel" style="top: 300px; left: 540px; background-position: -540px -300px;"></div><div class="panel" style="top: 300px; left: 600px; background-position: -600px -300px;"></div></div>
    <footer>
		<?php $this->load->view('components/footer/footer.php'); ?>

    </footer>
</div>


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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/styles/main_layout.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/styles/style.css');?>">
		<link href="https://fonts.googleapis.com/css?family=Oswald|Press+Start+2P" rel="stylesheet">
		<script type="text/javascript" defer="" src="<?php echo base_url('/assets/scripts/core.js');?>"></script>
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
			<ul data-title="home"  id="navigation-items">
				<li data-title="home" title="Home">
					<a data-title="home" class="active">
						<img src="/assets/images/user.png" alt="Home">
						<img class="active-image" src="/assets/images/user_dark.png" alt="Home">
					</a>
				</li>
				<li data-title="resume" title="Resume">
					<a data-title="resume">
						<img src="/assets/images/document_fill.png" alt="Resume">
						<img class="active-image" src="/assets/images/document_fill_dark.png" alt="Resume">
					</a>
				</li>
				<li data-title="portfolio" title="Portfolio">
					<a data-title="portfolio">
						<img src="/assets/images/folder_fill.png" alt="Portfolio">
						<img class="active-image" src="/assets/images/folder_fill_dark.png" alt="Portfolio">
					</a>
				</li>
				<li data-title="contact" title="Contact">
					<a data-title="contact">
						<img src="/assets/images/mail_alt.png" alt="Contact">
						<img class="active-image" src="/assets/images/mail_alt_dark.png" alt="Mail">
					</a>
				</li>
			</ul>
		</nav>
		<div id='sectionsWrapper' class="scroll-wrapper">
					
			<?php $this->load->view('components/sections/home'); ?>
			<?php $this->load->view('components/sections/resume'); ?>

	    	<?php $this->load->view('components/sections/portfolio'); ?> 
	    	<?php $this->load->view('components/sections/contact'); ?>		
    		
	    </div>
    
    <div class="panel" style="top: 0px; left: 0px; background-position: 0px 0px;"></div>
    <div class="panel" style="top: 0px; left: 60px; background-position: -60px 0px;"></div>
    <div class="panel" style="top: 0px; left: 120px; background-position: -120px 0px;"></div>
    <div class="panel" style="top: 0px; left: 180px; background-position: -180px 0px;"></div>
    <div class="panel" style="top: 0px; left: 240px; background-position: -240px 0px;"></div>
    <div class="panel" style="top: 0px; left: 300px; background-position: -300px 0px;"></div>
    <div class="panel" style="top: 0px; left: 360px; background-position: -360px 0px;"></div>
    <div class="panel" style="top: 0px; left: 420px; background-position: -420px 0px;"></div>
    <div class="panel" style="top: 0px; left: 480px; background-position: -480px 0px;"></div>
    <div class="panel" style="top: 0px; left: 540px; background-position: -540px 0px;"></div>
    <div class="panel" style="top: 0px; left: 600px; background-position: -600px 0px;"></div>
    <div class="panel" style="top: 60px; left: 0px; background-position: 0px -60px;"></div>
    <div class="panel" style="top: 60px; left: 60px; background-position: -60px -60px;"></div>
    <div class="panel" style="top: 60px; left: 120px; background-position: -120px -60px;"></div>
    <div class="panel" style="top: 60px; left: 180px; background-position: -180px -60px;"></div>
    <div class="panel" style="top: 60px; left: 240px; background-position: -240px -60px;"></div>
    <div class="panel" style="top: 60px; left: 300px; background-position: -300px -60px;"></div>
    <div class="panel" style="top: 60px; left: 360px; background-position: -360px -60px;"></div>
    <div class="panel" style="top: 60px; left: 420px; background-position: -420px -60px;"></div>
    <div class="panel" style="top: 60px; left: 480px; background-position: -480px -60px;"></div>
    <div class="panel" style="top: 60px; left: 540px; background-position: -540px -60px;"></div>
    <div class="panel" style="top: 60px; left: 600px; background-position: -600px -60px;"></div>
    <div class="panel" style="top: 120px; left: 0px; background-position: 0px -120px;"></div>
    <div class="panel" style="top: 120px; left: 60px; background-position: -60px -120px;"></div>
    <div class="panel" style="top: 120px; left: 120px; background-position: -120px -120px;"></div>
    <div class="panel" style="top: 120px; left: 180px; background-position: -180px -120px;"></div>
    <div class="panel" style="top: 120px; left: 240px; background-position: -240px -120px;"></div>
    <div class="panel" style="top: 120px; left: 300px; background-position: -300px -120px;"></div>
    <div class="panel" style="top: 120px; left: 360px; background-position: -360px -120px;"></div>
    <div class="panel" style="top: 120px; left: 420px; background-position: -420px -120px;"></div>
    <div class="panel" style="top: 120px; left: 480px; background-position: -480px -120px;"></div>
    <div class="panel" style="top: 120px; left: 540px; background-position: -540px -120px;"></div>
    <div class="panel" style="top: 120px; left: 600px; background-position: -600px -120px;"></div>
    <div class="panel" style="top: 180px; left: 0px; background-position: 0px -180px;"></div>
    <div class="panel" style="top: 180px; left: 60px; background-position: -60px -180px;"></div>
    <div class="panel" style="top: 180px; left: 120px; background-position: -120px -180px;"></div>
    <div class="panel" style="top: 180px; left: 180px; background-position: -180px -180px;"></div>
    <div class="panel" style="top: 180px; left: 240px; background-position: -240px -180px;"></div>
    <div class="panel" style="top: 180px; left: 300px; background-position: -300px -180px;"></div>
    <div class="panel" style="top: 180px; left: 360px; background-position: -360px -180px;"></div>
    <div class="panel" style="top: 180px; left: 420px; background-position: -420px -180px;"></div>
    <div class="panel" style="top: 180px; left: 480px; background-position: -480px -180px;"></div>
    <div class="panel" style="top: 180px; left: 540px; background-position: -540px -180px;"></div>
    <div class="panel" style="top: 180px; left: 600px; background-position: -600px -180px;"></div>
    <div class="panel" style="top: 240px; left: 0px; background-position: 0px -240px;"></div>
    <div class="panel" style="top: 240px; left: 60px; background-position: -60px -240px;"></div>
    <div class="panel" style="top: 240px; left: 120px; background-position: -120px -240px;"></div>
    <div class="panel" style="top: 240px; left: 180px; background-position: -180px -240px;"></div>
    <div class="panel" style="top: 240px; left: 240px; background-position: -240px -240px;"></div>
    <div class="panel" style="top: 240px; left: 300px; background-position: -300px -240px;"></div>
    <div class="panel" style="top: 240px; left: 360px; background-position: -360px -240px;"></div>
    <div class="panel" style="top: 240px; left: 420px; background-position: -420px -240px;"></div>
    <div class="panel" style="top: 240px; left: 480px; background-position: -480px -240px;"></div>
    <div class="panel" style="top: 240px; left: 540px; background-position: -540px -240px;"></div>
    <div class="panel" style="top: 240px; left: 600px; background-position: -600px -240px;"></div>
    <div class="panel" style="top: 300px; left: 0px; background-position: 0px -300px;"></div>
    <div class="panel" style="top: 300px; left: 60px; background-position: -60px -300px;"></div>
    <div class="panel" style="top: 300px; left: 120px; background-position: -120px -300px;"></div>
    <div class="panel" style="top: 300px; left: 180px; background-position: -180px -300px;"></div>
    <div class="panel" style="top: 300px; left: 240px; background-position: -240px -300px;"></div>
    <div class="panel" style="top: 300px; left: 300px; background-position: -300px -300px;"></div>
    <div class="panel" style="top: 300px; left: 360px; background-position: -360px -300px;"></div>
    <div class="panel" style="top: 300px; left: 420px; background-position: -420px -300px;"></div>
    <div class="panel" style="top: 300px; left: 480px; background-position: -480px -300px;"></div>
    <div class="panel" style="top: 300px; left: 540px; background-position: -540px -300px;"></div>
    <div class="panel" style="top: 300px; left: 600px; background-position: -600px -300px;"></div></div>
    
	<?php $this->load->view('components/footer/footer.php'); ?>

  
</div>


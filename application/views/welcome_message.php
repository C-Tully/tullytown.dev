<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <?php //$this->load->view('components/header/head'); ?>

<!DOCTYPE html>
	<html lang="en"  xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php $this->load->view('components/header/meta'); ?>
		<?php $this->load->view('components/header/title'); ?>
            <?php $this->load->view('components/header/gtm_1.js'); ?>
		<?php $this->load->view('components/header/schema'); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/styles/main_layout.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/styles/style.css');?>">
		<link href="" rel="stylesheet">
		<script type="text/javascript" defer="" src="<?php echo base_url('/assets/scripts/core.js');?>"></script>
	</head>

<body class="background">
  <?php $this->load->view('components/header/gtm_2.js'); ?>

<div id="container">
  	  
  	
    <hgroup id="name-header">
		<h1><a href="">Chris <span class="surname-color">Tully</span></a></h1>
		<h2 class="mid-color-text"><em>Web Developer | Digital Marketer  </em></h2>
        <h2 class="form_message"><?php if(isset($form_submit_status)){
                echo $form_submit_status;
            } ?></h2>
    </hgroup>
    <div id="main" class="light" role="main">

    	<div id="js_outer-border" class="outer-border"></div>


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
	<?php $this->load->view('components/footer/footer.php'); ?>

  
</div>


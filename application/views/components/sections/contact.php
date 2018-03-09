<section data-title="contact" id="contact" class="hidden">

	<h2 class="dark-text">Contact Me</h2>
		<div class="form_error">
          <?php //echo validation_errors(); ?>
    	</div>         
        <?php echo form_open('form/submit'); ?>
			<div class="inner-border"></div>
			<?php 
				echo form_input(array(
				 	'name'          => 'name',
			        'id'            => 'contact-name',
			        'size'          => '30',
			        'style'         => 'width:50%',
			        'placeholder' 	=> 'Name',
			        'Title'			=> 'Name'
			));				 
				echo form_input(array(
				 	'name'          => 'email',
			        'id'            => 'contact-email',
			        'size'          => '30',
			        'placeholder' 	=> 'Email',
			        'Title'			=> 'Email'
			)); ?>					
			<textarea name="message" id="contact-message" cols="65" rows="10" placeholder="Message..."></textarea>
			 <?php echo form_submit('submit button', 'Get in Touch!',array(
			 	'id' => 'contact-submit',
			 	'class' => 'semi-dark semi-light-text'
			 ));  ?>
			<!-- <input type="submit" name="submit" value="Submit" id="contact-submit" class="semi-dark semi-light-text"> -->
			<span class="error" id="message-error">Type in a message first</span>
			<span class="success" id="message-success">I'll get back to you soon!</span>		
		<?php echo form_close(); ?>
	<div id="contact-info">
		<div class="inner-border"></div>
		<ul class="semi-dark-text">
			<li>
				<a href="mailto:christully12@gmail.com">
					<img src="img/icons/UI/mail.png" alt="Email">christully12@gmail.com
				</a>
			</li>		
		</ul>
	</div>
</section>
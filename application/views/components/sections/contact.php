<section data-title="contact" id="contact" class="hidden">

	<h2 class="dark-text">Contact Me</h2>
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
			<!--<li><img src="img/icons/UI/iphone.png" alt="Phone">(123) 456 789 00<br><span class="second-row">(987) 654 321 00</span></li>-->
			<li><a href="mailto:christully12@gmail.com"><img src="img/icons/UI/mail.png" alt="Email">christully12@gmail.com</a></li>
			<li><a href="#"><img src="img/icons/UI/home.png" alt="Homepage">www.jdcompany.com</a></li>
			<li><a href="#"><img src="img/icons/UI/user_alt.png" alt="vCard"><strong>Download My vCard</strong></a></li>
		</ul>
	</div>
</section>
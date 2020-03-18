<?php 
$title = 'Contact me dude';
require("./head.php");
?>

        <div class="tony-more-info" id="style-10">
			<div class="about-container">
				<h2 class="tony-about-me">Contact me dude !</h2>
		    <form class="tony-form" action="#" method="$_GET">
          	<p class="form-item">
            	<input id="name" name="name" type="text" placeholder="Full name">
          	</p>
          	<p class="form-item">
            	<input id="company" name="company" type="text" placeholder="Company name">
			</p>
			<p class="form-item">
				<input id="adress" type="text" placeholder="Company's adress">
			</p>
			<p class="form-item">
				<select id="who" name="who">
					<option value="">--- Your function in the company ---</option>
					<option value="hrdep">HR Depatement</option>
					<option value="hrmanage">HR Manager</option>
					<option value="secretary">Secretary</option>
					<option value="employment_Agency">Employment agency</option>
				</select>
			</p>
			<p class="form-item">
				<textarea placeholder="Write your message in this area my dude..." id="message" name="message"></textarea>
			</p>
			<button class="form-button">Let's click on this button !</button>
			</form>
		</div>
	</div>
</body>
</html>

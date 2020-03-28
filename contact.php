<?php 
$title = 'Contact me dude';
require("./head.php");
$form=[
	'firstname'=>['text',
				  'Firstname',
				  '[a-z]).{2,}[A-Z]'
				],
	'lastname'=>['test',
				 'Last name',
				 '[a-z]).{2,}[A-Z]'
				],
	'company'=>['text',
				'Company name',
				'[a-z]).{2,}[A-Z].[0-9]'
				],
	'adresse'=>['text',
				'Company\'s adresse',
				'[a-z]).{2,}[A-Z]'
				],
	'mail.adresse'=>['email',
					 '@',
					 '.+@globex.com'

				]
	
];
$select=['who'=>['--- Your function in the company ---','HR Depatement','HR Manager','Secretary','Employment agency']];
		
?>

        <div class="tony-more-info" id="style-10">
			<div class="about-container">
				<h2 class="tony-about-me">Contact me dude !</h2>
		    <form class="tony-form" action="form.php" method="post">
          	<p class="form-item">
				<label for="firstname" id="firstname">
				<input id="firstname" name="firstname" type="text" placeholder="First name" required pattern="[a-z]).{2,}[A-Z]">
				  </label>
			  </p>
			  <p class="form-item">
				  <label for="lastname" id="lastname">
				<input id="lastname" name="lastname" type="text" placeholder="Last name" required pattern="[a-z]).{2,}[A-Z]">
				  </label>
          	</p>
          	<p class="form-item">
			  	<label for="company" id="company">
            	<input id="company" name="company" type="text" placeholder="Company name" required pattern="[a-z]).{2,}[A-Z].[0-9]">
			  	</label>
			</p>
			<p class="form-item">
				<label for="adresse" id="adresse">
				<input id="adresse" name="adresse" type="text" placeholder="Company's adress" required pattern="[a-z]).{2,}[A-Z]">
				</label>
			</p>
			<p class="form-item">
				<label for="mail.adresse" id="mail.adresse">
				<input id="mail.adresse" name="mail.adresse" type="email" placeholder="@" required pattern=".+@globex.com" >
				</label>
			</p>
			<p class="form-item">
				<label for="who" id="who">
				<select id="who" name="who" required>
					<option value="">--- Your function in the company ---</option>
					<option value="hrdep">HR Depatement</option>
					<option value="hrmanage">HR Manager</option>
					<option value="secretary">Secretary</option>
					<option value="employment_Agency">Employment agency</option>
				</select>
				</label>
			</p>
			<p class="form-item">
				<label for="message" id="message">
				<textarea placeholder="Write your message in this area my dude..." id="message" name="message" required></textarea>
				</label>
			</p>
			<button class="form-button" onclick="ok()">Let's click on this button !</button>
			</form>
		</div>
	</div>
	<?php include("./js.php") ?>
</body>
</html>

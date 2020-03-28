<?php require("./head.php");
	require("./presentation.php");
?>


        <div class="tony-more-info" id="style-10">
			<div class="about-container">
			<div id="top"></div>
				<h2 class="tony-about-me">About me</h2>
				<p>Hi there. You probably knows me already, but let's take a look at what I have done in my life, and what I'm good at. Happy browsing to you!</p>
			</div>
			<div class="soft-container">
				<h2 class="tony-soft-skills">My soft skills</h2>

				<ul class="ind-soft-skills">
				<?php foreach($mySoftSkills as $value){echo "<li>$value</li>"; }?>
					
				</ul>
			</div>
			<div class="hard-container">
				<h2 class="tony-hard-skills">My hard skills</h2>
				<ul class="ind-hard-skills">
				<?php foreach($myHardSkills as $value){echo "<li>$value</li>"; }?>
					
				</ul>
			</div>
		</div>
	</div>
	<?php include("./js.php") ?>
</body>
</html>
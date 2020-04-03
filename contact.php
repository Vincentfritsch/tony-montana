<?php 
$title = 'Contact me dude';
require("./head.php");
require("./cont.php");
?>

        <div class="tony-more-info" id="style-10">
			<div class="about-container">
				<h2 class="tony-about-me">Contact me dude !</h2>
		    <form class="tony-form" action="form.php" method="post">
			 <?php foreach($form as $k=>$value)
			  { echo "<p class='form-item'>";
				echo "<label for=$k id=$k>";
				echo "<input id=$k name=$k type='$value[0]' placeholder='$value[1]' required pattern='$value[2]'>";
				echo"  </label>";
			  echo"</p>";}?>
						
			<p class='form-item'>
				<label for='who' id='who'>
				<select id='who' name='who' required>
				<?php  
				for($i=0; $i<count($select);$i++){
				echo "<option value=$select[$i]>$select[$i]</option>"; }?>
				
				</select>
				 </label> 
			 </p> 
			<p class="form-item">
				<label for="message" id="message">
				<textarea placeholder="Write your message in this area my dude..." id="message" name="message" required></textarea>
				</label>
			</p>
			<button class="form-button" name="send">Let's click on this button !</button>
			</form>
		</div>
	</div>
	<?php include("./js.php") ?>
</body>
</html>

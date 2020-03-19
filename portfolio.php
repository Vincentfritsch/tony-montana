<?php 
$title = 'Portfolio';
require("./head.php");
require("./images.php");
?>


        <div class="tony-more-info" id="style-10">
			<div class="about-container">
      <div id="top"></div>
				<h2 class="tony-about-me">Portfolio</h2>
        <?php foreach($images as $image => $texte){echo '
        <figure class="single-img-container image-hover img-shadow-1">
          <img src=" '.$image.'" 
          alt="'.$texte[0].'" title="'.$texte[1].'">
					<div class="overlay">
            <p>
            '.$texte[0].'
            </p>
          </div>
        </figure>';}?>

    </div>
	</div>
</body>
</html>



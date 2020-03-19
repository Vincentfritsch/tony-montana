
<?php 
$title = 'Resume';
require("./head.php");
include("./experience.php");
?>

    
      
      <div class="tony-more-info" id="style-10">
        <div class="about-container">
          <div id="top"></div>
          <h2 class="ind-main-title">About me</h2>
          <p class="tony-email">tonyisarock@montana.world</p>
          <p class="tony-adress">Adress: Ocean Drive, Miami Beach</p>
          <p class="tony-birth">Birth : May 5, 1940</p>
        </div>
        <div class="about-container">
          <h2 class="ind-main-title">Experiences</h2>
        
            <?php foreach($experiences as $date=>$exp)
            {
    
          echo "<div class='ind-main-container'>";
            echo "<div class='dat_fct'>";
              echo "<p class='ind-date'>$date</p>";
              echo" <p class='arrow'>&gt;</p>";
              echo" <p class='ind-fct'>$exp[0]</p>";
          echo" </div>";

            $element=count($exp);
            for($i=1;$i<$element;$i++){
            echo "<div class='skill'>";
              echo "<p class='fake'></p>";
              echo "<div class='ind-skill1'>";
                echo " <ul>";
                  echo"<li>$exp[$i]</li>";
                 echo" </ul>";
            }
              }?>
             </div>
          </div>
        </div>
    
      <div class="soft-container">
        <h2 class="tony-skills">Skills</h2>
        <ul class="ind-soft-skills">
          <li>Never touch my sister</li>
          <li>Never kill woman or a child</li>
          <li>Well dressed</li>
          <li>Fearless</li>
          <li>Know what I want</li>
        </ul>
      </div>
    </div>
  </div>
  </body>

</html>

<?php 
$title = 'Resume';
$nav = "cv";
require("./head.php");
include("./experience.php");
require("./connec.php");


?>
      <div class="tony-more-info" id="style-10">
        <div class="about-container">
        <a href="login.php" onclick="login()">LOGIN</a>
          <div id="top"></div>
          <?php foreach($about as $k=>$value){echo'<h2 class="ind-main-title">'.$k.'</h2>
          <p class="tony-email">'.$value[0].'</p>
          <p class="tony-adress">'.$value[1].'</p>
          <p class="tony-birth">Birth :'.$value[2].'</p>';}?>
        </div>
        <div class="about-container">
          <h2 class="ind-main-title">Experiences</h2>
        
            <?php 
            $pdo = new \PDO(DSN, USER, PASS);
            $query = "SELECT * FROM experience ORDER BY date_job DESC";
            $statement = $pdo->query($query);
            $experiences= $statement->fetchAll();
            
            foreach($experiences as $exp)
            {?>
    
            <div class='ind-main-container'>
              <div class='dat_fct'>
              <p class='ind-date'> <?php echo" $exp[date_job]";?> </p>
               <p class='arrow'>&gt;</p>
               <p class='ind-fct'><?php echo "$exp[job]";?></p>
           </div>

            <?php 
            echo "<div class='skill'>";
              echo "<p class='fake'></p>";
              echo "<div class='ind-skill1'>";
                echo " <ul>";
                  echo"<li>$exp[exp1]</li>";
                 echo" </ul>";
              echo "</div>";
              
              echo "<div class='skill'>";
              echo "<p class='fake'></p>";
              echo "<div class='ind-skill1'>";
                echo " <ul>";
                  echo"<li>$exp[exp2]</li>";
                 echo" </ul>";
              echo "</div>";
              echo "<div class='skill'>";
              echo "<p class='fake'></p>";
              echo "<div class='ind-skill1'>";
                echo " <ul>";
                  echo"<li>$exp[exp3]</li>";
                 echo" </ul>";
              echo "</div>";
              echo "<div class='skill'>";
              echo "<p class='fake'></p>";
              echo "<div class='ind-skill1'>";
                echo " <ul>";
                  echo"<li>$exp[exp4]</li>";
                 echo" </ul>";
              echo "</div>";
              }?>
             
          </div>
          <a id="button" href="#top"></a> 
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
  <?php include("./js.php") ?>
  <script type="text/javascript" src="login.js"> </script>
  </body>

</html>
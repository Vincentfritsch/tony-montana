<?php

$title = "Remove-Add-See contact";
require("./index2.php");
require("./connec.php");
?>
 
    <div class="uk-background-secondary">
    <?php 
            
            $query = "SELECT * FROM experience ORDER BY date_job DESC";
            $statement = $pdo->query($query);
            $experiences= $statement->fetchAll();?>
            
            

    <table class="uk-table uk-position uk-table-small">
    <div class="uk-position-top-center uk-text-large " ><bold>Administrator</bold></div>
    <thead>
        <tr>
            <th>Date Job</th>
            <th>Job</th>
            <th>Skill 1</th>
            <th>Skill 2</th>
            <th>Skill 3</th>
            <th>Skill 4</th>
        </tr>
    </thead>
    <?php foreach($experiences as $exp)
            {?>
    
        <tr>
            <td><?php echo " $exp[date_job]";?></td>
            <td><?php echo " $exp[job]";?></td>
            <td><?php echo " $exp[exp1]";?></td>
            <td><?php echo " $exp[exp2]";?></td>
            <td><?php echo " $exp[exp3]";?></td>
            <td><?php echo " $exp[exp4]";?></td>
        </tr>
           
            <?php }?>
</table>

<?php
require("footer.php");





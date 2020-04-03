<?php

$title = "Contact List";
require("./index2.php");
require("./connec.php");
?>

    <div class="uk-background-secondary">
    <?php 
            
            $query = "SELECT * FROM contact ORDER BY log_date DESC";
            $statement = $pdo->query($query);
            $experiences= $statement->fetchAll();?>
            
            

    <table class="uk-table uk-position uk-table-small">
    <div class="uk-position-top-center uk-text-large " ><bold>Administrator</bold></div>
    <thead>
        <tr>
            <th>Who !</th>
            <th>Function</th>
            <th>Company and adress</th>
            <th>Email</th>
            <th>Message</th>
            <th>When</th>
        </tr>
    </thead>
    <?php foreach($experiences as $exp)
            {?>
    
        <tr>
            <td><?php echo " $exp[firstname] $exp[lastname]";?></td>
            <td><?php echo " $exp[company_function]";?></td>
            <td><?php echo " $exp[company] / $exp[adress]";?></td>
            <td><?php echo " $exp[email]";?></td>
            <td><?php echo " $exp[company_message]";?></td>
            <td><?php echo " $exp[log_date]";?></td>
        </tr>
           
            <?php }?>
</table>

<?php
require("footer.php");
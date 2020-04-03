<?php
$title="Message sort";
require("./index2.php");
require("./connec.php");

?>
 <div class="uk-background-secondary">
    <?php 
            $pdo = new \PDO(DSN, USER, PASS);
            $query = "SELECT firstname, lastname, company, company_function, company_message, email, adress FROM contact ORDER BY log_date DESC";
            $statement = $pdo->query($query);
            $experiences= $statement->fetchAll();?>
            
            

    <table class="uk-table uk-position uk-table-small">
    <div class="uk-position-top-center uk-text-large " ><bold>Administrator</bold></div>
    <thead>
        <tr>
            <th>Who !</th>
            <th>Message</th>
            <th>Company</th>
            <th>Email</th>
            
            
        </tr>
    </thead>
    <?php foreach($experiences as $exp)
            {?>
    
        <tr>
            <td><?php echo " $exp[firstname] $exp[lastname] / $exp[company_function]";?></td>
            <td><?php echo " $exp[company_message]";?></td>
            <td><?php echo " $exp[company]";?></td>
            <td><?php echo " $exp[email]";?></td>
            
            
        </tr>
           
            <?php }?>
</table>


<?php
require("footer.php");
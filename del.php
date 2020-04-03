<?php
$title="Delete";
require("./index2.php");
require("./connec.php");

$del=$_POST['del'];
?>


<div class="uk-background-muted">
    <?php 
            $pdo = new \PDO(DSN, USER, PASS);
            $query = "SELECT * FROM experience ORDER BY date_job Desc";
            $statement = $pdo->query($query);
            $experiences= $statement->fetchAll();?>
    <?php   
    //if(isset($del))
    //{
      //  if(in_array('-',$del))
        //{
    
            $pdo2 = new \PDO(DSN, USER, PASS);
            $query = 'DELETE FROM experience WHERE date_job= :del';
            $statement = $pdo2->prepare($query);

            $statement->bindValue(':del', $del, \PDO::PARAM_STR);
        
            $experiences= $statement->execute();
        //}
        //else{echo "You should write so YYYY MM - YYYY MM";}
            $pdo = new \PDO(DSN, USER, PASS);
            $query = "SELECT * FROM experience ORDER BY date_job Desc";
            $statement = $pdo->query($query);
            $experiences= $statement->fetchAll(); 
    //}  
          ?>  

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
  
<form method="post">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Enter the date which you want to remove</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="del" placeholder=" YYYY MM - YYYY MM">
        </div>

       <div uk-position-center> <button type="submit" name="delpo" class="uk-button uk-button-danger">Erased</button> </div>
    </fieldset>
</form>
<?php
require("footer.php");
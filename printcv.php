<?php 
$title = "Print my f***ing Résumé !!!";
require("./connec.php");?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
        <?php if (isset($title)){?>
            <?php echo $title;}?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css" />
    
    <link media="print" > 
    <style> 
        table {background: white;} 
        @media print {
	    .scrolltop-wrap {
	        display: none !important;
            }
        }
    </style>
        
</head>
<body>
<nav class="uk-navbar-container" uk-navbar uk-background-secondary>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="cv.php">Return to the Resume</a></li>
                     
        </ul>

    </div>
</nav>
<div class="uk-background-muted">
    <?php 
            
            $query = "SELECT * FROM experience ORDER BY date_job DESC";
            $statement = $pdo->query($query);
            $experiences= $statement->fetchAll();?>
            
            

    <table class="uk-table uk-position uk-table-small uk-table-divider">
    <div class="uk-position-top-center uk-text-large " ><bold>Print mode</bold></div>
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
<div uk-position-center> <button type="submit" name="print" class="uk-button uk-button-primary">Print</button> </div>
<?php
require("footer.php");

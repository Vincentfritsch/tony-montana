<?php
$title="Add";
require("./index2.php");
require("./connec.php");

?>

<form method="post">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend uk-position-top-center">Add a new experience</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="date" placeholder="Date : YYYY MM - YYYY MM">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="job" placeholder="Job">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="exp1" placeholder="Skill 1">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="exp2" placeholder="Skill 2">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="exp3" placeholder="Skill 3">
        </div>
        
        <div class="uk-margin">
            <input class="uk-input" type="text" name="exp4" placeholder="Skill 4">
        </div>


       <div class="uk-align-left"><button type="submit" name="addexp" class="uk-button uk-button-secondary ">Add a new experience</button></div>

     
        

    </fieldset>
</form>

<?php 
$date= $_POST['date'];
(array)$date1=array("$date");
$job= $_POST['job'];
$exp1= $_POST['exp1'];
$exp2= $_POST['exp2'];
$exp3= $_POST['exp3'];
$exp4= $_POST['exp4'];


//if(isset($_POST['addexp'])){
  //  if(in_array('-',$date1))
    //{
      //  if($date <>' ' && strlen($date)>2 && $job<>' ' && strlen($job)>2 && $exp1<>'  ' && strlen($exp1)>2 && $exp2<>' ' && strlen($exp2)>2 && $exp3<>' ' && strlen($exp3)>2 && $exp4<>' ' && strlen($exp4)>2 )
        //{
        $query = "INSERT INTO experience (date_job, job, exp1, exp2, exp3, exp4) VALUES (:date_job, :job, :exp1, :exp2, :exp3, :exp4)";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':date_job', $date, \PDO::PARAM_STR);
        $statement->bindValue(':job', $job, \PDO::PARAM_STR);
        $statement->bindValue(':exp1', $exp1, \PDO::PARAM_STR);
        $statement->bindValue(':exp2', $exp2, \PDO::PARAM_STR);
        $statement->bindValue(':exp3', $exp3, \PDO::PARAM_STR);
        $statement->bindValue(':exp4', $exp4, \PDO::PARAM_STR);


        $statement->execute();
        //}
    //else
      //  { echo "<p class='alert alert-danger d-flex justify-content-center' role='alert'>You must completed the form</p>";
        //}
   // }   
//else 
  //  { echo "<p class='alert alert-danger d-flex justify-content-center' role='alert'>You must insert the date like this form YYYY MM - YYYY MM Dude !!!</p>";

    //}
//}
?>
<?php
require("footer.php");
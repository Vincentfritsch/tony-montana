<style>  
*{background-image:  url('https://i.ibb.co/RNwZjy7/tony03.jpghttps://i.ibb.co/RNwZjy7/tony03.jpg');
    margin: 0;}

div {width: 50%;
    text-align: center;
    border:2px;
    margin-top:25%;
    margin-left: 10%;
    border-radius: 10px;}
div,p{
    background:black;
    color:white;
    display:flex;
    align-items: center;
    border-radius: 10px;}
p{
    align-items: center;}
strong{
    background:black;}   
         </style>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
<?php

$firstname = htmlentities($_POST['firstname']);
$lastname = htmlentities($_POST['lastname']);
$company = htmlentities($_POST['company']);
$adress = htmlentities($_POST['adresse']);
$email = $_POST['mail'];
$who = $_POST['who'];
$message = htmlentities($_POST['message']);
$date = date("Y-m-d G:i:s");


require_once('./connec.php');


if(isset($_POST['send'])){
    if($firstname <>' ' && strlen($firstname)>2 && $lasttname<>' ' && strlen($lastname)>2 && $company<>'  ' && strlen($company)>2 && $adress<>' ' && strlen($adress)>2 && $email<>' ' && strlen($email)>2 && $message<>' ' && strlen($message)>2 )
    {
    $query = "INSERT INTO contact (firstname, lastname,company,adress, company_function, company_message, log_date, email) VALUES (:firstname, :lastname, :company, :adress, :who, :company_message, :date_time, :email)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
    $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
    $statement->bindValue(':company', $company, \PDO::PARAM_STR);
    $statement->bindValue(':adress', $adress, \PDO::PARAM_STR);
    $statement->bindValue(':who', $who);
	$statement->bindValue(':company_message', $message, \PDO::PARAM_STR);
    $statement->bindValue(':date_time', $date);
    $statement->bindValue(':email', $email);
    
    $statement->execute();
    }
    else{ echo "<p class='alert alert-danger d-flex justify-content-center' role='alert'>You must completed the form</p>";}

}
 $post= "SELECT * from contact";
 $statement = $pdo->query($post);
 $posts = $statement->fetchAll();
 

?>

<?php echo "<div class='message'> 
<p>Hi $firstname $lastname I know where do come $company who stay in <strong>$adress</strong>   $email</bold>. You contact me because you are a $who and you want talk with me about <br>  $message</p>
</div>";
?>
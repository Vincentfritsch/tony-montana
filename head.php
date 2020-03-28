<?php include('./tonynav.php'); 
$nav = "accueil";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php if (isset($title)):?>
            <?php echo $title; ?>
        <?php else: ?>
            Tony Montana
        <?php endif ?>
    </title>
    <meta content="Welcome in my CV! My name is Tony Montana, and you probably already knows me..." name="description">
    <meta content="Momo, Vince, Mooks" name="author">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
    
  <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <link href="style.css" rel="stylesheet">
    
</head>
<body class="tony-body">
    <header class="header">
    
        <nav class="tony-nav  ">
        <?php foreach($tonyNav as $k=>$value){ echo '   <a class="tony-nav-item';?> <?php echo' " href=" '.$k.'" title="'.$value[0].'"><i class="fas fa-user-tie"></i> <span class="link">'.$value[1].'</span>
            </a>'; }?>
        
        </nav>
    </header>
    <div class="main-outter-container">
        <div class="main-container">
			<main class="main">
                <img class="background-profile" src="https://i.ibb.co/br01spM/tony-bg.png"> 
                <img alt="Tony is awesome!" class="tony-profile-main top-negative" src="https://i.ibb.co/VHDBrk0/tony-profile.jpg" title="Tony is awesome!">
				<div class="tony-name top-negative">
					Tony Montana
				</div>
				<div class="tony-subtitle top-negative">
					<span class="tony-subtitle-span"></span>
				</div>
				<div class="tony-social top-negative">
                <?php  foreach($tonySocial as $k=>$value){echo '<a href="'.$k.'"><img src="'.$value[0].'" class="tony-social-item"  title="'.$value[1].'"><i class="fab fa-facebook"></i></img> </a>';} ?>
                                   
                </div>
                
			</main>
			<a id="button" href="#top"></a>
			<footer class="footer">
            <?php foreach($tonyFooter as $k=>$value){echo '  <a class="tony-footer-item" href="'.$k.'" title="'.$value[0].'"><span class="link">'.$value[1].'</span> <i class="fas fa-download"></i>
                </a>'; } ?>
              <div class="mentions">
                <?php foreach($tonyFooter2 as $k=>$value){echo ' <a href="'.$k.'" title="'.$value.'">'.$value.' </a>';}?>
                 <a href="#" title="RGPD"> RGPD </a>
                 <a  href="#" title="Legal Mentions"> Legal Mentions</a>
                </div>
			</footer>
        </div>
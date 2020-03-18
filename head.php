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
    <script src="https://kit.fontawesome.com/1efff14242.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body class="tony-body">
    <header class="header">
    
        <nav class="tony-nav">
            <a class="tony-nav-item" href="./index.php"><i class="fas fa-user-tie"></i> <span class="link">About</span></a> <a class="tony-nav-item" href="./cv.php"><i class="fas fa-file-alt"></i> <span class="link">CV</span></a> <a class="tony-nav-item" href="./portfolio.php"><i class="fas fa-photo-video"></i> <span class="link">Portfolio</span></a> <a class="tony-nav-item" href="./contact.php"><i class="fas fa-envelope"></i> <span class="link">Contact</span></a>
        </nav>
    </header>
    <div class="main-outter-container">
        <div class="main-container">
			<main class="main">
				<img class="background-profile" src="https://i.ibb.co/br01spM/tony-bg.png"> <img alt="Tony is awesome!" class="tony-profile-main top-negative" src="https://i.ibb.co/VHDBrk0/tony-profile.jpg">
				<div class="tony-name top-negative">
					Tony Montana
				</div>
				<div class="tony-subtitle top-negative">
					<span class="tony-subtitle-span"></span>
				</div>
				<div class="tony-social top-negative">
					<a class="tony-social-item" href="https://www.facebook.com"><i class="fab fa-facebook"></i></a> <a class="tony-social-item" href="https://www.twitter.com"><i class="fab fa-twitter-square"></i></a> <a class="tony-social-item" href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
				</div>
			</main>
			<a id="button" href="#top"></a>
			<footer class="footer">
				<a class="tony-footer-item" href="#"><span class="link">Download CV</span> <i class="fas fa-download"></i></a> <a class="tony-footer-item" href="contact.html"><span class="link">Who am I ?</span> <i class="fas fa-user-tie"></i></a>
			</footer>
        </div>
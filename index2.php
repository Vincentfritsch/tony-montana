
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="login.js"> </script>
        <title>
        <?php if (isset($title)){?>
            <?php echo $title;}?>
    </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css" />
        <style> 
        table {background: black;} 
        
        </style>
        
    </head>
    <body>
    <nav class="uk-navbar-container" uk-navbar uk-background-secondary>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="cv.php">Return to the Resume</a></li>
            <li>
                <a href="deloradd.php">Modifications</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li ><a href="add.php">Add</a></li>
                        <li><a href="del.php">Remove</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="contact_list.php">See contact</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li ><a href="company_sort.php">Sort by company</a></li>
                        <li><a href="message_sort.php">Sort by message</a></li>
            </li>
            
        </ul>

    </div>
</nav>
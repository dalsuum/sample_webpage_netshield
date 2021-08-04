<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
     <!--Header-->
 <header>
    <!-- Logo -->
    <div id=logo>
        <img src="img/logo.png" alt="logo">
    </div>
    
    <!--Navigation Bar-->
    <div class="navigation_div">
        <ul class="navigation_menu">
            <li class="home <?php if ($section == "home") {echo "on";}?>">
                <a href="/web/index.php?id=home">Home</a>    
            </li>
            <li class="devops <?php if ($section == "devops") {echo "on";}?>">
                <a href="/web/index.php?id=devops">DevOps</a>
            </li>
            <li class="systemadministrator <?php if ($section == "system administrator") {echo "on";}?>">
                <a href="/web/index.php?id=system administrator">SysAdmin</a>
            </li>
            <li class="about">
                <a href="/web/about.php">About</a>
            </li>
            <li class="contact">
                <a href="/web/contact.php">Contact</a>
            </li>
        </ul>
        
        <ul class="navigation_menu2">
            
            <li class="singin">
                <a href="/web/singin.php">Singin</a>
            </li>
            <li class="singout">
                <a href="/web/singout.php">Singout</a>
            </li>
            <li class="singup">
                <a href="/web/singup.php">Singup</a>
            </li>
            <li class="search">
                <form action="#" method="POST">
                    <input type="search" id="search_input" name ="search_input" placeholder="Enter Search">
                    <input type="button" id="search_button" name="search_button" value="search">
                </form>
            </li>
        </ul>   
       
        
        
        <div class="clear"></div> 
    </div>

    <!-- Search Bar -->
    
</header>

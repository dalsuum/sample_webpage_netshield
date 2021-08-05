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
    <!--Navigation Bar-->
    <div class="container navigation_container">  <!-- Navigation_container_start -->
        <div class="row"><!-- Navigation_row_start -->
            
            <div class="col-md-5 navigation_left"><!-- Navigation_left_start -->
                <ul class="navigation_left_menu">
                    <li class="home <?php if ($section == "home") {echo "on";}?>">
                        <a href="/web/index.php?id=home">Home</a>    
                    </li>
                    <li class="devops <?php if ($section == "devops") {echo "on";}?>">
                        <a href="/web/index.php?id=devops">DevOps</a>
                    </li>
                    <li class="systemadministrator <?php if ($section == "system administrator") {echo "on";}?>">
                        <a href="/web/index.php?id=system administrator">System</a>
                    </li>
                    <li class="about">
                        <a href="/web/about.php">About</a>
                    </li>
                    <li class="contact">
                        <a href="/web/contact.php">Contact</a>
                    </li>
                </ul>
            </div> <!-- navigation_left_end -->

            <div class="col-md-2 navagation_logo"> <!-- navigation_icon_start -->
                    <img src="img/icon.ico" alt="logo">
            </div> <!-- navigation_icon_end -->

            <div class="col-md-5 navigation_right">
                <ul class="navigation_right_menu">
                    
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
            </dv><!-- navigation_right_end -->
        </div><!-- row_end -->
    </div><!-- container_end -->

    <!-- Clear Line -->
    <div class="clear"></div> 
</header>

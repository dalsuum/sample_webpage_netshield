<?php 
    $pageTitle = "Catalog";
    $section = null;
    if (isset($_GET["id"])){
         if ($_GET["id"] == "devops"){
            $pageTitle = "DevOps";
            $section = "devops";
        } else if ($_GET["id"] == "system administrator"){
            $pageTitle = "System Administrator";
            $section = "system administrator";
        }
    }
    include("include/header.php"); ?>

    <h2>Welcome <?php echo $pageTitle; ?></h2>


    <?php include("include/footer.php"); ?>
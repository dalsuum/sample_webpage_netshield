
<?php 
    $pageTitle = "Home";
    $section = null;
    
    include("include/header.php"); ?>

    <h2>Welcome <?php echo $pageTitle; ?></h2>
    <!-- Main Contect -->
    <div class="container">
    
        <div class="row">
            <div class="col-md-4">
                <div class="content_div">
               
                <p>
                <a href="https://css-tricks.com/snippets/css/css-box-shadow/">CSS Box Shadow Lession </a>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsa laborum beatae corrupti maxime deserunt laboriosam consectetur fugit! Unde, libero nostrum necessitatibus dicta error saepe quae expedita officiis alias vitae!
                </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content_div">
                    <p>
                        <a href="https://stackoverflow.com/questions/57743633/how-do-you-add-a-navigation-bar-on-the-same-line-as-a-header">Nav bar add in same header</a>
                    </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, magni aperiam! Qui voluptatum sint, quod nisi molestiae corrupti commodi esse incidunt sed aliquid beatae repellendus laboriosam nesciunt saepe veniam rerum?</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content_div">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, magni aperiam! Qui voluptatum sint, quod nisi molestiae corrupti commodi esse incidunt sed aliquid beatae repellendus laboriosam nesciunt saepe veniam rerum?</p>
                </div>
            </div>
        </div>
        
    </div>
    <?php include("include/footer.php"); ?>

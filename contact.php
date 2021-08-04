
<?php 
    $pageTitle = "Contact";
    include("include/header.php"); ?>

<h2>Welcome <?php echo $pageTitle; ?></h2>        
<!--Main Content-->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="content_div">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, qui. Odio, placeat, labore recusandae quasi eius voluptatem consequuntur, quas reiciendis voluptas quae numquam. Quis similique natus cumque facilis laboriosam accusantium?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit sapiente nostrum fugiat reprehenderit, magnam aperiam voluptas, odio vitae architecto perferendis numquam, quis quidem molestias rem beatae accusantium magni ratione aut.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus soluta sint omnis maiores sequi labore reiciendis. Molestiae ipsum, illum sequi unde porro, consectetur cupiditate magnam odio assumenda similique consequuntur fugit.
            </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact_back_div">
                <form id="contact_form" name="contact_form" action="PostEmail.php" method="POST">
                    
                        <legend>Contact Us</legend>
                            <table >
                                <tr class="button_tr">
                                    <!-- <td>
                                        <label for="Name">Name</label>
                                    </td> -->
                                    <td >
                                        <input type="name" id="Name" name="Name" placeholder="Enter Name" autofocus="autofocus" >
                                    </td>                                
                                </tr>
                                <tr class="button_tr">
                                    <!-- <td>
                                        <label for="Tel">Phone Number</label>
                                    </td> -->
                                    <td>
                                        <input type="tel" id="Tel" name="Tel" placeholder="Enter Phone Number">
                                    </td>
                                <tr class="button_tr">
                                    <!-- <td>
                                        <label for="Email">Email</label>
                                    </td> -->
                                    <td>
                                        <input type="email" id="Email" name="Email" placeholder="Email Address">
                                    </td>
                                </tr>
                                <tr class="button_tr">
                                    <!-- <td>
                                        <label for="Subject">Subject</label>
                                    </td> -->
                                    <td>
                                        <input type="text" id="Subject" name="Subject" placeholder="Enter Subject">
                                    </td>
                                </tr>
                                <tr class="button_tr">
                                    <!-- <td>
                                        <label for="Message">Message</label>
                                    </td> -->
                                    <td>
                                        <textarea id="message" name="Message" placeholder="Enter Message" resize="none" rows="5" cols="22" maxlength="255"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <input type="reset" name="Reset" id="Reset" value="Reset" class = "button" />
                                    
                                        <input type="submit" name="Send" id="Send" value="Submit" class = "button" />
                                    </td>
                                </tr>
                            </table>
                                            
                </form>
            </div>  
        </div>
    </div>    
</div>
  
  
 <?php include("include/footer.php"); ?>    

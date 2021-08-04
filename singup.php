<?php 
    $pageTitle = "Singup";
    include("include/header.php"); ?>

<h2>Welcome <?php echo $pageTitle; ?></h2>        
<!--Main Content-->
<div class="container">

<div class="contact_login_div">
                <form id="contact_form" name="contact_form" action="#" method="POST">
                    
                        <legend>Singin</legend>
                            <table >
                                <tr class="button_tr">
                                    <td>
                                        <input type="name" id="Name" name="Name" placeholder="Enter Name">
                                    </td>
                                </tr>

                                <tr class="button_tr">
                                    <td>
                                        <input type="ph" id="Phone" name="Phone" placeholder="Enter Phone Number">
                                    </td>
                                </tr>
                                
                                <tr class="button_tr">
                                    <td>
                                        <input type="email" id="Email" name="Email" placeholder="Email Address">
                                    </td>
                                </tr>
                                <tr class="button_tr">
                                    <td>
                                        <input type="password" id="Subject" name="password" placeholder="Enter Password">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>    
                                        <input type="submit" name="login" id="login" value="Signup" class = "button" />
                                    </td>
                                </tr>
                            </table>
                                            
                </form>
            </div>  


</div>
  
  
 <?php include("include/footer.php"); ?>    
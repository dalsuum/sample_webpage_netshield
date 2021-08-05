<?php 
    $pageTitle = "Singin";
    $section = "singin";
   
    include("include/header.php"); 
    ?>

<h2>Welcome <?php echo $pageTitle; ?></h2>        
<!--Main Content-->
<div class="container">

<div class="contact_login_div">
                <form id="contact_form" name="contact_form" action="#" method="POST">
                    
                        <legend>Singin</legend>
                            <table >
                                
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
                                        <input type="password" id="Subject" name="password" placeholder="Enter Password">
                                    </td>
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        <p>
                                        <a href="ForgotPassword.php" name="Forgot Password" id="Forgot_Password" value="Forgot Password">Forgot Password</a>
                                        (or)
                                        <a href="singup.php" name="Singup" id="Singup" value="Singup">Singup</a>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>    
                                        <input type="submit" name="login" id="login" value="Submit" class = "button" />
                                    </td>
                                </tr>
                            </table>
                                            
                </form>
            </div>  

</div>
  
  
 <?php include("include/footer.php"); ?>    
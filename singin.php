<?php 
    $pageTitle = "Singin";
    $section = "singin";
   
    include("include/header.php"); 
    ?>

<h2>  Welcome <?php echo $pageTitle; ?></h2> 

<button  id="login_button" onClick="showDialog()">login?</button> 
<p id="login_p">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo amet, consequatur fugit eligendi nam dolor alias minima delectus corrupti sed quod dolores voluptatibus sit consectetur quisquam quidem. Eveniet, obcaecati error!
</p>



<!--Main Content-->
    <div  id="overlay" onClick="hideDialog()" >
   
    </div>
     
        <div id="dialog">

            <legend>Singin<span onClick="hideDialog()">&times;</span> </legend>

                <form id="contact_form" name="contact_form" action="#" method="POST">
                    
                       
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
    
    <script>
        function showDialog() {
        document.getElementById("overlay").style.display = "block";
        document.getElementById("dialog").style.display = "block";
        }
        function hideDialog() {
        document.getElementById("overlay").style.display = "none";
        document.getElementById("dialog").style.display = "none";
        }
    </script>
  
  
 <?php include("include/footer.php"); ?>    
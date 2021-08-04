<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Email</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<?php
        $myEmailAddress = "dcs.suum@gmail.com";
        $subject = $_POST['Subject'];
        
        $name = $_POST['Name'];
        $email = $_POST['Email']; 
        $phone = $_POST['Tel'];
        $message = $_POST['Message'];
        $header = "from: $name <$email> <$phone>";

        mail($myEmailAddress, $subject, $message, $header);

    ?>
    <p>Thanks for Sending.</p>
    <div class="container">
        <div class="contact_div">
            <p>Thanks for Sending.</p>
        </div>    
    </div>

</body>
</html>
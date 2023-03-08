
<?php
$message_sent = false;
if(isset($_POST['email'])&& $_POST['email'] !=''){
    
    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        $to = "welangaieric@gmail,com";
        $body="";
    
        $body = "From:" .$name."\r\n";
        $body = "Email:" .$email."\r\n";
        $body = "Message:" .$message."\r\n";
    
        mail($to,$subject,$body);
        echo'
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Contact form</title>
                <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
                <div class="container">
                    <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
                    <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
                    
                </div>
            </body>
            </html>
';

    }
    


    

}



?>

<?php
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST['name']) && !empty($_POST['email'])&& !empty($_POST['message'])
        ){  //declare variables
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];


            $to = "contact@iamkwasi.dev";
            $subject = "New Contact Form Submission";
            $body = "Name: {$name}\nEmail: {$email}\nMessage: {$message}";
            $headers = "From: {$email}";

            // print alert message after submission
            if(mail($to, $subject, $body, $headers)) {
                echo "<script type='text/javascript'>";
                echo "alert('Your message has been sent successfully. Thank you!')";
                echo "</script>";
            } else {
                echo "<script type='text/javascript'>";
                echo "alert('Sorry, message submission failed. Please try again')";
                echo "</script>";
            }
        }
    } 
    
    // redirect to homepage 
    echo "<script type='text/javascript'>
        setTimeout(function () {
            window.location.href = '/index.html';         
        },1000); // 1 second
    </script>";
?>
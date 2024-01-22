<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    $recipient = "2omeryildiz2@gmail.com";
    $subject = "Contact Form Submission from $name";





     // Send the email

     
         echo "Email sent successfully!<br>";
         echo "Name: " . $name . "<br>";
         echo "Email: " . $email . "<br>";
         echo "Message: " . $message . "<br>";
    
        
     
 }


?>
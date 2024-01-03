<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $data = "Name :- " . $name . "\r\n Email :- " . $email . "\r\n Message :- " . $message;

    $to = "\r\n Shrihari123@gmail.com";
    $subject = "\r\n New Contact Form Submission ";
    $headers = "\r\n From:- $email";
    if ($email!=NULL)
      {
        mail($to, $subject, $data, $headers);
      }
      else
      {
          echo "Error: Message not accepted";
      }
    header("Location: ../index.html");
}
?>
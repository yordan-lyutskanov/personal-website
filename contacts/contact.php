<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $myEmail = "lyutskanov.yordan@abv.bg";
    $headers = "From: ".$mailFrom;
    $txt = "Messing sent by Contact Form from: ".$name.".\n\n".$message;
    mail($myEmail, $subject, $txt, $headers);
    header("Location: index.html?mailsent");
  }
 ?>

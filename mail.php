<?php
  $mail_to = 'chetankumar.nv@gmail.com'; // specify your email here

    // Assigning data from the $_POST array to variables
    $first-name = $_POST['first-name'];
    $last-name = $_POST['last-name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$spaces = $_POST['spaces'];
	$property = $_POST['property'];
    $interestedIn = $_post['interestedIn'];
	$message = $_POST['message'];

    // Construct email subject
    $subject = 'Contact from Website Visitor ' . $name;

    // Construct email body
    $body_message = 'From:' .$name ;
	$body_message = 'Phone:' .$phone ;
    $body_message = 'E-mail:' .$email;
	$body_message = 'Name:' .$name."\r\n" .$phone."\r\n" .$email."\r\n" .$message ;


    // Construct email headers
    $headers = 'From: ' . $email . "\r\n" ;
    $headers = 'Reply-To: ' . $email . "\r\n";

    $mail_sent = mail($mail_to, $subject, $body_message, $headers);

    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'contact.html';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator ');
        window.location = 'contact.html';
    </script>
    <?php
    }
  
?>
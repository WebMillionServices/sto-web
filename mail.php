<?php
  $mail_to = 'chetankumar.nv@gmail.com'; // specify your email here

    // Assigning data from the $_POST array to variables
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
	$message = $_POST['message'];

    // Construct email subject
    $subject = 'Contact Enquiry From ' . $firstname;

    // Construct email body
    $body_message = 'From:' .$firstname ;
	$body_message = 'Phone:' .$phone ;
    $body_message = 'E-mail:' .$email;
	$body_message = 'Name:' .$firstname."\r\n" .$lastname."\r\n" .$phone."\r\n" .$email."\r\n" .$message ;


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
        alert('Message not sent. Please, notify the site administrator anburaj.creativenuts@gmail.com');
        window.location = 'contact.html';
    </script>
    <?php
    }
  
?>
<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['comments'];
        $from = 'Contact Form';
		$to = 'universal.developmentcenter@gmail.com';
		$subject = 'New Message';

		$body = "From: $name\n E-Mail: $email\n Comments:\n $message";

        if (!$name || !$email || !$message) {
			die("all fields are required");
		}

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Write correct E-Mail");
        }

        mail($to, $subject, $body, $from);
    }
?>

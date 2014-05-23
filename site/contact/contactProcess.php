<?php
$name = "";
$email = "";
$phone = "";
$comment = "";

$errorFields = array('name' => false, 'email' => false, 'comment' => false);

if ($_POST) {
	// Filter Inputs
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
	$comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
	$ip = $_SERVER['REMOTE_ADDR'];
	$browser = $_SERVER['HTTP_USER_AGENT'];

	if ($name == '' || $email == '' || $comment == '') {
		$errorFields['name'] = ($name == '')? true: false;
		$errorFields['email'] = ($email == '')? true: false;
		$errorFields['comment'] = ($comment == '')? true: false;
	} else {
/*
		// Set Database connection
		$dsn = 'mysql:dbname='.DB_DATA.';host='.DB_HOST;
		$user = 'dbuser';
		$password = 'dbpass';

		try {
			$dbh = new PDO($dsn, DB_USER, DB_PASS);
		} catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}

		// Prepare Insert into Database
		$insertQuery = 'INSERT INTO contact (`first_name`, `last_name`, `email`, `phone_number`, `company`, `comments`, `ip`, `browser`, `created`) VALUES (:firstName, :lastName, :email, :phoneNumber, :company, :comments, :ip, :browser, now())';
		$stmt = $dbh->prepare($insertQuery);
		$stmt->bindParam(':firstName', $firstName);
		$stmt->bindParam(':lastName', $lastName);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':phoneNumber', $phoneNumber);
		$stmt->bindParam(':company', $company);
		$stmt->bindParam(':comments', $comments);
		$stmt->bindParam(':ip', $ip);
		$stmt->bindParam(':browser', $browser);

		// Insert into Database
		$stmt->execute();
*/
		// Prepare Email
		$to = 'dorothy_rotondo@yahoo.com';
		$from = 'djrotondo@djrotondo.com';
		$subject = 'Portfolio Site Contact Form Submission';

		$headers = 'From: '. $from . "\r\n";
		$headers .= 'Bcc: dorothy_rotondo@yahoo.com' . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$message = '<table>'."\r\n";
		$message .= '<tr><td><strong>Name:</strong></td><td>' . $name . '</td></tr>'."\r\n";
		$message .= '<tr><td><strong>Email:</strong></td><td>' . $email . '</td></tr>'."\r\n";
		$message .= '<tr><td><strong>Phone:</strong></td><td>' . $phone . '</td></tr>'."\r\n";
		$message .= '<tr><td><strong>Message:</strong></td><td>' . $comment . '</td></tr>'."\r\n";
		$message .= '</table>'."\r\n";

		// Send Email
		mail($to, $subject, $message, $headers);

		// Redirect to Thank You page
		header('Location: /contact/thank-you.php');
	}
}
?>
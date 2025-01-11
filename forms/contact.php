<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>

<?php
/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library should be in: vendor/php-email-form/php-email-form.php
 * Documentation: https://bootstrapmade.com/php-email-form/
 */

// Replace with your real receiving email address
// $receiving_email_address = 'your_real_email@example.com';

// // Check if the PHP Email Form library exists
// if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
//     include($php_email_form);
// } else {
//     die('Unable to load the "PHP Email Form" Library!');
// }

// // Create the PHP Email Form object
// $contact = new PHP_Email_Form;
// $contact->ajax = true;

// // Set email properties
// $contact->to = $receiving_email_address;
// $contact->from_name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
// $contact->from_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
// $contact->subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');

// Optional SMTP configuration
// Uncomment and set this if SMTP is required for your server
/*
$contact->smtp = array(
    'host' => 'smtp.example.com',
    'username' => 'your_username',
    'password' => 'your_password',
    'port' => '587'
);
*/

// Add the form messages

// $contact->add_message($contact->from_name, 'From');
// $contact->add_message($contact->from_email, 'Email');
// $contact->add_message(htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8'), 'Message', 10);

// // Attempt to send the email and provide feedback
// if ($contact->send()) {
//     echo 'Message sent successfully!';
// } else {
//     echo 'Failed to send the message. Please try again later.';
// }
?>



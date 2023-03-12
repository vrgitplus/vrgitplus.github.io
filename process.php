<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a string with the data
$data = $name . "\t" . $email . "\t" . $message . "\n";

// Append the data to a file
file_put_contents('messages.txt', $data, FILE_APPEND);

// Redirect back to the contact page
header('Location: https://vrgitplus.github.io/contact.html');
exit();
?>

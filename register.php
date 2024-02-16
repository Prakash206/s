<?php


// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the data string
$data = "Email: $email\nPassword: $password\n\n";

// Specify the file to save the data
$file = 'user_data.txt';

// Open the file in append mode
$fp = fopen($file, 'a');

// Write the data to the file
if (fwrite($fp, $data)) {
    echo "User data saved successfully";
} else {
    echo "Error: Unable to save user data";
}

// Close the file
fclose($fp);



<?php
session_start(); // Start the session

// Function to validate CAPTCHA
function validateCaptcha($user_answer, $correct_answer) {
    return $user_answer == $correct_answer;
}

// Get the user input
$user_answer = isset($_POST['captcha_answer']) ? (int)$_POST['captcha_answer'] : null;

// Check if CAPTCHA result is set in session
if (!isset($_SESSION['captcha_result'])) {
    die('CAPTCHA result not set in session. Please generate CAPTCHA first.');
}

// Retrieve the correct answer from the session
$correct_answer = $_SESSION['captcha_result'];

// Check if the user's answer is correct
if (validateCaptcha($user_answer, $correct_answer)) {
    echo 'CAPTCHA verified successfully!';
} else {
    echo 'CAPTCHA verification failed. Please try again.';
}
?>

<?php
session_start(); // Start the session

// Function to generate CAPTCHA
function generateCaptcha() {
    $digit1 = rand(1, 9);
    $digit2 = rand(1, 9);
    $result = $digit1 * $digit2;

    // Store the result in the session
    $_SESSION['captcha_result'] = $result;

    // Return the CAPTCHA question
    return "What is $digit1 x $digit2?";
}

// Generate the CAPTCHA question
$captcha_question = generateCaptcha();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPTCHA Verification</title>
</head>
<body>
    <form action="validate_captcha.php" method="POST">
        <p><?= htmlspecialchars($captcha_question) ?></p>
        <input type="text" name="captcha_answer" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

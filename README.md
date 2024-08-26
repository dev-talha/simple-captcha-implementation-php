# Simple CAPTCHA Implementation in PHP

This repository contains a simple CAPTCHA implementation using PHP. The CAPTCHA is designed to prevent automated submissions by asking users to solve a basic multiplication problem.

## Features

- **Randomized CAPTCHA**: Each time the form is loaded, a new CAPTCHA question is generated using two random digits.
- **Session-Based Validation**: The correct answer is stored in the user's session, ensuring that the CAPTCHA is unique per session.
- **Simple Form Handling**: The form submits the user's input, which is then validated against the stored CAPTCHA result.

## File Structure

- `form.php`: Generates and displays the CAPTCHA question. The form allows users to input their answer.
- `validate_captcha.php`: Handles the form submission, validates the user's answer, and returns a success or failure message.

## How to Use

1. Clone this repository to your local machine.
2. Start a local PHP server using the following command:
   ```bash
   php -S localhost:8000

<?php
// Replace YOUR_BOT_TOKEN with your Telegram bot API token
$token = '6181140947:AAFmpVoEaD4ImKGdqAcIADZdGarl3w8TQeU';
// Replace YOUR_CHAT_ID with your Telegram chat ID
$chat_id = '-1001841792770';

// Get the form data from the POST request
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Format the message to send to Telegram
$telegram_message = "New message:\nName: $name\nEmail: $email\nMessage: $message";

// Send the message to Telegram
$telegram_url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($telegram_message);
file_get_contents($telegram_url);
?>

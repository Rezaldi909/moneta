<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // You can add code here to store the order in the database or send it via email.

    echo "Thank you, $name. Your custom order has been received!";
}
?>
s
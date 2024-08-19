<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $filename = "submissions.txt";
    $file = fopen($filename, "a");

    $entry = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    fwrite($file, $entry);
    fclose($file);

    echo "Thank you! Your message has been sent.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food = $_POST['food'];
    $clothes = $_POST['clothes'];
    $activity = $_POST['activity'];

    $to = "thezinctz@gmail.com";
    $subject = "Valentine's Date Preferences";
    $message = "Food: " . $food . "\nClothes: " . $clothes . "\nActivity: " . $activity;

    mail($to, $subject, $message);

    header("Location: confirmation.html");
    exit;
}
?>

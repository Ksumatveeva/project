<?php

header('Content-Type: text/html; charset=UTF-8');

$mysqli = mysqli_connect("localhost", "uncvjrjz_project", "12345ksu", "uncvjrjz_project");
if ($mysqli == false) {
    print("error");
} else {
    // print("успешно");
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = trim(mb_strtolower($_POST["email"]));
    $phone = $_POST["phone"];
    $sms = $_POST["sms"];

    $result = $mysqli->query("SELECT * FROM `users` WHERE `email` ='$email'");
    // var_dump($result->num_rows);
    if ($result->num_rows != 0) {
        print("exist");
    } else {
        $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `phone`, `sms`) VALUES ('$name', '$lastname', '$email', '$phone', '$sms')");
        print("ok");
    }
}

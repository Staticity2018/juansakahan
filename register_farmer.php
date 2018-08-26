<?php
require_once('dbconnection.php');

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);

    $query = "INSERT INTO farmer VALUES (DEFAULT, '{$username}','{$password}','{$name}','{$email}',{$contact})";
    $result = $conn->query($query);

    if ($result) {
        header('Location: index.php');
    }
}
?>
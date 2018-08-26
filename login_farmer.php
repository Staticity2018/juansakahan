<?php 
session_start();
require_once('dbconnection.php');

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM farmer WHERE username = '{$username}' AND password = '{$password}'";
    $result = $conn->query($query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['contact'] = $row['contact'];

        header("Location: welcome.php");
    }
    else {
        header("Location: index.php");
    }
}
?>
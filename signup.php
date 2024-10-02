<?php
session_start();

$showerr = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['E-mail'];
    $contact = $_POST['Phone'];
    $pwd = $_POST['Password'];

    require "partials/db.php"; // Check if this path is correct

    $sql = "INSERT INTO `user` (`Name`, `E-mail`, `Password`, `Contact`) VALUES ('$name', '$email', '$pwd', '$contact')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['Log-in'] = true;
        $_SESSION['name'] = $name;
        $_SESSION['Password'] = $pwd;
        $_SESSION['E-mail'] = $email;
        header("Location: main.php"); // Corrected Location
        exit();
    } else {
        $showerr = true;
        echo "Error: " . mysqli_error($conn); // Check for SQL errors
    }

    mysqli_close($conn);
}
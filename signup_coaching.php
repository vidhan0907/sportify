<?php
session_start();

$showerr = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $iname = $_POST['iname'];
    $oname = $_POST['oname'];
    $contact = $_POST['ophone'];
    $email = $_POST['e-mail'];
    $pwd = $_POST['Password'];
    $dop = $_POST['dop'];
    $sports = $_POST['interest'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $img = $_POST['img'];
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d H:i:s");  
    require "partials/db.php"; // Check if this path is correct

    $sql = "INSERT INTO `institutes`(`Coaching_Name`, `Owner_Name`, `Date_Open`, `E-mail`, `Password`, `Owner_Contact`, `Sports`, `created_at`, `City`, `Address`, `iamges_gdrive`) VALUES ('$iname','$oname','$dop','$email','$pwd','$contact','$sports','$today','$city','$address','$img')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['Log-in'] = true;
        $_SESSION['coaching']=true;
        $_SESSION['iname'] = $iname;
        $_SESSION['oname'] = $oname;
        $_SESSION['Password'] = $pwd;
        $_SESSION['e-mail'] = $email;
        header("Location: main.php"); // Corrected Location
        exit();
    } else {
        $showerr = true;
        echo "Error: " . mysqli_error($conn); // Check for SQL errors
    }

    mysqli_close($conn);
}
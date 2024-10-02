<?php
$showerr = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];  // Corrected the form field name
    $pwd = $_POST['password']; // Corrected the form field name

    require "partials/db.php";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM `institutes` WHERE `E-mail` = ? AND `Password` = ?");
    $stmt->bind_param("ss", $email, $pwd);
    $stmt->execute();
    $result = $stmt->get_result();
    $num = $result->num_rows;

    if ($num == 1) {
        session_start();
        $_SESSION['Log-in'] = true;
        $_SESSION['coaching']=true;
        $row = $result->fetch_assoc();
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['Email'] = $row['E-mail']; // Corrected the database field name
        $_SESSION['Contact'] = $row['Owner_Contact']; // Corrected the session variable assignment
        $_SESSION['IName'] = $row['Coaching_Name']; // Corrected the session variable assignment
        header("location: main.php");
        exit();
    } else {
        $showerr = true;
    }

    $stmt->close();
    $conn->close();
}

if ($showerr) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Invalid Credentials 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
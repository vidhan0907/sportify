<?php
session_start();

error_reporting(0);
ini_set('display_errors', 0);


require 'partials/db.php';
session_start();
// Redirect to login if not logged in
if (!isset($_SESSION['Log-in']) || $_SESSION['Log-in'] !== true) {
    header("Location: Login.html");
    exit();
}

$showerr = false;

$name = $_SESSION['Name'];
$email = $_SESSION['Email'];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $proof = $_POST['proof'];
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d H:i:s");

    // Escape variables to prevent SQL injection
    $title = mysqli_real_escape_string($conn, $title);
    $desc = mysqli_real_escape_string($conn, $desc);
    $proof = mysqli_real_escape_string($conn, $proof);

    // Insert data into achievements table
    $sql = "INSERT INTO achievements (`Name`, `Email`, Title, Achievement_Description, Proof, created_at) 
            VALUES ('$name', '$email', '$title', '$desc', '$proof', '$today')";

    if (mysqli_query($conn, $sql)) {
        header("Location: achievments.php");
        exit();
    } else {
        $showerr = true;
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="socialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="logo-up.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sportify | Achievements</title>
    <style>

        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            height: 100vh;
            width: 100%;
        }
        .chat-form {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #ffffff;
            padding: 10px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column; /* Stack inputs vertically */
            align-items: stretch; /* Stretch inputs to full width */
        }
        .post-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: relative; /* Ensure relative positioning for absolute child */
        }
        .post-proof {
            position: absolute;
            top: 5px;
            right: 10px;
            max-width: 200px; /* Adjust as needed */
             max-height: 125px; /*Adjust as needed */
        }
    </style>
</head>
<body>
    <div class="nav">
        <?php require 'partials/nav.php'; ?>
    </div>
    <br><br><br><br>
    <center><h1 class="secondary_main">Your Achievements</h1></center>
    
    <div class="posts-container">
        <?php
        $sql = "SELECT * FROM `achievements` WHERE `Email`='$email' ORDER BY created_at DESC ";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $title = htmlspecialchars($row['Title']);
                $desc = htmlspecialchars($row['Description']);
                $proof = htmlspecialchars($row['Proof']);
                $time = htmlspecialchars($row['created_at']);
                $postBy = htmlspecialchars($row['Name']);
                
                echo '
                <div class="post-card">
                <h2 class="post-title">'.$title.'</h2>
                <p class="post-description">'.$desc.'</p>
                <img src="'.htmlspecialchars($proof).'" class="post-proof">
                <p class="post-meta">
                <span class="post-time">Posted on: '.$time.'</span>
                <span class="post-author">by You</span>
                </p>
                </div><br><br>';
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Upload
                </button>
        
        <!-- Modal -->
        <form action="achievments.php" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Upload</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail2" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="exampleInputPassword2" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Image/Video link</label>
                        <input type="text" name="proof" class="form-control" id="exampleInputPassword2" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
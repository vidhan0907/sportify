<?php
session_start();
require 'partials/db.php';

// Redirect to login if not logged in
if (!isset($_SESSION['Log-in']) || $_SESSION['Log-in'] !== true) {
    header("Location: Login.html");
    exit();
}

$showerr = false;
$name = $_SESSION['Name'];
$email = $_SESSION['Email'];
$contact = $_SESSION['Contact'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dob = $_POST['dob'];
    $interest = $_POST['interest'];
    $achievements = $_POST['achievements'];
    $city = $_POST['city'];
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d H:i:s");

    // Check if user details already exist
    $checkSql = "SELECT * FROM `details_user` WHERE `E-mail` = '$email'";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) > 0) {
        // Update user details
        $sql = "UPDATE `details_user` SET `dob` = '$dob', `Interests` = '$interest', `City` = '$city', `Achievements` = '$achievements' WHERE `E-mail` = '$email'";
    } else {
        // Insert new user details
        $sql = "INSERT INTO `details_user` (`Name`, `E-mail`, `Contact`, `dob`, `Interests`, `City`, `Achievements`) VALUES ('$name', '$email', '$contact', '$dob', '$interest', '$city', '$achievements')";
       $_SESSION['city']==$city;
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: user_profile.php");
        exit();
    } else {
        $showerr = true;
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

// Fetch user details if they exist
$userDetails = null;
$sql = "SELECT * FROM `details_user` WHERE `E-mail` = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $userDetails = mysqli_fetch_assoc($result);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="logo-up.png">

    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="socialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php require "partials/nav.php" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 400px;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background: #218838;
        }
        .select2-container {
            width: 100% !important;
        }
        .select2-selection__rendered {
            display: none;
        }
    </style>
</head>
<body>
    <?php if ($userDetails): ?>
    <center><h1 class="secondary_main">Your Profile</h1></center>
    <div class="container">
                    <h5 class="card-title">Profile Details</h5>
                    <p class="card-text"><strong>Name:</strong> <?php echo htmlspecialchars($userDetails['Name']); ?></p>
                    <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($userDetails['E-mail']); ?></p>
                    <p class="card-text"><strong>Contact:</strong> <?php echo htmlspecialchars($userDetails['Contact']); ?></p>
                    <p class="card-text"><strong>Date of Birth:</strong> <?php echo htmlspecialchars($userDetails['dob']); ?></p>
                    <p class="card-text"><strong>Interests:</strong> <?php echo htmlspecialchars($userDetails['Interests']); ?></p>
                    <p class="card-text"><strong>City:</strong> <?php echo htmlspecialchars($userDetails['City']); ?></p>
                    <p class="card-text"><strong>Achievements:</strong> <?php echo htmlspecialchars($userDetails['Achievements']); ?></p>
                </div>
                

            <!-- Edit Modal -->
 

        <?php else: ?>
    <center><h1 class="secondary_main">Complete Your Profile</h1></center>
            <form action="user_profile.php" method="POST">
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="interests">Interests:</label>
                    <select class="form-control" id="interests" name="interest">
                        <option value="Cricket">Cricket</option>
                        <option value="Basketball">Basketball</option>
                        <option value="Football">Football</option>
                        <option value="Gym">Gym</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="achievements">Achievements (State Level):</label>
                    <input class="form-control" type="text" name="achievements" placeholder="(if any)">
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <select class="form-control" name="city" id="city-select" style="width: 100%;"></select>
                </div>
                <button type="submit" class="btn btn-outline-danger">Submit</button>
            </form>

        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="cities.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

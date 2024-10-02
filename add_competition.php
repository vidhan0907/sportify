<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require 'partials/db.php';

// Redirect to login if not logged in


$showerr = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $organizer = $_SESSION['Name'];
    $name = $_POST['name'];
    $sport = $_POST['sport'];
    $venue = $_POST['venue'];
    $day = $_POST['day'];
    $entry_fee = $_POST['entry_fee'];
    $reward = $_POST['reward'];

    $sql = "INSERT INTO `competitions` (`Organizer`, `CompetitionName`, `Sport`, `Venue`, `Day`, `EntryFee`, `Reward`)
            VALUES ('$organizer', '$name', '$sport', '$venue', '$day', '$entry_fee', '$reward');";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: list_competitions.php");
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

    <title>Sportify | Add Competition</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            height: 100vh;
            width:100%;
        }
        .form-container {
            margin-top: 50px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <?php require 'partials/nav.php'; ?>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="mb-4">Add Competition</h2>
                    <form method="POST">
                        <div class="form-group">
                            <label for="name">Competition Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="sport">Sport</label>
                            <input type="text" class="form-control" id="sport" name="sport" required>
                        </div>
                        <div class="form-group">
                            <label for="venue">Venue</label>
                            <input type="text" class="form-control" id="venue" name="venue" required>
                        </div>
                        <div class="form-group">
                            <label for="day">Day</label>
                            <input type="date" class="form-control" id="day" name="day" required>
                        </div>
                        <div class="form-group">
                            <label for="entry_fee">Entry Fee</label>
                            <input type="number" step="0.01" min="0" class="form-control" id="entry_fee" name="entry_fee" required>
                        </div>
                        <div class="form-group">
                            <label for="reward">Reward</label>
                            <input type="text" class="form-control" id="reward" name="reward" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'partials/db.php';


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

    <title>Sportify | Competitions</title>
</head>
<body>
    <div class="nav">
        <?php require 'partials/nav.php'; ?>
    </div>
    <div class="container mt-5">
        <br><br><br>
        <center>
      <h1 class="secondary_main">
        Competitions
      </h1>
</center>
<br>
        <table class="table">
            <thead>
                <tr>
                    <th>Competition Name</th>
                    <th>Sport</th>
                    <th>Venue</th>
                    <th>Day</th>
                    <th>Reward</th>
                    <th>Entry Fee</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `competitions` ORDER BY `Day` ASC";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>'.$row['CompetitionName'].'</td>';
                        echo '<td>'.$row['Sport'].'</td>';
                        echo '<td>'.$row['Venue'].'</td>';
                        echo '<td>'.$row['Day'].'</td>';
                        echo '<td>'.$row['Reward'].'</td>';
                        echo '<td>'.$row['EntryFee'].'</td>';
                        echo '<td><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwRQKnJdgXLkSTpTVnpbCVVqtdxQwFqMzpGtDJvJKdTRGrzJdSvzXCGPswTVfcVQlkRBwJF" class="btn btn-primary">Apply</a></td>'; // Replace # with actual apply link
                        echo '</tr>';
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></script>
</body>
</html>

<!-- friends.php -->
<!DOCTYPE html>
<html lang="en">
    
<head>
<link rel="stylesheet" href="nav.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="socialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="logo-up.png">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportify | Add Friends</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php require 'partials/nav.php' ?>
    <div class="container mt-5">
        <br><br><br>
    <center>
      <h1 class="secondary_main">
        Suggestions
      </h1>
</center>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Interests</th>
                    <th>City</th>
                    <th>Achievements</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'partials/db.php';
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $city=$_SESSION['city'];
                // SQL query to fetch data
                $sql = "SELECT `Name`, `E-mail`, `Contact`, `dob`, `Interests`, `City`, `Achievements` FROM `details_user`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Name"] . "</td>";
                        echo "<td>" . $row["E-mail"] . "</td>";
                        echo "<td>" . $row["Contact"] . "</td>";
                        echo "<td>" . $row["Interests"] . "</td>";
                        echo "<td>" . $row["City"] . "</td>";
                        echo "<td>" . $row["Achievements"] . "</td>";
                        echo '<td><a href="whatsapp.php"class="btn btn-primary">Add Friend</button></a></td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No friends found.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
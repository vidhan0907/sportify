<!-- friends.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="logo-up.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <center>
      <h1 class="secondary_main">
        Users
      </h1>
</center>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Interests</th>
                    <th>City</th>
                    <th>Achievements</th>
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
                        echo "<td>" . $row["Interests"] . "</td>";
                        echo "<td>" . $row["City"] . "</td>";
                        echo "<td>" . $row["Achievements"] . "</td>";
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
    <!-- Bootstrap JS and dependencies -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
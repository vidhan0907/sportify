<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="nav.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="socialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo-up.png">
    <title>Workout Plans - Sportify</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 2rem;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .header p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
        }

        main {
            display: flex;
            justify-content: center;
            padding: 20px;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            width: 300px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }

        .workout-plan {
            background-color: #f9f9f9;
            padding: 10px;
            
            border-radius: 5px;
            margin-top: 10px;
        }

        .workout-plan h3 {
            margin-top: 0;
            font-size: 16px;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 5px;
            color: #666;
        }

        ul li a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        ul li a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <?php require "partials/nav.php";?>

    <div class="header">
    <br><br><br>
    <center>
      <h1 class="secondary_main">
        Workout Plans
      </h1>
</center>
    </div>
    
    <main>
        <div class="card">
            <h2>Beginner's Full Body Workout</h2>
            <div class="workout-plan">
                <ul>
                    <li>Squats - 3 sets of 10 reps</li>
                    <li>Push-ups - 3 sets of 10 reps</li>
                    <li>Plank - 3 sets of 30 seconds</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <h2>Intermediate Cardio Workout</h2>
            <div class="workout-plan">
                <ul>
                    <li>Running - 20 minutes</li>
                    <li>Jumping Jacks - 3 sets of 30 seconds</li>
                    <li>Burpees - 3 sets of 10 reps</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <h2>Advanced Strength Training</h2>
            <div class="workout-plan">
                <ul>
                    <li>Deadlifts - 4 sets of 8 reps</li>
                    <li>Bench Press - 4 sets of 8 reps</li>
                    <li>Pull-ups - 3 sets of 8 reps</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <h2>Core and Abs Workout</h2>
            <div class="workout-plan">
                <ul>
                    <li>Plank Variations - 3 sets of 30 seconds each</li>
                    <li>Leg Raises - 3 sets of 15 reps</li>
                    <li>Crunches - 3 sets of 20 reps</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <h2>Flexibility and Stretching Routine</h2>
            <div class="workout-plan">
                <ul>
                    <li>Dynamic Stretching - 10 minutes</li>
                    <li>Yoga Poses - 20 minutes</li>
                    <li>Cool Down Stretch - 5 minutes</li>
                </ul>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>

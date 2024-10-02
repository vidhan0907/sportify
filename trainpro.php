<!doctype html>
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
    <title>Training Programs - Sportify</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
            background-color: #f4f4f4;
        }

        .main-content {
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

        .programs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .program {
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            overflow: hidden;
        }

        .program:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        .program h2 {
            font-size: 1.8rem;
            color: #007BFF;
            margin-bottom: 0.5rem;
        }

        .program p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .program a {
            display: inline-block;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            color: #fff;
            background-color: #007BFF;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .program a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php require "partials/nav.php";?>

    <div class="main-content">
        <div class="header">
        <br><br><br>
        <center>
      <h1 class="secondary_main">
        Training Programs
      </h1>
</center>
            <p>Explore a variety of training programs designed for different fitness levels and goals.</p>
        </div>

        <div class="programs">
            <div class="program">
                <h2>Strength Training</h2>
                <p>Build muscle and increase strength with structured training routines and expert guidance.</p>
                <a href="https://www.healthline.com/health/exercise-fitness/strength-training-at-home">View Details &rarr;</a>
            </div>

            <div class="program">
                <h2>Cardiovascular Fitness</h2>
                <p>Improve cardiovascular endurance through effective cardio workouts and progressive training plans.</p>
                <a href="https://my.clevelandclinic.org/health/articles/24754-cardiovascular-endurance">View Details &rarr;</a>
            </div>

            <div class="program">
                <h2>Weight Loss</h2>
                <p>Achieve weight loss goals with personalized diet plans and fat-burning exercises.</p>
                <a href="https://www.medicalnewstoday.com/articles/303409">View Details &rarr;</a>
            </div>

            <div class="program">
                <h2>Flexibility and Mobility</h2>
                <p>Enhance flexibility and improve mobility with targeted stretching routines and mobility exercises.</p>
                <a href="https://www.health.com/fitness/mobility-workout">View Details &rarr;</a>
            </div>

            <div class="program">
                <h2>Sports-Specific Training</h2>
                <p>Prepare for specific sports or athletic events with specialized training programs and sport-specific exercises.</p>
                <a href="https://islandsportspt.com/what-is-sports-specific-training/">View Details &rarr;</a>
            </div>

            <div class="program">
                <h2>Functional Training</h2>
                <p>Focus on functional movements to improve daily activities and overall fitness performance.</p>
                <a href="https://www.webmd.com/fitness-exercise/how-to-exercise-with-functional-training">View Details &rarr;</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>

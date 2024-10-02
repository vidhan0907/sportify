<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="socialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo-up.png">
    <title>Sportify | Resources</title>
    <style>
        /* Reset common styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden; /* Prevent horizontal scroll */
            background-color: #f4f4f4;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .header h1 {
            font-size: 3rem;
            color: #333;
        }

        .header p {
            color: #666;
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .resources {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .resource {
            background-color: #fff;
            width: calc(30% - 2rem);
            margin: 1rem;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .resource:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .resource h2 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .resource p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        .resource a {
            display: inline-block;
            margin-top: 1rem;
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        .resource a:hover {
            color: #0056b3;
        }

        .resource ul {
            margin-top: 1rem;
            padding-left: 20px;
        }

        .resource ul li {
            font-size: 0.9rem;
            line-height: 1.6;
            color: #666;
        }
    </style>
    <!-- <link rel="stylesheet" href="icon-font.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" type="png" href="img/icon_title.png"> -->
</head>
<body>
    <?php require "partials/nav.php";?>

    <div class="main-content">

        <div class="header">
        <br><br><br>
        <center>
      <h1 class="secondary_main">
        Sportify Resources
      </h1>
</center>
            <p>Discover valuable resources to enhance your fitness journey.</p>
        </div>

        <div class="resources">
            <div class="resource">
                <h2>Training Programs</h2>
                <p>Explore a variety of training programs designed for different fitness levels and goals.</p>
                <a href="trainpro.php" target="_blank">Learn More &rarr;</a>
            </div>

            <div class="resource">
                <h2>Nutrition Guides</h2>
                <p>Get expert advice on nutrition to complement your training and achieve optimal performance.</p>
                <a href="nutguide.php" target="_blank">Learn More &rarr;</a>
            </div>

            <div class="resource">
                <h2>Workout Plans</h2>
                <p>Find workout plans tailored to your specific needs, whether you are looking to build muscle, lose weight, or improve endurance.</p>
                <a href="workoutplans.php" target="_blank">Learn More &rarr;</a>
            </div>

            <div class="resource">
                <h2>Mental Health</h2>
                <p>Access resources and tips to maintain a healthy mindset and improve your mental well-being.</p>
                <a href="mentalhealth.php" target="_blank">Learn More &rarr;</a>
            </div>

            <div class="resource">
                <h2>Recovery Techniques</h2>
                <p>Learn about effective recovery techniques to ensure your body can perform at its best.</p>
                <a href="rectech.php" target="_blank">Learn More &rarr;</a>
            </div>

            <div class="resource">
                <h2>Equipment Reviews</h2>
                <p>Read reviews and recommendations for the best sports and fitness equipment on the market.</p>
                <a href="equiprev.php" target="_blank">Learn More &rarr;</a>
            </div>

            <div class="resource">
                <h2>Articles</h2>
                <p>Read informative articles on the latest trends, research, and tips in the sports and fitness world.</p>
                <a href="articles.php" target="_blank">Learn More &rarr;</a>
            </div>

            <div class="resource">
                <h2>Videos</h2>
                <p>Watch videos featuring workouts, expert advice, and motivational content.</p>
                <ul>
                    <li><a href="https://youtu.be/a4mOX9mW0kk?si=MwoTWV307omLlnMo" target="_blank">Strength Training Basics</a></li>
                    <li><a href="https://youtu.be/FdyhENXyIQ4?si=SGNUw767vhpLXRP8" target="_blank">Yoga for Beginners</a></li>
                    <li><a href="https://youtu.be/dj03_VDetdw?si=VdWw0JJE3PL1g3FU" target="_blank">Cardio Workouts at Home</a></li>
                    <li><a href="https://youtu.be/Ck7zKz3b7t0?si=e5zdNeZyI8mhAoPh" target="_blank">Mindfulness and Exercise</a></li>
                    <li><a href="https://youtu.be/QOsHNL6V8O8?si=RHbEspav4QjjQE2Q" target="_blank">Athlete Interviews</a></li>
                </ul>
                <a href="videos.php" target="_blank">View More &rarr;</a>
            </div>

            
            <div class="resource">
                <h2>Community Forums</h2>
                <p>Join community forums to discuss topics, share experiences, and get support from fellow fitness enthusiasts.</p>
                <a href="http://localhost/SPORTIFY/socialize.php">Join Now &rarr;</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- JavaScript libraries and plugins -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

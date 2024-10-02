<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="nav.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="socialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="socialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="logo-up.png">

  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportify | Articles </title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            font-family: Arial, sans-serif;
            line-height: 1.6;
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

        .articles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .card {
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            font-size: 1.8rem;
            color: #007BFF;
            margin-bottom: 0.5rem;
        }

        .card p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .article {
            background-color: #f9f9f9;
            padding: 10px;
            
            border-radius: 5px;
            margin-top: 10px;
        }

        .article h3 {
            font-size: 1.2rem;
            color: #333;
            margin-top: 0;
        }

        .article p {
            margin-top: 10px;
            color: #666;
        }

        .article a {
            display: inline-block;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
        }

        .article a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php require "partials/nav.php";?>
    <br><br><br>
    <div class="main-content">
        <div class="header">
        <br><br><br>
        <center>
      <h1 class="secondary_main">
        Articles
      </h1>
</center>
            <p>Stay informed with the latest articles on fitness, nutrition, and wellness.</p>
        </div>

        <div class="articles">
            <div class="card">
                <h2>Fitness Tips</h2>
                <div class="article">
                    <h3>10 Best Exercises for Building Muscle</h3>
                    <p>Learn about the top exercises that can help you build muscle effectively.</p>
                    <a href="https://www.anytimefitness.co.in/muscle-building-exercises-for-beginners/"  target="_blank">Read More &rarr;</a>
                </div>
                <div class="article">
                    <h3>How to Stay Motivated for Your Workouts</h3>
                    <p>Discover techniques to keep yourself motivated to stick to your fitness routine.</p>
                    <a href="https://www.nia.nih.gov/health/exercise-and-physical-activity/5-tips-help-you-stay-motivated-exercise"  target="_blank">Read More &rarr;</a>
                </div>
            </div>

            <div class="card">
                <h2>Nutrition Advice</h2>
                <div class="article">
                    <h3>5 Superfoods to Boost Your Performance</h3>
                    <p>Find out which superfoods can enhance your athletic performance.</p>
                    <a href="https://www.mensjournal.com/food-drink/5-superfoods-that-naturally-boost-your-health-and-athletic-performance"  target="_blank">Read More &rarr;</a>
                </div>
                <div class="article">
                    <h3>The Importance of Hydration</h3>
                    <p>Understand why staying hydrated is crucial for your health and performance.</p>
                    <a href="https://www.hsph.harvard.edu/news/hsph-in-the-news/the-importance-of-hydration/#:~:text=Drinking%20enough%20water%20each%20day,quality%2C%20cognition%2C%20and%20mood." target="_blank">Read More &rarr;</a>
                </div>
            </div>

            <div class="card">
                <h2>Training Programs</h2>
                <div class="article">
                    <h3>Beginner's Guide to HIIT</h3>
                    <p>Start your journey with High-Intensity Interval Training (HIIT) with this beginner's guide.</p>
                    <a href="https://www.thebodycoach.com/blog/a-beginners-guide-to-hiit/" target="_blank">Read More &rarr;</a>
                </div>
                <div class="article">
                    <h3>Advanced Strength Training Routines</h3>
                    <p>Take your strength training to the next level with these advanced routines.</p>
                    <a href="https://www.muscleandstrength.com/workouts/finishing-strong-ultimate-8-week-workout-for-advanced-lifters" target="_blank">Read More &rarr;</a>
                </div>
            </div>

            <div class="card">
                <h2>Mental Health</h2>
                <div class="article">
                    <h3>Managing Stress Through Exercise</h3>
                    <p>Learn how physical activity can help you manage stress and improve your mental health.</p>
                    <a href="https://www.mayoclinic.org/healthy-lifestyle/stress-management/in-depth/exercise-and-stress/art-20044469" target="_blank">Read More &rarr;</a>
                </div>
                <div class="article">
                    <h3>Mindfulness Techniques for Athletes</h3>
                    <p>Discover mindfulness techniques that can help you stay focused and calm.</p>
                    <a href="https://purposesoulathletics.com/20-mindfulness-exercises-for-athletes/" target="_blank">Read More &rarr;</a>
                </div>
            </div>

            <div class="card">
                <h2>Recovery Techniques</h2>
                <div class="article">
                    <h3>Effective Stretching Routines</h3>
                    <p>Improve your flexibility and recovery with these effective stretching routines.</p>
                    <a href="https://www.health.harvard.edu/staying-healthy/the-ideal-stretching-routine" target="_blank">Read More &rarr;</a>
                </div>
                <div class="article">
                    <h3>The Benefits of Massage Therapy</h3>
                    <p>Understand how massage therapy can aid in muscle recovery and relaxation.</p>
                    <a href="https://www.mayoclinichealthsystem.org/hometown-health/speaking-of-health/benefits-of-massage-therapy" target="_blank">Read More &rarr;</a>
                </div>
            </div>

            <div class="card">
                <h2>Additional Resources</h2>
                <div class="article">
                    <h3>Top Fitness Blogs to Follow</h3>
                    <p>Check out these top fitness blogs for more tips and inspiration.</p>
                    <a href="https://www.glofox.com/blog/fitness-blogs/" target="_blank">Read More &rarr;</a>
                </div>
                <div class="article">
                    <h3>Recommended Books on Fitness</h3>
                    <p>Explore these recommended books to deepen your knowledge on fitness and health.</p>
                    <a href="https://www.goodreads.com/shelf/show/fitness" target="_blank">Read More &rarr;</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


</body>
</html>

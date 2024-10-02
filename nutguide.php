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
    <title>Sportify | Nutrition Guide</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            background-color: #f4f4f4;
            padding: 2rem;
            text-align: center;
        }

        main {
            padding: 20px;
            background-color: #fff;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 30px;
        }

        footer {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        h2 {
            color: #007BFF;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        .sample-meal-plan {
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .sample-meal-plan h3 {
            margin-top: 0;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            color: #007BFF;
            text-decoration: none;
        }

        ul li a:hover {
            text-decoration: underline;
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
    </style>
</head>
<body>
    <?php require "partials/nav.php";?>
    <div class="header">
    <br><br><br>
    <center>
      <h1 class="secondary_main">
        Nutrition Guides
      </h1>
</center>
    </div>
    
    <main>
        <section id="introduction">
            <h2>Introduction to Nutrition</h2>
            <p>Proper nutrition plays a crucial role in achieving optimal performance and recovery in sports and fitness activities.</p>
        </section>
        <div class="header">
            <h1>Training Programs</h1>
            <p>Explore a variety of training programs designed for different fitness levels and goals.</p>
        </div>

        <section id="macronutrients">
            <h2>Macronutrients Overview</h2>
            <p>Macronutrients, including carbohydrates, proteins, and fats, are essential for providing energy and supporting muscle growth and repair.</p>
        </section>

        <section id="micronutrients">
            <h2>Micronutrients and Supplements</h2>
            <p>Learn about essential vitamins, minerals, and the role of supplements in supporting athletic performance and overall health.</p>
        </section>

        <section id="sample-meal-plans">
            <h2>Sample Meal Plans</h2>
            <div class="sample-meal-plan">
                <h3>Muscle Gain Meal Plan</h3>
                <p>Breakfast: Scrambled eggs with spinach and whole grain toast<br>
                   Lunch: Grilled chicken with quinoa and mixed vegetables<br>
                   Dinner: Baked salmon with sweet potato and asparagus<br>
                   Snack: Greek yogurt with berries</p>
            </div>
            <div class="sample-meal-plan">
                <h3>Weight Loss Meal Plan</h3>
                <p>Breakfast: Oatmeal with almond milk and sliced banana<br>
                   Lunch: Turkey wrap with whole wheat tortilla and mixed greens<br>
                   Dinner: Stir-fried tofu with brown rice and broccoli<br>
                   Snack: Apple with peanut butter</p>
            </div>
        </section>

        <section id="hydration-tips">
            <h2>Hydration Tips</h2>
            <p>Discover hydration guidelines and tips to stay properly hydrated during workouts and training sessions.</p>
        </section>

        <section id="additional-resources">
            <h2>Additional Resources</h2>
            <p>Explore further reading and resources related to nutrition for sports and fitness.</p>
            <ul>
                <li><a href="https://www.nutrition.gov/" target="_blank">Nutrition Websites</a></li>
                <li><a href="https://www.nin.res.in/bookrecommendations.html" target="_blank">Books on Nutrition</a></li>
                <li><a href="https://www.nin.res.in/bookrecommendations.html" target="_blank">Articles on Sports Nutrition</a></li>
            </ul>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    
</body>
</html>

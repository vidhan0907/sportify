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
    <title>Sportify | Recovery Techniques</title>
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
            margin: 0;
            padding: 2rem;
            text-align: center;
        }

        main {
            display: flex;
            justify-content: center;
            padding: 20px;
            gap: 20px;
            gap: 1.5rem;
            flex-wrap:wrap;
            align-items: center;
            flex-wrap: wrap;
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

        .resources {
            display: flex;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            flex-wrap:wrap;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 500px;
            height: 320px;
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

        .technique {
         
            padding: 10px;
         
            border-radius: 5px;
            margin-top: 10px;
        }

        .technique h3 {
            font-size: 1.2rem;
            color: #333;
            margin-top: 0;
        }

        .technique ul {
            list-style-type: none;
            padding: 0;
            margin: 10px 0;
            color: #666;
        }

        .technique ul li {
            margin-bottom: 5px;
        }

        .additional-resources{
            width: 400px;
            height: 200px;
        }

        .additional-resources ul {
            list-style-type: none;
            padding: 0;
        }

        .additional-resources ul li {
            margin-bottom: 5px;
        }

        .additional-resources ul li a {
            color: #007BFF;
            text-decoration: none;
        }

        .additional-resources ul li a:hover {
            text-decoration: underline;
        }    </style>
</head>
<body>
    <?php require "partials/nav.php";?>
    

    <header>
    <br><br><br>
    <center>
      <h1 class="secondary_main">
        Recovery Techniques
      </h1>
</center>
    </header>
    
    <main>
        <div class="card">
            <h2>Importance of Recovery</h2>
            <p>Understand why recovery is crucial for improving performance and preventing injuries.</p>
        </div>

        <div class="card">
            <h2>Active Recovery Strategies</h2>
            <div class="technique">
                <h3>Dynamic Stretching</h3>
                <p>Engage in gentle stretching exercises to improve flexibility and reduce muscle tension.</p>
            </div>
            <div class="technique">
                <h3>Light Aerobic Exercise</h3>
                <p>Perform low-intensity activities like walking or cycling to promote blood flow and muscle recovery.</p>
            </div>
        </div>

        <div class="card">
            <h2>Passive Recovery Methods</h2>
            <div class="technique">
                <h3>Rest and Sleep</h3>
                <p>Ensure adequate sleep and rest periods to allow your body to repair and rebuild muscle tissue.</p>
            </div>
            <div class="technique">
                <h3>Hydration and Nutrition</h3>
                <p>Consume sufficient water and nutritious foods to replenish energy stores and support recovery.</p>
            </div>
        </div>

        <div class="card">
            <h2>Recovery Tools and Equipment</h2>
            <div class="technique">
                <h3>Foam Rollers and Massage Balls</h3>
                <p>Use foam rollers or massage balls to release muscle knots and improve circulation.</p>
            </div>
            <div class="technique">
                <h3>Compression Gear</h3>
                <p>Wear compression garments to reduce muscle soreness and improve recovery time.</p>
            </div>
        </div>

        <div class="card additional-resources">
            <h2>Additional Resources</h2>
            <ul>
                <li><a href="https://youtu.be/qQoIqGSht_Y?si=2NL17bxhQSyXBpIs">Recovery Techniques Videos</a></li>
                <li><a href="https://sagerountree.com/product/the-athletes-guide-to-recovery/">Books on Sports Recovery</a></li>
                <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7909540/">Articles on Muscle Recovery</a></li>
            </ul>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>

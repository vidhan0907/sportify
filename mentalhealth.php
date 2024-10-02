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
    <title>Sportify | Mental Health</title>
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

        .main-content {
            display: flex;
            justify-content: center;
            padding: 20px;
            gap: 20px;
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
            width: 400px;
            height: 300px;
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
         
            padding: 10px;
         
            border-radius: 5px;
            margin-top: 10px;
        }

        .article h3 {
            font-size: 1.2rem;
            color: #333;
            margin-top: 0;
        }

        .article ul {
            list-style-type: none;
            padding: 0;
            margin: 10px 0;
            color: #666;
        }

        .article ul li {
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
        Mental Health Resources
      </h1>
</center>
            <p>Explore various resources to support your mental well-being and resilience.</p>
        </div>

        <div class="resources">
            <div class="card">
                <h2>Understanding Mental Health</h2>
                <p>Learn about the importance of mental health and its impact on overall well-being.</p>
            </div>

            <div class="card">
                <h2>Stress Management Techniques</h2>
                <div class="article">
                    <h3>Tips for Reducing Stress</h3>
                    <ul>
                        <li>Practice deep breathing exercises.</li>
                        <li>Engage in mindfulness meditation.</li>
                        <li>Take breaks to relax during work or study.</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <h2>Building Resilience</h2>
                <div class="article">
                    <h3>Developing Resilience Skills</h3>
                    <ul>
                        <li>Set realistic goals and expectations.</li>
                        <li>Seek support from friends, family, or professionals.</li>
                        <li>Stay physically active to reduce stress.</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <h2>Professional Help and Support</h2>
                <div class="article">
                    <h3>Seeking Mental Health Support</h3>
                    <p>If you need professional assistance, consider reaching out to licensed therapists or counselors.</p>
                </div>
            </div>

            <div class="card additional-resources">
                <h2>Additional Resources</h2>
                <ul>
                    <li><a href="https://www.mind.org.uk/information-support/side-by-side-our-online-community/#:~:text=Side%20by%20Side%20provides%20a,daily%20from%208am%20to%20midnight." target="_blank">Online Mental Health Communities</a></li>
                    <li><a href="https://www.penguinrandomhouse.com/the-read-down/self-help-books-on-mental-health/" target="_blank">Books on Mental Well-being</a></li>
                    <li><a href="https://www.medicalnewstoday.com/articles/154543" target="_blank">Articles on Mental Health</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>

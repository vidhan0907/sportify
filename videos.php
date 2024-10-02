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
    <title>Videos - Sportify</title>
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
            padding: 0;
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
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            
        }

        .maincontent{
            text-align: center;
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

        .card p {
            color: #666;
            line-height: 1.4;
        }

        .video {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .video iframe {
            width: 100%;
            height: 200px;
            border: none;
            border-radius: 5px;
        }

        .video h3 {
            margin-top: 0;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <?php require "partials/nav.php";?>

    <div class="maincontent">
    <div class="header">
    <br><br><br>
    <center>
      <h1 class="secondary_main">
        Videos
      </h1>
</center>
    </div>
    
    <main>
        <div class="card">
            <h2>Workout Tutorials</h2>
            <div class="video">
                <h3>Full Body Workout for Beginners</h3>
                <iframe src="https://www.youtube.com/embed/ixkQaZXVQjs?si=X7wD4gsSceWqaCZ9" allowfullscreen></iframe>
            </div>
            <div class="video">
                <br>
                <h3>Advanced HIIT Training</h3>
                
                <iframe src="https://www.youtube.com/embed/yplP5cLuyf4?si=0VUttIEgAO4E2oEI" allowfullscreen></iframe>
            </div>
        </div>

        <div class="card">
            <h2>Nutrition Tips</h2>
            <div class="video">
                <br>
                <h3>Healthy Meal Prep Ideas</h3>
                
                <iframe src="https://www.youtube.com/embed/Bnix4LNhke8?si=cH49r8iqZUwEOYAY" allowfullscreen></iframe>
            </div>
            <div class="video">
                <br>
                <h3>Supplements 101</h3>
                
                <iframe src="https://www.youtube.com/embed/2nGWLTRwXdk?si=cO-CDciN6UR9usEc" allowfullscreen></iframe>
            </div>
        </div>

        <div class="card">
            <h2>Mental Health</h2>
            <div class="video">
                <br>
                <h3>Meditation for Athletes</h3>
                
                <iframe src="https://www.youtube.com/embed/Z2dK_m2LfrY?si=isd6ZL9G4-EnzP67" allowfullscreen></iframe>
            </div>
            <div class="video">
                <h3>Overcoming Performance Anxiety</h3>
                <iframe src="https://www.youtube.com/embed/rQMhE4Au0RE?si=gsEct6kalvTKFJgo" allowfullscreen></iframe>
            </div>
        </div>

        <div class="card">
            <h2>Recovery Techniques</h2>
            <div class="video">
                <h3>Foam Rolling for Muscle Recovery</h3>
                <iframe src="https://www.youtube.com/embed/9fvaZ_U6o3Y?si=nZtnGLCcJ5nsCO_i" allowfullscreen></iframe>
            </div>
            <div class="video">
                <br>
                <h3>Post-Workout Stretching</h3>
                <iframe src="https://www.youtube.com/embed/_-x5NUQKW3U?si=BEVmu8YgIzifE_aQ" allowfullscreen></iframe>
            </div>
        </div>
    </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="nav.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="icon" type="image/x-icon" href="logo-up.png">

    <link rel="stylesheet" href="socialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportify | Equipment Reviews</title>
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

        .reviews {
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
            width: 400px;
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

        .reviews {
            background-color: #f9f9f9;
            padding: 15px;
            margin-top: 10px;
            display: flex;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            flex-wrap:wrap;
            align-items: center;
            justify-content: center;
        }

        .reviews h3 {
            font-size: 1.2rem;
            color: #333;
            margin-top: 0;
        }

        .reviews p {
            margin-top: 10px;
            color: #666;
        }

        .rating {
            color: #ffcc00;
            margin-top: 5px;
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
      Equipment Reviews
      </h1>
</center>
            <p>Find detailed reviews of the latest fitness equipment to help you make informed decisions.</p>
        </div>

        <div class="reviews">
            <div class="card">
                <h2>Treadmills</h2>
                <div class="review">
                    <h3>NordicTrack Commercial 1750</h3>
                    <p>This treadmill offers excellent build quality and a variety of pre-set workout programs. The cushioning system reduces impact on joints.</p>
                    <div class="rating">Rating: ★★★★☆</div>
                </div>
                <div class="review">
                    <h3>Sunny Health & Fitness SF-T7603 Treadmill</h3>
                    <p>A budget-friendly option that provides basic features, though it lacks the durability of higher-end models.</p>
                    <div class="rating">Rating: ★★★☆☆</div>
                </div>
            </div>

            <div class="card">
                <h2>Dumbbells</h2>
                <div class="review">
                    <h3>Rogue Rubber Hex Dumbbells</h3>
                    <p>These adjustable dumbbells are space-efficient and easy to use, making them perfect for home gyms.</p>
                    <div class="rating">Rating: ★★★★★</div>
                </div>
                <div class="review">
                    <h3>REP Rubber Coated Hex</h3>
                    <p>Durable and well-balanced, these fixed dumbbells are great for traditional strength training exercises.</p>
                    <div class="rating">Rating: ★★★★☆</div>
                </div>
            </div>

            <div class="card">
                <h2>Yoga Mats</h2>
                <div class="review">
                    <h3>Lululemon The Mat 5mm</h3>
                    <p>Made from sustainable materials, this mat provides excellent grip and cushioning for various yoga practices.</p>
                    <div class="rating">Rating: ★★★★★</div>
                </div>
                <div class="review">
                    <h3>JadeYoga Harmony Mat</h3>
                    <p>This lightweight mat is easy to carry and perfect for yogis on the go, though it offers less cushioning than standard mats.</p>
                    <div class="rating">Rating: ★★★★☆</div>
                </div>
            </div>

            <div class="card">
                <h2>Resistance Bands</h2>
                <div class="review">
                    <h3>BC Strength Glute Loop Package</h3>
                    <p>This set includes bands of varying resistance levels, suitable for a range of exercises and fitness levels.</p>
                    <div class="rating">Rating: ★★★★★</div>
                </div>
                <div class="review">
                    <h3>GoFit Extreme Pro Gym Set</h3>
                    <p>These heavy-duty bands are durable and provide high resistance, ideal for advanced strength training.</p>
                    <div class="rating">Rating: ★★★★☆</div>
                </div>
            </div>

            <div class="card additional-resources">
                <h2>Additional Resources</h2>
                <ul>
                    <li><a href="https://www.fitsw.com/blog/where-to-buy-fitness-equipment-online/"  target="_blank">Top Fitness Equipment Websites</a></li>
                    <li><a href="https://sfhealthtech.com/collections/home-equipment"  target="_blank">Best Equipment for Home Gyms</a></li>
                    <li><a href="https://www.morgansports.com.au/guides/gym-maintenance-how-to-care-for-your-gym-equipment/" target="_blank">Equipment Maintenance Tips</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>

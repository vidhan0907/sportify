<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="socialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    
    
    
    
    
    <title>Sportify | About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        
        .student {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            width: 300px;
            text-align: center;
        }
        
        .student:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        .student h2 {
            color: #333;
            margin-bottom: 10px;
        }
        
        .student p {
            color: #666;
            margin-bottom: 5px;
        }
        </style>
</head>
<body>
    <?php require 'partials/nav.php' ?>
    <br><br><br> <br>
    <center>
        <h1 class="secondary_main">
            About Us
        </h1>
  </center>
  <br><br><br><br><br>
    <div class="container">
      <div class="student" id="student1">
          <h2>Student 1</h2>
          <p>Name: Kavya Rakhecha</p>
          <p>Email: kavyarakhecha@gmail.com</p>
          <p>Phone: +91 7003760521</p>
        </div>
        <div class="student" id="student2">
            <h2>Student 2</h2>
            <p>Name: Vidhan Agarwal</p>
            <p>Email: vidhan0907@gmail.com</p>
            <p>Phone: +91 9330270139</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>

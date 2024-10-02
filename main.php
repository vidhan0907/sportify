
<!doctype html>
<html lang="en">
  <head>
    <style>
      *{
        scroll-behavior: smooth;
      }
     #welcomepage {
                margin: 0;
                font-family: Arial, sans-serif;
                overflow: hidden; /* Prevents the whole page from scrolling */
                animation-delay: 10s;
                animation: moveDown 1s ease-out forwards;
                height: 100vh;
                  overflow: hidden;
                  position: relative;
                  overflow-y: hidden;
                  scroll-behavior: none;
                  display: block;
    animation: moveInTop 1s ease-out;
                
            }
            .greetings-container {
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              height: 100vh;
              overflow: hidden;
              position: relative;
              background-color: #c9d6ff;
    background: linear-gradient(to right, #e2e2e2, #c9d6ff);
          }
          
          .greeting {
              font-size: 3rem;
              color: black;
              margin: 10px 0;
              margin: 10px 0;
              transition: color 0.3s ease-in-out; /* Smooth color transition */
              opacity: 0; /* Hide initially */
              position: absolute;
              transform: translateY(-20px); /* Slightly off position */
              transition: opacity 1s fade, transform 1s fade;
             position: absolute;
             font-weight: 500;
          }
          
          .greeting.visible {
              opacity: 1;
              transform: translateY(0); 
          }
          
          .mainbox{
              display: flex;
              justify-content: center;
              align-items: center;
              height: 700px;
          }
          
          .newbox
          {
              background-color: blueviolet;
              height:500px;
              width:500px;
              display: flex;
              justify-content: center;
              align-items: center;
          }
          
          .newbox h1
          {
              font-size: 100px;
              position: relative;
          }
          
          h1:hover::after
        {
              content: "";
              position: absolute;
              width: 0;
              height: 10px;
              left: 0;
              bottom: 0;
              /* background-color: black; */
              animation-name: animation;
              animation-fill-mode: forwards;
              animation-duration: 2s;
              animation-delay: 0.1s;
          } 
          
          @keyframes animation {
              0%{
                  width: 0;
                  left: 0;
              }
              50%
              {
                  width: 100%;
                  left: 0;
              }
              100%
              {
                  width: 0;
                  left: 100%;
              }
          }
          .tertiary {
  height: 150vh !important;
  background-image: linear-gradient(to right bottom, rgba(189, 45, 62, 0.3), rgba(45, 45, 62, 0.3)), url('https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') !important;
  backdrop-filter: blur(10px) !important;
  color: white !important;
  background-size: cover !important;
  background-position: top !important;
  position: relative !important;
  clip-path: polygon(0 30%, 100% 0, 100% 70%, 0% 100%) !important;
  margin: 0.5rem !important;
}


    </style>
    <!-- <link rel="stylesheet" href="icon-font.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="nav.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" type="png" href="img/icon_title.png"> -->
    <link rel="icon" type="image/x-icon" href="logo-up.png">
    <title>Sportify | Welcome</title>
  </head>
  <body>
    <div id="welcomepage">

        <div class="greetings-container notranslate">
            <div class="greeting">Hi</div>
            <div class="greeting">नमस्ते</div>
            <div class="greeting">Bonjour</div>
            <div class="greeting">أهلاً</div>
            <div class="greeting">Hola</div>
            <div class="greeting">你好</div>
            <div class="greeting">ওহে</div>
            <div class="greeting">привет</div>
            <div class="greeting">こんにちは</div>
            <!-- Add more greetings as needed -->
            <script>
              // script.js
document.addEventListener('DOMContentLoaded', () => {
    const greetings = document.querySelectorAll('.greeting');
    let currentGreetingIndex = 0;
    const intervalTime = 300; // 1 seconds
    const transitionTime = 300; // 0.5 second (matching CSS transition)

    function showNextGreeting() {
        if (currentGreetingIndex > 0) {
            greetings[currentGreetingIndex - 1].classList.remove('visible');
        }
        greetings[currentGreetingIndex].classList.add('visible');
        currentGreetingIndex++;
    }

    // Initial greeting display
    greetings[currentGreetingIndex].classList.add('visible');
    currentGreetingIndex++;

    // Set interval to show next greeting
    const intervalId = setInterval(() => {
        showNextGreeting();
        if (currentGreetingIndex >= greetings.length) {
            clearInterval(intervalId);
        }
    }, intervalTime);
});


function scrollToElement(element) {
        element.scrollIntoView({ behavior: 'smooth' });
      } 
      window.onload = function() {
        setTimeout(() => {
            const section2 = document.getElementById('main_page');
            scrollToElement(section2);
            // Set display none of section1 after scrolling to section2
     // Add a delay to ensure scroll is complete
        }, 3000); // 5-second delay
      };;
      setTimeout(() => {
              const section1 = document.getElementById('welcomepage');
              section1.style.display = 'none';
          }, 4000); 
            </script>
        </div>
        
    </div>

    <div id="main_page">
  <?php require 'partials/nav.php' ?>
  <style>
      .carousel-fade .carousel-item {
        transition: opacity 2s ease-in-out;
      }

      #carouselExampleFade {
        position: relative;
        z-index: 0;
      }

      .black-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        /* Adjust the opacity as needed */
        z-index: 1;
      }

      .overlay-content {
        position: absolute;
        top: 30%;
        /* Adjust this value to move the content upwards or downwards */
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        z-index: 2;
        text-align: center;

      }

      .carousel-inner {
        position: relative;
      }
    </style>

    <br>
    <br>
    <br>

    <div class="primary">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="1000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100"
              src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?q=80&w=2969&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="https://images.unsplash.com/photo-1519861531473-9200262188bf?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmFza2V0YmFsbHxlbnwwfHwwfHx8MA%3D%3D"
              alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"
              src="https://plus.unsplash.com/premium_photo-1664298341091-9281d574b0f5?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fGZpdG5lc3MlMjB3ZWlnaHRsaWZ0aW5nJTIwZGFyayUyMGJhY2t8ZW58MHx8MHx8fDA%3D"
              alt="Third slide">
          </div>
        </div>
        <div class="black-overlay"></div>
      </div>

      <div class="overlay-content">
        <center>
          <h1 class="typewriter">
            <img src="logo.png" alt="" width="300" height="300" srcset="">
          </h1>
        </center>
      </div>
    </div>
  </div>
  </div>
  <br><br>
    <div class="secondary">
      <center>
      <h1 class="secondary_main">
        A FITNESS ENTHUSIAST
      </h1>
</center>
<div class="row mx-2">
<div class="col-1-of-2">
  <br>
<h3 class="secondar_sub u-margin-bottom-small">
  INDULDGE IN SPORTS
</h3>
<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, explicabo unde quo nemo, nam corporis quaerat repudiandae voluptatem, sunt aut dignissimos! Sint ad eius tenetur, iure beatae nam ducimus sapiente exercitationem dignissimos officia tempore distinctio adipisci eveniet neque quia reiciendis porro, aut doloremque ut! At fuga doloremque eligendi iure magni, ex voluptatem est perferendis eum consequatur earum ipsum, optio rem delectus velit illum rerum! Facere ad eaque ipsam fugiat, earum dolores molestiae quasi sequi laboriosam possimus qui saepe mollitia obcaecati officiis laborum repellat totam maiores explicabo quia et est ullam maxime commodi. Ab sequi unde vitae ipsum laborum itaque deleniti sunt consectetur, veritatis voluptas perferendis provident? Perferendis, omnis! Porro voluptatum rerum qui, accusan </span>
<br><br>
<h3 class="secondar_sub u-margin-bottom-small">
FITNESS FREAK</h3>
<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, explicabo unde quo nemo, nam corporis quaerat repudiandae voluptatem, sunt aut dignissimos! Sint ad eius tenetur, iure beatae nam ducimus sapiente exercitationem dignissimos officia tempore distinctio adipisci eveniet neque quia reiciendis porro, aut doloremque ut! At fuga doloremque eligendi iure magni, ex voluptatem est perferendis eum consequatur earum ipsum, optio rem delectus velit illum rerum! Facere ad eaque ipsam fugiat, earum dolores molestiae quasi sequi laboriosam possimus qui saepe mollitia obcaecati officiis laborum repellat totam maiores explicabo quia et est ullam maxime commodi. Ab sequi unde vitae ipsum laborum itaque deleniti sunt consectetur, veritatis voluptas perferen</span>
</div>
<br><br>
<div class="col-1-of-2">
<div class="composition">
<img src="https://images.unsplash.com/photo-1595207732481-22cccd3480fe?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8c3BvcnRzJTIwY3JpY2tldHxlbnwwfHwwfHx8MA%3D%3D" alt="Photo 1" class="composition__photo composition__photo--p1">
<img src="https://images.unsplash.com/photo-1551984427-6d77a1918093?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGZpdG5lc3MlMjBneW0lMjBhdHRpdHVkZXxlbnwwfHwwfHx8MA%3D%3D" alt="Photo 2" class="composition__photo composition__photo--p2">
<img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Photo 3" class="composition__photo composition__photo--p3">
</div>
</div>
    </div>
    <style>
.carousel {
    width: 100%;
    overflow: hidden; /* Ensures items outside view are hidden */
}

.carousel-container {
    display: flex; /* Arrange items in a row */
    overflow-x: scroll; /* Enable horizontal scrolling */
    scroll-behavior: smooth; /* Smooth scrolling */
    gap: 20px; /* Adjust as per your design */
    margin-left: 10px;
    margin-right: 10px;
}
.carousel-container::-webkit-scrollbar {
  display: none;
}
.item1, .item2,.item3,.item4,.item5 {
    flex: 0 0 auto; /* Prevent items from growing */
    width: 1000px; /* Set item width */
    height: 600px; /* Set item height */
    
    padding: 20px; /* Adjust padding */
}

.item1{
  background-image: url("1.png");
}
.item2{
  background-image: url("2.png");
}
.item3{
  background-image: url("3.png");
}
.item4{
  background-image: url("4.png");
}
.item5{
  background-image: url("5.png");
}


    </style>
    <center>
      <h1 class="secondary_main">
        Our Services
      </h1>
</center>

    <div class="carousel">
      <div class="carousel-container">
        <a href="socialize.php">
          <div class="item1"></div>
        </a>
        <a href="resources.php">
          <div class="item2"></div>
        </a>
        <a href="list_competitions.php">
          <div class="item3"></div>
        </a>
        <a href="suggestions.php">
          <div class="item4"></div>
        </a>
        <a href="mentor.php">
          <div class="item5"></div>
        </a>
        <!-- Add more items as needed -->
      </div>
    </div>
    

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="tertiary">
    <section class="section-features">
      <br><br><br><br><br>
<div class="rows">
<div class="col-1-of-4">
<div class="feature-box">
  <br>
<i class="fa fa-globe heading-tertiary" aria-hidden="true"></i>
<br><br>
<h3 class="heading-tertiary u-margin-bottom-small mx-4">Connect to the world</h3>
<p class="feature-box__text">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
</p>
</div>
</div>


<div class="col-1-of-4">
<div class="feature-box">
  <br>
<i class="fa fa-trophy heading-tertiary" aria-hidden="true"></i>
<br><br>
<h3 class="heading-tertiary u-margin-bottom-small">Share Your Achievements</h3>
<p class="feature-box__text">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
</p>
</div>
</div>


<div class="col-1-of-4">
<div class="feature-box">
  <br>
<i class="fa fa-tachometer heading-tertiary" aria-hidden="true"></i>
<br>
<br>

<h3 class="heading-tertiary u-margin-bottom-small">Fitness Dashboard</h3>

<p class="feature-box__text">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
</p>
</div>
</div>



</div>
</section>
    </div>
    </div>
    <style>
    .footer {
      background-color: #333;
      padding: 3rem 0;
      font-size: 1.4rem;
      color: #f7f7f7;
      height: 400px;
    }

    .footer__logo-box {
      text-align: center;
      margin-bottom: 3rem;
    }

    .footer__logo {
      width: 15rem;
      height: auto;
    }

    .footer__navigation {
      border-top: 1px solid #777;
      padding-top: 2rem;
      display: inline-block;
    }

    .footer__list {
      list-style: none;
    }

    .footer__item {
      display: inline-block;
    }

    .footer__item:not(:last-child) {
      margin-right: 1.5rem;
    }

    .footer_link:link,
    .footer_link:visited {
      color: #f7f7f7;
      background-color: #333;
      text-decoration: none;
      text-transform: uppercase;
      display: inline-block;
      transition: all .2s;
    }

    .footer_link:hover,
    .footer_link:active {
      color: #55c57a;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.4);
      transform: rotate(5deg) scale(1.3);
    }

    .footer__copyright {
      border-top: 1px solid #777;
      padding-top: 2rem;
      width: 80%;
      float: right;
    }
  </style>
  <footer class="footer">
    <div class="footer__logo-box">
      <img src="logo.png" alt="Full logo" class="footer__logo">

    </div>
    <div class="row">
      <div class="col-1-of-2">
        <p class="footer__copyright">
          Built by <a href="Contact_us.php" class="footer__link">Kavya Rakhecha & Vidhan Agarwal</a> for X-Code in
          X-uberance.
        </p>
      </div>
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
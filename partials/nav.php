<?php
echo '

    <div class="circle">
        <style>
            
    .circle {
        --circle-size: 25px;
        position: fixed;
        height: var(--circle-size);
        width: var(--circle-size);
        border: 1px solid black;
        border-radius: 100%;
        top: calc(var(--circle-size) / 2 * -1);
        left: calc(var(--circle-size) / 2 * -1);
        pointer-events: none;
        z-index: 99999;
    }

        </style>
        <script>
            /**
     * YouTube Tutorial:
     * https://youtu.be/wG_5453Vq98
     */

    console.clear();

    // Select the circle element
    const circleElement = document.querySelector(\'.circle\');

    // Create objects to track mouse position and custom cursor position
    const mouse = { x: 0, y: 0 }; // Track current mouse position
    const previousMouse = { x: 0, y: 0 } // Store the previous mouse position
    const circle = { x: 0, y: 0 }; // Track the circle position

    // Initialize variables to track scaling and rotation
    let currentScale = 0; // Track current scale value
    let currentAngle = 0; // Track current angle value

    // Update mouse position on the \'mousemove\' event
    window.addEventListener(\'mousemove\', (e) => {
      mouse.x = e.x;
      mouse.y = e.y;
    });

    // Smoothing factor for cursor movement speed (0 = smoother, 1 = instant)
    const speed = 0.17;

    // Start animation
    const tick = () => {
      // MOVE
      // Calculate circle movement based on mouse position and smoothing
      circle.x += (mouse.x - circle.x) * speed;
      circle.y += (mouse.y - circle.y) * speed;
      // Create a transformation string for cursor translation
      const translateTransform = `translate(${circle.x}px, ${circle.y}px)`;

      // SQUEEZE
      // 1. Calculate the change in mouse position (deltaMouse)
      const deltaMouseX = mouse.x - previousMouse.x;
      const deltaMouseY = mouse.y - previousMouse.y;
      // Update previous mouse position for the next frame
      previousMouse.x = mouse.x;
      previousMouse.y = mouse.y;
      // 2. Calculate mouse velocity using Pythagorean theorem and adjust speed
      const mouseVelocity = Math.min(Math.sqrt(deltaMouseX**2 + deltaMouseY**2) * 4, 150); 
      // 3. Convert mouse velocity to a value in the range [0, 0.5]
      const scaleValue = (mouseVelocity / 150) * 0.5;
      // 4. Smoothly update the current scale
      currentScale += (scaleValue - currentScale) * speed;
      // 5. Create a transformation string for scaling
      const scaleTransform = `scale(${1 + currentScale}, ${1 - currentScale})`;

      // ROTATE
      // 1. Calculate the angle using the atan2 function
      const angle = Math.atan2(deltaMouseY, deltaMouseX) * 180 / Math.PI;
      // 2. Check for a threshold to reduce shakiness at low mouse velocity
      if (mouseVelocity > 20) {
        currentAngle = angle;
      }
      // 3. Create a transformation string for rotation
      const rotateTransform = `rotate(${currentAngle}deg)`;

      // Apply all transformations to the circle element in a specific order: translate -> rotate -> scale
      circleElement.style.transform = `${translateTransform} ${rotateTransform} ${scaleTransform}`;

      // Request the next frame to continue the animation
      window.requestAnimationFrame(tick);
    }

    // Start the animation loop
    tick();

        </script>
    </div>
    <nav class="navbar navbar-expand-lg fixed-top custom-navbar shadow-7-strong">
        <a class="navbar-brand" href="#">
          <img src="logo-up.png" class="navbar-logo" alt="">
          Sportify
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto"> <!-- Centered nav items -->
            <li class="nav-item active">
              <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">About Us<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCDBwCKwjKTSKtcqRnbbwVlChGpLZwpRpMNcNtKQFqwTmggzqVVDJfxQnRfFWqpNzvbJvV">Contact Us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                Our Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="mentor.php">Expert</a></li>
                <li><a class="dropdown-item" href="resources.php">Resources</a></li>
                <li><a class="dropdown-item" href="achievments.php">Achievements Dashboard</a></li>
                <li><a class="dropdown-item" href="coaching.php">Coachings</a></li>
                <li><a class="dropdown-item" href="list_competitions.php">Competitions</a></li>
                <li><a class="dropdown-item" href="suggestions.php">Add Friends</a></li>
                <li><a class="dropdown-item" href="socialize.php">Socialize|Posts|Forums</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="user_profile.php"> <i class="fa-solid fa-user"></i> <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          
        </div>
      </nav>
';
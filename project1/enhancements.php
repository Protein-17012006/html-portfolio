<!DOCTYPE html>
<html>

<head>
  <title>Enhancements</title>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles.css/styles.css">
  <link rel="stylesheet" href="./styles.css/style4.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <?php
  include_once("header.inc");
  ?>

  <div class="about-middle">
    <div class="hero-section">
      <h2>Further Enhancements</h2>
      <h4>TO IMPROVE USERS' EXPERIENCE</h4>
      <p>...and to gain more point, obviously, there are several upgrades in our project, which are listed out below</p>
      <button class="join-btn">YOUTUBE VIDEO</button>
    </div>

    <img src="img/enhance.png" alt="">

    <!-- Carousel Section -->
    <div class="carousel-container">
      <button class="arrow arrow-left" onclick="moveSlide(-1)" disabled>&#9665;</button>
      <div class="carousel-wrapper">
        <div class="carousel">
          <div class="card">
            <h3>Best Education</h3>
            <p>Description here</p>
          </div>
          <div class="card">
            <h3>Best Teachers</h3>
            <p>Description here</p>
          </div>
          <div class="card">
            <h3>Best Students</h3>
            <p>Description here</p>
          </div>
          <div class="card">
            <h3>Best Courses</h3>
            <p>Description here</p>
          </div>
          <div class="card">
            <h3>Best Facilities</h3>
            <p>Description here</p>
          </div>
          <div class="card">
            <h3>Best Community</h3>
            <p>Description here</p>
          </div>
        </div>
      </div>
      <button class="arrow arrow-right" onclick="moveSlide(1)">&#9655;</button>
    </div>
  </div>
  <script src="script/script.js"></script>
</body>


</html>
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
            <h3>CSS (Project 1)</h3>
            <p>Some animation and movements of objects, the apprearance of the website is included by using css and javascript. Also, because the outlook of project 1 was bad, all of style for the webpage was remade in project 2, more beautifully.</p>
          </div>
          <div class="card">
            <h3>Tips (Project 1)</h3>
            <p>A page listing out tips for applicants is created, in project 2, tips are only contained in the aside bar in job.php (with a link to tips website).</p>
          </div>
          <div class="card">
            <h3>Groups of job (Project 1)</h3>
            <p>In the scenario of a new company branch, there are lots of occupations for applicants. Therefore, beside listing all of them, we decided to group them into 3 specific fields: Computer Science, Business and Media.</p>
          </div>
          <div class="card">
            <h3>Particular jobs (Project 1)</h3>
            <p>To improve users experience, in each particular field of job, there're tabs where leading users to specific page containing full necessary information about that job. Users can also reach them by the search engine in the homepage.</p>
          </div>
          <div class="card">
            <h3>Login system (Project 2)</h3>
            <p>The enhancement for management page is important. There're several functions approaching and changing database, so it should be secured. Only admin could access the mange table, so they have to pass the login system with username and password (username: admin, password: admin).</p>
          </div>
        </div>
      </div>
      <button class="arrow arrow-right" onclick="moveSlide(1)">&#9655;</button>
    </div>
    
  </div>

  <div class="enhancement-footer">
  <?php
    include_once("footer.inc");
    ?>
  </div>
  <script src="script/script.js"></script>
</body>


</html>
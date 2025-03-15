<!DOCTYPE html>
<html>

<head>
  <title>About</title>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles.css/style3.css">
  <link rel="stylesheet" href="./styles.css/styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<?php
include_once("header.inc");
?>

<div class="about-middle">

  <div class="gallery-circle">
    <img src="img/about1.jpg" alt="bphuong">
    <img src="img/about2.jpg" alt="hhoang">
    <img src="img/about3.jpg" alt="hdang">
    <img src="img/about4.jpg" alt="ny">
  </div>

  <div class="about-info">
    <h1>About Us</h1>
    <p>Group Name: <span>Nothingness</span></p>
    <p>Tutor’s Name: <span>Tristan Nguyen</span></p>
    <p>Subject: <span>COS10026</span></p>
    <p>Team Members:</p>
    <ul class="team-list">
      <li>Binh Phuong Vu</li>
      <li>Nguyen Huy Hoang Nguyen</li>
      <li>Hai Dang Nguyen</li>
      <li>Xuan Ny Le</li>
    </ul>
  </div>

  <div class="container-in-about">
    <div class="card">
      <div class="card-content">
        <p class="offer">Leader</p>
        <h2>Binh Phuong Vu</h2>
        <p class="details">Nothingness &nbsp; Tristan Nguyen</p>
        <p class="description">Contribution: make the format for the website: homepage, about, enhancements, jobs page, tips, add CSS features, navigate hyperlinks on pages, search engine in homepage</p>
        <a href="mailto:105710430@student.swin.edu.au"><button class="btn">Contact</button></a>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <p class="offer">Member</p>
        <h2>Nguyen Huy Hoang Nguyen</h2>
        <p class="details">Nothingness &nbsp; Tristan Nguyen</p>
        <p class="description">Contribution: Edit structure for form and feedback form, check for css style.</p>
        <a href="mailto:105727702@student.swin.edu.au"><button class="btn">Contact</button></a>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <p class="offer">Member</p>
        <h2>Hai Dang Nguyen</h2>
        <p class="details">Nothingness &nbsp; Tristan Nguyen</p>
        <p class="description">Contribution: Find information for each jobs, take note for css, search data for extending occupations, check for html format, css style and structure.</p>
        <a href="mailto:105680423@student.swin.edu.au"><button class="btn">Contact</button></a>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <p class="offer">Member</p>
        <h2>Xuan Ny Le</h2>
        <p class="details">Nothingness &nbsp; Tristan Nguyen</p>
        <p class="description">Contribution: Find information for each jobs, take note for css, search data for extending occupations, check for html format, css style and structure.</p>
        <a href="mailto:105680151@student.swin.edu.au"><button class="btn">Contact</button></a>
      </div>
    </div>


  </div>
  


  <div class="about-footer">
    <?php
    include_once("footer.inc");
    ?>
  </div>

  <div class="table-in-about">
    <table>
      <tr>
        <th>Day</th>
        <th>Time</th>
        <th>Activity</th>
      </tr>
      <tr>
        <td>Wednesday</td>
        <td>7:15 AM - 11:15 AM</td>
        <td>Networks and Switching</td>
      </tr>
      <tr>
        <td>Saturday</td>
        <td>7 PM - 11 PM</td>
        <td>Web Technology Project</td>
      </tr>
      <tr>
        <td>Saturday</td>
        <td>1 PM - 4 PM</td>
        <td>Foundation of Statistics</td>
      </tr>
    </table>
  </div>
</div>




<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>




<!-- <div class="about-middle">
    <h1>Group Information</h1>

    <h2>Basic Details</h2>
    <dl>
      <dt>Group Name:</dt>
      <dd>Nothingness</dd>

      <dt>Tutor’s Name:</dt>
      <dd>Tristan Nguyen</dd>

      <dt>Members Contribution:</dt>
      <dd>
        <ul>
          <li><strong>Binh Phuong Vu:</strong> make the format for the website: homepage, about, enhancements, jobs page, tips, add CSS features, navigate hyperlinks on pages, search engine in homepage.</li>
          <li><strong>Nguyen Huy Hoang Nguyen:</strong>edit structure for form and feedback form, check for css style.</li>
          <li><strong>Hai Dang Nguyen:</strong> find information for each jobs, take note for css, search data for extending occupations, check for html format, css style and structure.</li>
          <li><strong>Xuan Ny Le:</strong> find information for each jobs, check the function of each necessary tab, check for html format, css style and structure.</li>
        </ul>
      </dd>
    </dl>

    <h2>Timetable</h2>
    <table>
      <tr>
        <th>Day</th>
        <th>Time</th>
        <th>Activity</th>
      </tr>
      <tr>
        <td>Wednesday</td>
        <td>7:15 AM - 11:15 AM</td>
        <td>Networks and Switching</td>
      </tr>
      <tr>
        <td>Saturday</td>
        <td>7 PM - 11 PM</td>
        <td>Web Technology Project</td>
      </tr>
      <tr>
        <td>Saturday</td>
        <td>1 PM - 4 PM</td>
        <td>Foundation of Statistics</td>
      </tr>
    </table>

    <h2>Contact Us</h2>
    <div class="email">
      Email: <br />
      <p>Binh Phuong Vu:</p><a href="mailto:105710430@student.swin.edu.au">105710430@student.swin.edu.au</a><br />
      <p>Nguyen Huy Hoang Nguyen:</p><a href="mailto:105727702@student.swin.edu.au">105727702@student.swin.edu.au</a><br />
      <p>Hai Dang Nguyen:</p><a href="mailto:105680423@student.swin.edu.au">105680423@student.swin.edu.au</a><br />
      <p>Xuan Ny Le:</p><a href="mailto:105680151@student.swin.edu.au">105680151@student.swin.edu.au</a>
    </div>

    <div class="profile">
      <h2>Group Profile</h2>
      <p><strong>Binh Phuong Vu:</strong>
      <ul>
        <li>4 years experience in coding.</li>
        <li>Coding languages leant (just basic): Python, Html, Css, Javascript, Jquery, Bootstrap, MySQL Workbench, SQL lite, Java</li>
        <li>Leart algorithm of python on Leetcode account</li>
        <li>Certificate of SQL by HackerRank</li>
        <li>Running demo project on Java my importing additional Java's libraries</li>
        <li>Leart 4 main characteristics of OOP through Python and Java</li>
        <li>Leant framework Model Template View of Django (Python)</li>
        <li>Leant framework Model View Control of Springboot (Java)</li>
      </ul>
      </p>
      <p><strong>Nguyen Huy Hoang Nguyen:</strong>
      <ul>
        <li>2 years experience in coding</li>
        <li>Coding games: Snakes, Rock-scisors-paper, Hang-man</li>
        <li>Coding languages use: Python, Html, Css, R, Javascript</li>
        <li>Leart algorithm of machine learning and object programming (OOT)</li>
      </ul>
      </p>
      <p><strong>Hai Dang Nguyen:</strong>
      <ul>
        <li>3 years experience in coding</li>
        <li>Learnt 4 main characteristics of OOP through C++</li>
        <li>Programming languages use: Html, Css, Javascript, C++, Kotlin</li>
        <li>Learnt Data Structures and Algorithms (DSA) </li>
      </ul>
      </p>
      <p><strong>Xuan Ny Le:</strong>
        <ul>
          <li> 1 years experience in coding</li>
          <li> Coding languages leant: HTML, Css, MySQL</li>
        </ul>
      </p>
    </div>
  </div> -->
<script src="./script/script.js"></script>
</body>


</html>
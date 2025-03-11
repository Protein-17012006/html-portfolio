<!DOCTYPE html>
<html>

<head>
  <title>Occupations</title>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles.css/styles.css">
  <link rel="stylesheet" href="./styles.css/style3.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <?php
  include_once("header.inc");
  ?>

  <div class="about-middle" id="about-middle">
    <div class="top">
      <h1>All of Occupations in Our Company</h1>

      <p>In the scenario of establishing another branch, there are multiple positions for you</p>
      <br><br><br><br><br><br><br><br>
      <div class="info-bar">
        <div class="info-item">
          <div class="info-icon">👤</div>
          <div class="info-text">Population: <strong>1.250</strong></div>
        </div>
        <div class="info-item">
          <div class="info-icon">🌍</div>
          <div class="info-text">Territory: <strong>500 KM²</strong></div>
        </div>
        <div class="info-item">
          <div class="info-icon">🏠</div>
          <div class="info-text">AVG Price: <strong>$80.000</strong></div>
        </div>
        <button class="apply-btn" onclick="navigateTo('apply.php')">Apply Now</button>
      </div>
    </div>


    <div class="frame-container" id="frame-container">
    <button id="showMoreOptions" class="frame-button" onclick="navigateTo('list_job.php')">Show More Options</button>
      <div class="frame-wrap active">
        <div class="frame">
          <img src="job_description/CS/cs.img/cs1.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>CYBERSECURITY</h2>
            <p class="subtitle">Reference ID: ABC56 </p>
            <p class="description">
            Cybersecurity is the practice of protecting systems, networks, 
            and data from cyber threats through security measures and risk management.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/CS/cs.img/cs2.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>FULL STACK DEVELOPER</h2>
            <p class="subtitle">Reference ID: ABC57 </p>
            <p class="description">
            A Full Stack Developer builds and maintains both the front-end and back-end of web applications, 
            handling databases, servers, and user interfaces.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/CS/cs.img/cs3.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>FRONT-END DEVELOPER</h2>
            <p class="subtitle">Reference ID: ABC58</p>
            <p class="description">
            A Front-End Developer designs and develops user interfaces for websites and applications,
             focusing on responsiveness, performance, and user experience.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

      </div>

      <div class="frame-wrap">
        <div class="frame">
          <img src="job_description/CS/cs.img/cs4.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>Brazil</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/CS/cs.img/cs5.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/CS/cs.img/cs6.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

      </div>

      <div class="frame-wrap">
        <div class="frame">
          <img src="job_description/Business/business.img/business1.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>BUSINESS DEVELOPER MANAGER</h2>
            <p class="subtitle">Reference ID: BUS56</p>
            <p class="description">
            A Business Development Manager identifies growth opportunities, builds client relationships, 
            and develops strategies to drive sales and business expansion.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/Business/business.img/business2.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>MARKERTING MANAGER</h2>
            <p class="subtitle">Reference ID: BUS57</p>
            <p class="description">
            A Marketing Manager develops and executes strategies to promote a brand, drive sales, 
            and engage customers through various marketing channels.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/Business/business.img/business3.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>FINANCIAL ANALYST</h2>
            <p class="subtitle">Reference ID: BUS58</p>
            <p class="description">
            A Financial Analyst evaluates financial data, market trends, 
            and investment opportunities to help businesses make informed financial decisions.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

      </div>

      <div class="frame-wrap">
        <div class="frame">
          <img src="job_description/Business/business.img/business4.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>OPERATIONS MANAGER</h2>
            <p class="subtitle">Reference ID: BUS59</p>
            <p class="description">
            An Operations Manager oversees daily business activities, optimizes processes, 
            and ensures efficiency to meet organizational goals.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/Business/business.img/business5.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>HUMAN RESOURCES MANAGER</h2>
            <p class="subtitle">Reference ID: BUS60</p>
            <p class="description">
            A Human Resources Manager oversees recruitment, employee relations, 
            and workplace policies to ensure a productive and compliant work environment.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/Business/business.img/business6.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SALES MANAGER</h2>
            <p class="subtitle">Reference ID: BUS60</p>
            <p class="description">
            A Sales Manager leads a sales team, develops strategies, and drives revenue growth by building 
            client relationships and meeting sales targets.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

      </div>

      <div class="frame-wrap">
        <div class="frame">
          <img src="job_description/CS/cs.img/cs1.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/Business/business.img/business1.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="./job_description/Media/media.img/media1.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

      </div>

      <div class="frame-wrap">
        <div class="frame">
          <img src="job_description/CS/cs.img/cs1.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/Business/business.img/business1.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="./job_description/Media/media.img/media1.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

      </div>

      <div class="frame-wrap">
        <div class="frame">
          <img src="job_description/CS/cs.img/cs1.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/Business/business.img/business1.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="./job_description/Media/media.img/media1.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

      </div>

      <div class="frame-wrap">
        <div class="frame">
          <img src="job_description/CS/cs.img/cs1.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="job_description/Business/business.img/business1.png" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore More</button>
        </div>

        <hr>

        <div class="frame">
          <img src="./job_description/Media/media.img/media1.jpg" alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2>SWITZERLAND</h2>
            <p class="subtitle">Europe</p>
            <p class="description">
              Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website.
              You can use this layout for your commercial work.
            </p>
          </div>
          <button class="frame-button">Explore Mor</button>
        </div>

      </div>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.428064686955!2d106.66673549337516!3d10.81631374784539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ff6c51d5ebd%3A0x4403e126c229b92b!2sSwinburne%20Vietnam%20Alliance%20Program%20-%20HCMC%20location!5e1!3m2!1svi!2s!4v1741239398102!5m2!1svi!2s"
      width="450" height="782" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>

    <div class="pagination">
        <span class="arrow" onclick="changePage(-1)">&#8592;</span> 
        <div class="circle active" onclick="setActive(this, 0)">1</div>
        <div class="circle" onclick="setActive(this, 1)">2</div>
        <div class="circle" onclick="setActive(this, 2)">3</div>
        <div class="circle" onclick="setActive(this, 3)">4</div>
        <div class="circle" onclick="setActive(this, 4)">5</div>
        <div class="circle" onclick="setActive(this, 5)">6</div>
        <span class="arrow" onclick="changePage(1)">&#8594;</span> 
    </div>
  </div>


  <script src="./script/script.js"></script>
</body>

</html>
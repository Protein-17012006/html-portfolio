<!DOCTYPE html>
<html>

<head>
  <title>Homepage</title>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles.css/styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <?php
      include_once("header.inc");
    ?>

  <script src="script.js"></script>


  <div class="middle">
    <h1>Searching For a New Journey?</h1>

    <div class="search">
      <label for="search_list">
        <input type="text" id="search_list" list="job" placeholder="Search for your position...">
        <datalist id="job">
          <option value=""></option>
          <option value="Automation Engineer"></option>
          <option value="Back-End Developer"></option>
          <option value="Business Development Manager"></option>
          <option value="Content Creator"></option>
          <option value="Cybersecurity Analyst"></option>
          <option value="Data Engineer"></option>
          <option value="Digital Marketing Specialist"></option>
          <option value="Financial Manager"></option>
          <option value="Full Stack Developer"></option>
          <option value="Front-End Developer"></option>
          <option value="HR Manager"></option>
          <option value="Marketing Manager"></option>
          <option value="Media Buyer"></option>
          <option value="Operations Manager"></option>
          <option value="Public Relations Specialist"></option>
          <option value="Project Manager"></option>
          <option value="Social Media Manager"></option>
          <option value="Video Production Specialist"></option>
        </datalist>
        <button onclick="search()"><img src="./img/search.png" alt="searching"></button>
      </label>
    </div>

    <div class="steps">
      <figure>
        <img src="./img/step1.png" alt="step1">
        <figcaption><strong><span>Step 1:</span></strong> Fill in the application form online on this website if you
          find it suitable.</figcaption>
      </figure>

      <figure>
        <img src="./img/step2.png" alt="step1">
        <figcaption><strong><span>Step 2:</span></strong> If your form is accepted, we'll send to email to go interview.
          Remember to check email frequently.</figcaption>
      </figure>

      <figure>
        <img src="./img/step3.png" alt="step1">
        <figcaption><strong><span>Step 3:</span></strong> When you and our company share the same goals, you will be
          able to start the internship.</figcaption>
      </figure>
    </div>

    <section>
      <h2>About Us</h2>
      <p>Nothingness is a leading recruitment agency dedicated to connecting talented individuals with top-tier
        companies. Our mission is to bridge the gap between job seekers and employers, ensuring mutual growth and
        success.</p>
      <p>With over a decade of experience in the recruitment industry, we specialize in providing workforce solutions
        across various sectors, including technology, healthcare, finance, and engineering. Our team of experienced
        professionals works tirelessly to match candidates with the right opportunities, ensuring career progression and
        business success.</p>
      <p>At Nothingness, we believe in a personalized approach, offering career counseling, resume optimization, and
        interview coaching to help job seekers stand out in a competitive market. For employers, we provide customized
        hiring solutions, ensuring access to a pool of highly qualified and motivated candidates.</p>
    </section>

    <br>

    <section>
      <h2>Join Our Network</h2>
      <p>We provide exciting job opportunities in various industries. Whether you are a recent graduate or an
        experienced professional, Nothingness can help you find the perfect role.</p>
      <p>Joining our network comes with several benefits, including exclusive access to job postings, career development
        resources, and networking opportunities with industry professionals. We collaborate with top employers to ensure
        that our candidates receive the best opportunities available.</p>
      <p>Our recruitment specialists work closely with you to understand your career goals and aspirations, offering
        guidance throughout the job search process. From resume reviews to interview preparation, we equip you with the
        necessary tools to succeed in your career journey.</p>
      <p>Sign up today and take the first step towards a fulfilling career with Nothingness.</p>
    </section>

    <br>

    <section>
      <h2>Description of this website</h2>
      Our company's IT part has designed this webpage for potential individuals to easily take opportunities to go along
      with us . Click <a href="">here</a> to watch a video about this occupations seeking website.
      Moreover, if you want to send feedback for our company, click <a href="feedback.php">here</a> to go to the
      feedback form.
    </section>

    <br><br>

    <?php
    include_once("footer.inc");
    ?>
  </div>


  <script src="./script/script.js"></script>
</body>


</html>
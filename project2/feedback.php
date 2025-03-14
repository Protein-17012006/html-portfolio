<!DOCTYPE html>
<html>

<head>
  <title>Feedback</title>
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
  <div class="about-middle">
    <div class="login-box">
      <div class="formbody">
        <form class="form-feedback" action="#" method="post">
          <div class="input-box">
            <h1>Feedback</h1>
          </div>
          <form action="#" method="post">
            <div class="input-box">
              <label for="name">Job reference number</label>
              <input type="name" maxlength="5" required id="name">
            </div>
            <div class="input-box">
              <label for="name">Your full name</label>
              <input type="name" pattern="[A-Za-zÀ-ỹ\s]+" maxlength="24" required id="name">
            </div>
            <div class="input-box">
              <label for="postcode">Postcode</label>
              <input type="text" maxlength="4" id="numberInput" required id="postcode">
            </div>
            <div class="input-box">
              <label for="email">Email</label>
              <input type="email" required id="email">
            </div>
            <div class="input-box">
              <label for="numberInput">Phone number</label>
              <input type="text" pattern="\d{8,12}|\d{2,3} \d{6,10}" id="numberInput"
                oninput="validateNumberInput(event)">
            </div>

            <table class="feedback-table">
              <thead>
                <tr>
                  <th>What is your problems?</th>
                  <th>What is your advices?</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><textarea row="40" cols="30"></textarea></td>
                  <td><textarea row="40" cols="30"></textarea></td>
                </tr>
              </tbody>
            </table>
            <div class="form-note">
              <div><label for="notes">Note:</label></div>
              <textarea placeholder="write your question here"></textarea>
            </div>
            <button type="submit" class="btn">Submit</button>
            <button type="reset" class="btn">Reset</button>
          </form>
      </div>
    </div>
  </div>
  <script src="./script/script.js"></script>
</body>

</html>
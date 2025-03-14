<!DOCTYPE html>

<html>

<head>
  <title>Apply</title>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./styles.css/styles.css">
  <link rel="stylesheet" href="./styles.css/style2.css">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <?php
  include_once("header.inc");
  ?>
  <div class="form-middle">
    <div class="login-box">
      <form action="process_eoi.php" method="post">
        <h1>Application Form</h1>

        <div class="input-box">
          <input type="name" maxlength="5" required id="jobnumber" name="jobnumber">
          <label for="jobnumber">Job reference number</label>
        </div>
        <div class="input-box">
          <input type="text" pattern="[A-Za-zÀ-ỹ\s]+" maxlength="20" required id="firstname" name="firstname">
          <label for="firstname">First name</label>
        </div>
        <div class="input-box">
          <input type="text" pattern="[A-Za-zÀ-ỹ\s]+" maxlength="20" required id="lastname" name="lastname">
          <label for="lastname">Last name</label>
        </div>
        <div class="input-box2">
          <input placeholder=" " class="textbox-n" type="text" id="date" onfocus="this.type='date'"
            onblur="if(!this.value) this.type='text'" name="date">
          <label for="date">Date of birth</label>


        </div>
        <div class="radio-group">
          <fieldset>
            <legend>Gender</legend>
            <input type="radio" id="male" name="sex" value="male" checked />
            <label for="male" id="formale">Male</label>
            <input type="radio" id="female" name="sex" value="female" />
            <label for="female" id="forfemale">Female</label>
          </fieldset>
        </div>
        <div class="input-box">
          <input type="text" maxlength="40" required id="address" name="address">
          <label for="address">Street adress</label>
        </div>
        <div class="input-box">
          <input type="text" required id="town" name="town">
          <label for="town">Suburb/Town</label>
        </div>

        <div class="state-row">
          <label for="state" class="state-label" id="stateLabel">State:</label>
          <select name="state" id="state" required>
            <option value="" disabled selected>Choose a state</option>
            <option value="VIC">VIC</option>
            <option value="NSW">NSW</option>
            <option value="QLD">QLD</option>
            <option value="NT">NT</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="TAS">TAS</option>
            <option value="ACT">ACT</option>
          </select>
        </div>

        <div class="input-box">
          <input type="text" maxlength="4" id="numberInput" required id="postcode" name="postcode">
          <label for="postcode">Postcode</label>
        </div>
        <div class="input-box">
          <input type="email" required id="email" name="email">
          <label for="email">Email</label>
        </div>
        <div class="input-box3">
          <input type="text" id="phone" name="phone" pattern="\d{8,12}|\d{2,3} \d{6,10}" maxlength="12" placeholder=" "
            required oninput="validateNumberInput(event)">
          <label for="phone">Phone number</label>

        </div>

        <fieldset>
          <legend>Skill list:</legend>

          <div class="apply-input-container">
            <input type="checkbox" id="management" name="management" value="Management">
            <div class="apply-input-box">
              <label for="management">Management</label>
            </div>

            <input type="checkbox" id="technology" name="technology" value="Technology Advancement">
            <div class="apply-input-box">
              <label for="technology">Technology advancement</label>
            </div>
          </div>

          <div class="apply-input-container">
            <input type="checkbox" id="collaboration" name="collaboration" value="Collaboration">
            <div class="apply-input-box">
              <label for="collaboration">Collaboration</label>
            </div>

            <input type="checkbox" id="time-management" name="time-management" value="Time Management">
            <div class="apply-input-box">
              <label for="time-management">Time management</label>
            </div>
          </div>

          <div class="apply-input-container">
            <input type="checkbox" id="project-management" name="project-management" value="Project Management">
            <div class="apply-input-box">
              <label for="project-management">Project management</label>
            </div>

            <input type="checkbox" id="critical-thinking" name="critical-thinking" value="Critical Thinking">
            <div class="apply-input-box">
              <label for="critical-thinking">Critical thinking</label>
            </div>
          </div>

          <div class="apply-input-container">
            <input type="checkbox" id="adaptation" name="adaptation" value="Adaptation">
            <div class="apply-input-box">
              <label for="adaptation">Adaptation</label>
            </div>

            <input type="checkbox" id="creativity" name="creativity" value="Creativity">
            <div class="apply-input-box">
              <label for="creativity">Creativity</label>
            </div>
          </div>

          <div class="apply-input-container">
            <input type="checkbox" id="problem-solving" name="problem-solving" value="Problem Solving">
            <div class="apply-input-box">
              <label for="problem-solving">Problem solving</label>
            </div>

            <input type="checkbox" id="communication" name="communication" value="Communication">
            <div class="apply-input-box">
              <label for="communication">Communication</label>
            </div>
          </div>

        </fieldset>



        <div>
          <label for="otherskills">Other skills:</label>
        </div>
        <textarea id="otherskills" name="otherskills" rows="4" cols="20" placeholder="Please fill here..."></textarea>
        <br>
        <button type="submit" class="btn">Register</button>
        <button type="reset" class="btn">Reset</button>

      </form>
    </div>

    <div class="apply-footer">
      <?php
      include_once("footer.inc");
      ?>
    </div>
  </div>



  <script src="./script/script.js"></script>
</body>

</html>
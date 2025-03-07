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
      <form action="" method="post">
        <h1>Application Form</h1>

        <div class="input-box">

          <input type="name" maxlength="5" required id="jobnumber">
          <label for="jobnumber">Job reference number</label>
        </div>
        <div class="input-box">
          <label for="firstname">First name</label>
          <input type="text" pattern="[A-Za-zÀ-ỹ\s]+" maxlength="20" required id="firstname">
        </div>
        <div class="input-box">
          <label for="lastname">Last name</label>
          <input type="text" pattern="[A-Za-zÀ-ỹ\s]+" maxlength="20" required id="lastname">
        </div>
        <div class="input-box">
          <label for="date">Date of birth</label>
          <input placeholder="" class="textbox-n" type="text" onfocus="(this.type='date')"
            onblur="(this.type='text')" id="date" />
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
          <label for="address">Street adress</label>
          <input type="text" maxlength="40" required id="address">
        </div>
        <div class="input-box">
          <label for="town">Suburb/Town</label>
          <input type="text" required id="town">
        </div>
        <div class="input-box">
          <label for="state">State</label>
          <select name="state" id="state">
            <option value="none"></option>
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
          <label for="postcode">Postcode</label>
          <input type="text" maxlength="4" id="numberInput" required id="postcode">
        </div>
        <div class="input-box">
          <label for="email">Email</label>
          <input type="email" required id="email">
        </div>
        <div class="input-box">
          <label for="numberInput">Phone number</label>
          <input type="text" pattern="\d{8,12}|\d{2,3} \d{6,10}" id="numberInput" maxlength="12"
            oninput="validateNumberInput(event)">
        </div>
        <fieldset>
          <legend>Skill list:</legend>
          <div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Management</label>
            </div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Technology advancement</label>
            </div>
          </div>
          <div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Colloboration</label>
            </div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Time management</label>
            </div>
          </div>
          <div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Project management</label>
            </div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Critical thinking</label>
            </div>
          </div>
          <div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Adaptation</label>
            </div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Creativity</label>
            </div>
          </div>
          <div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Problem solving</label>
            </div class="apply-input-container"><input type="checkbox" id="check">
            <div class="apply-input-box">
              <label for="box">Communication</label>
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
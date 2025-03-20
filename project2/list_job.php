<?php
require_once "setting.php";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn) {
    $query = "SELECT * FROM job_db";
    $result = mysqli_query($conn,$query);
    mysqli_close($conn);
}
?>

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
  <link rel="stylesheet" href="./styles.css/style5.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <?php
  include_once("header.inc");
  ?>


    <div class="frame-container-14">
    <button id="showMoreOptions" class="frame-button" onclick="navigateTo('list_job.php')">Show as List</button>
    <button id="showMoreOptions" class="frame-button" onclick="navigateTo('all.php')">Show as Tab</button>
      
      <div class="frame-wrap active">
    <?php
      if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {

      ?>
    
        <div class="frame">
          <img src= <?php  echo $row['img']   ?> alt="Switzerland" class="frame-image">
          <div class="frame-content">
            <h2><?php  echo $row['name']   ?></h2>
            <p class="subtitle">Reference ID: <?php  echo $row['ID']   ?></p>
            <p class="description">
            <?php  echo $row['discription']   ?>
            </p>
            <div class="frame-info">
              <span>👤 8.66 Mil People</span>
              <span>🌍 41.290 km²</span> 
              <span>🏠 $1.100.200</span>
            </div>
          </div>
          <button class="frame-button" onclick="navigateTo('<?php echo $row['explore'] ?>')">Explore More</button>
        </div>
        <?php
        }
    }
    ?>
        


    </div> 
</div>




  <script src="./script/script.js"></script>
</body>

</html>
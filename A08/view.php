<?php
include("connect.php");

$islandID = $_GET['islandOfPersonalityID'];

$islandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = $islandID";
$islandResult = executeQuery($islandQuery);

$islandContentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = $islandID";
$islandContentResult = executeQuery($islandContentQuery);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Core Memories</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="assets/images/icon.png">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f6f8;
    }

    .card {
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      border: none;
      margin-bottom: 20px;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      height: 200px;
      object-fit: cover;
    }

    .card-description {
      background-color: #ffffff;
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: bold;
      color: #333;
    }

    .container-fluid {
      margin-top: 10px;
    }

    .header-image {
      width: 100%;
      height: 400px;
      object-fit: cover;
      border-radius: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .content-section {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
    }

    .description-text {
      color: #555;
      font-size: 1rem;
      text-align: center;
      margin-top: 20px;
    }

    footer {
      background-color: #333;
      color: white;
    }

    footer a {
      color: white;
    }

    footer a:hover {
      color: #FF6347;
    }

    .emotion-buttons button {
      background-color: #ddd;
      border: none;
      padding: 10px 20px;
      border-radius: 20px;
      margin: 5px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .emotion-buttons button:hover {
      background-color: #1E90FF;
      color: white;
      transform: scale(1.05);
    }

    .styled-button {
      background-color: #ddd;
      border: none;
      padding: 10px 20px;
      border-radius: 20px;
      margin: 5px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .styled-button:hover {
      background-color: #1E90FF;
      color: white;
      transform: scale(1.05);
    }
  </style>
</head>

<body>
  <div class="container-fluid" id="island">
    <div class="row">
      <div class="col-12">
        <img src="assets/images/myIsland.png" alt="My Island" class="header-image">
      </div>
    </div>
  </div>

  <div class="container content-section">
    <div class="row">
      <div class="col-12">
        <?php
        while ($islandRow = mysqli_fetch_assoc($islandResult)) { ?>
          <h2 class="text-center"><?php echo $islandRow['name']; ?></h2>
          <p class="description-text"><?php echo $islandRow['shortDescription'] ?></p>
          <?php
        }
        ?>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <?php
      while ($islandContentRow = mysqli_fetch_assoc($islandContentResult)) { ?>
        <div class="col-md-4 mb-4">
          <div class="card" style="height: 525px; text-align: justify; text-indent: 2em;">
            <img src="assets/images/<?php echo $islandContentRow['image'] ?>" alt="Island Content" class="card-img-top">
            <div class="card-body">
              <p class="card-description"><?php echo $islandContentRow['content'] ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <div class="container text-center mb-4">
    <div class="row">
      <div class="col">
        <a href="index.php"><button class="styled-button" style="background-color: #1E90FF;">Back to Home</button></a>
      </div>
    </div>
  </div>

  <footer class="w3-center w3-black w3-padding-64" id="emotionContainer">
    <a href="#island" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-container w3-row w3-center w3-padding-64 emotion-buttons">
      <h4>Which emotion do you feel right now?</h4>
      <button onclick="changeColor('joy')">Joy</button>
      <button onclick="changeColor('sadness')">Sadness</button>
      <button onclick="changeColor('anger')">Anger</button>
      <button onclick="changeColor('fear')">Fear</button>
      <button onclick="changeColor('disgust')">Disgust</button>
      <button onclick="changeColor('ennui')">Ennui</button>
      <button onclick="changeColor('anxiety')">Anxiety</button>
      <button onclick="changeColor('envy')">Envy</button>
      <button onclick="changeColor('embarrassment')">Embarrassment</button>
    </div>
    <p class="align-items-center text-center">© 2024 Project 1. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    var emotionColors = {
      joy: '#F7E300',
      sadness: '#3C6E9B',
      anger: '#D32F2F',
      fear: '#7B1FA2',
      disgust: '#A1C935',
      ennui: '#B7A7D6',
      anxiety: '#F57C00',
      envy: '#388E3C',
      embarrassment: '#F06292'
    };

    function changeColor(emotion) {
      var container = document.getElementById('emotionContainer');
      container.style.setProperty('background-color', emotionColors[emotion], 'important');
    }
  </script>
</body>

</html>
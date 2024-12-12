<?php

include("connect.php");

$islandQuery = "SELECT * FROM islandsofpersonality";
$islandResult = executeQuery($islandQuery);

?>

<!DOCTYPE html>
<html>

<head>
  <title>My Core Memories</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="assets/images/icon.png">
  <style>
    body,
    html {
      height: 100%;
      line-height: 1.8;
      background-color: #f5f5f5;
      color: #333;
      scroll-behavior: smooth;
      font-family: 'Poppins', sans-serif;
    }

    .bgimg-1 {
      background-position: center;
      background-size: cover;
      background-image: url("assets/images/header.jpeg");
      min-height: 100%;
      filter: brightness(100%);
    }

    .w3-display-left {
      color: white;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
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
  </style>

</head>

<body>

  <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="index.php" class="w3-bar-item w3-button w3-wide"><img src="assets/images/icon.png" style="height: 30px; width: 30px;">Core Memories</a>
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#islands" class="w3-bar-item w3-button"><i class="fa fa-th"></i> ISLANDS</a>
      </div>

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
        onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
    style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#islands" onclick="w3_close()" class="w3-bar-item w3-button">ISLANDS</a>
  </nav>

  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small">Explore My Emotions</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Unlock the Power of My Journey</span><br>
      <span class="w3-large">Join me as I discover how emotions shape my life and yours, making every day
        meaningful.</span>
      <p><a href="#about"
          class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more
          about my story</a></p>
    </div>
  </header>

  <div class="w3-container" style="padding:100px 10px" id="about">
    <h3 class="w3-center">ABOUT ME</h3>
    <p class="w3-center w3-large">The emotions I feel and what inspires them</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-col l3 m6 s12">
        <img src="assets/images/joy1.jpg" alt="Joy"
          style="width:100%; height:300px; object-fit:cover; border-radius: 50%;">
        <p class="w3-large">Joy</p>
        <p>Spending time with family and friends, achieving my goals, and enjoying the little things in life make me
          feel joyful.</p>
      </div>
      <div class="w3-col l3 m6 s12">
        <img src="assets/images/sadness.jpg" alt="Sadness"
          style="width:100%; height:300px; object-fit:cover; border-radius: 50%;">
        <p class="w3-large">Sadness</p>
        <p>Missing loved ones, encountering setbacks, or seeing others in pain often bring a sense of sadness.</p>
      </div>
      <div class="w3-col l3 m6 s12">
        <img src="assets/images/anger.jpg" alt="anger"
          style="width:100%; height:300px; object-fit:cover; border-radius: 50%;">
        <p class="w3-large">Anger</p>
        <p>Facing unfair situations, feeling misunderstood, or dealing with challenges that test my patience can stir
          anger.</p>
      </div>
      <div class="w3-col l3 m6 s12">
        <img src="assets/images/fear.jpg" alt="fear"
          style="width:100%; height:300px; object-fit:cover; border-radius: 50%;">
        <p class="w3-large">Fear</p>
        <p>Uncertainty about the future, losing loved ones, or stepping out of my comfort zone often makes me feel fear.
        </p>
      </div>
    </div>
  </div>

  <div class="w3-container w3-light-grey" style="padding:100px 10px; display: flex; align-items: center;">
    <div class="w3-row-padding" style="display: flex; align-items: center; width: 100%;">
      <div class="w3-col m6" style="display: flex; flex-direction: column; justify-content: center;">
        <h3>My Emotions Shape Me</h3>
        <p>Emotions play a huge role in how I navigate life and express my creativity. They shape my perspective,
          influencing my decisions and how I approach challenges. Each emotion I experience adds a unique layer to my
          personality, guiding my interactions with others and helping me grow both personally and creatively.</p>
        <p>
        <a href="#islands" class="w3-button w3-black"><i class="fa fa-heart"> </i> Discover My Islands of
          Personality
        </a>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="assets/images/header.jpeg" alt="Emotions" width="700" height="394">
      </div>
    </div>
  </div>

  <div class="w3-container" style="padding:100px 0; position:relative; text-align:center;" id="islands">
    <img src="assets/images/myIsland.png" alt="My Island Background"
      style="width:100%; height:500px; object-fit:cover;">

    <div class="w3-row-padding" style="margin-top:64px">
      <?php
      while ($islandRow = mysqli_fetch_assoc($islandResult)) { ?>
        <div class="w3-col l3 m6 s12">
          <a href="view.php?islandOfPersonalityID=<?php echo $islandRow['islandOfPersonalityID'] ?>">
            <img src="assets/images/<?php echo $islandRow['image']; ?>"
              style="width:100%; height:300px; border-radius:50%; object-fit:cover;" class="w3-hover-opacity"
              alt="<?php echo $islandRow['name']; ?>">
          </a>
          <p class="w3-center w3-large"><?php echo $islandRow['name']; ?></p>
          <p class="w3-center"><?php echo $islandRow['shortDescription']; ?></p>
        </div>
      <?php } ?>
    </div>
  </div>

  <footer class="w3-center w3-black w3-padding-64" id="emotionContainer">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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

  <script>

    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
      mySidebar.style.display = (mySidebar.style.display === 'block') ? 'none' : 'block';
    }

    function w3_close() {
      mySidebar.style.display = "none";
    }

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
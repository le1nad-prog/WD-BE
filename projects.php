<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daniel's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="assets/images/icon.png">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #074769, #191a30);
            background-size: cover;
            background-attachment: fixed;
            color: white;
            overflow-x: hidden;
        }

        .navbar {
            margin: 0 40px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 0 40px;
            width: 100%;
        }

        .navbar-brand {
            font-size: 25px;
            color: #00abf0;
            font-weight: 600;
        }

        .navbar-nav a {
            font-size: 18px;
            color: white;
            font-weight: 500;
            margin-right: 10px;
            transition: transform 0.3s ease;
        }

        .navbar a:hover {
            color: #00abf0;
        }

        .navbar .nav-link.active {
            color: #00abf0;
        }

        .container {
            flex-grow: 1;
        }

        .profile img {
            border-radius: 50%;
            width: 100%;
            height: auto;
            max-width: 400px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }

        .carousel {
            height: 100%;
            max-height: 450px;
            animation: fadeInRight 1.5s ease-in-out;
        }

        .carousel-inner img {
            border-radius: 15px;
        }

        .btn {
            background-color: #00abf0;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg mx-auto">
        <div class="container-fluid p-4">
            <a class="navbar-brand" href="index.php">Daniel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home/About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center p-3 my-1 mx-auto">
        <div class="row text-center justify-content-center align-items-center">
            <div class="col-lg-6 col-12 d-flex justify-content-center mb-3 mb-lg-0">
                <div class="profile">
                    <img src="assets/images/profile.jpg" class="animate__animated animate__fadeIn" alt="Profile">
                </div>
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center text-align-center my-4">
                <div class="container animate__animated animate__fadeInRight">
                    <div class="row">
                        <div class="col">
                            <h3 style="color: #00abf0;">My Projects</h3>
                            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                                <div class="carousel-indicators">
                                    <button  type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                </div>  
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="1000">
                                        <img src="assets/images/projects.png" class="d-block w-100" alt="Project 1">
                                        <a href="A08/index.php"><button class="my-2 btn btn-primary">Core Memories</button></a>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1000">
                                        <img src="assets/images/projects.png" class="d-block w-100" alt="Project 2">
                                        <a href="#"><button class="my-2 btn btn-primary">Open Soon</button></a>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1000">
                                        <img src="assets/images/projects.png" class="d-block w-100" alt="Project 3">
                                        <a href="#"><button class="my-2 btn btn-primary">Open Soon</button></a>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1000">
                                        <img src="assets/images/projects.png" class="d-block w-100" alt="Project 4">
                                        <a href="#"><button class="my-2 btn btn-primary">Open Soon</button></a>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1000">
                                        <img src="assets/images/projects.png" class="d-block w-100" alt="Midterm Part 1">
                                        <a href="#"><button class="my-2 btn btn-primary">Open Soon</button></a>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1000">
                                        <img src="assets/images/projects.png" class="d-block w-100" alt="Midterm Part 2">
                                        <a href="#"><button class="my-2 btn btn-primary">Open Soon</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    <div class="container-fluid mx-auto">
        <footer class="footer">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
            <p class="align-items-center text-center">© 2024 Daniel's Portfolio. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

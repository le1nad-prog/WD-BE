<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daniel's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

        .greetings {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            margin-bottom: 0;
        }

        .greetings h1 {
            font-size: 3rem;
            font-weight: 600;
            text-align: center;
            animation: fadeInDown 1.5s;
        }

        .greetings h3 {
            font-size: 2rem;
            font-weight: 500;
            text-align: center;
            color: #00abf0;
            animation: fadeInDown 1.5s;
        }

        .greetings p {
            margin: 10px 0 40px;
            max-width: 600px;
            text-align: center;
            animation: fadeInRight 1.5s ease-in-out;
        }

        .contact-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .contact-buttons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: transparent;
            border: 2px solid #00abf0;
            border-radius: 50%;
            font-size: 20px;
            color: #00abf0;
            text-decoration: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .contact-buttons a:hover {
            transform: scale(1.1);
            background-color: #00abf0;
            color: white;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.4);
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home/About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center p-3 my-1 mx-auto">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-12 d-flex justify-content-center mb-3 mb-lg-0">
                <div class="profile">
                    <img src="assets/images/profile.jpg" class="animate__animated animate__fadeIn" alt="Profile">
                </div>
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column align-items-center">
                <div class="greetings">
                    <h1 class="greet">Hello, I'm Daniel!</h1>
                    <h3 class="greet">BSIT Student</h3>
                    <hr style="width: 50px; height: 3px; background-color: #00abf0; margin: auto;">
                    <p class="animate__animated animate__fadeInRight">You can call me Dan! I'm a 20-year-old in my junior year at the Polytechnic University of the Philippines, currently studying web development. This website is for educational purposes, designed to showcase my skills and support my journey toward becoming a professional software developer.</p>
                </div>
                <div class="contact-buttons">
                    <a class="animate__animated animate__fadeInRight" href="https://www.facebook.com/daniel.melitante.15/"><i class="fa-brands fa-facebook-f"></i></a>
                    <a class="animate__animated animate__fadeInRight" href="https://www.instagram.com/only_leinad/"><i class="fa-brands fa-instagram"></i></a>
                    <a class="animate__animated animate__fadeInRight" href="https://x.com/danmelitante"><i class="fa-brands fa-twitter"></i></a>
                    <a class="animate__animated animate__fadeInRight" href="https://mail.google.com/mail/?view=cm&fs=1&to=melitandedaniel1215@gmail.com&su=Subject%20Here&body=Message%20Here"><i class="fa-solid fa-envelope"></i></a>
                    <a class="animate__animated animate__fadeInRight" href="https://github.com/le1nad-prog"><i class="fa-brands fa-github"></i></a>
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

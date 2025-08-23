<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Event Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url('images/colorbd.webp');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding-top: 60px; /* Height of the fixed navbar */
            color: #333;
        }
       
        .carousel-inner {
            border-radius: 15px;
            overflow: hidden;
            margin: 2rem auto;
            max-width: 80%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            filter: brightness(70%);
        }
        .carousel-fade .carousel-item {
            transition: opacity 0.5s ease-in-out;
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .carousel-caption h5 {
            font-size: 2.5rem;
            font-weight: 700;
        }
        .carousel-caption p {
            font-size: 1.2rem;
            font-weight: 400;
        }
        .footer {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 2rem 0;
            text-align: center;
            margin-top: 2rem;
        }
        .footer a {
            color: #17a2b8;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    @include('home.navbar');

    <!-- Carousel with Automatic Image Change -->
    <div class="container text-center">
        <div id="eventCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/cems.jpg" class="d-block w-100" alt="Event 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome to Campus Events</h5>
                        <p>Join exciting events and stay connected!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/session.avif" class="d-block w-100" alt="Event 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Explore Campus Activities</h5>
                        <p>Discover workshops and seminars!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/magnette-events-have-been-amazing.jpg" class="d-block w-100" alt="Event 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Stay Updated</h5>
                        <p>Never miss an event with us!</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <p class="mt-3">Current Date and Time: 11:16 AM +06, Sunday, July 20, 2025</p>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>© 2025 Campus Event Management System. All rights reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> | 
                <a href="#">Terms of Service</a> | 
                <a href="#">Contact Us</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      width: 100%;
    }

    /* ✅ Navbar */
    .navbar {
      background-color: rgba(44, 62, 80, 0.95); 
      padding: 1rem;
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 1.3rem;
      display: flex;
      align-items: center;
      gap: 8px;
      color: white !important;
    }

    /* ✅ Navbar Links Style */
    .navbar-nav .nav-link {
      color: white !important;
      background-color: #2c3e50;      /* Default background */
      border: 1px solid #3498db;      /* Border */
      border-radius: 20px;            /* Rounded button */
      padding: 6px 14px;
      margin: 0 5px;                  /* Space between links */
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 6px;
      font-weight: 500;
    }
    .navbar-nav .nav-link:hover {
      background-color: #3498db;      /* Hover background */
      border-color: #2980b9;          /* Hover border */
      color: #fff !important;
    }

    /* ✅ Fullscreen Carousel */
    .carousel-item {
      height: 100vh; /* Full screen */
      min-height: 400px;
    }
    .carousel-item img {
      object-fit: cover;
      width: 100%;
      height: 100%;
      filter: brightness(80%);
    }
    .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
              bottom: 60% !important; 
        }
        .carousel-caption h5 {
            font-size: 2.5rem;
            font-weight: 700;
        }
        .carousel-caption p {
            font-size: 1.2rem;
            font-weight: 400;
        }
    /* ✅ About button inside carousel */
    .about-btn {
      background-color: #3498db;
      color: white;
      padding: 10px 20px;
      border-radius: 20px;
      transition: background-color 0.3s ease;
    }
    .about-btn:hover {
      background-color: #2980b9;
    }

    /* ✅ Footer */
   
  </style>
</head>
<body>
  <!-- ✅ Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="bi bi-mortarboard-fill"></i> CEMS
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
             <li class="nav-item">
            <a class="nav-link" href="{{url('/home/about')}}"><i class="bi bi-info-circle"></i>  About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/home/faq')}}"><i class="bi bi-question-circle"></i> FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/login')}}"><i class="bi bi-box-arrow-in-right"></i> Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/register')}}"><i class="bi bi-person-plus"></i> Create Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ✅ Fullscreen Carousel -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        
      <div class="carousel-item active">
        
        <img src="images/kiu1.jpg" alt="Image 1">
         <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome to Campus Events</h5>
                        <p>Join exciting events and stay connected!</p>
                    </div>
        
      </div>
      <div class="carousel-item">
        <img src="images/fest.jpg" alt="Image 2">
        <div class="carousel-caption d-none d-md-block">
                        <h5>Explore Campus Activities</h5>
                        <p>Discover workshops and seminars!</p>
                    </div>
       
      </div>
      <div class="carousel-item">
        <img src="images/baishaki.jpg" alt="Image 3">
        <div class="carousel-caption d-none d-md-block">
                        <h5>Stay Updated</h5>
                        <p>Never miss an event with us!</p>
                    </div>
       
      </div>
      <div class="carousel-item">
        <img src="images/club.jpg" alt="Image 3">
        <div class="carousel-caption d-none d-md-block">
                        <h5>Stay Updated</h5>
                        <p>Never miss an event with us!</p>
                    </div>
       
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- ✅ Footer -->

    @include('home.footer');


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

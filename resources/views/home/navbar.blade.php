<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
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
    </style>
</head>
<body>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
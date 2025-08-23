<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Campus Event Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            color: #1a1a1a;
            overflow-x: hidden;
        }

        /* Navbar */
       
        /* Hero Section */
        .hero-section {
            position: relative;
            background: linear-gradient(135deg, #007bff, #00ddeb);
            color: white;
            padding: 120px 0;
            text-align: center;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/1600x900/?campus') no-repeat center center/cover;
            opacity: 0.2;
            z-index: 0;
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
        }
        .hero-section p {
            font-size: 1.2rem;
            font-weight: 300;
            max-width: 600px;
            margin: 0 auto;
            animation: fadeInUp 1.2s ease-out;
        }

        /* Content Sections */
        .content-section {
            padding: 80px 0;
        }
        .content-section h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #1a1a1a;
        }
        .content-section p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }
        .content-img {
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .content-img:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        /* Team Section */
        .team-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            background: white;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        .team-card img {
            object-fit: cover;
            height: 250px;
            width: 100%;
        }
        .team-card .card-body {
            padding: 1.5rem;
            text-align: center;
        }
        .team-card h5 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #1a1a1a;
        }
        .team-card p {
            font-size: 1rem;
            color: #007bff;
            font-weight: 500;
        }

        /* Footer */
      

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.2rem;
            }
            .hero-section p {
                font-size: 1rem;
            }
            .content-section h2 {
                font-size: 2rem;
            }
            .content-img {
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    @include('home.navbar');

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container hero-content">
            <h1>About CampusVibe</h1>
            <p>Empowering campus communities to connect, celebrate, and create unforgettable experiences.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="content-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>Our Mission</h2>
                    <p>We are dedicated to transforming campus life by providing an intuitive platform that simplifies event planning, promotes engagement, and fosters a sense of belonging among students, faculty, and staff.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('images/std.jpg')}}" alt="Students collaborating" class="img-fluid content-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="content-section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <h2>Our Vision</h2>
                    <p>To revolutionize campus event management globally, creating vibrant, inclusive communities through cutting-edge technology and seamless user experiences.</p>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img src="{{asset('images/baishaki.jpg')}}" alt="Campus festival" class="img-fluid content-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="text-center mb-5">Our Team</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card team-card">
                        <img src="{{asset('images/elon.webp')}}" alt="Team member" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Alex Carter</h5>
                            <p class="card-text">Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card team-card">
                        <img src="{{asset('images/elon.webp')}}" alt="Team member" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sam Rivera</h5>
                            <p class="card-text">Lead Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card team-card">
                        <img src="{{asset('images/elon.webp')}}" alt="Team member" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Maya Patel</h5>
                            <p class="card-text">Marketing Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   
         @include('home.footer');
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
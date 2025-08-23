<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Event Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Montserrat -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #e78f58;

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
            height: 500px;
            object-fit: cover;
        }
        .carousel-fade .carousel-item {
            transition: opacity 0.5s ease-in-out;
        }
        .btn-event {
            background-color: #1063b6ff;
            border: 1px solid #dee2e6;
            padding: 0.75rem 1.5rem;
            border-radius: 20px;
            font-weight: 500;
            margin: 0 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-event:hover {
            background-color: #141617ff;
            transform: translateY(-2px);
        }
        
    </style>
</head>
<body>
    <!-- Navigation Bar -->
   @include('home.navbar1');
    <!-- Carousel with Automatic Image Change -->
    <div class="container text-center">
        <div id="eventCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/ms.jpg')}}" alt="Event Image 1">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/fest.jpg')}}" alt="Event Image 2">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/ms2.jpg')}}" alt="Event Image 3">
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
       
        <div class="d-flex justify-content-center mt-4">
            <a class="btn btn-primary btn-event" href="{{url('/home/event_create')}}">Create Event</a>
           <a class="btn btn-primary btn-event" href="{{url('/home/upcome')}}">Upcoming Events</a>
            <a class="btn btn-primary btn-event" href="{{url('/home/show')}}">Past Events</a>
        </div>
    </div>

    <!-- Footer -->
    
         @include('home.footer');
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
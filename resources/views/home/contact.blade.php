<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form #06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/campus.jpg');
           font-family: 'Montserrat', sans-serif;
            background-color: rgba(45, 201, 115, 1) ;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding-top: 80px; /* Height of the fixed navbar */
            color: #333;
        }
        
        .container {
           
           
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 80%;
            max-width: 900px;
            /* Add top margin to avoid overlap with navbar */
        }
        .form-section, .map-section {
            width: 50%;
            padding: 0 20px;
        }
        .form-section {
            background-color: #e9ecef;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .contact-info {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            text-align: center;
        }
        .contact-info div {
            margin: 0 10px;
        }
        .contact-info i {
            font-size: 24px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Sample Bootstrap Navbar -->
    @include('home.navbar');
    <div class="container">
        <h2 class="text-center">Contact Form #06</h2>
        <div class="row">
            <div class="col-md-6 form-section">
                <h3>Contact Us</h3>
                <form action="{{ route('contact.submit')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" name="message" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6 map-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465341.8370335478!2d90.67962269865104!3d24.3296587639487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3756a172c6319acf%3A0xa1c69475bcb6a467!2sBajitpur!5e0!3m2!1sen!2sbd!4v1753668373434!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i><br>Address: 198 West 21th Street, Suite 721 New York NY 10016</div>
            <div><i class="fas fa-phone"></i><br>Phone: +123 2355 98</div>
            <div><i class="fas fa-envelope"></i><br>Email: info@yoursite.com</div>
            <div><i class="fas fa-globe"></i><br>Website: yoursite.com</div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- শুধু এই অংশটাই রাখবেন, কোনো <html> বা <body> থাকবে না -->

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
           <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 45px; border-radius: 50%; object-fit: cover;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{url('/dashboard')}}"><i class="bi bi-house"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/profile')}}"><i class="bi bi-info-circle"></i> Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/home/eventpage')}}"><i class="bi bi-info-circle"></i> Events</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/home/event')}}"><i class="bi bi-envelope"></i> Registration</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/home/noticeshow')}}"><i class="bi bi-box-arrow-in-right"></i> Notification</a></li>
                
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link text-white" style="text-decoration: none;">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background-color: #2c3e50;
        padding: 1rem 0;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .nav-link {
        color: #ffffff !important;
        font-weight: 500;
        margin: 0 55px;
        transition: color 0.3s ease;
        display: flex;
        align-items: center;
    }

    .nav-link i {
        margin-right: 8px;
    }

    .nav-link:hover {
        color: #17a2b8 !important;
    }
</style>

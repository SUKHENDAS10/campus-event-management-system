<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: #4f555bff;
    }

    /* Sidebar */
    .sidebar {
      height: 100vh;
      background: #1e293b;
      padding-top: 20px;
      position: fixed;
      left: 0;
      top: 0;
      width: 240px;
      color: #fff;
    }
    .sidebar .nav-link {
      color: #cbd5e1;
      padding: 12px 20px;
      font-size: 15px;
      border-radius: 6px;
      margin: 4px 10px;
      transition: all 0.3s ease;
    }
    .sidebar .nav-link i {
      margin-right: 8px;
    }
    .sidebar .nav-link:hover, 
    .sidebar .nav-link.active {
      background: #0f172a;
      color: #fff;
    }

    /* Header */
    .header {
      background: #2563eb;
      color: white;
      padding: 15px 25px;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    /* Cards */
    .card-custom {
      border: none;
      border-radius: 15px;
      padding: 25px;
      color: white;
    }
    .card-custom h5 {
      margin-top: 10px;
      font-size: 16px;
    }
    .card-custom p {
      font-size: 28px;
      font-weight: bold;
    }
    .bg-gradient-blue {
      background: linear-gradient(135deg, #3b82f6, #2563eb);
    }
    .bg-gradient-green {
      background: linear-gradient(135deg, #22c55e, #16a34a);
    }
    .bg-gradient-orange {
      background: linear-gradient(135deg, #f97316, #ea580c);
    }
    .bg-gradient-pink {
      background: linear-gradient(135deg, #ec4899, #db2777);
    }

    /* Main content */
    .main-content {
      margin-left: 240px;
      padding: 30px;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <nav class="sidebar d-flex flex-column">
    <h4 class="text-center text-white mb-4">Admin Panel</h4>
    <ul class="nav flex-column">
      <li class="nav-item"><a href="#" class="nav-link active"><i class="fas fa-home"></i> Dashboard</a></li>
      <li class="nav-item"><a href="{{url('/admin/table')}}" class="nav-link"><i class="fas fa-users"></i> Show Attendees</a></li>
      <li class="nav-item"><a href="{{url('/admin/showevent')}}" class="nav-link"><i class="fas fa-calendar"></i> Show Events</a></li>
      <li class="nav-item"><a href="{{url('/admin/upload')}}" class="nav-link"><i class="fas fa-edit"></i> Manage Event</a></li>
      <li class="nav-item"><a href="{{url('/admin/past')}}" class="nav-link"><i class="fas fa-clock"></i> Past Events</a></li>
      <li class="nav-item"><a href="{{url('/admin/control')}}" class="nav-link"><i class="fas fa-sliders-h"></i> Control Event</a></li>
      <li class="nav-item"><a href="{{url('/admin/pastcontrol')}}" class="nav-link"><i class="fas fa-history"></i> Control Past-Event</a></li>
      <li class="nav-item"><a href="{{url('/admin/message')}}" class="nav-link"><i class="fas fa-envelope"></i> Inbox</a></li>
      <li class="nav-item"><a href="{{url('/admin/show_feedback')}}" class="nav-link"><i class="fas fa-comments"></i> Feedback</a></li>
      <li class="nav-item"><a href="{{url('/admin/notice')}}" class="nav-link"><i class="fas fa-bullhorn"></i> Notices</a></li>
      <li class="nav-item mt-3 px-3">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="btn btn-danger w-100">Logout</button>
        </form>
      </li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <div class="header d-flex justify-content-between align-items-center">
      <h2>Dashboard</h2>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card-custom bg-gradient-blue text-center shadow-sm">
          <i class="fas fa-calendar-alt fa-2x"></i>
          <h5>Total Events</h5>
          <p>{{ $totalEvents }}</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-custom bg-gradient-green text-center shadow-sm">
          <i class="fas fa-users fa-2x"></i>
          <h5>Users</h5>
          <p>{{$user}}</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-custom bg-gradient-orange text-center shadow-sm">
          <i class="fas fa-user-check fa-2x"></i>
          <h5>Total Attendees</h5>
          <p>{{$attende}}</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-custom bg-gradient-pink text-center shadow-sm">
          <i class="fas fa-star fa-2x"></i>
          <h5>Accepted Events</h5>
          <p>{{$accepte}}</p>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

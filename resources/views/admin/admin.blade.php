<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Panel')</title>
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
      <li class="nav-item"><a href="{{url('/admin/dashboard')}}" class="nav-link"><i class="fas fa-home"></i> Dashboard</a></li>
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
      <h2>@yield('page-title', 'Dashboard')</h2>
      
    </div>

    @yield('content')

  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

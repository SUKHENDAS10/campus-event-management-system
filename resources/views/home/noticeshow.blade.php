<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
    body {
    background-color: rgba(19, 109, 199, 1);
    padding-top: 80px;
}


    .notification-card {
        background-color: #ffffff;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 100px;
        transition: all 0.3s ease-in-out;
        border-left: 5px solid #0d6efd;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .notification-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
    }

    .notification-card h5 {
        font-weight: 600;
    }

    .notification-card .time {
        font-size: 0.9rem;
        color: #6c757d;
    }

    .clear-btn {
        background-color: #dc3545;
        border: none;
        border-radius: 30px;
        padding: 8px 18px;
        transition: background-color 0.3s;
    }

    .clear-btn:hover {
        background-color: #bb2d3b;
    }

    .badge {
        font-size: 0.8rem;
        padding: 6px 12px;
        border-radius: 12px;
        text-transform: capitalize;
    }

    h2 {
        font-weight: bold;
    }
</style>


</head>
<body>
    @include('home.navbar1');

   
    <div class="move">
        
   
    <div class="container  ">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Notifications</h2>
        
    </div>

    <div class="notification-list">
        @forelse($notifications as $note)
            <div class="notification-card">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="mb-1">{{ $note->title }}</h5>
                        <p class="mb-1">{{ $note->message }}</p>
                        <span class="time">{{ $note->created_at->diffForHumans() }}</span>
                    </div>
                    <span class="badge {{ $note->status == 'new' ? 'bg-primary' : 'bg-secondary' }}">
                        {{ ucfirst($note->status) }}
                    </span>
                </div>
            </div>
        @empty
            <div class="alert alert-info">No notifications available.</div>
        @endforelse
    </div>
</div>
 </div>
 @include('home.footer');
</body>
 
</html>
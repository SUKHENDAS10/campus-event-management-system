<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSE Fest 2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
    background-color: rgba(151, 180, 208, 1);
    padding-top: 80px;
}

    .image-container {
      max-height: 400px;
      overflow: hidden;
      position: relative;
    }
    .image-container img {
      width: 100%;
      height: auto;
      transition: transform 0.3s ease;
    }
    .image-container:hover img {
      transform: scale(1.1);
    }
    .image-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .image-container:hover .image-overlay {
      opacity: 1;
    }
  </style>
</head>
<body>
     @include('home.navbar1');
  <div class="container mt-5">
      <h2 class="text-center mb-4 text-white bg-dark">Past Events</h2>
    <div class="row">
        @forelse ($pasts as $past)
      <div class="col-md-4">
        <div class="image-container">
          @if ($past->image)
                            <img src="{{ asset( $past->image) }}" class="card-img-top" alt="{{ $past->title }}">
                        @else
                            <img src="https://via.placeholder.com/300x200.png?text=No+Image" class="card-img-top" alt="No Image">
                        @endif
          <div class="image-overlay">
          
          </div>
          
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a class="btn btn-secondary btn-event" href="{{url('/home/feedback')}}">Rate This Event</a>
           
        </div>
      </div>
      <div class="col-md-8">
        <h2>{{ $past->title }}</h2>
        <p>{{ Str::limit($past->description, 80) }}</p>
        
      </div>
      
       @empty
                <p class="text-center">No events found.</p>
            @endforelse
    </div>
    
  </div>
  @include('home.footer');
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Request Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f6d365, #fda085);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      padding-top: 80px;
    }

    .form-container {
      max-width: 700px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .form-label {
      font-weight: 600;
    }

    .btn-custom {
      background: linear-gradient(90deg, #f093fb, #f5576c);
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 10px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-custom:hover {
      opacity: 0.9;
    }

   
  </style>
</head>
<body>

  <!-- Navbar -->
   @include('home.navbar1')
  <!-- Form Section -->
  <div class="form-container">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <h3 class="text-center mb-4 fw-bold">Event Request Form</h3>
    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="event_name" class="form-label">Event Name</label>
        <input type="text" class="form-control" id="event_name" name="event_name" 
               value="{{ old('event_name') }}" required>
      </div>

      <div class="mb-3">
        <label for="event_date" class="form-label">Event Date</label>
        <input type="date" class="form-control" id="event_date" name="event_date" 
               value="{{ old('event_date') }}" required>
      </div>

      <div class="mb-3">
        <label for="venue" class="form-label">Venue</label>
        <input type="text" class="form-control" id="venue" name="venue" 
               value="{{ old('venue') }}" required>
      </div>

      <div class="mb-3">
        <label for="volunteer_list" class="form-label">Volunteer List (PDF)</label>
        <input type="file" class="form-control" id="volunteer_list" name="volunteer_list" accept=".pdf">
      </div>

      <div class="mb-3">
        <label for="sponsor_list" class="form-label">Sponsors List (PDF)</label>
        <input type="file" class="form-control" id="sponsor_list" name="sponsor_list" accept=".pdf">
      </div>

      <div class="mb-3">
        <label for="other_details" class="form-label">Other Details</label>
        <textarea class="form-control" id="other_details" name="other_details" rows="3">{{ old('other_details') }}</textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-custom">Submit Request</button>
      </div>
    </form>
  </div>

  <!-- Footer -->
  <footer>
   @include('home.footer');
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

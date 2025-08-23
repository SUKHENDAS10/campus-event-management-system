<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Weather Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #a7ffeb, #64ffda);
      height: 100vh;
    }
    .card {
      max-width: 400px;
      margin: auto;
      margin-top: 100px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>
<div class="container text-center">
  @if ($show)
    <div class="card p-4">
      <h3 class="text-success">Weather in {{ $city }}, {{ $country }}</h3>
      <img src="{{ $icon }}" alt="weather icon">
      <p class="display-5">{{ $tempC }}&deg;C</p>
      <p class="text-muted">{{ $condition }}</p>
      <a href="{{ url('/home/weather') }}" class="btn btn-outline-primary mt-3">Check Another Location</a>
    </div>
  @elseif ($error)
    <div class="alert alert-danger mt-5">Could not fetch weather data. Try again.</div>
    <div class="text-center"><a href="{{ url('/home/weather') }}" class="btn btn-warning">Back</a></div>
  @endif
</div>
</body>
</html>

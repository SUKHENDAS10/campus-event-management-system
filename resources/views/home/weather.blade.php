<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Weather App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #e0f7fa;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-top: 50px;
    }
  </style>
</head>
<body>
  <h1>Check Today's Weather</h1>
  <form action="{{ url('/home/result') }}" method="get">
    <input type="text" name="location" placeholder="Enter city name" required />
    <input type="submit" value="Get Weather" />
  </form>
</body>
</html>

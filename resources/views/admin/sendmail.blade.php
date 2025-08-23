<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Design Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0,123,255,0.3);
        }
        .btn-primary {
            width: 100%;
            padding: 12px;
            font-size: 16px;
        }
        .error {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2 class="form-header">Email Design Form</h2>
            <form action="{{url('mail',$data->id)}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="greeting" class="form-label">Greeting</label>
                    <input type="text" class="form-control" name="greeting" placeholder="e.g., Hello [Name]" required>
                    <div id="greetingError" class="error">Please enter a greeting.</div>
                </div>
                <div class="mb-3">
                    <label for="mailBody" class="form-label">Mail Body</label>
                    <textarea class="form-control" name="mailBody" rows="5" placeholder="Enter your email content here" required></textarea>
                    <div id="mailBodyError" class="error">Please enter the email body.</div>
                </div>
                <div class="mb-3">
                    <label for="actionText" class="form-label">Action Text</label>
                    <input type="text" class="form-control" name="actionText" placeholder="e.g., Click Here" required>
                    <div id="actionTextError" class="error">Please enter action text.</div>
                </div>
                <div class="mb-3">
                    <label for="actionUrl" class="form-label">Action URL</label>
                    <input type="url" class="form-control" name="actionUrl" placeholder="e.g., https://example.com" required>
                    <div id="actionUrlError" class="error">Please enter a valid URL.</div>
                </div>
                <div class="mb-3">
                    <label for="endLine" class="form-label">End Line</label>
                    <input type="text" class="form-control" name="endLine" placeholder="e.g., Best Regards, [Your Name]" required>
                    <div id="endLineError" class="error">Please enter an end line.</div>
                </div>
                <button type="submit" class="btn btn-primary">Send Mail</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
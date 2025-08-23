<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Event Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
       body {
        background-color: rgba(167, 185, 187, 0.9);
        padding-top: 100px;
    }

    .feedback-modal {
        max-width: 500px;
        margin: 0 auto;
        padding: 30px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .emoji-btn {
        font-size: 2rem;
        margin: 0 10px;
        border: none;
        background: none;
        cursor: pointer;
        transition: transform 0.2s ease, color 0.2s ease, text-shadow 0.2s ease;
    }

    /* Hover effect */
    .emoji-btn:hover {
        transform: scale(1.3);
        color: #ff9800;
        text-shadow: 0 0 10px rgba(255, 152, 0, 0.6);
    }

    /* When active (clicked) */
    .emoji-btn.text-primary {
        transform: scale(1.3);
        color: #007bff !important;
        text-shadow: 0 0 12px rgba(0, 123, 255, 0.6);
    }

    .feedback-text {
        margin-top: 20px;
    }
    </style>
</head>
<body>
    @include('home.navbar1');
    <div class="feedback-modal">
        <h2 class="text-center mb-4" style="color: #007bff;">We want your Feedback!</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('feedback.store') }}">
            @csrf
            <div class="mb-3 text-center">
                <label class="form-label">How satisfied are you with our event? *</label><br>
                @for ($i = 1; $i <= 5; $i++)
                    <button type="button" class="emoji-btn {{ old('satisfaction') == $i ? 'text-primary' : '' }}" data-value="{{ $i }}">
                        @if ($i == 1) 😞 @elseif ($i == 2) 🙁 @elseif ($i == 3) 😐 @elseif ($i == 4) 🙂 @else 😄 @endif
                    </button>
                @endfor
                <input type="hidden" name="satisfaction" id="satisfaction" value="{{ old('satisfaction') }}">
            </div>
            <div class="mb-3 feedback-text">
                <label class="form-label">What do you like/not like about our event?</label>
                <textarea class="form-control" name="comments" rows="3" placeholder="Please fill in your answer">{{ old('comments') }}</textarea>
                @error('comments')
                    <div class="text-danger">{{ $message }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
       
    </div>
    @include('home.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.emoji-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelectorAll('.emoji-btn').forEach(btn => btn.classList.remove('text-primary'));
                button.classList.add('text-primary');
                document.getElementById('satisfaction').value = button.getAttribute('data-value');
            });
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .error-container {
            text-align: center;
        }

        .error-code {
            font-size: 120px;
            font-weight: bold;
            color: #dc3545;
        }

        .error-message {
            font-size: 24px;
            margin-top: 10px;
        }

        .back-to-home {
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            font-size: 18px;
            display: inline-block;
            border-bottom: 2px solid #007bff;
            transition: all 0.3s ease;
        }

        .back-to-home:hover {
            color: #0056b3;
            border-bottom-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="error-container">
        {{-- <div class="error-code">404</div> --}}
        <div><img src="{{ asset('404.gif') }}" alt="404" width="300" height="auto"></div>
        <div class="error-message">Page Not Found</div>
        <p>Sorry, the page you are looking for could not be found.</p>
        <a href="/login" class="back-to-home">Back to Home</a>
    </div>
</body>
</html>

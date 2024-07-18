<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyMate - Welcome</title>
    <style>
        body {
            background-color: #ffe6f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            background: #ffccdd;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #d63384;
        }
        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            color: white;
            background: #d63384;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background: #c2185b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to BeautyMate</h1>
        <a href="{{ url('/register') }}">Register</a>
        <a href="{{ url('/login') }}">Login</a>
    </div>
</body>
</html>

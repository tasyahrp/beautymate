<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyMate - Login</title>
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
        input, button {
            display: block;
            width: 80%;
            margin: 10px auto;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #d63384;
        }
        button {
            background: #d63384;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background: #c2185b;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#login-form').on('submit', function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{ url('/login') }}",
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        window.location.href = "{{ route('home') }}"; // Redirect ke halaman home
                    },

                    error: function(xhr) {
                        var response = JSON.parse(xhr.responseText);
                        alert('Login failed: ' + response.error);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form id="login-form">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

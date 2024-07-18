<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyMate - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            background: linear-gradient(135deg, #ffe6f0, #ffb3d1);
            margin: 0;
            font-family: 'Calibri', cursive, sans-serif; /* Font yang lucu dan playful */
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        .hero {
            background: #ffccdd;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin: 20px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .hero:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        .hero h1 {
            font-size: 3em;
            font-weight: bold;
            color: #d63384;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .hero p {
            font-size: 1.5em;
            color: #d63384;
        }
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .service {
            background: #ffdde1; /* Warna background untuk fitur */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            position: relative; /* Untuk mengatur icon */
            text-decoration: none; /* Menghapus underline dari tautan */
            color: #d63384; /* Warna teks */
            display: block; /* Biar bisa di-hover dengan baik */
        }
        .service:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        .service h2 {
            font-size: 1.5em;
            color: #d63384;
            margin-bottom: 10px;
        }
        .service p {
            font-size: 1em;
            color: #d63384;
        }
        .service .icon {
            font-size: 3em;
            color: #d63384;
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            background: #fff;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .skincare {
            background: #ffdde1;
        }
        .makeup {
            background: #ffbad2;
        }
        .products {
            background: #ffc6d9;
        }
        .btn {
            display: inline-block;
            background-color: #d63384;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #c2185b;
        }
        footer {
            background: #d63384;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <h1>Welcome to BeautyMate, <?php echo auth()->user()->name; ?></h1>
            <p>Your ultimate beauty companion</p>
        </div>
        <div class="services">
            <a href="{{ url('auth/skincare') }}" class="service skincare">
                <div class="icon"><i class="fas fa-heart"></i></div>
                <h2>Skincare Tips</h2>
                <p>Discover the best skincare routines for your skin type.</p>
            </a>
            <a href="{{ url('auth/makeup') }}" class="service makeup">
                <div class="icon"><i class="fas fa-paint-brush"></i></div>
                <h2>Makeup Tutorials</h2>
                <p>Learn how to apply makeup like a pro with our step-by-step guides.</p>
            </a>
            <a href="{{ url('auth/products') }}" class="service products">
                <div class="icon"><i class="fas fa-shopping-bag"></i></div>
                <h2>Beauty Products</h2>
                <p>Find the latest and greatest beauty products on the market.</p>
            </a>
        </div>
    </div>
    <footer>
        &copy; 2024 BeautyMate. All rights reserved.
    </footer>
</body>
</html>

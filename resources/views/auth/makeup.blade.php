<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup Tutorials</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-<YOUR-SHA-512-HASH>" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(135deg, #ffe6f0, #ffb3d1);
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .hero {
            background: #ffccdd;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            text-align: center;
        }
        .hero h1 {
            font-size: 3em;
            font-weight: bold;
            color: #d63384;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.5em;
            color: #d63384;
        }
        .tutorials {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            justify-items: center;
        }
        .tutorial {
            background: #fce4ec; /* Warna baby pink */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            max-width: 400px;
        }
        .tutorial:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        .tutorial h3 {
            font-size: 1.8em;
            color: #d63384;
            margin-bottom: 10px;
        }
        .tutorial p {
            font-size: 1.2em;
            color: #666;
            line-height: 1.6;
        }
        .tutorial .icon {
            color: #d63384;
            font-size: 2em;
            margin-bottom: 10px;
        }
        footer {
            background-color: #d63384;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <h1><i class="fas fa-paint-brush"></i> Makeup Tutorials </h1>
            <p>Learn how to apply makeup like a pro with our step-by-step guides.</p>
        </div>
        <div class="tutorials">
            <div class="tutorial">
                <div class="icon"><i class="fas fa-eye"></i></div>
                <h3>Smokey Eye</h3>
                <p>Master the art of creating a dramatic smokey eye look that turns heads.</p>
            </div>
            <div class="tutorial">
                <div class="icon"><i class="fas fa-palette"></i></div>
                <h3>Contouring 101</h3>
                <p>Learn the basics of contouring to enhance your facial features flawlessly.</p>
            </div>
            <div class="tutorial">
                <div class="icon"><i class="fas fa-kiss-wink-heart"></i></div>
                <h3>Perfect Pout</h3>
                <p>Discover tips for achieving perfectly lined and filled lips for any occasion.</p>
            </div>
            <div class="tutorial">
                <div class="icon"><i class="fas fa-feather-alt"></i></div>
                <h3>Natural Look</h3>
                <p>Get a fresh and natural makeup look that enhances your beauty effortlessly.</p>
            </div>
            <div class="tutorial">
                <div class="icon"><i class="fas fa-sun"></i></div>
                <h3>Summer Glow</h3>
                <p>Learn how to achieve a radiant summer glow with makeup techniques and products.</p>
            </div>
            <div class="tutorial">
                <div class="icon"><i class="fas fa-star"></i></div>
                <h3>Red Carpet Glam</h3>
                <p>Discover glamorous makeup tips for achieving a red carpet-worthy look.</p>
            </div>
            <div class="tutorial">
                <div class="icon"><i class="fas fa-moon"></i></div>
                <h3>Evening Elegance</h3>
                <p>Find out how to create an elegant evening makeup look for special occasions.</p>
            </div>
            <div class="tutorial">
                <div class="icon"><i class="fas fa-heart"></i></div>
                <h3>Romantic Makeup</h3>
                <p>Get inspired by romantic makeup ideas to create a dreamy and enchanting look.</p>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2024 BeautyMate. All rights reserved.
    </footer>
</body>
</html>

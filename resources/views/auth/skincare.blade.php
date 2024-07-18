<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Tips</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-<YOUR-SHA-512-HASH>" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background: linear-gradient(135deg, #ffe6f0, #ffb3d1);
            margin: 0;
            font-family: 'Arial', sans-serif; /* Mengganti font untuk konsistensi */
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
            margin: 20px 0;
            text-align: center;
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
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 1.5em;
            color: #d63384;
            line-height: 1.6;
        }
        .tips {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .tip {
            background: #fce4ec; /* Warna baby pink */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            max-width: 400px;
            margin: auto; /* Tengahkan tip di dalam .tips */
        }
        .tip:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        .tip h3 {
            font-size: 1.8em;
            color: #d63384;
            margin-bottom: 10px;
        }
        .tip p {
            font-size: 1.2em;
            color: #666;
            line-height: 1.6;
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
        footer p {
            margin: 0;
            font-size: 0.8em;
        }
        .hero i {
            font-size: 1.5em;
            color: #d63384;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <h1><i class="far fa-lightbulb"  ></i> Skincare Tips </h1>
            <p>Discover the best skincare routines for your skin type.</p>
        </div>
        <div class="tips">
            <div class="tip">
                <h3><i class="fas fa-water"></i> Cleansing Tips</h3>
                <p>Start your skincare routine with a gentle cleanser that matches your skin type. Use lukewarm water and pat your face dry with a soft towel.</p>
            </div>
            <div class="tip">
                <h3><i class="fas fa-seedling"></i> Moisturizing Essentials</h3>
                <p>Choose a moisturizer that provides hydration without clogging pores. Look for ingredients like hyaluronic acid or glycerin.</p>
            </div>
            <div class="tip">
                <h3><i class="fas fa-sun"></i> Sun Protection</h3>
                <p>Always apply sunscreen with at least SPF 30 before going out. Reapply every two hours, especially if you're outdoors.</p>
            </div>
            <div class="tip">
                <h3><i class="fas fa-moon"></i> Night Routine</h3>
                <p>Consider incorporating a night cream or serum with retinol to promote skin renewal while you sleep.</p>
            </div>
            <div class="tip">
                <h3><i class="fas fa-cloud-sun"></i> Morning Skincare</h3>
                <p>Start your day with a gentle cleanser and follow up with a moisturizer containing SPF for added sun protection.</p>
            </div>
            <div class="tip">
                <h3><i class="fas fa-leaf"></i> Natural Remedies</h3>
                <p>Explore natural skincare remedies like honey masks or aloe vera gel to soothe and nourish your skin.</p>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2024 BeautyMate. All rights reserved.
    </footer>
</body>
</html>

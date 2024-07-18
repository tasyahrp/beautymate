<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-<YOUR-SHA-512-HASH>" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tambahkan stylesheet lainnya jika diperlukan -->
    <style>
        body {
            background: linear-gradient(135deg, #ffe6f0, #ffb3d1);
            margin: 0;
            font-family: 'Arial', sans-serif; /* Font yang lebih umum dan mudah dibaca */
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
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 1.5em;
            color: #d63384;
            line-height: 1.6;
        }
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        .product {
            background: #fce4ec; /* Warna background product */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        .product img {
            width: 100%;
            height: 250px; /* Tinggi gambar tetap, agar persegi */
            object-fit: cover; /* Memastikan gambar terpotong jika proporsi tidak pas */
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .product h3 {
            font-size: 1.5em;
            color: #d63384;
            margin-bottom: 10px;
        }
        .product p {
            font-size: 1em;
            color: #666;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        .product .price {
            font-weight: bold;
            color: #d63384;
            font-size: 1.2em;
            margin-top: auto; /* Mengatur agar harga tetap di bawah */
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

        /* Mengatur grid untuk 4 kolom per baris */
        @media (min-width: 768px) {
            .products {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <h1><i class="fas fa-shopping-bag"></i> Beauty Products</h1>
            <p>Find the latest and greatest beauty products on the market.</p>
        </div>
        <div class="products">
            <div class="product">
                <img src="https://i.pinimg.com/564x/91/56/d6/9156d6fd5eb8c222c442ba88f58375ef.jpg" alt="Lipstick">
                <h3>Lipstick</h3>
                <p>A long-lasting lipstick with vibrant colors to match your style. Perfect for all-day wear.</p>
                <p class="price">Rp 250.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/af/7f/69/af7f69ec1242580ce1b62a66ad880e33.jpg" alt="Lip Serum">
                <h3>Lip Serum</h3>
                <p>Hydrating lip serum enriched with essential oils and vitamins for soft, smooth lips.</p>
                <p class="price">Rp 200.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/f8/25/14/f825142daf84a2f5f0dcae5a19d4fcd5.jpg" alt="Lip Gloss">
                <h3>Lip Gloss</h3>
                <p>Shiny lip gloss with a non-sticky formula for a glamorous finish that lasts.</p>
                <p class="price">Rp 150.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/8b/f8/40/8bf8403d9c856bb095db04fb78b6ffe0.jpg" alt="Lip Balm">
                <h3>Lip Balm</h3>
                <p>Moisturizing lip balm with a hint of color, perfect for everyday use.</p>
                <p class="price">Rp 120.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/b0/dd/51/b0dd51eecc734d514b5050ad817f3226.jpg" alt="Lip Tint">
                <h3>Lip Tint</h3>
                <p>Lightweight lip tint that provides a natural look with lasting hydration.</p>
                <p class="price">Rp 180.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/7c/79/dd/7c79ddd234d38f569f9226be0ef5957c.jpg" alt="Lip Sleeping Mask">
                <h3>Lip Sleeping Mask</h3>
                <p>Overnight treatment that nourishes and repairs lips while you sleep.</p>
                <p class="price">Rp 220.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/90/4e/67/904e67cee891bed13171d648763d9047.jpg" alt="Moisturizer">
                <h3>Moisturizer</h3>
                <p>Hydrating moisturizer that leaves skin feeling soft and smooth.</p>
                <p class="price">Rp 300.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/2e/07/e4/2e07e4914d03cd6d2800f9a044c82552.jpg" alt="Serum">
                <h3>Serum</h3>
                <p>Anti-aging serum that reduces fine lines and improves skin texture.</p>
                <p class="price">Rp 350.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/bd/1d/64/bd1d6409d361368ff84ed5a126a3bd2b.jpg" alt="Face Cleanser">
                <h3>Face Cleanser</h3>
                <p>Gentle face cleanser that removes impurities without drying the skin.</p>
                <p class="price">Rp 150.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/89/80/79/8980799d7ec32b0bf78461602d4592fb.jpg" alt="Curl Control">
                <h3>Curl Control</h3>
                <p>Defines and enhances curls while reducing frizz for a polished look.</p>
                <p class="price">Rp 170.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/74/65/c4/7465c4ace7c1631d89a465293b482697.jpg" alt="Sleeping Mask">
                <h3>Sleeping Mask</h3>
                <p>Restorative sleeping mask that hydrates and revitalizes skin overnight.</p>
                <p class="price">Rp 190.000</p>
            </div>
            <div class="product">
                <img src="https://i.pinimg.com/564x/61/f0/fc/61f0fc0fa1e6ebc1192ecacf8e16a65d.jpg" alt="Shampoo">
                <h3>Shampoo</h3>
                <p>Gentle shampoo that cleanses and nourishes hair for healthy shine.</p>
                <p class="price">Rp 100.000</p>
            </div>
        </div>
    </div>
    <footer>
        © 2024 BeautyMate. All rights reserved.
    </footer>
</body>
</html>

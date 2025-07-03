<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arduino Posture Monitoring Device</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #333;
            padding: 20px;
            text-align: center;
            color: white;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(to right, #ff6700, #00bfa5);
            padding: 100px 20px;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 3rem;
        }

        .hero p {
            font-size: 1.5rem;
            margin: 20px 0;
        }

        .hero .btn {
            padding: 10px 20px;
            background-color: #ff6700;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .hero .btn:hover {
            background-color: #00bfa5;
        }

        /* Product Section */
        .product-section {
            padding: 50px 20px;
            text-align: center;
            background-color: #fff;
        }

        .product-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .product-card {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            background-color: #fefefe;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-card img {
            width: 200px;
            height: 200px;
            border-radius: 10px;
        }

        .product-card h3 {
            margin-top: 15px;
            font-size: 1.5rem;
        }

        .product-card p {
            font-size: 1rem;
            margin: 10px 0;
        }

        .product-card .btn {
            background-color: #ff6700;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .product-card .btn:hover {
            background-color: #00bfa5;
        }

        /* Featured Section */
        .featured-section {
            background-color: #ffffff;
            padding: 50px 20px;
        }

        .featured-section h2 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 40px;
        }

        .featured-products {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .featured-product-card {
            width: 300px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .featured-product-card img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }

        /* Reviews Section */
        .reviews-section {
            padding: 50px 20px;
            background-color: #fff;
        }

        .reviews-section h2 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 30px;
        }

        .review-card {
            background-color: #f9f9f9;
            padding: 20px;
            margin: 10px 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .review-card h3 {
            margin-bottom: 5px;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="signup.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to the Arduino Posture Monitoring Device Store</h1>
            <p>Track your posture and improve your health with our innovative device.</p>
            
        </div>
    </section>

    <section id="product" class="product-section">
        <h2>Our Product</h2>
        <div class="product-card">
            <img src="https://th.bing.com/th/id/OIP.-ZubCa6BtdM1C820t0V_ywHaHa?rs=1&pid=ImgDetMain" alt="Arduino Posture Monitoring Device">
            <h3>Arduino Based Posture Monitoring Device</h3>
            <p>Price: $99.99</p>
            <a href = "#"> 
            <button class="btn">Buy Now</button> </a>
        </div>
    </section>

    <section id="featured" class="featured-section">
        <h2>Featured Products</h2>
        <div class="featured-products">
            <div class="featured-product-card">
                <img src="https://m.media-amazon.com/images/I/71zoADPTZzL._AC_SL1500_.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>Price: $49.99</p>
                <button class="btn">Buy Now</button>
            </div>
            <div class="featured-product-card">
                <img src="https://m.media-amazon.com/images/I/31qcUstgw0L._SY445_SX342_QL70_FMwebp_.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>Price: $79.99</p>
                <button class="btn">Buy Now</button>
            </div>
            <div class="featured-product-card">
                <img src="https://m.media-amazon.com/images/I/41e5x33qP+S._SX342_SY445_.jpg" alt="Product 3">
                <h3>Product 3</h3>
                <p>Price: $59.99</p>
                <button class="btn">Buy Now</button>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section">
        <h2>Customer Reviews</h2>
        <div class="review-card">
            <h3>Kashyap Patel</h3>
            <p>"This posture monitoring device has been a game changer for my daily routine!"</p>
        </div>
        <div class="review-card">
            <h3>Satyajit Parhi</h3>
            <p>"Affordable and effective, I highly recommend this product!"</p>
        </div>
    </section>

    <footer id="contact">
        <p>Contact us: <a style = "color: white" href="merchantasad@gmail.com">merchantasad@gmail.com</a></p>
        <p>Phone: 9678454132556</p>
        <p>&copy; 2024 Arduino Posture Monitoring Device</p>
    </footer>
</body>
</html>

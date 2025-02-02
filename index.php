<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>FreshCart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav class="navbar">
    <!-- Left Side: Basket Icon and Store Name -->
    <div class="navbar-left">
        <a href="cart.php"><i class="fas fa-shopping-basket basket-icon"></i></a>
        <div class="store-name">FreshCart</div>
    </div>

    <!-- Center: Navigation Links -->
    <div class="navbar-center">
        <a href="#home">Home</a>
        <a href="#featured">Feature</a>
        <a href="#products">Products</a>
        <a href="#reviews">Reviews</a>
        <a href="#contact">Contact us</a>
    </div>
    
    <!-- Right Side: Search, Cart, and User Icons -->
    <div class="navbar-right">
        <?php
        
        $count=0;
        if(isset($_SESSION['cart'])){
            $count=count($_SESSION['cart']);
        }?>
        <input type="text" class="search-bar" placeholder="Search...">
        <a href="mycart.php"><i class="fas fa-shopping-cart icon"></i><span id="cart-count" style="color: white;">(<?php echo $count;?>)</span></a>
        <a href="/ECommerce/signup.php"><i class="fas fa-user icon"></i></a>
        <!--<i class="fas fa-shopping-cart icon" onclick="redirectToCart()"></i>
        <i class="fas fa-user icon"></i>-->
    </div>
</nav>

<div class="hero-section">
    <div class="overlay">
        <h1>Fresh and Organic products for you</h1>
        <p>At GROFER, we believe that high-quality, fresh, and organic products should be accessible to everyone. </p>
        <p margin-bottom:20px>Our store is dedicated to bringing you the best produce, handpicked from the finest farms, and delivered straight to your door.</p>
        
        <button class="shop-now-btn">Shop Now</button>
    </div>
</div>
<!-- Featured Products Section -->
 <section id="featured" class="featured-section" style="padding: 40px 20px; background-color: #f7f7f7; text-align: center;">
    <h2 style="font-size: 2.5em; color: white; margin-bottom: 30px;">Our Features</h2>
    <div class="feature-container" style="display: flex; justify-content: space-around; align-items: center; gap: 20px; flex-wrap: wrap;">
        <!-- Feature 1 -->
        <div class="feature-item" style="border: 1px solid #ddd; padding: 20px; width: 300px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <img src="image/fresh.jpg" alt="Fresh and Organic" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 15px;">
            <h3 style="font-size: 1.5em; margin-bottom: 10px;">Fresh and Organic</h3>
            <p style="font-size: 1em; color: #666;">High-quality fresh produce directly from organic farms.</p>
        </div>

        <!-- Feature 2 -->
        <div class="feature-item" style="border: 1px solid #ddd; padding: 20px; width: 300px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <img src="image/freedev.jpg" alt="Free Delivery" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 15px;">
            <h3 style="font-size: 1.5em; margin-bottom: 10px;">Free Delivery</h3>
            <p style="font-size: 1em; color: #666;">Get your groceries delivered to your door for free.</p>
        </div>

        <!-- Feature 3 -->
        <div class="feature-item" style="border: 1px solid #ddd; padding: 20px; width: 300px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <img src="image/easy.jpg" alt="Easy Payments" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 15px;">
            <h3 style="font-size: 1.5em; margin-bottom: 10px;">Easy Payments</h3>
            <p style="font-size: 1em; color: #666;">Pay with ease using multiple payment options.</p>
        </div>
    </div>
</section>




<!-- Products Section -->
<section id="products">
    <div class="products-header">
        <h2>Our Products</h2>
    </div>
<!-- Modification-->
<div class="products-container" style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 20px; padding: 20px;">
    <!-- Product 1 -->
    <form action="manage_cart.php" method="POST" >
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/apple.jpg" alt="Apple" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Apple</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 120/kg</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn" onclick="alert('Item added to cart')"style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Apple">
            <input type="hidden" name="Price" value="120">
        </div>
    </form>

    <!-- Product 2 -->
    <form action="manage_cart.php" method="POST">
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/banana.jpg" alt="Banana" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Banana</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 10/pc</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn"onclick="alert('Item added to cart')" style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Banana">
            <input type="hidden" name="Price" value="10">
        </div>
    </form>

    <!-- Product 3 -->
    <form action="manage_cart.php" method="POST">
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/watermelon.jpg" alt="Watermelon" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Watermelon</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 100/pc</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn"onclick="alert('Item added to cart')" style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Watermelon">
            <input type="hidden" name="Price" value="100">
        </div>
    </form>

    <!--product 4-->
    <form action="manage_cart.php" method="POST">
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/grapes.jpg" alt="grapes" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Grapes</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 100/kg</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn" onclick="alert('Item added to cart')"style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Grapes">
            <input type="hidden" name="Price" value="100">
        </div>
    </form>

    <!--product 5-->
    <form action="manage_cart.php" method="POST">
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/onion.jpg" alt="Onion" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Onion</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 80/kg</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn"onclick="alert('Item added to cart')" style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Onion">
            <input type="hidden" name="Price" value="80">
        </div>
    </form>

    <!--product 6-->
    <form action="manage_cart.php" method="POST">
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/tomato.jpg" alt="Tomato" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Tomato</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 90/kg</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn"onclick="alert('Item added to cart')" style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Tomato">
            <input type="hidden" name="Price" value="90">
        </div>
    </form>

    <!--product 7-->
    <form action="manage_cart.php" method="POST">
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/pineapple.jpg" alt="Pineapple" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Pineapple</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 60/kg</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn" onclick="alert('Item added to cart')"style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Pineapple">
            <input type="hidden" name="Price" value="60">
        </div>
    </form>

    <!--product 8-->
    <form action="manage_cart.php" method="POST">
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/potato.jpg" alt="Potato" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Potato</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 40/kg</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn"onclick="alert('Item added to cart')" style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Potato">
            <input type="hidden" name="Price" value="40">
        </div>
    </form>

    <!--product 9-->
    <form action="manage_cart.php" method="POST">
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/carrot.jpg" alt="Carrot" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Carrot</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 150/kg</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn"onclick="alert('Item added to cart')" style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Carrot">
            <input type="hidden" name="Price" value="150">
        </div>
    </form>

    <!--product 10-->
    <form action="manage_cart.php" method="POST">
        <div class="product-item" style="border: 1px solid #ddd; padding: 20px; width: 200px; text-align: center; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); position: relative;">
            <img src="image/cauliflower.jpg" alt="Cauliflower" style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 10px;">
            <h3 style="font-size: 1.2em; margin: 10px 0;">Cauliflower</h3>
            <p style="font-size: 1em; color: green; margin: 10px 0;">Rs 70/kg</p>
            <button type="submit" class="add-to-cart-btn" name="add-to-cart-btn" onclick="alert('Item added to cart')" style="padding: 10px 15px; background-color: orange; color: white; border: none; cursor: pointer; position: static;">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Cauliflower">
            <input type="hidden" name="Price" value="70">
        </div>
    </form>
</div>
</section>


<!-- Reviews Section -->
<section id="reviews">
    <div class="reviews-header">
        <h2>Reviews</h2>
    </div>
    <div class="reviews-container">
        <div class="review-item">
            <img src="image/person3.png" alt="Person 1">
            <div class="review-content">
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
                <p>"Great products and excellent customer service. Highly recommend!"</p>
                <h4>Jane Doe</h4>
            </div>
        </div>
        <div class="review-item">
            <img src="image/person2.png" alt="Person 2">
            <div class="review-content">
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                </div>
                <p>"The fresh produce is amazing, but the delivery was a bit late."</p>
                <h4>John Smith</h4>
            </div>
        </div>
        <div class="review-item">
            <img src="image/Person1.png" alt="Person 3">
            <div class="review-content">
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                </div>
                <p>"Decent experience. The website could use some improvements."</p>
                <h4>Emily Johnson</h4>
            </div>
        </div>
    </div>

<!-- Blogs Section -->
<!-- Footer Section -->
<section id="contact">
<footer>
    <div class="footer-left">
        <div class="store-info">
            <span class="footer-icon">&#128717;</span>
            <h3>FreshCart</h3>
        </div>
        <p>Kolkata-700013 , India</p>
        <div class="social-media">
            <a href="#" class="social-icon">&#xf09a;</a> <!-- Facebook -->
            <a href="#" class="social-icon">&#xf099;</a> <!-- Twitter -->
            <a href="#" class="social-icon">&#xf16d;</a> <!-- LinkedIn -->
            <a href="#" class="social-icon">&#xf16d;</a> <!-- Instagram -->
        </div>
    </div>
    <div class="footer-middle">
        <div class="contact-info">
            <span class="contact-icon">&#9742;</span> <!-- Phone Icon -->
            <p>+91 456-7890</p>
        </div>
        <div class="contact-info">
            <span class="contact-icon">&#9993;</span> <!-- Email Icon -->
            <p>info@FreshCart.com</p>
        </div>
    </div>
    <div class="footer-right">
        <h4>Quick Links</h4>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#featured">Feature</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#reviews">Reviews</a></li>
        </ul>
    </div>
</footer>
</section>




    <script src="js/script.js"></script>
</body>
</html>
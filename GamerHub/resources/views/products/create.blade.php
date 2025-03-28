<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="{{ url('/css/checkout.css') }}">
</head>
<body>

    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <img src="{{ url('/images/GamerHubLogo.png') }}" alt="GamerHub Logo" class="logo">
                </a>
    
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>
    
            <!-- Add navigation items similar to the main page -->
        </nav>
    </header>

<section class="checkout-section">
    <h2>Checkout</h2>
    <p>
        <a href="#">Sign in</a> or <a href="#">Create Account</a> to track orders and see items you may have added using another device.
    </p>
</section>

<div class="main-content">
    <section class="shipping-form" id="buy-now">
        <h3>Shipping</h3>
        <form id="checkout-form" action="#" method="POST">
            <h4>Contact Info</h4>
            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
                <p class="helper-text">Order updates will be sent to this address.</p>
            </div>

            <h4>Shipping Address</h4>
            <div class="form-group">
                <label for="country">Country <span class="required">*</span></label>
                <select id="country" name="country" required>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group half">
                    <label for="first-name">First Name <span class="required">*</span></label>
                    <input type="text" id="first-name" name="first-name" required placeholder="Enter your first name">
                </div>
                <div class="form-group half">
                    <label for="last-name">Last Name <span class="required">*</span></label>
                    <input type="text" id="last-name" name="last-name" required placeholder="Enter your last name">
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address 1 <span class="required">*</span></label>
                <input type="text" id="address" name="address" required placeholder="Start typing your street address">
            </div>

            <div class="form-group">
                <label for="address2">+ Add Apt, Suite, Building (Optional)</label>
                <input type="text" id="address2" name="address2" placeholder="Apartment, suite, or building">
            </div>

            <div class="form-row">
                <div class="form-group half">
                    <label for="city">City <span class="required">*</span></label>
                    <input type="text" id="city" name="city" required placeholder="Enter your city">
                </div>
                <div class="form-group half">
                    <label for="postal-code">Postal Code <span class="required">*</span></label>
                    <input type="text" id="postal-code" name="postal-code" required placeholder="Enter your postal code">
                </div>
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" placeholder="Enter your company name (optional)">
            </div>

            <div class="form-group">
                <label for="phone-number">Phone Number <span class="required">*</span></label>
                <input type="tel" id="phone-number" name="phone-number" required placeholder="Enter your phone number">
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </section>

    <section class="summary">
        <h3>Summary</h3>
        <div class="summary-item">
            <img src="Mouse.jpg" alt="Placeholder Image" class="product-image">
            <div class="product-details">
                <p class="product-name">MX Anywhere 3S for Mac</p>
                <p class="product-quantity">Quantity: 1</p>
                <p class="product-price">Price: £89.99</p>
            </div>
        </div>
        <div class="divider small-divider"></div> <!-- Divider between image and subtotal -->
    
        <div class="summary-item">
            <p>Subtotal</p>
            <p id="subtotal-price">£89.99</p>
        </div>
        <div class="divider thick-divider"></div> <!-- Thicker divider between subtotal and total -->
    
        <div class="summary-item total">
            <p>Total</p>
            <p id="total-price">£89.99</p>
        </div>
        <div class="promo-code">
            <label for="promo-input">Promo Code:</label>
            <input type="text" id="promo-input" placeholder="Enter promo code">
            <button id="apply-promo">Apply</button>
            <p id="promo-message"></p>
        </div>
    </section>
</div>

<footer>
    <p>&copy; 2024 GamerHub. All rights reserved.</p>
</footer>

<script src="/js/checkout.js"></script>
</body>
</html>

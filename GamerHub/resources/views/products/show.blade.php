<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ url('/css/product.css') }}">

    <title>{{ $product->name }} | GAMERHUB</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <img src="{{ url('/images/logo.png') }}" width="130" height="auto">
                </a>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>

                <div class="nav_basket">
                    <i class="ri-shopping-cart-line"></i>
                    <span class="basket-count">0</span>
                </div>
            </div>
            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="#" class="nav__link">Home</a>
                    </li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Products <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-mouse-line"></i>
                                    </div>

                                    <a href="#" class="dropdown__title">Mouses</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Light</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Heavy</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Combos</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-keyboard-box-line"></i>
                                    </div>

                                    <a href="#" class="dropdown__title">Keyboards</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Mechanical</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Membrane</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Combos</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-computer-line"></i>
                                    </div>

                                    <a href="#" class="dropdown__title">Monitors</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">144Hz</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">240Hz</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Dual Monitor</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-headphone-line"></i>
                                    </div>

                                    <a href="#" class="dropdown__title">Headset</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Bluetooth</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Combos</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-mic-line"></i>
                                    </div>

                                    <a href="#" class="dropdown__title">Microphone</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">ddd</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Combos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Deals <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-discount-percent-line"></i>
                                    </div>
                                    <a href="#" class="dropdown__title">Discounts</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Black Friday</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Discounted items</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-arrow-right-up-line"></i>
                                    </div>

                                    <a href="#" class="dropdown__title">Bundles</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">M&K</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Full setup</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--=============== DROPDOWN 3 ===============-->

                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Support <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-discount-percent-line"></i>
                                    </div>
                                    <a href="#" class="dropdown__title">About Us</a>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-arrow-right-up-line"></i>
                                    </div>

                                    <a href="#" class="dropdown__title">Contact US</a>

                                </div>
                            </div>
                        </div>
                    </li>



                    <li>
                        <a href="#" class="nav__link">Contact Us</a>
                    </li>
                    <li>
                        <div class="box">
                            <input type="text" placeholder="Search...">
                            <a href="#"><i class="ri-search-line"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="login">
                            <a href="#"><i class="ri-user-line"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="nav_basket">
                            <i class="ri-shopping-cart-line"></i>
                            <span class="basket-count">0</span>
                        </div>
                        <div class="basket-modal" id="basket-modal">
                            <div class="basket-content">
                                <h2>Your Basket</h2>
                                <ul class="basket-items"></ul>
                                <div class="basket-total">
                                    <span>Total:</span>
                                    <span class="total-price">£0.00</span>
                                </div>
                                <button class="checkout-btn">Checkout</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Products part -->
    <h1 class="name-p">{{ $product->name }}</h1>
    <div class="page-p container">

        <div class="main-p">

            <div class="images-p">

                <div class="image-main-p">

                    <img src="{{ url('/images') }}/{{ $product->category }}/{{ $images->first()->file }}" alt="Product Image" id="Mainpicture">
                </div>

                <div class="thumbnails">
                    @foreach ($images as $image)
                    @php
                    $file = "$product->category/$image->file"
                    @endphp
                    <img src="{{ url('/images') }}/{{ $file }}" alt="thumbnail1" onclick="changeImage('{{ url('/') }}/images/{{ $file }}')">
                    @endforeach
                </div>

            </div>


            <div class="details-p">

                <p class="description-p">
                    {{ $product->description }}
                </p>
                <p class="price-p">Price: £<span id="price">{{ $product->price / 100 }}</span></p>

                <div class="quantity-section">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" value="1" min="1" onchange="updateTotal()">
                    <p>Total: £<span id="total">{{ $product->price / 100 }}</span></p>
                </div>
                <button class="cart-butt" aria-label="Add to Cart">Add to Cart</button>


                <div class="extra-info">
                    <div class="info-section">
                        <h3>Free Shipping and Returns</h3>
                        <p>Experience peak comfort and performance with MX Ergo S advanced wireless trackball...</p>
                    </div>

                    <div class="info-section">
                        <h3>Items We Suggest</h3>
                        <ul>
                            <li>ERGO K860 - £99.99</li>
                            <li>Zone Vibe 100 - £99.99</li>
                        </ul>
                    </div>

                    <div class="extra-info">
                        <div class="info-section">
                            <h3>Free Shipping and Returns</h3>
                            <p>Experience peak comfort and performance with MX Ergo S advanced wireless trackball...</p>
                        </div>

                        <div class="info-section">
                            <h3>Items We Suggest</h3>
                            <ul>
                                <li>ERGO K860 - £99.99</li>
                                <li>Zone Vibe 100 - £99.99</li>
                            </ul>
                        </div>


                        <div class="specs-main">
                            <button type="button" class="spec-det">Specs & Details</button>
                            <div class="specstable">
                                <ul>
                                    <li>Height: 132.5 mm</li>
                                    <li>Width: 99.8 mm</li>
                                    <li>Depth: 51.4 mm</li>
                                    <li>Weight: 164 g</li>
                                </ul>
                            </div>
                        </div>


                        <div class="compat-main">
                            <button type="button" class="-compatibility">Specs & Details</button>
                            <div class="compat">
                                <ul>
                                    <li>Windows 10, 11 or later</li>
                                    <li>macOS 12 or later</li>
                                    <li>Linux</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        var coll = document.getElementsByClassName("spec-det");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>

    <!-- MAIN JS -->
    <script src="{{ url('/js/product.js') }}"></script>


</body>

<br> <br> <br> <br>
<footer>
    <!--=============== FOOTER ===============-->
    <section class="footer">
        <div class="footer-content">
            <img src="{{ url('/images/logo.png') }}"> <!--=== TO DO ==-->
            <p>aaaaaaaaaa aaaaaaaaa aaaaaaaaaa aaaaaaaaaaa aaaaaaaaaa aaaaaaa</p>

            <div class="icons">
                <a href="#"><i class='bx bxl-meta'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-reddit'></i></a>
            </div>
        </div>

        <div class="footer-content">
            <h4>Products</h4>
            <li><a href="#">Mouses</a></li>
            <li><a href="#">Keyboards</a></li>
            <li><a href="#">Monitor</a></li>
            <li><a href="#">Microphone</a></li>
            <li><a href="#">Headset</a></li>
        </div>

        <div class="footer-content">
            <h4>Deals</h4>
            <li><a href="#">Discounted items</a></li>
            <li><a href="#">Black Friday</a></li>
            <li><a href="#">Bundles</a></li>
        </div>

        <div class="footer-content">
            <h4>Support</h4>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </div>

    </section>

</footer>

</html>
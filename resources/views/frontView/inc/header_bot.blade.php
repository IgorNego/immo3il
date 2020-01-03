<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="{{ asset( 'frontEnd' ) }}/index.html"><img src="{{ asset( 'frontEnd' ) }}/img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="{{ asset( 'frontEnd' ) }}/#">Shop</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Women's Collection</li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Dresses</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Blouses &amp; Shirts</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">T-shirts</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Rompers</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Bras &amp; Panties</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Men's Collection</li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">T-Shirts</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Polo</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Shirts</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Jackets</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Trench</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Kid's Collection</li>
                                    <li><a href="/shop">Dresses</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Shirts</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">T-shirts</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Jackets</a></li>
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Trench</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="{{ asset( 'frontEnd' ) }}/img/bg-img/bg-6.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ asset( 'frontEnd' ) }}/#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ asset( '/' ) }}">Home</a></li>
                                <li><a href="{{ asset( 'produits' ) }}">Shop</a></li>
                                <li><a href="{{ asset( 'single_product_details' ) }}">Product Details</a></li>
                                <li><a href="{{ asset( 'checkout' ) }}">Checkout</a></li>
                                <li><a href="{{ asset( 'blog' ) }}">Blog</a></li>
                                <li><a href="{{ asset( 'single-blog' ) }}">Single Blog</a></li>
                                <li><a href="{{ asset( 'regular_page' ) }}">Regular Page</a></li>
                                <li><a href="{{ asset( 'contact' ) }}">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ asset( 'blog' ) }}">Blog</a></li>
                        <li><a href="{{ asset( 'contact' ) }}">Contact</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="#" method="post">
                    <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="{{ asset( 'frontEnd' ) }}/#"><img src="{{ asset( 'frontEnd' ) }}/img/core-img/heart.svg" alt=""></a>
            </div>
            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="{{ asset( 'frontEnd' ) }}/#"><img src="{{ asset( 'frontEnd' ) }}/img/core-img/user.svg" alt=""></a>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="{{ asset( 'frontEnd' ) }}/#" id="essenceCartBtn"><img src="{{ asset( 'frontEnd' ) }}/img/core-img/bag.svg" alt=""> <span>3</span></a>
            </div>
        </div>

    </div>
</header>

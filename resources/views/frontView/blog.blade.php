<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence @yield('title_area')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset( 'frontEnd' ) }}/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset( 'frontEnd' ) }}/css/core-style.css">
    <link rel="stylesheet" href="{{ asset( 'frontEnd' ) }}/style.css">

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset( 'frontEnd' ) }}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ asset( 'frontEnd' ) }}/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset( 'frontEnd' ) }}/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="{{ asset( 'frontEnd' ) }}/js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="{{ asset( 'frontEnd' ) }}/js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="{{ asset( 'frontEnd' ) }}/js/active.js"></script>
    <!-- Google Maps -->
    <script src="{{ asset( 'frontEnd' ) }}/https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="{{ asset( 'frontEnd' ) }}/js/map-active.js"></script>

</head>

<body>
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
                                    <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Dresses</a></li>
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
                                <li><a href="{{ asset( 'frontEnd' ) }}/index.html">Home</a></li>
                                <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Shop</a></li>
                                <li><a href="{{ asset( 'frontEnd' ) }}/single-product-details.html">Product Details</a></li>
                                <li><a href="{{ asset( 'frontEnd' ) }}/checkout.html">Checkout</a></li>
                                <li><a href="{{ asset( 'frontEnd' ) }}/blog.html">Blog</a></li>
                                <li><a href="{{ asset( 'frontEnd' ) }}/single-blog.html">Single Blog</a></li>
                                <li><a href="{{ asset( 'frontEnd' ) }}/regular-page.html">Regular Page</a></li>
                                <li><a href="{{ asset( 'frontEnd' ) }}/contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ asset( 'frontEnd' ) }}/blog.html">Blog</a></li>
                        <li><a href="{{ asset( 'frontEnd' ) }}/contact.html">Contact</a></li>
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


<!-- ##### Right Side Cart Area ##### -->
<div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">

    <!-- Cart Button -->
    <div class="cart-button">
        <a href="#" id="rightSideCart"><img src="  {{ asset( 'frontEnd' ) }}/img/core-img/bag.svg" alt=""> <span>3</span></a>
    </div>

    <div class="cart-content d-flex">

        <!-- Cart List Area -->
        <div class="cart-list">
            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="  {{ asset( 'frontEnd' ) }}/img/product-img/product-1.jpg" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                        <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>

            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="  {{ asset( 'frontEnd' ) }}/img/product-img/product-2.jpg" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                        <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>

            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="  {{ asset( 'frontEnd' ) }}/img/product-img/product-3.jpg" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                        <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Cart Summary -->
        <div class="cart-amount-summary">

            <h2>Summary</h2>
            <ul class="summary-table">
                <li><span>subtotal:</span> <span>$274.00</span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>discount:</span> <span>-15%</span></li>
                <li><span>total:</span> <span>$232.00</span></li>
            </ul>
            <div class="checkout-btn mt-100">
                <a href="checkout.html" class="btn essence-btn">check out</a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Right Side Cart End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(  {{ asset( 'frontEnd' ) }}/img/bg-img/breadcumb2.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>Fashion Blog</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Wrapper Area Start ##### -->
<div class="blog-wrapper section-padding-80">
    <div class="container">
        <div class="row">

            <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-50">
                    <img src="  {{ asset( 'frontEnd' ) }}/img/bg-img/blog1.jpg" alt="">
                    <!-- Post Title -->
                    <div class="post-title">
                        <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                    </div>
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <!-- Post Title -->
                        <div class="hover-post-title">
                            <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                        <a href="#">Continue reading <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-50">
                    <img src="  {{ asset( 'frontEnd' ) }}/img/bg-img/blog2.jpg" alt="">
                    <!-- Post Title -->
                    <div class="post-title">
                        <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                    </div>
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <!-- Post Title -->
                        <div class="hover-post-title">
                            <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                        <a href="#">Continue reading <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-50">
                    <img src="  {{ asset( 'frontEnd' ) }}/img/bg-img/blog3.jpg" alt="">
                    <!-- Post Title -->
                    <div class="post-title">
                        <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                    </div>
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <!-- Post Title -->
                        <div class="hover-post-title">
                            <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                        <a href="#">Continue reading <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-50">
                    <img src="  {{ asset( 'frontEnd' ) }}/img/bg-img/blog4.jpg" alt="">
                    <!-- Post Title -->
                    <div class="post-title">
                        <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                    </div>
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <!-- Post Title -->
                        <div class="hover-post-title">
                            <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                        <a href="#">Continue reading <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-50">
                    <img src="  {{ asset( 'frontEnd' ) }}/img/bg-img/blog5.jpg" alt="">
                    <!-- Post Title -->
                    <div class="post-title">
                        <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                    </div>
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <!-- Post Title -->
                        <div class="hover-post-title">
                            <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                        <a href="#">Continue reading <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-50">
                    <img src="  {{ asset( 'frontEnd' ) }}/img/bg-img/blog6.jpg" alt="">
                    <!-- Post Title -->
                    <div class="post-title">
                        <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                    </div>
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <!-- Post Title -->
                        <div class="hover-post-title">
                            <a href="#">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                        <a href="#">Continue reading <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Wrapper Area End ##### -->


<footer class="footer_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area d-flex mb-30">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="{{ asset( 'frontEnd' ) }}/#"><img src="{{ asset( 'frontEnd' ) }}/img/core-img/logo2.png" alt=""></a>
                    </div>
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{ asset( 'frontEnd' ) }}/shop.html">Shop</a></li>
                            <li><a href="{{ asset( 'frontEnd' ) }}/blog.html">Blog</a></li>
                            <li><a href="{{ asset( 'frontEnd' ) }}/contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area mb-30">
                    <ul class="footer_widget_menu">
                        <li><a href="{{ asset( 'frontEnd' ) }}/#">Order Status</a></li>
                        <li><a href="{{ asset( 'frontEnd' ) }}/#">Payment Options</a></li>
                        <li><a href="{{ asset( 'frontEnd' ) }}/#">Shipping and Delivery</a></li>
                        <li><a href="{{ asset( 'frontEnd' ) }}/#">Guides</a></li>
                        <li><a href="{{ asset( 'frontEnd' ) }}/#">Privacy Policy</a></li>
                        <li><a href="{{ asset( 'frontEnd' ) }}/#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row align-items-end">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_heading mb-30">
                        <h6>Subscribe</h6>
                    </div>
                    <div class="subscribtion_form">
                        <form action="#" method="post">
                            <input type="email" name="mail" class="mail" placeholder="Your email here">
                            <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_social_area">
                        <a href="{{ asset( 'frontEnd' ) }}/#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="{{ asset( 'frontEnd' ) }}/#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="{{ asset( 'frontEnd' ) }}/#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="{{ asset( 'frontEnd' ) }}/#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="{{ asset( 'frontEnd' ) }}/#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{ asset( 'frontEnd' ) }}/https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>

    </div>
</footer>



<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{ asset( 'frontEnd' ) }}/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="{{ asset( 'frontEnd' ) }}/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="{{ asset( 'frontEnd' ) }}/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="{{ asset( 'frontEnd' ) }}/js/plugins.js"></script>
<!-- Classy Nav js -->
<script src="{{ asset( 'frontEnd' ) }}/js/classy-nav.min.js"></script>
<!-- Active js -->
<script src="{{ asset( 'frontEnd' ) }}/js/active.js"></script>
<!-- Google Maps -->
<script src="{{ asset( 'frontEnd' ) }}/https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="{{ asset( 'frontEnd' ) }}/js/map-active.js"></script>

</body>

</html>

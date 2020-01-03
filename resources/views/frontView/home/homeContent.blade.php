@extends('frontView.master')


@section('title_area')
    - Fashion Ecommerce Template

@endsection


@section('css_js')
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

@endsection



@section('popular_product')
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{ asset( 'frontEnd' ) }}/img/product-img/product-1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{ asset( 'frontEnd' ) }}/img/product-img/product-2.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="{{ asset( 'frontEnd' ) }}/#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="{{ asset( 'frontEnd' ) }}/single-product-details.html">
                                    <h6>Knot Front Mini Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ asset( 'frontEnd' ) }}/#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{ asset( 'frontEnd' ) }}/img/product-img/product-2.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{ asset( 'frontEnd' ) }}/img/product-img/product-3.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="{{ asset( 'frontEnd' ) }}/#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="{{ asset( 'frontEnd' ) }}/single-product-details.html">
                                    <h6>Poplin Displaced Wrap Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ asset( 'frontEnd' ) }}/#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{ asset( 'frontEnd' ) }}/img/product-img/product-3.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{ asset( 'frontEnd' ) }}/img/product-img/product-4.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="{{ asset( 'frontEnd' ) }}/#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="{{ asset( 'frontEnd' ) }}/single-product-details.html">
                                    <h6>PETITE Crepe Wrap Mini Dress</h6>
                                </a>
                                <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ asset( 'frontEnd' ) }}/#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{ asset( 'frontEnd' ) }}/img/product-img/product-4.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{ asset( 'frontEnd' ) }}/img/product-img/product-5.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="{{ asset( 'frontEnd' ) }}/#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="{{ asset( 'frontEnd' ) }}/single-product-details.html">
                                    <h6>PETITE Belted Jumper Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ asset( 'frontEnd' ) }}/#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('brands')
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset( 'frontEnd' ) }}/img/core-img/brand1.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset( 'frontEnd' ) }}/img/core-img/brand2.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset( 'frontEnd' ) }}/img/core-img/brand3.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset( 'frontEnd' ) }}/img/core-img/brand4.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset( 'frontEnd' ) }}/img/core-img/brand5.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset( 'frontEnd' ) }}/img/core-img/brand6.png" alt="">
        </div>
    </div>
@endsection


@section('side_cart')
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="{{ asset( 'frontEnd' ) }}/#" id="rightSideCart"><img src="{{ asset( 'frontEnd' ) }}/img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="{{ asset( 'frontEnd' ) }}/#" class="product-image">
                        <img src="{{ asset( 'frontEnd' ) }}/img/product-img/product-1.jpg" class="cart-thumb" alt="">
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
                    <a href="{{ asset( 'frontEnd' ) }}/#" class="product-image">
                        <img src="{{ asset( 'frontEnd' ) }}/img/product-img/product-2.jpg" class="cart-thumb" alt="">
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
                    <a href="{{ asset( 'frontEnd' ) }}/#" class="product-image">
                        <img src="{{ asset( 'frontEnd' ) }}/img/product-img/product-3.jpg" class="cart-thumb" alt="">
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
                    <a href="{{ asset( 'frontEnd' ) }}/checkout.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('area')
    <section class="welcome_area bg-img background-overlay" style="background-image: url( {{ asset( 'frontEnd' ) }}/img/bg-img/bg-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>asoss</h6>
                        <h2>New Collection</h2>
                        <a href="{{ asset( 'frontEnd' ) }}/#" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('catagory_area')
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url( {{ asset( 'frontEnd' ) }}/img/bg-img/bg-2.jpg);">
                        <div class="catagory-content">
                            <a href="{{ asset( 'frontEnd' ) }}/#">Clothing</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url( {{ asset( 'frontEnd' ) }}/img/bg-img/bg-3.jpg);">
                        <div class="catagory-content">
                            <a href="{{ asset( 'frontEnd' ) }}/#">Shoes</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url( {{ asset( 'frontEnd' ) }}/img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                            <a href="{{ asset( 'frontEnd' ) }}/#">Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('cta_area')
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url( {{ asset( 'frontEnd' ) }}/img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                <a href="{{ asset( 'frontEnd' ) }}/#" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

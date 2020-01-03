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
@yield('css_js')

</head>

<body>
<!-- ##### Header Area Start ##### -->

@include('FrontView.inc.header_bot')

<!-- ##### Header Area End ##### -->

<!-- ##### Right Side Cart Area ##### -->
@yield('side_cart')
<!-- ##### Right Side Cart End ##### -->

<!-- ##### Welcome Area Start ##### -->
@yield('area')
<!-- ##### Welcome Area End ##### -->

<!-- ##### Top Catagory Area Start ##### -->
@yield('catagory_area')
<!-- ##### Top Catagory Area End ##### -->

<!-- ##### CTA Area Start ##### -->
@yield('cta_area')
<!-- ##### CTA Area End ##### -->

<!-- ##### New Arrivals Area Start ##### -->
@yield('popular_product')
<!-- ##### New Arrivals Area End ##### -->

<!-- ##### Brands Area Start ##### -->
@yield('brands')
<!-- ##### Brands Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('FrontView.inc.footer')
<!-- ##### Footer Area End ##### -->

@yield('css_js')

</body>

</html>

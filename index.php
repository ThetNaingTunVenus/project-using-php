<?php 

error_reporting(1);
$con=mysqli_connect("localhost","root","","phpojt");





session_start();

if (isset($_POST['add_cart'])) {

    if (isset($_SESSION['cart'])) {

        $session_array_id = array_column($_SESSION['cart'], "id");
        if (!in_array($_GET['id'], $session_array_id)) {
            $session_array = array(
                "id" => $_GET['id'],
                "name" => $_POST['pname'],
                "price" => $_POST['price'],
                "qty" => $_POST['qty'],

            );
            $_SESSION['cart'][]=$session_array;

        }
    }else{
        $session_array = array(
            "id" => $_GET['id'],
            "name" => $_POST['pname'],
            "price" => $_POST['price'],
            "qty" => $_POST['qty'],

        );
        $_SESSION['cart'][]=$session_array;
    }
    // echo "<script>alert('Product has been successfully inserted into the cart.')</script>";
    // echo "<script>window.open('index.php','_self')</script>";

}





?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/home15-funiture.html   11 Nov 2019 12:23:42 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Template</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="template-index home15-funiture-template belle">
    <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div>
    <div class="pageWrapper">
     <!--Search Form Drawer-->
     <div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header home15-funiture-top">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <div class="currency-picker">
                        <span class="selected-currency">USD</span>
                        <ul id="currencies">
                            <li data-currency="INR" class="">INR</li>
                            <li data-currency="GBP" class="">GBP</li>
                            <li data-currency="CAD" class="">CAD</li>
                            <li data-currency="USD" class="selected">USD</li>
                            <li data-currency="AUD" class="">AUD</li>
                            <li data-currency="EUR" class="">EUR</li>
                            <li data-currency="JPY" class="">JPY</li>
                        </ul>
                    </div>
                    <div class="language-dropdown">
                        <span class="language-dd">English</span>
                        <ul id="language">
                            <li class="">German</li>
                            <li class="">French</li>
                        </ul>
                    </div>
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> Worldwide Express Shipping</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Create Account</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex home15-funiture-header">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<div class="col-3 col-sm-3 col-md-3 col-lg-8 d-block d-lg-none">
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        <i class="icon anm anm-times-l"></i>
                        <i class="anm anm-bars-r"></i>
                    </button>
                </div>
                <!--Search Icon-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-none d-lg-block">
                    <div class="site-header__search text-left">
                        <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
                <!--End Search Icon-->
                <!--Desktop Logo-->
                <div class="logo col-5 col-sm-6 col-md-6 col-lg-8 text-center">
                    <a href="#">
                        <img src="assets/images/logo-text.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                     <a href="#;" class="site-header__cart" title="Cart">
                         <i class="icon anm anm-bag-l"></i>
                         <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                     </a>
                     <!--Minicart Popup-->

                     <div id="header-cart" class="block block-cart">
                         <ul class="mini-products-list">

                            <?php 
                            // session_start();

                            $total = 0;
                            // $output ="";
                            
                            if (!empty($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $value) {
                                // code...
                                    $output.="
                                    <li class='item'>
                                    <a class='product-image' href='#'>
                                        <img src='assets/images/product-images/cape-dress-1.jpg' alt='3/4 Sleeve Kimono Dress' title='' />
                                    </a>

                                    <div class='product-details'>
                                    <a href='#' class='remove'><i class='anm anm-times-l' aria-hidden='true'></i></a>
                                    <a href='#' class='edit-i remove'><i class='anm anm-edit' aria-hidden='true'></i></a>
                                    <a class='pName' href='#'><strong>".$value['name']."</strong></a>

                                    <div class='wrapQtyBtn'>
                                    <div class='qtyField'>
                                    <span class='label'>Qty: <b>".$value['qty']."</b></span>

                                    </div>
                                    </div>
                                    <div class='priceRow'>
                                    <div class='product-price'>
                                    <span class='money'>MMK <strong>".$value['price']."</strong></span>
                                    </div>
                                    </div>
                                    </div>
                                    </li>

                                    ";
                                    $total = $total+$value['qty']*$value['price'];
                                }
                            }
                            echo "$output";

                            echo "

                            <li class='item'>
                             <div class='total'>
                                 <div class='total-in'>
                                     <span class='label'>Cart Subtotal:</span><span class='product-price'><span class='money'>MMK <strong>$total</strong> </span></span>
                                 </div>
                                 <div class='buttonSet text-center'>
                                   
                                    <a href='checkout.php' class='btn btn-secondary btn--small'>Checkout</a>
                                </div>
                            </div>
                            
                        </li>



                            ";


                            ?>






                    </div>
                </li>
            </ul>
            
        </div>
        <!--End Minicart Popup-->
    </div>
    <!--Mobile Search-->

    <!--End Mobile Search-->
</div>
</div>
<!--Desktop Menu-->
<div class="row">
    <nav class="grid__item" id="AccessibleNav">
        <ul id="siteNav" class="site-nav medium center hidearrow">




        </ul>
    </nav>
</div>
<!--End Desktop Menu-->
</div>
</div>
<!--End Header-->
<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
  <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
  <ul id="MobileNav" class="mobile-nav">





    <li class="lvl1"><a href="#"><b>Buy Now!</b></a>
    </li>
</ul>
</div>
<!--End Mobile Menu-->

<!--Body Content-->
<div id="page-content">
 <!--Image Banners-->
 <div class="section imgBanners">
     <div class="imgBnrOuter">
         <div class="container-fluid">
            <!--  <div class="row">
                 <div class="col-12 col-sm-12 col-md-12 col-lg-6 pl-0 image-banner-1">
                     <div class="inner topleft">
                         <a href="#">	
                             <img src="assets/images/collection/image-banner-home15-1.jpg" alt="200+ NEW ARRIVALS" title="200+ NEW ARRIVALS" class="blur-up lazyload" />
                             <div class="ttl">
                                 <h3>200+ NEW ARRIVALS</h3> Discover the latest designer and modern electroic and accessories from around the world. <b>Explore Now </b><i class="anm anm-long-arrow-right"></i>
                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="col-12 col-sm-12 col-md-12 col-lg-6 pr-0 image-banner-2">
                     <div class="row">
                         <div class="col-12 col-sm-6 col-md-6 col-lg-6 image-banner-3">
                             <div class="inner topleft">
                                <a href="#">	
                                    <img src="assets/images/collection/image-banner-home15-2.jpg" alt="DINNER TABLE" title="DINNER TABLE" class="blur-up lazyload" />
                                    <div class="ttl">
                                        <h5>DINNER TABLE</h5> <b>Explore Now </b><i class="anm anm-long-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                         <div class="inner topleft">
                            <a href="#">	
                                <img src="assets/images/collection/image-banner-home15-3.jpg" alt="PENDANT LIGHT" title="PENDANT LIGHT" class="blur-up lazyload" />
                                <div class="ttl">
                                    <h5>PENDANT LIGHT</h5> <b>Explore Now </b><i class="anm anm-long-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>   
                </div>
                <div class="row">
                 <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                     <div class="inner topleft">
                        <a href="#">	
                            <img src="assets/images/collection/image-banner-home15-4.jpg" alt="200+ NEW ARRIVALS" title="200+ NEW ARRIVALS" class="blur-up lazyload" />
                            <div class="ttl">
                                <h5> MID-SUMMER SALE</h5> Up to 50% off <b>Explore Now </b><i class="anm anm-long-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
</div>
</div>
<!--End Image Banners-->

<!--Custom Image Banner-->
<div class="section imgBanners">
 <div class="container-fluid">
     <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
         <a href="#">
             <img src="assets/images/collection/image-banner-home15-5.jpg" alt="Save Big On Popular Designs" title="Save Big On Popular Designs" class="blur-up lazyload" />
         </a>
     </div>
 </div>
</div>
<!--Custom Image Banner-->

<!--Hand-picked Items-->
<div class="section">
 <div class="container">
     <div class="row">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="section-header text-center">
                <h2 class="h2">Hand-picked Items</h2>
                <p>IT Device should always be comfortable.<br>And always have a piece of art that you made somewhere in the home.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
 <div class="row">
     <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <div class="grid-products">
        <div class="row">

            <?php 
            $con=mysqli_connect("localhost","root","","phpojt");
            $query = "SELECT * FROM tblitem";
            $result = mysqli_query($con,$query);

            while($row = mysqli_fetch_array($result)){?>


                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                    <div class="product-image">
                        <!--start product image -->
                        <a href="#" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="admin/image/<?= $row['image']; ?>" src="admin/image/<?= $row['image']; ?>" alt="image" title="product" />
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="admin/image/<?= $row['image']; ?>" src="admin/image/<?= $row['image']; ?>" alt="image" title="product" />
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
                        <!-- product button -->
                        <form class="variants add" action="index.php?id=<?= $row['id']; ?>" method="post">
                            <input type="text" name="pname" value="<?= $row['pname']; ?>" hidden>
                            <input type="number" name="price" value="<?= $row['price']; ?>" hidden>
                            <input type="number" name="qty" value="1" hidden>
                            <button class="btn btn-addto-cart" type="submit" name="add_cart" tabindex="0">Add To Cart</button>

                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview<?= $row['id']; ?>">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <!-- Start product button -->
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                    <i class="icon anm anm-random-r"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End product button -->
                    </div>
                    <!--End start product image -->

                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="#"><?= $row['pname']; ?></a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">MMK <?= $row['price']; ?></span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>


                <div class="modal fade quick-view-popup" id="content_quickview<?= $row['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div id="ProductSection-product-template" class="product-template__container prstyle1">
                                    <div class="product-single">
                                        <!-- Start model close -->
                                        <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
                                        <!-- End model close -->
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="product-details-img">
                                                    <div class="pl-20">
                                                        <img src="admin/image/<?= $row['image']; ?>" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="product-single__meta">
                                                    <h2 class="product-single__title"><?= $row['pname']; ?></h2>
                                                    <div class="prInfoRow">
                                                        <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                                        <div class="product-sku"> <span class="variant-sku"></span></div>
                                                    </div>
                                                    <p class="product-single__price product-single__price-product-template">


                                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                            <span id="ProductPrice-product-template"><span class="money">MMK <?= $row['price']; ?></span></span>
                                                        </span>
                                                    </p>
                                                    <div class="product-single__description rte">
                                                        <?= $row['description']; ?>
                                                    </div>

                                                    <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                                        <div class="swatch clearfix swatch-0 option1" data-option-index="0">

                                                        </div>
                                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">

                                                        </div>
                                                        <!-- Product Action -->
                                                        <div class="product-action clearfix">
                                                            <div class="product-form__item--quantity">
                                                                <div class="wrapQtyBtn">
                                                                    <div class="qtyField">
                                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>                                
                                                            <div class="product-form__item--submit">
                                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                                    <span>Add to cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Action -->
                                                    </form>
                                                    <div class="display-table shareRow">
                                                        <div class="display-table-cell">
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End-product-single-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php } ?>



        </div>
        <div class="row">





        </div>
    </div>
</div>
</div>    
</div>
</div>
<!--End Hand-picked Items-->

<!--Home LookBook Section-->
<div class="section home-lookbook">
 <!-- <div class="container-fluid">
     <div class="row">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
             <img src="assets/images/collection/home15-lookbook1.jpg" alt="" title="" />
         </div>
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
             <img src="assets/images/collection/home15-lookbook2.jpg" alt="" title="" />
         </div>
     </div>
     <div class="row">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center custom-text">
             <p class="mb-4">Your home should be a story of who you are, and be a collection of what you love. A table, a chair, a bowl of fruit and a violin; what else does a man need to be happy?</p>
             <a class="btn" href="#">View Lookbook</a>
         </div>
     </div>
 </div> -->
</div>
<!--End Home LookBook Section-->

<!--Store Information-->
<div class="section store-information">
 <div class="container-fluid">
     <div class="row">
      <ul class="display-table store-info">
          <li class="display-table-cell"> <i class="anm anm-truck-l" aria-hidden="true"></i>
            <h5>Free Shipping</h5>
            <span class="sub-text">
                Free shipping on all US order
            </span> </li>
            <li class="display-table-cell"> <i class="anm anm-phone-l" aria-hidden="true"></i>
                <h5>Online Support 24/7</h5>
                <span class="sub-text">
                    Support online 24 hours a day
                </span> </li>
                <li class="display-table-cell"> <i class="anm anm-money-bill-ar" aria-hidden="true"></i>
                    <h5>Money Return</h5>
                    <span class="sub-text">
                        Back guarantee under 7 days
                    </span> </li>
                    <li class="display-table-cell"> <i class="anm anm-gift-l" aria-hidden="true"></i>
                        <h5>Member Discount</h5>
                        <span class="sub-text">
                            On every order over $100.00
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Store Information-->
</div>
<!--End Body Content-->

<!--Footer-->
<footer id="footer" class="footer-3">
    <div class="site-footer">
       <div class="container-fluid">
        <!--Footer Links-->
        <div class="footer-top">
           <div class="row">
             <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                 <h4 class="h4">Quick Shop</h4>
                 <ul>
                     <li><a href="#">Women</a></li>
                     <li><a href="#">Men</a></li>
                     <li><a href="#">Kids</a></li>
                     <li><a href="#">Sportswear</a></li>
                     <li><a href="#">Sale</a></li>
                 </ul>
             </div>
             <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                 <h4 class="h4">Category</h4>
                 <ul>
                     <li><a href="#">About us</a></li>
                     <li><a href="#">Careers</a></li>
                     <li><a href="#">Privacy policy</a></li>
                     <li><a href="#">Terms &amp; condition</a></li>
                     <li><a href="#">My Account</a></li>
                 </ul>
             </div>
             <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                 <h4 class="h4">Customer Services</h4>
                 <ul>
                     <li><a href="#">24hr support</a></li>
                     <li><a href="#">FAQ's</a></li>
                     <li><a href="#">Contact Us</a></li>
                     <li><a href="#">Orders and Returns</a></li>
                     <li><a href="#">Support Center</a></li>
                 </ul>
             </div>
             <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                 <h4 class="h4">Contact Us</h4>
                 <ul class="addressFooter">
                     <li><i class="icon anm anm-map-marker-al"></i><p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p></li>
                     <li class="phone"><i class="icon anm anm-phone-s"></i><p>(440) 000 000 0000</p></li>
                     <li class="email"><i class="icon anm anm-envelope-l"></i><p>sales@yousite.com</p></li>
                 </ul>
             </div>
             <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="display-table">
                    <div class="display-table-cell footer-newsletter">
                        <form action="#" method="post">
                         <label class="h4">Newsletter</label>
                         <p>Be the first to hear about new trending and offers and see how you've helped.</p>
                         <div class="input-group">
                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                            <span class="input-group__btn">
                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Footer Links-->
<hr>
<div class="footer-bottom">
 <div class="row">
     <!--Footer Copyright-->
     <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="#">Developed by Thet Naing Tun (Student ID - 4475)</a></div>
     <!--End Footer Copyright-->
     <!--Footer Payment Icon-->
     <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
         <ul class="payment-icons list--inline">
          <li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
          <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
          <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
          <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
          <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
          <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
      </ul>
  </div>
  <!--End Footer Payment Icon-->
</div>
</div>
</div>
</div>
</footer>
<!--End Footer-->
<!--Scoll Top-->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
<!--End Scoll Top-->


<!-- Newsletter Popup -->
<div class="newsletter-wrap" id="popup-container">
  <div id="popup-window">
    <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
    <!-- Modal content-->
    <div class="display-table splash-bg">
      <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
      <div class="display-table-cell width60 text-center">
        <div class="newsletter-left">
          <h2>Sale Promotion</h2>
          <p>The Big Sale of Electronic Devices and IT Mobile Phone 50%</p>
          <form action="#" method="post">
            <div class="input-group">
              <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
              <span class="input-group__btn">
                  <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">See More..</span> </button>
              </span> </div>
          </form>
          <ul class="list--inline site-footer__social-icons social-icons">
            <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
            <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
<!-- End Newsletter Popup -->

<!-- Including Jquery -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery.cookie.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<!-- Including Javascript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/lazysizes.js"></script>
<script src="assets/js/main.js"></script>
<!--For Newsletter Popup-->
<script>
  jQuery(document).ready(function(){  
    jQuery('.closepopup').on('click', function () {
     jQuery('#popup-container').fadeOut();
     jQuery('#modalOverly').fadeOut();
 });

    var visits = jQuery.cookie('visits') || 0;
    visits++;
    jQuery.cookie('visits', visits, { expires: 1, path: '/' });
    console.debug(jQuery.cookie('visits')); 
    if ( jQuery.cookie('visits') > 1 ) {
       jQuery('#modalOverly').hide();
       jQuery('#popup-container').hide();
   } else {
     var pageHeight = jQuery(document).height();
     jQuery('<div id="modalOverly"></div>').insertBefore('body');
     jQuery('#modalOverly').css("height", pageHeight);
     jQuery('#popup-container').show();
 }
 if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
}); 

  jQuery(document).mouseup(function(e){
    var container = jQuery('#popup-container');
    if( !container.is(e.target)&& container.has(e.target).length === 0)
    {
       container.fadeOut();
       jQuery('#modalOverly').fadeIn(200);
       jQuery('#modalOverly').hide();
   }
});

		/*--------------------------------------
			Promotion / Notification Cookie Bar 
		  -------------------------------------- */
  if(Cookies.get('promotion') != 'true') {   
    $(".notification-bar").show();         
}
$(".close-announcement").on('click',function() {
   $(".notification-bar").slideUp();  
   Cookies.set('promotion', 'true', { expires: 1});  
   return false;
});
</script>
<!--End For Newsletter Popup-->
</div>
</body>

<!-- belle/home15-funiture.html   11 Nov 2019 12:24:28 GMT -->
</html>
<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-ie.css">

    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jqcycle.js"></script>
    <?php wp_head(); ?>
</head>
<body>

<header id="header">
    <div class="header-content">
        <nav class="menu left-menu">

            <?php  wp_nav_menu(
                                array(
                                        'theme_location' => 'left',
                                        "container"=>false,
                                        "menu_class"=>""
                                )
                                ); ?>
        </nav>
        <div class="logo">
            <a href="<?php echo get_site_url(); ?>" title="The Captain"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png" alt="The Captain"/></a>
        </div>
        <nav class="menu right-menu">
          <?php  wp_nav_menu( array( 'theme_location' => 'right' ,"container"=>false, "menu_class"=>"") ); ?>
        </nav>
        <div class="clear"></div>
    </div>

    <div class="header-panel">
        <ul>
            <li><a href="#" title="Login" class="login-button"><img src="<?php echo get_template_directory_uri(); ?>/img/header-user-icon.png" alt="Login"/></a></li>
            <li><a href="#" title="Cart" class="cart-button"><img src="<?php echo get_template_directory_uri(); ?>/img/header-cart-icon.png" alt="Cart"/><span>3</span></a></li>
            <li><form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <label>
                    <input type="text" class="search-field" placeholder="Product search.." value="" name="s" title="Search for:" style="display:none" />
                </label>
                <input type="submit" title="Search" class="search-button">
            </form></li>
        </ul>
    </div>

    <div class="login">

        <form class="form" action="<?php echo get_site_url(); ?>/wp-login.php" method="post">
            <label>E-mail</label>
            <input type="text" name="log" placeholder="Enter e-mail..."/>
            <label>Password</label>
            <input type="password" name="pwd" placeholder="Enter password..."/>
			<span class="remember-password">
				<input type="checkbox" name="rememberme" value="forever"/>
				<label>Remember password</label>
			</span>
            <input type="submit" name="sign_in" value="Sign In" class="login-button"/>
            <input type="hidden" name="redirect_to" value="<?php echo get_site_url(); ?>">
        </form>
        <a href="#" class="forgot-password">Forgot password</a>
        <span class="or"><span>or</span></span>
        <input type="submit" name="sign_out" value="Sign Up" class="login-button"/>
		<span class="alternative">
			Or Sign In with <a href="#" title="Twitter">Twitter</a> or <a href="#" title="Facebook">Facebook</a>
		</span>
    </div>

    <div class="cart">
        <div class="product">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cart-product.jpg" alt="Product title" class="product-image"/>
            <div class="product-description">
                <span class="product-title">CPT blue</span>
                <span class="product-price">30 EUR</span>
                <span class="product-quantity">1 pcs</span>
            </div>
        </div>
        <div class="product">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cart-product.jpg" alt="Product title" class="product-image"/>
            <div class="product-description">
                <span class="product-title">CPT blue</span>
                <span class="product-price">30 EUR</span>
                <span class="product-quantity">1 pcs</span>
            </div>
        </div>
        <div class="product">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cart-product.jpg" alt="Product title" class="product-image"/>
            <div class="product-description">
                <span class="product-title">CPT blue</span>
                <span class="product-price">30 EUR</span>
                <span class="product-quantity">1 pcs</span>
            </div>
        </div>
		<span class="cart-total">
			3 pcs | total: 90 EURO
		</span>
        <div class="cart-buttons">
            <a href="#" class="continue-shopping">Continue Shopping</a>
            <a href="#" class="buy">Buy</a>
			<span>
				or checkout with
				<img src="<?php echo get_template_directory_uri(); ?>/img/paypal.jpg"/>
			</span>
        </div>
    </div>
</header>

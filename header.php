<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--Add css lib--> 
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.html" />
    <link rel="shortcut icon" type="image/png" href="favicon.html" />

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i%7CMr+Dafoe%7CPoppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.bxslider.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/font.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/colorbox.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style-html.css" />

    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/responsive.css" />

    <!-- color skin -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/color-skin/default.css" />
		
<?php wp_head(); ?>

<script>
jQuery(document).ready(function(){
	jQuery('.feature-cat .col-md-3').eq(1).addClass('col-md-6 col-sm-6 col-xs-12 second');
	jQuery('.feature-cat .col-md-3').eq(1).removeClass('col-md-3');
	jQuery('.feature-cat .col-sm-3').eq(1).removeClass('col-sm-3');
	//jQuery('.feature-cat .col-xs-12').eq(1).removeClass('col-xs-12');
	jQuery('.feature-cat .first').eq(1).removeClass('first');
	jQuery('.feature-cat .col-md-3').eq(1).addClass('mb-10');
});


/* jQuery(document).ready(function() {
//Quick View        
jQuery("#quickview").fancybox({
    'width': 1000,
    'height': 600,
    fitToView: false,
    autoSize: false,
    'closeBtn': true,
    'scrolling': 'no',
    'type':'iframe',
    'iframe': {'scrolling': 'no'}
    });     
}); */

</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
	<!--Header: Begin-->
	<header class="home-header">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--button-->

                <a class="navbar-brand" href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="container">
                        <?php
							wp_nav_menu( array(
								'menu'              => '',
								'theme_location'    => 'top',
								'depth'             => 1,
								/* 'container'         => 'div', */
								'container_class'   => 'collapse navbar-collapse', /*yadi ul ke uppar div ho to ye option use hota he */
								'container_id'      => 'bs-example-navbar-collapse-1', /*yadi ul ke uppar div ho to ye option use hota he */
								//'menu_class'        => 'clear', /* ye option ul ki class ke liye hota he. */
								'container'       => 'ul',
								//'link_before' => '<span>',
								//'link_after'  => '</span>',
								//'before' => '123',
								//'after' => '456',
								'menu_class'      => 'nav navbar-nav',
								//'fallback_cb'       => 'Primary_Walker_Nav_Menu::fallback',
								'walker'            => new Primary_Walker_Nav_Menu()
								)
							);
					    ?>
                 </div>
                <!--container-->                
            </div>
            <!-- /.navbar-collapse -->

            <div class="header-right"> 
                  <form class="searchbox navbar-form">
                      <input type="search" placeholder="Search..." name="search" class="searchbox-input" onkeyup="buttonUp();" required>
                      <input type="submit" class="searchbox-submit" value="">
                      <span class="searchbox-icon"><i class="pe-7s-search"></i></span>
                  </form>

                  <ul class="site-header-cart menu">
                      <li class="dropdown">
                          <a href="#" data-toggle="dropdown" title="">
                              <span class="count rounded-crcl">1</span>
                              <i class="pe-7s-like icon"></i>
                          </a>

                          <div class="dropdown-menu widget woocommerce widget_shopping_cart canvas">

                              <button type="button" class="close">
                                  <span>&times;</span>
                              </button>
                              <!--close-->

                              <div class="widget_shopping_cart_content">
                                  <h6 class="title">Your Wishlist (4 Items)</h6>
                                  <ul class="cart_list product_list_widget ">
                                      <li class="mini_cart_item">
                                          <table>
                                              <tr>
                                                  <td class="figure">
                                                      <figure>
                                                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/cart-widget-product.jpg" alt="">
                                                      </figure>
                                                  </td>

                                                  <td class="content">
                                                      <a href="#" class="remove" title="Remove this item">
                                                          <i class="fa fa-close"></i>
                                                      </a>

                                                      <h6 class="product-title">
                                                         Ladies black formal jacket
                                                     </h6>

                                                      <ul class="product-info m-0">
                                                          <li>Price : $189.00</li>
                                                      </ul>
                                                      <a href="#" class="btn btn-default btn-bg text-uppercase">add to cart</a>
                                                  </td>
                                              </tr>
                                          </table>
                                      </li>
                                      <!--single item-->

                                      <li class="mini_cart_item">
                                          <table>
                                              <tr>
                                                  <td class="figure">
                                                      <figure>
                                                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/cart-widget-product.jpg" alt="">
                                                      </figure>
                                                  </td>

                                                  <td class="content">
                                                      <a href="#" class="remove" title="Remove this item">
                                                          <i class="fa fa-close"></i>
                                                      </a>

                                                      <h6 class="product-title">
                                                         Ladies black formal jacket
                                                     </h6>

                                                      <ul class="product-info m-0">
                                                          <li>Price : $189.00</li>
                                                      </ul>
                                                      <a href="#" class="btn btn-default btn-bg text-uppercase">add to cart</a>
                                                  </td>
                                              </tr>
                                          </table>
                                      </li>
                                      <!--single item-->

                                      <li class="mini_cart_item">
                                          <table>
                                              <tr>
                                                  <td class="figure">
                                                      <figure>
                                                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/cart-widget-product.jpg" alt="">
                                                      </figure>
                                                  </td>

                                                  <td class="content">
                                                      <a href="#" class="remove" title="Remove this item">
                                                          <i class="fa fa-close"></i>
                                                      </a>

                                                      <h6 class="product-title">
                                                         Ladies black formal jacket
                                                     </h6>

                                                      <ul class="product-info m-0">
                                                          <li>Price : $189.00</li>
                                                      </ul>
                                                      <a href="#" class="btn btn-default btn-bg text-uppercase">add to cart</a>
                                                  </td>
                                              </tr>
                                          </table>
                                      </li>
                                      <!--single item-->

                                      <li class="mini_cart_item">
                                          <table>
                                              <tr>
                                                  <td class="figure">
                                                      <figure>
                                                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/cart-widget-product.jpg" alt="">
                                                      </figure>
                                                  </td>

                                                  <td class="content">
                                                      <a href="#" class="remove" title="Remove this item">
                                                          <i class="fa fa-close"></i>
                                                      </a>

                                                      <h6 class="product-title">
                                                         Ladies black formal jacket
                                                     </h6>

                                                      <ul class="product-info m-0">
                                                          <li>Price : $189.00</li>
                                                      </ul>

                                                      <a href="#" class="btn btn-default btn-bg text-uppercase">add to cart</a>
                                                  </td>
                                              </tr>
                                          </table>
                                      </li>
                                      <!--single item-->
                                  </ul>
                                  <!-- end product list -->

                                  <div class="buttons">
                                      <a href="#" class="button">view cart</a>
                                      <a href="#" class="button checkout">checkout</a>
                                  </div>
                                  <!--buttons-->
                              </div>
                          </div>
                      </li>
                      <!--wish list-->

                      <li class="dropdown">
                          <a href="#" data-toggle="dropdown" title="">
                              <span class="count rounded-crcl">1</span>
                              <i class="pe-7s-shopbag icon"></i>
                          </a>

                          <div class="dropdown-menu widget woocommerce widget_shopping_cart canvas">

                              <button type="button" class="close">
                                  <span>&times;</span>
                              </button>
                              <!--close-->

                              <div class="widget_shopping_cart_content">
                                  <h6 class="title">Your Shopping Cart (4 Items)</h6>
                                  <ul class="cart_list product_list_widget ">
                                      <li class="mini_cart_item">
                                          <table>
                                              <tr>
                                                  <td class="figure">
                                                      <figure>
                                                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/cart-widget-product.jpg" alt="">
                                                      </figure>
                                                  </td>

                                                  <td class="content">
                                                      <a href="#" class="remove" title="Remove this item">
                                                          <i class="fa fa-close"></i>
                                                      </a>

                                                      <h6 class="product-title">
                                                         Ladies black formal jacket
                                                     </h6>

                                                      <ul class="product-info m-0">
                                                          <li>Price : $189.00</li>
                                                          <li>Qty : 2 </li>
                                                          <li>Size : XL</li>
                                                      </ul>
                                                  </td>
                                              </tr>
                                          </table>
                                      </li>
                                      <!--single item-->

                                      <li class="mini_cart_item">
                                          <table>
                                              <tr>
                                                  <td class="figure">
                                                      <figure>
                                                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/cart-widget-product.jpg" alt="">
                                                      </figure>
                                                  </td>

                                                  <td class="content">
                                                      <a href="#" class="remove" title="Remove this item">
                                                          <i class="fa fa-close"></i>
                                                      </a>

                                                      <h6 class="product-title">
                                                         Ladies black formal jacket
                                                     </h6>

                                                      <ul class="product-info m-0">
                                                          <li>Price : $189.00</li>
                                                          <li>Qty : 2 </li>
                                                          <li>Size : XL</li>
                                                      </ul>
                                                  </td>
                                              </tr>
                                          </table>
                                      </li>
                                      <!--single item-->

                                      <li class="mini_cart_item">
                                          <table>
                                              <tr>
                                                  <td class="figure">
                                                      <figure>
                                                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/cart-widget-product.jpg" alt="">
                                                      </figure>
                                                  </td>

                                                  <td class="content">
                                                      <a href="#" class="remove" title="Remove this item">
                                                          <i class="fa fa-close"></i>
                                                      </a>

                                                      <h6 class="product-title">
                                                         Ladies black formal jacket
                                                     </h6>

                                                      <ul class="product-info m-0">
                                                          <li>Price : $189.00</li>
                                                          <li>Qty : 2 </li>
                                                          <li>Size : XL</li>
                                                      </ul>
                                                  </td>
                                              </tr>
                                          </table>
                                      </li>
                                      <!--single item--> 
                                  </ul>
                                  <!-- end product list -->

                                  <div class="cart-collaterals">
                                      <div class="cart_totals"> 
                                          <table class="shop_table shop_table_responsive">
                                              <tbody>
                                                  <tr class="cart-subtotal">
                                                      <th>Cart subtotal </th>
                                                      <td data-title="Subtotal">$378.00
                                                      </td>
                                                  </tr>

                                                  <tr class="shipping">
                                                      <th> Shipping + Handling  </th>
                                                      <td data-title="Shipping">
                                                          <span class="shipping text-green">$18.00</span>
                                                      </td>
                                                  </tr>

                                                  <tr class="order-total">
                                                      <th>grand Total</th>
                                                      <td data-title="Total"> $190</td>
                                                  </tr>
                                              </tbody>
                                          </table>  
                                      </div>
                                  </div>

                                  <div class="buttons">
                                      <a href="#" class="button">view cart</a>
                                      <a href="#" class="button checkout">checkout</a>
                                  </div>
                                  <!--buttons-->
                              </div>
                          </div>
                      </li>
                      <!--cart-->
                  </ul>

                  <ul class="login">
                      <li>
                        <a href="#" class="btn-login trigger-modal" data-show="#login"><i class="pe-7s-users"></i><span>Login</span></a>
                      </li>
                      
                      <li class="register">
                        <a href="#" data-show="#register" class="btn-signup trigger-modal"><i class="fa fa-edit"></i><span>register</span></a>
                      </li>
                  </ul> 
            </div>
            <!--right-->
        </nav>
		
		<?php
		/* show page current title */
			$page_title = $wp_query->post->post_title;
			echo $page_title;
		?>

    </header>
    <!--header-->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">

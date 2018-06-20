<?php
/* Template Name: Home */
get_header();
?>
	    <div class="main-banner home-banner">
        <div class="fixed-banner">
            <div class="slider-wrapper">
                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"> 
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                      <div class="active item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/slide1.jpg" alt="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/girl.png" alt="" class="image-layer slide-fadein">

                        <div class="carousel-caption">
                          <h2 class="text-uppercase mb-0 color-default slide-sd  layer1">take a peak</h2>
                          <h6 class="text-uppercase mb-40 slide-sd layer2">at our fall essentials</h6>

                          <a href="#" class="btn btn-default primary-bg text-uppercase slide-sd  layer3">
                            view collection <i class="fa fa-long-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                      <!--item-->


                      <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/slide2.jpg" alt="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/banner2.png" alt="" class="image-layer slide slide-fadein">

                        <div class="carousel-caption">
                          <h5 class="text-uppercase mb-0 text-white slide-sd layer1">Give a new looks to your feet</h5>
                          <h2 class="text-uppercase mb-30 text-white slide-sd layer2">summer collection</h2>
                          <span class="primary-bg text-uppercase dis text-white slide-sd layer3"> 50% discount</span>
                        </div>
                      </div>
                      <!--item-->
                  </div>

                  <!-- Carousel nav -->
                  <a class="carousel-control left" href="#carousel" data-slide="prev">
                    <i class="pe-7s-angle-left"></i>
                  </a>
                  <a class="carousel-control right" href="#carousel" data-slide="next">
                    <i class="pe-7s-angle-right"></i>
                  </a>
              </div>

            </div>
            <!--banner wrapper-->
        </div>
    </div>
    <!--main banner-->

    <main class="main primary-padding">
        <section class="extra-info p-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="wrap">
                            <figure>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/shipping-icon.jpg" alt="Shipping">
                            </figure>
                            <!--figure-->

                            <div class="content">
                                <h6 class="font-ar mb-0">free shipping</h6> A wonderful serenity
                            </div>
                            <!--content-->
                        </div>
                    </div>
                    <!--single feature-->

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="wrap">
                            <figure>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/secure-icon.jpg" alt="Secure">
                            </figure>
                            <!--figure-->

                            <div class="content">
                                <h6 class="font-ar mb-0">secure payment</h6> A wonderful serenity Feel
                            </div>
                            <!--content-->
                        </div>
                    </div>
                    <!--single feature-->

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="wrap">
                            <figure>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/money-back-icon.jpg" alt="Money back">
                            </figure>
                            <!--figure-->

                            <div class="content">
                                <h6 class="font-ar mb-0">30 days money back</h6> A wonderful serenity Feel the
                            </div>
                            <!--content-->
                        </div>
                    </div>
                    <!--single feature-->

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="wrap">
                            <figure>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/guarantee-icon.jpg" alt="Gurantee">
                            </figure>
                            <!--figure-->

                            <div class="content">
                                <h6 class="font-ar mb-0">1 year warranty</h6> Feel the presence of the
                            </div>
                            <!--content-->
                        </div>
                    </div>
                    <!--single feature-->
                </div>
            </div>
        </section>
        <!--extra info-->
		
		<section class="feature-cat fashion p-pb">
           <div class="container">
              <div class="row costom-row">
		
		<?php
			$get_featured_cats = array(
				'taxonomy'     => 'product_cat',
				'orderby'      => 'name',
				'hide_empty'   => '0',
				'include'      => $cat_array
			);
			$all_categories = get_categories( $get_featured_cats );
			$j = 1;
			foreach ($all_categories as $cat) {
				$cat_id   = $cat->term_id;
				$cat_link = get_category_link( $cat_id );
				
				$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
				$image = wp_get_attachment_url( $thumbnail_id );

				//echo $cat->name; // Get Category Name
				//echo $cat->description; // Get Category Description
	    ?>

                    <div class="col-md-3 col-sm-3 col-xs-12 first">
                        <div class="wrap image-effect overlay">
                            <div class="disc text-center">
                                <div class="inner">
                                    <div class="content">
                                        <a href="<?php echo $cat_link; ?>" class="cover">&nbsp;</a>
                                        <h4><?php echo $cat->name; ?></h4>
                                        <div class="btn-wrap">
                                            <span class="btn btn-default">SHOP NOW <i class="fa fa-long-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--disc-->

                            <figure>
							<?php
								if ( $image ) {
									echo '<img src="' . $image . '" alt="Category" />';
								}
							?>
                                <!--<img src="<?php //bloginfo('template_directory'); ?>/assets/images/fashion/cat1.jpg" alt="Category">-->
                            </figure>
                        </div>
                    </div>
                    <!--cat 1-->
					
					<?php 	
									$j++;
							}
					// Reset Post Data
							wp_reset_query();
					?>

                    <!--<div class="col-md-6 col-sm-6 col-xs-12 second">
                        <div class="wrap image-effect overlay">
                            <div class="disc text-center">
                                <div class="inner ">
                                    <div class="content bottom-align">
                                        <div class="inline">
                                            <a href="#" class="cover">&nbsp;</a>
                                            <h4> shop latest summer collection </h4>

                                            <div class="btn-wrap">
                                                <span class="btn btn-default">SHOP NOW <i class="fa fa-long-arrow-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--disc-->

                            <!--<figure>
                                <img src="<?php //bloginfo('template_directory'); ?>/assets/images/fashion/cat2.jpg" alt="Category">
                            </figure>
                        </div>
                    </div>
                    <!--cat 2-->

                    <!--<div class="col-md-3 col-sm-3 col-xs-12 mb-10 third">
                        <div class="wrap image-effect overlay">
                            <div class="disc text-center">
                                <div class="inner">
                                    <div class="content">
                                        <a href="#" class="cover">&nbsp;</a>
                                        <h4> trendy items</h4>
                                        <div class="btn-wrap">
                                            <span class="btn btn-default">SHOP NOW <i class="fa fa-long-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--disc-->

                            <!--<figure>
                                <img src="<?php //bloginfo('template_directory'); ?>/assets/images/fashion/cat3.jpg" alt="Category">
                            </figure>
                        </div>
                    </div>
                    <!--cat 3-->

                    <!--<div class="col-md-3 col-sm-3 col-xs-12 forth">
                        <div class="wrap image-effect overlay">
                            <div class="disc text-center">
                                <div class="inner">
                                    <div class="content">
                                        <a href="#" class="cover">&nbsp;</a>
                                        <h4>accessories</h4>
                                        <div class="btn-wrap">
                                            <span class="btn btn-default">SHOP NOW <i class="fa fa-long-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--disc-->

                            <!--<figure>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/cat4.jpg" alt="Category">
                            </figure>
                        </div>
                    </div>
                    <!--cat 4-->
                </div>
            </div>
        </section>
        <!--feature category-->

        <section class="popular-product p-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="title-main text-uppercase text-center mb-60">
                            <h2>Popular products</h2>
                        </div>
                    </div>
                    <!--title-->

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <ul class="products product-slide">
								<?php
								global $product; $woocommerce;
								//$categories= $woocommerce->get('products/categories', array( 'per_page' => 10, 'lang' => 'all' ) );
									//print_r($categories);
								
										$args = array(
											'post_type' => 'product',
											'meta_key' => 'total_sales',
											'orderby' => 'meta_value_num',
											'posts_per_page' => 7
										);
										$loop = new WP_Query( $args );
										//print_r($loop);
										while ( $loop->have_posts() ) : $loop->the_post(); 
										global $product;
								?>
                            <li class="product">
                                <figure>
                                    <div class="icons">
									
									<?php
										global $product;
										$link = $product->get_permalink();
										global $yith_wcwl;
										$product_id = yit_get_product_id( $product );

										 /* if ( $product->product_type == 'simple' ) {
            ?>
            <form action="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="cart" method="post" enctype='multipart/form-data'>
                <?php woocommerce_quantity_input(); ?>
                <button type="submit" data-quantity="1" data-product_id="<?php echo $product->id; ?>"
                    class="button alt ajax_add_to_cart add_to_cart_button product_type_simple"><?php echo $label; ?></button>
            </form>
										 <?php } */ ?>

                                        <a href="<?php echo $link; ?>" class="btn"><i class="pe-7s-cart"></i></a>
                                        <!--<a href="#" class="btn"><i class="pe-7s-like"></i></a>-->
										<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
										
										
										<?php
										            global $WCPC,$post;
													$view_compare_link='';
													if(isset($WCPC->settings['show_compare_item']) && $WCPC->settings['show_compare_item'] == 'popup'){
														$view_compare_link = '#wcpc_compare_popup';
													}else{
														$view_compare_link = $wcpc_compare_url;
													}
													?>

													<div class="wcpc_compare_btn_wrap add-compare-<?php echo $product_id ?>">
														<div class="wcpc_compare <?php echo ( $exists ) ? 'hide': 'show' ?>" style="display:<?php echo ( $exists ) ? 'none': 'block' ?>">
															<a href="#" class="wcpc_add_to_compare_btn <?php echo $class ?> btn" data-product_id="<?php echo $product_id ?>" data-wp_nonce="<?php echo $wpnonce ?>">
															<i class="pe-7s-edit"></i>
																<?php //echo $label ?>
															</a>
														</div>
														<?php if( $exists ): ?>
															<div class="wcpc_add_item_view_compare_list-<?php echo $product_id ?> wcpc_add_item_view_compare_message"><a class="added_to_compare wc-forward <?php echo $class ?>" href="<?php echo $view_compare_link; ?>"><?php echo $label_view_compare ?></a></div>
														<?php endif ?>
													</div>
													
													
                                        <!--<a href="#" class="btn"><?php //echo do_shortcode('[wcpc_compare]'); ?></a>-->
                                        <!--<a type="button" href="<?php //echo $product_id = $product->id; ?>" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="pe-7s-look"></i></a>-->
										<?php //add_shortcode( 'yith_quick_view', array( $this, 'quick_view_shortcode' ) );?>
										<?php do_action( 'woocommerce_custom_action_quick_view' ); //echo 'hi'. do_shortcode('[yith_quick_view]'); ?>
                                    </div>
                                    <!--icons-->

                                    <div class="product-wrap base-align">
										<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					 
											<?php if (has_post_thumbnail( $loop->post->ID ))
													echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
												  else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="product placeholder Image" width="65px" height="115px" />'; ?>
										</a>
									</div>
								</figure>

                                       <!-- <a href="09-rab-shop-product-single.html">&nbsp;</a>
                                        <img src="<?php //bloginfo('template_directory'); ?>/assets/images/fashion/fp1.png" alt="Product">
                                    </div>
                                
                                <!--figure-->

                                <div class="content">
                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <div class="bottom">
									<?php
										global $woocommerce;
										$currency = get_woocommerce_currency_symbol();
										$price = get_post_meta( get_the_ID(), '_regular_price', true);
										//print_r($price);
										$sale = get_post_meta( get_the_ID(), '_sale_price', true);
									?>
									
									 <div class="price">
										<?php if($sale) : ?>
											<del><?php echo $currency; echo $price; ?></del> <ins><?php echo $currency; echo $sale; ?> </ins> 
										<?php elseif($price) : ?>
											<ins><?php echo $currency; echo $price; ?></ins>   
										<?php endif; ?>
									</div>
									<?php //print_r($product); ?>
                                        <!--<div class="price">
                                            <del>$180</del>
                                            <ins>$170</ins>
                                        </div>
                                        <!--price-->

                                        <span class="star-rating">
											<ul class="woocommerce">
												<li>
												<?php $average = $product->get_average_rating(); ?>
												<?php echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'woocommerce' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%">
												<strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>'; ?>
												</li>
											</ul>

											<?php //global $product; echo wc_get_rating_html( $product->get_average_rating() ); ?>

                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star-half-empty "></i>
                                        </span>
                                        <!--star-->
                                    </div>
                                </div>
                            </li>
                            <!--single product-->
							
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

                            <!--<li class="product">
                                <figure>
                                    <div class="icons">
                                        <a href="#" class="btn"><i class="pe-7s-cart"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-edit"></i></a>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#quick-view"><i class="pe-7s-look"></i></a>
                                    </div>
                                    <!--icons

                                    <div class="product-wrap base-align">
                                        <a href="09-rab-shop-product-single.html">&nbsp;</a>
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/fp2.png" alt="Product">
                                    </div>
                                </figure>
                                <!--figure

                                <div class="content">
                                    <h6><a href="#">Ladies black formal jacket</a></h6>
                                    <div class="bottom">
                                        <div class="price">
                                            <del>$189</del>
                                            <ins>$170</ins>
                                        </div>
                                        <!--price

                                        <span class="star-rating">
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star-half-empty "></i> 
                                        </span>
                                        <!--star
                                    </div>
                                </div>
                            </li>
                            <!--single product-->

                            <!--<li class="product">
                                <figure>
                                    <div class="icons">
                                        <a href="#" class="btn"><i class="pe-7s-cart"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-edit"></i></a>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#quick-view"><i class="pe-7s-look"></i></a>
                                    </div>
                                    <!--icons

                                    <div class="product-wrap base-align">
                                        <a href="09-rab-shop-product-single.html">&nbsp;</a>
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/fp3.png" alt="Product">
                                    </div>
                                </figure>
                                <!--figure

                                <div class="content">
                                    <h6><a href="#">Ladies black formal jacket</a></h6>
                                    <div class="bottom">
                                        <div class="price">
                                            <del>$189</del>
                                            <ins>$170</ins>
                                        </div>
                                        <!--price

                                        <span class="star-rating">
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star-half-empty "></i> 
                                        </span>
                                        <!--star
                                    </div>
                                </div>
                            </li>
                            <!--single product-->

                            <!--<li class="product">
                                <figure>
                                    <div class="icons">
                                        <a href="#" class="btn"><i class="pe-7s-cart"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-edit"></i></a>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#quick-view"><i class="pe-7s-look"></i></a>
                                    </div>
                                    <!--icons

                                    <div class="product-wrap base-align">
                                        <a href="09-rab-shop-product-single.html">&nbsp;</a>
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/fp4.png" alt="Product">
                                    </div>
                                </figure>
                                <!--figure

                                <div class="content">
                                    <h6><a href="#">Ladies black formal jacket</a></h6>
                                    <div class="bottom">
                                        <div class="price">
                                            <del>$189</del>
                                            <ins>$170</ins>
                                        </div>
                                        <!--price

                                        <span class="star-rating">
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star-half-empty "></i> 
                                        </span>
                                        <!--star
                                    </div>
                                </div>
                            </li>
                            <!--single product-->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--popular product-->

        <div class="promo-banner p-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                        <figure>
                            <a href="shop" class="image-effect">
                              <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/promo-banner.jpg" alt="Promo 
                              product">
                            </a>
                        </figure>
                        <!--figure--> 
                    </div>
                </div>
            </div>
        </div>
        <!--promo banner-->

        <section class="new-arrival p-pb fashion">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="title-main text-uppercase text-center mb-60">
                            <h2>Hot New Arrivals</h2>
                        </div>
                    </div>
                    <!--title-->

                    <div class="col-md-6 col-sm-6 col-xs-12 left">
                        <ul class="products">
                            <li class="product big">
                                <figure>
                                    <div class="icons">
                                        <a href="#" class="btn"><i class="pe-7s-cart"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-edit"></i></a>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#quick-view"><i class="pe-7s-look"></i></a>
                                    </div>
                                    <!--icons-->

                                    <div class="product-wrap base-align">
                                        <a href="09-rab-shop-product-single.html">&nbsp;</a>
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/hp1.png" alt="Product">
                                    </div>
                                </figure>
                                <!--figure-->

                                <div class="content">
                                    <h6><a href="#">Ladies black formal jacket</a></h6>
                                    <div class="bottom">
                                        <div class="price">
                                            <del>$189</del>
                                            <ins>$170</ins>
                                        </div>
                                        <!--price-->

                                        <span class="star-rating">
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star-half-empty "></i> 
                                        </span>
                                        <!--star-->
                                    </div>
                                </div>
                            </li>
                            <!--single product-->
                        </ul>

                        <div class="subscribe-form  sec-bg">
                            <h4>Subscribe to our Newsletter!</h4>
                            <div class="content-wrap">
                                <p>
                                    While lorem ipsum is a dummy the lovely valley teems with vapour around me, and the meridia sun strikes the upper surface
                                </p>
                            </div>
                            <!--content-->

                            <form action="#" class="form-inline">
                                <div class="form-group">
                                    <input type="text" placeholder="Email Address">
                                </div>
                                <button type="submit">
                                    <i class="fa fa-envelope"></i> SUBSCRIBE
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--left-->

                    <div class="col-md-6 col-sm-6 col-xs-12 right">
                        <ul class="products">
							<?php
								//global $wpdb;
								
									$args1 = array(
									'post_type' => 'product',
									//'stock' => 1,
									'posts_per_page' => 4,
									'orderby' =>'date',
									'order' => 'DESC'
									);
									$loop2 = new WP_Query( $args1 );

									while ( $loop2->have_posts() ) : $loop2->the_post();

									global $product;

								/* $all_product_data = $wpdb->get_results("SELECT ID,post_title,post_content,post_author,post_date_gmt FROM `" . $wpdb->prefix . "posts` where post_type='product' and post_status = 'publish'"); */
							?>
								<!--<ul class="products">
								<?php /*
								
							You need to create a new loop for that. Here's the code I use for displaying products from a specific category on the home page:
								
									$args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'product_cat' => 'shoes', 'orderby' => 'rand' );
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

										<h2>Shoes</h2>

											<li class="product">    

												<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

													<?php woocommerce_show_product_sale_flash( $post, $product ); ?>

													<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

													<h3><?php the_title(); ?></h3>

													<span class="price"><?php echo $product->get_price_html(); ?></span>                    

												</a>

												<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

											</li>

								<?php endwhile; ?>
								<?php wp_reset_query(); */ ?>
							</ul><!--/.products-->
								
							<li class="product">
                                <figure>
                                    <div class="icons">
										<?php
											global $product;
											global $yith_wcwl;
											$product_id = yit_get_product_id( $product );
										?>
                                        <!--<a href="#" class="btn"><i class="pe-7s-cart"></i></a>-->
										<?php do_action('custom_func_add_to'); ?>

                                        <!--<a href="#" class="btn"><i class="pe-7s-like"></i></a>-->
										<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>

                                        <!--<a href="#" class="btn"><i class="pe-7s-edit"></i></a>-->
										<?php
											global $WCPC,$post;
											$view_compare_link='';
											if(isset($WCPC->settings['show_compare_item']) && $WCPC->settings['show_compare_item'] == 'popup'){
												$view_compare_link = '#wcpc_compare_popup';
											}else{
												$view_compare_link = $wcpc_compare_url;
											}
											?>

											<div class="wcpc_compare_btn_wrap add-compare-<?php echo $product_id ?>">
												<div class="wcpc_compare <?php echo ( $exists ) ? 'hide': 'show' ?>" style="display:<?php echo ( $exists ) ? 'none': 'block' ?>">
													<a href="#" class="wcpc_add_to_compare_btn <?php echo $class ?> btn" data-product_id="<?php echo $product_id ?>" data-wp_nonce="<?php echo $wpnonce ?>">
													<i class="pe-7s-edit"></i>
														<?php //echo $label ?>
													</a>
												</div>
												<?php if( $exists ): ?>
													<div class="wcpc_add_item_view_compare_list-<?php echo $product_id ?> wcpc_add_item_view_compare_message"><a class="added_to_compare wc-forward <?php echo $class ?>" href="<?php echo $view_compare_link; ?>"><?php echo $label_view_compare ?></a></div>
												<?php endif ?>
											</div>

                                        <!--<a href="#" class="btn" data-toggle="modal" data-target="#quick-view"><i class="pe-7s-look"></i></a>-->
										<?php do_action('woocommerce_custom_action_quick_view'); ?>
                                    </div>
                                    <!--icons-->

                                    <div class="product-wrap base-align">
                                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php if (has_post_thumbnail( $loop2->post->ID )) echo get_the_post_thumbnail($loop2->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; ?>
										</a>
                                    </div>
                                </figure>
                                <!--figure-->

                                <div class="content">
                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <div class="bottom">
										<?php
										global $woocommerce; $product;
										$currency1 = get_woocommerce_currency_symbol();
										$price1 = get_post_meta( get_the_ID(), '_regular_price', true);
										//print_r($price);
										$sale2 = get_post_meta( get_the_ID(), '_sale_price', true);
										
										//$product12 = wc_get_product($variation_id);
										
										//echo 'jjeee'.$product12;
										
										$product12 = wc_price($product->get_price());
										
										//$prices = $product->get_variation_prices(get_price());
										
										?>
										
										 <div class="price">
											<?php if($sale2) : ?>
												<del><?php echo $currency1; echo $price1; ?></del> <ins><?php echo $product12; ?> </ins> 
											<?php elseif($price1) : ?>
												<ins><?php echo $currency1; echo $price1; ?></ins>   
											<?php endif; ?>
										</div>
										<!--<span class="price"><?php //echo $product->get_price_html(); ?></span>
                                            <!--<del>$189</del>
                                            <ins>$170</ins>-->
                                        <!--price-->

                                        <span class="star-rating">
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star-half-empty "></i>
										   </span>
										
										<?php global $product; echo wc_get_rating_html( $product->get_average_rating() ); ?>
										   
                                        
										
                                        <!--star-->
                                    </div>
									<?php //woocommerce_template_loop_add_to_cart( $loop2->post, $product ); ?>
                                </div>
                            </li>
                            <!--single product-->
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

                            <!--<li class="product">
                                <figure>
                                    <div class="icons">
                                        <a href="#" class="btn"><i class="pe-7s-cart"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-edit"></i></a>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#quick-view"><i class="pe-7s-look"></i></a>
                                    </div>
                                    <!--icons

                                    <div class="product-wrap base-align">
                                        <a href="09-rab-shop-product-single.html">&nbsp;</a>
                                        <img src="<?php //bloginfo('template_directory'); ?>/assets/images/fashion/fp6.png" alt="Product">
                                    </div>
                                </figure>
                                <!--figure

                                <div class="content">
                                    <h6><a href="#">Ladies white Tee’s</a></h6>
                                    <div class="bottom">
                                        <div class="price">
                                            <del>$189</del>
                                            <ins>$170</ins>
                                        </div>
                                        <!--price

                                        <span class="star-rating">
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star-half-empty "></i> 
                                        </span>
                                        <!--star
                                    </div>
                                </div>
                            </li>-->
                            <!--single product-->

                            <!--<li class="product">
                                <figure>
                                    <div class="icons">
                                        <a href="#" class="btn"><i class="pe-7s-cart"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-edit"></i></a>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#quick-view"><i class="pe-7s-look"></i></a>
                                    </div>
                                    <!--icons

                                    <div class="product-wrap base-align">
                                        <a href="09-rab-shop-product-single.html">&nbsp;</a>
                                        <img src="<?php //bloginfo('template_directory'); ?>/assets/images/fashion/fp7.png" alt="Product">
                                    </div>
                                </figure>
                                <!--figure

                                <div class="content">
                                    <h6><a href="#">Gents stripe griped Tee’s</a></h6>
                                    <div class="bottom">
                                        <div class="price">
                                            <del>$189</del>
                                            <ins>$170</ins>
                                        </div>
                                        <!--price

                                        <span class="star-rating">
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star-half-empty "></i> 
                                        </span>
                                        <!--star
                                    </div>
                                </div>
                            </li>-->
                            <!--single product-->

                            <!--<li class="product">
                                <figure>
                                    <div class="icons">
                                        <a href="#" class="btn"><i class="pe-7s-cart"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-like"></i></a>
                                        <a href="#" class="btn"><i class="pe-7s-edit"></i></a>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#quick-view"><i class="pe-7s-look"></i></a>
                                    </div>
                                    <!--icons

                                    <div class="product-wrap base-align">
                                        <a href="09-rab-shop-product-single.html">&nbsp;</a>
                                        <img src="<?php //bloginfo('template_directory'); ?>/assets/images/fashion/fp8.png" alt="Product">
                                    </div>
                                </figure>
                                <!--figure

                                <div class="content">
                                    <h6><a href="#">Ladies full body gown</a></h6>
                                    <div class="bottom">
                                        <div class="price">
                                            <del>$189</del>
                                            <ins>$170</ins>
                                        </div>
                                        <!--price

                                        <span class="star-rating">
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star"></i> 
                                           <i class="fa fa-star-half-empty "></i> 
                                        </span>
                                        <!--star
                                    </div>
                                </div>
                            </li>-->
                            <!--single product-->
                        </ul>
                    </div>
                    <!--right-->
                </div>
            </div>
        </section>
        <!--new arrival-->

        <section class="history-block p-pb">
            <div class="bg-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="wrap">
                                <div class="inner">
                                    <h2 class="text-uppercase mb-15"><span>OUR</span> history</h2>
                                    <div class="content-wrap mb-40">
                                        <p>
                                            While lorem ipsum is a dummy the lovely valley teems with vapour around me, and the meridia sun strikes the upper surface dummy the lovely valley teems with vapour around me dummy the lovely...
                                        </p>
                                    </div>
                                    <!--content-->

                                    <h4>
                                        <a href="#">Meet RAB <i class="fa fa-long-arrow-right"></i></a>
                                    </h4>
                                </div>

                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/couple.png" alt="Couple">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--history bock-->

        <section class="fashion-news p-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="title-main text-uppercase text-center mb-60">
                            <h2>fashion news</h2>
                        </div>
                    </div>
                </div>
                <!--title-->

                <div class="row news-wrap mb-20">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="wrap mb-50">
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/fn-1.jpg" alt="Fashion news">
                                </a>
                            </figure>
                            <!--figure-->

                            <div class="entry-content">
                                <h5 class="entry-title mb-10">
                                    <a href="#">Perfect for getting your shit together.</a>
                                </h5>
                                <div class="post-info  mb-15">
                                    <span><i class="pe-7s-alarm"></i> 19 Jan 2017 </span>
                                    <span><i class="pe-7s-users"></i> David Willson </span>
                                </div>
                                <!--post info-->

                                <div class="entry-post-content">
                                    <p>
                                        While lorem ipsum is a dummy the lovely valley teems with vapour around me, and the meridia sun strikes...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--singel news-->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="wrap mb-50">
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/fn-2.jpg" alt="Fashion news">
                                </a>
                            </figure>
                            <!--figure-->

                            <div class="entry-content">
                                <h5 class="entry-title mb-10">
                                    <a href="#">Perfect for getting your shit together.</a>
                                </h5>
                                <div class="post-info  mb-15">
                                    <span><i class="pe-7s-alarm"></i> 19 Jan 2017 </span>
                                    <span><i class="pe-7s-users"></i> David Willson </span>
                                </div>
                                <!--post info-->

                                <div class="entry-post-content">
                                    <p>
                                        While lorem ipsum is a dummy the lovely valley teems with vapour around me, and the meridia sun strikes...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--singel news-->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="wrap mb-50">
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/fn-3.jpg" alt="Fashion news">
                                </a>
                            </figure>
                            <!--figure-->

                            <div class="entry-content">
                                <h5 class="entry-title mb-10">
                                    <a href="#">Perfect for getting your shit together.</a>
                                </h5>

                                <div class="post-info  mb-15">
                                    <span><i class="pe-7s-alarm"></i> 19 Jan 2017 </span>
                                    <span><i class="pe-7s-users"></i> David Willson </span>
                                </div>
                                <!--post info-->

                                <div class="entry-post-content">
                                    <p>
                                        While lorem ipsum is a dummy the lovely valley teems with vapour around me, and the meridia sun strikes...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--singel news-->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="wrap mb-50">
                            <figure>
                                <a href="#" class="image-effect overlay">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/fashion/fn-4.jpg" alt="Fashion news">
                                </a>
                            </figure>
                            <!--figure-->

                            <div class="entry-content">
                                <h5 class="entry-title mb-10">
                                    <a href="#">Perfect for getting your shit together.</a>
                                </h5>

                                <div class="post-info  mb-15">
                                    <span><i class="pe-7s-alarm"></i> 19 Jan 2017 </span>
                                    <span><i class="pe-7s-users"></i> David Willson </span>
                                </div>
                                <!--post info-->

                                <div class="entry-post-content">
                                    <p>
                                        While lorem ipsum is a dummy the lovely valley teems with vapour around me, and the meridia sun strikes...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--singel news-->
                </div>
                <!--news wrap-->

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <a href="#" class="btn btn-default bdr text-uppercase">
                            view all post <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--fashion news-->

        <section class="insta-feed">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="title-main text-uppercase text-center mb-60">
                            <h2>@instagram</h2>
                        </div>
                    </div>
                    <!--title-->
                </div>
            </div>
            <!--container-->

            <div class="container instaslide-wrap ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <ul class="instaslide mb-5">
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/insta1.jpg" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/insta2.jpg" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/insta3.jpg" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/insta4.jpg" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/insta5.jpg" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/insta6.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--instagram-->
		<!-- Featured Product -->
		<?php
			$meta_query  = WC()->query->get_meta_query();
			$tax_query   = WC()->query->get_tax_query();
			$tax_query[] = array(
				'taxonomy' => 'product_visibility',
				'field'    => 'name',
				'terms'    => 'featured',
				'operator' => 'IN',
				);

			$bandproduct_args = array(
				'post_type'           => 'product',
				'post_status'         => 'publish',
				'posts_per_page'      => '-1',
				'orderby'             => 'modified',
				'order'               => 'DESC',
				'meta_query'          => $meta_query,
				'tax_query'           => $tax_query,
			);
			$loop = new WP_Query( $bandproduct_args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				   <li>
						<?php
							if ( has_post_thumbnail( $loop->post->ID ) )
								echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' );
							else
								echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />';
						?>
						<h3><?php the_title(); ?></h3>

						<?php
							echo $product->get_price_html();
							woocommerce_template_loop_add_to_cart( $loop->post, $product );
						?>
					</li>
			<?php
				endwhile;
				wp_reset_query();
			?>
			<!-- Featured Product Ends -->
    </main>
    <!--main-->
    <div class="modal fade login" id="modal-login" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <h2 class="pull-left text-uppercase">My Account</h2>

            <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            
            <div id="login" class="hidden">
              <div class="content text-center">
                  <div class="top mb-35">
                      <h4 class="contact-title">
                              <i class="pe-7s-users primary-color"></i>
                              Login Account
                          </h4>
                      <p>Enter your username and password to login.</p>
                  </div>
                  <!--top-->

                  <form action="#">
                      <div class="row">
                          <div class="form-group col-sm-12">
                              <label>Username / Email <span>*</span></label>
                              <input type="text" placeholder="Your username / Email">
                          </div>
                          <!--user name-->

                          <div class="form-group col-sm-12">
                              <label>Password <span>*</span></label>
                              <input type="password">
                          </div>
                          <!--password-->

                          <div class="form-group col-sm-6 pull-left">
                              <div class="checkbox-wrap">
                                  <input type="checkbox" value="1">
                                  <label>Remember Me</label>
                              </div>
                          </div>
                          <!--checkbox-->

                          <div class="form-group col-sm-6 pull-right">
                              <a href="#" data-show="#forgot-pass" class="primary-color pull-right btn-password trigger-modal">Lost Password?  </a>
                          </div>
                          <!--password-->

                          <div class="form-group col-sm-12">
                              <button type="submit">Login</button>
                          </div>
                          <!--button-->
                      </div>
                  </form>

                  <div class="or mb-15">OR</div>

                  <div class="row">
                      <ul class="login-social col-sm-12">
                          <li>
                              <a href="#" class="fb">
                                  <i class="fa fa-facebook"></i> FACEBOOK
                              </a>
                          </li>
                          <li>
                              <a href="#" class="twt">
                                  <i class="fa fa-twitter"></i> TWITTER
                              </a>
                          </li>
                      </ul>
                  </div>

                  Don’t have an account yet?
                  <a href="#" class="trigger-modal primary-color btn-signup" data-show="#register"> <strong>Signup Now!</strong></a>
              </div>
            </div>
            <!-- login -->

            <div id="register" class="hidden">
              <div class="content text-center sign-up-block">
                <div class="top mb-35">
                    <h4 class="contact-title">
                        <i class="pe-7s-add-user primary-color"></i>
                        Signup Account
                    </h4>
                    <p>Fill up the form below to signup an account.</p>
                </div>
                <!--top-->

                <form action="#">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>Email <span>*</span></label>
                            <input type="text" placeholder="Your username / Email">
                        </div>
                        <!--user name-->

                        <div class="form-group col-sm-12">
                            <label>Password <span>*</span></label>
                            <input type="password">
                        </div>
                        <!--password-->

                        <div class="form-group col-sm-12">
                            <label>Verify Password <span>*</span></label>
                            <input type="password">
                        </div>
                        <!--password-->

                        <div class="form-group col-sm-12">
                            <button type="submit">signup</button>
                        </div>
                        <!--button-->
                    </div>
                </form>

                <div class="or mb-15">OR</div>

                <div class="row">
                    <ul class="login-social col-sm-12">
                        <li>
                            <a href="#" class="fb">
                                <i class="fa fa-facebook"></i> FACEBOOK
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twt">
                                <i class="fa fa-twitter"></i> TWITTER
                            </a>
                        </li>
                    </ul>
                </div>
                Have an account?
                <a href="#" class="primary-color btn-login trigger-modal" data-show="#login"> <strong>Login Now!</strong></a>
              </div>
            </div>
            <!-- register -->

            <div id="forgot-pass" class="hidden">
              <div class="content text-center forget-password-block">
                <div class="top mb-35">
                    <h4 class="contact-title">
                        <i class="pe-7s-door-lock primary-color"></i>
                       Lost Password
                    </h4>
                    <p>Fill up the form below to Retrieve your password.</p>
                </div>
                <!--top-->

                <form action="#">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>Email <span>*</span></label>
                            <input type="text" placeholder="Your username / Email">
                        </div>
                        <!--user name-->
                        <div class="form-group col-sm-12">
                            <button type="submit">Reset</button>
                        </div>
                        <!--button-->
                    </div>
                </form> 
              </div>
            </div>            
            <!-- forget password -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- modal login -->
	
<?php get_footer(); ?>
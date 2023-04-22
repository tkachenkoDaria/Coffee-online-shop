<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

  <section class="offer-header-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="breadcrumb d-none d-sm-block">
            <li class="breadcrumb__list">
              <a href="# " class="breadcrumb__item">Головна </a>
            </li>
            <li class="breadcrumb__list">
              <a href="# " class="breadcrumb__item">Каталог товарів </a>
            </li>
            <li class="breadcrumb__list active">
              <span>Свіжообсмажена кава</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="header-wrapper">
          <div class="col-lg-7">
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
				<h1 class="woocommerce-products-header__title page-title">
					<?php woocommerce_page_title(); ?>
				</h1>
			<?php endif; ?>
          </div>
          <div class="col-lg-5">
            <div class="coffe-photo-catalig">
				<img class="coffe-catalog-img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/offer/slider_one.png" alt="coffe"></picture>
				<img class="coffe-catalog-img-bg" src="<?php bloginfo( 'template_url' ); ?>/assets//img/offer/slider_one_one.png" alt="coffe"></picture>
			  <!-- <picture>
				<source srcset="img/offer/slider_one.webp" type="image/webp">
			  <picture><source srcset="img/offer/slider_one_one.webp" type="image/webp"> -->
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!-- End breadcrumb -->

<!-- Filter -->
  <section class="coffe-filters">
    <div class="container">
      <div class="row">
        <div class="col-xl-3">
          <div class="coffe-filter">
            <div class="coffe-filter__wrapp">
              <div class="coffe-filter__background"></div>
              <div class="coffe-filter__contents">
                <h4 class="coffe-filter__name">Ступінь обсмажування</h4>
                <div class="coffe-filter__inner">
                  <div class="checkbox">
                    <input class="custom-checkbox" type="checkbox" id="grain-5" name="grain-5" value="five">
                    <label for="grain-5"></label>
                    <div class="grain-wrapp">
                      <span class="grain"></span>
                      <span class="grain"></span>
                      <span class="grain"></span>
                      <span class="grain"></span>
                      <span class="grain"></span>
                    </div>
                  </div>
                  <div class="checkbox">
                    <input class="custom-checkbox" type="checkbox" id="grain-4" name="grain-4" value="four">
                    <label for="grain-4"></label>
                    <div class="grain-wrapp">
                      <span class="grain"></span>
                      <span class="grain"></span>
                      <span class="grain"></span>
                      <span class="grain"></span>
                    </div>
                  </div>
                  <div class="checkbox">
                    <input class="custom-checkbox" type="checkbox" id="grain-3" name="grain-3" value="three">
                    <label for="grain-3"></label>
                    <div class="grain-wrapp">
                      <span class="grain"></span>
                      <span class="grain"></span>
                      <span class="grain"></span>
                    </div>
                  </div>
                  <div class="checkbox">
                    <input class="custom-checkbox" type="checkbox" id="grain-2" name="grain-2" value="two">
                    <label for="grain-2"></label>
                    <div class="grain-wrapp">
                      <span class="grain"></span>
                      <span class="grain"></span>
                    </div>
                  </div>
                  <div class="checkbox">
                    <input class="custom-checkbox" type="checkbox" id="grain-1" name="grain-1" value="one">
                    <label for="grain-1"></label>
                    <div class="grain-wrapp">
                      <span class="grain"></span>
                    </div>
                  </div>
                </div>




              </div>
            </div>

          </div>
        </div>


        <div class="col-xl-9">
          <div class="coffe-filter coffe-filter_two">
            <div class="coffe-filter__wrapp coffe-filter__wrapp_filter-two">
              <div class="coffe-filter__background coffe-filter__background_filter-two"></div>

              <div class="coffe-filter__content-wrapp">
                <div class="coffe-filter__content">
                  <h5 class="coffe-filter__name coffe-filter__name_filter-two">Географія</h5>
                  <div class="checkbox checkbox_filter-two">

                    <input class="custom-checkbox" type="checkbox" id="geography-1" name="geography-1" value="Africa">
                    <label for="geography-1">Африка</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="geography-2" name="geography-2" value="Yemen">
                    <label for="geography-2">Йемен</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="geography-3" name="geography-3" value="Uganda">
                    <label for="geography-3">Уганда</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="geography-4" name="geography-4" value="Ethiopia">
                    <label for="geography-4">Эфіопія</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="geography-5" name="geography-5" value="Asia">
                    <label for="geography-5">Азія</label>
                  </div>

                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="geography-6" name="geography-6"
                      value="Center.America">
                    <label for="geography-6">Центр. Америка</label>
                  </div>


                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="geography-7" name="geography-7"
                      value="Lat.America">
                    <label for="geography-7">Лат. Америка</label>
                  </div>




                </div>
                <div class="coffe-filter__content">
                  <h5 class="coffe-filter__name coffe-filter__name_filter-two">Кислинка</h5>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="kislinka-1" name="kislinka-1" value="Low">
                    <label for="kislinka-1">Низька</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="kislinka-2" name="kislinka-2" value="Medium">
                    <label for="kislinka-2">Середня</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="kislinka-3" name="kislinka-3" value="high">
                    <label for="kislinka-3">Висока</label>
                  </div>
                  <div class="coffe-filter__content">
                    <h5 class="coffe-filter__name coffe-filter__name_filter-two coffe-filter__name_size">Спосіб обробки
                    </h5>
                    <div class="checkbox checkbox_filter-two">
                      <input class="custom-checkbox" type="checkbox" id="method-1" name="method-1" value="Dry">
                      <label for="method-1">Суха</label>
                    </div>
                    <div class="checkbox checkbox_filter-two">
                      <input class="custom-checkbox" type="checkbox" id="method-2" name="method-2" value="Washed">
                      <label for="method-2">Мита</label>
                    </div>
                    <div class="checkbox checkbox_filter-two">
                      <input class="custom-checkbox" type="checkbox" id="method-3" name="method-3" value="Other">
                      <label for="method-3">Інші</label>
                    </div>
                  </div>
                </div>

                <div class="coffe-filter__content">
                  <h5 class="coffe-filter__name coffe-filter__name_filter-two">Особливі</h5>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="special-1" name="special-1" value="Popular">
                    <label for="special-1">Популярне</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="special-2" name="special-2" value="New crop">
                    <label for="special-2">Новий урожай</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="special-3" name="special-3" value="Your choice">
                    <label for="special-3">Ваш вибір</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="special-4" name="special-4" value="micro lot">
                    <label for="special-4">Мікролот</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="special-5" name="special-5"
                      value="Sort of the week">
                    <label for="special-5">Сорт тижня</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="special-6" name="special-6" value="Discounts">
                    <label for="special-6">Знижки</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="special-7" name="special-7" value="New">
                    <label for="special-7">Новинка</label>
                  </div>
                </div>

                <div class="coffe-filter__content">
                  <h5 class="coffe-filter__name coffe-filter__name_filter-two">Вид кави</h5>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="type-coffee-1" name="type-coffee-1"
                      value="Arabica">
                    <label for="type-coffee-1">Арабіка</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="type-coffee-2" name="type-coffee-2"
                      value="Robusta">
                    <label for="type-coffee-2">Робуста</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="type-coffee-3" name="type-coffee-3"
                      value="Arabica blend">
                    <label for="type-coffee-3">Суміш арабік</label>
                  </div>
                  <div class="checkbox checkbox_filter-two">
                    <input class="custom-checkbox" type="checkbox" id="type-coffee-4" name="type-coffee-4"
                      value="Arabica/Robusta blend">
                    <label for="type-coffee-4">Суміш арабіка/робуста</label>
                  </div>
                </div>

              </div>



            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
<!-- End filter -->

<!-- Cooking file -->
<section >
		<?php get_template_part( 'template-file/content', 'cooking' ); ?>
	</div>
</section>

<!-- End cooking file -->
<?php echo do_shortcode( '' ); ?>









<p>Template Coffe unical</p>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title">
			<?php woocommerce_page_title(); ?>
		</h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */

			do_action( 'woocommerce_shop_loop' );
		  wc_get_template_part( 'content', 'product-coffe' );

			global $product;
			?>
					<!-- card cofe -->
				<div class="card-coffe card-coffe_catalog">
				<!-- <span class="card-coffe__icon"></span> -->

          <!-- variation product -->
          <?php
								// do_action( 'woocommerce_before_shop_loop_item_title' );
                 do_action( 'woocommerce_after_shop_loop_item_title' );
         ?>
          <!-- end variation product -->

          <!-- taxonomy -->
            <?php
              $output = array();

              // get an array of the WP_Term objects for a defined product ID
              $terms = wp_get_post_terms( get_the_id(), 'product_tag' );

              // Loop through each product tag for the current product
              if ( count( $terms ) > 0 ) {
                foreach ( $terms as $term ) {
                  $term_id = $term->term_id; // Product tag Id
                  $term_name = $term->name; // Product tag Name

                  // Set the product tag names in an array
                  $output[] = '<span class="card-coffe__text">' . $term_name . '</span>';
                }
                // Set the array in a coma separated string of product tags for example
                $output = implode( '', $output );

                // Display the coma separated string of the product tags
                echo $output;
              }
            ?>
          <!-- end taxonomy -->

          <!-- rating -->
							<div class="card-coffe__inner">
                <picture>
                    <img class="card-coffe__photo" src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="product">
                </picture>
											<div class="card-coffe__items">

                      <?php
														$rating_count = $product->get_rating_count();
														$review_count = $product->get_review_count();
														$average = $product->get_average_rating();

														if ( $rating_count > 0 ) : ?>

                      <div class="woocommerce-product-rating card-reviews card-reviews_coffe">
                        <?php echo wc_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>
                      </div>

                  <?php endif; ?>

											<div class="response">
												<p><?php echo $product->get_average_rating(); ?></p>
                         <?php if ( comments_open() ) : ?>
                            <?php //phpcs:disable ?>
                              <div class="woocommerce-review-link" rel="nofollow">(<?php printf( _n( '%s відгук', '%s відгука', $review_count, 'woocommerce' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?>)</div>
                            <?php // phpcs:enable ?>
                          <?php endif ?>
											</div>
                <!-- end rating -->


                <!-- strength-coffe -->
											<div class="strength-coffe">
                        <?php
                          $termStrength = $product->get_attribute( 'pa_degree-of-roasting' );
                          $termStrength = get_term_by( 'slug', $termStrength, 'pa_degree-of-roasting' );
                          $imgCoffe =	get_field( 'select_degree_of_roasting', 'pa_degree-of-roasting_' . $termStrength->term_id );
                      
                          if ( $imgCoffe == 'one' ):?>
                              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/grain/grain.svg" alt="grain">
                            <?php elseif ($imgCoffe == 'two'): ?>
                              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/grain/grain-2.svg" alt="grain-two">
                            <?php elseif ($imgCoffe == 'three'): ?>
                              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/grain/grain-3.svg" alt="grain-three">
                            <?php elseif ($imgCoffe == 'four'): ?>
                              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/grain/grain-4.svg" alt="grain-four">
                            <?php elseif ($imgCoffe == 'five'): ?>
                              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/grain/grain-5.svg" alt="grain-five">
                          <?php  endif; ?>
											</div>
                <!-- end strength-coffe -->

                    <!-- quality-coffe -->
											<div class="quality-coffe">
												<p>Кислинка</p>
												<div class="quality-properties">
                           <?php
                            $termQuality = $product->get_attribute( 'pa_quality-coffe' );
                            $termQuality = get_term_by( 'slug', $termQuality, 'pa_quality-coffe' );
                            $imgCoffeQuality =	get_field( 'select_strength_coffe', 'pa_quality-coffe_' . $termQuality->term_id );
                           
                              if ( $imgCoffeQuality == 'one' ):?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-1.svg" alt="grain">
                                <?php elseif ($imgCoffeQuality == 'two'): ?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-2.svg" alt="grain-two">
                                <?php elseif ($imgCoffeQuality == 'three'): ?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-3.svg" alt="grain-three">
                                <?php elseif ($imgCoffeQuality == 'four'): ?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-4.svg" alt="grain-four">
                                <?php elseif ($imgCoffeQuality == 'five'): ?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-5.svg" alt="grain-five">
                                <?php elseif ($imgCoffeQuality == 'six'): ?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-6.svg" alt="grain-six">
                                <?php elseif ($imgCoffeQuality == 'seven'): ?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-7.svg" alt="grain-seven">
                                <?php elseif ($imgCoffeQuality == 'eight'): ?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-8.svg" alt="grain-eight">
                                <?php elseif ($imgCoffeQuality == 'nine'): ?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-9.svg" alt="grain-nine">
                                <?php elseif ($imgCoffeQuality == 'ten'): ?>
                                  <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-10.svg" alt="grain-ten">
                              <?php  endif; ?>
												</div>
											</div>
                    <!-- end quality-coffe -->

                    <!--  mustard-coffe -->
											<div class="quality-coffe">
												<p>Гірчинка</p>
												<div class="quality-properties">
                          <?php
                            $termMustard  = $product->get_attribute( 'pa_mustard-coffe' );
                            $termMustard  = get_term_by( 'slug', $termMustard, 'pa_mustard-coffe' );
                            $imgCoffeMustard =	get_field( 'select_mustard_coffe', 'pa_mustard-coffe_' . $termMustard->term_id );
                          
                              if ( $imgCoffeMustard == 'one' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-1.svg" alt="grain">
                                  <?php elseif ( $imgCoffeMustard == 'two' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-2.svg" alt="grain-two">
                                  <?php elseif ( $imgCoffeMustard == 'three' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-3.svg" alt="grain-three">
                                  <?php elseif ( $imgCoffeMustard == 'four' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-4.svg" alt="grain-four">
                                  <?php elseif ( $imgCoffeMustard == 'five' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-5.svg" alt="grain-five">
                                  <?php elseif ( $imgCoffeMustard == 'six' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-6.svg" alt="grain-six">
                                  <?php elseif ( $imgCoffeMustard == 'seven' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-7.svg" alt="grain-seven">
                                  <?php elseif ( $imgCoffeMustard == 'eight' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-8.svg" alt="grain-eight">
                                  <?php elseif ( $imgCoffeMustard == 'nine' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-9.svg" alt="grain-nine">
                                  <?php elseif ( $imgCoffeMustard == 'ten' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-10.svg" alt="grain-ten">
                                <?php endif; ?>
                          </div>
                        </div>
                  <!-- end mustard-coffe -->

                    <!-- saturation-coffe -->
											<div class="quality-coffe">
												<p>Насиченість</p>
												<div class="quality-properties">
												 <?php
                            $termSaturation  = $product->get_attribute( 'pa_saturation-coffe' );
                            $termSaturation  = get_term_by( 'slug', $termSaturation, 'pa_saturation-coffe' );
                            $imgCoffeSaturation =	get_field( 'select_saturation_coffe', 'pa_saturation-coffe_' . $termSaturation->term_id );
                          
                              if ( $imgCoffeSaturation == 'one' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-1.svg" alt="grain">
                                  <?php elseif ( $imgCoffeSaturation == 'two' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-2.svg" alt="grain-two">
                                  <?php elseif ( $imgCoffeSaturation == 'three' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-3.svg" alt="grain-three">
                                  <?php elseif ( $imgCoffeSaturation == 'four' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-4.svg" alt="grain-four">
                                  <?php elseif ( $imgCoffeSaturation == 'five' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-5.svg" alt="grain-five">
                                  <?php elseif ( $imgCoffeSaturation == 'six' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-6.svg" alt="grain-six">
                                  <?php elseif ( $imgCoffeSaturation == 'seven' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-7.svg" alt="grain-seven">
                                  <?php elseif ( $imgCoffeSaturation == 'eight' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-8.svg" alt="grain-eight">
                                  <?php elseif ( $imgCoffeSaturation == 'nine' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-9.svg" alt="grain-nine">
                                  <?php elseif ( $imgCoffeSaturation == 'ten' ) : ?>
                                      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/coffe-filter/properties-coffe/properties-10.svg" alt="grain-ten">
                                <?php endif; ?>
												</div>
											</div>
                    <!-- end saturation-coffe  -->

                  </div>
										</div>
                    <a href="<?php echo get_permalink( $product->get_id() ); ?>">
                      <h4 class="goods-name-coffe"><?php echo $product->get_name();?></h4>
                    </a>
										<p class="goods-desc-coffe"><?php echo $product->get_short_description(); ?></p>
     
          
<?php
		
	//  woocommerce_template_single_price();
			// do_action( 'woocommerce_single_product_summary' );
// woocommerce_template_single_add_to_cart();
		 
?>

                    <?php $priceSale = $product->get_sale_price();
													if(!empty( $priceSale )):?>
                        <span class="price-sale"><?php echo $priceSale; ?>₴</span>
                      <?php endif; ?>
										
										<div class="price-btn">
											<span><?php echo $product->get_price(); ?>₴</span>
                      <!-- Button add card -->
                          	<button type="button" class="price-basket">В кошик</button>
                      <!-- end button add card -->
													
                        </div>
                  </div>
													<!--  -->
			<?php


		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
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

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>

<section class="offer-header-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php woocommerce_breadcrumb(); ?>
      </div>
    </div>
    <div class="row">
      <div class="header-wrapper">
        <div class="col-lg-7">
          <?php if (apply_filters('woocommerce_show_page_title', true)): ?>
            <h1 class="woocommerce-products-header__title page-title">
              <?php woocommerce_page_title(); ?>
            </h1>
          <?php endif; ?>
        </div>
        <div class="col-lg-5">
          <div class="coffe-photo-catalig">
            <img class="coffe-catalog-img" src="<?php bloginfo('template_url'); ?>/assets/img/offer/slider_one.png"
              alt="coffe">
            <img class="coffe-catalog-img-bg"
              src="<?php bloginfo('template_url'); ?>/assets//img/offer/slider_one_one.png" alt="coffe">
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
<div class="section-bg"></div>
  <?php get_template_part('template-file/content', 'cooking'); ?>
<!-- End cooking file -->





<?php
/**
 * Hook: woocommerce_archive_description.
 *
 * @hooked woocommerce_taxonomy_archive_description - 10
 * @hooked woocommerce_product_archive_description - 10
 */
do_action('woocommerce_archive_description');
?>

<?php
if (woocommerce_product_loop()) {

  /**
   * Hook: woocommerce_before_shop_loop.
   *
   * @hooked woocommerce_output_all_notices - 10
   * @hooked woocommerce_result_count - 20
   * @hooked woocommerce_catalog_ordering - 30
   */
  do_action('woocommerce_before_shop_loop');

  woocommerce_product_loop_start();
  ?>
  <section class="card-coffe-catalog">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php woocommerce_catalog_ordering();?>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="coffe-catalog-wrapp">
            <?php
            if (wc_get_loop_prop('total')) {
              while (have_posts()) {
                the_post();

                /**
                 * Hook: woocommerce_shop_loop.
                 */

                do_action('woocommerce_shop_loop');
                wc_get_template_part('content', 'product-coffe');

                global $product;
              }
            }
            ?>


          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <?php  woocommerce_pagination();?>
        </div>
      </div>
    </div>
  </section>
  <?php
  woocommerce_product_loop_end();

  /**
   * Hook: woocommerce_after_shop_loop.
   *
   * @hooked woocommerce_pagination - 10
   */
  do_action('woocommerce_after_shop_loop');
} else {
  /**
   * Hook: woocommerce_no_products_found.
   *
   * @hooked wc_no_products_found - 10
   */
  do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');

get_footer('shop');
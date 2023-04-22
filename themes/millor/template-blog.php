<?php
/*
Template Name: Blog
Template Post Type: post, page, product
*/

get_header();
?>

<!-- Breadcrumb -->
<section class="offer-header-section offer-header-section_color">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="breadcrumb d-none d-sm-block">
					<li class="breadcrumb__list">
						<a href="# " class="breadcrumb__item breadcrumb__item_color">Головна </a>
					</li>
					<li class="breadcrumb__list breadcrumb__list_color active">
						<span>Блог</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End breadcrumb -->

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ancor-wrapp">
					<a class="ancor" href="#">Навчання</a>
					<a class="ancor" href="#">Новини</a>
					<a class="ancor" href="#">Часті запитання</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Cooking file -->
<section class="cooking">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>
					<?php the_field( 'blog_all_title' ) ?>
				</h2>

			</div>

		</div>
		<?php get_template_part( 'template-file/content', 'cooking' ); ?>
	</div>
</section>






<!-- Blog post category teaching -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="wrap-block-text-desc">
					<?php
					global $post;

					$myposts = get_posts( [ 
						'numberposts' => 1,
						// 'offset'      => 1,
						'category'    => 3
					] );

					if ( $myposts ) {
						foreach ( $myposts as $post ) {
							setup_postdata( $post );

							the_content();

						}
					} else {
						// Постов не найдено
					}

					wp_reset_postdata(); // Сбрасываем $post
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End blog post category teaching -->

<!-- Filter news -->
<section class="filter-news">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="filter-news-no-scroll">Новини:</h2>
				<div class="wrapp-filter-news">
					<h3 class="filter-news-title">Новини:</h3>
					<?php echo do_shortcode( '[searchandfilter id="104"][searchandfilter id="104" show="results"]' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End filter news -->


<!-- Faq file -->
<?php get_template_part( 'template-file/content', 'faq' ); ?>


<?php
get_footer();
?>
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package millor
 */

get_header();
?>

<main id="primary" class="site-main">
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
	<section class="single-blog">
		<div class="container">
			<div class="row">
				<div class="col-12">


					<?php
					while ( have_posts() ) :
						the_post();
						?>
						<h1>
							<?php the_title(); ?>
						</h1>
						<?php the_content(); ?>

					<?php

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</section>


	<!-- Faq file -->
	<?php get_template_part( 'template-file/content', 'faq' ); ?>


</main><!-- #main -->



<?php
get_sidebar(); // get_sidebar
get_footer();
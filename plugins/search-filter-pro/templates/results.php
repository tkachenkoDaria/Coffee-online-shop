<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $query->have_posts() ) {
	?>

	<!-- Found <?php echo $query->found_posts; ?> Results<br />
											Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br />

											<div class="pagination">

												<div class="nav-previous">
													<?php next_posts_link( 'Older posts', $query->max_num_pages ); ?>
												</div>
												<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
												<?php
												/* example code for using the wp_pagenavi plugin */
												if ( function_exists( 'wp_pagenavi' ) ) {
													echo "<br />";
													wp_pagenavi( array( 'query' => $query ) );
												}
												?>
											</div> -->

	<?php
	while ( $query->have_posts() ) {
		$query->the_post();

		?>
		<div class="news-card">
			<?php
			//должно находится внутри цикла
			if ( has_post_thumbnail() ) {
				?>
				<img class="news-card__photo" src="<?php the_post_thumbnail_url(); ?>">
			<?php
			} else {
				echo '<img style="display:none;" class="news-card__photo" src="#">';
			}
			?>
			<div class="news-card__info" style="max-width: 97%;">
				<h5 class="news-card__title">
					<?php the_title(); ?>
				</h5>
				<div class="news-card__excerpt">
					<?php the_excerpt(); ?>
				</div>
				<div class="news-card__inner">
					<p>Автор статті: <?php the_author(); ?></p>
					<a href="<?php the_permalink(); ?>" class="more">Детальніше</a>
				</div>

			</div>
		</div>











	<?php
	}
	?>
	<!-- Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br /> -->

	<div class="pagination">

		<div class="nav-previous">
			<?php next_posts_link( 'Показати ще', $query->max_num_pages ); ?>
		</div>
		<div class="nav-next"><?php previous_posts_link( 'Назад' ); ?></div>
		<?php
		/* example code for using the wp_pagenavi plugin */
		if ( function_exists( 'wp_pagenavi' ) ) {
			echo "<br />";
			wp_pagenavi( array( 'query' => $query ) );
		}
		?>
	</div>
<?php
} else {
	echo "No Results Found";
}
?>
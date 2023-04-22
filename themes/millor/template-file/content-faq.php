<!-- FAQ  -->
<section class="faq">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>
					<?php the_field( 'blog_faq_title', 'faq' ); ?>
				</h2>
			</div>
		</div>
		<div class="row">
			<!-- Accordion -->
			<div class="col-12">
				<div id="accordion" class="accordion"
					style="background-image: url('<?php the_field( 'blog_faq_bg', 'faq' ); ?>');">
					<!-- Accordion item -->


					<?php if ( have_rows( 'blog_faq_repeater', 'faq' ) ) : ?>
						<?php while ( have_rows( 'blog_faq_repeater', 'faq' ) ) :
							the_row();
							// $image = get_sub_field( 'image' );
							?>
							<div class="accordion__item">
								<div class="accordion__header">
									<?php the_sub_field( 'blog_faq_repeater_title', 'faq' ); ?>
								</div>
								<div class="accordion__body">
									<div class="accordion__content">
										<?php the_sub_field( 'blog_faq_repeater_content', 'faq' ); ?>
									</div>
								</div>
							</div>

                            <?php endwhile; ?>
                        <?php endif; ?>
				</div>
				<!-- End Accordion -->
			</div>

		</div>
	</div>
</section>
<!-- End faq -->
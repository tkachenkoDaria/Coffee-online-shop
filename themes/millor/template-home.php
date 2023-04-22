<?php
/*
Template Name: Home
Template Post Type: post, page, product
*/

get_header();
?>

<section class="offer">
	<div class="container">
		<div class="col-lg-12">
			<div class="offer-wrapp">
				<?php if ( have_rows( 'first_screen' ) ) : ?>
					<?php while ( have_rows( 'first_screen' ) ) :
						the_row(); ?>

						<div class="offer-title">
							<!-- <h1>Свіжообсмажена кава</h1> -->
							<!-- <p>Кава середнього обсмажування з різних країн зростання з доставкою додому.</p> -->
							<!-- <p class="offer-desc">Ми обсмажуємо каву кожні вихідні.</p> -->
							<h1>
								<?php the_sub_field( 'home_title' ); ?>
							</h1>
							<p><?php the_sub_field( 'home_desc_one' ); ?></p>
							<p class="offer-desc">
								<?php the_sub_field( 'home_desc_two' ); ?>
							</p>
							<button type="button" class="btn"
								onclick="document.location='<?php the_sub_field( 'home_linck_button' ); ?>'">
								<?php the_sub_field( 'home_title_button' ); ?>
							</button>
						</div>
						<!-- Swiper -->
						<div class="swiper swiper_head">
							<div class="swiper-wrapper">

								<?php if ( have_rows( 'home_slides' ) ) : ?>
									<?php while ( have_rows( 'home_slides' ) ) :
										the_row();
										$imageOne = get_sub_field( 'home_one_image' );
										$imageTwo = get_sub_field( 'home_two_image' );
										?>
										<div class="swiper-slide">
											<div class="swiper-slide__wrapp">
												<img src="<?php echo wp_get_attachment_image_url( $imageOne, 'full' ); ?>"
													alt="slider-photo" class="swiper-slide__background">
												<img src="<?php echo wp_get_attachment_image_url( $imageTwo, 'full' ); ?>"
													alt="slider-photo" class="swiper-slide__photo">
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>

							</div>
							<div class="swiper-pagination"></div>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
</section>
<section class="categories">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>
					<?php the_field( 'home_first_screen_title' ); ?>
				</h2>
			</div>
			<div class="categories-wrapp">
				<div class="col-lg-5 col-xl-3">
					<div class="category-card">
						<picture class="category-card-img">
							<source srcset="./img/category/coffe.webp" type="image/webp">
							<img src="./img/category/coffe.png" alt="category-photo">
						</picture>
						<h5>Свіжообсмажена кава</h5>
						<button type="button" class=" btn-category">Придбати</button>
					</div>
				</div>
				<div class="col-lg-5 col-xl-3">
					<div class="category-card">
						<picture>
							<source srcset="./img/category/tea.webp" type="image/webp">
							<img src="./img/category/tea.png" alt="category-photo">
						</picture>
						<h5>Чай та кавові напої</h5>
						<button type="button" class="btn btn-category">Придбати</button>
					</div>
				</div>
				<div class="col-lg-5 col-xl-3">
					<div class="category-card">
						<picture class="category-card-ml">
							<source srcset="./img/category/coffee-machine.webp" type="image/webp">
							<img src="./img/category/coffee-machine.png" alt="category-photo">
						</picture>
						<h5>Продукція для вендінгу</h5>
						<button type="button" class=" btn-category">Придбати</button>
					</div>
				</div>
				<div class="col-lg-5 col-xl-3">
					<div class="category-card category-card_last">
						<picture>
							<source srcset="./img/category/eating.webp" type="image/webp">
							<img src="./img/category/eating.png" alt="category-photo">
						</picture>
						<h5>Продукція для вендінгу</h5>
						<button type="button" class="btn-category">Придбати</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="catalog-product-sale">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="product-home-sale">
					<h2>
						<?php the_field( 'home_two_screen_title' ); ?>
					</h2>
					<p>
						<?php the_field( 'home_two_screen_desc' ); ?>
					</p>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="products-sale-wrapp">
					<!-- <?php the_field( 'home_shop_shortcode' ) ?> -->
					<div class="col-12 col-xl-11">
						<div class="swiper swiper_product-sale">
							<div class="swiper-wrapper">
								<!--  Slide 1 -->
								<div class="swiper-slide">
									<div class="card-coffe-wrapp">
										<div class="card-coffe">
											<span class="card-coffe__icon"></span>
											<div class="itc-select" id="select-1">
												<button type="button" class="itc-select__toggle" name="numbers"
													value="250г" data-select="toggle" data-index="0">250г</button>
												<div class="itc-select__dropdown">
													<ul class="itc-select__options">
														<li class="itc-select__option itc-select__option_selected"
															data-select="option" data-value="250г" data-index="0">250г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="750г" data-index="1">750г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="1000г" data-index="2">
															1000г</li>
													</ul>
												</div>
											</div>
											<span class="card-coffe__text">Знижки</span>
											<div class="card-coffe__inner">
												<picture class="card-coffe__photo">
													<source srcset="./img/products-sale/product.webp" type="image/webp">
													<img src="./img/products-sale/product.png" alt="product">
												</picture>
												<div class="card-coffe__items">
													<div class="card-reviews card-reviews_coffe">
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
													</div>
													<div class="response">
														<p>4.0</p>
														<span>(32 відгука)</span>
													</div>
													<div class="strength-coffe">
														<span></span>
														<span></span>
														<span></span>
														<span></span>
														<span></span>
													</div>
													<div class="quality-coffe">
														<p>Кислинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Гірчинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Насиченість</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
												</div>
											</div>
											<h4 class="goods-name-coffe">Colombia Supremo</h4>
											<p class="goods-desc-coffe">Свіжообсмажена кава - опис товару, смак, аромат
											</p>
											<span class="price-sale">350 ₴</span>
											<div class="price-btn">
												<span>250 ₴</span>
												<button type="button" class="price-basket">В кошик</button>
											</div>
										</div>
									</div>
								</div>
								<!--  Slide 2-->
								<div class="swiper-slide">
									<div class="card-coffe-wrapp">
										<div class="card-coffe">
											<span class="card-coffe__icon"></span>
											<div class="itc-select" id="select-1">
												<button type="button" class="itc-select__toggle" name="numbers"
													value="250г" data-select="toggle" data-index="0">250г</button>
												<div class="itc-select__dropdown">
													<ul class="itc-select__options">
														<li class="itc-select__option itc-select__option_selected"
															data-select="option" data-value="250г" data-index="0">250г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="750г" data-index="1">750г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="1000г" data-index="2">
															1000г</li>
													</ul>
												</div>
											</div>
											<div class="card-coffe__text-wrapp">
												<span class="card-coffe__text">Знижки</span>
											</div>
											<div class="card-coffe__inner">
												<picture class="card-coffe__photo">
													<source srcset="./img/products-sale/product.webp" type="image/webp">
													<img src="./img/products-sale/product.png" alt="product">
												</picture>
												<div class="card-coffe__items">
													<div class="card-reviews card-reviews_coffe">
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
													</div>
													<div class="response">
														<p>4.0</p>
														<span>(32 відгука)</span>
													</div>
													<div class="strength-coffe">
														<span></span>
														<span></span>
														<span></span>
														<span></span>
														<span></span>
													</div>
													<div class="quality-coffe">
														<p>Кислинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Гірчинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Насиченість</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
												</div>
											</div>
											<h4 class="goods-name-coffe">Colombia Supremo</h4>
											<p class="goods-desc-coffe">Свіжообсмажена кава - опис товару, смак, аромат
											</p>
											<span class="price-sale">350 ₴</span>
											<div class="price-btn">
												<span>250 ₴</span>
												<button type="button" class="price-basket">В кошик</button>
											</div>
										</div>
									</div>
								</div>
								<!--  Slide 3 -->
								<div class="swiper-slide">
									<div class="card-coffe-wrapp">
										<div class="card-coffe">
											<span class="card-coffe__icon"></span>
											<div class="itc-select" id="select-1">
												<button type="button" class="itc-select__toggle" name="numbers"
													value="250г" data-select="toggle" data-index="0">250г</button>
												<div class="itc-select__dropdown">
													<ul class="itc-select__options">
														<li class="itc-select__option itc-select__option_selected"
															data-select="option" data-value="250г" data-index="0">250г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="750г" data-index="1">750г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="1000г" data-index="2">
															1000г</li>
													</ul>
												</div>
											</div>
											<div class="card-coffe__text-wrapp">
												<span class="card-coffe__text">Знижки</span>
											</div>
											<div class="card-coffe__inner">
												<picture class="card-coffe__photo">
													<source srcset="./img/products-sale/product.webp" type="image/webp">
													<img src="./img/products-sale/product.png" alt="product">
												</picture>
												<div class="card-coffe__items">
													<div class="card-reviews card-reviews_coffe">
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
													</div>
													<div class="response">
														<p>4.0</p>
														<span>(32 відгука)</span>
													</div>
													<div class="strength-coffe">
														<span></span>
														<span></span>
														<span></span>
														<span></span>
														<span></span>
													</div>
													<div class="quality-coffe">
														<p>Кислинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Гірчинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Насиченість</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
												</div>
											</div>
											<h4 class="goods-name-coffe">Colombia Supremo</h4>
											<p class="goods-desc-coffe">Свіжообсмажена кава - опис товару, смак, аромат
											</p>
											<span class="price-sale">350 ₴</span>
											<div class="price-btn">
												<span>250 ₴</span>
												<button type="button" class="price-basket">В кошик</button>
											</div>
										</div>
									</div>
								</div>
								<!--  Slide 4 -->
								<div class="swiper-slide">
									<div class="card-coffe-wrapp">
										<div class="card-coffe">
											<span class="card-coffe__icon"></span>
											<div class="itc-select" id="select-1">
												<button type="button" class="itc-select__toggle" name="numbers"
													value="250г" data-select="toggle" data-index="0">250г</button>
												<div class="itc-select__dropdown">
													<ul class="itc-select__options">
														<li class="itc-select__option itc-select__option_selected"
															data-select="option" data-value="250г" data-index="0">250г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="750г" data-index="1">750г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="1000г" data-index="2">
															1000г</li>
													</ul>
												</div>
											</div>
											<div class="card-coffe__text-wrapp">
												<span class="card-coffe__text">Знижки</span>
											</div>
											<div class="card-coffe__inner">
												<picture class="card-coffe__photo">
													<source srcset="./img/products-sale/product.webp" type="image/webp">
													<img src="./img/products-sale/product.png" alt="product">
												</picture>
												<div class="card-coffe__items">
													<div class="card-reviews card-reviews_coffe">
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
													</div>
													<div class="response">
														<p>4.0</p>
														<span>(32 відгука)</span>
													</div>
													<div class="strength-coffe">
														<span></span>
														<span></span>
														<span></span>
														<span></span>
														<span></span>
													</div>
													<div class="quality-coffe">
														<p>Кислинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Гірчинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Насиченість</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
												</div>
											</div>
											<h4 class="goods-name-coffe">Colombia Supremo</h4>
											<p class="goods-desc-coffe">Свіжообсмажена кава - опис товару, смак, аромат
											</p>
											<span class="price-sale">350 ₴</span>
											<div class="price-btn">
												<span>250 ₴</span>
												<button type="button" class="price-basket">В кошик</button>
											</div>
										</div>
									</div>
								</div>
								<!--   Slide 5 -->
								<div class="swiper-slide">
									<div class="card-coffe-wrapp">
										<div class="card-coffe">
											<span class="card-coffe__icon"></span>
											<div class="itc-select" id="select-1">
												<button type="button" class="itc-select__toggle" name="numbers"
													value="250г" data-select="toggle" data-index="0">250г</button>
												<div class="itc-select__dropdown">
													<ul class="itc-select__options">
														<li class="itc-select__option itc-select__option_selected"
															data-select="option" data-value="250г" data-index="0">250г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="750г" data-index="1">750г
														</li>
														<li class="itc-select__option" data-select="option"
															data-value="1000г" data-index="2">
															1000г</li>
													</ul>
												</div>
											</div>
											<div class="card-coffe__text-wrapp">
												<span class="card-coffe__text">Знижки</span>
											</div>
											<div class="card-coffe__inner">
												<picture class="card-coffe__photo">
													<source srcset="./img/products-sale/product.webp" type="image/webp">
													<img src="./img/products-sale/product.png" alt="product">
												</picture>
												<div class="card-coffe__items">
													<div class="card-reviews card-reviews_coffe">
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
														<span class="card-reviews__star"></span>
													</div>
													<div class="response">
														<p>4.0</p>
														<span>(32 відгука)</span>
													</div>
													<div class="strength-coffe">
														<span></span>
														<span></span>
														<span></span>
														<span></span>
														<span></span>
													</div>
													<div class="quality-coffe">
														<p>Кислинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Гірчинка</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
													<div class="quality-coffe">
														<p>Насиченість</p>
														<div class="quality-properties">
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span class="quality-properties__item"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
															<span
																class="quality-properties__item quality-properties__item_not-active"></span>
														</div>
													</div>
												</div>
											</div>
											<h4 class="goods-name-coffe">Colombia Supremo</h4>
											<p class="goods-desc-coffe">Свіжообсмажена кава - опис товару, смак, аромат
											</p>
											<span class="price-sale">350 ₴</span>
											<div class="price-btn">
												<span>250 ₴</span>
												<button type="button" class="price-basket">В кошик</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination swiper-pagination_product-cofe"></div>
						</div>
						<div class="swiper-button-wrap">
							<div class="swiper-button-next swiper-button-next_card-next"></div>
							<div class="swiper-button-prev swiper-button-prev_card-prev"></div>
						</div>
					</div>

				</div>
				<a href=" <?php the_field( 'home_shop_link' ); ?>	" class="see-all">
					<?php the_field( 'home_shop_title' ); ?>
					<!-- Дивитись усі -->
					<span class="see-all__bottom-line"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="advantage">
	<div class="container">
		<div class="row">
			<div class="advantage-wrapper">

				<?php if ( have_rows( 'home_peculiarities_group' ) ) : ?>
					<?php while ( have_rows( 'home_peculiarities_group' ) ) :
						the_row();

						$image_bg = get_sub_field( 'home_peculiarities_img_left_bg' );
						$image = get_sub_field( 'home_peculiarities_img_left' );
						$title = get_sub_field( 'home_peculiarities_section_title' );
						?>

						<div class="col-lg-4">
							<div class="advantage-img">
								<img class="advantage-img__coffe" src="<?php echo esc_url( $image_bg['url'] ); ?>"
									alt="<?php echo esc_attr( $image_bg['alt'] ); ?>">
								<img class="advantage-img__grain" src="<?php echo esc_url( $image['url'] ); ?>"
									alt="<?php echo esc_attr( $image['alt'] ); ?>">
							</div>
						</div>
						<div class="col-12 col-xl-6 offset-xl-2">
							<div class="advantage-info">
								<h2 class="advantage-title">
									<?php echo $title; ?>
								</h2>

								<?php if ( have_rows( 'home_peculiarities' ) ) : ?>
									<?php while ( have_rows( 'home_peculiarities' ) ) :
										the_row();
										$image = get_sub_field( 'home_peculiarities_img' );
										$title = get_sub_field( 'home_peculiarities_title' );
										$text = get_sub_field( 'home_peculiarities_text' );
										?>

										<div class="advantage-inner">
											<img src="<?php echo esc_url( $image['url'] ); ?>"
												alt="<?php echo esc_attr( $image['alt'] ); ?>" class="advantage-icon">
											<div class="advantage-list">
												<h4 class="advantage-list__title">
													<?php echo $title; ?>
												</h4>
												<p class="advantage-list__desc">
													<?php echo $text; ?>
												</p>
											</div>
										</div>

									<?php endwhile; ?>
								<?php endif; ?>

							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="info-coffe" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url(<?php the_field( 'home_info_coffe_img' ); ?>" ) no-repeat center;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="roasting-coffee">
					<h2 class="roasting-coffee__title">
						<?php the_field( 'home_info_coffe_title' ); ?>
					</h2>
					<div class="roasting-coffee__text">
						<?php the_field( 'home_info_coffe_text' ); ?>
					</div>

					<button onclick="document.location='<?php the_field( 'home_info_coffe_btn_link' ); ?>'"
						type="button" class="roasting-coffee__btn">
						<?php the_field( 'home_info_coffe_btn_name' ); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="companys-news">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="companys-news-wrapp">
					<h2>Новини компанії</h2>
					<a href="#" class="see-all">Дивитись усі
						<span class="see-all__bottom-line"></span>
					</a>
				</div>
			</div>
			<!-- The last four posts -->
			<div class="col-12">
				<div class="news-home">

					<?php
					global $post;

					$myposts = get_posts( [ 
						'include' => [ 125, 84, 123, 127 ],
						'orderby' => 'post__in',
					] );

					if ( $myposts ) {
						foreach ( $myposts as $post ) {
							setup_postdata( $post );
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

								<!-- <img class="news-card__photo" src="" alt="img-news"> -->
								<div class="news-card__info">
									<h5 class="news-card__title">
										<?php the_title(); ?>

									</h5>
									<div class="news-card__excerpt">
										<?php the_excerpt(); ?>
									</div>
									<a href="<?php the_permalink(); ?>" class="more">Детальніше</a>
								</div>
							</div>
							<?php
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
<section class="social-instagram">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="instagram-title">
					<h2>Ми в Instagram</h2>
					<img src="./img/social-instagram/instagram-icon.svg" alt="instagram-icon">
				</div>
			</div>
			<div class="social-instagram-wrapper">
				<div class="col-12 col-xl-4">
					<div class="apple-wrapp">
						<picture>
							<source srcset="./img/social-instagram/айфон1.webp" type="image/webp">
							<img src="./img/social-instagram/айфон1.png" alt="" айфон1>
						</picture>
						<picture class="apple-two">
							<source srcset="./img/social-instagram/айфон2.webp" type="image/webp">
							<img src="./img/social-instagram/айфон2.png" alt="айфон2" class="apple-two">
						</picture>
					</div>
				</div>
				<div class="col-12 col-xl-8">
					<div class="swiper swiper_social-instagram">
						<div class="swiper-wrapper">
							<div class="swiper-slide swiper-slide_insta ">
								<!--  Slide 1 -->
								<div class="slider-img">1</div>
							</div>
							<!-- Slide 2 -->
							<div class="swiper-slide swiper-slide_insta">
								<div class="slider-img">2</div>
							</div>
							<!-- Slide 3 -->
							<div class="swiper-slide swiper-slide_insta">
								<div class="slider-img">3</div>
							</div>
							<!-- Slide 4 -->
							<div class="swiper-slide swiper-slide_insta">
								<div class="slider-img">4</div>
							</div>
							<!-- Slide 5 -->
							<div class="swiper-slide swiper-slide_insta">
								<div class="slider-img">5</div>
							</div>
							<!-- Slide 6 -->
							<div class="swiper-slide swiper-slide_insta">
								<div class="slider-img">6</div>
							</div>
							<!-- Slide 7 -->
							<div class="swiper-slide swiper-slide_insta">
								<div class="slider-img">7</div>
							</div>
							<!-- Slide 8 -->
							<div class="swiper-slide swiper-slide_insta">
								<div class="slider-img">8</div>
							</div>
							<!-- Slide 9 -->
							<div class="swiper-slide swiper-slide_insta">
								<div class="slider-img">9</div>
							</div>
						</div>
						<div class="swiper-button-wrap">
							<div class="swiper-button-next swiper-button-next_card-next s-b--n_insta"></div>
						</div>
						<div class="swiper-pagination swiper-pagination_instagram"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>
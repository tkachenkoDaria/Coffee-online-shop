<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package millor
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="header-wrapp">
					<div class="col-lg-3">
						<?php the_custom_logo(); ?>
						<!-- <a href="/" class="logo">
							<img src="./img/header/logo.svg" alt="logo" class="logo__img" />
						</a> -->
					</div>
					<div class="col-lg-7">
						<nav class="menu-header">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'header',
									'container'      => 'ul',
									'menu_class'     => 'navigation',
								)
							);
							?>
							<!-- <ul class="navigation">
								<li>
									<a href="../cart.html">Каталог товарів</a>
								</li>
								<li>
									<a href="../card-product-tea.html">Блог</a>
								</li>
								<li>
									<a href="../card-product-cofe.html">Контакти</a>
								</li>
							</ul> -->
						</nav>
					</div>
					<div class="col-lg-2">
						<div class="button-group">
							<form action="#" class="searsh-form">
								<input type="search" name="search" id="" class="search" placeholder="Пошук по товарах" />
								<button class="search-icon" type="submit">
									<svg viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="search-icon__svg">
										<path
											d="M34 33L26.2667 25.5083M30.4444 15.7778C30.4444 23.387 24.0769 29.5556 16.2222 29.5556C8.36751 29.5556 2 23.387 2 15.7778C2 8.16852 8.36751 2 16.2222 2C24.0769 2 30.4444 8.16852 30.4444 15.7778Z"
											stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</button>
								<span class="close"></span>
							</form>
							<?php get_sidebar('header'); ?>
							<button type="button" class="cart">
								<svg viewBox="0 0 37 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M2 2H8L12.02 21.7662C12.1572 22.4458 12.5329 23.0563 13.0813 23.4908C13.6298 23.9253 14.316 24.1561 15.02 24.1429H29.6C30.304 24.1561 30.9902 23.9253 31.5387 23.4908C32.0871 23.0563 32.4628 22.4458 32.6 21.7662L35 9.38095H9.5M15.5 31.5238C15.5 32.3391 14.8284 33 14 33C13.1716 33 12.5 32.3391 12.5 31.5238C12.5 30.7085 13.1716 30.0476 14 30.0476C14.8284 30.0476 15.5 30.7085 15.5 31.5238ZM32 31.5238C32 32.3391 31.3284 33 30.5 33C29.6716 33 29 32.3391 29 31.5238C29 30.7085 29.6716 30.0476 30.5 30.0476C31.3284 30.0476 32 30.7085 32 31.5238Z"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</button>
							<button type="button" class="login">
								<svg viewBox="0 0 33 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M31 34V30.4444C31 28.5585 30.2362 26.7497 28.8765 25.4161C27.5169 24.0825 25.6728 23.3333 23.75 23.3333H9.25C7.32718 23.3333 5.48311 24.0825 4.12348 25.4161C2.76384 26.7497 2 28.5585 2 30.4444V34M23.75 9.11111C23.75 13.0385 20.5041 16.2222 16.5 16.2222C12.4959 16.2222 9.25 13.0385 9.25 9.11111C9.25 5.18375 12.4959 2 16.5 2C20.5041 2 23.75 5.18375 23.75 9.11111Z"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="mobi-nenu">
					<div class="col-5 col-lg-3">
						<?php the_custom_logo(); ?>
						<!-- <a href="/" class="logo">
							<img src="./img/header/logo.svg" alt="logo" class="logo__img" />
						</a> -->
					</div>
					<div class="col-5 col-lg-4 col-xl-2">
						<div class="button-group">
							<?php get_sidebar('header');?>
							<button type="button" class="cart">
								<svg viewBox="0 0 37 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M2 2H8L12.02 21.7662C12.1572 22.4458 12.5329 23.0563 13.0813 23.4908C13.6298 23.9253 14.316 24.1561 15.02 24.1429H29.6C30.304 24.1561 30.9902 23.9253 31.5387 23.4908C32.0871 23.0563 32.4628 22.4458 32.6 21.7662L35 9.38095H9.5M15.5 31.5238C15.5 32.3391 14.8284 33 14 33C13.1716 33 12.5 32.3391 12.5 31.5238C12.5 30.7085 13.1716 30.0476 14 30.0476C14.8284 30.0476 15.5 30.7085 15.5 31.5238ZM32 31.5238C32 32.3391 31.3284 33 30.5 33C29.6716 33 29 32.3391 29 31.5238C29 30.7085 29.6716 30.0476 30.5 30.0476C31.3284 30.0476 32 30.7085 32 31.5238Z"
										stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</button>
							<button type="button" class="login">
								<svg viewBox="0 0 33 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M31 34V30.4444C31 28.5585 30.2362 26.7497 28.8765 25.4161C27.5169 24.0825 25.6728 23.3333 23.75 23.3333H9.25C7.32718 23.3333 5.48311 24.0825 4.12348 25.4161C2.76384 26.7497 2 28.5585 2 30.4444V34M23.75 9.11111C23.75 13.0385 20.5041 16.2222 16.5 16.2222C12.4959 16.2222 9.25 13.0385 9.25 9.11111C9.25 5.18375 12.4959 2 16.5 2C20.5041 2 23.75 5.18375 23.75 9.11111Z"
										stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</button>
							<div class="nav-bar">
								<div class="nav-icon">
									<span class="line" id="one"></span>
									<span class="line" id="two"></span>
									<span class="line" id="three"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-xl-7">
					<nav class="menu-header menu-header_mobi">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'header_mobi',
								'container'      => 'ul',
								'menu_class'     => 'navigation navigation_mobi',
							)
						);
						?>
						<!-- <ul class="navigation navigation_mobi">
							<li>
								<a href="#">Каталог товарів</a>
							</li>
							<li>
								<a href="#">Блог</a>
							</li>
							<li>
								<a href="#">Контакти</a>
							</li>
						</ul> -->
						<form action="#" class="searsh-form searsh-form_mobi">
							<input type="search" name="search" class="search search_mobi" placeholder="Пошук по товарах" />
						</form>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<main>
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
 * @see https://woo.com/document/template-structure/
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




<div class="container">
	<h2 class="text-bg-black text-2xl esm:text-2xl sm:text-3xl md:text-5xl py-4 esm:py-4 sm:py-4 md:py-5 font-extrabold"> Каталог</h2>
	<header class="woocommerce-products-header">
		<?php if (apply_filters('woocommerce_show_page_title', true)): ?>
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
		do_action('woocommerce_archive_description');
		?>
	</header>
	<div class="flex">
		<!-- Тут меню будет -->
		<aside class="w-full esm:w-full sm:w-full md:w-1/6 hidden esm:hidden sm:hover: md:block mr-5 h-screen bg-gray-200">
			<div>
				<nav class="catalog-menu">

					<?php
					$args = array(
						'taxonomy' => 'product_cat',
						'parent' => 0,
						'hide_empty' => false,
					);

					$categories = get_terms($args);

					// echo '<pre>';
					// var_dump($categories);
					// echo '</pre>';

					if (!is_wp_error($categories) && !empty($categories)) :
					?>
						<ul id="sidebar-menu">
							<?php foreach ($categories as $category) : ?>
								<li>
									<a href="<?php echo get_term_link($category); ?>">
										<?php echo $category->name; ?>
									</a>

									<?php
									// Получаем подкатегории
									$sub_categories = get_terms(array(
										'taxonomy'   => 'product_cat',
										'parent'     => $category->term_id,
										'orderby'    => 'meta_value_num',
										'order'      => 'ASC',
										'hide_empty' => false,
									));


									if (!is_wp_error($sub_categories) && !empty($sub_categories)) :
									?>
										<ul class="sub-menu">
											<?php foreach ($sub_categories as $sub_category) : ?>
												<li>
													<a href="<?php echo get_category_link($sub_category->term_id); ?>">
														<p><?php echo esc_html($sub_category->name); ?></p>
													</a>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<!-- <nav class="catalog-menu">
						<?php
						//wp_nav_menu([
						//	'theme_location' => 'sidebar-menu',
						//	'container' => '',
						//	'menu_class' => '',
						//	'menu_id' => 'sidebar-menu'
						//]);
						?>
					</nav> -->


				</nav>
			</div>
		</aside>
		<!-- Кончилось -->


		<div class="w-full esm:full sm:w-full md:w-3/4 pb-10 relative">
			<div class="flex justify-between pb-10 ">
				<button
					class="text-bg-black font-bold btn_menu_filter block esm:block sm:block md:hidden">Показать
					меню
				</button>


				<div class="hidden sidebar_menu">
					<nav class="catalog-menu">
						<?php wp_nav_menu([
							'theme_location' => 'sidebar-menu',
							'container' => '',
							'menu_class' => '',
							'menu_id' => 'sidebar-menu'
						]);
						?>
					</nav>
				</div>

			</div>

			<!-- Начались продукты -->

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

				if (wc_get_loop_prop('total')) {
					while (have_posts()) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action('woocommerce_shop_loop');

						wc_get_template_part('content', 'product');
					}
				}

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
			?>


		</div>
	</div>
	<?php
	get_footer('shop');

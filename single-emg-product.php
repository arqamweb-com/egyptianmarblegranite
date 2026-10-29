<?php

/**

 * The template for displaying all single posts.

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package Astra

 * @since 1.0.0

 */



if (!defined('ABSPATH')) {

	exit; // Exit if accessed directly.

}



get_header();


$section_index = 0;

function emg_section_class(&$i)
{
	$class = ($i % 2 === 0) ? 'bg-background' : 'bg-alt';
	$i++;
	return $class;
}


?>


<main>

	<div <?php astra_primary_class(); ?>>
		<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden">
			<div class="absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>);">
				<div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
			</div>
			<div class="relative z-10 text-center px-4 max-w-5xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
				<span class="inline-block px-4 py-2 bg-primary/20 backdrop-blur-sm rounded-full text-primary-foreground text-sm font-medium mb-6 border border-solid" style="border-color:#0f172a4d;">Egyptian Stone Lasts Forever</span>
				<h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-6 leading-tight"><?php the_title(); ?></h1>
				<div class="emg-pro-breadcrumb"><?php echo do_shortcode('[rank_math_breadcrumb]'); ?></div>
				<div class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto leading-relaxed"><?php the_excerpt(); ?></div>
			</div>
			<div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
				<div class="w-6 h-10 border-2 border-solid border-white/50 rounded-full flex justify-center">
					<div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
				</div>
			</div>
		</section>

		<?php if (get_field('feature_image') || get_field('feature_title') || get_field('feature_description')) : ?>
			<section class="py-16 bg-alt">
				<div class="ast-container">
					<div class="max-w-4xl mx-auto">

						<div class="relative group overflow-hidden rounded-2xl shadow-2xl">
							<img src="<?php echo get_field('feature_image'); ?>" alt="<?php echo esc_attr( emg_product_name() ); ?>" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
							<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-8"></div>
						</div>

						<div class="text-center mt-8">
							<h2 class="text-3xl md:text-4xl font-serif text-foreground mb-4"><?php echo get_field('feature_title'); ?></h2>
							<p class="text-muted-foreground text-lg"><?php echo get_field('feature_description'); ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php if (get_the_content()) : ?>
			<section class="pb-20 pt-14 <?php echo emg_section_class($section_index); ?>">
				<div class="ast-container">
					<div class="max-w-4xl mx-auto transition-all duration-1000 opacity-100 translate-y-0 entry-content">
						<?php the_content(); ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php
		$has_gallery = false;

		foreach (range(1, 3) as $i) {
			if (get_field('image_' . $i)) {
				$has_gallery = true;
				break;
			}
		}
		?>

		<?php if ($has_gallery || get_field('section_title')) : ?>
			<section class="py-20 <?php echo emg_section_class($section_index); ?>">
				<div class="ast-container">
					<?php if (get_field('section_title')): ?>
						<h2 class="text-3xl md:text-4xl font-serif text-foreground mb-12 text-center transition-all duration-700 opacity-100 translate-y-0">
							<?php echo esc_html(get_field('section_title')); ?>
						</h2>
					<?php endif; ?>

					<?php if ($has_gallery): ?>
						<div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
							<?php foreach (range(1, 3) as $i):
								$image_id  = get_field('image_' . $i);
								if (!$image_id) continue;
								$image_url = wp_get_attachment_image_url($image_id, 'large');
							?>
								<div class="relative group overflow-hidden rounded-xl shadow-lg cursor-pointer transition-all duration-700 opacity-100 translate-y-0">
									<a href="<?php echo esc_url($image_url); ?>"
										data-pswp-width="1600"
										data-pswp-height="1067"
										class="gallery-item">

										<?php
										echo wp_get_attachment_image(
											$image_id,
											'large',
											false,
											[
												'class'   => 'w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110',
												'loading' => 'lazy', 'alt' => emg_product_name() . ' photo ' . $i
											]
										);
										?>

										<div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
											<span class="text-white bg-black/50 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">
												View Image
											</span>
										</div>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>


		<?php
		// Check if there is any data
		$has_tiles = get_field('tiles_dimensions') || get_field('tiles_thickness');
		$has_slabs = get_field('slabs_dimensions') || get_field('slabs_thickness');
		?>

		<?php if ($has_tiles || $has_slabs): ?>
			<section class="py-20 <?php echo emg_section_class($section_index); ?>">
				<div class="ast-container">
					<div class="max-w-4xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">

						<h2 class="text-3xl md:text-4xl font-serif text-foreground mb-12 text-center">
							Available Sizes
						</h2>

						<div class="grid <?php echo ($has_tiles && $has_slabs) ? 'md:grid-cols-2' : 'grid-cols-1'; ?> gap-8">

							<?php if ($has_tiles): ?>
								<!-- Tiles -->
								<div class="bg-secondary/30 rounded-2xl p-8 border border-solid border-border hover:shadow-lg transition-shadow duration-300">
									<h3 class="text-xl font-semibold text-foreground mb-4 flex items-center gap-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
											fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" class="lucide lucide-ruler text-primary">
											<path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z"></path>
											<path d="m14.5 12.5 2-2"></path>
											<path d="m11.5 9.5 2-2"></path>
											<path d="m8.5 6.5 2-2"></path>
											<path d="m17.5 15.5 2-2"></path>
										</svg>
										Tiles
									</h3>

									<ul class="space-y-3 text-muted-foreground">
										<?php if (get_field('tiles_dimensions')): ?>
											<li>
												<strong>Dimensions:</strong>
												<?php echo esc_html(get_field('tiles_dimensions')); ?>
											</li>
										<?php endif; ?>

										<?php if (get_field('tiles_thickness')): ?>
											<li>
												<strong>Thickness:</strong>
												<?php echo esc_html(get_field('tiles_thickness')); ?>
											</li>
										<?php endif; ?>
									</ul>
								</div>
							<?php endif; ?>

							<?php if ($has_slabs): ?>
								<!-- Slabs -->
								<div class="bg-secondary/30 rounded-2xl p-8 border border-solid border-border hover:shadow-lg transition-shadow duration-300">
									<h3 class="text-xl font-semibold text-foreground mb-4 flex items-center gap-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
											fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" class="lucide lucide-ruler text-primary">
											<path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z"></path>
											<path d="m14.5 12.5 2-2"></path>
											<path d="m11.5 9.5 2-2"></path>
											<path d="m8.5 6.5 2-2"></path>
											<path d="m17.5 15.5 2-2"></path>
										</svg>
										Slabs
									</h3>

									<ul class="space-y-3 text-muted-foreground">
										<?php if (get_field('slabs_dimensions')): ?>
											<li>
												<strong>Dimensions:</strong>
												<?php echo esc_html(get_field('slabs_dimensions')); ?>
											</li>
										<?php endif; ?>

										<?php if (get_field('slabs_thickness')): ?>
											<li>
												<strong>Thickness:</strong>
												<?php echo esc_html(get_field('slabs_thickness')); ?>
											</li>
										<?php endif; ?>
									</ul>
								</div>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php
		$test_fields = [
			'water_absorption',
			'modulus_of_rupture',
			'compressive_strength',
			'abrasion_resistance',
			'density',
			'flexural_strength',
			'weight_2',
			'weight_3',
			'country',
		];

		$has_test_data = false;

		foreach ($test_fields as $field) {
			if (get_field($field)) {
				$has_test_data = true;
				break;
			}
		}
		?>

		<?php if ($has_test_data): ?>
			<section class="py-20 <?php echo emg_section_class($section_index); ?>">
				<div class="ast-container">

					<h2 class="text-3xl md:text-4xl font-serif text-foreground mb-12 text-center transition-all duration-700 opacity-100 translate-y-0">
						Test Engineering
					</h2>

					<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 max-w-6xl mx-auto">

						<?php if (get_field('water_absorption')): ?>
							<div class="bg-background rounded-xl p-6 border border-solid border-border hover:shadow-xl hover:-translate-y-1 transition-all duration-100">
								<h3 class="text-sm font-medium text-muted-foreground mb-2">Water Absorption</h3>
								<p class="text-foreground font-semibold mb-0">
									<?php echo esc_html(get_field('water_absorption')); ?>
								</p>
							</div>
						<?php endif; ?>

						<?php if (get_field('modulus_of_rupture')): ?>
							<div class="bg-background rounded-xl p-6 border border-solid border-border hover:shadow-xl hover:-translate-y-1 transition-all duration-100">
								<h3 class="text-sm font-medium text-muted-foreground mb-2">Modulus of Rupture</h3>
								<p class="text-foreground font-semibold mb-0">
									<?php echo esc_html(get_field('modulus_of_rupture')); ?>
								</p>
							</div>
						<?php endif; ?>

						<?php if (get_field('compressive_strength')): ?>
							<div class="bg-background rounded-xl p-6 border border-solid border-border hover:shadow-xl hover:-translate-y-1 transition-all duration-100">
								<h3 class="text-sm font-medium text-muted-foreground mb-2">Compressive Strength</h3>
								<p class="text-foreground font-semibold mb-0">
									<?php echo esc_html(get_field('compressive_strength')); ?>
								</p>
							</div>
						<?php endif; ?>

						<?php if (get_field('abrasion_resistance')): ?>
							<div class="bg-background rounded-xl p-6 border border-solid border-border hover:shadow-xl hover:-translate-y-1 transition-all duration-100">
								<h3 class="text-sm font-medium text-muted-foreground mb-2">Abrasion Resistance</h3>
								<p class="text-foreground font-semibold mb-0">
									<?php echo esc_html(get_field('abrasion_resistance')); ?>
								</p>
							</div>
						<?php endif; ?>

						<?php if (get_field('density')): ?>
							<div class="bg-background rounded-xl p-6 border border-solid border-border hover:shadow-xl hover:-translate-y-1 transition-all duration-100">
								<h3 class="text-sm font-medium text-muted-foreground mb-2">Density</h3>
								<p class="text-foreground font-semibold mb-0">
									<?php echo esc_html(get_field('density')); ?>
								</p>
							</div>
						<?php endif; ?>

						<?php if (get_field('flexural_strength')): ?>
							<div class="bg-background rounded-xl p-6 border border-solid border-border hover:shadow-xl hover:-translate-y-1 transition-all duration-100">
								<h3 class="text-sm font-medium text-muted-foreground mb-2">Flexural Strength</h3>
								<p class="text-foreground font-semibold mb-0">
									<?php echo esc_html(get_field('flexural_strength')); ?>
								</p>
							</div>
						<?php endif; ?>

						<?php if (get_field('weight_2')): ?>
							<div class="bg-background rounded-xl p-6 border border-solid border-border hover:shadow-xl hover:-translate-y-1 transition-all duration-100">
								<h3 class="text-sm font-medium text-muted-foreground mb-2">Weight (2cm)</h3>
								<p class="text-foreground font-semibold mb-0">
									<?php echo esc_html(get_field('weight_2')); ?>
								</p>
							</div>
						<?php endif; ?>

						<?php if (get_field('weight_3')): ?>
							<div class="bg-background rounded-xl p-6 border border-solid border-border hover:shadow-xl hover:-translate-y-1 transition-all duration-100">
								<h3 class="text-sm font-medium text-muted-foreground mb-2">Weight (3cm)</h3>
								<p class="text-foreground font-semibold mb-0">
									<?php echo esc_html(get_field('weight_3')); ?>
								</p>
							</div>
						<?php endif; ?>

						<?php if (get_field('country')): ?>
							<div class="bg-background rounded-xl p-6 border border-solid border-border hover:shadow-xl hover:-translate-y-1 transition-all duration-100">
								<h3 class="text-sm font-medium text-muted-foreground mb-2">Country</h3>
								<p class="text-foreground font-semibold mb-0">
									<?php echo esc_html(get_field('country')); ?>
								</p>
							</div>
						<?php endif; ?>

					</div>
				</div>
			</section>
		<?php endif; ?>


		<?php if (get_field('application_1')): ?>
			<section class="py-20 <?php echo emg_section_class($section_index); ?>">
				<div class="ast-container">
					<div class="max-w-4xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
						<h2 class="text-3xl md:text-4xl font-serif text-foreground mb-12 text-center">
							Applications
						</h2>
						<div class="flex flex-wrap justify-center gap-3">
							<?php foreach (range(1, 11) as $i) {
								if (get_field('application_' . $i)) {
							?>
									<span class="px-5 py-3 bg-primary/10 text-foreground rounded-full border border-solid border-borderDark hover:bg-primary hover:text-primary-foreground transition-colors duration-300 cursor-default" style="animation-delay: 0ms;"><?php echo get_field('application_' . $i); ?></span>
							<?php
								}
							}
							?>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php if (get_field('available_1')): ?>
			<section class="py-20 <?php echo emg_section_class($section_index); ?>">
				<div class="ast-container">
					<div class="max-w-4xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
						<h2 class="text-3xl md:text-4xl font-serif text-foreground mb-12 text-center">
							Available Finishes
						</h2>
						<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
							<?php foreach (range(1, 10) as $i) {
								if (get_field("available_$i")) {
							?>
									<div class="bg-background rounded-xl p-4 text-center border border-solid border-border hover:border-primary hover:shadow-lg transition-all duration-300">
										<span class="text-foreground font-medium"><?php echo get_field("available_$i"); ?></span>
									</div>
							<?php
								}
							}
							?>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>


		<?php /* AWB: hide empty FAQ section */ if ( function_exists( 'get_field' ) && get_field( 'faqs_product', get_the_ID() ) ) : ?>
		<section class="py-20 <?php echo emg_section_class($section_index); ?>">
			<div class="ast-container">
				<div class="max-w-4xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
					<h2 class="text-3xl md:text-4xl font-serif text-foreground mb-12 text-center">
						Frequently Asked Questions About <?php the_title(); ?>
					</h2>
					<?php
					get_template_part('/template/faqs/custom-loop-faqs', 'product', ['post_id' => get_the_ID()]);
					?>

				</div>
			</div>
		</section>
		<?php endif; ?>


		<section id="contact" class="py-20 <?php echo emg_section_class($section_index); ?>">
			<div class="ast-container">
				<div class="max-w-2xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
					<h2 class="text-3xl md:text-4xl font-serif text-foreground mb-4 text-center">
						Ask For Free Quotation
					</h2>

					<p class="text-muted-foreground text-center mb-10">
						Fill out the form below and our team will get back to you with a customized quote.
					</p>

					<div class="bg-background rounded-2xl p-8 shadow-lg border border-solid border-border space-y-6 pb-0">

						<style>
							@media (min-width: 600px) {
								.cf7-row {
									display: flex;
									flex-direction: row;
									gap: 16px;
									margin-bottom: 0 !important;
								}

								.cf7-row label {
									flex: 1;
								}

								.cf7-row p {
									margin-bottom: 1.2em;
								}
							}
						</style>
						<?php echo do_shortcode('[contact-form-7 id="1dad632" title="Product Contact"]'); ?>
					</div>
				</div>
			</div>
		</section>

		<section class="py-20 bg-primary">
			<div class="ast-container">
				<div class="max-w-4xl mx-auto text-center transition-all duration-1000 opacity-100 translate-y-0">
					<h2 class="text-3xl md:text-4xl font-serif text-primary-foreground mb-8">
						Contact Us Now
					</h2>

					<div class="flex flex-wrap justify-center gap-4">
						<a
							href="https://api.whatsapp.com/send/?phone=201000390999&text&type=phone_number&app_absent=0"
							target="_blank"
							rel="noopener noreferrer"
							class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors
                           focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2
                           disabled:pointer-events-none disabled:opacity-50
                           [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0
                           bg-secondary hover:bg-secondary/80
                           h-11 rounded-md px-8 gap-2 min-w-[160px]">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="lucide lucide-message-circle">
								<path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
							</svg>
							WhatsApp Us
						</a>

						<!--email_off--><a
							href="mailto:sales@egyptianmarblegranite.com"
							class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors
                           focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2
                           disabled:pointer-events-none disabled:opacity-50
                           [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0
                           bg-secondary hover:bg-secondary/80
                           h-11 rounded-md px-8 gap-2 min-w-[160px]">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="lucide lucide-mail">
								<rect width="20" height="16" x="2" y="4" rx="2"></rect>
								<path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
							</svg>
							Email Us
						</a><!--/email_off-->

						<a
							href="tel:+201000390999"
							class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors
                           focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2
                           disabled:pointer-events-none disabled:opacity-50
                           [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0
                           bg-secondary hover:bg-secondary/80
                           h-11 rounded-md px-8 gap-2 min-w-[160px]">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="lucide lucide-phone">
								<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
							</svg>
							Call Us
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="py-20 bg-background">
			<div class="ast-container">

				<h2 class="text-3xl md:text-4xl font-serif text-foreground mb-12 text-center transition-all duration-700 opacity-100 translate-y-0">
					Related Products
				</h2>

				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">

					<?php

					$primary_term = emg_get_primary_parent_category(get_the_ID());

					$args = [
						'post_type'      => 'emg-product',
						'posts_per_page' => 4,
						'post__not_in'   => [get_the_ID()],
						'orderby'        => 'rand',
					];

					if ($primary_term) {
						$args['tax_query'] = [
							[
								'taxonomy' => 'product-category',
								'field'    => 'term_id',
								'terms'    => [$primary_term->term_id], // array أفضل
							]
						];
					}

					$related_products = new WP_Query($args);



					$delay = 0;

					if ($related_products->have_posts()) :
						while ($related_products->have_posts()) : $related_products->the_post();
					?>

							<a href="<?php the_permalink(); ?>"
								class="group bg-secondary/30 rounded-xl overflow-hidden border border-solid border-border hover:shadow-xl transition-all duration-500 opacity-100 translate-y-0"
								style="transition-delay: <?php echo $delay; ?>ms;">

								<div class="relative overflow-hidden">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('medium_large', [
											'class' => 'w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110'
										]); ?>
									<?php endif; ?>

									<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
								</div>

								<div class="p-5 text-center">
									<h3 class="text-lg font-semibold text-foreground mb-1">
										<?php the_title(); ?>
									</h3>

									<?php if (has_excerpt()) : ?>
										<p class="text-sm text-muted-foreground">
											<?php echo wp_trim_words(get_the_excerpt(), 8); ?>
										</p>
									<?php endif; ?>
								</div>

							</a>

					<?php
							$delay += 150;
						endwhile;
						wp_reset_postdata();
					endif;
					?>

				</div>
			</div>
		</section>
	</div><!-- #primary -->
</main>

</div><!-- #primary -->



<?php get_footer(); ?>
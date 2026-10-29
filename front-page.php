<?php



/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package Astra

 * @since 1.0.0

 */



if (!defined('ABSPATH')) {

	exit(); // Exit if accessed directly.

} ?>
<?php get_header(); ?>
<div <?php astra_primary_class(); ?>>
	<main>
		<?php get_template_part('template/frontpage/frontpage', 'slider'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'categories'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'why'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'about'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'stone_processing'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'shipping_and_delivery'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'ensure'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'mission'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'certifications'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'projects_and_partners'); ?>

        <?php get_template_part('template/frontpage/frontpage', 'faq'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'callToAction'); ?>

	</main>

</div><!-- #primary -->

<?php get_footer(); ?>
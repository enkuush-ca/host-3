<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Makenzie_Blog
 */

get_header(); ?>

	<section id="primary" class="content-area small-12 large-9 cell">

		<main id="main" class="site-main">

			<?php
				$makenzie_search_title_on_off = makenzie_lite_get_theme_mod( 'search_title_on_off', 'on' );
				if ( $makenzie_search_title_on_off != 'off') :
					get_template_part( 'template-parts/header/template-title' );
				endif;
			?>

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content' );

			endwhile;

			/* Custom post navigation */
			makenzie_lite_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();

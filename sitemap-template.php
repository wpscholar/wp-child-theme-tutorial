<?php

/*
 * Template Name: Sitemap Template
 */

get_header();
the_post();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'content', 'page' ); ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
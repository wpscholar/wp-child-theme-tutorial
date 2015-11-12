<?php

/*
 * Template Name: Sitemap Template
 */

get_header();
the_post();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php twentyfifteen_post_thumbnail(); ?>

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

		</article><!-- #post-## -->


	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
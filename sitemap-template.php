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

				<?php
				$query = new WP_Query( array(
					'post_type'   => array( 'post', 'page' ),
					'post_status' => 'publish',
					'orderby'     => 'title menu_order',
					'order'       => 'ASC',
					'nopaging'    => true
				) );
				?>

				<?php if ( $query->have_posts() ): ?>
					<ul>
						<?php while ( $query->have_posts() ): ?>
							<?php $query->the_post(); ?>
							<li>
								<a href="<?php echo esc_url( get_the_permalink( $query->post ) ); ?>">
									<?php echo esc_html( get_the_title( $query->post ) ); ?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<?php wp_reset_postdata(); ?>

			</div><!-- .entry-content -->

			<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

		</article><!-- #post-## -->


	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
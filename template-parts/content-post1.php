<?php
/*
Template Name: Шаблон поста
Template Post Type: post
*/

if (  is_front_page() ){
	get_header('home');
}

else {
	get_header();
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				gk_psr__theme_posted_on();
				gk_psr__theme_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
        
	</header><!-- .entry-header -->

	<?php gk_psr__theme_post_thumbnail(); ?>

	<div class="entry-content content-wrap">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gk-psr__theme' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gk-psr__theme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php

if (  is_front_page() ){
	get_footer('home');
}

else {
	get_footer();
}
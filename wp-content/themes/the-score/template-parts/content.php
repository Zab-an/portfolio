<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title oeuvre-titre">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title oeuvre-titre"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				the_score_posted_on();
				the_score_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php if ( (is_front_page() || is_home() || is_category() || is_archive() || is_page_template('template-blog.php')) and (!is_page_template( 'templeat-full-width.php'))) : ?>
 
		<?php if ( has_post_thumbnail() ) { ?>
		<a class="app-img-effect" href="<?php the_permalink(); ?>">	
			<div class="app-first">
				<div class="app-sub">
					<div class="app-basic">

						<?php the_post_thumbnail( 'post-thumbnail', array( 'itemprop' => 'image' ) ); ?>		
						
					</div>
				</div>
			</div>
		</a>
		<?php } ?>
		
	<?php the_excerpt(); ?>
	
	<?php else : ?>

	<div class="entry-content">
		<?php


        ?>
        <p class="oeuvre-technologie"> Langages utilisés : <?php echo get_post_meta(get_the_ID(), 'langages', true);

            ?>
        </p>
        <p class="oeuvre-technologie"> Librairies utilisés : <?php echo get_post_meta(get_the_ID(), 'librairies', true);

            ?>
        </p>
        <p class="oeuvre-interoperabilite"> Format du projet : <?php echo get_post_meta(get_the_ID(), 'format-de-communication', true);

            ?>
        </p>
        <p class="oeuvre-date"> Durée de réalisation : <?php echo get_post_meta(get_the_ID(), 'duree', true);

            ?>
        </p>
        <p class="oeuvre-auteur"> Auteurs : <?php echo get_post_meta(get_the_ID(), 'auteurs', true);

            ?>
        </p>
        <?php

		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'the-score' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );




		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-score' ),
			'after'  => '</div>',
		) );


		?>
	</div><!-- .entry-content -->
<?php endif; ?>
	<footer class="entry-footer">
		<?php the_score_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

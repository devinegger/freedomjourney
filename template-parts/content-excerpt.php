<?php
/**
 * Template part for displaying post excerpts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FreedomJourney
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		<?php if ( has_post_thumbnail() ) { ?>
            <figure class="featured-image-small">
                <?php the_post_thumbnail( 'freedomjourney-small-thumb' ); ?>
            </figure>
        <?php } ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	
	<?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
            <?php freedomjourney_posted_on(); ?>
        </div><!-- .entry-meta -->
    <?php endif; ?>

	<footer class="entry-footer">
		<?php freedomjourney_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<hr/>
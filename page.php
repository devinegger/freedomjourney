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
 * @package FreedomJourney
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <div class="page-header-image">
            <?php the_post_thumbnail(); ?>
            <img src="<?php echo get_template_directory_uri().'/images/bottom_tear3.png' ?>" style="position: absolute; bottom: 0;" />
        </div>
        <header class="page-header">
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
        <main id="main" class="site-main" role="main">
		    <div class="page-section container">
                <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FreedomJourney
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="page-header-image">
            <img src="<?php echo get_template_directory_uri().'/images/landing-stage.jpg' ?>" />
            <img src="<?php echo get_template_directory_uri().'/images/bottom_tear3.png' ?>" style="position: absolute; bottom: 0;" />
        </div>
        <header class="page-header">
            <h1 class="page-title">Blog</h1>
        </header><!-- .entry-header -->
		<main id="main" class="site-main" role="main">
            <div class="page-section container">
		        <div class="row">
                    <div class="nine columns">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'single' );

                            the_post_navigation();

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                    <div class="three columns">
                        <?php get_sidebar(); ?>
                    </div>
                </div><!-- .row -->
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

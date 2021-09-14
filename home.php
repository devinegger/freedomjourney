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
                                
                                // only show exceprt
                                get_template_part( 'template-parts/content', 'excerpt');

                            endwhile; // End of the loop.
                            
                            the_posts_navigation();
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

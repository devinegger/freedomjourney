<?php
/* Template Name: ContactPage */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="page-header-image">
		        <?php the_post_thumbnail(); ?>
                <img src="<?php echo get_template_directory_uri().'/images/bottom_tear3.png' ?>" style="position: absolute; bottom: 0;" />
		    </div>
		    <header class="page-header">
                <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->
		    <div class="page-section container">
		        <div class="row">
                    <div class="six columns">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );


                        endwhile; // End of the loop.
                        ?>
                    </div>
                    <div class="six columns" style="margin: 30px 0; border-radius: 5px;">
                        <?php get_sidebar(); ?>
                    </div>
                </div><!-- .row -->    
            </div>
<?php
get_footer();

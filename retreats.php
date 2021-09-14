<?php 

/* Template Name: RetreatPage */

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
		
		    <div class="page-section">
                <div class="container">
                    <p style="text-align: center;">
                        <!--<img src="<?php echo get_template_directory_uri() . '/images/tri-swirl.png' ?>"  style="width: 100px;"/>-->
                        <span style="font-size: 2.6em; padding-top: 20px; font-family: 'Oleo Script Swash Caps', cursive;">Upcoming Retreats</span>
                    </p>
                    <div class="row">
                        <div class="four columns offset-by-two">
                            <h3><a href="<?php echo site_url() . '/upcoming/italy/' ?>">Italy</a></h3>
                            <a href="<?php echo site_url() . '/upcoming/italy/' ?>"><img src="<?php echo get_template_directory_uri() . '/images/italyretreat.jpg' ?>" height="180" width="auto" /></a>  
                            <p>June 23rd-30th
                            <br/>Il Borghino, Italy</p>
                        </div>
                        <div class="four columns">
                            <h3><a href="<?php echo site_url() . '/upcoming/mexico/' ?>">Mexico</a></h3>
                            <a href="<?php echo site_url() . '/upcoming/mexico/' ?>"><img src="<?php echo get_template_directory_uri() . '/images/mexicoretreat.jpg' ?>" height="180" width="auto" /></a>
                            <p>January 13-20, 2018
                            <br/>Troncones, Mexico</p>
                        </div>
                        <!-- <div class="four columns">
                            <h3>Sunrise Ranch</h3>
                            <img src="<?php echo get_template_directory_uri() . '/images/sunriseretreat.jpg' ?>" height="180" width="auto" />  
                            <p>Coming Soon...
                            <br/>Sunrise Mtn Ranch, CO</p>
                        </div> -->
                    </div>
                </div>
                </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

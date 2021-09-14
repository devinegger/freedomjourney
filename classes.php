<?php
/* Template Name: ClassPage */

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
                    <div class="eight columns">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );


                        endwhile; // End of the loop.
                        ?>
                    </div>
                    <div class="four columns" style="background: #cef0fb; margin: 30px 0; border-radius: 5px;">
                        <?php get_sidebar(); ?>
                    </div>
                </div><!-- .row -->   
                <div class="table-container">
                    <table class="u-full-width" style="text-align: left;" cellpadding="1" cellspacing="1">
                      <thead>
                        <tr>
                          <th>Day</th>
                          <th>Time</th>
                          <th>Class</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Mondays</td>
                          <td>1:00pm - 2:15pm</td>
                          <td>Aspen Club Yoga</td>
                        </tr>
                        <tr>
                          <td>Thursdays</td>
                          <td>9:30am - 11:00am</td>
                          <td>Venus Yoga Circle</td>
                        </tr>
                        <tr>
                          <td>Thursdays</td>
                          <td>11:30am - 12:30pm</td>
                          <td>Lunch Hour Yoga</td>
                        </tr>
                        <tr>
                          <td>Thursdays</td>
                          <td>1:00pm - 2:15pm</td>
                          <td>Aspen Club Yoga</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <p style="text-align: center; font-size: 1.8em;">See individual class pages for details and costs.</p>
                <div class="horizontal-menu">                        
                    <ul>
                        <li><a href="<?php echo site_url() . '/classes/venus-yoga-circle/' ?>">
                                <img src="<?php echo get_template_directory_uri().'/images/venus.png'?>" style="width: 60px;" />
                                <br/>Venus Yoga Circle</a></li>
                        <li><a href="<?php echo site_url() . '/classes/lunch-hour/' ?>">
                                <img src="<?php echo get_template_directory_uri().'/images/lunchhour.png'?>" style="width: 60px;" />
                                <br/>Lunch Hour Yoga</a></li>
                        <li><a href="<?php echo site_url() . '/classes/aspen-club/' ?>">
                                <img src="<?php echo get_template_directory_uri().'/images/aspen.png'?>" style="width: 60px;" />
                                <br/>Aspen Club Yoga</a></li>
                        <li><a href="<?php echo site_url() . '/classes/corporate/' ?>">
                                <img src="<?php echo get_template_directory_uri().'/images/corporatey.png'?>" style="width: 60px;" />
                                <br/>Corporate Yoga</a></li>
                        <li><a href="<?php echo site_url() . '/classes/private-classes/' ?>">
                                <img src="<?php echo get_template_directory_uri().'/images/private.png'?>" style="width: 60px;" />
                                <br/>Private Classes</a></li>
                    </ul>
                </div> 
            </div>
<?php
get_footer();

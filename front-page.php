<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FreedomJourney
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		    <div class="page-header-image">
                <?php if ( get_header_image() ) : ?>
                    <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" style="min-height: 220px;">
                    <img src="<?php echo get_template_directory_uri().'/images/bottom_tear3.png' ?>" style="position: absolute; bottom: 0;" />
                <?php endif; // End header image check. ?>
            </div>
		    <div class="front-page-section">
                <div class="container">
                    <p style="text-align: center;">
                        <img src="<?php echo get_template_directory_uri() . '/images/tri-swirl.png' ?>"  style="width: 100px; margin-bottom: 15px;"/>
                        <br/><span style="text-transform: uppercase; font-size: 1.1em;">Where will your <b>Freedom Journey</b> lead you?</span>
                    </p>
                    <hr/>
                    <div class="row">
                        <div class="six columns">
                            <p>We travel to exotic locations within the safety of a group setting. We make connections with each other that can last a lifetime. We make connections with ourselves that go deeper than that which we access in our daily lives. We eat healthy, lovingly prepared, local food.</p>
                        </div>
                        <div class="six columns">
                            <p>We walk on roads less traveled, with indigenous peoples and learn about their culture. We may listen to music, dance the night away, or meditate by a pond for hours.... the choice is always yours. This gallery and video illustrate only a taste of the deliciousness we experience!</p>
                        </div>
                    </div>
                    <p style="text-align: center;">
                        <a href="<?php echo site_url() . '/retreats/' ?>" class="blocklink green">Retreats</a>
                    </p>
                </div>
            </div>
            <div class="front-page-section" style="position: relative;">
                <img src="<?php echo get_template_directory_uri().'/images/top_tear1.png' ?>" style="position: absolute; top: 0; z-index: 99;" />
                <div class="ribbon">
                    <p style="color: white; text-shadow: 2px 1px 4px #333;">"Sabré is an inspiring woman with a strong passion for life. From her retreat, I learned a lot about yoga, about life, and about myself. I am now integrating these new discoveries into my ‘regular’ daily life.”
                    <br/><br/>Jenny A., Vancouver, BC</p>
                </div>
                <img src="<?php echo get_template_directory_uri() . '/images/sabrebackbend.jpg' ?>"  style="min-height: 240px;"/>
                <img src="<?php echo get_template_directory_uri().'/images/bottom_tear2.png' ?>" style="position: absolute; bottom: 0;" />
            </div>
            <div class="front-page-section" style="position: relative;">
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
                        <!--<div class="four columns">
                            <h3>Sunrise Ranch</h3>
                            <img src="<?php echo get_template_directory_uri() . '/images/sunriseretreat.jpg' ?>" height="180" width="auto" />  
                            <p>Coming Soon...
                            <br/>Sunrise Mtn Ranch, CO</p>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="front-page-section" style="position: relative;">
                <img src="<?php echo get_template_directory_uri().'/images/top_tear3.png' ?>" style="position: absolute; top: 0; z-index: 99;" />
                <p style="color: white; position: absolute; width: 70%; top: 30%; right: 10%; text-shadow: 2px 1px 4px #333; padding: 10px; background: rgba(72, 135, 115, 0.68); border-radius: 15px; font-size: 1.3em; line-height: 1.8em;">"I teach intuitively, drawing from the energy of the class and the Divine in us all, for guidance. I like and provide variety and I love to have fun!" 
                <br/><span style="font-family: 'Merienda One', cursive; font-size: 1.3em;">~ Sabré</span></p>
                <img src="<?php echo get_template_directory_uri() . '/images/viewfrompath.jpg' ?>"  style="min-height: 240px;"/>
                <img src="<?php echo get_template_directory_uri().'/images/bottom_tear1.png' ?>" style="position: absolute; bottom: 0;" />
            </div>
            <div class="front-page-section">
                <div class="container">
                        <p style="text-align: center;">
                            <br/><span style="font-size: 2.6em; font-family: 'Oleo Script Swash Caps', cursive;">Yoga Classes</span>
                        </p>
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
                    <!-- <p style="text-align: center;">
                        <a href="" class="blocklink green">Classes</a>
                    </p> -->
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

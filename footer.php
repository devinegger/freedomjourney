<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FreedomJourney
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		    <div class="row">
		        <div class="three columns">
		            <p><img class="footer-logo" src="<?php echo get_template_directory_uri() . '/images/freedom_journey_logo_med2.png' ?>" />
		            <br/><a href="tel:970.581.3889">970.581.3889</a></p>
		        </div>
		        <div class="six columns">
		            <p style="font-family: 'Oleo Script Swash Caps', cursive; font-size: 1.5em; line-height: 1.9em;">The end is nothing; the journey is everything.</p>
		            <div id="newsletter-signup" style="text-align: center;">
                        <!-- Begin MailChimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            #mc_embed_signup{clear:left; width:90%; margin: auto; padding: 2% 0;}
                            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="mc_embed_signup">
                            <form action="//freedomjourneyyogaretreats.us8.list-manage.com/subscribe/post?u=a9cac04771a6d8eb77345fd51&amp;id=7f816b2f7a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email for updates" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cb1a6f75cf1f075e9ca57df48_4c0c015906" tabindex="-1" value=""></div>
                                <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button">
                                </div>
                            </form>
                        </div><!--End mc_embed_signup-->
                    </div>
		            <?php echo do_shortcode( ' [social_icons_group id="317"] ' );?>
		        </div>
		        <div class="three columns">
                    <ul style="list-style-type: none; padding: 0; margin-top: 15%;">
                        <li><a href="<?php echo site_url() . '/retreats' ?>">RETREATS</a></li>
                        <li><a href="<?php echo site_url() . '/classes' ?>">CLASSES</a></li>
                        <li><a href="<?php echo site_url() . '/contact' ?>">CONTACT</a></li>
                    </ul>
		        </div>
		    </div>
		</div><!-- .site-info -->
		<div class="footer-bottom">
		    <p>&copy;1999-2017 Freedom Journey Yoga Retreats - All Rights Reserved
		    <br/>Built by: Dreamscape Development</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

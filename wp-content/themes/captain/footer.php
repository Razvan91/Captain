
<footer id="footer">
    <div class="copyright">&copy; 2014 The Captain</div>
    <div class="footer-content">
        <nav class="sub-menu">

            <?php  wp_nav_menu( array( 'theme_location' => 'footer' ,"container"=>false, "menu_class"=>"") ); ?>
        </nav>
        <div class="social-newsletter">
            <ul>


                <li><a href="<?php the_field('google_plus_url', 'option'); ?>" title="Google Plus" target="_blank"><span class="icon icon-google-plus"></span></a></li>
                <li><a href="<?php the_field('instagram_url', 'option'); ?>" title="Instagram" target="_blank"><span class="icon icon-instagram"></span></a></li>
                <li><a href="<?php the_field('twitter_url', 'option'); ?>" title="Twitter" target="_blank"><span class="icon icon-twitter"></span></a></li>
                <li><a href="<?php the_field('vimeo_url', 'option'); ?>" title="Vimeo" target="_blank"><span class="icon icon-vimeo"></span></a></li>
                <li><a href="<?php the_field('facebook_url', 'option'); ?>" title="Facebook" target="_blank"><span class="icon icon-facebook"></span></a></li>
            </ul>
            <div class="newsletter">
                <input type="text" name="email_newsletter" placeholder="Subscribe.."/>
                <button type="submit" name="submit_newsletter">Submit</button>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- Scripts -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/unslider.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/the-captain.js"></script>
</body>
</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package classe
 */

?>

   </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
      <!-- <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'snap' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'snap' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'snap' ), 'snap', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
      </div> --><!-- .site-info -->
       
      <div class="container">
        
        
        <div class="row">
          <!-- Corporate Headquaters -->
          <div class="col-sm-12 col-md-3">
            <img src="<?php bloginfo('template_url'); ?>/img/logo@2x.png"/>
          </div>
          <!-- Contact Us -->
          <div class="col-sm-12 col-md-3">
            <h5>Contact Us</h5>
            <ul class='main-items'>
              <li><a href="https://wego.here.com/directions/mix//Class%C3%A9-Dance-Company,-11267-Waples-Mill.-Rd,-Oakton,-Virginia:e-eyJuYW1lIjoiQ2xhc3NcdTAwZTkgRGFuY2UgQ29tcGFueSIsImFkZHJlc3MiOiIxMTI2NyBXYXBsZXMgTWlsbC4gUmQsIE9ha3RvbiwgVmlyZ2luaWEiLCJsYXRpdHVkZSI6MzguODY2ODMsImxvbmdpdHVkZSI6LTc3LjMzNjA2LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjMzOTgwMDc4OTY5NTUwOX0=?map=38.86683,-77.33606,15,normal&fb_locale=en_US" target="_blank"><i class="material-icons" style="margin-bottom:20px;">&#xE0C8;</i><span>11267 Waples Mill. Rd <br/>Oakton, VA 22124</span></a></li>
              <li><a href="tel:2027639805"><i class="material-icons">&#xE0CD;</i><span>(202) 763-9805</span></a></li>
              <li><a href="mailto:info@snapinc.net"><i class="material-icons">&#xE0BE;</i><span>info@classedancestudio.com</span></a></li>
            </ul>
          </div>
          <!-- Resources -->
          <div class="col-sm-12 col-md-3">
            <h5>Resources</h5>
            <ul class='main-items'>
              <li><a href="#">Events Calendar</a></li>
              <li><a href="#">Class Enrollment</a></li>
              <li><a href="#">Terms and Conditions</a></li>
            </ul>
          </div>
          <!-- Social -->
          <div class="col-sm-12 col-md-3">
            <h5>Social</h5>
            <ul class='main-items'>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer><!-- #colophon -->
  </div><!-- #page -->

  </div>
<!--/#inner-wrap-->
</div>
<!--/#outer-wrap-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main-menu.js"></script>
<?php wp_footer(); ?>
</body>
</html>

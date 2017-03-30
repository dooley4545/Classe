<?php
/**
 * Template Name: Teams
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package classe
 */
?>
<?php get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <header class="entry-header backpage" style="background-image: url('<?php the_field('background_picture'); ?>')">
      <div class="title">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
          </div>
        </div>
      </div>
    </header><!-- .entry-header -->
    <section id="team-pro" class="team">
      <div class="container">
        <div class="row">
          <div class="content col-md-12 col-sm-12">
            <div class="block-content">
              <div class="row">
                <div class="col-md-12 col-sm-12 team-lead">
                  <h1>Pro</h1>
                </div>
              </div>
              <br/><br/>
              <div class="row">
                <div class="col-md-4 col-sm-12 team-lead">
                  <video class="img-responsive" controls>
                    <source src="<?php bloginfo('template_url'); ?>/img/performance1.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                  </video>
                  <h3>Classe Pro Company</h3>
                  <p>Nullam rutrum in massa in mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus dictum tortor, eget suscipit nunc aliquet nec. Nulla ante erat, mollis sed libero ac, efficitur tincidunt sem. Vivamus consequat libero ante, ac viverra mauris aliquet sit amet. Nullam in nisl neque. Nunc dignissim interdum ultricies. Nunc massa diam, accumsan quis magna at, sodales efficitur ipsum. Integer luctus dolor dignissim dictum volutpat. Curabitur lorem odio, pellentesque in lectus id, lacinia vestibulum metus.</p>
                </div>
                <div class="col-md-4 col-sm-12 team-lead">
                  <video class="img-responsive" controls>
                    <source src="<?php bloginfo('template_url'); ?>/img/performance2.mov" type="video/webm">
                    Your browser does not support HTML5 video.
                  </video>
                  <h3>Ladies Pro Classé</h3>
                  <p>Nullam rutrum in massa in mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus dictum tortor, eget suscipit nunc aliquet nec. Nulla ante erat, mollis sed libero ac, efficitur tincidunt sem. Vivamus consequat libero ante, ac viverra mauris aliquet sit amet. Nullam in nisl neque. Nunc dignissim interdum ultricies. Nunc massa diam, accumsan quis magna at, sodales efficitur ipsum. Integer luctus dolor dignissim dictum volutpat. Curabitur lorem odio, pellentesque in lectus id, lacinia vestibulum metus.</p>
                </div>
                <div class="col-md-4 col-sm-12 team-lead">
                  <video class="img-responsive" controls>
                    <source src="<?php bloginfo('template_url'); ?>/img/performance3.mov" type="video/webm">
                    Your browser does not support HTML5 video.
                  </video>
                  <h3>Kids Pro Classé</h3>
                  <p>Nullam rutrum in massa in mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus dictum tortor, eget suscipit nunc aliquet nec. Nulla ante erat, mollis sed libero ac, efficitur tincidunt sem. Vivamus consequat libero ante, ac viverra mauris aliquet sit amet. Nullam in nisl neque. Nunc dignissim interdum ultricies. Nunc massa diam, accumsan quis magna at, sodales efficitur ipsum. Integer luctus dolor dignissim dictum volutpat. Curabitur lorem odio, pellentesque in lectus id, lacinia vestibulum metus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="team-pro" class="team">
      <div class="container">
        <div class="row">
          <div class="content col-md-12 col-sm-12">
            <div class="block-content">
              <div class="row">
                <div class="col-md-12 col-sm-12 team-lead">
                  <h1>Amateur</h1>
                </div>
              </div>
              <br/><br/>
              <div class="row">
                <div class="col-md-4 col-sm-12 team-lead">
                  <video class="img-responsive" controls>
                    <source src="<?php bloginfo('template_url'); ?>/img/performance1.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                  </video>
                  <h3>Couples Classé</h3>
                  <p>Nullam rutrum in massa in mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus dictum tortor, eget suscipit nunc aliquet nec. Nulla ante erat, mollis sed libero ac, efficitur tincidunt sem. Vivamus consequat libero ante, ac viverra mauris aliquet sit amet. Nullam in nisl neque. Nunc dignissim interdum ultricies. Nunc massa diam, accumsan quis magna at, sodales efficitur ipsum. Integer luctus dolor dignissim dictum volutpat. Curabitur lorem odio, pellentesque in lectus id, lacinia vestibulum metus.</p>
                </div>
                <div class="col-md-4 col-sm-12 team-lead">
                  <video class="img-responsive" controls>
                    <source src="<?php bloginfo('template_url'); ?>/img/performance2.mov" type="video/webm">
                    Your browser does not support HTML5 video.
                  </video>
                  <h3>Ladies Classe</h3>
                  <p>Nullam rutrum in massa in mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus dictum tortor, eget suscipit nunc aliquet nec. Nulla ante erat, mollis sed libero ac, efficitur tincidunt sem. Vivamus consequat libero ante, ac viverra mauris aliquet sit amet. Nullam in nisl neque. Nunc dignissim interdum ultricies. Nunc massa diam, accumsan quis magna at, sodales efficitur ipsum. Integer luctus dolor dignissim dictum volutpat. Curabitur lorem odio, pellentesque in lectus id, lacinia vestibulum metus.</p>
                </div>
                <div class="col-md-4 col-sm-12 team-lead">
                  <video class="img-responsive" controls>
                    <source src="<?php bloginfo('template_url'); ?>/img/performance3.mov" type="video/webm">
                    Your browser does not support HTML5 video.
                  </video>
                  <h3>Kids Classe</h3>
                  <p>Nullam rutrum in massa in mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus dictum tortor, eget suscipit nunc aliquet nec. Nulla ante erat, mollis sed libero ac, efficitur tincidunt sem. Vivamus consequat libero ante, ac viverra mauris aliquet sit amet. Nullam in nisl neque. Nunc dignissim interdum ultricies. Nunc massa diam, accumsan quis magna at, sodales efficitur ipsum. Integer luctus dolor dignissim dictum volutpat. Curabitur lorem odio, pellentesque in lectus id, lacinia vestibulum metus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="page-content">
            
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
        </div>
      </div>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

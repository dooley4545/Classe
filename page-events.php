<?php
/**
 * Template Name: Events
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
    <section id="events-upcoming">
      <div class="container">
        <div class="row">
          <div class="content col-md-12 col-sm-12">
            <div class="block">
              <h2>Upcoming Events</h2>
              <div class="events-list">
                <div class="row">
                  <?php echo do_shortcode( ' [calendar id="67"] ' ); ?>
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

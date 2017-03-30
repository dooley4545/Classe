<?php
/**
 * Template Name: Instructors
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
    <section id="instructors-founder" class="instructors">
      <img src="<?php the_field('founder-image'); ?>" class="img-responsive instructor-img" alt="Responsive image" />
      <div class="instructor-content">  
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="block">
                <h1><?php the_field('founder_name'); ?></h1>
                <h4>Founder and Instructor</h4>
                <hr>
                <p><?php the_field('founder_bio'); ?></p>
                <br />
                <button type="button" class="btn btn-default" data-toggle="modal" data-target=".linda-video">View Video</button>
                <div class="modal fade linda-video" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div><?php the_field('founder_bio'); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php if( have_rows('teacher_info') ): ?>

        <?php while( have_rows('teacher_info') ): the_row(); 

          // vars
          $name = get_sub_field('instructor_name');
          $bio = get_sub_field('instructor_bio');
          $image = get_sub_field('instructor_image');
          ?>
          <section class="instructors teacher">
            <img src="<?php echo $image; ?>" class="img-responsive instructor-img" alt="Responsive image" />
            <div class="instructor-content">  
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-sm-12 filler"></div>
                  <div class="col-md-6 col-sm-12">
                    <div class="block">
                      <h1><?php echo $name; ?></h1>
                      <h4>instructor</h4>
                      <hr>
                      <p><?php echo $bio; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        <?php endwhile; ?>

      <?php endif; ?>
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

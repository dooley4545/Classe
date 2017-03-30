<?php
/**
 * Template Name: Backpage
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

get_header(); ?>
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
    <section class="page-content">
      <div class="container">
        <div class="row">
          <div class="content col-md-8 col-sm-12">
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

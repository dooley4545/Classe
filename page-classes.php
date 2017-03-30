<?php
/**
 * Template Name: Classes
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
    <div class="classes">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#class1" aria-controls="class1" role="tab" data-toggle="tab">Bachata</a></li>
        <li role="presentation"><a href="#class2" aria-controls="class2" role="tab" data-toggle="tab">Salsa</a></li>
        <li role="presentation"><a href="#class3" aria-controls="class3" role="tab" data-toggle="tab">Ladies Styling</a></li>
        <li role="presentation"><a href="#class4" aria-controls="class4" role="tab" data-toggle="tab">Kids</a></li>
        <li role="presentation"><a href="#class5" aria-controls="class5" role="tab" data-toggle="tab">Agility/Stretching</a></li>
      </ul>
      <div class="tab-content">
      <?php if( have_rows('class_entry') ): ?>

        <?php while( have_rows('class_entry') ): the_row(); 

          // vars
          $title = get_sub_field('class_title');
          $description = get_sub_field('class_description');
          $bg = get_sub_field('class_bg');
          $video = get_sub_field('class_youtube_embed');
          $time = get_sub_field('class_time');
          ?>
          
            <div role="tabpanel" class="tab-pane" id="">
              <div class="container">
                <div class="row">
                  <!-- <div class="col-md-6 col-sm-12 picture">
                    <img src="<?php echo $bg; ?>" class="img-responsive" alt="Responsive image" />
                  </div> -->
                  <div class="col-md-6 col-sm-12">
                    <h2><?php echo $title; ?></h2>
                    <p><strong><?php echo $time; ?></strong></p>
                    <br />
                    <p><?php echo $description; ?></p>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="img-responsive" alt="Responsive image">
                      <?php echo $video; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <?php endwhile; ?>

      <?php endif; ?> 
      </div>           
    </div>
    <section id="classes-calendar">
      <div class="container">
        <div class="row">
          <div class="content col-md-12 col-sm-12">
            <div class="block">
              <h2>Group Lessons</h2>
              <br/>
              <?php echo do_shortcode( ' [calendar id="64"] ' ); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="classes-rates">
      <div class="container">
        <div class="row">
          <div class="content col-md-12 col-sm-12">
            <div class="block">
              <h2>Private Lessons</h2>
              <br/>
              <div class="row">
                <div class="col-md-4 col-sm-12 rate">
                  <ul class="package">
                    <li class="header">Package 1</li>
                    <li class="price">$70</li>
                    <li>Includes 1</li>
                    <li>Includes 2</li>
                    <li class="exclude">Includes 3</li>
                    <li class="exclude">Includes 4</li>
                    <li class="enroll"><button class="btn btn-default">Sign Up</button></li>
                  </ul>  
                </div>
                <div class="col-md-4 col-sm-12 rate">
                  <ul class="package">
                    <li class="header">Package 3</li>
                    <li class="price">$100</li>
                    <li>Includes 1</li>
                    <li>Includes 2</li>
                    <li>Includes 3</li>
                    <li class="exclude">Includes 4</li>
                    <li class="enroll"><button class="btn btn-default">Sign Up</button></li>
                  </ul>  
                </div>
                <div class="col-md-4 col-sm-12 rate">
                  <ul class="package">
                    <li class="header">Package 3</li>
                    <li class="price">$120</li>
                    <li>Includes 1</li>
                    <li>Includes 2</li>
                    <li>Includes 3</li>
                    <li>Includes 4</li>
                    <li class="enroll"><button class="btn btn-default">Sign Up</button></li>
                  </ul>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="classes-workshops">
      <div class="container">
        <div class="row">
          <div class="content col-md-12 col-sm-12">
            <div class="block">
              <h2>Workshops</h2>
              <div class="row">
                <div class="col-md-8 col-sm-12 workshop">
                  
                </div>
                <div class="col-md-4 col-sm-12 workshop">
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

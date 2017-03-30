<section id="home-intro" class="image-right">
  <img src="<?php bloginfo('template_url'); ?>/img/home-intro.jpg" class="img-responsive bg-right"/>
  <div class="block-content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h1>Welcome to Classé Dance Company!</h1>
          <br/>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ex ante, ornare euismod laoreet elementum, efficitur non quam. Quisque vehicula, eros a interdum faucibus, mi nunc lacinia ligula, vitae dignissim tortor eros sed nunc.</p>
          <hr>
          <h2>Linda Saenz</h2>
          <h3>Your Instructor</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ex ante, ornare euismod laoreet elementum, efficitur non quam. Quisque vehicula, eros a interdum faucibus, mi nunc lacinia ligula, vitae dignissim tortor eros sed nunc. Praesent id purus at lacus elementum lobortis vitae vitae lectus.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="home-videos">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div class="owl-carousel owl-theme">
        <?php if( have_rows('home_video_slider') ): ?>

          <?php while( have_rows('home_video_slider') ): the_row(); 

            // vars
            $video = get_sub_field('video');

            ?>
            <div class="slide">
             <?php echo $video; ?></h5>
            </div>

          <?php endwhile; ?>

        <?php endif; ?> 
      </div>

      <script>
        $(document).ready(function(){
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:15,
            nav:true,
            navText: ["<i class='material-icons'>chevron_left</i>","<i class='material-icons'>chevron_right</i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                },
                1480:{
                    items:3
                }
            }
          });
        });
      </script>
      </div>
    </div>
  </div>
</section>
<section id="home-tabs">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#classe_family" aria-controls="classe_family" role="tab" data-toggle="tab">Classe Family</a></li>
    <li role="presentation"><a href="#studio" aria-controls="studio" role="tab" data-toggle="tab">Studio</a></li>
    <li role="presentation"><a href="#instructors" aria-controls="instructors" role="tab" data-toggle="tab">Instructors</a></li>
    <li role="presentation"><a href="#classes" aria-controls="classes" role="tab" data-toggle="tab">Classes</a></li>
    <li role="presentation"><a href="#performances" aria-controls="performances" role="tab" data-toggle="tab">Performances</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="classe_family">
      <div class='container'>
        <div class="row">
          <div class="col-md-6">
            <h2>Classe Family</h2>
            <br/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ex ante, ornare euismod laoreet elementum, efficitur non quam. Quisque vehicula, eros a interdum faucibus, mi nunc lacinia ligula, vitae dignissim tortor eros sed nunc. Praesent id purus at lacus elementum lobortis vitae vitae lectus.</p>
          </div>
          <div class="col-md-6">
            
          </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="studio">
      <div class='container'>
        <div class="row">
          <div class="col-md-6">
            <h2>Studio</h2>
            <br/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ex ante, ornare euismod laoreet elementum, efficitur non quam. Quisque vehicula, eros a interdum faucibus, mi nunc lacinia ligula, vitae dignissim tortor eros sed nunc. Praesent id purus at lacus elementum lobortis vitae vitae lectus.</p>
          </div>
          <div class="col-md-6">
            <img src="<?php bloginfo('template_url'); ?>/img/studio.jpg" class="img-responsive"/>
          </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="instructors">
      <div class='container'>
        <div class="row">
          <div class="col-md-6">
            <h2>Instructors</h2>
            <br/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ex ante, ornare euismod laoreet elementum, efficitur non quam. Quisque vehicula, eros a interdum faucibus, mi nunc lacinia ligula, vitae dignissim tortor eros sed nunc. Praesent id purus at lacus elementum lobortis vitae vitae lectus.</p>
          </div>
          <div class="col-md-6">
            
          </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="classes">
      <div class='container'>
        <div class="row">
          <div class="col-md-6">
            <h2>Classes</h2>
            <br/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ex ante, ornare euismod laoreet elementum, efficitur non quam. Quisque vehicula, eros a interdum faucibus, mi nunc lacinia ligula, vitae dignissim tortor eros sed nunc. Praesent id purus at lacus elementum lobortis vitae vitae lectus.</p>
          </div>
          <div class="col-md-6">
            
          </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="performances">
      <div class='container'>
        <div class="row">
          <div class="col-md-6">
            <h2>Performances</h2>
            <br/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ex ante, ornare euismod laoreet elementum, efficitur non quam. Quisque vehicula, eros a interdum faucibus, mi nunc lacinia ligula, vitae dignissim tortor eros sed nunc. Praesent id purus at lacus elementum lobortis vitae vitae lectus.</p>
          </div>
          <div class="col-md-6">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

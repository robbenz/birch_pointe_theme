<!-- COURSE FEATURES
================================================== -->
<section id="course-features">
<div class="container">

  <div class="section-header">
    <h2>Course Features</h2>
  </div><!-- section-header -->

  <div class="row">

    <?php

    $loop = new WP_Query(
      array(
        'post_type' => 'course_feature',
        'orderby'   => 'post_id',
        'order'     => 'ASC'
      )
    );

    while( $loop->have_posts() ) : $loop->the_post();

    ?>
    <div class="col-sm-2 col-xs-4">
      <i class="course-icon"><?php the_post_thumbnail('thumbnail'); ?></i>
      <h4><?php the_title(); ?></h4>
    </div><!-- end col -->

      <?php endwhile; wp_reset_query(); ?>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- course-features -->

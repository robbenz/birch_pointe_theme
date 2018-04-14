
<?php
// $features_section_image = get_field('features_section_image');
// $features_section_title = get_field('features_section_title');
// $features_section_body  = get_field('features_section_body');
?>

<!-- COURSE FEATURES
================================================== -->
<section id="course-features">
<div class="container">

  <div class="section-header">

  <!-- If user uploaded an image -->

    <h2><?php// echo $features_section_title; ?></h2>
    <h2>Course Features</h2>

    <!-- If user added body text -->
    <?php if( !empty($features_section_body) ) : ?>
    <p class="lead"><?php echo $features_section_body; ?></p>
    <?php endif; ?>

  </div><!-- section-header -->

  <div class="row">

    <div class="col-sm-2">
      <i class="course-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/birch_pointe/assets/img/icons/icon-drivingrange.png" /></i>
      <h4>Driving Range</h4>
    </div>
    <div class="col-sm-2">
      <i class="course-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/birch_pointe/assets/img/icons/icon-martini.png" /></i>
      <h4>Full Service Bar</h4>
    </div>
    <div class="col-sm-2">
      <i class="course-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/birch_pointe/assets/img/icons/icon-patio.png" /></i>
      <h4>Outdoor Patio</h4>
    </div>
    <div class="col-sm-2">
      <i class="course-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/birch_pointe/assets/img/icons/icon-golfball.png" /></i>
      <h4>Pro Shop</h4>
    </div>
    <div class="col-sm-2">
      <i class="course-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/birch_pointe/assets/img/icons/icon-cart.png" /></i>
      <h4>Riding Carts</h4>
    </div>
    <div class="col-sm-2">
      <i class="course-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/birch_pointe/assets/img/icons/icon-putting-green.png" /></i>
      <h4>Putting Green</h4>
    </div>

    <?php //endwhile; wp_reset_query(); ?>

    </div><!-- row -->
  </div><!-- container -->
</section><!-- course-features -->

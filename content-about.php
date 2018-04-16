<?php
$opening_quote   = get_field('opening_quote');
$opening_blurb   = get_field('opening_blurb');
$blurb_1_header  = get_field('blurb_1_header');
$blurb_1_summary = get_field('blurb_1_summary');
$blurb_2_header  = get_field('blurb_2_header');
$blurb_2_summary = get_field('blurb_2_summary');
?>

<!-- ABOUT US
================================================== -->

<section id="birch_pointe_about_us">
  <div class="container">
    <h2>
      <em>"<?php echo $opening_quote; ?>"</em>
    </h2>

    <p class="lead"><?php echo $opening_blurb; ?></p>
    <div class="row">
      <div class="col-sm-6">
        <h3><?php echo $blurb_1_header; ?></h3>
        <p><?php echo $blurb_1_summary; ?></p>
      </div><!-- col -->      
      <div class="col-sm-6">
        <h3><?php echo $blurb_2_header; ?></h3>
        <p><?php echo $blurb_2_summary; ?></p>
      </div><!-- col -->

    </div><!-- row -->

  </div><!-- container -->
</section><!-- boost-income -->

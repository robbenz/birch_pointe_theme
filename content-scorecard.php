<?php 
$text_on_left_side  = get_field('text_on_left_side');
$scorecard_image    = get_field('scorecard_image');
?>

<!-- SCORE CARD
================================================== -->
<section id="score_card">
  <div class="container">
    
    <div class="section-header">
      <h2>View the Course Score Card</h2>
    </div><!-- section-header -->


    <div class="row">
      <div class="col-md-4">
        <p><?php echo $text_on_left_side; ?>
      </p></div>
      <div class="col-md-8">
        <a href="<?php echo $scorecard_image['url']; ?>" data-toggle="lightbox">
        <img class="img-fluid" src="<?php echo $scorecard_image['url']; ?>" />
      </a>
      </div>
    </div>
  </div>
  <!-- container -->
</section>
<!-- score_card -->

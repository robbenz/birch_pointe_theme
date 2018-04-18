<?php
$intro_text   = get_field('intro_text');
$button_text  = get_field('button_text');
$button_link  = get_field('button_link');
?>

<!-- OPT IN SECTION
================================================== -->
<section id="optin">
  <div class="container">
    <div class="row">

      <div class="col-sm-8">
        <p class="lead"><b><?php echo $intro_text; ?></b></p>
      </div><!-- end col -->

      <div class="col-sm-4">
        <a href="<?php echo $button_link; ?>" target="_blank" class="btn btn-success btn-lg btn-block"><?php echo $button_text; ?></a>
      </div><!-- end col -->

    </div><!-- row -->
  </div><!-- container -->
</section><!-- optin -->

<!-- Clubhouse
================================================== -->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">



        <div style="text-align:center" class="col-sm-2 col-sm-offset-5">
          <?php if (is_user_logged_in() &&  current_user_can('administrator') ) : ?>

          <div id="loggedtheFixed" style="position:fixed;top:432px;z-index:9999;">
            <p style="margin-top:42px;" class="lead">
          <?php else : ?>

          <div id="theFixed" style="position:fixed;top:400px;z-index:9999;">
            <p style="margin-top:10px;" class="lead">
          <?php endif; ?>

              <em><b>
                <a style="color:#fff;" href="tel:1-989-389-7009">(989) 389-7009</a>
              </b></em>
            </p>
          </div>
        </div>


        <div id="dk_clubhouse" class="col-sm-6 col-sm-offset-3">
          <p style="font-size:33px;"><b>Call To Book Your Next Tee Time!</b></p>
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </article>
</section>

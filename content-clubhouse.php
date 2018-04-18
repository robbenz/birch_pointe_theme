<!-- Clubhouse
================================================== -->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">



        <div style="text-align:center" class="col-sm-12">
          <?php if (is_user_logged_in() &&  current_user_can('administrator') ) : ?>

          <div id="loggedtheFixed" style="position:fixed;top:400px;z-index:9999;">
            <p style="margin-top:42px;" class="lead">
          <?php else : ?>

          <div id="theFixed" style="position:fixed;top:400px;z-index:9999;">
            <p style="margin-top:10px;" class="lead">
          <?php endif; ?>

              <em><b>
                <a style="color:#fff;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:19px;" href="tel:1-989-389-7009">(989) 389-7009</a>
              </b></em>
            </p>
          </div>
        </div>


        <div id="dk_clubhouse" class="col-sm-6 col-sm-offset-3">
          <p class="tee-time"><b>Call To Book Your Next Tee Time!</b></p>
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </article>
</section>

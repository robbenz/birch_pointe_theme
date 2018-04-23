<!-- Clubhouse
================================================== -->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">
        <div style="text-align:center" class="col-sm-2 col-sm-offset-5">

          <?php if (is_user_logged_in() &&  current_user_can('administrator') ) : ?>
            <div id="loggedtheFixed" style="width: 150px;position:fixed;top:400px;z-index:9998;">
              <p style="margin-top:42px;" class="lead">
                <em><b><a class="call-tee-time" href="tel:1-989-389-7009">(989) 389-7009</a></b></em>
              </p>
            </div>


          <?php else : ?>
            <div id="theFixed" style="width: 150px;position:fixed;top:400px;z-index:9998;">
              <p class="lead">
                <em><b><a class="call-tee-time" href="tel:1-989-389-7009">(989) 389-7009</a></b></em>
              </p>
            </div>

         <?php endif; ?>

       </div>

        <div id="dk_clubhouse" class="col-sm-6 col-sm-offset-3">
          <p class="tee-time"><b>Call To Book Your Next Tee Time!</b></p>
        </div>

      </div>
    </div>
  </article>
</section>

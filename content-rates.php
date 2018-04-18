<?php
$rates_section_title    = get_field('rates_section_title');
$rates_section_blurb    = get_field('rates_section_blurb');

$nine_holes_walking_wkday  = get_field('9_holes_walking_wkday');
$nine_holes_riding_wkday   = get_field('9_holes_riding_wkday');
$eighteen_holes_walking_wkday = get_field('18_holes_walking_wkday');
$eighteen_holes_riding_wkday  = get_field('18_holes_riding_wkday');
$nine_holes_walking_wkend  = get_field('9_holes_walking_wkend');
$nine_holes_riding_wkend   = get_field('9_holes_riding_wkend');
$eighteen_holes_walking_wkend = get_field('18_holes_walking_wkend');
$eighteen_holes_riding_wkend  = get_field('18_holes_riding_wkend');

$member_cart_price = get_field('member_cart_price');

$nine_holes_walking_sn = get_field('9_holes_walking_sn');
$nine_holes_riding_sn  = get_field('9_holes_riding_sn');
$eighteen_holes_riding_sn = get_field('18_holes_riding_sn');
$senoir_pricing_blurb = get_field('senoir_pricing_blurb');
?>


<!-- Green Fees
================================================== -->
<section id="birch_pointe_rates">
<div class="container">

  <h2><?php echo $rates_section_title; ?></h2>
  <p style="margin-top:-10px;"class="lead"><b><em>Call <a style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;" href="tel:1-989-389-7009">(989) 389-7009</a> to book your tee time today!</em></b></p>
  <p class="lead"><?php echo $rates_section_blurb; ?></p>

  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <table class="price_chart">
      <tr>
        <th colspan="2">Weekday</th>
        <th colspan="2">Weekend</th>
      </tr>
      <tr>
        <td>9 Holes Walking</td>
        <td>$<?php echo $nine_holes_walking_wkday; ?></td>
        <td>9 Holes Walking</td>
        <td>$<?php echo $nine_holes_walking_wkend; ?></td>
      </tr>
      <tr>
        <td>9 Holes with Cart</td>
        <td>$<?php echo $nine_holes_riding_wkday; ?></td>
        <td>9 Holes with Cart</td>
        <td>$<?php echo $nine_holes_riding_wkend; ?></td>
      </tr>
      <tr>
        <td>18 Holes Walking</td>
        <td>$<?php echo $eighteen_holes_walking_wkday; ?></td>
        <td>18 Holes Walking</td>
        <td>$<?php echo $eighteen_holes_walking_wkend; ?></td>
      </tr>
      <tr>
        <td>18 Holes with Cart</td>
        <td>$<?php echo $eighteen_holes_riding_wkday; ?></td>
        <td>18 Holes with Cart</td>
        <td>$<?php echo $eighteen_holes_riding_wkend; ?></td>
      </tr>

      <tr>
        <th colspan="2">Member Cart Fee</th>
        <th colspan="2">&nbsp;</th>
      </tr>
      <tr>
        <td>9 Holes</td>
        <td>$<?php echo $member_cart_price; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <th colspan="2">Senior Day*</th>
        <th colspan="2">&nbsp;</th>
      </tr>
      <tr>
        <td>9 Holes Walking</td>
        <td>$<?php echo $nine_holes_walking_sn; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>9 Holes with Cart</td>
        <td>$<?php echo $nine_holes_riding_sn; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>18 Holes with Cart</td>
        <td>$<?php echo $eighteen_holes_riding_sn; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>


  </table>
  <p style="text-align:left; margin-top:10px;">* <?php echo $senoir_pricing_blurb; ?></p>

  </div><!-- col -->
  </div><!-- row -->

</div><!-- container -->
</section><!-- birch_pointe_rates -->

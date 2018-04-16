<?php 
$rates_section_title = get_field('rates_section_title');
$rates_section_blurb = get_field('rates_section_blurb');

?>


<!-- Green Fees
================================================== -->
<section id="birch_pointe_rates">
<div class="container">

  <h2><?php echo $rates_section_title; ?></h2>
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
        <td>$13.00</td>
        <td>9 Holes Walking</td>
        <td>$14.50</td>
      </tr>
      <tr>
        <td>9 Holes with Cart</td>
        <td>$18.50</td>
        <td>9 Holes with Cart</td>
        <td>$21.00</td>
      </tr>
      <tr>
        <td>18 Holes Walking</td>
        <td>$19.00</td>
        <td>18 Holes Walking</td>
        <td>$21.00</td>
      </tr>
      <tr>
        <td>18 Holes with Cart</td>
        <td>$30.00</td>
        <td>18 Holes with Cart</td>
        <td>$32.00</td>
      </tr>

      <tr style="margin-top:10px;">
        <th colspan="2">Member Cart Fee</th>
        <th colspan="2">&nbsp;</th>
      </tr>
      <tr>
        <td>9 Holes</td>
        <td>$6.00</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

      <tr style="margin-top:10px;">
        <th colspan="2">Senior Day*</th>
        <th colspan="2">&nbsp;</th>
      </tr>
      <tr>
        <td>9 Holes Walking</td>
        <td>$6.00</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>9 Holes with Cart</td>
        <td>$13.00</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>18 Holes with Cart</td>
        <td>$20.00</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>


  </table>
  <p style="text-align:left; margin-top:10px;">* Senoir day &mdash; Monday until 1:00pm &amp; Wednesday, Friday until 3:00pm</p>

  </div><!-- col -->
  </div><!-- row -->

</div><!-- container -->
</section><!-- birch_pointe_rates -->

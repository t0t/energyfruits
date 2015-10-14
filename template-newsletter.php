<?php
  /*
  Template Name: Newsletter
  */
?>

<?php get_header(); ?>

<main class="main__content">

  <?php
  /* Page header */
  get_template_part( 'partials/page', 'header' );
  ?>

  <!-- Newsletter form -->
  <div class="widget widget--newsletter widget--newsletter-page">

    <h2 class="widget__title">Suscríbete</h2>

		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">

      <form action="//energyfruits.us5.list-manage.com/subscribe/post?u=c5802993bc&amp;id=857eaffa92" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

        <div id="mc_embed_signup_scroll">

          <div class="mc-field-group">
    				<label for="mce-FNAME">¿Cómo te llamas? </label>
    				<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
    			</div>

    			<div class="mc-field-group">
    				<label for="mce-EMAIL">Email</label>
    				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
    			</div>

          <div class="mc-field-group size1of2">

            <label for="mce-MMERGE3-month">Día y mes de nacimiento</label>

            <div class="datefield">
    					<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="MMERGE3[month]" id="mce-MMERGE3-month"></span> /
    					<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="MMERGE3[day]" id="mce-MMERGE3-day"></span>
    					<!-- <span class="small-meta nowrap">( mm / dd )</span> -->
    				</div>

          </div>

          <div class="mc-field-group">
    				<label for="mce-MMERGE4">Provincia </label>
    				<input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4">
    			</div>

          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
    				<div class="response" id="mce-success-response" style="display:none"></div>
    			</div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

          <div style="position: absolute; left: -5000px;"><input type="text" name="b_c5802993bc_857eaffa92" tabindex="-1" value=""></div>

          <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

        </div>

  		</form>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='MMERGE3';ftypes[3]='birthday';fnames[4]='MMERGE4';ftypes[4]='text'; /*
    			 * Translated default messages for the $ validation plugin.
    			 * Locale: ES
    			 */
    			$.extend($.validator.messages, {
    			  required: "Este campo es obligatorio.",
    			  remote: "Por favor, rellena este campo.",
    			  email: "Por favor, escribe una dirección de correo válida",
    			  url: "Por favor, escribe una URL válida.",
    			  date: "Por favor, escribe una fecha válida.",
    			  dateISO: "Por favor, escribe una fecha (ISO) válida.",
    			  number: "Por favor, escribe un número entero válido.",
    			  digits: "Por favor, escribe sólo dígitos.",
    			  creditcard: "Por favor, escribe un número de tarjeta válido.",
    			  equalTo: "Por favor, escribe el mismo valor de nuevo.",
    			  accept: "Por favor, escribe un valor con una extensión aceptada.",
    			  maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
    			  minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
    			  rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
    			  range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
    			  max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
    			  min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
    			});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    			<!--End mc_embed_signup-->

      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
      <form action="//energyfruits.us5.list-manage.com/subscribe/post?u=c5802993bc&amp;id=20e74250b7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
      	<h2 class="widget__title">¿Eres tienda?</h2>
          <div class="mc-field-group">
          	<label for="mce-FNAME">Nombre de la Tienda </label>
          	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
          </div>
          <div class="mc-field-group">
          	<label for="mce-MMERGE4">Persona de Contacto </label>
          	<input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4">
          </div>
          <div class="mc-field-group">
          	<label for="mce-EMAIL">Email  <span class="asterisk">*</span>
          </label>
          	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          <div class="mc-field-group size1of2">
          	<label for="mce-MMERGE3">Teléfono </label>
          	<input type="text" name="MMERGE3" class="" value="" id="mce-MMERGE3">
          </div>
          <div class="mc-field-group">
          	<label for="mce-LNAME">Población </label>
          	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
          </div>
          	<div id="mce-responses" class="clear">
          		<div class="response" id="mce-error-response" style="display:none"></div>
          		<div class="response" id="mce-success-response" style="display:none"></div>
          	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_c5802993bc_20e74250b7" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
      </form>
      </div>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='MMERGE3';ftypes[3]='phone';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->

  	</div>

  </div>

</main>

<?php get_footer(); ?>

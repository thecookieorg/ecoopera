<?php include('includes/head_about_us.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<?php include_once("analyticstracking.php") ?>

        <?php include('includes/nav_about_us.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
      	
					<div class="row animated fadeInLeft">
					<div class="span4 margin_main_container">
				      <form action="" novalidate autocomplete="off" class="idealforms">

							<div class="idealsteps-wrap">

							  <section class="idealsteps-step">
								
								<div class="field">
								  <label class="main">Name:</label>
								  <input name="name" type="text" data-idealforms-ajax="ajax.php">
								  <span class="error"></span>
								</div>
								
								<div class="field">
								  <label class="main">Company:</label>
								  <input name="company" type="text" data-idealforms-ajax="ajax.php">
								  <span class="error"></span>
								</div>
								
								<div class="field">
								  <label class="main">Address:</label>
								  <input name="address" type="text" data-idealforms-ajax="ajax.php">
								  <span class="error"></span>
								</div>

								<div class="field">
								  <label class="main">E-Mail:</label>
								  <input name="email" type="email">
								  <span class="error"></span>
								</div>

								<!--<div class="field">
								  <label class="main">What is the best day to call you?</label>
								  <input name="date" type="text" placeholder="mm/dd/yyyy" class="datepicker">
								  <span class="error"></span>
								</div>-->

								<div class="field">
								  <label class="main">Website:</label>
								  <input name="website" type="text">
								  <span class="error"></span>
								</div>

								<div class="field">
								  <label class="main">Phone:</label>
								  <input name="phone" type="text" placeholder="000-000-0000">
								  <span class="error"></span>
								</div>

								<!--<div class="field">
								  <label class="main">Zip:</label>
								  <input name="zip" type="text" placeholder="000 000">
								  <span class="error"></span>
								</div>-->

								
								<div class="field">
								  <label class="main">Comments:</label>
								  <textarea name="comments" cols="30" rows="10"></textarea>
								  <span class="error"></span>
								</div>

								<div class="field buttons">
								  <button type="submit" class="submit">Submit</button>
								</div>
							  </section>
							</div>

							<span id="invalid"></span>

						  </form>
						</div>
										<div class="span26 margin_main_container">
											<img src="img/products/sidebar-request-demo.png" alt="Sidebar Picture with eco opera product logos.">
										</div>
					</div><!-- Box on Home Page - END BOX -->
			

            <?php include('includes/footer.php'); ?>

</div> <!-- /container -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="js/out/jquery.idealforms.js"></script>
  <!--<script src="js/out/jquery.idealforms.min.js"></script>-->
  <script>

    $('form.idealforms').idealforms({

      silentLoad: false,

      rules: {
		'name': 'required name',
		'company': 'required company',
		'address': 'required address',
        'email': 'required email',
        'date': 'required date',
        'website': 'url',
        'phone': 'required phone',
        'zip': 'required zip',
        'options': 'select:default',
      },

      errors: {
        'username': {
          ajaxError: 'Username not available'
        }
      },

      onSubmit: function(invalid, e) {
        e.preventDefault();
        $('#invalid')
          .show()
          .toggleClass('valid', ! invalid)
          .text(invalid ? (invalid +' invalid fields') : 'All good!');
      },

      steps: {
        fadeSpeed: 300
      }
    });



    $('form.idealforms').find('input, select, textarea').on('change keyup', function() {
      $('#invalid').hide();
    });

    $('form.idealforms').idealforms('addRules', {
      'comments': 'required minmax:50:200'
    });

    $('.prev').click(function(){
      $('.prev').show();
      $('form.idealforms').idealforms('prevStep');
    });
    $('.next').click(function(){
      $('.next').show();
      $('form.idealforms').idealforms('nextStep');
    });

  </script>
<?php include('includes/analytics.php'); ?>
    </body>
</html>
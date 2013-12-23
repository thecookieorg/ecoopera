<?php include('includes/head_about_us.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<?php include_once("analyticstracking.php") ?>

        <?php include('includes/nav_ceseng.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
            
			
			<!-- Boxes on Home Page -->
			<div class="row animated fadeInLeft" style="margin-top: 20px;">
				<div class="span12 margin_main_container">
					<img src="img/portal/ceseng-big.png">
				</div>  					
			</div><!--  BOX END -->
			
					<div class="row animated fadeInLeft">
						<div class="span12 margin_main_container">
							<p>
								CES Engineering is a multidisciplinary engineering company with offices in Vancouver, BC and Toronto, ON and Dubai, UAE.  With almost thirty specialized commissioning providers, the company is positioned as one of the largest independent national commissioning companies in Canada. CES Engineering has been providing comprehensive commissioning services for over fifteen years. The company mission is to provide optimized, documented facility and systems operation using core services: Total Building Commissioning, Performance Measurement and Verification and Energy Analysis and Modeling.
							<p>
							<p>
								For more information visit CES Engineering dedicated web page. <br>
								<br>
									<a href="http://www.cesengineering.ca"><img src="img/products/go-to-ceseng.png" alt="Picture that is a link to CES Engineering Website"></a>
							</p>
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
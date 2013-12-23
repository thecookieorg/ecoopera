﻿<?php include('includes/head_about_us.php'); ?>
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
                <?php include('includes/sidebar_nav_about_us.php'); ?>
				<div class="span8 margin_main_container">
					<div class="title_bkgd">
						<h3>News <!--<img src="img/services/green-line.png" class="green_line" />--></h3>
					</div>
					<!--<img src="img/services/1.png" class="main_picture" />-->
					<?php include('news-ecoopera-systems-product-releases.php'); ?>
					<?php include('news-touchstone-properties-boma.php'); ?>
					<?php include('news-city-of-toronto-mv.php'); ?>
					<?php include('news-ces-vancouver-new-office.php'); ?>
					<?php include('news-target-canada-commissioning.php'); ?>
                </div>
            </div>	
			</div>
			

            <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/analytics.php'); ?>
    </body>
</html>

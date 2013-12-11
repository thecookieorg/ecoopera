<?php include('includes/head_products.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


       <?php include('includes/nav_products.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
            <div class="row animated fadeInLeft">
                <?php include('includes/sidebar_nav_products.php'); ?>
				<div class="span8 margin_main_container">
                    <div class="title_bkgd">
						<h3>eco das</h3>
					</div>
					<img src="img/products/eco-das.png" class="main_picture">
					<p>
					EcoDAS is data acquisition and storage system that allows for unlimited collection and archiving of energy and operational trend data. 
					A local data acquisition server is installed and connected to your building network and stores data in a cloud database.
					Data can be observed and browsed in graphical or table form, and can be exported for desired time-periods and in a variety of file formats.
					Data cleaning procedures are provided that filter errors and interpolate gaps in data to save you time in your analysis.
					Adjust data using a library of calibration formula, or specify your own.<br>
					<br>
					Features include:
					<ul>
						<li>Secure data acquisition and cloud-based storage</li>
						<li>Data trend viewing as trend-logs or tables</li>
						<li>Automatic cleaning of data collection errors</li>
						<li>Interpolation of missing data for continual trends</li>
						<li>Data export via multiple file formats</li>
					</ul>
					</p>
                </div>
            </div>	
			</div>
			

           <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/analytics.php'); ?>
    </body>
</html>

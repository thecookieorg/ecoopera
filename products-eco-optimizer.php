<?php include('includes/head_products.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<?php include_once("analyticstracking.php") ?>

        <?php include('includes/nav_products.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
            <div class="row animated fadeInLeft">
                <?php include('includes/sidebar_nav_products.php'); ?>
				<div class="span8 margin_main_container">
                    <div class="title_bkgd">
						<h3>eco optimizer</h3>
					</div>
					<img src="img/products/eco-optimizer.png" class="main_picture">
					<p>
					   EcoOptimize is a revolutionary performance monitoring tool for assessing and optimizing the performance of mechanical systems.
                       Through full Building Automation System (BAS) integration and data acquisition, 
                       EcoOptimize calculates a host of performance metrics that makes understanding and troubleshooting facility operation completely 
                       transparent.  Utilize the high volume of existing BAS data to minimize implementation costs.
                       Browse through a full inventory of building systems, equipment and zones to proactively identify and resolve issues with building 
                       operation.
                       Monitor central heating and cooling plant efficiencies and compare equipment energy consumption, loads, run costs, 
                       run-times and operational characteristics.
                       Set tolerances limits for performance metrics to trigger automatic system fault reporting.<br>
                       <br>
                       Features include:
                       <ul>
                            <li>Full collection and storage of all key Building Automation System data</li>
                            <li>Complete inventory of building systems, equipment and thermal zones with detailed information, rated parameters, operational characteristics, and performance metrics</li>
                            <li>Automatic fault detection based on user-specified tolerances on performance metrics</li>
                            <li>Statistical analysis for historical benchmark model creation of any desired parameter</li>
                            <li>Full mechanical system energy and demand breakdown, down to the equipment level, as well as equipment and system run-costs</li>
                            <li>Automatic trend log report creation as well as user-defined trend reports</li>
                            <li>Graphical data representations of any parameter as well as comparisons between any parameter</li>
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

<?php include('includes/head_eco_ceo.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        <?php include('includes/nav_eco_ceo.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
            <div class="row animated fadeInLeft">
                <?php include('includes/sidebar_nav_eco_ceo.php'); ?>
				<div class="span8 margin_main_container">
					<div class="title_bkgd">
						<h3>big data</h3>
					</div>
					<img src="img/services/big-data.png" class="main_picture">
					<p>
						Big Data represents a new era in data processing. Eco Opera have recognized early the power of this new computing paradigm to further enhance capabilities of ecoCEO and analyze various sensor data to achieve breakthrough insights in energy management. <br>
						<br>
						Energy subsystems in every facility generate data on an unprecedented scale. The ability to manage the increasingly high volumes and high-velocity streaming sensor data is essential. The fundamental advantage of current big data architectures is the ability to efficiently process unstructured data.<br>
						<br>
						Here are few examples on how are we at ecoOpera harnessing the power of Big Data:
						<ul>
							<li>Very common requirement from any provider of facility services is the ability to rank building from their portfolio based on energy efficiency and to monitor the changes in energy efficiency over time. Existing rating standards like HERS are not ubiquitous and rating process is very expensive.  As part of ecoQuest we are utilizing cloud based Big Data processing to normalized buildings to adjust for seasonality, measurement scales and other factors that may skew the ranking and calculate energy efficiency factor.</li>
							<li>Collected sensor data is very often error prone and Sensors drifting away from their set points very frequently increase the energy consumption of the building. Additionally sensor calibration is expensive proposition. It is very natural that the Big Data technologies are utilized for ecoCEO regression model generation  - off-line processing of this huge amounts of sensor data in order to compare actual vs. optimal  energy consumption for every building monitored by EMIS.</li>
						</ul>
						Ultimately, there is quite natural symbiosis of the big data processing capabilities on top of sensor data and the traditional on-line processing of the conventional EMIS.
					</p>
                </div>
            </div>	
			</div>
			

            <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/analytics.php'); ?>
    </body>
</html>

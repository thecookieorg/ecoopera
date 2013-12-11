<?php include('includes/head_homepage.php'); ?>
    <body>
		
		<!--hack for ie browser (assuming that ie is a browser)-->
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		
		<!--
		   ******************************************	
			I am not responsible of this code.
			They made me write it, against my will.
		   ******************************************	
		-->
		
       <?php include('includes/nav_home_page.php'); ?>

        <div class="container">
			
            
            <!-- Slide Show -->
            <div class="row animated fadeInLeft" style="margin-top: 70px;">
                <div class="span12">
                    <!-- slide show starts here -->
						<div id="slideshow">
						   <div>
							 <a href="./about-us-news.php"><img src="img/slideshow/1.png"></a>
						   </div>
						   <div>
							 <a href="./about-us-news.php"><img src="img/slideshow/2.png"></a>
						   </div>
						   <div>
							 <a href="./about-us-news.php"><img src="img/slideshow/3.png"></a>
						   </div>
						   <div>
							 <a href="./about-us-news.php"><img src="img/slideshow/4.png"></a>
						   </div>
						   <div>
							 <a href="./about-us-news.php"><img src="img/slideshow/5.png"></a>
						   </div>
						</div>
					<!-- slide show ends here -->
				</div>
            </div><!-- Slide Show - END -->
			
			<!-- Boxes on Home Page -->
			<div class="row animated fadeInLeft" style="margin-top: 20px;">
				
				<!-- Building Commissioning Box on Home Page -->
                <div class="span22">
					<!--<a href="#" class="revealBuilding"><img src="img/home/eco-ceo.png"></a>-->
					<a href="#" class="revealEco"><img src="img/home/eco-ceo.png"></a>
                </div>  
				<!--<div class="containerBuilding">
					<div id="innerBuilding">
						<a href="#" class="revealBuilding">Eco Opera Systems Inc. is an engineering software company supporting practices in optimization of the buildings and industrial processes operation.</a>
					</div>
				</div>-->
				<div class="containerEco">
					<div id="innerEco">
						<a href="#" class="revealEco"><img src="img/home/eco-ceo-small.png"></a>
						<br>
						<a href="./eco-ceo-what-is-eco-ceo.php" rel="has-dotts">What is ECOCEO</a>
						<br>
						<!--<a href="./eco-ceo-components.php" rel="has-dotts">Components</a>
						<br>-->
						<a href="./eco-ceo-capacities.php" rel="has-dotts">Capacities</a>
						<br>
						<a href="./eco-ceo-applications.php" rel="has-dotts">Applications</a>
						<br>
						<a href="./eco-ceo-big-data.php" rel="has-dotts">Big Data</a>
					</div>
				</div><!-- Building Commissioning Box on Home Page - END BOX-->
                
				<!-- Industrial Commissioning Box on Home Page -->
				<div class="span22">
                    <!--<a href="#" class="revealIndustrial"><img src="img/home/eco-products.png"></a>-->
                    <a href="#" class="revealProducts"><img src="img/home/eco-products.png"></a>
                </div>
				<div class="containerProducts">
					<div id="innerProducts">
						<!--<a href="#" class="revealIndustrial">ecoCEO (Continuous Energy Optimizer) is the enterprise system developed by ecoOpera system inc.</a>-->
						<a href="#" class="revealProducts"><img src="img/home/products-small.png"></a>
						<br>
						<a href="./products-eco-das.php" rel="has-dotts">ECODAS</a>
						<br>
						<a href="./products-eco-track.php" rel="has-dotts">ECOTRACK</a>
						<br>
						<a href="./products-eco-optimizer.php" rel="has-dotts">ECOOPTIMIZER</a>
						<br>
						<a href="./products-eco-kiosk.php" rel="has-dotts">ECOKIOSK</a>
						<br>
						<a href="./products-eco-quest.php" rel="has-dotts">ECOQUEST</a>
						<br>
						<a href="./products-eco-leed-m-and-v.php" rel="has-dotts">ECOLEED M&amp;V</a>
					</div>
				</div><!-- Industrial Commissioning Box on Home Page - END BOX -->
                
			</div><!--  Box on Home Page First Row END -->
			
			<!-- Boxes on Home Page -->
			<div class="row animated fadeInLeft" style="margin-top: 20px;">
				
				<!-- Building Commissioning Box on Home Page -->
                <div class="span22">
					<a href="projects.php" class="opacity"><img src="img/home/projects.png"></a>
                </div>  
                
				<!-- Industrial Commissioning Box on Home Page -->
				<div class="span22">
                    <!--<a href="" class="revealIndustrial"><img src="img/home/big-data.png"></a>-->
                    <a href="eco-ceo-big-data.php" class="opacity"><img src="img/home/big-data.png"></a>
                </div>
			           
			</div><!--  Box on Home Page First Row END -->
			
          
         <?php include('includes/footer.php'); ?>

        </div> <!-- /container -->

       <?php include('includes/analytics.php'); ?>
	   
    </body>
</html>
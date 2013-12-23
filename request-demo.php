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
				    <form action="mail.php" method="POST">
						<p>Name<br>
							<input type="text" name="name">
						</p>
						<p>Company<br>
							<input type="text" name="company">
						</p>
						<p>Address<br>
							<input type="text" name="address">
						</p>
						<p>Email<br>
							<input type="text" name="email">
						</p>
						<p>Phone<br>
							<input type="text" name="phone">
						</p>

						<p>Request Phone Call:<br>
							Yes:<input type="checkbox" value="Yes" name="call"><br>
							No:<input type="checkbox" value="No" name="call">
						</p>

						<p>Website<br>
							<input type="text" name="website">
						</p>

						<p>Message<br>
							<textarea name="message" rows="6" cols="25"></textarea>
						</p>
						
						<p>
							<input type="submit" class="btn-submit" value="Send"> <input type="reset" class="btn-reset" value="Clear">
						</p>
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
    </body>
</html>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Contact | Charity / Non-profit responsive Bootstrap HTML5 template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
    <?php include 'includes/site_nav.php'?>


   <?php include 'includes/header.php'?>
  <!--  ?php include 'includes/new_slider.php'?>
   ?php include 'includes/about_home.php'
 -->

	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Donate <span class="title-under"></span></h1>
			<p class="page-description">
				
			</p>
			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">Donate Using Online Payment <span class="title-under"></span></h2>

                    <form action="payments/payment-using-paytm/PaytmKit/pgRedirect.php" method="post">
				<input type="hidden" id="CUST_ID" name="CUST_ID" value="CUST001">
					<input type="hidden" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" value="Retail">
					<input type="hidden"  id="CHANNEL_ID" name="CHANNEL_ID" value="WEB">
                <div class="form-group">
					
					<label>Order ID:</label>
                    <input type="text" class="form-control" id="ORDER_ID" name="ORDER_ID" size="20" maxlength="20" autocomplete="off" 
 
tabindex="1" value="<?php echo  "ORDER" . rand(10000,99999999)?>">
                </div>
               
                <div class="form-group">
					<label>Amount to Pay:</label>
                    <input type="text" class="form-control" id="TXN_AMOUNT" name="TXN_AMOUNT" autocomplete="off" tabindex="5" 
 
value="20">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="CheckOut" class="btn btn-success btn-lg" style="background-color:#0000FF; margin-left: 37%;">
                </div>
           
                        <div class="clearfix"></div>

					</form>

				</div>

				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2"> Via Bank Transfer <span class="title-under"></span></h2>
					<p>
						<!-- <b>Sadaka</b> ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla . -->
					</p>

					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"></span> A/c Holder : JAI SHRI RADHEY KRISHAN FOUNDATION</li>
							<li class="contact-item"> <span class="contact-icon"> </span> A/c no: </li>

							<li class="contact-item"> <span class="contact-icon"> </span> IFSC Code : SBIN0005497</li>
                            <li class="contact-item"> <span class="contact-icon"> </span> Branch Name : State Bank of India <br> Branch Jaisinghnagar</li>
						</ul>
					</div>

					
					
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>

	<div id="contact-map" class="contact-map">
		
	</div>


   <?php include 'includes/footer.php'?>     
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>


        <!-- Google map  -->
        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>


        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>

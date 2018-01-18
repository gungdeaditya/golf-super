<!DOCTYPE html>
<?php foreach ($article as $a) { ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Solid State</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
	</head>
	<body>
		<!-- preloader -->
	    <div id="preloader"></div>
	    <!-- end of preloader -->

	    <div class="body-content" style="display:none;">
		    				<!-- Page Wrapper -->
			<div id="elements-page-wrapper">
			    <div class="navbar-solid-state">
			         <!-- Header -->
			        <header id="header" class="alt">
			            <!-- <h1><a href="index.html" class="a-transparent">Solid State</a></h1> -->
			            <nav>
			                <a href="#menu" class="a-menu">Menu <i class="ion-android-menu"></i> </a>
			            </nav>
			        </header>

			        <!-- Menu -->
			        <nav id="menu">
			            <div class="inner">
			                <h2>Menu</h2>
			                <ul class="links">
			                    <li><a href="<?php echo base_url(); ?>main">Home</a></li>
								<?php if($this->session->userdata('logged_in')) { ?>
								<li><a href="<?php echo base_url(); ?>dashboard">Dasbor Admin</a></li>
								<li><a href="<?php echo base_url(); ?>login/logout">Logout Admin</a></li>
								<?php } else {?>
								<li><a href="<?php echo base_url(); ?>login">Login</a></li>
								<?php } ?>
			                </ul>
			                <a href="#" class="close">Close</a>
			            </div>
			        </nav>
	    		</div>

				<section class ="fit-image">
					<div class="container">
					<h1 class="elements-h"><?php echo $a->title ?></h1><br>
						<div class="row">
							<div class="col-md-12" style="color:#fff;">
		    						<p style="font-size:16px;">
		    							<?php echo $a->created_by ?></p>	
		    						</p>
		    					</div>	
							<div class="col-md-12">
								<img src="<?php echo base_url(); ?>/uploads/<?php echo $a->img; ?>" class="img-responsive img-fit" alt="Responsive image" />
							</div>
							<div class="col-md-12" style="color:#fff;">
		    						<p>
		    							<?php echo $a->content ?></p>	
		    						</p>
		    					</div>
						</div>
					</div>
				</section>
			
			    <!--<section id="elements-one">
		    		<div class="container">
		    			<div class="row">
		    				<div class="elements-one-design">
		    					<div class="col-md-12">
		    						<h1 class="elements-h"><?php echo $a->title ?></h1>
		    					</div>
		    				</div>

		    			</div>
		    		</div>
			    </section>
				<section class="image-text">
					<div class="container">						
						<div class="row">
							<div class="col-md-4">
								<img src="<?php echo $a->img ?>" class="img-responsive img-text" alt="Responsive image"/>
							</div>
							<div class="col-md-8">
								<p class="image-text-text"><?php echo $a->content ?></p>	
							</div>
						</div>																	
					</div>
				</section>-->

				<section id="footer">
					<div class="container">
						<div class="footer-bottom">
							<div class="row">
								<div class="col-md-12">
									<p>&copy; TECHNEXT 2016. ALL RIGHTS RESERVED BY <a href="http://www.themewagon.com" target="_blank">THEMEWAGON</a></p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
	    </div>



		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	</body>
</html>
<?php } ?>
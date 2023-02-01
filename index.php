<?php
include('traducoes/tradutor.php');
?>
<!DOCTYPE html>
<html>

<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167548623-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-167548623-1');
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		// $(document).ready(function() {
		// 	teste()
		// })
		// function teste() {
		// 	initApp();
		// 	alert($teste);
		// }
	</script>




	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<!-- icon shortcut -->
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<link rel="shortcut icon" type="image/png" sizes="512x512"  href="assets/img/android-chrome-512x512.png">
	<link rel="shortcut icon" type="image/png" sizes="192x192"  href="assets/img/android-chrome-192x192.png">
	<link rel="shortcut icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
	<link rel="shortcut icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $trad['aba']; ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/gaia.css" rel="stylesheet" />

	<!--     Fonts and icons     -->
	<link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
	<!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
	<link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<body id="bod">
	<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
		<div class="container">
			<div class="navbar-header">
				<button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
				</button>
				<img class="img-responsive" width="120" src="assets//img/oitu-minimal-white-02.png"></img>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right navbar-uppercase">
					<li>
						<a href="#servicos" target="_self">
							<?php echo $trad['services']; ?>
						</a>
					</li>
					<li>
						<a href="#tecnologias" target="_self">
							<?php echo $trad['tecnologias']; ?>
						</a>
					</li>
					<li>
						<a href="#qs" target="_self">
							<?php echo $trad['quem_somos']; ?>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php echo $trad['segue']; ?>
						</a>
						<ul class="dropdown-menu dropdown-danger">
							<li>
								<a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-linkedin"></i> Linkedin</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i> Instagram</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">EN / PT</a>
						<ul class="dropdown-menu dropdown-danger">
							<li>
								<a href="?idioma=pt-pt" id="pt">Português</a>
							</li>
							<li>
								<a href="?idioma=en-us" id="en">English</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="section section-header">
		<div class="parallax filter filter-color-red">
			<div class="image" style="background-image: url('assets/img/header-1.jpeg');background-repeat: no-repeat;
  background-size: cover;">
			</div>
			<div class="container">
				<div class="content">
					<div class="title-area">
						<img class="img-responsive img-home" src="./assets/img/oitu-home-white-01.png"></img>
						<h3>
							<?php echo $trad['title_home']; ?>
							</h2>
							<div class="separator separator-danger">✻</div>
					</div>

					<div class="button-get-started">
						<a href="#contact-form" target="_self" class="btn btn-white btn-fill btn-lg ">
							<?php echo $trad['titulo_reuniao']; ?>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- NOSSOS SERVICOS -->
	<div class="section" id="servicos">
		<div class="container">
			<div class="row">
				<div class="title-area">
					<h2>
						<?php echo $trad['services']; ?>
					</h2>
					<div class="separator separator-danger">✻</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="info-icon">
						<div class="icon text-danger">
							<i class="pe-7s-rocket"></i>
						</div>
						<h3>
							<?php echo $trad['strategy']; ?>
						</h3>
						<p class="description">
							<?php echo $trad['strategy_text']; ?>
						</p>
						<p class="description">Social media | SEO | SEM | 
						PPC - Pay Per Click | E-mail Marketing | e-Commerce</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="info-icon">
						<div class="icon text-danger">
							<i class="pe-7s-edit"></i>
						</div>
						<h3>
							<?php echo $trad['branding']; ?>
						</h3>
						<p class="description">
							<?php echo $trad['brand_text']; ?>
						</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="info-icon">
						<div class="icon text-danger">
							<i class="pe-7s-graph1"></i>
						</div>
						<h3>
							<?php echo $trad['data_analysis']; ?>
						</h3>
						<p class="description">
							<?php echo $trad['data_analysis_text']; ?>
						</p>
					</div>
				</div>
			</div>

			<div class="row">


			<div class="col-md-4">
					<div class="info-icon">
						<div class="icon text-danger">
							<i class="pe-7s-display1"></i>
						</div>
						<h3>
							<?php echo $trad['software']; ?>
						</h3>
						<p class="description">
							<?php echo $trad['software_text']; ?>
						</p>
					</div>
				</div>


				<div class="col-md-4">
					<div class="info-icon">
						<div class="icon text-danger">
							<i class="pe-7s-film"></i>
						</div>
						<h3>
							<?php echo $trad['video_design']; ?>
						</h3>
						<p class="description">
							<?php echo $trad['video_text']; ?>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="info-icon">
						<div class="icon text-danger">
							<i class="pe-7s-rocket"></i>
						</div>
						<h3>
							<?php echo $trad['merchandising']; ?>
						</h3>
						<p class="description">
							<?php echo $trad['merchan_text']; ?>
						</p>
					</div>
				</div>
			</div>



			<!-- <div class="col-md-4">
				<div class="info-icon">
					<div class="icon text-danger">
						<i class="pe-7s-chat"></i>
					</div>
					<h3>BRANDING</h3>
					<p class="description"> <?php echo $trad['brand_text']; ?> </p>
				</div>
			</div> -->

			<!-- <div class="col-md-4">
				<div class="info-icon">
					<div class="icon text-danger">
						<i class="pe-7s-film"></i>
					</div>
					<h3>Vídeo & Motion Design</h3>
					<p class="description">82% de todo o tráfego de consumidores na internet, virá de vídeos online
						até 2022. Entregamos o seu projecto “chave na mão”, pronto para impulsionar as suas vendas.
					</p>
				</div>
			</div> -->

		</div> 

	</div>
	</div>


	<!-- QUEM SOMOS NÓS -->
	<div class="section section-our-team-freebie" id="qs">
		<div class="parallax filter filter-color-black">
			<div class="image" style="background-image:url('assets/img/back-equip.jpg');   background-repeat: no-repeat;
  background-size: cover;">
			</div>
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="title-area">
							<h2>
								<?php echo $trad['quem_somos']; ?>
								<!-- QUEM SOMOS -->
							</h2>
							<div class="separator separator-danger">✻</div>
							<p class="description">
								<?php echo $trad['quem_somos_text']; ?>
							</p>
							<p class="description">
								<?php echo $trad['competitive']; ?>
							</p>
							<p class="description">
								<?php echo $trad['sabemos_text']; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- TECNOLOGIAS -->
	<div class="section section-our-clients-freebie tecnologias" id="tecnologias">
		<div class="container">
			<div class="title-area">
				<h2>
					<?php echo $trad['tecnologias']; ?>
				</h2>
				<div class="separator separator-danger">✻</div>
			</div>

			<ul class="nav nav-text" role="tablist">
				<li>
					<a href="#testimonial1" role="tab" data-toggle="tab">
						<div class="image-clients">
							<img alt="..." class="img-circle" src="assets/img/firebase.png" />
						</div>
					</a>
				</li>
				<li>
					<a href="#testimonial2" role="tab" data-toggle="tab">
						<div class="image-clients">
							<img alt="..." class="img-circle" src="assets/img/mysql.png" />
						</div>
					</a>
				</li>
				<li>
					<a href="#testimonial3" role="tab" data-toggle="tab">
						<div class="image-clients">
							<img alt="..." class="img-circle" src="assets/img/java.png" />
						</div>
					</a>
				</li>
				<li class="active">
					<a href="#testimonial4" role="tab" data-toggle="tab">
						<div class="image-clients">
							<img alt="..." class="img-circle" src="assets/img/react.png" />
						</div>
					</a>
				</li>
				<li>
					<a href="#testimonial5" role="tab" data-toggle="tab">
						<div class="image-clients">
							<img alt="..." class="img-circle" src="assets/img/wp_vv.png" />
						</div>
					</a>
				</li>
				<li>
					<a href="#testimonial6" role="tab" data-toggle="tab">
						<div class="image-clients">
							<img alt="..." class="img-circle" src="assets/img/node_vv.png" />
						</div>
					</a>
				</li>
				<li>
					<a href="#testimonial7" role="tab" data-toggle="tab">
						<div class="image-clients">
							<img alt="..." class="img-circle" src="assets/img/triade_vv.png" />
						</div>
					</a>
				</li>
			</ul>


			<div class="tab-content">
				<div class="tab-pane" id="testimonial1">
					<p class="description">
						<?php echo $trad['features_text']; ?>
					</p>
				</div>
				<div class="tab-pane" id="testimonial2">
					<p class="description">
						<?php echo $trad['mysql_text']; ?>
					</p>
				</div>
				<div class="tab-pane" id="testimonial3">
					<p class="description">
						<?php echo $trad['tech_text']; ?>
					</p>
				</div>
				<div class="tab-pane active" id="testimonial4">
					<p class="description">
						<?php echo $trad['fb_text']; ?>
					</p>
				</div>
				<div class="tab-pane" id="testimonial5">
					<p class="description">
						<?php echo $trad['agilidade_text']; ?>
					</p>
				</div>
				<div class="tab-pane" id="testimonial6">
					<p class="description">
						<?php echo $trad['node_text']; ?>
					</p>
				</div>
				<div class="tab-pane" id="testimonial7">
					<p class="description">
						<?php echo $trad['bootstrap_text']; ?>
					</p>
				</div>
			</div>

		</div>
	</div>






	<!-- CONTATO -->
	<div class="section section-small section-get-started">
		<div class="parallax filter">
			<div class="image" style="background-image: url('assets/img/office-1.jpeg');   background-repeat: no-repeat;
  background-size: cover;">
			</div>
			<div class="container">
				<div class="title-area">
					<h2 class="text-white">
						<?php echo $trad['coffe']; ?>
					</h2>
					<div class="separator separator-danger">✻</div>
					<p class="description">
						<?php echo $trad['seriedade_text']; ?>
					</p>
				</div>
				<div class="col-md-2">

				</div>
				<div class="col-md-8">
					<div class="inner contact">
						<!-- Form Area -->
						<div class="contact-form" id="contact-form">
							<!-- Form -->
							<form id="contact-us" method="POST" action="mail.php">

								<div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
									<input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
									<input type="email" name="mail" id="mail" required="required" class="form" placeholder="E-mail" />
									<input type="tel" name="tel" id="tel" required="required" class="form" placeholder="Phone number" />
								</div><!-- End Left Inputs -->
								<div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
									<textarea name="mensagem" id="message" class="form textarea" placeholder="Your messge"></textarea>
								</div><!-- End Right Inputs -->
								<div class="relative fullwidth col-xs-12">

									<button id="submit" type="submit" class="btn btn-white btn-fill btn-lg">
										<?php echo $trad['titulo_reuniao']; ?>

									</button>
								</div><!-- End Bottom Submit -->
								<div class="clear"></div>
							</form>

							<div class="mail-message-area">
								<div class="alert gray-bg mail-message not-visible-message">
									<strong>
										Obrigado!

									</strong>
									Seu e-mail foi enviado e logo voltamos a conversar :)

								</div>
							</div>

						</div><!-- End Contact Form Area -->
					</div><!-- End Inner -->
				</div>
				<div class="col-md-2">

				</div>
			</div>
		</div>
	</div>


	<footer class="footer footer-big footer-color-black" data-color="black">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-3">
					<div class="info">
						<!-- <h5 class="title">Company</h5>
						<nav>
							<ul>
								<li>
									<a href="#">Home</a></li>
								<li>
									<a href="#">Find offers</a>
								</li>
								<li>
									<a href="#">Discover Projects</a>
								</li>
								<li>
									<a href="#">Our Portfolio</a>
								</li>
								<li>
									<a href="#">About Us</a>
								</li>
							</ul>
						</nav> -->
					</div>
				</div>
				<div class="col-md-3 col-md-offset-1 col-sm-3">
					<!-- <div class="info">
						<h5 class="title"> Help and Support</h5>
						<nav>
							<ul>
								<li>
									<a href="#">Contact Us</a>
								</li>
								<li>
									<a href="#">How it works</a>
								</li>
								<li>
									<a href="#">Terms &amp; Conditions</a>
								</li>
								<li>
									<a href="#">Company Policy</a>
								</li>
								<li>
									<a href="#">Money Back</a>
								</li>
							</ul>
						</nav>
					</div> -->
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="info">
						<!-- <h5 class="title">Latest News</h5>
						<nav>
							<ul>
								<li>
									<a href="#">
										<i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is
										here, just give it a try and let us...
										<hr class="hr-small">
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards
											Website</b>! Thank you everybody for...
									</a>
								</li>
							</ul>
						</nav> -->
					</div>
				</div>
				<div class="col-md-2 col-md-offset-1 col-sm-3">
					<div class="info">
						<h5 class="title">
							<?php echo $trad['sigaa']; ?>
							<!-- Siga nossas redes socias -->
						</h5>
						<nav>
							<ul>
								<!-- <li>
									<a href="#" class="btn btn-social btn-facebook btn-simple">
										<i class="fa fa-facebook-square"></i> Facebook
									</a>
								</li> -->
								<li>
									<a href="https://www.instagram.com/oitu_agency/" target="_blank" class="btn btn-social btn-instagram btn-simple">
										<i class="fab fa-instagram"></i> Instagram
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/company/oituagency/" target="_blank" class="btn btn-social btn-linkedin btn-simple">
										<i class="fab fa-linkedin-in"></i> LinkedIn
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<hr>
			<div class="copyright">
				©
				<script>
					document.write(new Date().getFullYear())
				</script> Oitu, made with love.
			</div>
		</div>
	</footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

<script>
	<?php
	if (isset($_GET['status'])) :
		if ($_GET['status'] == "sucesso") :
		// echo "<script>Materialize.toast('Enviado com sucesso :D', 4000; </script>";
		else :
		// echo "<script>Materialize.toast('Erro ao enviar :(', 4000);</script>";
		endif;
	endif;
	?>
</script>


</html>

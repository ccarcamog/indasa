 <!-- Preloader Start -->
 <div id="preloader">
 	<div class="fplus-load"></div>
 	<!-- <img src="img/core-img/h-logo.png" alt="logo"> -->
 </div>

 <!-- ****** Header Area Start ****** -->
 <header class="header_area">
 	<div class="container-fluid px-0">
 		<div class="row">
 			<div class="col-12 d-flex">
 				<div class="logo_area">
				 <a class="small-logo d-flex d-md-none align-items-center justify-content-center" href="/"><img src="img/INDASA-06.png" alt="logo"></a>
                        <a class="big-logo d-md-flex d-none align-items-center justify-content-center" href="/"><img src="img/INDASA-logo.png" alt="logo"></a>
 				</div>
 				<div class="menu-open-close d-flex align-items-center justify-content-center">
 					<div id="nav-icon">
 						<span></span>
 						<span></span>
 						<span></span>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </header>
 <!-- ****** Header Area End ****** -->

 <!-- ****** Menu Area Start ****** -->
 <div class="fplus-menu-area">
 	<!-- Menu -->
 	<div class="fplus-main-menu h-100 d-flex align-items-center">
 		<nav class="navbar navbar-expand-lg">
 			<div class="" id="fplus-nav">
 				<ul class="navbar-nav" id="fplusNav">
 					<li class="nav-item active">
 						<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#about">Quienes Somos</a>
 					</li>
 					<!--
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="fplusDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="fplusDropdown">
                                <a class="dropdown-item" href="index.html">Home</a>
                                <a class="dropdown-item" href="single-portfolio.html">Single Portfolio</a>
                                <a class="dropdown-item" href="static-page.html">Static Page</a>
                            </div>
                        </li>-->
 					<li class="nav-item">
 						<a class="nav-link" href="#clients">Nuestros Clientes</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#services">Nuestros Servicios</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#marcas">Nuestras Marcas</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#galery">Galeria</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#contact">Contacto</a>
 					</li>
 				</ul>
 			</div>
 		</nav>
 	</div>
 	<!-- Header Social Icon -->
 	<div class="header-social-info d-flex align-items-center justify-content-end">
 		<div class="h-social-icon">
 			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
 			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
 			<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
 			<a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
 			<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
 		</div>
 	</div>
 </div>
 <!-- ****** Menu Area End ****** -->
 <!-- ****** Welcome Area Start ****** -->

 <div id="jumboCarousel" class="carousel slide carousel-fade" data-pause="false" data-ride="carousel" data-interval="3000">
 	<div class="carousel-inner">
 		<div class="carousel-item active">
 			<section class="fplus-hero-area" style="background-image: url(img/grupo-aider/galeria/galeria-1.jpg); background-position:center bottom;" id="home">
 				<div class="hero-container">
 				</div>
 				<div class="hero-content-area d-flex justify-content-end">
 					<div class="hero-text">
 						<h2>Grupo Aider, energias renovables</h2>
 					</div>
 				</div>
 				<div class="hero-logo-area d-flex justify-content-end">
 					<img src="img/svg/LOGO GR AIDER.svg" alt="">
 				</div>
 			</section>
 		</div>
 		<div class="carousel-item">
 			<section class="fplus-hero-area" style="background-image: url(img/grupo-aider/galeria/galeria-2.jpg); background-position:center bottom;" id="home">
 				<div class="hero-container">
 				</div>
 				<div class="hero-content-area d-flex justify-content-end">
 					<div class="hero-text">
 						<h2>Grupo Aider, energias renovables</h2>
 					</div>
 				</div>
 				<div class="hero-logo-area d-flex justify-content-end">
 					<img src="img/svg/LOGO GR AIDER.svg" alt="">
 				</div>
 			</section>
 		</div>
 		<div class="carousel-item">
 			<section class="fplus-hero-area" style="background-image: url(img/grupo-aider/galeria/galeria-6.jpg); background-position:center bottom;" id="home">
 				<div class="hero-container">
 				</div>
 				<div class="hero-content-area d-flex justify-content-end">
 					<div class="hero-text">
 						<h2>Grupo Aider, energias renovables</h2>
 					</div>
 				</div>
 				<div class="hero-logo-area d-flex justify-content-end">
 					<img src="img/svg/LOGO GR AIDER.svg" alt="">
 				</div>
 			</section>
 		</div>
 	</div>
 	<a class="carousel-control-prev" href="#jumboCarousel" role="button" data-slide="prev">
 		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 		<span class="sr-only">Previous</span>
 	</a>
 	<a class="carousel-control-next" href="#jumboCarousel" role="button" data-slide="next">
 		<span class="carousel-control-next-icon" aria-hidden="true"></span>
 		<span class="sr-only">Next</span>
 	</a>
 </div>
 <script>
 	var prevScrollpos = window.pageYOffset;
 	window.onscroll = function() {
 		var currentScrollPos = window.pageYOffset;
 		if (window.innerWidth >= 768) {
 			if (currentScrollPos < window.innerHeight) {
 				document.querySelector(".logo_area>a").style.transform = "translateX(0)";
 				document.querySelector(".menu-open-close").style.transform = "translateX(0)";
 			} else {
 				document.querySelector(".logo_area>a").style.transform = "translateX(-260px)";
 				document.querySelector(".menu-open-close").style.transform = "translateX(-260px)";
 			}
 			prevScrollpos = currentScrollPos;
 		} else {
 			if (currentScrollPos < window.innerHeight) {
 				document.querySelector(".logo_area>a").style.transform = "translateX(0)";
 				document.querySelector(".menu-open-close").style.transform = "translateX(0)";
 			} else {
 				document.querySelector(".logo_area>a").style.transform = "translateX(-100px)";
 				document.querySelector(".menu-open-close").style.transform = "translateX(-100px)";
 			}
 			prevScrollpos = currentScrollPos;
 		}
 	}
 </script>


 <!-- <section class="fplus-hero-area" style="background-image: url(img/grupo-aider/galeria/galeria-1.jpg); background-position:center bottom;" id="home">
 	<div class="hero-container">
 	</div>
 	<div class="hero-content-area d-flex justify-content-end">
 		<div class="hero-text">
 			<h2>Grupo Aider, energias renovables</h2>
 		</div>
 	</div>
 	<div class="hero-logo-area d-flex justify-content-end">
 		<img src="img/svg/LOGO GR AIDER.svg" alt="">
 	</div>
 </section> -->
 <!-- ****** Welcome Area End ****** -->
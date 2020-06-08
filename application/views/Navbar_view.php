<?php $this->load->view('Head_view'); ?>
<body class="fixed-sn pink-skin">
<!--Double navigation-->
<header>
	<!-- Sidebar navigation -->
	<div id="slide-out" class="side-nav fixed purple lighten-4">
		<ul class="custom-scrollbar">
			<!-- Logo -->
			<li>
				<div class="w-responsive text-center mx-auto p-4 mt-2">
					<img src="<?php echo base_url()?>assets/photos/logonoiretblanc.png" class="img-fluid">
				</div>
			</li>
			<!--/. Logo -->

			<!--Photo étudiant-->
			<li>
				<div class="p-5">
					<img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1 rounded-circle" alt="Responsive image">
				</div>
			</li>
			<!--/Photo étudiant-->

			<!--Nom/Prénom étudiant-->
			<li>
				<div class="w-responsive text-center mx-auto">
					<p>Étudiant</p>
				</div>
			</li>
			<!--/Nom/Prénom étudiant-->

			<!--bouton upload-->
			<li>
				<div class="w-responsive text-center mx-auto mb-2">
					<button type="button" class="btn purple lighten-3 btn-rounded">UPLOAD</button>
				</div>
			</li>
			<!--bouton upload-->

			<!--Search Form-->
			<li>
				<form class="search-form" role="search">
					<div class="form-group md-form mt-0 pt-1 waves-light">
						<input type="text" class="form-control" placeholder="Rechercher">
					</div>
				</form>
			</li>
			<!--/.Search Form-->
			<!-- Side navigation links -->
			<li>
				<ul class="collapsible collapsible-accordion">
					<li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i>Catégories</i><i class="fas fa-angle-down rotate-icon"></i></a></i>
						<div class="collapsible-body">
							<ul>
								<li>
									<a href="#" class="waves-effect">Photos / Vidéos</a>
								</li>
								<li>
									<a href="#" class="waves-effect">Intégration</a>
								</li>
								<li>
									<a href="#" class="waves-effect">Graphisme</a>
								</li>
							</ul>
						</div>
					</li>
					<li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-calendar-alt"></i>Années<i class="fas fa-angle-down rotate-icon"></i></a>
						<div class="collapsible-body">
							<ul>
								<li>
									<a href="#" class="waves-effect">2020</a>
								</li>
								<li>
									<a href="#" class="waves-effect">2019</a>
								</li>
								<li>
									<a href="#" class="waves-effect">2018</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</li>
		</ul>
		<!-- Footer -->
		<div class="fixed-bottom purple lighten-3 text-center">
			<img src="<?php echo base_url()?>assets/photos/logonoiretblanc.png" class="img-fluid w-50 p-3">
			<!-- Copyright -->
			<div class="">© 2020 Copyright:
				<a href="https://themmimuseum.ml" style="text-decoration: none; color: white;"> MMI MUSEUM</a>
			</div>
			<!-- Copyright -->
		</div>
		<!-- Footer -->
		<!--/. Side navigation links -->
	</div>
	<!--/. Sidebar navigation -->
	<!-- Navbar -->
	<nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav ">
		<!-- SideNav slide-out button -->
		<div class="float-left">
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
		</div>
		<!-- Breadcrumb-->
		<div class="breadcrumb-dn mr-auto">
			<p>MMI MUSEUM</p>
		</div>
		<ul class="nav navbar-nav nav-flex-icons ml-auto">
			<li class="nav-item">
				<a class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
			</li>
		</ul>
	</nav>
	<!-- /.Navbar -->
</header>
<!--/.Double navigation-->

<!--Main Layout-->
<main>
	<div class="container-fluid">
		<?php $this->load->view('Consultation_view'); ?>
	</div>
</main>
<!--Main Layout-->

</body>
</html>

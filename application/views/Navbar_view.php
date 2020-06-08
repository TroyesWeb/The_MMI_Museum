<!--Double navigation-->
<header>
	<!-- Sidebar navigation -->
	<div id="slide-out" class="side-nav sn-bg-4 fixed">
		<ul class="custom-scrollbar">
			<!-- Logo -->
			<li>
				<div class="logo-wrapper">
					<a href="#"><img src="<?php echo base_url()?>assets/photos/logonoiretblanc.png" class="img-fluid flex-center"></a>
				</div>
			</li>
			<!--/. Logo -->
			<br>
			<!-- Grid column -->
			<div class="w-50 p-2 mt-4">
			</div>
			<!-- Grid column -->
			<div>
				<h2 class="my-3 h2 text-center">Étudiant</h2>
			</div>
			<!--Upload Form-->
			<div>
				<div class="text-center">
					<button type="button" class="btn btn-secondary btn-rounded">UPLOAD</button>
				</div>
			</div>
			<!--Upload Form-->
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
					<li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i>Catégories<i class="fas fa-angle-down rotate-icon"></i></a>
						<div class="collapsible-body">
							<ul>
								<li>
									<a href="#" class="waves-effect">Photos/Vidéos</a>
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
					<li><a class="collapsible-header waves-effect arrow-r">
							<i class="far fa-hand-pointer"></i>Années<i class="fas fa-angle-down rotate-icon"></i></a>
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
			<!--/. Side navigation links -->
		</ul>
		<div class="sidenav-bg mask-strong"></div>

		<hr class="white">

		<div class="page-footer fixed-bottom font-small blue lighten-3 pt-4">
			<!-- Footer Elements -->
			<div class="text-center">
				<a href="#"><img src="<?php echo base_url()?>assets/photos/logonoiretblanc.png" class="w-50 p-3"></a>
			</div>
			<!-- Footer Elements -->
			<!-- Copyright -->
			<div class="text-center pt-3 pb-3 mt-4">© <?php echo date("Y"); ?> Copyright:
				<a href="https://themmimuseum.ml/"> MMI Museum</a>
			</div>
			<!-- Copyright -->
		</div>
	</div>
	<!--/. Sidebar navigation -->
	<!-- Navbar -->
	<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg double-nav">
		<!-- SideNav slide-out button -->
		<div class="float-left">
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
		</div>
		<!-- Breadcrumb-->
		<div class="breadcrumb-dn mr-auto">
			<p>MMI MUSEUM</p>
		</div>
	</nav>
	<!-- /.Navbar -->
</header>
<!--/.Double navigation-->

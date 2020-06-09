<div>
<!-- SideNav slide-out button -->
<a href="#" data-activates="slide-out" class="btn purple lighten-3 p-3 button-collapse text-white"><i
		class="fas fa-bars"></i></a>
</div>

<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav bleuviolet">
	<ul class="custom-scrollbar">
		<!-- Logo -->
		<li class="text-center">
			<div class="text-center">
					<img src="<?php echo base_url()?>assets/photos/logonoiretblanc.png" class="img-fluid w-75 p-4">
			</div>
		</li>
		<!--/. Logo -->

		<!--Photo étudiant-->
		<li class="text-center">
			<div class="">
				<img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1 rounded-circle w-50" alt="Responsive image">
			</div>
		</li>
		<!--/Photo étudiant-->

		<!--Nom/Prénom étudiant-->
		<li>
			<div class="text-center mt-3">
				<p>Étudiant</p>
			</div>
		</li>
		<!--/Nom/Prénom étudiant-->

		<!--bouton upload-->
		<li>
			<div class="text-center mb-2">
				<a class="text-center" href="<?php echo base_url()?>Upload">
					<button type="button" class="btn btn-rounded btn-small white black-text">Upload</button>
				</a>
			</div>
		</li>
		<!--bouton upload-->

		<!--bouton accueil-->
		<li>
			<div class="text-center mb-2">
				<a class="text-center" href="<?php echo base_url()?>">
					<button type="button" class="btn btn-rounded btn-small white black-text">Accueil</button>
				</a>
			</div>
		</li>
		<!--bouton accueil-->

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
				<li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-calendar-alt"></i>
						Années<i class="fas fa-angle-down rotate-icon"></i></a>
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
</div>
<!--/. Sidebar navigation -->

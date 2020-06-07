<?php $this->load->view('Head_view'); ?>
<body>

<!-- Full Page Intro -->
<div class="view" style="background-image: url('https://remeng.rosselcdn.net/sites/default/files/dpistyles_v2/ena_16_9_extra_big/2019/01/31/node_36158/3977620/public/2019/01/31/B9718433140Z.1_20190131213803_000%2BGG0CSM6AT.1-0.jpg?itok=_eiKH9Iw1548967091'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<!-- Mask & flexbox options-->
	<div class="mask rgba-black-light align-content-center align-items-center">

		<div class="container align-content-center align-items-center">

			<!-- Logos -->
			<!-- TODO: Modifier les images pour des images + adaptées, de la même taille -->
			<div class="row py-5 justify-content-center text-center">
				<div class="col-2 d-inline-flex text-center justify-content-center">
					<img class="img-fluid px-2" style="max-width: 15rem" src="<?php echo base_url()?>assets/photos/logonoiretblanc.png" alt="">
					<img class="img-fluid px-2" style="max-width: 15rem" src="<?php echo base_url()?>assets/photos/logo_mmi_troyes.png" alt="">
				</div>
			</div>

			<!-- Login Form -->
			<div class="row align-middle">
				<div class="col" id="description">
					<!-- Material form subscription -->
					<div class="card bg-transparent">

						<h5 class="card-header transparent white-text text-center py-4">
							<strong>Connexion</strong>
						</h5>

						<!--Card content-->
						<div class="card-body px-lg-5">

							<!-- Form -->
							<form class="text-center text-white" action="#!">

								<!-- Identifiant -->
								<div class="md-form mt-3 rgba-white-light rounded-pill">
									<input type="text" id="identifiant" class="form-control rounded text-white">
									<label for="identifiant">Identifiant</label>
								</div>

								<!-- Mot de passe -->
								<div class="md-form mt-3 rgba-white-light rounded-pill">
									<input type="password" id="password" class="form-control">
									<label for="password">Mot de passe</label>
								</div>

								<!-- Sign in button -->
								<button class="btn purple lighten-3 btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Connexion</button>

							</form>
							<!-- Form -->

						</div>

					</div>
					<!-- Material form -->
				</div>
			</div>

			<!-- Boutons -->
			<div class="row align-middle mb-3">
				<div class="col pt-5">
					<p class="text-center text-white font-weight-bolder">
						Votre profil:
					</p>
					<p class="text-center text-white">
						<a class="text-white" href="<?php echo base_url() ?>Login">
							<button type="button" class="btn btn-lg purple lighten-2 btn-rounded">Étudiant</button>
							<button type="button" class="btn btn-lg purple lighten-2 btn-rounded">Administrateur</button>
						</a>
					</p>
				</div>
			</div>

		</div>
	</div>
</div>

<?php $this->load->view('Footer_view'); ?>

</body>
</html>


<?php $this->load->view('Head_view'); ?>
<body class="">
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

			<!-- Description -->
			<div class="row align-middle">
				<div class="col" id="description">
					<h1 class="text-white text-center">
						À venir
					</h1>
				</div>
			</div>

			<!-- Boutons -->
			<div class="row align-middle mb-3">
				<div class="col pt-5">
					<p class="text-center text-white font-weight-bolder">
						Déconnexion
					</p>
				</div>
			</div>
			<div class="align-middle align-content-center text-center mb-3">
				<a class="text-white" href="<?php echo base_url() ?>Login/Deconnexion">
					<button href="<?php echo base_url() ?>Login/Deconnexion" type="button" class="btn btn-lg purple lighten-2 btn-rounded">Déconnexion</button>
				</a>
			</div>
		</div>
	</div>
	<?php $this->load->view('Footer_view'); ?>
</body>
</html>

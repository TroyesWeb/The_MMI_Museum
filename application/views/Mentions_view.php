<?php $this->load->view('Head_view'); ?>
<body class="p-0 full-width bleuviolet">
<?php $this->load->view('Navbar_view'); ?>

<div class="container-fluid align-content-center align-items-center">

	<!-- Logos -->
	<!-- TODO: Modifier les images pour des images + adaptées, de la même taille -->
	<div class="row py-5 justify-content-center text-center">
		<div class="col-2 d-inline-flex text-center justify-content-center">
			<img class="img-fluid px-2" style="max-width: 15rem" src="<?php echo base_url()?>assets/photos/logonoiretblanc.png" alt="">
		</div>
	</div>

	<!-- Description -->
	<div class="row align-middle pb-5">
		<div class="col text-center pb-5" id="description">
			<h1 class="text-white py-3">Mentions légales</h1>
			<p class="text-white">
				Le site TMM – The MMI Museum est la propriété de l'Institut Universitaire de Technologie de Troyes.<br>
				Le directeur de la publication du site Internet est David Annebicque, Directeur du département Métiers du Multimédia de l’Internet à l'IUT de Troyes.
			</p>

			<h2 class="text-white py-3">Conception</h2>
			<p class="text-white">
				Ce site web a été réalisé par :<br>
				I.U.T. de Troyes <br>
				Les Étudiants S3D (année 2020) du département MMI <br>

				9 Rue Québec <br>
				10000 Troyes <br>
				Contact webmaster : <a class="text-white font-weight-bold" href="mailto:3web@alois-gaucher.fr">3web@alois-gaucher.fr</a>
			</p>

			<h2 class="text-white py-3">Hébergement</h2>
			<p class="text-white">
				Ce site web est hébergé par <a class="text-white font-weight-bold" href="pulseheberg.com">Pulseheberg</a><br>
				55 AVENUE DES CHAMPS PIERREUX <br>
				92000   NANTERRE <br>
				Contact pulseheberg : <a class="text-white font-weight-bold" href="mailto:head@pulseheberg.com">head@pulseheberg.com</a>
			</p>

			<h2 class="text-white py-3">Avertissement aux utilisateurs</h2>
			<p class="text-white">
				L'utilisateur déclare accepter les caractéristiques et les limites d'internet et, en particulier, reconnaître :<br>

				Avoir connaissance de la nature du réseau de l'internet et en particulier, de ses performances techniques et des temps de réponse, pour consulter, interroger ou transférer les données d'informations ;
				Que les données qui circule sur l'internet ne sont pas nécessairement protégées, notamment contre d’éventuels détournements ;
				Qu'il appartient à l'utilisateur de prendre toutes les mesures appropriées de façon à protéger ses propres données et/ou logiciels de la contamination par des éventuels virus sur le réseau de l'internet.
				Gestion des codes d'accès et mots de passe :<br>

				Certains services interactifs présents sur le site nécessitent un code d'accès et un mot de passe qui sont fournis par le gestionnaire de ces services.
				Les codes d'accès et les mots de passe sont confidentiels, personnels, incessibles et intransmissibles. L'utilisateur du site est le seul responsable de la gestion et de la conservation de ses codes d'accès et mots de passe.
				En conséquence, il appartient à l'utilisateur de mettre en œuvre toutes mesures de précaution nécessaires à leur protection et à leur conservation.
				L'utilisateur est responsable des conséquences de leur utilisation.<br>

				Les responsables du site TMM - The MMI Museum se réserve le droit de suspendre l'accès au site en cas d'utilisation frauduleuse ou de tentative d'utilisation frauduleuse du mot de passe ou du code d'accès d'un utilisateur.
				En cas de suspension de l'accès, TMM - The MMI Museum informera l'utilisateur. Le changement régulier de mot de passe est conseillé pour des raisons de confidentialité et de sécurité, et reste possible à tout moment sur le site.
			</p>
		</div>
	</div>
</div>

<?php $this->load->view('Footer_view'); ?>
<script>
	$(document).ready(() => {
		// SideNav Button Initialization
		$(".button-collapse").sideNav();
		// SideNav Scrollbar Initialization
		var sideNavScrollbar = document.querySelector('.side-nav');
		var ps = new PerfectScrollbar(sideNavScrollbar);
	});
</script>
</body>
</html>

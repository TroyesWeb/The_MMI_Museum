<?php $this->load->view('Head_view'); ?>
<body>
<?php $this->load->view('Navbar_view'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h2>Photos/Videos Année 2020 </h2>

			<?php foreach ($toutes as $ligne ) {    ?>
				<li>
					<div class="image"> <a href="<?php echo base_url()?>Consultation/<?php echo $ligne->oeuvre_id ?>"><img src="<?php echo base_url() ?>assets/photos/<?php echo $ligne->oeuvre_photo ?>" alt="Photo"></a>  </div>
					<p> <?php echo $ligne->oeuvre_date?></p>
					<p class="price"><?php echo mb_strtoupper($ligne->oeuvre_intitule) ?><br>
				</li>
			<?php } ?>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<h2>Photos/Videos Année 2019 </h2>

			<?php foreach ($toutes as $ligne ) {    ?>
				<li>
					<div class="image"> <a href="<?php echo base_url()?>Consultation/<?php echo $ligne->oeuvre_id ?>"><img src="<?php echo base_url() ?>assets/photos/<?php echo $ligne->oeuvre_photo ?>" alt="Photo"></a>  </div>
					<p> <?php echo $ligne->oeuvre_date?></p>
					<p class="price"><?php echo mb_strtoupper($ligne->oeuvre_intitule) ?><br>
				</li>
			<?php } ?>
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




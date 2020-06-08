<?php $this->load->view('Head_view'); ?>
<body>
<?php $this->load->view('Navbar_view'); ?>

<!--Main Layout-->
<main>
	<div class="container-fluid mt-5">
		<h2>Advanced Double Navigation with fixed SideNav & fixed Navbar:</h2>
		<br>
		<h5>1. Fixed side menu, hidden on small devices.</h5>
		<h5>2. Fixed Navbar. It will always stay visible on the top, even when you scroll down.</h5>
		<div style="height: 2000px"></div>
	</div>
</main>
<!--Main Layout-->

<h2>Photos/Videos Année 2020 </h2>

<?php foreach ($toutes as $ligne ) {    ?>
	<li>
		<div class="image"> <a href="http://.......//Consultation/<?php echo $ligne->oeuvre_id ?>"><img src="<?php echo base_url() ?>assets/photos/<?php echo $ligne->oeuvre_photo ?>" alt="Photo"></a>  </div>
		<p> <?php echo $ligne->oeuvre_date?></p>
		<p class="price"><?php echo mb_strtoupper($ligne->oeuvre_intitule) ?><br>
	</li>
<?php } ?>


<h2>Photos/Videos Année 2019 </h2>

<?php foreach ($toutes as $ligne ) {    ?>
	<li>
		<div class="image"> <a href="http://.......//Consultation/<?php echo $ligne->oeuvre_id ?>"><img src="<?php echo base_url() ?>assets/photos/<?php echo $ligne->oeuvre_photo ?>" alt="Photo"></a>  </div>
		<p> <?php echo $ligne->oeuvre_date?></p>
		<p class="price"><?php echo mb_strtoupper($ligne->oeuvre_intitule) ?><br>
	</li>
<?php } ?>

<?php $this->load->view('Footer_view'); ?>
<script>
	$(document).ready(() => {
		// SideNav Button Initialization
		$(".button-collapse").sideNav();
		// SideNav Scrollbar Initialization
		var sideNavScrollbar = document.querySelector('.custom-scrollbar');
		var ps = new PerfectScrollbar(sideNavScrollbar);
	});
</script>
</body>
</html>




<?php $this->load->view('Head_view'); ?>
<body>

<div class="container-login100" style="background-image: url('<?php echo base_url() ?>assets/login/images/img-01.jpg');">
	<!-- TODO: Ajouter les images correspondantes -->
	<div class="wrap-login100 p-t-190 p-b-30">
		<form class="login100-form validate-form" method="POST" action="<?php echo base_url() ?>Login/Verif">


					<span class="">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="" type="text" name="identifiant" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
						S'identifier
						</button>
			</div>
		</form>
	</div>
</div>

<?php $this->load->view('Footer_view'); ?>

</body>
</html>


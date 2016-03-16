<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
	<title>Login | RST</title>
	<?php
		echo $this->Html->css('bootstrap/bootstrap.min', array('inline' => true));
		echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('inline' => true));
		echo $this->Html->css('libs/nanoscroller', array('inline' => true));
		echo $this->Html->css('compiled/theme_styles', array('inline' => true));
		echo $this->Html->css('libs/rikuyo_css/common', array('inline' => true));
		echo $this->Html->css('//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300', array('inline' => true));
	?>
	<!-- page-css array('inline' => false, 'block' => 'page-css') -->
	<?php echo $this->fetch('page-css'); ?>


	<!-- Favicon -->
	<link type="image/x-icon" href="favicon.png" rel="shortcut icon">
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->


</head>
<body id="login-page-full" class="fixed-header theme-white">
	<div id="login">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div id="login-box">
						<div id="login-box-holder">
							<div class="row">
								<div class="col-xs-12">
									<header id="login-header">
										<div id="login-logo">
											RST CENTER
										</div>
									</header>
									<div id="login-box-inner">
									<?php echo $this->Session->flash() ?>
										<?php echo $this->Session->flash('auth') ?>
										<?php echo $this->Form->create('User', array(
											'action' => 'login',
											'inputDefaults' => array(
												'label' => false,
												'div' => false,
												'class' => 'form-control'
												)
										)); ?>

											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<?php echo $this->Form->input('username', array(
													'class' => 'form-control',
													'placeholder' => 'Enter User Name'
												)) ?>
											</div>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-key"></i></span>
												<?php echo $this->Form->input('password', array(
													'class' => 'form-control',
													'type' => 'password',
													'placeholder' => 'Enter Password'
												)) ?>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<button type="submit" class="btn btn-success col-xs-12">Login</button>
												</div>
											</div>
										<?php echo $this->Form->end(); ?>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- global scripts -->
	<?php echo $this->Html->script('jquery'); ?>
	<?php echo $this->Html->script('bootstrap'); ?>
	<?php echo $this->Html->script('jquery.nanoscroller.min'); ?>
	<?php echo $this->Html->script('notificationFx'); ?>

	<!-- theme scripts -->
	<?php echo $this->Html->script('scripts'); ?>

	<!-- this page specific scripts -->

	<!-- this page specific inline scripts -->

</body>
</html>
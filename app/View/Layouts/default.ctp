<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>

	<title>
		<?php if(isset($title_for_layout)): echo $title_for_layout . ' |' ; endif; ?>
		RST
	</title>

	<?php
		echo $this->Html->css('bootstrap/bootstrap.min', array('inline' => true,'media' => 'screen'));
		echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('inline' => true,'media' => 'screen'));
		echo $this->Html->css('libs/nanoscroller', array('inline' => true,'media' => 'screen'));
		echo $this->Html->css('compiled/theme_styles', array('inline' => true,'media' => 'screen'));
		echo $this->Html->css('libs/rikuyo_css/common', array('inline' => true,'media' => 'screen'));
		echo $this->Html->css('//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300', array('inline' => true,'media' => 'screen'));
		echo $this->Html->css('libs/nifty-component', array('inline' => true,'media' => 'screen'));
	?>
	<!-- page-css array('inline' => false, 'block' => 'page-css') -->
	<?php echo $this->fetch('page-css'); ?>


	<!-- Favicon -->
	<!-- <link type="image/x-icon" href="favicon.png" rel="shortcut icon"> -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->


</head>


<body class="theme-white fixed-header">
	<div class="md-modal md-effect-8" id="modal-sector">
		<div class="md-content">
			<div class="modal-header">
				<button class="md-close close">&times;</button>
				<h4 class="modal-title"><?= __('Add Sector'); ?></h4>
			</div>
			<div class="modal-body">
				<?php echo $this->Form->create('Sector', array(
					'action' => 'add',
					'inputDefault' => array(
						'div' => false,
						'class' => 'form-control',
						'required' => true
						)
				)) ?>
					<div class="form-group">
						<?php echo $this->Form->input('sector_jp', array(
							'label' => __('Sector_Japanese'),
							'type' => 'text',
							'div' => false,
							'class' => 'form-control',
							'value' => '',
							'placeholder' => __("Enter Sector in Japanese"),
							'required' => true
						)) ?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('sector_en', array(
							'label' => __('Sector_English'),
							'type' => 'text',
							'div' => false,
							'class' => 'form-control',
							'value' => '',
							'placeholder' => __("Enter Sector in English"),
							'required' => true
						)) ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn_close" data-dismiss="modal"><?= __('Close'); ?></button>
						<button type="submit" class="btn btn-primary"><?= __('Save'); ?></button>
					</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
	<div class="md-modal md-effect-8" id="modal-job">
		<div class="md-content">
			<div class="modal-header">
				<button class="md-close close">&times;</button>
				<h4 class="modal-title"><?= __('Add Job'); ?></h4>
			</div>
			<div class="modal-body">
				<?php echo $this->Form->create('Job', array(
					'action' => 'add',
					'inputDefault' => array(
						'div' => false,
						'class' => 'form-control',
						'required' => true
						)
				)) ?>
				<div class="form-group">
					<?php echo $this->Form->input('sector_id', array(
						'label' => __('Sector'),
						'type' => 'select',
						'div' => false,
						'class' => 'form-control',
						'empty' => '',
						'options' => $option_sectors,
						'required' => true
					)) ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('job_jp', array(
						'label' => __('Job_Japanese'),
						'type' => 'text',
						'div' => false,
						'class' => 'form-control',
						'value' => '',
						'placeholder' => __("Enter Job in Japanese"),
						'required' => true
					)) ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('job_en', array(
						'label' => __('Job_English'),
						'type' => 'text',
						'div' => false,
						'class' => 'form-control',
						'value' => '',
						'placeholder' => __("Enter Job in English"),
						'required' => true
					)) ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal"><?= __('Close'); ?></button>
					<button type="submit" class="btn btn-primary"><?= __('Save'); ?></button>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
<?php echo $this->element('doc_modal'); ?>
	<div id="theme-wrapper">
		<!-- header -->
		<?php echo $this->element('header'); ?>
		<!-- /header -->
		<div id="page-wrapper" class="container">
			<div class="row">
				<!-- sidebar -->
				<?php echo $this->element('sidebar'); ?>
				<!-- /sidebar -->

				<div id="content-wrapper">
					<div class="row" style="opacity: 1;">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12 no-print">

										<div class="pull-left">
											<ol class="breadcrumb">
												<li><?php echo $this->Html->getCrumbs(' > ', __('Home')) ?></li>
											</ol>
											<!-- Contents -->
											<?php echo $this->fetch('content'); ?>
											<!-- /Contents -->
							</div><!-- /col-lg-12 -->
						</div>
					</div>
					<!-- footer -->
					<?php echo $this->element('footer'); ?>
					<!-- /footer -->
				</div>
				<!-- /content-wrapper -->
			</div>
		</div>
		<!-- /#page-wrapper.container -->
	</div>
	<!-- /#theme-wrapper -->
<div class="md-overlay"></div>
	<!-- global scripts -->
	<?php
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('jquery.nanoscroller.min');
		echo $this->Html->script('scripts');
		echo $this->Html->script('pace.min');
		echo $this->Html->script('rikuyo_js/myHalfFormat');
	?>
	<?php echo $this->fetch('script'); ?>

	<!-- this page specific scripts ##array('inline' => false, 'block' => 'page-js') -->
	<?php echo $this->fetch('page-js'); ?>

	<!-- Form page specific scripts ##array('inline' => false, 'block' => 'form-js') -->
	<?php echo $this->fetch('form-js'); ?>

	<!-- Modal scripts  ##array('inline' => false, 'block' => 'modal-js') -->
	<?php echo $this->fetch('modal-js'); ?>

	<!-- Table scripts  ##array('inline' => false, 'block' => 'table-js') -->
	<?php echo $this->fetch('table-js'); ?>


	<!-- this page specific inline scripts -->
	<?php echo $this->fetch('inline-script'); ?>


	<?php // echo $this->element('sql_dump'); ?>

</body>
</html>
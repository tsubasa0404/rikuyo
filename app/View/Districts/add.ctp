<?php $this->set('title_for_layout', 'Add District'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Districts List'), '/provinces'); ?>
<?php $this->Html->addCrumb(__('Add District')); ?>
<h1><?= __('Add District') ?></h1>
</div>
</div>
</div>

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 maxW300">
		<div class="main-box">
			<header class="main-box-header clearfix">
				<h2>
				<?php echo __('Add District'); ?>
				</h2>
			</header>
			<div class="main-box-body clearfix">

				<div class="districts form">
					<?php echo $this->Form->create('District'); ?>
						<div class="form-group">
							<?php echo $this->Form->input('province_id', array(
							'class' => 'form-control',
							'empty' => __('--Select Province--')));?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->input('district_en', array(
							'class' => 'form-control',
							'label' => __('District English')));?>
						</div>
					<?php echo $this->Form->end(__('Save')); ?>
				</div>
</div>
</div>
</div>
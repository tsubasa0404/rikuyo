<?php $this->set('title_for_layout', 'Edit Task'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Edit Task')); ?>
					<h1><?= __('Edit Task') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW500">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Edit Task'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">


<div class="tasks form">
<?php echo $this->Form->create('Task'); ?>
	<fieldset>
	<?php echo $this->Form->input('id');?>
	<?php echo $this->Form->input('task', array('div' => 'form-group', 'class' => 'form-control'));?>
	<?php echo $this->Form->input('someone', array('div' => 'form-group', 'class' => 'form-control'));?>
	<div class="form-group">
	<label for="expected_date"><?= __('Expected Date') ?></label>
	<?php echo $this->Form->date('expected_date', array('class' => 'form-control'));?>
	</div>
	<?php echo $this->Form->input('status_id', array(
		'div' => 'form-group', 'class' => 'form-control',
		'options' => array(0 => 'Not Yet', 1 => 'OK'),
		'value' => $this->request->data['Task']['status_id']
		));?>
	<?php echo $this->Form->input('note', array('div' => 'form-group', 'class' => 'form-control'));?>
	<?php echo $this->Form->hidden('flag', array('div' => 'form-group', 'class' => 'form-control'));?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
</div>
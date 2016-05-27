<?php $this->set('title_for_layout', 'Edit Role'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Roles List'), '/users'); ?>
<?php $this->Html->addCrumb(__('Edit Role')); ?>
					<h1><?= __('Edit Role') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW360">
					<div class="main-box">
						<div class="main-box-header clearfix">

						</div>
						<div class="main-box-body clearfix">


							<div class="roles form">
							<?php echo $this->Form->create('Role'); ?>
								<fieldset>
								<?php echo $this->Form->input('id');?>
								<div class="form-group">
								<?php echo $this->Form->input('role',array(
									'class' => 'form-control',
									'label' => __('Role')
								));?>
								</div>
								</fieldset>
							<?php echo $this->Form->end(__('Save')); ?>
							</div>

						</div>
					</div>
				</div>

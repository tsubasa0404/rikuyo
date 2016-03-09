<?php $this->set('title_for_layout', 'Edit User'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Users List'), '/users'); ?>
<?php $this->Html->addCrumb(__('Edit User')); ?>
					<h1><?= __('Edit User') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW360">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Edit User'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">

							<div class="users form">
<?php echo $this->Session->flash() ?>
							<?php echo $this->Form->create('User'); ?>
								<?php echo $this->Form->input('id'); ?>
								<div class="form-group">
									<?php echo $this->Form->input('username', array(
											'class' => 'form-control',
											'label' => __('Username')));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('password', array(
										'class' => 'form-control',
										'label' => __('Password')));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('role_id', array(
											'class' => 'form-control',
											'label' => __('User Role'),
											'options' => $roles
									));?>
								</div>
								<button type="submit" class="btn btn-primary pull-right">
									<i class=""></i> <?= __('Save') ?>
								</button>
							<?php echo $this->Form->end(); ?>
							</div>

					</div>
				</div>
			</div>

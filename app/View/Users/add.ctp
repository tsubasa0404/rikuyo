<?php $this->set('title_for_layout', 'Add User'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Users List'), '/users'); ?>
<?php $this->Html->addCrumb(__('Add User')); ?>
					<h1><?= __('Add User') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW300">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Add User'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">

							<div class="users form">
							<?php echo $this->Form->create('User'); ?>
								<div class="form-group">
									<?php echo $this->Form->input('username', array(
										'class' => 'form-control maxW200'
									));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('password', array(
										'class' => 'form-control maxW200'
									));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('role_id', array(
										'class' => 'form-control maxW200',
										'options' => $roles,
										'empty' => __('--select role--')
									));?>
								</div>
								<button type="button" class="btn btn-primary pull-right">
									<i class="fa fa-plus-circle fa-lg"></i> <?= __('Add') ?>
								</button>
							<?php echo $this->Form->end(); ?>
							</div>
					</div>
				</div>
			</div>

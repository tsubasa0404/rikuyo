<?php $this->set('title_for_layout', 'Users'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Users List')); ?>
					<h1><?= __('Users List') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW300">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Users'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
						<?php echo $this->Session->flash('user_table') ?>
							<div class="table-responsive">
								<table id="table-sector-db" class="table table-bordered table-hover ">
									<thead>
										<tr>
											<th><?= __('USERNAME') ?></th>
											<th><?= __('Role') ?></th>
											<th class="actions"><?php echo __(''); ?></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($users as $user): ?>
											<tr>
												<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
												<td>
													<?php echo $user['Role']['role']; ?>
												</td>
												<td class="actions text-center">
													<?php echo $this->Html->link(
														'<i class="fa fa-pencil"></i>',
														array('action' => 'edit', $user['User']['id']),
														array('escape' => false, 'class' => 'table-link')); ?>
													<?php echo $this->Form->postLink(
														'<i class="fa fa-trash-o"></i>',
														array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['username']), 'escape' => false, 'class' => 'table-link red')); ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Add User'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">

							<div class="users form">
				<?php echo $this->Session->flash('add_user'); ?>

							<?php echo $this->Form->create('User', array('action' => 'add')); ?>

								<div class="form-group">
									<?php echo $this->Form->input('username', array(
										'class' => 'form-control',
										'value' => "",
										'placeholder' => 'Enter Username',
										'required' => true,
										'error' => false
									));?>
									<?php echo $this->Form->error('User.username'); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('password', array(
										'class' => 'form-control',
										'value' => "",
										'placeholder' => 'Enter Password',
										'required' => true
									));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('role_id', array(
										'class' => 'form-control',
										'options' => $roles,
										'empty' => __('--select role--'),
										'required' => true
									));?>
								</div>
								<button type="submit" class="btn btn-primary pull-right">
									<i class="fa fa-plus-circle fa-lg"></i> <?= __('Add') ?>
								</button>
							<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 maxW250">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Roles'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
						<?php echo $this->Session->flash('role_table'); ?>
							<div class="table-responsive">
								<table id="table-db" class="table table-bordered table-hover ">
									<thead>
										<tr>
											<th>ID</th>
											<th><?= __('Role') ?></th>
											<th class="actions"><?php echo __(''); ?></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($roles_list as $role): ?>
											<tr>
												<td><?php echo h($role['Role']['id']); ?>&nbsp;</td>
												<td><?php echo h($role['Role']['role']); ?>&nbsp;</td>
												<td class="actions text-center">
													<?php echo $this->Html->link(
														'<i class="fa fa-pencil"></i>',
														array('controller' => 'roles', 'action' => 'edit', $role['Role']['id']),
														array('escape' => false, 'class' => 'table-link')); ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>

<?php echo $this->Session->flash(); ?>

<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
	$(function(){
		$('.md-modal').remove();
		$('#UserUsername').val("");
		$('#UserPassword').val("");

		$('.alert').fadeOut(5000);
	});
<?php $this->Html->scriptEnd(); ?>
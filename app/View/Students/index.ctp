<?php $this->set('title_for_layout', 'Students'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Student List')); ?>
					<h1><?= __('Student List') ?></h1>
					</div>
				</div>
			</div>

<?php echo $this->Session->flash() ?>
			<div class="row">
				<div class="col-lg-12 maxW800">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Student List') ?></h2>


							<div class="filter-block pull-right">
								<div class="form-group pull-left">
									<input type="text" id="filter" class="form-control" placeholder="Search...">
									<i class="fa fa-search search-icon"></i>
								</div>
							<?php if($user['role_id'] == 1 ||$user['role_id'] == 2  ||$user['role_id'] == 5){ ;?>
								<?php echo $this->Html->link(
									'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Student'),
									array('controller' => 'trainees', 'action' => 'add'),
									array('escape' => false, 'class' => 'btn btn-primary pull-right')
								) ?>
							<?php };?>
							</div>
						</header>

						<div class="main-box-body clearfix">
							<table class="table footable toggle-circle-filled table-bordered table-striped" data-page-size="100" data-filter="#filter" data-filter-text-only="false">
								<thead>
									<tr>
										<th><?= __('Student ID') ?></th>
										<th><?= __('') ?></th>
										<th class=""><?= __('Place of Birth') ?></th>
										<th class=""><?= __('Birthday') ?></th>
										<th class=""><?= __('Phone') ?></th>
										<th class=""><?= __('Interview Status') ?></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($students as $trainee) : ?>
										<tr>
											<td>
												<?php echo $this->Html->link(
													$trainee['Trainee']['control_no'],
													array('controller' => 'trainees', 'action' => 'profile', $trainee['Trainee']['id']),
													array('escape' => false, 'class' => '')
												);?>
												<br>
												<?php echo $trainee['Trainee']['date_in']; ?>
											</td>
											<td>
												<?php if($trainee['TraineeProfileImage']['img_file_name'] != null)
													{
														echo $this->Html->link(
															$this->Html->image('trainee_profile_images/thumb/'.$trainee['TraineeProfileImage']['img_file_name'], array('style' => 'width:60px;height:60px;')),
															array('controller' => 'trainees', 'action' => 'profile/'.$trainee['Trainee']['id']),
															array('escape' => false));
													} else {
														echo $this->Html->link(
															$this->Html->image('trainee_profile_images/thumb/default.png', array('style' => 'width:60px;height:60px;')),
															array('controller' => 'trainees', 'action' => 'profile/'.$trainee['Trainee']['id']),
															array('escape' => false));
													};?>
													<br>
												<?php echo $trainee['Trainee']['given_name_en']." ".$trainee['Trainee']['family_name_en'];?>
											</td>
											<td>
												<?php echo $trainee['BirthplaceProvince']['province_en'];?>
											</td>

											<td>
												<?php echo $trainee['Trainee']['birthday'];?>
											</td>
											<td>
												<?php echo $trainee['Trainee']['phone'];?>
											</td>
											<td class="text-center">
												<?php echo $this->Btn->studentStatusBtn($trainee['Trainee']['student_status_id']);?>
											</td>
											<td>
											<?php if($user['role_id'] == 1 ||$user['role_id'] == 2 ){ ;?>
												<div class="actions">
													<?php echo $this->Form->postlink(
														'<i class="fa fa-trash-o"></i>',
														array('controller' => 'trainees', 'action' => 'update_delete_flag',$trainee['Trainee']['id']),
														array('confirm' => __('Are you sure you want to delete # %s?', $trainee['Trainee']['id']),'escape' => false, 'class' => 'table-link red' )
													);?>
												</div>
											<?php }; ?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<ul class="pagination pull-right hide-if-no-paging"></ul>
						</div>
					</div>
				</div>

	<?php
		echo $this->Html->script('footable', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('footable.sort', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('footable.paginate', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('footable.filter', array('inline' => false, 'block' => 'table-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function() {
			$('.alert').fadeOut(5000);
			$('.footable').footable();
		});
	<?php $this->Html->scriptEnd(); ?>
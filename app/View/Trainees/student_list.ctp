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
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Student List') ?></h2>

							<div class="filter-block pull-right">
								<div class="form-group pull-left">
									<input type="text" id="filter" class="form-control" placeholder="Search...">
									<i class="fa fa-search search-icon"></i>
								</div>
								<?php echo $this->Html->link(
									'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Student'),
									array('controller' => 'trainees', 'action' => 'add'),
									array('escape' => false, 'class' => 'btn btn-primary pull-right')
								) ?>
							</div>
						</header>

						<div class="main-box-body clearfix">
							<table class="table footable toggle-circle-filled table-bordered table-striped" data-page-size="100" data-filter="#filter" data-filter-text-only="false">
								<thead>
									<tr>
										<th><?= __('Student ID') ?></th>
										<th><?= __('') ?></th>
										<th data-hide="all" class=""><?= __('Place of Birth') ?></th>
										<th data-hide="all" class=""><?= __('Birthday') ?></th>
										<th data-hide="all" class=""><?= __('Phone') ?></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($students as $trainee) : ?>
										<tr>
											<td>
												<?php echo $this->Html->link(
													$trainee['Trainee']['control_no'],
													array('action' => 'profile', $trainee['Trainee']['id']),
													array('escape' => false, 'class' => '')
												);?>
												<br>
												<?php echo $trainee['Trainee']['date_in']; ?>
											</td>
											<td>
												<?php if($trainee['TraineeProfileImage'])
													{
														echo $this->Html->image('trainee_profile_images/thumb/'.$trainee['TraineeProfileImage'][0]['img_file_name'], array('style' => 'width:60px;height:60px;'));
													} else {
														echo $this->Html->image('trainee_profile_images/thumb/default.png', array('style' => 'width:60px;height:60px;'));
													};?>
													<br>
												<?php echo $trainee['Trainee']['given_name_en']." ".$trainee['Trainee']['family_name_en'];?>
											</td>
											<td>
												<?php echo $trainee['Trainee']['birthplace_province_id'];?>
											</td>

											<td>
												<?php echo $trainee['Trainee']['birthday'];?>
											</td>
											<td>
												<?php echo $trainee['Trainee']['phone'];?>
											</td>
											<td>
												<div class="actions">
													<?php echo $this->Form->postlink(
														'<i class="fa fa-trash-o"></i>',
														array('controller' => 'trainees', 'action' => 'update_delete_flag',$trainee['Trainee']['id']),
														array('confirm' => __('Are you sure you want to delete # %s?', $trainee['Trainee']['id']),'escape' => false, 'class' => 'table-link red' )
													);?>
												</div>
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
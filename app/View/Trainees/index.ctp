<?php $this->set('title_for_layout', 'Trainees'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Trainee List')); ?>
					<h1><?= __('Trainee List') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Trainee List') ?></h2>

							<div class="filter-block pull-right">
								<div class="form-group pull-left">
									<input type="text" id="filter" class="form-control" placeholder="Search...">
									<i class="fa fa-search search-icon"></i>
								</div>
								<?php echo $this->Html->link(
									'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Trainee'),
									array('controller' => 'trainees', 'action' => 'add'),
									array('escape' => false, 'class' => 'btn btn-primary pull right')
								) ?>
						</header>

						<div class="main-box-body clearfix">
							<table class="table footable toggle-circle-filled table-bordered table-striped" data-page-size="100" data-filter="#filter" data-filter-text-only="false">
								<thead>
									<tr>
										<th><?= __('Trainee ID') ?></th>
										<th><?= __('') ?></th>
										<th><?= __('Interview Date') ?></th>
										<th data-hide="all" class=""><?= __('Birthday') ?></th>
										<th data-hide="all" class=""><?= __('Phone') ?></th>
										<th data-hide="all" class=""><?= __('Sex') ?></th>
										<th><?= __('Medical Check') ?></th>
										<th><?= __('ID Card') ?></th>
										<th><?= __('Passport') ?></th>
										<th><?= __('COE') ?></th>
										<th><?= __('Immigration') ?></th>
										<th><?= __('Labor Ministry') ?></th>
										<th><?= __('Departure') ?></th>
										<th><?= __('Return') ?></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($trainees as $trainee) : ?>
										<?php
											echo "<tr><td>";
											echo $this->Html->link(
												$trainee['Trainee']['control_no'],
												array('action' => 'profile', $trainee['Trainee']['id']),
												array('escape' => false, 'class' => '')
											);
											echo "</td><td>";
											if($trainee['TraineeProfileImage'])
												{
													echo $this->Html->image('trainee_profile_images/thumb/'.$trainee['TraineeProfileImage'][0]['img_file_name']);
												} else {
													echo $this->Html->image('trainee_profile_images/thumb/default.png');
												};
											echo "<br>";
											echo $trainee['Trainee']['given_name_en']." ".$trainee['Trainee']['family_name_en'];
											echo "</td><td>";
											echo "interview date";
											echo "</td><td>";
											echo $trainee['Trainee']['birthday'];
											echo "</td><td>";
											echo $trainee['Trainee']['phone'];
											echo "</td><td>";
											echo $trainee['Trainee']['sex'];
											echo '</td><td class="text-center">';
											echo $this->Btn->statusBtn($trainee['Trainee']['medicalchk_status_id']);
											echo '</td><td class="text-center">';
											echo $this->Btn->statusBtn($trainee['Trainee']['idcard_status_id']);
											echo '</td><td class="text-center">';
											echo $this->Btn->statusBtn($trainee['Trainee']['passport_status_id']);
											echo '</td><td class="text-center">';
											echo $this->Btn->statusBtn($trainee['Trainee']['coe_status_id']);
											echo '</td><td class="text-center">';
											echo $this->Btn->statusBtn($trainee['Trainee']['immigration_status_id']);
											echo '</td><td class="text-center">';
											echo $this->Btn->statusBtn($trainee['Trainee']['labor_ministry_status_id']);
											echo '</td><td class="text-center">';
											echo $this->Btn->statusBtn($trainee['Trainee']['departure_status_id']);
											echo "<br>";
											if($trainee['Trainee']['departure_date']){echo $trainee['Trainee']['departure_date'];}else{echo $trainee['Trainee']['departure_note'];};
											echo '</td><td class="text-center">';
											echo $this->Btn->statusBtn($trainee['Trainee']['return_status_id']);
											echo "<br>";
											if($trainee['Trainee']['return_date']){echo $trainee['Trainee']['return_date'];}else{echo $trainee['Trainee']['return_note'];};
											echo "</td>";
											echo '<td><div class="actions">';
											echo $this->Form->postlink(
												'<i class="fa fa-trash-o"></i>',
												array('controller' => 'trainees', 'action' => 'update_delete_flag',$trainee['Trainee']['id']),
												array('confirm' => __('Are you sure you want to delete # %s?', $trainee['Trainee']['id']),'escape' => false, 'class' => 'table-link' )
											);
											echo '</div></td>';
											echo "</tr>"
										 ?>
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
			$('.footable').footable();
		});
	<?php $this->Html->scriptEnd(); ?>
<?php $this->set('title_for_layout', 'Trainees'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Trainee List')); ?>
					<h1><?= __('Trainee List') ?></h1>
					</div>
				</div>
			</div>

<?php echo $this->Session->flash() ?>
			<div class="row">
				<div class="col-lg-12 maxW1200">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Trainee List') ?></h2>

							<div class="filter-block pull-right">
								<div class="form-group pull-left">
									<input type="text" id="filter" class="form-control" placeholder="Search...">
									<i class="fa fa-search search-icon"></i>
								</div>

							</div>
						</header>

						<div class="main-box-body clearfix">
							<table class="table footable toggle-circle-filled table-bordered table-striped" data-page-size="10" data-filter="#filter" data-filter-text-only="false">
								<thead>
									<tr>
										<th><?= __('Trainee ID') ?></th>
										<th><?= __('') ?></th>
										<th><?= __('Personal Docs') ?></th>
										<th><?= __('Docs Return') ?></th>
										<th><?= __('Flight') ?></th>
										<th><?= __('Interview Date') ?></th>
										<th><?= __('Company(Association)') ?></th>
										<th data-hide="all" class=""><?= __('Birthday') ?></th>
										<th data-hide="all" class=""><?= __('Phone') ?></th>
										<th data-hide="all" class=""><?= __('Sex') ?></th>
										<th data-hide="all" class=""><?= __('Trainee Job') ?></th>
										<th data-hide="all" class=""><?= __('Remark') ?></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($trainees as $trainee) : ?>
										<tr>
											<td>
												<?php echo $this->Html->link(
													$trainee['Trainee']['control_no'],
													array('action' => 'profile', $trainee['Trainee']['id']),
													array('escape' => false, 'class' => '')
												);?>
											</td>
											<td>
												<?php if($trainee['TraineeProfileImage']['img_file_name'] != null)
													{
														echo $this->Html->link(
															$this->Html->image('trainee_profile_images/thumb/'.$trainee['TraineeProfileImage']['img_file_name'], array('style' => 'width:60px;height:60px;')),
															'profile/'.$trainee['Trainee']['id'],
															array('escape' => false));
													} else {
														echo $this->Html->link(
															$this->Html->image('trainee_profile_images/thumb/default.png', array('style' => 'width:60px;height:60px;')),
															'profile/'.$trainee['Trainee']['id'],
															array('escape' => false));
													};?>
													<br>
												<?php echo $trainee['Trainee']['given_name_en']." ".$trainee['Trainee']['family_name_en'];?>
											</td>

											<td class="">
												<p class="mB5"><span><?= __('Medical Check') ?></span>
													<?php echo $this->Btn->statusBtn($trainee['Trainee']['medicalchk_status_id'], 'right');?></p>
												<p class="mB5"><span><?= __('ID Card') ?></span>
													<?php echo $this->Btn->statusBtn($trainee['Trainee']['idcard_status_id'], 'right');?></p>
												<p class="mB5"><span><?= __('Passport') ?></span>
													<?php echo $this->Btn->statusBtn($trainee['Trainee']['passport_status_id'], 'right');?></p>
												<p class="mB5"><span><?= __('COE') ?></span>
													<?php echo $this->Btn->statusBtn($trainee['Trainee']['coe_status_id'], 'right');?></p>
											</td>
											<td class="">
												<p class="mB5"><span><?= __('Immigration') ?></span>
													<?php echo $this->Btn->statusBtn($trainee['Trainee']['immigration_status_id'], 'right');?></p>
												<p class="mB5"><span><?= __('Labor Ministry') ?></span>
													<?php echo $this->Btn->statusBtn($trainee['Trainee']['labor_ministry_status_id'], 'right');?></p>
											</td>

											<td class="">
												<p class="mB5"><span><?= __('Departure') ?></span>
													<?php echo $this->Btn->statusBtn($trainee['Trainee']['departure_status_id'], 'right');?><br>
													<?php if(isset($trainee['Trainee']['departure_date'])){
														$this->HlpCalcDate->transform_date($trainee['Trainee']['departure_date'],$lang)
														;} else {
															echo $trainee['Trainee']['departure_note'];
														};?></p>

												<p class="mB5"><span><?= __('Return') ?></span>
													<?php echo $this->Btn->statusBtn($trainee['Trainee']['return_status_id'], 'right');?><br>
													<?php if(isset($trainee['Trainee']['return_date'])){
														$this->HlpCalcDate->transform_date($trainee['Trainee']['return_date'],$lang)
														;} else {
															echo $trainee['Trainee']['return_note'];
														};?></p>
											</td>
											<td><?php if(isset($trainee['Trainee']['interview_date'])){
														$this->HlpCalcDate->transform_date($trainee['Trainee']['interview_date'],$lang)
													;} ?></td>
											<td>
												<?php echo $this->Html->link(
													$this->Btn->switchLang($lang, $trainee['TraineeListAssociation']['association_jp'], $trainee['TraineeListAssociation']['association_en']),
													array('controller' => 'associations', 'action' => 'profile', $trainee['TraineeListAssociation']['id']),
													array('target' => '_blank')
												);?>
												(
												<?php echo $this->Html->link(
													$this->Btn->switchLang($lang, $trainee['TraineeListCompany']['company_jp'], $trainee['TraineeListCompany']['company_en']),
													array('controller' => 'companies', 'action' => 'profile', $trainee['TraineeListCompany']['id']),
													array('target' => '_blank')
												);?>
												)
											</td>
											<td>
												<?php if(isset($trainee['Trainee']['birthday'])){
													$this->HlpCalcDate->transform_date($trainee['Trainee']['birthday'],$lang);
													};?>
											</td>
											<td>
												<?php echo $trainee['Trainee']['phone'];?>
											</td>
											<td>
												<?php echo __($trainee['Trainee']['sex']);?>
											</td>
											<td><?php if(isset($trainee['Trainee']['trainee_job'])){
												echo $this->Foreach->trainees_job(explode(',',$trainee['Trainee']['trainee_job']),$lang);
												} ?></td>
											<td><?php echo $trainee['Trainee']['note'] ?></td>
											<td>
												<div class="actions">
												<?php if($user['role_id'] == 1 || $user['role_id'] == 2 || $user['role_id'] == 3){ ;?>
													<?php echo $this->Form->postlink(
														'<i class="fa fa-trash-o"></i>',
														array('controller' => 'trainees', 'action' => 'update_delete_flag',$trainee['Trainee']['id']),
														array('confirm' => __('Are you sure you want to delete # %s?', $trainee['Trainee']['id']),'escape' => false, 'class' => 'table-link red' )
													);?>
												<?php };?>
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
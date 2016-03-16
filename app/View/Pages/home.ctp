<?php $this->set('title_for_layout', 'Home'); ?>
<?php echo $this->Html->css('libs/footable.core', array('inline' => false, 'block' => 'page-css')) ?>

										<h1><?= __('Home') ?></h1>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 maxW800">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2 class="pull-left"><?= __('Interview Schedule') ?></h2>
											<div class="filter-block pull-right">
												<?php echo $this->Html->link(
													'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Interview'),
													array('controller' => 'interviews', 'action' => 'add'),
													array('escape' => false, 'class' => 'btn btn-primary pull right')
												) ?>

												<?php echo $this->Html->link(
													'<i class="fa fa-eye fa-lg"></i> '.__('Interview List'),
													array('controller' => 'interviews', 'action' => 'index'),
													array('escape' => false, 'class' => 'btn btn-primary pull right')
												) ?>
											</div>
										</header>

										<div class="main-box-body clearfix">
												<table id="interview-table" class="table  toggle-circle-filled table-striped table-bordered" >
													<thead>
														<tr>
															<th><a href="#"><?= __('Date') ?></a></th>
															<th><a href="#" class="asc"><?= __('Association(Company)') ?></a></th>
															<th><a href="#" class="asc"><?= __('Candidates') ?></a></th>
															<th><a href="#" class="asc"><?= __('Staff') ?></a></th>
															<th><a href="#" class="asc"></a></th>
														</tr>
													</thead>
													<tbody>
														<?php foreach ($interviews as $int) : ?>
															<tr>
																<td class="td_first_block">
																	<?php if($int['Interview']['interview_date']==""){echo __("Undecided");} echo $int['Interview']['interview_date']." ".$int['Interview']['interview_time']." ";?>
																	<?php echo $this->Html->link(
																		__('Detail'),
																		array('controller' => 'interviews', 'action' => 'profile', $int['Interview']['id']),
																		array('escape' => false)
																	);?>
																</td>
																<td>
																	<?php echo $this->Html->link(
																		$this->Btn->switchLang($lang, $int['Association']['association_jp'], $int['Association']['association_en']),
																		array('controller' => 'associations', 'action' => 'profile', $int['Association']['id']),
																		array('escape' => false)
																		);?>
																	(
																		<?php echo $this->Html->link(
																		$this->Btn->switchLang($lang, $int['Company']['company_jp'], $int['Company']['company_en']),
																		array('controller' => 'companies', 'action' => 'profile', $int['Company']['id']),
																		array('escape' => false)
																		);?>
																	)
																</td>
																<td>
																	<?php echo $int[0]['count']." "._('people');?>
																</td>
																<td>
																	<?php echo $int['Interview']['interview_staff'];?>
																</td>
																<td>
																	<div class="actions">
																		<?php echo $this->Form->postlink(
																			'<i class="fa fa-trash-o"></i>',
																			array('controller' => 'interviews', 'action' => 'delete',$int['Interview']['id']),
																			array('confirm' => __('Are you sure you want to delete # %s?', $int['Interview']['id']),'escape' => false, 'class' => 'table-link red' )
																		);?>
																	</div>
																</td>
															</tr>
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 maxW800">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2 class="pull-left"><?= __('Inspections') ?></h2>
											<div class="filter-block pull-right">
												<?php echo $this->Html->link(
													'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Inspection'),
													array('controller' => 'inspections', 'action' => 'add'),
													array('escape' => false, 'class' => 'btn btn-primary pull right')
												) ?>

												<?php echo $this->Html->link(
													'<i class="fa fa-eye fa-lg"></i> '.__('Inspections List'),
													array('controller' => 'inspections', 'action' => 'index'),
													array('escape' => false, 'class' => 'btn btn-primary pull right')
												) ?>
											</div>
										</header>

										<div class="main-box-body clearfix">
												<table id="inspection-table" class="table toggle-circle-filled table-striped table-bordered" >
													<thead>
														<tr>
															<th><a href="#" class="desc"><?= __('Inspection Date') ?></a></th>
															<th><a href="#" class="asc"><?= __('Company') ?></a></th>
															<th><a href="#" class="asc"><?= __('Association') ?></a></th>
															<th><a href="#" class="asc"><?= __('Customer') ?></a></th>
															<th><a href="#" class="asc"><?= __('Rikuyo Staff') ?></a></th>
															<th><a href="#" class="asc"><?= __('Note') ?></a></th>
															<th><a href="#" class="asc"></a></th>
														</tr>
													</thead>
													<tbody>
														<?php if(!empty($inspections[0]['Inspection']['id'])): ?>
															<?php foreach ($inspections as $inspection) : ?>
																<tr>
																	<td class="td_first_block">
																		<?php echo $inspection['Inspection']['inspection_from'] ." ~ ".$inspection['Inspection']['inspection_to'] ;?>
																	</td>
																	<td>
																		<?php echo $this->Html->link(
																			$this->Btn->switchLang($lang, $inspection['Company']['company_jp'], $inspection['Company']['company_en']),
																			array('controller' => 'companies', 'action' => 'profile', $inspection['Inspection']['company_id']),
																			array('escape' => false, 'class' => '', 'target' => '_blank')
																		) ?>
																	</td>
																	<td class="">
																		<?php echo $this->Html->link(
																			$this->Btn->switchLang($lang, $inspection['Association']['association_jp'], $inspection['Association']['association_en']),
																			array('controller' => 'associations', 'action' => 'profile', $inspection['Inspection']['association_id']),
																			array('escape' => false, 'class' => '', 'target' => '_blank')
																		) ?>
																	</td>
																	<td><?php echo $inspection['Inspection']['smb'] ?></td>
																	<td><?php echo $inspection['Inspection']['staff'] ?></td>
																	<td><?php echo $inspection['Inspection']['note'] ?></td>
																	<td>
																		<?php echo $this->Form->postlink(
																			'<i class="fa fa-trash-o"></i>',
																			array('controller' => 'inspections', 'action' => 'delete',$inspection['Inspection']['id']),
																			array('confirm' => __('Are you sure you want to delete # %s?', $inspection['Inspection']['id']),'escape' => false, 'class' => 'table-link red' )
																		); ?>
																	</td>
																</tr>
															<?php endforeach; ?>
														<?php endif; ?>

													</tbody>
												</table>

										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 maxW800">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2><?= __('Tasks, Todo List') ?></h2>
										</header>
										<div class="main-box-body clearfix">
											<div class="row">
												<?php echo $this->Form->create('Task', array(
													'action' => 'addAjax',
													'class' => 'add_ajax_form'
												)); ?>
													<div class="form-group col-lg-12 col-md-12 col-sm-12">
														<label for="" class="sr-only"><?= __('Enter Task, todo or any information ') ?></label>
														<input name="data[Task][task]" id="new_task" class="form-control" placeholder="<?= __('Task, todo or any information ') ?>" required="required">
													</div>
													<div class="form-group col-lg-4 col-md-4 col-sm-4 maxW300">
														<label for="" class=""><?= __('Assigned Person') ?></label>
														<input type="text" id="someone" class="form-control" name="data[Task][someone]" placeholder="<?= __('Name this task assigned') ?>">
													</div>
													<div class="form-group col-lg-6 col-md-6 col-sm-6">
															<label for="" class=""><?= __('Due Date') ?></label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input type="date" id="expected_date" name="data[Task][expected_date]" class="form-control maxW160" placeholder="<?= __('Due Date') ?>" >
														</div>
													</div>
														<button type="button" class="btn btn-primary todo_btn mT20">
															<i class="fa fa-plus-circle fa-lg"></i> <?= __('Add') ?>
														</button>
											</div>
											<hr>
										</div>
										<?php echo $this->Form->end(); ?>

										<div class="main-box-body clearfix">
											<!-- jqueryのセレクタ用に、ulにidを追加 -->
											<ul id="todo_ajax" class="widget-todo">
												<?php foreach ($tasks as $task) : ?>
													<li class="clearfix">
														<div class="name">
															<div class="checkbox-nice">
																<input type="checkbox" id="todo_<?php echo $task['Task']['id'] ?>" class="update_todo" data-id="<?php echo $task['Task']['id'] ?>" data-status="<?php echo $task['Task']['status_id'] ?>" data-expected-date="<?php echo $task['Task']['expected_date']; ?>" value="<?php echo $task['Task']['status_id'] ?>"/>
																<label for="todo_<?php echo $task['Task']['id'] ?>">
																	<span class="todo_title"><?php echo $task['Task']['task'] ?></span> <span class="label label-default someone_name"><?php echo $task['Task']['someone'] ?></span>
																</label>
															</div>
														</div>
														<div class="actions">
															<?php echo $this->Html->link(
																'<i class="fa fa-pencil"></i>',
																array('controller' => 'tasks', 'action' => 'edit', $task['Task']['id']),
																array('escape' => false, 'class' => '')
															) ?>
															<!-- jquery用にdelete_todoクラスを準備 -->
															<?php echo $this->Form->postlink(
																'<i class="fa fa-trash-o"></i>',
																array('controller' => 'tasks', 'action' => 'delete', $task['Task']['id']),
																array('confirm' => __('Are you sure you want to delete?', $task['Task']['id']),'escape' => false, 'class' => 'table-link red' )
															) ?>
														</div>
														<div class="actions">
															<span class="label label-danger "><?php echo $task['Task']['expected_date'] ?></span>
														</div>
													</li>
												<?php endforeach; ?>

												<li class="clearfix hide">
													<div class="name">
														<div class="checkbox-nice">
															<input type="checkbox" id="" value="" class="update_todo" data-id="" data-status="" data-expected-date=""/>
															<label for="">
																<span class="todo_title"></span>
																<span class="label label-default someone_name"></span>
															</label>
														</div>
													</div>
													<div class="actions">
														<?php echo $this->Html->link(
																'<i class="fa fa-pencil"></i>',
																array('controller' => 'tasks', 'action' => 'edit'),
																array('escape' => false, 'class' => 'edit_todo')
															) ?>
															<!-- jquery用にdelete_todoクラスを準備 -->
															<?php echo $this->Form->postlink(
																'<i class="fa fa-trash-o"></i>',
																array('controller' => 'tasks', 'action' => 'delete'),
																array('confirm' => __('Are you sure you want to delete?'),'escape' => false, 'class' => 'table-link red delete_todo' )
															) ?>
													</div>
													<div class="actions">
														<span class="label label-danger expected_date"></span>
													</div>
												</li>
											</ul>
											<?php echo $this->Form->create('Task', array(
												'action' => 'edit',
												'class' => 'hide edit_task_form'
											)) ?>
											<?php echo $this->Form->end(); ?>
											<?php echo $this->Form->create('Task', array(
												'action' => 'delete',
												'class' => 'hide delete_task_form'
											)) ?>
											<?php echo $this->Form->end(); ?>
										</div>
									</div>
								</div>




	<!-- this page table scripts -->
<?php
	echo $this->Html->script('jquery.dataTables', array('inline' => false, 'block' => 'table-js'));
	echo $this->Html->script('dataTables.fixedHeader', array('inline' => false, 'block' => 'table-js'));
	echo $this->Html->script('dataTables.tableTools', array('inline' => false, 'block' => 'table-js'));
	echo $this->Html->script('jquery.dataTables.bootstrap', array('inline' => false, 'block' => 'table-js'));
	echo $this->Html->script('footable', array('inline' => false, 'block' => 'table-js'));
	echo $this->Html->script('footable.sort', array('inline' => false, 'block' => 'table-js'));
	echo $this->Html->script('footable.paginate', array('inline' => false, 'block' => 'table-js'));
	echo $this->Html->script('footable.filter', array('inline' => false, 'block' => 'table-js'));


?>

<?php
	echo $this->Html->script('moment.min', array('inline' => false, 'block' => 'page-js'));
	echo $this->Html->script('rikuyo_js/myTodo', array('inline' => false, 'block' => 'page-js'));
?>

	<!-- this page specific inline scripts -->
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>




	$(document).ready(function() {
		$('.md-modal').remove();
		$('.footable').footable();

		$('#interview-table').dataTable({
			"bInfo" :false
		});

		$('#inspection-table').dataTable({
			"bInfo" :false
		});

		$('.dataTables_wrapper').parents('table-responsive').css('overflow-x','');
	});

	<?php $this->Html->scriptEnd(); ?>
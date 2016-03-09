<?php $this->set('title_for_layout', 'Interviews'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Interview List')); ?>
					<h1><?= __('Interview List') ?></h1>
					</div>
				</div>
			</div>
<?php echo $this->Session->flash(); ?>
			<div class="row">
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Interview Schedule') ?></h2>
							<div class="filter-block pull-right">
								<?php echo $this->Html->link(
									'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Interview'),
									array('controller' => 'interviews', 'action' => 'add'),
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
												<?php if($int['Interview']['interview_date']==""){
														echo __("Undecided");
													} echo $int['Interview']['interview_date']." ".$int['Interview']['interview_time']." ";?>
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
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Past Interviews') ?></h2>
							<div class="filter-block pull-right">

							</div>
						</header>

						<div class="main-box-body clearfix">
							<div class="table-responsive clearfix">
								<table id="past-interview-table" class="table toggle-circle-filled table-striped table-bordered">
									<thead>
										<tr>
											<th><a href="#"><?= __('Date') ?></a></th>
											<th><a href="#"><?= __('Association(Company)') ?></a></th>
											<th><a href="#"><?= __('Documents Status') ?></a></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($past_interviews as $past_int) : ?>
											<tr>
												<td class="td_first_block">
													<?php echo $past_int['Interview']['interview_date'];?>
													<?php echo $this->Html->link(
														__('Detail'),
														array('controller' => 'interviews', 'action' => 'profile', $past_int['Interview']['id']),
														array('escape' => false)
													);?>
												</td>
												<td>
													<?php echo $this->Html->link(
														$this->Btn->switchLang($lang, $past_int['Association']['association_jp'], $past_int['Association']['association_en']),
														array('controller' => 'associations', 'action' => 'profile', $past_int['Association']['id']),
														array('escape' => false)
														);?>
													(
													<?php echo $this->Html->link(
														$this->Btn->switchLang($lang, $past_int['Company']['company_jp'], $past_int['Company']['company_en']),
														array('controller' => 'companies', 'action' => 'profile', $past_int['Company']['id']),
														array('escape' => false)
													);?>
													)
												</td>
												<td>
													<?php
														$completed_cnt = $this->Foreach->completed_document_count($past_int['Interview']['id'])[0][0]['cnt'];
														$doc_cnt = $this->Foreach->document_count($past_int['Association']['id'])[0][0]['cnt'];
														echo $completed_cnt." / ".$doc_cnt;
														if($completed_cnt == $doc_cnt){
															echo '<span class="label label-primary mL5">OK</span>';
														} else {
															echo '<span class="label label-danger mL5">Not Yet</span>';
														}
													;?>
												</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

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

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function() {
			$('.alert').fadeOut(5000);

			$('#interview-table').dataTable({
				"bInfo":false
			});
			$('#past-interview-table').dataTable({
				"bInfo":false,
				"order":[0,'desc']
			});
			$('.footable').footable();
		});
	<?php $this->Html->scriptEnd(); ?>
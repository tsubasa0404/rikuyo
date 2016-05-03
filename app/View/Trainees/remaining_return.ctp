<?php $this->set('title_for_layout', 'Remaining Return'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Remaining Return')); ?>
					<h1><?= __('Remaining Return') ?></h1>
					</div>
				</div>
			</div>

<?php echo $this->Session->flash() ?>
			<div class="row">
				<div class="col-lg-12 maxW900">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Remaining Return') ?></h2>
						</header>

						<div class="main-box-body clearfix">
							<div class="filter-block ">
								<div class="form-group maxW200 ">
									<input type="text" id="max" class="form-control" placeholder="<?= __('Remaining month'); ?>">
								</div>
							</div>
							<table id="remaining_return_datatable" class="table toggle-circle-filled table-bordered table-striped" data-page-size="100" >
								<thead>
									<tr>
										<th><?= __('Trainee ID') ?></th>
										<th><?= __('') ?></th>
										<th><?= __('Remaining Return') ?></th>
										<th><?= __('Return Date') ?></th>
										<th><?= __('Company') ?></th>
										<th><?= __('Association') ?></th>
										<th><?= __('Status') ?></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($remaining_return_trainees as $trainee) : ?>
										<tr>
											<td>
												<?php echo $this->Html->link(
													$trainee['Trainee']['control_no'],
													array('action' => 'profile', $trainee['Trainee']['id']),
													array('escape' => false, 'class' => '')
												);?>
											</td>
											<td>
												<?php if($trainee['RemainingReturnTraineeProfileImage']['img_file_name'] != null)
													{
														echo $this->Html->image('trainee_profile_images/thumb/'.$trainee['RemainingReturnTraineeProfileImage']['img_file_name'], array('style' => 'width:60px;height:60px;'));
													} else {
														echo $this->Html->image('trainee_profile_images/thumb/default.png', array('style' => 'width:60px;height:60px;'));
													};?>
													<br>
												<?php echo $trainee['Trainee']['given_name_en']." ".$trainee['Trainee']['family_name_en'];?>
											</td>
											<td class="text-center">
												<?php echo $this->HlpCalcDate->remaining_month($trainee['Trainee']['return_date']); ?> <?= __('Month(s)') ?>
											</td>
											<td class="text-center">
												<?php echo $trainee['Trainee']['return_date']; ?>
											</td>
											<td>
												<?php echo $this->Html->link(
													$trainee['RemainingReturnCom']['company_jp'],
													array('controller' => 'companies', 'action' => 'profile', $trainee['Trainee']['company_id']),
													array('escape' => false, 'class' => '')
												);?>
												<br>
												<?php echo $this->Html->link(
													$trainee['RemainingReturnCom']['company_en'],
													array('controller' => 'companies', 'action' => 'profile', $trainee['Trainee']['company_id']),
													array('escape' => false, 'class' => '')
												);?>
											</td>
											<td>
												<?php echo $this->Html->link(
													$trainee['RemainingReturnAsso']['association_jp'],
													array('controller' => 'companies', 'action' => 'profile', $trainee['RemainingReturnCom']['association_id']),
													array('escape' => false, 'class' => '')
												);?>
												<br>
												<?php echo $this->Html->link(
													$trainee['RemainingReturnAsso']['association_en'],
													array('controller' => 'companies', 'action' => 'profile', $trainee['RemainingReturnCom']['association_id']),
													array('escape' => false, 'class' => '')
												);?>
											</td>
											<td class="text-center">
												<?php echo $this->Btn->workingStatusBtn($trainee['Trainee']['return_status_id']); ?>
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
		echo $this->Html->script('jquery.dataTables', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('dataTables.fixedHeader', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('dataTables.tableTools', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('jquery.dataTables.bootstrap', array('inline' => false, 'block' => 'table-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function() {
			$('.alert').fadeOut(5000);

			//datatable フィルター設定
			$.fn.dataTable.ext.search.push(
				function( settings, data, dataIndex){
					var min = parseInt( $('#min').val(), 10);
					var max = parseInt( $('#max').val(), 10);
					var month = parseFloat( data[2]) || 0; // use data for the remaining month column

					if( ( isNaN( min ) && isNaN( max ) ) ||
							( isNaN( min ) && month <= max ) ||
							( min <= month && isNaN( max ) ) ||
							(min <= month && month <= max ) )
					{
						return true;
					}
					return false;
				}
			);

			var table = $('#remaining_return_datatable').DataTable({
				"order" : [[2, "asc"]]
			});

			//Event listener to the two range filtering inputs to redraw on input
			$('#min, #max').keyup( function(){
				table.draw();
			});
		});
	<?php $this->Html->scriptEnd(); ?>
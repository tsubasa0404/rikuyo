<?php $this->set('title_for_layout', 'Report'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/morris', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Report')); ?>
					<h1><?= __('Report - Departured Trainees') ." ( ".$y." ) " ?></h1>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="filter-block pull-left">
					<div class="form-group pull-left">
						<?php echo $this->Form->create('reports', array(
							'action' => 'departured_trainees',
							'class' => 'url',
							'type' => 'get',
							'class' => 'maxW400'
						)) ?>
						<?php echo $this->Form->input('y', array(
							'label' => array('class' => 'sr-only'),
							'type' => 'number',
							'min' => '2014',
							'value' => $y,
							'class' => 'form-control year'
						)) ?>
					</div>
					<div class="pull-right">
						<button type="buton" class="btn btn-primary refresh"><?= __('Refresh') ?></button>
							<a href="#" id="report-pager"></a>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
				<div class="filter-block pull-right">
					<?php echo $this->Html->link(
						__('Passed Trainees').' <i class="fa fa-arrow-circle-right fa-lg"></i> ',
						array('controller' => 'reports', 'action' => 'passed_trainees'),
						array('escape' => false, 'class' => 'btn btn-default pull-right')
					) ?>
				</div>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

								<div class="main-box clearfix">
									<header class="main-box-header clearfix">

									</header><!-- /header -->
									<div class="main-box-body clearfix">
										<!-- By month -->
										<div class="row">
											<div class="col-lg-4 maxW400">
												<div class="main-box clearfix">
													<header class="main-box-header clearfix">
														<h2 class="pull-left"><?= __('Departured Trainees by Month') ?></h2>


													</header>

													<div class="main-box-body clearfix">
														<table class="table pTB2 footable toggle-circle-filled table-bordered table-striped" data-page-size="13" >
															<thead>
																<tr>
																	<th><?= __('Month') ?></th>
																	<th data-type="numeric"><?= __('Total') ?></th>
																	<th data-sort-ignore="true"><?= __('Percentage') ?></th>
																</tr>
															</thead>
															<tbody>
																<?php foreach ($departured_trainees_total_list_format as $res) : ?>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $res['YM'] ?>
																		</td>
																		<td>
																			<?php echo $res['total'] ?>
																		</td>
																		<td>
																			<?php if($sum_departured_trainees != 0) {echo ceil($res['total']/$sum_departured_trainees*100) . "%";} else {echo 0;} ?>
																		</td>
																	</tr>
																<?php endforeach; ?>
																	<tr class="sortbottom">
																		<td class="sortbottom"><?= __('Total') ?></td>
																		<td class="passed_trainee_total sortbottom"><?php echo $sum_departured_trainees; ?></td>
																		<td class="sortbottom"></td>
																	</tr>
															</tbody>
														</table>

													</div>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="main-box clearfix">
													<header class="main-box-header clearfix">
														<h2 class="pull-left"><?= __('Departured Trainees by Month') ?></h2>


													</header>

													<div class="main-box-body clearfix">
														<div id="departured_trainees_graph_flot" style="height: 435px; padding: 0px; position: relative;"></div>
													</div>
												</div>
											</div>
										</div>

										<!-- By Homeland -->
										<div class="row">

											<div class="col-lg-4 maxW400">
												<div class="main-box clearfix">
													<header class="main-box-header clearfix">
														<h2 class="pull-left"><?= __('Departured Trainees By Homeland') ?></h2>


													</header>

													<div class="main-box-body clearfix">
														<table class="table pTB2 footable_homeland toggle-circle-filled table-bordered table-striped" data-page-size="30" >
															<thead>
																<tr>
																	<th><?= __('Homeland') ?></th>
																	<th data-type="numeric"><?= __('Total') ?></th>
																	<th data-sort-ignore="true"><?= __('Percentage') ?></th>
																</tr>
															</thead>
															<tbody>
																<?php foreach ($departured_trainees_by_homeland as $res) : ?>
																	<tr>
																		<td class="td_first_block pT0 pB0 pTB0">
																			<?php if ( !$res['Province']['province_en'] ) {
																							echo __('Unknown');
																						} else {
																							echo $res['Province']['province_en'];
																						} ?>
																		</td>
																		<td>
																			<?php echo $res[0]['total'] ?>
																		</td>
																		<td>
																			<?php if($sum_departured_trainees != 0) { echo ceil($res[0]['total']/$sum_departured_trainees*100) . "%" ;} ?>
																		</td>

																	</tr>
																<?php endforeach; ?>
																	<tr class="sortbottom">
																		<td><?= __('Total') ?></td>
																		<td class="passed_trainee_total"><?php echo $sum_departured_trainees; ?></td>
																		<td></td>
																	</tr>
															</tbody>
														</table>

													</div>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="main-box clearfix">
													<header class="main-box-header clearfix">
														<h2 class="pull-left"><?= __('Departured Trainees By Homeland') ?></h2>


													</header>

													<div class="main-box-body clearfix">
														<div id="departured_trainees_by_homeland_graph_flot_horizontal" style="height: 435px; padding: 0px; position: relative;"></div>
													</div>
												</div>
											</div>
										</div>

										<!-- By Gender -->
										<div class="row">

												<div class="col-lg-4 maxW400">
													<div class="main-box clearfix">
														<header class="main-box-header clearfix">
															<h2 class="pull-left"><?= __('Departured Trainees By Gender') ?></h2>


														</header>

														<div class="main-box-body clearfix">
															<table class="table  toggle-circle-filled table-bordered table-striped" data-page-size="12" >
																<thead>
																	<tr>
																		<th><?= __('Gender') ?></th>
																		<th><?= __('Total') ?></th>
																		<th><?= __('Percentage') ?></th>
																	</tr>
																</thead>
																<tbody>
																		<tr>
																			<td>
																				<?= __('Female') ?>
																			</td>
																			<td>
																				<?php  if(!empty($departured_trainees_by_gender_list_format['female'])) { echo $departured_trainees_by_gender_list_format['female'];} else {echo 0;} ?>
																			</td>
																			<td>
																				<?php if($sum_departured_trainees != 0) { echo round($departured_trainees_by_gender_list_format['female']/$sum_departured_trainees*100) . "%" ;} else { echo 0;} ?>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<?= __('Male') ?>
																			</td>
																			<td>
																				<?php if(!empty($departured_trainees_by_gender_list_format['male'])) { echo $departured_trainees_by_gender_list_format['male'];} else {echo 0;} ?>
																			</td>
																			<td>
																				<?php if($sum_departured_trainees != 0) { echo round($departured_trainees_by_gender_list_format['male']/$sum_departured_trainees*100) . "%" ;} else { echo 0;} ?>
																			</td>
																		</tr>
																		<tr>
																			<td><?= __('Total') ?></td>
																			<td class="passed_trainee_total"><?php echo $sum_departured_trainees; ?></td>
																			<td></td>
																		</tr>
																</tbody>
															</table>

														</div>
													</div>
												</div>

										</div>
									</div>

								</div>



	<?php
		echo $this->Html->script('footable', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('footable.sort', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('footable.paginate', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('footable.filter', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('flot/jquery.flot', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('flot/jquery.flot.min', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('flot/jquery.flot.symbol', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('flot/jquery.flot.axislabels', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('flot/jquery.flot.pie.min', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('flot/jquery.flot.resize.min', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('flot/jquery.flot.time', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('flot/jquery.flot.orderBars', array('inline' => false, 'block' => 'table-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function() {
			$('.alert').fadeOut(5000);
			$('.footable').footable();
			$('.footable_homeland').footable();
		});



		$(function($){
			// bar chart - vertical
			//出国者 月ごと
			if ($('#departured_trainees_graph_flot').length) {
				var departured_trainees_data_by_month = [
					<?php echo $departured_trainees_graph_data_to_str; ?>
				];

				var data_set_departured_by_month = [
					{label:"total", data:departured_trainees_data_by_month, color:"#e84e40"}
				];

				var ticks_departured_by_month = [
					[1, "Jan"],
					[2, "Feb"],
					[3, "Mar"],
					[4, "Apr"],
					[5, "May"],
					[6, "Jun"],
					[7, "Jul"],
					[8, "Aug"],
					[9, "Sep"],
					[10, "Oct"],
					[11,"Nov"],
					[12,"Dec"]
				];

				var options_departured_by_month = {
					series:{
						bars:{
							show:true
						}
					},
					bars:{
						align:"center",
						barWidth:0.2,
						fill:1
					},
					xaxis:{
						axisLabel: "Month",
						axisLabelUseCanvas:true,
						ticks:ticks_departured_by_month,
						axisLabelPadding:10
					},
					yaxis:{
						axisLabel: "Total",
						axisLabelUseCanvas:true,
					},
					grid:{
						hoverable:true,
						borderWidth:0,
						tickColor: "#ddd"
					},
					shadowSize:0
				};

				$.plot($("#departured_trainees_graph_flot"), data_set_departured_by_month, options_departured_by_month);
			}
		});



		$(function($){
			// bar chart - horizontal
			if ($('#departured_trainees_by_homeland_graph_flot_horizontal').length) {
				var departured_trainees_data_by_homeland = [
					<?php echo $departured_trainees_by_homeland_graph_data_to_str; ?>
				];

				var data_set_by_homeland_departured = [
					{label:"total", data:departured_trainees_data_by_homeland, color:"#e84e40"}
				];

				var ticks_by_homeland_departured = [
					<?php echo $province_ticks_to_str; ?>
				];

				var options_by_homeland_departured = {
					series:{
						bars:{
							show:true, //凡例を表示
							horizontal:true //グラフを横に
						}
					},
					bars:{
						align:"center",
						barWidth:0.2,
						fill:1
					},
					xaxis:{
						axisLabel: "Total",
						axisLabelUseCanvas:true,
						axisLabelPadding:10,
						minTickSize:1
					},
					yaxis:{
						axisLabel: "Homeland",
						ticks:ticks_by_homeland_departured,
						axisLabelUseCanvas:true,
					},
					grid:{
						hoverable:true,
						borderWidth:0,
						tickColor: "#ddd"
					},
					shadowSize:0
				};

				$.plot($("#departured_trainees_by_homeland_graph_flot_horizontal"), data_set_by_homeland_departured, options_by_homeland_departured);
			}
		});
	<?php $this->Html->scriptEnd(); ?>
<?php $this->set('title_for_layout', 'Report'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/morris', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Report')); ?>
					<h1><?= __('Report') ?></h1>
					</div>
				</div>
			</div>

<?php echo $this->Session->flash() ?>
			<div class="row">

					<div class="col-lg-4 maxW400">
						<div class="main-box clearfix">
							<header class="main-box-header clearfix">
								<h2 class="pull-left"><?= __('Passed Trainees') ?></h2>

								<div class="filter-block pull-right">
									<div class="form-group pull-left">
										<input type="text" id="filter" class="form-control" placeholder="Search...">
										<i class="fa fa-search search-icon"></i>
									</div>
									<?php echo $this->Html->link(
										'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Trainee'),
										array('controller' => 'trainees', 'action' => 'add'),
										array('escape' => false, 'class' => 'btn btn-primary pull-right')
									) ?>
								</div>
							</header>

							<div class="main-box-body clearfix">
								<table class="table footable toggle-circle-filled table-bordered table-striped" data-page-size="12" >
									<thead>
										<tr>
											<th><?= __('Month') ?></th>
											<th><?= __('Total') ?></th>
											<th><?= __('Percentage') ?></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($passed_trainees_total_list_format as $res) : ?>
											<tr>
												<td>
													<?php echo $res['YM'] ?>
												</td>
												<td>
													<?php echo $res['total'] ?>
												</td>
												<td>
													<?php echo ceil($res['total']/$sum_passed_trainees*100) . "%" ?>
												</td>

											</tr>
										<?php endforeach; ?>
											<tr>
												<td><?= __('Total') ?></td>
												<td class="passed_trainee_total"><?php echo $sum_passed_trainees; ?></td>
												<td></td>
											</tr>
									</tbody>
								</table>
								<ul class="pagination pull-right hide-if-no-paging"></ul>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="main-box clearfix">
							<header class="main-box-header clearfix">
								<h2 class="pull-left"><?= __('Passed Trainees') ?></h2>

								<div class="filter-block pull-right">
									<div class="form-group pull-left">
										<input type="text" id="filter" class="form-control" placeholder="Search...">
										<i class="fa fa-search search-icon"></i>
									</div>
									<?php echo $this->Html->link(
										'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Trainee'),
										array('controller' => 'trainees', 'action' => 'add'),
										array('escape' => false, 'class' => 'btn btn-primary pull-right')
									) ?>
								</div>
							</header>

							<div class="main-box-body clearfix">
								<div id="passed_trainees_graph_flot" style="height: 435px; padding: 0px; position: relative;"></div>
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
		});

		$(function($){
			// bar chart - horizontal
			if ($('#passed_trainees_graph_flot').length) {
				var passed_trainees_data = [
					<?php echo $passed_trainees_graph_data_to_str; ?>
				];

				var data_set = [
					{label:"total", data:passed_trainees_data, color:"#e84e40"}
				];

				var ticks = [
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

				var options = {
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
						ticks:ticks,
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



				//function gd(year, month, day) {
				//	return new Date(year, month, day).getTime();
				//}
				//var previousPoint = null, previousLabel = null;
//
				//$.fn.UseTooltip = function () {
				//	$(this).bind("plothover", function (event, pos, item) {
				//		if (item) {
				//			if ((previousLabel != item.series.label) || (previousPoint != item.dataIndex)) {
				//				previousPoint = item.dataIndex;
				//				previousLabel = item.series.label;
				//				$("#tooltip").remove();
				//				var x = item.datapoint[0];
				//				var y = item.datapoint[1];
				//				var color = item.series.color; //console.log(item.series.xaxis.ticks[x].label);
				//				showTooltip(item.pageX, item.pageY, color, "<strong>" + item.series.label + "</strong><br>" //+ item.series.xaxis.ticks[x].label + " : <strong>" + y + "</strong> ");
				//			}
				//		} else {
				//			$("#tooltip").remove();
				//			previousPoint = null;
				//		}
				//	});
				//};
//
				//function showTooltip(x, y, color, contents) {
				//	$('<div id="tooltip">' + contents + '</div>').css({
				//		position: 'absolute',
				//		display: 'none',
				//		top: y - 40,
				//		left: x - 120,
				//		border: '2px solid ' + color,
				//		padding: '3px',
				//		'font-size': '9px',
				//		'border-radius': '5px',
				//		'background-color': '#fff',
				//		'font-family': 'Verdana, Arial, Helvetica, Tahoma, sans-serif',
				//		opacity: 0.9
				//	}).appendTo("body").fadeIn(200);
				//};

				// var series = new Array();

				// series.push({
				// 	data : passed_trainees_data,
				// 	bars : {
				// 		show : true,
				// 		barWidth : 0.2,
				// 		order : 1,
				// 		lineWidth: 1,
				// 		horizontal: false,
				// 		fill: 1,
				// 		aligh:"center"
				// 	}
				// });


				//	$.plot("#passed_trainees_graph_flot", series, {
				//		colors: ['#e84e40', '#ffc107', '#8bc34a', '#03a9f4', '#9c27b0', '#90a4ae'],
				//		grid: {
				//			tickColor: "#ddd",
				//			borderWidth: 0
				//		},
				//		shadowSize: 0,
				//		ticks:ticks
				//	});

				$.plot($("#passed_trainees_graph_flot"), data_set, options);
				//$("#passed_trainees_graph_flot").UseTooltip();
			}


		});
	<?php $this->Html->scriptEnd(); ?>
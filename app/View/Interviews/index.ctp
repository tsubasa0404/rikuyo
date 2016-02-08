<?php $this->set('title_for_layout', 'Interviews'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Interview List')); ?>
					<h1><?= __('Interview List') ?></h1>
					</div>
				</div>
			</div>

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
										<th><a href="#" class="asc"><?= __('Company(Association)') ?></a></th>
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
													$this->Btn->switchLang($lang, $int['Company']['company_jp'], $int['Company']['company_en']),
													array('controller' => 'companies', 'action' => 'profile', $int['Company']['id']),
													array('escape' => false)
													);?>
												(
												<?php echo $this->Html->link(
													$this->Btn->switchLang($lang, $int['Association']['association_jp'], $int['Association']['association_en']),
													array('controller' => 'associations', 'action' => 'profile', $int['Association']['id']),
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
				<div class="col-lg-12">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left">過去の面接一覧</h2>
							<div class="filter-block pull-right">

							</div>
						</header>

						<div class="main-box-body clearfix">
							<div class="table-responsive clearfix">
								<table class="table table-hover footable toggle-circle-filled">
									<thead>
										<tr>
											<th><a href="#">面接番号</a></th>
											<th><a href="#" class="desc">実施日</a></th>
											<th><a href="#" class="asc">組合</a></th>
											<th><a href="#" class="asc">企業</a></th>
											<th data-hide="all"><a href="#" class="asc">合格者</a></th>
											<th><a href="#" class="asc">書類状況</a></th>
										</tr>
									</thead>
									<tbody>
									<!-- 20個ごとにページング -->
										<tr>
											<td>
												<a href="interview-order-detail.html">0001</a>
											</td>
											<td>
												2015/12/01
											</td>
											<td>
												<a href="#">山本組合</a>
											</td>
											<td class="">
												<a href="#">山本株式会社</a>
											</td>
											<td class="">
												<a href="student-profile.html" title="">Yamamoto Takahiro</a><br>
												<a href="student-profile.html" title="">Takemoto Takahiro</a><br>
												<a href="student-profile.html" title="">KoshimotoTakahiro</a><br>
												<a href="student-profile.html" title="">Sakamoto Takahiro</a><br>
												<a href="student-profile.html" title="">Hashimoto Masatoshi</a><br>
											</td>
											<!-- <td class="text-right">
												&dollar; 825.50
											</td> -->
											<td>未了</td>
										</tr>
										<tr>
											<td>
												<a href="#">0002</a>
											</td>
											<td>
												2015/12/05
											</td>
											<td>
												<a href="#">橋本組合</a>
											</td>
											<td class="">
												<a href="#">橋本株式会社</a>
											</td>
											<td class="">
												<a href="student-profile.html" title="">Yamamoto Takahiro</a><br>
												<a href="student-profile.html" title="">Takemoto Takahiro</a><br>
												<a href="student-profile.html" title="">Koshimoto Takahiro</a><br>
												<a href="student-profile.html" title="">Sakamoto Takahiro</a><br>
												<a href="student-profile.html" title="">Hashimoto Masatoshi</a><br>
											</td>
											<!-- <td class="text-right">
												&dollar; 825.50
											</td> -->
											<td>完了</td>
										</tr>
										<tr>
											<td>
												<a href="#">0003</a>
											</td>
											<td>
												2015/12/06
											</td>
											<td>
												<a href="#">Lina組合</a>
											</td>
											<td class="">
												<a href="#">Lina株式会社</a>
											</td>
											<td class="">
												<a href="student-profile.html" title="">Yamamoto Takahiro</a><br>
												<a href="student-profile.html" title="">Takemoto Takahiro</a><br>
												<a href="student-profile.html" title="">KoshimotoTakahiro</a><br>
												<a href="student-profile.html" title="">Sakamoto Takahiro</a><br>
												<a href="student-profile.html" title="">Hashimoto Masatoshi</a><br>
											</td>
											<!-- <td class="text-right">
												&dollar; 825.50
											</td> -->
											<td>完了</td>
										</tr>
										<tr>
											<td>
												<a href="#">0004</a>
											</td>
											<td>
												2015/12/20
											</td>
											<td>
												<a href="#">Saly組合</a>
											</td>
											<td class="">
												<a href="#">Saly株式会社</a>
											</td>
											<td class="">
												<a href="student-profile.html" title="">Yamamoto Takahiro</a><br>
												<a href="student-profile.html" title="">Takemoto Takahiro</a><br>
												<a href="student-profile.html" title="">KoshimotoTakahiro</a><br>
												<a href="student-profile.html" title="">Sakamoto Takahiro</a><br>
												<a href="student-profile.html" title="">Hashimoto Masatoshi</a><br>
											</td>
											<!-- <td class="text-right">
												&dollar; 825.50
											</td> -->
											<td>完了</td>
										</tr>
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
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function() {
			$('#interview-table').dataTable({
				"bInfo":false
			});
		});
	<?php $this->Html->scriptEnd(); ?>
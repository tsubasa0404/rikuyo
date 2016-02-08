<?php $this->set('title_for_layout', 'Successful Candidates'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$prof['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Successful Candidates')); ?>
					<h1><?= __('Successful Candidates') ?></h1>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-lg-12">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th><span><?= __('Association Name') ?></span></th>
											<th><span></span></th>
											<th><span>企業名称</span></th>
											<th><span>企業英語名称</span></th>
											<th><span>職種</span></th>
											<th><span>職種英語名称</span></th>
											<th><span>送り出し機関</span></th>
											<th><span>設立日</span></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												山本組合
											</td>
											<td>
												Yamamoto Kumiai
											</td>
											<td>
												山本株式会社
											</td>
											<td>
												Yamamoto Co.,Ltd
											</td>
											<td>
												型枠
											</td>
											<td>
												Katawaku
											</td>
											<td>
												Human Power
											</td>
											<td>
												2013/08/08
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="table-responsive">
								<table class="table data table-bordered">
							    <thead>
						        <tr>
						            <th class="">番号</th>
						            <th class="">Name</th>
						            <th class="sex">名前</th>
						            <th class="job">職種</th>
						            <th class="age">受け入れ企業</th>
						            <th class="age">誕生日</th>
						            <th class="age">Birthday</th>
						            <th class="age">性別</th>
						        </tr>
							    </thead>
							    <tbody>
						        <tr>
						        	<td>1</td>
						        	<td><a href="student-profile.html">Yamamoto Takahiro</a></td>
						        	<td>山本 貴宏</td>
						        	<td>型枠</td>
						        	<td>山本株式会社</td>
						        	<td>1987/05/02</td>
						        	<td>05/02/1987</td>
						        	<td>男</td>
						        </tr>
						        <tr>
						        	<td>2</td>
						        	<td><a href="student-profile.html">Hashimoto Masatoshi</a></td>
						        	<td>橋本 まさとし</td>
						        	<td>型枠</td>
						        	<td>山本株式会社</td>
						        	<td>1987/05/02</td>
						        	<td>05/02/1987</td>
						        	<td>男</td>
						        </tr>
						        <tr>
						        	<td>3</td>
						        	<td><a href="student-profile.html">Yamaguchi Takahiro</a></td>
						        	<td>山口 貴宏</td>
						        	<td>型枠</td>
						        	<td>山本株式会社</td>
						        	<td>1987/05/02</td>
						        	<td>05/02/1987</td>
						        	<td>女</td>
						        </tr>
						        <tr>
						        	<td>4</td>
						        	<td><a href="student-profile.html">Yamashita Takahiro</a></td>
						        	<td>山下 貴宏</td>
						        	<td>型枠</td>
						        	<td>山本株式会社</td>
						        	<td>1987/05/02</td>
						        	<td>05/02/1987</td>
						        	<td>女</td>
						        </tr>
							    </tbody>
								</table>
								<ul class="pagination pull-right hide-if-no-paging"></ul>
								<div class="profile-message-btn center-block text-left">
									<a href="interview-order-detail.html" class="btn btn-default">
										<i class="fa fa-angle-double-left fa-lg"></i>
										前のページに戻る
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>


	<?php
		echo $this->Html->script('footable', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('footable.sort.js', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('footable.paginate', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('jquery.ex-table-filter', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('sweetalert.min', array('inline' => false, 'block' => 'page-js'));
	 ?>
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
	<?php $this->Html->scriptEnd(); ?>
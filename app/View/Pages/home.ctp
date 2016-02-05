<?php $this->set('title_for_layout', 'Home'); ?>
<?php echo $this->Html->css('libs/footable.core', array('inline' => false, 'block' => 'page-css')) ?>

										<h1><?= __('Home') ?></h1>
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
															<th><a href="#" class="asc"><?= __('Company(Association)') ?></a></th>
															<th><a href="#" class="asc"><?= __('Candidates') ?></a></th>
															<th><a href="#" class="asc"><?= __('Staff') ?></a></th>
															<th><a href="#" class="asc"></a></th>
														</tr>
													</thead>
													<tbody>
														<?php foreach ($interviews as $int) : ?>
															<?php
																echo '<tr><td class="td_first_block">';
																echo $int['Interview']['interview_date']." ".$int['Interview']['interview_time']." ";
																echo $this->Html->link(
																	__('Detail'),
																	array('controller' => 'interviews', 'action' => 'profile', $int['Interview']['id']),
																	array('escape' => false)
																	);
																echo '</td><td>';
																echo $this->Html->link(
																	$this->Btn->switchLang($lang, $int['Company']['company_jp'], $int['Company']['company_en']),
																	array('controller' => 'companies', 'action' => 'profile', $int['Company']['id']),
																	array('escape' => false)
																	);
																echo " (";
																echo $this->Html->link(
																	$this->Btn->switchLang($lang, $int['Association']['association_jp'], $int['Association']['association_en']),
																	array('controller' => 'associations', 'action' => 'profile', $int['Association']['id']),
																	array('escape' => false)
																	);
																echo ")";
																echo "</td><td>";
																echo $int[0]['count']." "._('people');
																echo "</td><td>";
																echo $int['Interview']['interview_staff'];
																echo '</td><td><div class="actions">';
																echo $this->Form->postlink(
																	'<i class="fa fa-trash-o"></i>',
																	array('controller' => 'interviews', 'action' => 'update_delete_flag',$int['Interview']['id']),
																	array('confirm' => __('Are you sure you want to delete # %s?', $int['Interview']['id']),'escape' => false, 'class' => 'table-link' )
																);
																echo '</div></td>';
																echo "</tr>"

															?>
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
											<h2 class="pull-left">視察予定表</h2>
											<div class="filter-block pull-right">
												<a href="inspection-register.html" class="btn btn-primary pull-left">
													<i class="fa fa-plus-circle fa-lg"></i> 新規視察登録
												</a>

												<a href="inspection.html" class="btn btn-primary pull-right">
													<i class="fa fa-eye fa-lg"></i> 視察一覧へ
												</a>
											</div>
										</header>

										<div class="main-box-body clearfix">
												<table id="inspection-table" class="table toggle-circle-filled table-striped table-bordered" >
													<thead>
														<tr>
															<th><a href="#" class="desc">実施日</a></th>
															<th><a href="#" class="asc">組合</a></th>
															<th><a href="#" class="asc">企業</a></th>
															<th><a href="#" class="asc">視察担当者</a></th>
															<th><a href="#" class="asc">視察同伴スタッフ</a></th>
															<th><a href="#" class="asc">備考</a></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																2015/12/01 ~ 2015/12/30
															</td>
															<td>
																<a href="#">山本組合</a>
															</td>
															<td class="">
																<a href="#">山本株式会社</a>
															</td>
															<td>山本貴宏(Takahiro Yamamoto)</td>
															<td>Saly,橋本</td>
															<td></td>
														</tr>
														<tr>
															<td>
																2015/12/05 ~ 2015/12/30
															</td>
															<td>
																<a href="#">橋本組合</a>
															</td>
															<td class="">
																<a href="#">橋本株式会社</a>
															</td>
															<td>山本貴宏(Takahiro Yamamoto)</td>
															<td>Saly,橋本</td>
															<td></td>
														</tr>
														<tr>
															<td>
																2015/12/06 ~ 2015/12/30
															</td>
															<td>
																<a href="#">Lina組合</a>
															</td>
															<td class="">
																<a href="#">Lina株式会社</a>
															</td>
															<td>山本貴宏(Takahiro Yamamoto)</td>
															<td>Saly,橋本</td>
															<td></td>
														</tr>
														<tr>
															<td>
																2015/12/20 ~ 2015/12/30
															</td>
															<td>
																<a href="#">Saly組合</a>
															</td>
															<td class="">
																<a href="#">Saly株式会社</a>
															</td>
															<td>山本貴宏(Takahiro Yamamoto)</td>
															<td>Saly,橋本</td>
															<td></td>
														</tr>
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
											<h2>実習生募集・送り出し状況</h2>
										</header>

										<div class="main-box-body clearfix">
											<div class="tabs-wrapper">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#tab-1" data-toggle="tab">出国済み</a></li>
													<li><a href="#tab-10" data-toggle="tab">帰国者</a></li>
													<li class="dropdown">
														<a class="dropdown-toggle" data-toggle="dropdown" href="#">
															書類関連 <span class="caret"></span>
														</a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#tab-3" data-toggle="tab">提出済み</a></li>
															<li><a href="#tab-9" data-toggle="tab">ID翻訳待ち</a></li>
															<!-- <li class="divider"></li> -->
														</ul>
													</li>
													<li><a href="#tab-8" data-toggle="tab">その他</a></li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane fade in active" id="tab-1">
														<div class="table-responsive clearfix">
															<table class="table table-hover footable toggle-circle-filled">
																<thead>
																	<tr>
																		<th><a href="#">企業名</a></th>
																		<th><a href="#" class="desc">出国日程</a></th>
																		<th><a href="#" class="asc">組合名</a></th>
																		<th><a href="#" class="asc">合格人数</a></th>
																		<th data-hide="all"><a href="#" class="asc">合格者</a></th>
																		<th><a href="#" class="asc">備考欄</a></th>
																		<th>&nbsp;</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>


																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">橋本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			<a href="#">橋本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>


																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>


																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>


																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>


																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>


																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>


																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
													<div class="tab-pane fade" id="tab-10">
														<div class="table-responsive clearfix">
															<table class="table table-hover footable toggle-circle-filled">
																<thead>
																	<tr>
																		<th><a href="#">名前</a></th>
																		<th><a href="#" class="desc">帰国日</a></th>
																		<th><a href="#" class="asc">帰国後の状況</a></th>
																		<th><a href="#" class="asc">実習機関名</a></th>
																		<th>&nbsp;</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<a href="#">山本貴宏</a>
																		</td>
																		<td>
																			2015/11/13
																		</td>
																		<td>
																			製造業
																		</td>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">吉田麻也</a>
																		</td>
																		<td>
																			2015/11/13
																		</td>
																		<td>
																			ニート
																		</td>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
													<div class="tab-pane fade" id="tab-3">

														<div class="table-responsive clearfix">
															<table class="table table-hover footable toggle-circle-filled">
																<thead>
																	<tr>
																		<th><a href="#">企業名</a></th>
																		<th><a href="#" class="desc">入国日程</a></th>
																		<th><a href="#" class="asc">職種</a></th>
																		<th><a href="#" class="asc">組合名</a></th>
																		<th><a href="#" class="asc">合格人数</a></th>
																		<th data-hide="all"><a href="#" class="asc">合格者</a></th>
																		<th><a href="#" class="asc">備考欄</a></th>
																		<th>&nbsp;</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">橋本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			食品加工業
																		</td>

																		<td>
																			<a href="#">橋本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
													<div class="tab-pane fade" id="tab-9">
														<div class="table-responsive clearfix">
															<table class="table table-hover footable toggle-circle-filled">
																<thead>
																	<tr>
																		<th><a href="#">企業名</a></th>
																		<th><a href="#" class="desc">入国日程</a></th>
																		<th><a href="#" class="asc">職種</a></th>
																		<th><a href="#" class="asc">組合名</a></th>
																		<th><a href="#" class="asc">合格人数</a></th>
																		<th data-hide="all"><a href="#" class="asc">合格者</a></th>
																		<th><a href="#" class="asc">備考欄</a></th>
																		<th>&nbsp;</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">橋本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			食品加工業
																		</td>

																		<td>
																			<a href="#">橋本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="tab-8">
														<div class="table-responsive clearfix">
															<table class="table table-hover footable toggle-circle-filled">
																<thead>
																	<tr>
																		<th><a href="#">企業名</a></th>
																		<th><a href="#" class="desc">入国日程</a></th>
																		<th><a href="#" class="asc">職種</a></th>
																		<th><a href="#" class="asc">組合名</a></th>
																		<th><a href="#" class="asc">合格人数</a></th>
																		<th data-hide="all"><a href="#" class="asc">合格者</a></th>
																		<th><a href="#" class="asc">備考欄</a></th>
																		<th>&nbsp;</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">橋本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			食品加工業
																		</td>

																		<td>
																			<a href="#">橋本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="trainee-profile.html">Yamamoto Takahiro</a><br>
																			<a href="trainee-profile.html">Ms.SAM KOEM YONG</a><br>
																			<a href="trainee-profile.html">Ms.DEK SYNAN</a><br>
																			<a href="trainee-profile.html">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">山本株式会社</a>
																		</td>
																		<td>
																			2015/12/01
																		</td>
																		<td>
																			製造業
																		</td>

																		<td>
																			<a href="#">山本組合</a>
																		</td>
																		<td>
																			4名
																		</td>
																		<td>
																			<a href="#">Ms.LIM PISEY</a><br>
																			<a href="#">Ms.SAM KOEM YONG</a><br>
																			<a href="#">Ms.DEK SYNAN</a><br>
																			<a href="#">Ms.MORK SOPANRON</a><br>
																		</td>
																		<td>
																			その他の項目はこちらに表示。
																		</td>
																		<td class="text-center">
																			<a href="#" class="table-link">
																				<span class="fa-stack">
																					<i class="fa fa-pencil"></i>
																				</span>
																			</a>
																		</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2>報連相・タスク管理</h2>
										</header>
										<div class="main-box-body clearfix hidden-xs">
											<div class="row">
												<form action="/task/addAjax" class="form-group" id="" method="post" accept-charset="utf-8">
													<div style="display:none;">
														<input type="hidden" name="_method" value="POST">
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" style="">

														<label for="TimeCardNote" class="sr-only">タスク・連絡事項などを入力してください</label>

										<!-- //新しいタスクを追加の処理
										$('#new_todo_form').on('submit', function(){
											//taskを取得
											var task_var = $('#new_todo').val();
											//ajax処理
											$.post('_ajax.php', {
												task: task_var,
												mode: 'create',
												token: $('#token').val()
											}, function(res){ //自動発行されたid(lastInsertId())を取得してきてresに格納して持ってくる。
											//liを一番上に追加する
												var $li = $('#todo_template').clone();
												//$liにすることで、オブジェクトとしてあとでattrなどメソッドチェーンが利用できる。
												//.clone()によって、templateを引っ張ってこれる。
												$li
													.attr('id', 'todo_' + res.id) //liにid="todo_{lastInsertId()}"をattributeする。
													.data('id', res.id) //data-id="{lastInsertId()}"にする。
													.find('.todo_title').text(title); //li内の.todo_titleの中身(span)にtitleを挿入する。
												$('#todos').prepend($li.fadeIn()); ul#todosの直下に$liをprepend(挿入)する。
												$('#new_todo').val('').focus(); //入力した内容が削除されて、フォーカスが当たるようにする。
											});
											return false; //画面遷移させないようにするため。
										});

										 -->
														<input name="" id="new_todo" class="form-control" placeholder="タスク・連絡事項などを入力してください" required="required" id="">
													</div>
													<div class="form-group col-lg-3 col-md-6 col-sm-6">
														<label for="" class="sr-only">入力者名</label>
														<input type="text" class="form-control" name="" value="" placeholder="入力者名を入力してください">
													</div>
													<div class="form-group col-lg-3 col-md-6 col-sm-6">
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<label for="" class="sr-only">期日</label>
															<input type="date" name="" class="form-control" placeholder="期日を入力してください" style="" id="">
														</div>
													</div>
												</form>
											</div>
													<a class="btn btn-primary pull-right"><i class="fa fa-plus-circle fa-lg"></i> 保存</a>
													<a href="/mosaic/time_cards/edit" class="hidden" id="time-card-edit-link">edit</a>
										</div>

										<div class="main-box-body clearfix">
											<!-- jqueryのセレクタ用に、ulにidを追加 -->
											<ul id="todo_ajax" class="widget-todo">
												<li class="clearfix">
													<div class="name">
														<div class="checkbox-nice">

												<!-- todo_ajax.jsを外部ファイルに作成
												$(function(){
													'use strict';

													//チェックボックスがクリックされたときの挙動
													//_ajax.php->Todo.php->post()->_update()->return 'state'の値をresとして取得してきて、function(res)の処理を実行
													$('#todos').on('click', '.update_todo', function(){
														//checkBoxがクリックされたら、そのタスクのidを取得
														var id = $(this).parents('li').data('id');
														//ajax処理
														$.post('_ajax.php', { //_ajax.phpにはpostで渡ってきた情報をjson_encode($res)、またはエラーを表示するtry catchを作成
															id: id,
															mode: 'update' //class Todoの条件分岐switchで使用する
														}, function(res){ //ここのresがなぞ。=> todo.php
															if(res.state === '1'){
																$('#todo_' + id).attr('checked', 'checked');
															} else{
																$('#todo_' + id).removeAttr('checked');
															}
														});
													});

													//delete_todo(削除ボタン)がクリックされた時の挙動
													$('#todos').on('click', '.delete_todo', function(){
														var id = $(this).parents('li').data('id');
														//ajax処理
														if(confirm('are you sure?')){ //削除するかどうかの確認処理をして、
															$.post('_ajax.php', {
																id: id,
																mode: 'delete',
																token: $('#token').val()
															}, function(){ //なぜresを除いた???=>削除処理の場合は、返り値returnは空の配列[]を返すだけなので不要。
																$('#todo_' + id).fadeout(800); //liが消える。
															}
															);
														}
													});
												}) -->
												<!-- jquery php Todoのロジックメモ
												1.取得してきたタスクの、stateカラム(0が未了、1が完了)が1だったら、echo 'checked'
												2.jqueryの動作用に、class="update_todo"を指定
												3.各タスク毎に、li id="todo_{タスクのid}"とdata-id={タスクのid}を設置
												-->
															<input type="checkbox" id="todo_1" class="update_todo" data-id="1"/>
															<label for="todo_1">
																<span class="todo_title">企業から実習生逃亡のクレーム</span> <span class="label label-default">Hashimoto</span>
															</label>
														</div>
													</div>
													<div class="actions">
														<a href="#" class="table-link">
															<i class="fa fa-pencil"></i>
														</a>
														<!-- jquery用にdelete_todoクラスを準備 -->
														<a href="#" class="table-link danger delete_todo">
															<i class="fa fa-trash-o"></i>
														</a>
													</div>
													<div class="actions">
														<span class="label label-danger ">2015/1/15</span>
													</div>
												</li>
												<li class="clearfix">
													<div class="name">
														<div class="checkbox-nice">
															<input type="checkbox" id="todo-2" />
															<label for="todo-2">
																ID翻訳の情報を労働相に状況刈り取り
															</label>
														</div>
													</div>
													<div class="actions">
														<a href="#" class="table-link">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="#" class="table-link danger">
															<i class="fa fa-trash-o"></i>
														</a>
													</div>
													<div class="actions">
														<span class="label label-danger ">2015/1/15</span>
													</div>
												</li>
												<li class="clearfix">
													<div class="name">
														<div class="checkbox-nice">
															<input type="checkbox" id="todo-3"/>
															<label for="todo-3">
																新しい先生の面接 2015/12/09 15時～ @会議室
															</label>
														</div>
													</div>
													<div class="actions">
														<a href="#" class="table-link">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="#" class="table-link danger">
															<i class="fa fa-trash-o"></i>
														</a>
													</div>
													<div class="actions">
														<span class="label label-danger ">2015/1/15</span>
													</div>
												</li>
												<li class="clearfix">
													<div class="name">
														<div class="checkbox-nice">
															<input type="checkbox" id="todo-4" />
															<label for="todo-4">
																山本組合組長カンボジア視察の準備 2015/12/19 ~ 12/24 <span class="label label-default">Hashimoto</span>
															</label>
														</div>
													</div>
													<div class="actions">
														<a href="#" class="table-link">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="#" class="table-link danger">
															<i class="fa fa-trash-o"></i>
														</a>
													</div>
												</li>
												<li class="clearfix">
													<div class="name">
														<div class="checkbox-nice">
															<input type="checkbox" id="todo-5" />
															<label for="todo-5">
																実習生募集・送り出し状況報告書を山本さんに提出 <span class="label label-default">Hashimoto</span>
															</label>
														</div>
													</div>
													<div class="actions">
														<a href="#" class="table-link">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="#" class="table-link danger">
															<i class="fa fa-trash-o"></i>
														</a>
													</div>
													<div class="actions">
														<span class="label label-danger ">2015/1/15</span>
													</div>
												</li>
												<!-- //新たに追加されるタスク用に、空のテンプレートliをhiddenで準備しておくと便利。

												 -->
											</ul>
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

	<!-- this page form scripts -->
<?php
	// echo $this->Html->script('', array('inline' => false, 'block' => 'form-js'));
?>

	<!-- this page modal scripts -->
<?php
	// echo $this->Html->script('', array('inline' => false, 'block' => 'modal-js'));
?>
<!-- this page scripts -->
<?php
	echo $this->Html->script('moment.min', array('inline' => false, 'block' => 'page-js'));
?>

	<!-- this page specific inline scripts -->
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

	$(document).ready(function() {
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
<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/14_jp', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Employment conditions statement')); ?>
					<h1><?= __('Employment conditions statement') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
					<div class="col-lg-4 maxW400 no-print">
						<div class="main-box clearfix">
							<div class="main-box-body clearfix">
								<header class="main-box-header clearfix">
										<h2><?= __('Successful Trainees') ?>
										</h2>
								</header>

								<div class="main-box-body clearfix">
									<div class="table-responsive">
										<table class="table table-products table-bordered">
											<tbody>
												<?php foreach ($trainees as $trainee) : ?>
													<tr>
														<td>
															<div class="radio">
																<input class="trainee_radio" type="radio" name="trainee_id" value="<?php echo $trainee['Trainee']['id']?>" id="<?php echo $trainee['Trainee']['control_no'] ?>" data-url="<?php echo $this->Html->url(array('controller' => 'output_documents', 'action' => 'getTraineeAjax')); ?>">
																<label for="<?php echo $trainee['Trainee']['control_no'] ?>">
																	<?php echo $trainee['Trainee']['control_no']. " / " ?>
																	<?php echo $this->Html->link($trainee['Trainee']['given_name_en']." " .$trainee['Trainee']['family_name_en'],
																			array('controller' => 'trainees', 'action' => 'profile', $trainee['Trainee']['id']),
																			array('escape' => false, 'target' => '_blank'));
																			?>
																	</label>
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
							<!-- /trainees -->
						</div>
				</div>
			<div class="row">
				<div class="col-lg-12 maxW1000">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="">


								<div class="box-14" style="">
									<div style="border: 1px solid #333;margin-top: 5px;margin-right: 10px;margin-left: 5px;">
											<p align="center" style="padding-top: 22px;margin-bottom: 0">
											雇用条件書
											</p>
											<p align="center" style="margin-top: 0;margin-bottom: 10px">
													កិច្ចព្រមព្រៀងលក្ខខណ្ឌការងារ
											</p>
											<div style="border-bottom: 1px solid #333;height: 405px;">
													<div style="width: 430px;display: inline-block;float: left;margin-left: 10px;">
															<p>
																	□1号コース<br>វគ្គ ១
															</p>
															<p style="padding-bottom:2px;border-bottom: 1px solid #333;width: 250px;display: inline-block;vertical-align: top;">
																	<input type="text" class="trainee_name" value="" style="width: 250px;text-align: center;">
															</p>
															<p style="width: 130px;display: inline-block;padding-top: 5px;">殿<br>លោក លោកស្រី</p>
															<p style="margin-top: 150px">
																	入国予定日<br>
																	គំរោងថ្ងៃចូលប្រទេស
															</p>
															<p style="padding-left: 100px;">
																	<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日<br>
																	　<span style="margin-left: 15px;">ខែ</span>　　<span>ថ្ងៃ</span>
															</p>
													</div>
													<div style="width: 430px;display: inline-block;float: right;margin-right: 10px;">
															<p style="margin-bottom: 0">
																	□2号コース<br>វគ្គ ២
															</p>
															<p align="right" style="margin-bottom: 0;margin-top: 0">
																	<input type="text" name="" value="" style="width:50px;text-align: center">
																			年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日<br>
																	<span style="margin-right: 25px;">ឆ្នាំ</span>  <span style="margin-right: 25px;">ខែ</span>  <span>ថ្ងៃ</span>
															</p>
															<p style="margin-top: 0;margin-bottom: 0">
																	実習実施機関名<br>
																	ឈ្មោះស្ថាប័នអនុវត្តន៍ការងារជំនាញ
															</p>
															<p style="margin-bottom:0;margin-left: 0px; border-bottom: 1px solid #333;padding-bottom: 2px;margin-top: 0">
																	<input type="text" name="" value="<?php echo $interview_prof[0]['ComPrint']['company_jp'] ?>" style="width: 400px;text-align: center;">
															</p>
															<p style="margin-top: 0;margin-bottom: 0">
																	所在地<br>
																	អាស័យដ្ឋាន
															</p>
															<p style="margin-bottom:0;margin-left: 0px; border-bottom: 1px solid #333;padding-bottom: 2px;margin-top: 0">
																	<input type="text" name="" value="<?php echo $interview_prof[0]['ComPrint']['province'].$interview_prof[0]['ComPrint']['address_jp'] ?>" style="width: 400px;text-align: center;">
															</p>
															<p style="margin-top: 0;margin-bottom: 0">
																	電話番号<br>
																	លេខទូរស័ព្ទ
															</p>
															<p style="margin-bottom:0;margin-left: 0px; border-bottom: 1px solid #333;padding-bottom: 2px;margin-top: 0">
																	<input type="text" name="" value="<?php echo $interview_prof[0]['ComPrint']['phone1'] ?>" style="width: 400px;text-align: center;">
															</p>
															<p style="margin-top: 0;margin-bottom: 0">
																	代表者氏名<br>
																	ឈ្មោះអ្នកតំណាង

															</p>
															<p style="margin-bottom:0;margin-left: 0px; border-bottom: 1px solid #333;padding-bottom: 2px;margin-top: 0">
																	<input type="text" name="" value="<?php echo $interview_prof[0]['ComPrint']['rep_family_name_jp']." ".$interview_prof[0]['ComPrint']['rep_given_name_jp'] ?>" style="width: 400px;text-align: center;">
															</p>
													</div>
											</div>
											<div>
													<p style="margin-bottom: 1px;">
															<span style="margin-right: 15px;">1</span>雇用契約期間 <span style="float: right"><input type="text" name="" value="" style="width:50px;text-align: center">
																			年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日 ～ <input type="text" name="" value="" style="width:50px;text-align: center">
																			年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日</span>
													</p>
													<p style="margin-top: 0;margin-bottom: 10px;">
															<span style="margin-left: 22px;">រយៈពេលនៃកិច្ចសន្យាការងារ</span>
															<span style="margin-left: 430px;">ឆ្នាំ<span style="margin-left: 30px;">ខែ</span><span style="margin-left: 25px;">ថ្ងៃ</span></span><span><span style="margin-left: 75px;">ឆ្នាំ</span><span style="margin-left: 30px;">ខែ</span>   <span style="margin-left: 20px;">ថ្ងៃ</span></span>
													</p>
											</div>
											<div>
													<p style="margin-top: 5px;margin-bottom: 0;">
															<span style="margin-right: 15px;">2</span>契約更新の有無 <span style="margin-left: 290px">□</span><span style="margin-left: 20px;">契約の更新はしない</span><span style="margin-left: 130px">□</span><span style="margin-left: 20px;">原則として更新する</span>
													</p>
													<p style="margin-top: 0;">
															<span style="margin-left: 20px;">ការផ្លាស់ប្តូរឬមិនផ្លាស់ប្តូរ </span><span style="margin-left: 265px;">មិនប្តូរកិច្ចសន្យាថ្មី</span><span style="margin-left: 170px;">តាមគោលការណ៍ ផ្លាស់ប្តូរថ្មី</span>
													</p>
											</div>
											<div style="border-bottom: 1px solid #333;">
													<p style="margin-left: 20px;">
															<span>更新の判断基準：経営難により実習実施機関を変更する等、会社の経営状況が著し悪化した場合には、契約を更新しない場合がある。</span><br>
															<span>មាត្រដ្ឋាន(ស្តង់ដា)​នៃការសំរេចការផ្លាស់ប្តូរ: ដូចជាដោយសារដំណើរការងារមានការពិបាកត្រូវផ្លាស់ប្តូរស្ថាប័នអនុវត្តន៍ការងារ</span><br>
															<span>និងក្នុងករណីការងាររបស់ក្រុមហ៊ុនមានសភាពមិនល្អគួរអោយកត់សំគាល់នោះ អាចនឹងមិនមានការផ្លាស់ប្តូរកិច្ចសន្យាថ្មីឡើយ។</span>
													</p>
											</div>
											<div style="border-bottom: 1px solid #333;">
													<p style="margin-left: 0px;margin-top: 1px;margin-bottom: 0;">
															<span style="margin-right: 15px;">1</span><span>就業の場所</span>
													</p>
													<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">កន្លែងធ្វើការ <span style="margin-left: 70px;"><input type="text" name="" value="<?php echo $interview_prof[0]['ComPrint']['province'].$interview_prof[0]['ComPrint']['address_jp'] ?>" style="width: 600px;text-align: center;"></span></p>
											</div>
											<div style="border-bottom: 1px solid #333;">
													<p style="margin-left: 0px;margin-top: 1px;margin-bottom: 0;">
															<span style="margin-right: 15px;">2</span><span>従事すべき業務（職種・作業）の内容</span>
													</p>
													<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">ខ្លឹមសារនៃភារកិច្ចដែលត្រូវគោរពតាម (ប្រភេទការងារ និងការងារ)<span style="margin-left: 70px;"><input type="text" name="" value="" style="width: 400px;text-align: center;"></span></p>
											</div>
											<div>
													<p style="margin-left: 0px;margin-top: 1px;margin-bottom: 0;">
														<span style="margin-right: 15px;">1</span><span>労働時間等</span>
													</p>
													<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">ម៉ោងធ្វើការ</p>
													<p style="margin-left: 20px;margin-bottom: 0;">
															始業・終業時間の時刻等 <span style="margin-left: 230px">始業</span>
															<span style="margin-left: 80px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
															<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
															<span style="margin-left: 20px;margin-right: 20px;">～</span>
															<span>終業</span>
															<span style="margin-left: 80px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
															<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													</p>
													<p style="margin-left: 20px;margin-top: 0">
															ម៉ោងចាប់ផ្តើម និងម៉ោងបញ្ចប់ការងារ <span style="margin-left: 150px">ម៉ោងចាប់ផ្តើម</span>
															<span style="margin-left: 35px;">ម៉ោង</span>
															<span style="margin-left: 35px;">នាទី</span>
															<span style="margin-left: 60px;">ម៉ោងបញ្ចប់</span>
															<span style="margin-left: 50px;">ម៉ោង</span>
															<span style="margin-left: 40px;">នាទី</span>
													</p>
													<p style="margin-left: 20px;margin-bottom: 0;">
															1日の所定労働時間
															<span style="margin-left: 355px;"><input type="text" name="" value="" style="width:30px;text-align: center">時間</span>
															<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													</p>
													<p style="margin-left: 20px;margin-top: 0">
															ចំនួនម៉ោងការងារកំណត់ក្នុង១ថ្ងៃ
															<span style="margin-left: 300px;">ម៉ោង</span>
															<span style="margin-left: 35px;">នាទី</span>
													</p>
													<p style="margin-left: 20px;margin-bottom: 0;">
															【次の制度が労働者に適用される場合】
													</p>
													<p style="margin-left: 20px;margin-top: 0">
															ក្នុងករណីប្រព័ន្ធខាងក្រោមនេះអនុវត្តន៍ចំពោះពលករ
													</p>

													<p style="margin-left: 20px;margin-bottom: 0;">
															□変形労働時間制：
															<span style="margin-left: 255px;">（<input type="text" name="" value="" style="width:30px;text-align: center">年）単位の変形労働時間制</span>
													</p>
													<p style="margin-left: 20px;margin-top: 0">
															ប្រព័ន្ធម៉ោងធ្វើការផ្លាស់ប្តូរ
															<span style="margin-left: 225px;">ឯកតារយៈពេលនៃប្រព័ន្ធម៉ោងធ្វើការផ្លាស់ប្តូរ​ គិតជា​ ​(<input type="text" name="" value="" style="width:30px;text-align: center"> ឆ្នាំ)</span>
													</p>

													<p style="margin-left: 20px;">
															<span>1年単位の変形労働時間制を採用している場合には、母国語併記の年間カレンダーの写し及び労働基準監督署へ</span><br>
															<span>届けた変形労働時間制に関する写しを添付する。</span><br>
															<span>ក្នុងករណីជ្រើសយកម៉ោងធ្វើការប្រភេទ១ឆ្នាំ ត្រូវមានភ្ជាប់ជាមួយនូវឯកសារថតចំលងស្តីអំពីបែបបទម៉ោងធ្វើការផ្លាស់ប្តូរដែលផ្ញើរទៅកាន់</span><br>
															<span>ការិយាល័យត្រួតពិនិត្យស្តង់់ដាការងារ និងឯកសារថតចំលងស្តីអំពីប្រតិទិនប្រចាំឆ្នាំដោយមានភាសាកំណើតកត់ត្រាក្នុងនោះផងដែរ។</span>
													</p>
											</div>
									</div>
									<div class="new-page" style="border: 1px solid #333;margin-top: 10px;margin-right: 10px;margin-left: 5px;">

											<p style="margin-left: 20px;">
													<span>□交代制として、次の勤務時間の組み合わせによる。</span><br>
													<span>ការរៀបចំម៉ោងធ្វើការខាងក្រោមនេះ យោងទៅតាមប្រព័ន្ធប្តូរវេន</span><br>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;">
													<span style="margin-left: 180px">始業</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													<span style="margin-left: 40px;margin-right: 40px;">:</span>
													<span>終業</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													<span style="margin-left: 80px;">休憩時間</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0">
													<span style="margin-left: 150px">ម៉ោងចាប់ផ្តើម</span>
													<span style="margin-left: 25px;">ម៉ោង</span>
													<span style="margin-left: 35px;">នាទី</span>
													<span style="margin-left: 90px;">ម៉ោងបញ្ចប់</span>
													<span style="margin-left: 10px;">ម៉ោង</span>
													<span style="margin-left: 35px;">នាទី</span>
													<span style="margin-left: 80px">ម៉ោងសំរាក</span>
													<span style="margin-left: 25px">នាទី</span>
											</p>

											<p style="margin-left: 20px;margin-bottom: 0;">
													<span style="margin-left: 180px">1日の所定労働時間 </span>
													<span style="margin-left: 125px"><input type="text" name="" value="" style="width:30px;text-align: center">時間</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">
													<span style="margin-left: 180px">ចំនួនម៉ោងការងារកំណត់ក្នុង១ថ្ងៃ</span>
													<span style="margin-left: 75px;">ម៉ោង</span>
													<span style="margin-left: 50px;">នាទី</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 180px">始業</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													<span style="margin-left: 40px;margin-right: 40px;">:</span>
													<span>終業</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													<span style="margin-left: 80px;">休憩時間</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0">
													<span style="margin-left: 150px">ម៉ោងចាប់ផ្តើម</span>
													<span style="margin-left: 25px;">ម៉ោង</span>
													<span style="margin-left: 35px;">នាទី</span>
													<span style="margin-left: 90px;">ម៉ោងបញ្ចប់</span>
													<span style="margin-left: 10px;">ម៉ោង</span>
													<span style="margin-left: 35px;">នាទី</span>
													<span style="margin-left: 80px">ម៉ោងសំរាក</span>
													<span style="margin-left: 25px">នាទី</span>
											</p>

											<p style="margin-left: 20px;margin-bottom: 0;">
													<span style="margin-left: 180px">1日の所定労働時間 </span>
													<span style="margin-left: 125px"><input type="text" name="" value="" style="width:30px;text-align: center">時間</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">
													<span style="margin-left: 180px">ចំនួនម៉ោងការងារកំណត់ក្នុង១ថ្ងៃ</span>
													<span style="margin-left: 75px;">ម៉ោង</span>
													<span style="margin-left: 50px;">នាទី</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 180px">始業</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													<span style="margin-left: 40px;margin-right: 40px;">:</span>
													<span>終業</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													<span style="margin-left: 80px;">休憩時間</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0">
													<span style="margin-left: 150px">ម៉ោងចាប់ផ្តើម</span>
													<span style="margin-left: 25px;">ម៉ោង</span>
													<span style="margin-left: 35px;">នាទី</span>
													<span style="margin-left: 90px;">ម៉ោងបញ្ចប់</span>
													<span style="margin-left: 10px;">ម៉ោង</span>
													<span style="margin-left: 35px;">នាទី</span>
													<span style="margin-left: 80px">ម៉ោងសំរាក</span>
													<span style="margin-left: 25px">នាទី</span>
											</p>

											<p style="margin-left: 20px;margin-bottom: 0;">
													<span style="margin-left: 180px">1日の所定労働時間 </span>
													<span style="margin-left: 125px"><input type="text" name="" value="" style="width:30px;text-align: center">時間</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">
													<span style="margin-left: 180px">ចំនួនម៉ោងការងារកំណត់ក្នុង១ថ្ងៃ</span>
													<span style="margin-left: 75px;">ម៉ោង</span>
													<span style="margin-left: 50px;">នាទី</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 180px">始業</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													<span style="margin-left: 40px;margin-right: 40px;">:</span>
													<span>終業</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">時</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
													<span style="margin-left: 80px;">休憩時間</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0">
													<span style="margin-left: 150px">ម៉ោងចាប់ផ្តើម</span>
													<span style="margin-left: 25px;">ម៉ោង</span>
													<span style="margin-left: 35px;">នាទី</span>
													<span style="margin-left: 90px;">ម៉ោងបញ្ចប់</span>
													<span style="margin-left: 10px;">ម៉ោង</span>
													<span style="margin-left: 35px;">នាទី</span>
													<span style="margin-left: 80px">ម៉ោងសំរាក</span>
													<span style="margin-left: 25px">នាទី</span>
											</p>

											<p style="margin-left: 20px;margin-bottom: 0;">
													<span style="margin-left: 180px">1日の所定労働時間 </span>
													<span style="margin-left: 125px"><input type="text" name="" value="" style="width:30px;text-align: center">時間</span>
													<span style="margin-left: 40px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">
													<span style="margin-left: 180px">ចំនួនម៉ោងការងារកំណត់ក្នុង១ថ្ងៃ</span>
													<span style="margin-left: 75px;">ម៉ោង</span>
													<span style="margin-left: 50px;">នាទី</span>
											</p>

											<p style="margin-left: 0px;margin-top: 1px;margin-bottom: 0;">
												<span style="margin-right: 15px;">2</span><span>休憩時間</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">ម៉ោងសំរាក</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 180px">休憩時間</span>
													<span style="margin-left: 120px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">
													<span style="margin-left: 180px">ម៉ោងសំរាក</span>
													<span style="margin-left: 120px;">នាទី</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-right: 15px;">3</span>1週間の所定労働時間数
													<span style="margin-left: 205px;"><input type="text" name="" value="" style="width:30px;text-align: center">時間</span>
													<span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">分</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">
													ចំនួនម៉ោងការងារកំណត់ក្នុង១សប្តាហ៍
													<span style="margin-left: 150px;">ម៉ោង</span>
													<span style="margin-left: 35px;">នាទី</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 180px">年間総所定労働時間数</span>
													<span style="margin-left: 100px;"><input type="text" name="" value="" style="width:30px;text-align: center">時間</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">
													<span style="margin-left: 180px">ចំនួនម៉ោងការងារកំណត់សរុបក្នុង១ឆ្នាំ</span>
													<span style="margin-left: 35px;">ម៉ោង</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-right: 15px;">4</span>年間総所定労働日数
													<span style="margin-left: 180px;">1年目</span><span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">日</span>
													<span style="margin-left: 35px;">2年目</span><span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">日</span>
													<span style="margin-left: 35px;">3年目</span><span style="margin-left: 20px;"><input type="text" name="" value="" style="width:30px;text-align: center">日</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">
													ចំនួនម៉ោងការងារកំណត់សរុបក្នុង១ឆ្នាំ
													<span style="margin-left: 75px;">ឆ្នាំទី១</span><span style="margin-left: 45px;">ថ្ងៃ</span>
													<span style="margin-left: 35px;">ឆ្នាំទី២</span><span style="margin-left: 45px;">ថ្ងៃ</span>
													<span style="margin-left: 35px;">ឆ្នាំទី៣</span><span style="margin-left: 45px;">ថ្ងៃ</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-right: 15px;">5</span>所定労働時間外労働の有無
													<span style="margin-left: 230px;">□有</span>
													<span style="margin-left: 135px;">□無</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 10px">
													ម៉ោងធ្វើការងារកំណត់ មានឬមិនមាន
													<span style="margin-left: 175px;">មាន</span>
													<span style="margin-left: 105px;">មិនមាន</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 180px">詳細は、就業規則</span>
													<span style="margin-left: 15px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
													<span style="margin-left: 50px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 180px">ច្បាប់ធ្វើការ ពិស្តារ</span>
													<span style="margin-left: 15px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
													<span style="margin-left: 70px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 310px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
													<span style="margin-left: 50px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0;">
													<span style="margin-left: 310px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
													<span style="margin-left: 70px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
											</p>
											<hr>

											<p style="margin-left: 0px;margin-top: 1px;margin-bottom: 0;">
												<span>休日</span>
											</p>
											<p style="margin-left: 0px;margin-top: 0;margin-bottom: 0">ថ្ងៃឈប់សំរាក</p>

											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													定例日　　：　 <span style="margin-left: 90px">毎週</span>
													<span style="margin-left: 10px;"><input type="text" name="" value="" style="width:70px;text-align: center">曜日、</span>
													<span style="margin-left: 20px;">日本の国民の祝日、 その他（<input type="text" name="" value="" style="width:100px;text-align: center">)</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0">
													ថ្ងៃដែលកំណត់​​    រៀងរាល់សប្តាហ៍
													<span style="margin-left: 105px;">ថ្ងៃ, ថ្ងៃបុណ្យជាតិរបស់ជប៉ុន, ផ្សេងទៀត</span>
											</p>

											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													年間合計休日日数
													<span style="margin-left: 160px;"><input type="text" name="" value="" style="width:30px;text-align: center">日</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0">
													ចំនួនថ្ងៃឈប់សំរាកសរុបប្រចាំឆ្នាំ
													<span style="margin-left: 105px;">ថ្ងៃ</span>
											</p>

											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													非定例日　　：　 <span style="margin-left: 80px">週・月あたり</span>
													<span style="margin-left: 5px;"><input type="text" name="" value="" style="width:30px;text-align: center">日、 その他（<input type="text" name="" value="" style="width:167px;text-align: center">)（母国語併記のカレンダー写しを添付する）</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0">
													ថ្ងៃដែលមិនកំណត់​​  ក្នុងរយៈពេល1សប្តាហ៍ ・ខែ
													<span style="margin-left: 20px;">ថ្ងៃ, ផ្សេងទៀត</span><span style="margin-left: 180px;">(ភ្ជាប់ជាមួយប្រតិទិនចំលងដែលមានភាសាកំណើត)</span>
											</p>

											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 175px">詳細は、就業規則</span>
													<span style="margin-left: 15px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
													<span style="margin-left: 50px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 175px">ច្បាប់ធ្វើការ ពិស្តារ</span>
													<span style="margin-left: 15px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
													<span style="margin-left: 70px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 305px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
													<span style="margin-left: 50px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0;">
													<span style="margin-left: 305px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
													<span style="margin-left: 70px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
											</p>
									</div>


									<div class="new-page" style="border: 1px solid #333;margin-top: 10px;margin-right: 10px;margin-left: 5px;">
											<p style="margin-left: 0px;margin-bottom: 0;">
												<span>休暇</span>
											</p>
											<p style="margin-left: 0px;margin-top: 0;margin-bottom: 0">ការឈប់សំរាក</p>

											<p style="margin-left: 0px;margin-bottom: 0;margin-top: 5px">
													<span style="margin-right: 15px;">1</span>年次有給休暇
													<span style="margin-left: 360px;">6ヶ月継続勤務した場合</span>
													<span style="margin-left: 95px;"><input type="text" name="" value="" style="width:30px;text-align: center">日</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ការឈប់សំរាកប្រចាំឆ្នាំដោយមានប្រាក់ឈ្នួល
													<span style="margin-left: 175px;">ក្នុងករណីធ្វើការអស់រយៈពេល៦ខែ</span>
													<span style="margin-left: 55px;">ថ្ងៃ</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 20px;">継続勤務6ヶ月以内の年次有給休暇</span>

													<span style="margin-left: 330px;">□有</span>
													<span style="margin-left: 135px;">□無</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ការឈប់សំរាកប្រចាំឆ្នាំដោយមានប្រាក់ឈ្នួលក្នុងរយៈពេលធ្វើការ៦ខែជាប់គ្នា
													<span style="margin-left: 85px;">មាន</span>
													<span style="margin-left: 105px;">មិនមាន</span>
											</p>

											 <p style="margin-left: 0px;margin-bottom: 0;;margin-top: 0">
													<span style="margin-left: 20px;">→</span>
													<span style="margin-left: 10px;"><input type="text" name="" value="" style="width:30px;text-align: center">ヶ月経過で</span>
													<span style="margin-left: 135px;"><input type="text" name="" value="" style="width:30px;text-align: center">日</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													<span style="margin-left: 145px;">ខែដែលដំណើរការមក</span>
													<span style="margin-left: 5px;">ថ្ងៃ</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;;margin-top: 0">
													<span style="margin-right: 15px;">2</span>その他の休暇
													<span style="margin-left: 360px;">有給（<input type="text" name="" value="" style="width:100px;text-align: center">)</span>
													<span style="margin-left: 40px;">無給（<input type="text" name="" value="" style="width:100px;text-align: center">)</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ការឈប់សំរាកផ្សេងទៀត
													<span style="margin-left: 290px;">មានប្រាក់ឈ្នួល</span>
													<span style="margin-left: 90px;">មិនមានប្រាក់ឈ្នួល</span>
											</p>

											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 175px">詳細は、就業規則</span>
													<span style="margin-left: 15px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
													<span style="margin-left: 50px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 175px">ច្បាប់ធ្វើការ ពិស្តារ</span>
													<span style="margin-left: 15px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
													<span style="margin-left: 70px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 305px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
													<span style="margin-left: 50px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0;">
													<span style="margin-left: 305px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
													<span style="margin-left: 70px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
											</p>

											<hr>

											<p style="margin-left: 0px;margin-bottom: 0;margin-top: 0">
												<span>賃金</span>
											</p>
											<p style="margin-left: 0px;margin-top: 0;margin-bottom: 0">ប្រាក់ឈ្នួល</p>

											<p style="margin-left: 0px;margin-bottom: 0;;margin-top: 0">
													<span style="margin-right: 15px;">1</span>基本賃金
													<span style="margin-left: 250px;">□月給（<input type="text" name="" value="" style="width:60px;text-align: center">円)</span>
													<span style="margin-left: 40px;">□日給（<input type="text" name="" value="" style="width:60px;text-align: center">円)</span>
													<span style="margin-left: 40px;">□時給（<input type="text" name="" value="" style="width:60px;text-align: center">円)</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ប្រាក់ឈ្នួលមូលដ្ឋាន
													<span style="margin-left: 185px;">ប្រាក់ខែ</span><span style="margin-left: 60px;">យ៉េន</span>
													<span style="margin-left: 30px;">ប្រាក់ថ្ងៃ</span><span style="margin-left: 60px;">យ៉េន</span>
													<span style="margin-left: 30px;">ប្រាក់ម៉ោង</span><span style="margin-left: 40px;">យ៉េន</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;;margin-top: 0">
													<span style="margin-right: 15px;">2</span>諸手当（時間外労働の割増賃金は除く）
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ប្រាក់ឧបត្ថម្ភ (លើកលែងការតំឡើងប្រាក់ឈ្នួលការងារក្រៅម៉ោង)
											</p>

											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 180px">(<input type="text" name="" value="" style="width:100px;text-align: center">手当、<input type="text" name="" value="" style="width:100px;text-align: center">手当、<input type="text" name="" value="" style="width:100px;text-align: center">手当)</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">
													<span style="margin-left: 285px">ប្រាក់ឧបត្ថម្ភ</span>
													<span style="margin-left: 60px">ប្រាក់ឧបត្ថម្ភ</span>
													<span style="margin-left: 60px">ប្រាក់ឧបត្ថម្ភ</span>
											</p>

											<p style="margin-left: 200px;margin-bottom: 0;margin-top: 0">
													詳細は別紙の通り
											</p>
											<p style="margin-left: 200px;margin-top: 0;margin-bottom: 0">
													សេក្តីលំអិតនៅឯកសារផ្សេង
											</p>

											<hr>

											<p style="margin-left: 0px;margin-bottom: 0;;margin-top: 0">
													<span style="margin-right: 15px;">3</span>所定時間外、休日又は深夜労働に対して支払われる割増賃金率
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													អត្រាកម្រិតនៃការដំឡើងប្រាក់ឈ្នួលម៉ោងធ្វើការយប់ ថ្ងៃឈប់សំរាក និងការធ្វើការក្រៅម៉ោងកំណត់
											</p>

											<p style="margin-left: 200px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 0px">（ａ）所定時間外</span>
													<span style="margin-left: 50px">法定超</span><span><input type="text" name="" value="" style="width:50px;text-align: center">%</span>
													<span style="margin-left: 30px">所定超</span><span><input type="text" name="" value="" style="width:50px;text-align: center">%</span>
													<span style="margin-left: 30px">法定60時間超</span><span><input type="text" name="" value="" style="width:50px;text-align: center">%</span>
											</p>
											<p style="margin-left: 200px;margin-top: 0;margin-bottom: 0">
													ការងារក្រៅម៉ោងកំណត់
													<span style="margin-left: 20px">លើសពីម៉ោង</span>
													<span style="margin-left: 50px">លើសពីម៉ោង</span>
													<span style="margin-left: 55px">លើសពី៦០ម៉ោង</span>
											</p>
											<p style="margin-left: 200px;margin-top: 0;margin-bottom: 5px;">
													<span style="margin-left: 165px">កំណត់មានក្នុងច្បាប់</span>
													<span style="margin-left: 5px">ដែលកំណត់</span>
													<span style="margin-left: 65px">ដែលកំណត់មានក្នុងច្បាប់</span>
											</p>

											<p style="margin-left: 200px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 0px">（ｂ）休日</span>
													<span style="margin-left: 90px">法定休日</span><span><input type="text" name="" value="" style="width:50px;text-align: center">%</span>
													<span style="margin-left: 20px">法定外休日</span><span><input type="text" name="" value="" style="width:50px;text-align: center">%</span>
											</p>
											<p style="margin-left: 200px;margin-top: 0;margin-bottom: 0">
													ថ្ងៃឈប់សំរាក
													<span style="margin-left: 75px">ថ្ងៃឈប់សំរាក</span>
													<span style="margin-left: 50px">ថ្ងៃឈប់សំរាក</span>
											</p>
											<p style="margin-left: 200px;margin-top: 0;margin-bottom: 0">
													<span style="margin-left: 165px">កំណត់ដោយច្បាប់</span>
													<span style="margin-left: 23px">កំណត់ដោយច្បាប់</span>
											</p>

											<p style="margin-left: 200px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 0px">（C）深夜</span>
													<span style="margin-left: 95px">深夜</span><span><input type="text" name="" value="" style="width:50px;text-align: center">%</span>
											</p>
											<p style="margin-left: 200px;margin-top: 0;margin-bottom: 0">
													ការងារពេលយប់
													<span style="margin-left: 60px">ការងារពេលយប់</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;;margin-top: 0">
													<span style="margin-right: 15px;">4</span>賃金締切日
													<span style="margin-left: 270px;">毎月<input type="text" name="" value="" style="width:30px;text-align: center">日</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													កាលកំណត់នៃប្រាក់ឈ្នួល
													<span style="margin-left: 180px;">រៀងរាល់ខែ</span>
													<span style="margin-left: 0px;">ថ្ងៃ</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;;margin-top: 0">
													<span style="margin-right: 15px;">5</span>賃金支払日
													<span style="margin-left: 270px;">毎月<input type="text" name="" value="" style="width:30px;text-align: center">日</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ថ្ងៃទទួលប្រាក់ឈ្នួល
													<span style="margin-left: 217px;">រៀងរាល់ខែ</span>
													<span style="margin-left: 0px;">ថ្ងៃ</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;;margin-top: 0">
													<span style="margin-right: 15px;">6</span>賃金支払方法
													<span style="margin-left: 250px;">□通貨払</span>
													<span style="margin-left: 90px;">□口座振り込み</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 10px">
													វិធីទទួលប្រាក់ឈ្នួល
													<span style="margin-left: 220px;">ទទួលជារូបិយប័ណ្ណ</span>
													<span style="margin-left: 20px;">ការបញ្ចូលតាមគណនី</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;;margin-top: 0">
													<span style="margin-right: 15px;">7</span>労使協定に基づく賃金支払時の控除
													<span style="margin-left: 119px;">□有</span>
													<span style="margin-left: 90px;">□無</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ការកាត់បន្ថយនៅពេលទទួលប្រាក់ឈ្នួល
													<span style="margin-left: 100px;">មាន</span>
													<span style="margin-left: 80px;">មិនមាន</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													យោងទៅតាមកិច្ចសន្យារវាងនិយោជក និងនិយោជិត
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-right: 15px;">8</span>昇給
													<span style="margin-left: 200px;">□有（時期、金額等<input type="text" name="" value="" style="width:100px;text-align: center">)、</span>
													<span style="margin-left: 75px;">□無</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ការតំឡើងប្រាក់ឈ្នួល
													<span style="margin-left: 100px;">មាន (ដូចជា រយៈពេល ចំនួនទឹកប្រាក់ )</span>
													<span style="margin-left: 80px;">មិនមាន</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-right: 15px;">9</span>賞与
													<span style="margin-left: 200px;">□有（時期、金額等<input type="text" name="" value="" style="width:100px;text-align: center">)、</span>
													<span style="margin-left: 75px;">□無</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ប្រាក់បន្ថែមលើកទឹកចិត្ត
													<span style="margin-left: 100px;">មាន (ដូចជា រយៈពេល ចំនួនទឹកប្រាក់ )</span>
													<span style="margin-left: 90px;">មិនមាន</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-right: 10px;">10</span>退職金
													<span style="margin-left: 185px;">□有（時期、金額等<input type="text" name="" value="" style="width:100px;text-align: center">)、</span>
													<span style="margin-left: 75px;">□無</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ប្រាក់ឧបត្ថម្ភ
													<span style="margin-left: 160px;">មាន (ដូចជា រយៈពេល ចំនួនទឹកប្រាក់ )</span>
													<span style="margin-left: 80px;">មិនមាន</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													ពេលចូលនិវត្តន៍
											</p>
									</div>

									<div class="new-page" style="border: 1px solid #333;margin-top: 10px;margin-right: 10px;margin-left: 5px;">
											<p style="margin-left: 0px;margin-bottom: 0;">
												<span>退職に関する事項</span>
											</p>
											<p style="margin-left: 0px;margin-top: 0;margin-bottom: 0">ប្រការទាក់ទងនឹងពេលលាឈប់</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-right: 15px;">1</span>自己都合退職の手続き（退職する2週間以上前に社長・工場長等に届けること）
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 10px">
													និតិវិធីពេលលាឈប់ដោយមូលហេតុផ្ទាល់ខ្លួន (ត្រូវធ្វើលិខិតជូនប្រធានរោងចក្រ និងនាយកក្រុមហ៊ុនរយៈពេល២សប្តាហ៍មុននឹងលាឈប់
											</p>

											 <p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-right: 15px;">2</span>解雇の事由及び手続
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 5px">
													និតិវិធីនិងមូលហេតុនៃការបញ្ឈប់ការងារ
											</p>

											<p style="margin-left: 20px;">
													<span style="margin-left: 30px">解雇は、やむを得ない事由がある場合にかぎり少なくとも30日前に予告をするか、又は30日分以上の平均賃金を支払って</span><br>
													<span style="margin-left: 30px">解雇する。技能実習生の責に帰すべき事由に基づいて解雇する場合には、所轄の労働基準監督署長の認定を受けることに</span><br>
													<span style="margin-left: 30px">より予告も平均賃金の支払いも行わず即時解雇されることもあり得る。</span><br>
													<span style="margin-left: 30px">ក្នុងករណីមានមូលហេតុមិនអាចជៀសវាងបាន មុននឹងបញ្ឈប់ការងារត្រូវផ្តល់ដំណឹងមុនយ៉ាងតិច៣០ថ្ងៃ ឬផ្តល់ប្រាក់ឈ្នួលមធ្យមនៃប្រាក់ឈ្នួល</span><br>
													<span style="margin-left: 30px">ចំនួនលើសពី៣០ថ្ងៃ។ ប្រសិនបើសិក្ខាកាមអនុវត្តន៍ជំនាញបានបង្កនូវបញ្ហាដែលមិនអាចលើកលែងបាន យោងទៅតាមការសំរេចរបស់</span><br>
													<span style="margin-left: 30px">ប្រធានការិយាល័យត្រួតពិនិត្យស្តង់ដាការងារ បុគ្គលនោះនឹងត្រូវបញ្ឈប់ការងារភា្លមៗដោយេពុំចាំបាច់ជូនដំណឹង ឬបង់ថ្លៃឈ្នួលជាមធ្យមឡើយ។</span>
											</p>


											 <p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 175px">詳細は、就業規則</span>
													<span style="margin-left: 15px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条、</span>
													<span style="margin-left: 50px;">第<input type="text" name="" value="" style="width:30px;text-align: center">条～第<input type="text" name="" value="" style="width:30px;text-align: center">条</span>
											</p>
											<p style="margin-left: 20px;margin-bottom: 0;margin-top: 0">
													<span style="margin-left: 175px">ច្បាប់ធ្វើការ ពិស្តារ</span>
													<span style="margin-left: 15px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
													<span style="margin-left: 70px;">មាត្រាទី<span style="margin-left: 5px">ដល់មាត្រាទី</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
												<span>その他</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0">ផ្សេងៗ</p>


											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-left: 20px;">社会保険の加入状況</span>
													<span style="margin-left: 120px;">□厚生年金</span>
													<span style="margin-left: 70px;">□国民年金</span>
													<span style="margin-left: 100px;">□健康保険</span>
													<span style="margin-left: 80px;">□国民健康保険</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 0px">
													ទម្រង់នៃការចូលធានារ៉ាប់រងសង្គម
													<span style="margin-left: 40px;">ប្រាក់ចូលនិវត្តន៍</span>
													<span style="margin-left: 40px;">ប្រាក់ចូលនិវត្តន៍ពលរដ្ឋ</span>
													<span style="margin-left: 20px;">ធានារ៉ាប់រងសុខភាព</span>
													<span style="margin-left: 20px;">ធានារ៉ាប់រងសុខភាពពលរដ្ឋ</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-left: 20px;">労働保険の適用</span>
													<span style="margin-left: 150px;">□雇用保険</span>
													<span style="margin-left: 100px;">□労災保険</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 10px">
													អនុវត្តន៍ចំពោះធានារ៉ាប់រងការងារ
													<span style="margin-left: 50px;">ធានារ៉ាប់រងការអត់ការងារ</span>
													<span style="margin-left: 15px;">ធានារ៉ាប់រងលើគ្រោះថ្នាក់ក្នុងពេលធ្វើការ</span>
											</p>

											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-left: 20px;">雇入れ時の健康診断</span>
													<span style="margin-left: 120px;"><input type="text" name="" value="" style="width:30px;text-align: center">年</span>
													<span style="margin-left: 30px;"><input type="text" name="" value="" style="width:30px;text-align: center">月</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 10px">
													ការពិនិត្យសុខភាពពេលចូលធ្វើការ
													<span style="margin-left: 65px;">ឆ្នាំ</span>
													<span style="margin-left: 60px;">ខែ</span>
											</p>


											<p style="margin-left: 0px;margin-bottom: 0;">
													<span style="margin-left: 20px;">初回の定期健康診断</span>
													<span style="margin-left: 120px;"><input type="text" name="" value="" style="width:30px;text-align: center">年</span>
													<span style="margin-left: 30px;"><input type="text" name="" value="" style="width:30px;text-align: center">月</span>
													<span style="margin-left: 30px;">（その後<input type="text" name="" value="" style="width:30px;text-align: center">年ごとに実施)</span>
											</p>
											<p style="margin-left: 20px;margin-top: 0;margin-bottom: 10px">
													ការពិនិត្យសុខភាពប្រចាំជាលើកដំបូង
													<span style="margin-left: 50px;">ឆ្នាំ</span>
													<span style="margin-left: 60px;">ខែ</span>
													<span style="margin-left: 33px;">( បនា្ទប់មក   ម្តង )</span>
											</p>

											<hr>

											<p style="margin-left: 0px;margin-bottom: 0;margin-top: 0">
												<span>受取人（署名）</span>
											</p>
											<p style="margin-left: 0px;margin-top: 0;margin-bottom: 50px;">អ្នកទទួល (ហត្ថលេខា)</p>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>




		<?php echo $this->Html->script('rikuyo_js/14_jp', array('inline' => false, 'block' => 'page-js')); ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>
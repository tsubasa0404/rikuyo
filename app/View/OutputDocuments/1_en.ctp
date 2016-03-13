<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Summary of Sending Organization')); ?>
					<h1><?= __('Summary of Sending Organization') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW750">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area">


								<p align="right">
									<span class="jitcoBox">JITCO書式10-24-3</span>
									<p>
									</p>
								</p>
								<p align="center" class="header_1">
									<strong>
										Summary of Sending Organization
										<p>
										</p>
									</strong>
								</p>
								<p>
									<p>
									</p>
								</p>
								<div align="center">
									<table border="1" cellspacing="0" cellpadding="0" width="673" class="table jitco">
										<tbody>
											<tr>
												<td width="137">
													<p align="center">
														Name of Organization

													</p>
												</td>
												<td width="536" colspan="5">
													<p align="center">
														<input type="text" value="<?php echo $agent[0]['Agent']['agent_en']; ?>" style="width: 100%;text-align: center">
														<strong>
															<p>
															</p>
														</strong>
													</p>
												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														Name of manager

													</p>
													<p align="center">
														(Representative)

													</p>
												</td>
												<td width="536" colspan="5">
													<p align="center">
														<input type="text" value="<?php echo $agent[0]['Agent']['rep_family_name_en']." ".$agent[0]['Agent']['rep_given_name_en']; ?>" style="width: 100%;text-align: center">

													</p>
												</td>
											</tr>
											<tr>
												<td width="137" rowspan="2">
													<p align="center">

													</p>
													<p align="center">
														Address

													</p>
													<p align="center">

													</p>
												</td>
												<td width="536" colspan="5">
													<p align="center">
														<input type="text" value="<?php echo $agent[0]['Agent']['address_en'].", Sangkat ".$agent[0]['Commune']['commune_en'].", Khan ".$agent[0]['District']['district_en'].", ".$agent[0]['Province']['province_en']  ; ?>" style="width: 100%;text-align: center">

													</p>
												</td>
											</tr>
											<tr>
												<td width="255" colspan="3">
													<p>
														TEL:<input type="text" class="inputW80" value="<?php echo $agent[0]['Agent']['phone1'];?>" style="text-align: center">

													</p>
												</td>
												<td width="281" colspan="2">
													<p>
														FAX:<input type="text" class="inputW80" value="" style="text-align: center">

													</p>
												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														Date established

													</p>
												</td>
												<td width="536" colspan="5">
													<p align="center">
														<input type="text" value="<?php echo date('F dS, Y',strtotime($agent[0]['Agent']['establish_date']));?>" style="width: 100%;text-align: center">

													</p>
												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														Relation to

													</p>
													<p align="center">
														organization

													</p>
													<p align="center">
														providing

													</p>
													<p align="center">
														internship training

													</p>
												</td>
												<td width="536" colspan="5" class="pBoth10">
													<p>
														●For Technical training A:

													</p>
													<p>
														□Branch/Subsidiary (equity: %)

													</p>
													<p>
														□Trading –partner company

													</p>
													<p>
														(annual transaction amount: Transaction period: ) □ Other (　　　　　 )

													</p>
													<p>
														●For technical training B:

													</p>
													<p>
														☑Sending organization (Oversea organization belonged to)

													</p>
													<p>
														□Sending organization

													</p>
													<p>
														　 (other overseas organization taking part in preparation for　technical training)

													</p>
												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														Type of business

													</p>
													<p align="center">
														Main products

													</p>
													<p align="center">
														Main businesses

													</p>
												</td>
												<td width="536" colspan="5">
													<p align="left">
														Technical intern trainee<br> Human Resource Development<br> Technical and professional education

													</p>
												</td>
											</tr>
											<tr>
												<td width="213" colspan="2">
													<p align="center">
														Capital

													</p>
												</td>
												<td width="227" colspan="3">
													<p align="center">
														Net sale (most recent fiscal year)

													</p>
												</td>
												<td width="233">
													<p align="center">
														Number of full-time employee

													</p>
												</td>
											</tr>
											<tr>
												<td width="213" colspan="2">
													<p align="center">
														<input type="text" value="<?php echo number_format(intval($agent[0]['Agent']['capital_riel'])/4000) ;?> USD" style="width: 100%;text-align: center"><br>
														<span>(</span><input type="text" value="<?php echo number_format(intval($agent[0]['Agent']['capital_jpy']));?> Yen" style="width: 90%;text-align: center"><span>)</span>

													</p>
												</td>
												<td width="227" colspan="3">
													<p align="center">
														<input type="text" value="<?php echo number_format(intval($agent[0]['Agent']['sales_riel'])/4000);?> USD" style="width: 100%;text-align: center"><br>
														<span>(</span><input type="text" value="<?php echo number_format(intval($agent[0]['Agent']['sales_jpy']));?> Yen" style="width: 90%;text-align: center"><span>)</span>

													</p>
												</td>
												<td width="233">
													<p align="center">
														<input type="text" value="<?php echo $agent[0]['Agent']['employee_num'] ?> People" style="width: 100%;text-align: center">

													</p>
												</td>
											</tr>
											<tr>
												<td width="137" rowspan="2">
													<p align="center">
														Main trading

													</p>
													<p align="center">
														(transaction)

													</p>
													<p align="center">
														Partner businesses

													</p>
												</td>
												<td width="536" colspan="5">
													<p>
														Exports<input type="text" class="inputW80" value="<?php echo $agent[0]['Agent']['export_en'] ?>" style="text-align: center;width: 430px">

													</p>
												</td>
											</tr>
											<tr>
												<td width="536" colspan="5">
													<p>
														Imports<input type="text" class="inputW80" value="<?php echo $agent[0]['Agent']['import_en'] ?>" style="text-align: center;width: 430px">

													</p>
												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														Name of Manager

													</p>
													<p align="center">
														(Person responsible)

													</p>
												</td>
												<td width="214" colspan="2">
													<p align="center">
														<input type="text" value="<?php echo $agent[0]['Agent']['rep_family_name_en']." ".$agent[0]['Agent']['rep_given_name_en']; ?>" style="width: 100%;text-align: center">

													</p>
												</td>
												<td width="321" colspan="3">
													<p align="center">
														Position: <input type="text" class="inputW80" value="<?php echo $agent[0]['Agent']['rep_position_en'] ?>" style="text-align: center">

													</p>
												</td>
											</tr>
											<tr>
												<td width="673" colspan="6" class="pBoth10">
													<p>
														1. Has any deposit money been collected, any money or other property been placed under management under any other title, or contact
														been concluded planning improper transfer of any money or other property, including a contract establishing damages for failure to
														perform the terms of the employment contract, with the applicant or his or her spouse, direct relation, or family members living with
														him or her until conclusion of the technical internship?　　　　　　　　　　　　　　　　　　 Y / <span class="circle">N</span>

													</p>
												</td>
											</tr>
											<tr>
												<td width="673" colspan="6" class="pBoth10">
													<p>
														2. Has any contract been concluded planning improper transfer of any money or other property, including a contract establishing damages
														for failure to perform the terms of the employment contract, with the internship training organization until conclusion of the
														technical internship?　　　　　　　 Y / <span class="circle">N</span>

													</p>
												</td>
											</tr>
											<tr>
												<td width="673" colspan="6" class="pBoth10">
													<p>
														3. Have any forger or falsified documents or drawings or documents or drawings containing misrepresentation been used or provided for
														the purpose of obtaining improper authorization for entry or residence of a foreigner or of concealing the facts of improper behavior
														related to the training or technical or technical internship for a foreigner?　　　　　　　　 Y / <span class="circle">N</span>

													</p>
												</td>
											</tr>
											<tr>
												<td width="673" colspan="6" class="pBoth10">
													<p>
														<strong>
															<u>
																Fill out if the answer to any of the questions 1-3 above is “Y”
																<p>
																</p>
															</u>
														</strong>
													</p>
													<p>
														Timing:
														<strong>
															<u>
																<p>
																</p>
															</u>
														</strong>
													</p>
												</td>
											</tr>
											<tr style="border-bottom: 1px solid #333;">
												<td width="673" colspan="6" class="pBoth10">
													<p>
														Content

													</p>
												</td>
											</tr>

										</tbody>
									</table>
									<div style="width:673px">
										<p>
											<p>
											</p>
										</p>
										<p style="margin-top: 5px;margin-bottom: 0">
											Date prepared (D/M/Y): <input type="text" value="" style="text-align: center">
										</p>
										<p style="margin-top: 5px;margin-bottom: 0;text-align: right">
											Name of sending organization: <input type="text" value="<?php echo $agent[0]['Agent']['agent_en'] ?>" style="text-align: center;width:50%">
										</p>
										<p style="margin-top: 5px;margin-bottom: 0;text-align: right">
											Position and name of person responsible: <input type="text" value="<?php echo $agent[0]['Agent']['rep_position_en'] ?>" style="width: 25%;text-align: center"><input type="text" value="<?php echo $agent[0]['Agent']['rep_family_name_en']." ".$agent[0]['Agent']['rep_given_name_en']; ?>" style="width: 25%;text-align: center"> (seal)
										</p>
										<p style="margin-top: 1px;border-bottom: 1px solid #333;margin-left: 60px;"></p>
								</div>
							</div>

							</div>
						</div>
					</div>
				</div>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>
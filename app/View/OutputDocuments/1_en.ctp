<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List')); ?>
					<h1><?= __('Documents List') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area">


							<p align="right">
								<span class="jitcoBox">JITCO書式10-24-33</span>
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
													<p>
													</p>
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
													<p>
													</p>
												</p>
												<p align="center">
													(Representative)
													<p>
													</p>
												</p>
											</td>
											<td width="536" colspan="5">
												<p align="center">
													<input type="text" value="Leng Vichheka" style="width: 100%;text-align: center">
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="137" rowspan="2">
												<p align="center">
													<p>
													</p>
												</p>
												<p align="center">
													Address
													<p>
													</p>
												</p>
												<p align="center">
													<p>
													</p>
												</p>
											</td>
											<td width="536" colspan="5">
												<p align="center">
													<input type="text" value="#84FE2 Str174 SANGKAT PHSAR TMEY3 KHAN DAUN PENH PHNOM PENH" style="width: 100%;text-align: center">
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="255" colspan="3">
												<p>
													TEL:<input type="text" class="inputW80" value="(855)95 699 760" style="text-align: center">
													<p>
													</p>
												</p>
											</td>
											<td width="281" colspan="2">
												<p>
													FAX:<input type="text" class="inputW80" value="" style="text-align: center">
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="137">
												<p align="center">
													Date established
													<p>
													</p>
												</p>
											</td>
											<td width="536" colspan="5">
												<p align="center">
													<input type="text" value="05/04/2010" style="width: 100%;text-align: center">
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="137">
												<p align="center">
													Relation to
													<p>
													</p>
												</p>
												<p align="center">
													organization
													<p>
													</p>
												</p>
												<p align="center">
													providing
													<p>
													</p>
												</p>
												<p align="center">
													internship training
													<p>
													</p>
												</p>
											</td>
											<td width="536" colspan="5" class="pBoth10">
												<p>
													●For Technical training A:
													<p>
													</p>
												</p>
												<p>
													□Branch/Subsidiary (equity: %)
													<p>
													</p>
												</p>
												<p>
													□Trading –partner company
													<p>
													</p>
												</p>
												<p>
													(annual transaction amount: Transaction period: ) □ Other (　　　　　 )
													<p>
													</p>
												</p>
												<p>
													●For technical training B:
													<p>
													</p>
												</p>
												<p>
													☑Sending organization (Oversea organization belonged to)
													<p>
													</p>
												</p>
												<p>
													□Sending organization
													<p>
													</p>
												</p>
												<p>
													　 (other overseas organization taking part in preparation for　technical training)
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="137">
												<p align="center">
													Type of business
													<p>
													</p>
												</p>
												<p align="center">
													Main products
													<p>
													</p>
												</p>
												<p align="center">
													Main businesses
													<p>
													</p>
												</p>
											</td>
											<td width="536" colspan="5">
												<p align="center">
													<input type="text" value="Construction,Welding" style="width: 100%;text-align: center">
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="213" colspan="2">
												<p align="center">
													Capital
													<p>
													</p>
												</p>
											</td>
											<td width="227" colspan="3">
												<p align="center">
													Net sale (most recent fiscal year)
													<p>
													</p>
												</p>
											</td>
											<td width="233">
												<p align="center">
													Number of full-time employee
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="213" colspan="2">
												<p align="center">
													<input type="text" value="50000USD" style="width: 100%;text-align: center">
													<p>
													</p>
												</p>
											</td>
											<td width="227" colspan="3">
												<p align="center">
													<input type="text" value="540000USD" style="width: 100%;text-align: center">
													<p>
													</p>
												</p>
											</td>
											<td width="233">
												<p align="center">
													<input type="text" value="100" style="width: 100%;text-align: center">
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="137" rowspan="2">
												<p align="center">
													Main trading
													<p>
													</p>
												</p>
												<p align="center">
													(transaction)
													<p>
													</p>
												</p>
												<p align="center">
													Partner businesses
													<p>
													</p>
												</p>
											</td>
											<td width="536" colspan="5">
												<p>
													Exports<input type="text" class="inputW80" value="" style="text-align: center">
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="536" colspan="5">
												<p>
													Imports<input type="text" class="inputW80" value="" style="text-align: center">
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="137">
												<p align="center">
													Name of Manager
													<p>
													</p>
												</p>
												<p align="center">
													(Person responsible)
													<p>
													</p>
												</p>
											</td>
											<td width="214" colspan="2">
												<p align="center">
													<input type="text" value="Leng Vichheka" style="width: 100%;text-align: center">
													<p>
													</p>
												</p>
											</td>
											<td width="321" colspan="3">
												<p align="center">
													Position: <input type="text" class="inputW80" value="EXECUTIVE DIRECTOR" style="text-align: center">
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="673" colspan="6" class="pBoth10">
												<p>
													1. Has any deposit money been collected, any money or other property been placed under management under any other title, or contact
													been concluded planning improper transfer of any money or other property, including a contract establishing damages for failure to
													perform the terms of the employment contract, with the applicant or his or her spouse, direct relation, or family members living with
													him or her until conclusion of the technical internship?　　　　　　　　　　　　　　　　　　 <span class="circle">Y</span> / N
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="673" colspan="6" class="pBoth10">
												<p>
													2. Has any contract been concluded planning improper transfer of any money or other property, including a contract establishing damages
													for failure to perform the terms of the employment contract, with the internship training organization until conclusion of the
													technical internship?　　　　　　　 <span class="circle">Y</span> / N
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr>
											<td width="673" colspan="6" class="pBoth10">
												<p>
													3. Have any forger or falsified documents or drawings or documents or drawings containing misrepresentation been used or provided for
													the purpose of obtaining improper authorization for entry or residence of a foreigner or of concealing the facts of improper behavior
													related to the training or technical or technical internship for a foreigner?　　　　　　　　 <span class="circle">Y</span> / N
													<p>
													</p>
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
										<tr>
											<td width="673" colspan="6" class="pBoth10">
												<p>
													Content
													<p>
													</p>
												</p>
											</td>
										</tr>
										<tr height="0">
											<td width="137">
											</td>
											<td width="76">
											</td>
											<td width="139">
											</td>
											<td width="41">
											</td>
											<td width="47">
											</td>
											<td width="233">
											</td>
										</tr>
									</tbody>
								</table>
								<div style="width:673px">
									<p>
										<p>
										</p>
									</p>
									<p>
										Date prepared (D/M/Y): <input type="text" value="10/10/2015" style="text-align: center">
										<p>
										</p>
									</p>
									<p>
										Name of sending organization: Human Power Co.,Ltd
										<p>
										</p>
									</p>
									<p>
										<p>
										</p>
									</p>
									<p>
										<p>
										</p>
									</p>
									<p>
										Position and name of person responsible: <input type="text" value="EXECUTIVE DIRECTOR" style="width: 25%;text-align: center"><input type="text" value="Leng Vichheka" style="width: 25%;text-align: center"> (seal)
										<u>
											<p>
											</p>
										</u>
									</p>
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
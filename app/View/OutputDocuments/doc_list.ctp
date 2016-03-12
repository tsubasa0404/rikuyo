<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List')); ?>
					<h1><?= __('Documents List') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW600">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2>
								<?= __('Documents List') ?>
							</h2>
						</header>

						<div class="main-box-body clearfix">

							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center"><span><?= __('Document Name') ?></span></th>


											<th class="text-center"><span><?= __('Print') ?></span></th>

										</tr>
									</thead>
									<tbody>
										<?php foreach($documents_list as $doc): ?>
											<tr>
												<td class="td_first_block">
													<?php echo $doc['OutputDocument']['name_jp']."<br>".$doc['OutputDocument']['name_en'] ?>
												</td>

												<td class="text-center">
													<?php if($doc['OutputDocument']['jpn'] == 1): ?>
														<button type="button" class="btn btn-info print_btn">
															<?php echo $this->Html->link(
																'<i class="fa fa-print"></i> JP',
																array('controller' => 'output_documents', 'action' => 'printout',$interview_prof[0]['Interview']['id'], $doc['OutputDocument']['id']."_jp"),
																array('escape' => false, 'class' => 'white', 'target' => '_blanc')
															) ?>
														</button>
													<?php endif; ?>
													<?php if($doc['OutputDocument']['eng'] == 1): ?>
														<button type="button" class="btn btn-info print_btn">
															<?php echo $this->Html->link(
																'<i class="fa fa-print"></i> EN',
																array('controller' => 'output_documents', 'action' => 'printout',$interview_prof[0]['Interview']['id'],$doc['OutputDocument']['id']."_en"),
																array('escape' => false, 'class' => 'white', 'target' => '_blanc')
															) ?>
														</button>
													<?php endif; ?>
													<?php if($doc['OutputDocument']['khm'] == 1): ?>
														<button type="button" class="btn btn-info print_btn">
															<?php echo $this->Html->link(
																'<i class="fa fa-print"></i> KH',
																array('controller' => 'output_documents', 'action' => 'printout',$interview_prof[0]['Interview']['id'],$doc['OutputDocument']['id']."_kh"),
																array('escape' => false, 'class' => 'white', 'target' => '_blanc')
															) ?>
														</button>
													<?php endif; ?>
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
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/doc_modal', array('inline' => false, 'block' => 'modal-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

	<?php $this->Html->scriptEnd(); ?>
<?php $this->set('title_for_layout', 'Inspections'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Inspection List')); ?>
					<h1><?= __('Inspection List') ?></h1>
					</div>
				</div>
			</div>
<?php echo $this->Session->flash(); ?>
			<div class="row">
				<div class="col-lg-12 maxW800">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Inspections') ?></h2>
							<div class="filter-block pull-right">
							<?php if($user['role_id'] == 1 || $user['role_id'] == 2 || $user['role_id'] == 5){ ;?>
								<?php echo $this->Html->link(
									'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Inspection'),
									array('controller' => 'inspections', 'action' => 'add'),
									array('escape' => false, 'class' => 'btn btn-primary pull right')
								) ?>
							<?php };?>

							</div>
						</header>

						<div class="main-box-body clearfix">
								<table id="inspection-table" class="table toggle-circle-filled table-striped table-bordered" >
									<thead>
										<tr>
											<th><a href="#" class="desc"><?= __('Inspection Date') ?></a></th>
											<th><a href="#" class="asc"><?= __('Company') ?></a></th>
											<th><a href="#" class="asc"><?= __('Association') ?></a></th>
											<th><a href="#" class="asc"><?= __('Customer') ?></a></th>
											<th><a href="#" class="asc"><?= __('Rikuyo Staff') ?></a></th>
											<th><a href="#" class="asc"><?= __('Note') ?></a></th>
											<th><a href="#" class="asc"></a></th>
										</tr>
									</thead>
									<tbody>
										<?php if(!empty($inspections[0]['Inspection']['id'])): ?>
											<?php foreach ($inspections as $inspection) : ?>
												<tr>
													<td class="td_first_block">
														<?php echo $inspection['Inspection']['inspection_from'] ." ~ ".$inspection['Inspection']['inspection_from'] ;?>
													</td>
													<td>

														<?php echo $this->Html->link(
															$this->Btn->switchLang($lang, $inspection['Company']['company_jp'], $inspection['Company']['company_en']),
															array('controller' => 'companies', 'action' => 'profile', $inspection['Inspection']['company_id']),
															array('escape' => false, 'class' => '', 'target' => '_blank')
														) ?>
													</td>
													<td class="">
														<?php echo $this->Html->link(
															$this->Btn->switchLang($lang, $inspection['Association']['association_jp'], $inspection['Association']['association_en']),
															array('controller' => 'associations', 'action' => 'profile', $inspection['Inspection']['association_id']),
															array('escape' => false, 'class' => '', 'target' => '_blank')
														) ?>
													</td>
													<td><?php echo $inspection['Inspection']['smb'] ?></td>
													<td><?php echo $inspection['Inspection']['staff'] ?></td>
													<td><?php echo $inspection['Inspection']['note'] ?></td>
													<td class="text-center">
														<div class="action">
														<?php if($user['role_id'] == 1 || $user['role_id'] == 2 || $user['role_id'] == 5){ ;?>
															<?php echo $this->Html->link(
																'<i class="fa fa-pencil"></i>',
																array('controller' => 'inspections', 'action' => 'profile', $inspection['Inspection']['id']),
																array('escape' => false, 'class' => '')
															) ?>
															<?php echo $this->Form->postlink(
																'<i class="fa fa-trash-o"></i>',
																array('controller' => 'inspections', 'action' => 'delete',$inspection['Inspection']['id']),
																array('confirm' => __('Are you sure you want to delete # %s?', $inspection['Inspection']['id']),'escape' => false, 'class' => 'table-link red' )
															); ?>
														<?php };?>
														</div>
													</td>
												</tr>
											<?php endforeach; ?>
										<?php endif; ?>

									</tbody>
								</table>

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
			$('#interview-table').dataTable({
				"bInfo":false
			});
		});
	<?php $this->Html->scriptEnd(); ?>
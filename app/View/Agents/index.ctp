<?php $this->set('title_for_layout', 'Agents'); ?>
<?php $this->Html->addCrumb(__('Agent List')); ?>
					<h1><?= __('Agent List') ?></h1>
					</div>
				</div>
			</div>

<?php echo $this->Session->flash() ?>
			<div class="row">
				<div class="col-lg-12 maxW900">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Agent List') ?></h2>

							<div class="filter-block pull-right">
<?php if($user['role_id'] == 1 || $user['role_id'] == 2){ ;?>

								<?php echo $this->Html->link(
									'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Agent'),
									array('controller' => 'agents', 'action' => 'add'),
									array('escape' => false, 'class' => 'btn btn-primary pull right')
								) ?>
<?php };?>
							</div>
						</header>

						<div class="main-box-body clearfix">
							<table id="table-agent-db" class="table table-hover">
								<thead>
									<tr>
										<th><?= __('Agent') ?></th>
										<th data-hide="" class=""><?= __('Address') ?></th>
										<th data-hide="" class=""><?= __('Phone') ?></th>

										<th data-hide="" class=""></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($agents as $agent) : ?>
										<tr>
											<td>
											<?php echo $this->Html->link(
												$agent['Agent']['agent_jp'],
												array('action' => 'profile', $agent['Agent']['id']),
												array('escape' => false, 'class' => '')
											);?>
											<br>
											<?php echo $this->Html->link(
												$agent['Agent']['agent_en'],
												array('action' => 'profile', $agent['Agent']['id']),
												array('escape' => false, 'class' => '')
											);?>
											</td>
											<td>
											<?php echo $agent['Agent']['address_en'];?>
											</td>
											<td>
											<?php echo $agent['Agent']['phone1'];?>
											</td>
											<td>
												<div class="actions">
<?php if($user['role_id'] == 1 || $user['role_id'] == 2){ ;?>

												<?php echo $this->Form->postlink(
													'<i class="fa fa-trash-o"></i>',
													array('controller' => 'agents', 'action' => 'update_delete_flag',$agent['Agent']['id']),
													array('confirm' => __('Are you sure you want to delete # %s?', $agent['Agent']['id']),'escape' => false, 'class' => 'table-link red' )
												);?>
<?php };?>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
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
		$(function(){
			$(document).ready(function() {
				$('.alert').fadeOut(5000);
				$('#table-agent-db').dataTable({
					"bInfo":false,
				});
			});
		});

	<?php $this->Html->scriptEnd(); ?>
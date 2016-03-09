<?php $this->set('title_for_layout', 'Trainee Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Trainee List'), '/trainees'); ?>
<?php $this->Html->addCrumb(__('Trainee Profile'), '/trainees/profile/') ?>
<?php $this->Html->addCrumb(__('Trainee Microfinance Record Edit') ); ?>
					<h1><?= __('Trainee Microfinance Record Edit') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Edit Trainee Expense'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="traineeExpenses index">
								<h2><?php echo __('Trainee Expenses'); ?></h2>
								<table cellpadding="0" cellspacing="0">
									<thead>
										<tr>
											<th><?php echo $this->Paginator->sort('id'); ?></th>
											<th><?php echo $this->Paginator->sort('trainee_id'); ?></th>
											<th><?php echo $this->Paginator->sort('expected_date'); ?></th>
											<th><?php echo $this->Paginator->sort('expected_price'); ?></th>
											<th><?php echo $this->Paginator->sort('pay_date'); ?></th>
											<th><?php echo $this->Paginator->sort('pay_price'); ?></th>
											<th><?php echo $this->Paginator->sort('note'); ?></th>
											<th><?php echo $this->Paginator->sort('flag'); ?></th>
											<th class="actions"><?php echo __('Actions'); ?></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($traineeExpenses as $traineeExpense): ?>
											<tr>
												<td><?php echo h($traineeExpense['TraineeExpense']['id']); ?>&nbsp;</td>
												<td>
													<?php echo $this->Html->link($traineeExpense['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeExpense['Trainee']['id'])); ?>
												</td>
												<td><?php echo h($traineeExpense['TraineeExpense']['expected_date']); ?>&nbsp;</td>
												<td><?php echo h($traineeExpense['TraineeExpense']['expected_price']); ?>&nbsp;</td>
												<td><?php echo h($traineeExpense['TraineeExpense']['pay_date']); ?>&nbsp;</td>
												<td><?php echo h($traineeExpense['TraineeExpense']['pay_price']); ?>&nbsp;</td>
												<td><?php echo h($traineeExpense['TraineeExpense']['note']); ?>&nbsp;</td>
												<td><?php echo h($traineeExpense['TraineeExpense']['flag']); ?>&nbsp;</td>
												<td class="actions">
													<?php echo $this->Html->link(__('View'), array('action' => 'view', $traineeExpense['TraineeExpense']['id'])); ?>
													<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $traineeExpense['TraineeExpense']['id'])); ?>
													<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $traineeExpense['TraineeExpense']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $traineeExpense['TraineeExpense']['id']))); ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<p>
									<?php
									echo $this->Paginator->counter(array(
										'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
										));
										?>	</p>
										<div class="paging">
											<?php
											echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
											echo $this->Paginator->numbers(array('separator' => ''));
											echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
											?>
										</div>
									</div>
									<div class="actions">
										<h3><?php echo __('Actions'); ?></h3>
										<ul>
											<li><?php echo $this->Html->link(__('New Trainee Expense'), array('action' => 'add')); ?></li>
											<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
											<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
										</ul>
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
		$(function(){
			$(document).ready(function() {
				$('.alert').fadeOut(5000);

			});
		});

	<?php $this->Html->scriptEnd(); ?>
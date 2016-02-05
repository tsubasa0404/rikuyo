<div class="interviews index">
	<h2><?php echo __('Interviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job'); ?></th>
			<th><?php echo $this->Paginator->sort('work_place'); ?></th>
			<th><?php echo $this->Paginator->sort('company_info'); ?></th>
			<th><?php echo $this->Paginator->sort('work_content'); ?></th>
			<th><?php echo $this->Paginator->sort('work_schedule'); ?></th>
			<th><?php echo $this->Paginator->sort('adoption_num'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('hourly_wage'); ?></th>
			<th><?php echo $this->Paginator->sort('basic_wage'); ?></th>
			<th><?php echo $this->Paginator->sort('deduction'); ?></th>
			<th><?php echo $this->Paginator->sort('breakdown'); ?></th>
			<th><?php echo $this->Paginator->sort('employment_insurance'); ?></th>
			<th><?php echo $this->Paginator->sort('social_insurance'); ?></th>
			<th><?php echo $this->Paginator->sort('boarding_fee'); ?></th>
			<th><?php echo $this->Paginator->sort('utility_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('take_home'); ?></th>
			<th><?php echo $this->Paginator->sort('wage_note'); ?></th>
			<th><?php echo $this->Paginator->sort('request'); ?></th>
			<th><?php echo $this->Paginator->sort('immigration_time'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('interview_date'); ?></th>
			<th><?php echo $this->Paginator->sort('interview_time'); ?></th>
			<th><?php echo $this->Paginator->sort('interview_place'); ?></th>
			<th><?php echo $this->Paginator->sort('interview_detail'); ?></th>
			<th><?php echo $this->Paginator->sort('interview_staff'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($interviews as $interview): ?>
	<tr>
		<td><?php echo h($interview['Interview']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($interview['Company']['id'], array('controller' => 'companies', 'action' => 'view', $interview['Company']['id'])); ?>
		</td>
		<td><?php echo h($interview['Interview']['job']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['work_place']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['company_info']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['work_content']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['work_schedule']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['adoption_num']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['sex']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['age']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['hourly_wage']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['basic_wage']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['deduction']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['breakdown']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['employment_insurance']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['social_insurance']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['boarding_fee']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['utility_cost']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['take_home']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['wage_note']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['request']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['immigration_time']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['interview_date']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['interview_time']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['interview_place']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['interview_detail']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['interview_staff']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $interview['Interview']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $interview['Interview']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $interview['Interview']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $interview['Interview']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Interview'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Candidates'), array('controller' => 'interview_candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Candidate'), array('controller' => 'interview_candidates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Doc Status Lists'), array('controller' => 'interview_doc_status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('controller' => 'interview_doc_status_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>

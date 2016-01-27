<div class="traineeVoices view">
<h2><?php echo __('Trainee Voice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traineeVoice['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeVoice['Trainee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title En'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['title_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title Jp'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['title_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title Kh'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['title_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Voice En'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['voice_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Voice Jp'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['voice_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Voice Kh'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['voice_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer En'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['answer_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer Jp'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['answer_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer Kh'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['answer_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($traineeVoice['TraineeVoice']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee Voice'), array('action' => 'edit', $traineeVoice['TraineeVoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee Voice'), array('action' => 'delete', $traineeVoice['TraineeVoice']['id']), array(), __('Are you sure you want to delete # %s?', $traineeVoice['TraineeVoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Voices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Voice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>

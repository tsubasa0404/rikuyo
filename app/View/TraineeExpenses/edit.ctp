<?php $this->set('title_for_layout', 'Trainee Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/dropzone', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/magnific-popup', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Trainee List'), '/trainees'); ?>
<?php $this->Html->addCrumb(__('Trainee Profile'), '/trainees/profile/'.$trainee_expenses['TraineeExpense']['trainee_id']); ?>
<?php $this->Html->addCrumb(__('Trainee Expense Edit') ); ?>
					<h1><?= __('Trainee Expense Edit') ?></h1>
					</div>
				</div>
			</div>

<div class="traineeExpenses form maxW160">
<?php echo $this->Form->create('TraineeExpense'); ?>
	<fieldset>
	<?php
		echo $this->Form->hidden('id', array('value' => $trainee_expenses['TraineeExpense']['id'] ));
		echo $this->Form->hidden('trainee_id',array('value' => $trainee_expenses['TraineeExpense']['trainee_id'] ));
		echo '<div class="form-group">';
		echo '<label>'.__('Expected date').'</label>';
		echo $this->Form->date('expected_date',array('value' => $trainee_expenses['TraineeExpense']['expected_date'], 'class' => 'form-control' ));
		echo '</div>';
		echo '<div class="form-group">';
		echo $this->Form->input('expected_price',array('value' => $trainee_expenses['TraineeExpense']['expected_price'], 'class' => 'form-control' ));
		echo '</div>';
		echo '<div class="form-group">';
		echo '<label>'.__('Expected price').'</label>';
		echo $this->Form->date('pay_date',array('value' => $trainee_expenses['TraineeExpense']['pay_date'] , 'class' => 'form-control'));
		echo '</div>';
		echo '<div class="form-group">';
		echo $this->Form->input('pay_price',array('value' => $trainee_expenses['TraineeExpense']['pay_price'], 'class' => 'form-control' ));
		echo '</div>';
		echo '<div class="form-group">';
		echo $this->Form->input('note',array('value' => $trainee_expenses['TraineeExpense']['note'] , 'class' => 'form-control'));
		echo '</div>';
		echo $this->Form->hidden('flag',array('value' => $trainee_expenses['TraineeExpense']['flag'] ));
	?>
<div class="center-block text-left" style="margin-bottom: 15px">
	<?php echo $this->Html->link(
		__('Back'),
		array('controller' => 'trainees', 'action' => 'profile', $trainee_expenses['TraineeExpense']['trainee_id']),
		array('escape' => false, 'class' => 'btn btn-default')
	) ?>
	<button type="submit" class="btn btn-primary pull-right"> <?= __('Save') ?></button>
</div>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>


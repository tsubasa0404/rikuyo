<?php $this->set('title_for_layout', 'Trainee Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/dropzone', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/magnific-popup', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Trainee List'), '/trainees'); ?>
<?php $this->Html->addCrumb(__('Trainee Profile'), '/trainees/profile/'.$trainee_microfinance_records['TraineeMicrofinanceRecord']['trainee_id']); ?>
<?php $this->Html->addCrumb(__('Trainee Microfinance Record Edit') ); ?>
					<h1><?= __('Trainee Microfinance Record Edit') ?></h1>
					</div>
				</div>
			</div>

<div class="traineeMicrofinanceRecords form maxW200">
<?php echo $this->Form->create('TraineeMicrofinanceRecord'); ?>
	<fieldset>

	<?php
		echo $this->Form->hidden('id', array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['id']));
		echo $this->Form->hidden('trainee_id', array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['trainee_id']));
		echo '<div class="form-group">';
		echo '<label>'.__('Pay Month').'</label>';
		echo '<input type="month" name="data[TraineeMicrofinanceRecord][pay_month]" value="'.$trainee_microfinance_records['TraineeMicrofinanceRecord']['pay_month'].'" class="form-control maxW200" id="">';
		echo '</div>';
		echo '<div class="form-group">';
		echo $this->Form->hidden('pay_price',array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['pay_price'], 'class' => 'form-control' ));
		echo '</div>';
		echo '<div class="form-group">';
		echo '<label>'.__('Pay Date').'</label>';
		echo $this->Form->date('pay_date',array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['pay_date'], 'class' => 'form-control' ));
		echo '</div>';
		echo '<div class="form-group">';
		echo $this->Form->input('status_id', array(
					'label' => __('Status'),
					'type' => 'select',
					'class' => 'form-control',
					'value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['status_id'],
					'options' => array('0'=> __('Not Yet'),'1'=> __('OK'))));
		echo '</div>';
		echo '<div class="form-group">';
		echo $this->Form->input('note',array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['note'], 'class' => 'form-control' ));
		echo '</div>';
		echo $this->Form->hidden('flag',array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['flag'], 'class' => 'form-control' ));
	?>
	<div class="center-block text-left" style="margin-bottom: 15px">
	<?php echo $this->Html->link(
		__('Back'),
		array('controller' => 'trainees', 'action' => 'profile', $trainee_microfinance_records['TraineeMicrofinanceRecord']['trainee_id']),
		array('escape' => false, 'class' => 'btn btn-default')
	) ?>
	<button type="submit" class="btn btn-primary pull-right"> <?= __('Save') ?></button>
</div>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>

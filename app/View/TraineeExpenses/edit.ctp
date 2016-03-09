<?php $this->set('title_for_layout', 'Trainee Expense'); ?>
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
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW250">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Edit Trainee Expense'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="traineeExpenses form">
								<?php echo $this->Form->create('TraineeExpense'); ?>
								<fieldset>

									<?php echo $this->Form->hidden('id', array('value' => $trainee_expenses['TraineeExpense']['id'] ));?>
									<?php echo $this->Form->hidden('trainee_id',array('value' => $trainee_expenses['TraineeExpense']['trainee_id'] ));?>
									<div class="form-group">
										<label><?= __('Expected date')?></label>
										<?php echo $this->Form->date('expected_date',array('value' => $trainee_expenses['TraineeExpense']['expected_date'], 'class' => 'form-control' ));?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('expected_price',array('type' => 'number', 'min' => '0', 'value' => $trainee_expenses['TraineeExpense']['expected_price'], 'class' => 'form-control', 'label' => __('Expected Price($)') ));?>
									</div>
									<div class="form-group">
									<label><?= __('Expected Date')?></label>
										<?php echo $this->Form->date('pay_date',array('value' => $trainee_expenses['TraineeExpense']['pay_date'] , 'class' => 'form-control'));?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('pay_price',array('type' => 'number', 'min' => '0','value' => $trainee_expenses['TraineeExpense']['pay_price'], 'class' => 'form-control', 'label' => __('Pay Price($)')));?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('note',array('value' => $trainee_expenses['TraineeExpense']['note'] , 'class' => 'form-control'));?>
									</div>
									<?php echo $this->Form->hidden('flag',array('value' => $trainee_expenses['TraineeExpense']['flag'] ));?>
									<div class="center-block text-left" style="margin-bottom: 15px">
										<button type="submit" class="btn btn-primary pull-right"> <?= __('Save') ?></button>
									</div>
									</fieldset>
									<?php echo $this->Form->end(); ?>
								</div>
							</div>
						</div>
					</div>

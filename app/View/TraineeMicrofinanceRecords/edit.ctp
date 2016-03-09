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
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW250">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Edit Trainee Expense'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="traineeMicrofinanceRecords form maxW200">
								<?php echo $this->Form->create('TraineeMicrofinanceRecord'); ?>
								<fieldset>
									<?php echo $this->Form->hidden('id', array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['id']));?>
									<?php echo $this->Form->hidden('trainee_id', array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['trainee_id']));?>
									<div class="form-group">
										<label><?php echo __('Pay Month')?></label>
										<input type="month" name="data[TraineeMicrofinanceRecord][pay_month]" value="<?php echo $trainee_microfinance_records['TraineeMicrofinanceRecord']['pay_month']?>" class="form-control maxW200" id="">
									</div>
									<div class="form-group">
										<?php echo $this->Form->hidden('pay_price',array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['pay_price'], 'class' => 'form-control' ));?>
									</div>
									<div class="form-group">
										<label><?php echo __('Pay Date')?></label>
										<?php echo $this->Form->date('pay_date',array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['pay_date'], 'class' => 'form-control' ));?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('status_id', array(
											'label' => __('Status'),
											'type' => 'select',
											'class' => 'form-control',
											'value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['status_id'],
											'options' => array('0'=> __('Not Yet'),'1'=> __('OK'))));
											?>
										</div>
										<div class="form-group">
											<?php echo $this->Form->input('note',array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['note'], 'class' => 'form-control' ));?>
										</div>
										<?php echo $this->Form->hidden('flag',array('value' => $trainee_microfinance_records['TraineeMicrofinanceRecord']['flag'], 'class' => 'form-control' ));?>

										<div class="center-block text-left" style="margin-bottom: 15px">
											<button type="submit" class="btn btn-primary pull-right"> <?= __('Save') ?></button>
										</div>
									</fieldset>
									<?php echo $this->Form->end(); ?>
								</div>
							</div>
						</div>
					</div>
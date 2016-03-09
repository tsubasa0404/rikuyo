<?php $this->set('title_for_layout', 'Association Expense'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Association List'), '/associations'); ?>
<?php $this->Html->addCrumb(__('Association Profile'), '/associations/profile/'.$id); ?>
<?php $this->Html->addCrumb(__('Association Expense Edit') ); ?>
					<h1><?= __('Association Expense Edit') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW400">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Association Expense Edit'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="associationExpenses form">
								<?php echo $this->Form->create('AssociationExpense', array(
									'inputDefaults' => array(
										'class' => 'form-control',
										'div' => 'form-group'
										)
								)); ?>
								<fieldset>
									<?php echo $this->Form->hidden('id', array(
										'value' => $association_expenses[0]['AssociationExpense']['id']
									));?>
									<?php echo $this->Form->hidden('association_id', array(
										'value' => $association_expenses[0]['AssociationExpense']['association_id']
									));?>
									<div class="form-group">
										<label for=""><?= __('Pay Date') ?></label>
										<?php echo $this->Form->date('pay_date', array(
											'class' => 'form-control maxW200',
											'value' => $association_expenses[0]['AssociationExpense']['pay_date']
										));?>
									</div>
									<?php echo $this->Form->input('pay_price',array(
										'class' => 'form-control maxW200',
										'label' => __('Price'),
										'value' => $association_expenses[0]['AssociationExpense']['pay_price']
									));?>
									<?php echo $this->Form->input('note', array(
										'rows' => 3,
										'value' => $association_expenses[0]['AssociationExpense']['note']
									));?>
									<div class="center-block text-left" style="margin-bottom: 15px">
										<button type="submit" class="btn btn-primary pull-right"> <?= __('Save') ?></button>
									</div>
								</fieldset>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>
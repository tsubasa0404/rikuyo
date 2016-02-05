<?php $this->set('title_for_layout', 'Add Company'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Company List'), '/companies'); ?>
<?php $this->Html->addCrumb(__('Add Company'), ''); ?>
					<h1><?= __('Add Company') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-10 maxW450">
					<div class="main-box">
						<div class="main-box-body clearfix">
							<header class="main-box-header clearfix">
							</header>
							<?php echo $this->Form->create('Company', array(
								'action' => 'add',
								'class' => 'form_company_register',
								'inputDefault' => array(
									'div' => false
									)
							)); ?>
								<div class="form-group form-group-select2">
									<?php echo $this->Form->input('association_id', array(
										'label' => __('Affiliated Association'),
										'type' => 'select',
										'div' => false,
										'class' => 'form-control',
										'id' => 'sel_association',
										'value' => '',
										'options' => $option_associations,
										'style' => 'width:200px;display:inline',
										'empty' => true,
										'required' => true
									)) ?>
									<?php echo $this->Html->link(
										'<i class="fa fa-plus-circle fa-lg"></i> '.__('Add Association'),
										array('controller' => 'associations', 'action' => 'add'),
										array('escape' => false, 'class' => 'btn btn-primary', 'target' => '_blank')
									) ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('company_jp', array(
										'label' => __('Company Name_Japanese'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __('Company Name in Japanese'),
										'required' => true
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('company_en', array(
										'label' => __('Company Name_English'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __('Company Name in English'),
										'required' => true
									)); ?>
								</div>
								<div class="row">
									<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<?php echo $this->Form->input('rep_family_name_jp', array(
											'label' => __('Representative_Family Name'),
											'type' => 'text',
											'class' => 'form-control maxW200',
											'placeholder' => __('Enter in Japanese'),
										'required' => true
										)); ?>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<?php echo $this->Form->input('rep_given_name_jp', array(
											'label' => __('Representative_Given Name'),
											'type' => 'text',
											'class' => 'form-control maxW200',
											'placeholder' => __('Enter in Japanese'),
										'required' => true
										)); ?>
									</div>
								</div>
								<div class="form-group">
									<label for="post-code_1">郵便番号</label>
									<div class="input-group">
										<span class="input-group-addon">〒</span>
										<?php echo $this->Form->input('postcode', array(
											'label' => false,
											'type' => 'text',
											'class' => 'form-control maxW160',
											'size' => "7",
											'id' => 'postcode'
										)); ?>
									</div>
									<span class="help-block"><?= __('Enter Postcode') ?><br><a href="http://www.post.japanpost.jp/zipcode/" target="_blank" ><?= __('Click here if you want to search for postcode.')?></a> </span>
								</div>

								<div class="form-group">
									<?php echo $this->Form->input('province', array(
										'label' => __('Address_Province'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'required' => true,
										'id' => 'province'
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('address_jp', array(
										'label' => __('Address_Japanese'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'required' => true,
										'placeholder' => __('Enter Address in Japanese without Province'),
										'id' => 'address_jp'
									)) ;?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('address_en', array(
										'label' => __('Address_English'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'required' => true,
										'placeholder' => __('Enter Full Address in English Including Province')
									)); ?>
								</div>
								<div class="form-group form-group-select2">
									<label for="Job"><?= __('Job') ?></label>
									<?php echo $this->Form->input('job',array(
										'label' => false,
										'options' => $option_jobs,
										'class' => "form-control sel_job",
										'multiple' => true,
										'style' => array("width:200px"),
										'div' => false
									)); ?>
									<button type="button" id="" class="md-trigger btn btn-primary" data-modal="modal-job"><i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Job') ?></button>
								</div>

								<button type="submit" class="btn btn-default pull-right"><i class=""></i> <?= __('Save') ?></button>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div>


	<?php
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('jquery.jpostal', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>


		$(document).ready(function() {

			var $selAssociation = $('#sel_association');
			$selAssociation.select2({
				placeholder: "<?= __('Select an Association to which this company belongs.')?>",
				allowClear: false
			});

			$selAssociation.change(function(){
				var select_val = $selAssociation.select2("val");
				$selAssociation.val(select_val);
			});

			$('.sel_job').select2({
				placeholder: "<?= __('Select Jobs') ?>",
				allowClear: false
			});

			//住所自動入力
			$('#postcode').jpostal({
				postcode : [
					'#postcode'
				],
				address : {
					'#province'  : '%3',
					'#address_jp'  : '%4%5'
				}
			});

		});
	<?php $this->Html->scriptEnd(); ?>
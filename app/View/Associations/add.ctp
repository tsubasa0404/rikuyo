<?php $this->set('title_for_layout', 'Add Association'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Association List'), '/associations'); ?>
<?php $this->Html->addCrumb(__('Add Association'), ''); ?>
					<h1><?= __('Add Association') ?></h1>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-10 maxW450">
					<div class="main-box">
						<div class="main-box-body clearfix">
							<header class="main-box-header clearfix">
							</header>
							<?php echo $this->Session->flash() ?>
							<?php echo $this->Form->create('Association', array(
								'action' => 'add',
								'class' => 'form_association_register',
								'inputDefault' => array(
									'div' => false
									)
							)); ?>
								<div class="form-group">
									<?php echo $this->Form->input('association_jp', array(
										'label' => __('Association Name_Japanese'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __('Association Name in Japanese'),
										'required' => true,
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('association_en', array(
										'label' => __('Association Name_English'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __('Association Name in English'),
										'required' => true
									)); ?>
								</div>
								<div class="row">
									<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<?php echo $this->Form->input('rep_family_name_jp', array(
											'label' => __('Representative_Family Name'),
											'type' => 'text',
											'class' => 'form-control maxW200',
											'placeholder' => __('Family Name in Japanese'),
										'required' => true
										)); ?>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<?php echo $this->Form->input('rep_given_name_jp', array(
											'label' => __('Representative_Given Name'),
											'type' => 'text',
											'class' => 'form-control maxW200',
											'placeholder' => __('Given Name in Japanese'),
										'required' => true
										)); ?>
									</div>
								</div>
								<div class="form-group">
									<label for="post-code_1"><?= __('Postcode') ?></label>
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
										'id' => 'address_jp'
									)) ;?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('address_en', array(
										'label' => __('Address_English'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'required' => true
									)); ?>
								</div>

								<div class="form-group form-group-select2">
									<label for="sector"><?= __('Sector') ?></label>
									<?php echo $this->Form->input('sector',array(
										'label' => false,
										'options' => $option_sectors,
										'class' => "form-control sel_sector",
										'multiple' => true,
										'style' => array("width:200px"),
										'div' => false
									)); ?>

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

			$('.sel_sector').select2({
				placeholder: "<?= __('Select Sectors') ?>",
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
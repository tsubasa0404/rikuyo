<?php $this->set('title_for_layout', 'Add Inspection'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Inspections List'), '/inspections'); ?>
<?php $this->Html->addCrumb(__('Add Inspection')); ?>
					<h1><?= __('Add Inspection') ?></h1>
					</div>
				</div>
			</div>
<?php echo $this->Session->flash(); ?>
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 maxW450">
					<div class="main-box">
						<div class="main-box-body clearfix">
							<header class="main-box-header clearfix">
								<h2><?= __('Inspection') ?></h2>
							</header>
							<?php echo $this->Form->create('Inspection', array(
								'action' => 'add',
								'class' => 'form_inspection_register',
								'inputDefault' => array(
									'div' => false
									)
							)); ?>
								<div class="form-group form-group-select2">
									<?php echo $this->Form->input('association_id', array(
										'label' => __('Association'),
										'type' => 'select',
										'div' => false,
										'class' => 'form-control sel_association',
										'value' => '',
										'options' => $option_associations,
										'style' => 'max-width:300px;display:inline',
										'empty' => true,
										'required' => true
									)) ?>
								</div>
								<div class="form-group form-group-select2">
									<?php echo $this->Form->input('company_id', array(
										'label' => __('Company'),
										'type' => 'select',
										'div' => false,
										'class' => 'form-control sel_company',
										'value' => '',
										'options' => $option_companies,
										'style' => 'max-width:300px;display:inline',
										'empty' => true
									)) ?>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<label><?= __('From')?></label>
											<input type="date" name="data[Inspection][inspection_from]" class="form-control maxW200" id="InspectionFromMonth" required="">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<label for=""><?= __('To')?></label>
											<input type="date" name="data[Inspection][inspection_to]" class="form-control maxW200" id="InspectionToMonth">
										</div>
									</div>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('smb', array(
										'label' => __('Costomer Name'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('staff', array(
										'label' => __('Inspection Commander of Rikuyo'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('note', array(
										'label' => __('Note'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<?php echo $this->Form->hidden('status', array('value' => 0)) ?>
								<?php echo $this->Form->hidden('flag', array('value' => 0)) ?>
								<button type="submit" class="btn btn-default pull-right">
									<i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Inspection') ?>
								</button>
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
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>


		$(document).ready(function() {

			$('.sel_company').select2({
				placeholder: "<?= __('Select Company') ?>",
				allowClear: false
			});

			$('.sel_association').select2({
				placeholder: "<?= __('Select Association') ?>",
				allowClear: false
			});

		});
			//モーダルフォーム
		$(function(){
			$('.job_form_btn').on('click', function(){
				var job_jp = $('#jobJp').val();
				var job_en = $('#jobEn').val();
				if(!job_jp ||!job_en){
					alert("入力されていない項目があります。");
					return ;
				}
				var option = '<option value="'+"lastInsertId"+'">'+job_jp+'</option>';
				$('.sel_job').prepend(option);
				close();
			});

			$('.btn_close').on('click', function(){
				close();
			});
			function close(){
				$('#modal-job').removeClass('md-show');
				$('#jobJp').val("");
				$('#jobEn').val("");
			}
		});

	<?php $this->Html->scriptEnd(); ?>
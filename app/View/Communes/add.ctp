<?php $this->set('title_for_layout', 'Add Commune'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Communes List'), '/provinces'); ?>
<?php $this->Html->addCrumb(__('Add Commune')); ?>
					<h1><?= __('Add Commune') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW500">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Add Commune'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">

							<div class="communes form">
								<?php echo $this->Form->create('Commune'); ?>
								<div class="form-group"><?php echo $this->Form->input('province_id', array(
									'class' => 'form-control sel_province cam_province_id',
									'empty' => __('--Select Province--')));?>
								</div>
								<div class="form-group">
									<label for=""><?= __('District') ?></label>
									<select id="DistrictId" name="data[Commune][district_id]" class="form-control cam_district_id">
									</select>
								</div>
								<div class="form-group"><?php echo $this->Form->input('commune_en', array(
									'class' => 'form-control',
									'label' => __('Commune English')));?>
								</div>
								<?php echo $this->Form->end(__('Save')); ?>
							</div>

						</div>
					</div>
				</div>


<?php
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
	 ?>

<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

$(function($){
		//nice select boxes( address Province)
		$('.cam_province_id').select2();
		$('.cam_province_id').change(function(){
			var province_id = $(this).select2('val');
			$(this).val(province_id);
		});

		$('.cam_district_id').select2({
			'placeholder':'--Select District--',
			'empty':true
		});


		var districts = <?php echo $districs = json_encode($districts, JSON_HEX_APOS); ?>;
		$('.cam_province_id').change(function(){
				setDistrictSelect($(this).val());
			});

			function setDistrictSelect(s){
				$('.cam_district_id').find('option').remove();
				$('.cam_district_id').append('<option value=""></option>');
				$(districts).each(function(i){
					if(districts[i].province_id == s){
						$('.cam_district_id').append($('<option></option>')
							.attr('province', districts[i].province)
							.val(districts[i].district_id)
							.text(districts[i].district));
						}
					}
				);
			}
			setDistrictSelect('');

	});
	<?php $this->Html->scriptEnd(); ?>

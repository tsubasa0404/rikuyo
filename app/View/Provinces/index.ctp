<?php $this->set('title_for_layout', 'Cambodia Address'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Cambodia Address List')); ?>
					<h1><?= __('Cambodia Address List') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2><?= __('Province List') ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<table id="table-province-db" class="table table-bordered table-hover ">
									<thead>
										<tr>
											<th><?= __('Japanese') ?></th>
											<th><?= __('English') ?></th>
											<th><?= __('Khmer') ?></th>

										</tr>
									</thead>
									<tbody>
										<?php foreach ($provinces as $province) : ?>
											<tr id="<?php echo $province['Province']['id'];?>" data-id="<?php echo $province['Province']['id'];?>">
												<td class="td_first_block">
													<?php echo $this->Form->input('province_jp', array(
														'value' => $province['Province']['province_jp'],
														'class' => "on_change_input form-control jp-".$province['Province']['id'],
														'data-id' => $province['Province']['id'],
														'data-type' => 'province',
														'data-lang' => 'jp',
														'data-alias-jp' => $province['Province']['province_jp'],
														'data-alias-en' => $province['Province']['province_en'],
														'data-alias-kh' => $province['Province']['province_kh'],
														'label' => false,
														'id' => 'province_jp_'. $province['Province']['id']
													));?>
												</td>
												<td>
													<?php echo $this->Form->input('province_en', array(
														'value' => $province['Province']['province_en'],
														'class' => "on_change_input form-control en-".$province['Province']['id'],
														'data-id' => $province['Province']['id'],
														'data-type' => 'province',
														'data-lang' => 'en',
														'data-alias-jp' => $province['Province']['province_jp'],
														'data-alias-en' => $province['Province']['province_en'],
														'data-alias-kh' => $province['Province']['province_kh'],
														'label' => false,
														'id' => 'Province_en_'. $province['Province']['id']
													));?>
												</td>
												<td>
													<?php echo $this->Form->input('province_kh', array(
														'value' => $province['Province']['province_kh'],
														'class' => "on_change_input form-control kh-".$province['Province']['id'],
														'data-id' => $province['Province']['id'],
														'data-type' => 'province',
														'data-lang' => 'kh',
														'data-alias-jp' => $province['Province']['province_jp'],
														'data-alias-en' => $province['Province']['province_en'],
														'data-alias-kh' => $province['Province']['province_kh'],
														'label' => false,
														'id' => 'Province_kh_'. $province['Province']['id']
													));?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div class="hide">
								<?php echo $this->Form->create('Province', array(
									'action' => 'addAjax',
									'class' => 'province_form'
								)) ?>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2><?= __('District and Commune') ?>
								<div class="filter-block pull-right">
									<?php //echo $this->Html->link('<i class="fa fa-plus-circle fa-lg"></i> '.__('New Trainee'),array('controller' => 'trainees', 'action' => 'add'),array('escape' => false, 'class' => 'btn btn-primary pull right')) ?>
								</div>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<table id="table-address-db" class="table table-bordered table-hover footable" data-page-size="25"  data-limit-navigation="5">
									<thead>
										<tr>
											<th><?= __('Japanese') ?></th>
											<th><?= __('English') ?></th>
											<th><?= __('Khmer') ?></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($address as $add) : ?>
											<tr id="<?php echo $add['CambodiaPlaceDictionary']['id'];?>" data-id="<?php echo $add['CambodiaPlaceDictionary']['id'];?>">
												<td class="td_first_block">
													<?php echo $this->Form->input('place_jp', array(
														'value' => $add['CambodiaPlaceDictionary']['place_jp'],
														'class' => "on_change_input form-control jp-".$add['CambodiaPlaceDictionary']['id'],
														'data-id' => $add['CambodiaPlaceDictionary']['id'],
														'data-type' => 'address',
														'data-lang' => 'jp',
														'data-alias-jp' => $add['CambodiaPlaceDictionary']['place_jp'],
														'data-alias-en' => $add['CambodiaPlaceDictionary']['place_en'],
														'data-alias-kh' => $add['CambodiaPlaceDictionary']['place_kh'],
														'label' => false,
														'data-value' => $add['CambodiaPlaceDictionary']['place_jp']
														));?>
												</td>
												<td>
													<?php echo $this->Form->input('place_en', array(
														'value' => $add['CambodiaPlaceDictionary']['place_en'],
														'class' => "on_change_input form-control en-".$add['CambodiaPlaceDictionary']['id'],
														'data-id' => $add['CambodiaPlaceDictionary']['id'],
														'data-type' => 'address',
														'data-lang' => 'en',
														'data-alias-jp' => $add['CambodiaPlaceDictionary']['place_jp'],
														'data-alias-en' => $add['CambodiaPlaceDictionary']['place_en'],
														'data-alias-kh' => $add['CambodiaPlaceDictionary']['place_kh'],
														'label' => false
													));?>
												</td>
												<td>
													<?php echo $this->Form->input('place_kh', array(
														'value' => $add['CambodiaPlaceDictionary']['place_kh'],
														'class' => "on_change_input form-control en-".$add['CambodiaPlaceDictionary']['id'],
														'data-id' => $add['CambodiaPlaceDictionary']['id'],
														'data-type' => 'address',
														'data-lang' => 'kh',
														'data-alias-jp' => $add['CambodiaPlaceDictionary']['place_jp'],
														'data-alias-en' => $add['CambodiaPlaceDictionary']['place_en'],
														'data-alias-kh' => $add['CambodiaPlaceDictionary']['place_kh'],
														'label' => false
													));?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							<ul class="pagination pull-right hide-if-no-paging"></ul>
							</div>
							<div class="hide">
								<?php echo $this->Form->create('CambodiaPlaceDictionary', array(
									'action' => 'addAjax',
									'class' => 'place_form'
								)) ?>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>


			<?php
				echo $this->Html->script('footable', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('footable.paginate', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('rikuyo_js/onChangeSubmitAddress', array('inline' => false, 'block' => 'modal-js'));
			 ?>

			<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
				$(function(){
					$('.footable').footable();
					$('.on_change_input').onChangeSubmitAddress();
				});
			<?php $this->Html->scriptEnd(); ?>
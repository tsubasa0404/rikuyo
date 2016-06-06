<?php $this->set('title_for_layout', 'Add Province'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Provinces List'), '/provinces'); ?>
<?php $this->Html->addCrumb(__('Add Province')); ?>
					<h1><?= __('Add Province') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW500">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Add Province'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">


							<div class="provinces form">
								<?php echo $this->Form->create('Province'); ?>
									<div class="form-group">
										<?php echo $this->Form->input('province_en',array(
										'class' => 'form-control',
										'label' => __('Province in English')));?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('province_jp',array(
										'class' => 'form-control',
										'label' => __('Province in Japanese')));?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('province_kh',array(
										'class' => 'form-control',
										'label' => __('Province in Khmer')));?>
									</div>
								<?php echo $this->Form->end(__('Save')); ?>
							</div>
						</div>
					</div>
				</div>
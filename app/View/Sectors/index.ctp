<?php $this->set('title_for_layout', 'Sectors/Jobs'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Sectors and Jobs List')); ?>
					<h1><?= __('Sectors and Jobs List') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2><?= __('Sector List') ?>
								<button id="" class="md-trigger btn btn-primary pull-right" data-modal="modal-sector"><i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Sector') ?></button>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<table id="table-sector-db" class="table table-bordered table-hover ">
									<thead>
										<tr>
											<th><?= __('Japanese') ?></th>
											<th><?= __('English') ?></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($sectors as $sector) : ?>
											<tr id="<?php echo $sector['Sector']['id'];?>" data-id="<?php echo $sector['Sector']['id'];?>">
												<td class="td_first_block">
													<?php echo $this->Form->input('sector_jp', array(
														'value' => $sector['Sector']['sector_jp'],
														'class' => "on_change_input form-control jp-".$sector['Sector']['id'],
														'data-id' => $sector['Sector']['id'],
														'data-type' => 'sector',
														'data-lang' => 'sector_jp',
														'data-alias' => $sector['Sector']['sector_en'],
														'label' => false,
														'id' => 'sector_jp_'. $sector['Sector']['id']
													));?>
												</td>
												<td>
													<?php echo $this->Form->input('sector_en', array(
														'value' => $sector['Sector']['sector_en'],
														'class' => "on_change_input form-control en-".$sector['Sector']['id'],
														'data-id' => $sector['Sector']['id'],
														'data-type' => 'sector',
														'data-lang' => 'sector_en',
														'data-alias' => $sector['Sector']['sector_jp'],
														'label' => false,
														'id' => 'sector_en_'. $sector['Sector']['id']
													));?>
												</td>
												<td>
													<div class="actions">
														<?php echo $this->Form->postlink(
															'<i class="fa fa-trash-o"></i>',
															array('controller' => 'sectors', 'action' => 'update_delete_flag',$sector['Sector']['id']),
															array('confirm' => __('Are you sure you want to delete # %s?', $sector['Sector']['id']),'escape' => false, 'class' => 'table-link red' )
														);?>
													</div>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div class="hide">
								<?php echo $this->Form->create('Sector', array(
									'action' => 'addAjax',
									'class' => 'sector_form'
								)) ?>
									<?php echo $this->Form->input('id', array(
										'type' => 'hidden',
										'div' => false,
										'class' => 'sector_id'
									)) ?>
									<?php echo $this->Form->input('sector_jp', array(
										'label' => false,
										'type' => 'hidden',
										'class' => 'sector_jp'
									)) ?>
									<?php echo $this->Form->input('sector_en', array(
										'label' => false,
										'type' => 'hidden',
										'class' => 'sector_en'
									)) ?>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2><?= __('Job List') ?>
								<button id="" class="md-trigger btn btn-primary pull-right" data-modal="modal-job"><i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Job') ?></button>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<table id="table-job-db" class="table table-bordered table-hover ">
									<thead>
										<tr>
											<th><?= __('Japanese') ?></th>
											<th><?= __('English') ?></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($jobs as $job) : ?>
											<tr id="<?php echo $job['Job']['id'];?>" data-id="<?php echo $job['Job']['id'];?>">
												<td class="td_first_block">
													<?php echo $this->Form->input('job_jp', array(
														'value' => $job['Job']['job_jp'],
														'class' => "on_change_input form-control jp-".$job['Job']['id'],
														'data-id' => $job['Job']['id'],
														'data-type' => 'job',
														'data-lang' => 'job_jp',
														'data-alias' => $job['Job']['job_en'],
														'label' => false
														));?>
												</td>
												<td>
													<?php echo $this->Form->input('job_en', array(
														'value' => $job['Job']['job_en'],
														'class' => "on_change_input form-control en-".$job['Job']['id'],
														'data-id' => $job['Job']['id'],
														'data-type' => 'job',
														'data-lang' => 'job_en',
														'data-alias' => $job['Job']['job_jp'],
														'label' => false
													));?>
												</td>
												<td>
													<div class="actions">
														<?php echo $this->Form->postlink(
															'<i class="fa fa-trash-o"></i>',
															array('controller' => 'jobs', 'action' => 'update_delete_flag',$job['Job']['id']),
															array('confirm' => __('Are you sure you want to delete # %s?', $job['Job']['id']),'escape' => false, 'class' => 'table-link red' )
														);?>
													</div>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div class="hide">
								<?php echo $this->Form->create('Job', array(
									'action' => 'addAjax',
									'class' => 'job_form'
								)) ?>
									<?php echo $this->Form->input('id', array(
										'type' => 'hidden',
										'div' => false,
										'class' => 'job_id'
									)) ?>
									<?php echo $this->Form->input('job_jp', array(
										'label' => false,
										'type' => 'hidden',
										'class' => 'job_jp'
									)) ?>
									<?php echo $this->Form->input('job_en', array(
										'label' => false,
										'type' => 'hidden',
										'class' => 'job_en'
									)) ?>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>


			<?php
				echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
				echo $this->Html->script('rikuyo_js/onChangeSubmit', array('inline' => false, 'block' => 'modal-js'));
			 ?>

			<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
				$(function(){
					$('.on_change_input').onChangeSubmit();
				});
			<?php $this->Html->scriptEnd(); ?>
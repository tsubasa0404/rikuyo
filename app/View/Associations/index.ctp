<?php $this->set('title_for_layout', 'Associations'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Association List'), 'associations'); ?>
					<h1><?= __('Association List') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Association List') ?></h2>

							<div class="filter-block pull-right">
								<?php echo $this->Html->link(
									'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Association'),
									array('controller' => 'associations', 'action' => 'add'),
									array('escape' => false, 'class' => 'btn btn-primary pull right')
								) ?>
							</div>
						</header>

						<div class="main-box-body clearfix">
							<table id="table-association-db" class="table table-hover">
								<thead>
									<tr>
										<th><?= __('Association') ?></th>
										<th data-hide="phone,tablet" class=""><?= __('Prefecture') ?></th>
										<th data-hide="all" class=""><?= __('Address') ?></th>
										<th data-hide="" class=""><?= __('Phone') ?></th>
										<th data-hide="" class=""><?= __('Sector') ?></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($associations as $association) : ?>
										<?php
											echo "<tr><td>";
											echo $this->Html->link(
												$association['Association']['association_jp'],
												array('action' => 'profile', $association['Association']['id']),
												array('escape' => false, 'class' => '')
											);
											echo "<br>";
											echo $association['Association']['association_en'];
											echo "</td><td>";
											echo $association['Association']['province'];
											echo "</td><td>";
											echo $association['Association']['address_jp'];
											echo "<br>";
											echo $association['Association']['address_en'];
											echo "</td><td>";
											echo $association['Association']['phone1'];
											echo "</td><td>";
											echo $association['Association']['sector'];
											echo "</td>";
											echo "</tr>"
										 ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>



	<?php
		echo $this->Html->script('jquery.dataTables', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('dataTables.fixedHeader', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('dataTables.tableTools', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('jquery.dataTables.bootstrap', array('inline' => false, 'block' => 'table-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$(document).ready(function() {
				$('#table-association-db').dataTable({
					"bInfo":false,
				});
			});
		});
	<?php $this->Html->scriptEnd(); ?>



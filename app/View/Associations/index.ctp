<?php $this->set('title_for_layout', 'Associations'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Association List')); ?>
					<h1><?= __('Association List') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 maxW900">
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
										<th class="maxW300"><?= __('Association') ?></th>
										<th class="maxW100" data-hide="phone,tablet"><?= __('Province') ?></th>
										<th class="" data-hide="all"><?= __('Address') ?></th>
										<th class="maxW100" data-hide=""><?= __('Phone') ?></th>

										<th class="maxW50" data-hide=""></th>
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
											echo $this->Html->link(
												$association['Association']['association_en'],
													array('action' => 'profile', $association['Association']['id']),
													array('escape' => false, 'class' => '')
												);
											echo "</td><td>";
											echo $association['Association']['province'];
											echo "</td><td>";
											echo $association['Association']['address_jp'];
											echo "<br>";
											echo $association['Association']['address_en'];
											echo "</td><td>";
											echo $association['Association']['phone1'];
											echo "</td>";
											echo '<td><div class="actions">';
											echo $this->Form->postlink(
												'<i class="fa fa-trash-o"></i>',
												array('controller' => 'associations', 'action' => 'update_delete_flag',$association['Association']['id']),
												array('confirm' => __('Are you sure you want to delete # %s?', $association['Association']['id']),'escape' => false, 'class' => 'table-link red' )
											);
											echo '</div></td>';
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



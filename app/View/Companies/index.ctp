<?php $this->set('title_for_layout', 'Companies'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Company List')); ?>
					<h1><?= __('Company List') ?></h1>
					</div>
				</div>
			</div>
<?php echo $this->Session->flash() ?>
							<div class="row">
								<div class="col-lg-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2 class="pull-left"><?= __('Company List') ?></h2>

											<div class="filter-block pull-right">
												<?php echo $this->Html->link(
													'<i class="fa fa-plus-circle fa-lg"></i> '.__('New Company'),
													array('controller' => 'companies', 'action' => 'add'),
													array('escape' => false, 'class' => 'btn btn-primary pull right')
												) ?>
											</div>
										</header>

										<div class="main-box-body clearfix">
											<table id="table-company-db" class="table footable toggle-circle-filled" >
												<thead>
													<tr>
														<th class="maxW300"><?= __('Company') ?></th>
														<th class="maxW100" data-hide="phone,tablet" ><?= __('Province') ?></th>
														<th  data-hide="all" ><?= __('Address') ?></th>
														<th class="maxW100" data-hide="" ><?= __('Phone') ?></th>
														<th class="maxW300" data-hide="all" ><?= __('Affiliated Association') ?></th>
														<th class="maxW50"></th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($companies as $company) : ?>
														<?php
															echo "<tr><td>";
															echo $this->Html->link(
																$company['Company']['company_jp'],
																array('action' => 'profile', $company['Company']['id']),
																array('escape' => false, 'class' => '')
															);
															echo "<br>";
															echo $this->Html->link(
																$company['Company']['company_en'],
																	array('action' => 'profile', $company['Company']['id']),
																	array('escape' => false, 'class' => '')
																);
															echo "</td><td>";
															echo $company['Company']['province'];
															echo "</td><td>";
															echo $company['Company']['address_jp'];
															echo "<br>";
															echo $company['Company']['address_en'];
															echo "</td><td>";
															echo $company['Company']['phone1'];
															echo "</td><td>";
															echo $this->Html->link(
																$company['Association']['association_jp'],
																array('controller' => 'associations','action' => 'profile', $company['Association']['id']),
																array('escape' => false, 'class' => '')
															);
															echo "<br>";
															echo $this->Html->link(
																$company['Association']['association_en'],
																	array('controller' => 'associations', 'action' => 'profile', $company['Association']['id']),
																	array('escape' => false, 'class' => '')
																);
															echo "</td>";
															echo '<td><div class="actions">';
															echo $this->Form->postlink(
																'<i class="fa fa-trash-o"></i>',
																array('controller' => 'companies', 'action' => 'update_delete_flag',$company['Company']['id']),
																array('confirm' => __('Are you sure you want to delete # %s?', $company['Company']['id']),'escape' => false, 'class' => 'table-link red' )
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
			$('.alert').fadeOut(5000);
				$('#table-company-db').dataTable({
					"bInfo" :false
				});
			});
		});
	<?php $this->Html->scriptEnd(); ?>
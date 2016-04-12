<div id="nav-col" class="no-print">
	<section id="col-left" class="col-left-nano">
		<div id="col-left-inner" class="col-left-nano-content">
			<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
				<div class="user-box">
					<span class="name">

					</span>
				</div>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
				<ul class="nav nav-pills nav-stacked">
					<li class="nav-header nav-header-first hidden-sm hidden-xs">
						Menu
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-home"></i><span>'.__('Home').'</span>',
							array('controller' => 'pages', 'action' => 'display'),
							array('escape' => false, 'class' => 'home')
						) ?>
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-child"></i><span>'.__('Trainees').'</span>',
							array('controller' => 'trainees', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-institution"></i><span>'.__('Associations').'</span>',
							array('controller' => 'associations', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-building"></i><span>'.__('Companies').'</span>',
							array('controller' => 'companies', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-building-o"></i><span>'.__('Agents').'</span>',
							array('controller' => 'agents', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-file"></i><span>'.__('Documents').'</span>',
							array('controller' => 'doc_names', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-wrench"></i><span>'.__('Sectors/Jobs').'</span>',
							array('controller' => 'sectors', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-group"></i><span>'.__('Interview').'</span>',
							array('controller' => 'interviews', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-car"></i><span>'.__('Inspections').'</span>',
							array('controller' => 'inspections', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-map-marker"></i><span>'.__('Address List').'</span>',
							array('controller' => 'provinces', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<?php if ($user['role_id']==1) : ?>

					<li>
						<?php echo $this->Html->link(
							'<i class="fa fa-user"></i><span>'.__('Users').'</span>',
							array('controller' => 'users', 'action' => 'index'),
							array('escape' => false, 'class' => '')
						) ?>
					</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</section>
	<div id="nav-col-submenu"></div>
</div>


			<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
				$(function(){
					'use strict';
						var local = window.location;
						var pathname = window.location.pathname;
						var url = local.origin;
						var home = pathname+"pages";
						var current_url = url + getDir(local); // 現在のディレクトリ

						function getDir(place, n) {
							return place.pathname.replace(new RegExp("(?:\\\/+[^\\\/]*){0," + ((n || 0) + 1) + "}$"), "/");
						}

						$('#sidebar-nav a').each( function(){
							if(home == $(this).attr('href')){$('.home').parent().addClass('active');return true;}
							var match = pathname.indexOf($(this).attr('href'));
							if(match == 0){
								$(this).parent().addClass('active');
							}
						})
				});
			<?php $this->Html->scriptEnd(); ?>
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

					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:
						case 4:
						case 5:
						case 6:
							$link = $this->Html->link(
								'<i class="fa fa-home"></i><span>'.__('Home').'</span>',
								array('controller' => 'pages', 'action' => 'display'),
								array('escape' => false, 'class' => 'home'));
							echo '<li class="sidebar_home">' . $link . '</li>';
							break;

						default:

							break;
					} ?>

					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:
						case 4:
						case 5:

							$link = $this->Html->link(
								'<i class="fa fa-graduation-cap"></i><span>'.__('Students').'</span>',
								array('controller' => 'students', 'action' => 'index'),
								array('escape' => false, 'class' => ''));
							echo '<li class="sidebar_students">' . $link .'</li>';
						break;

						default:

							break;
					} ?>

					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:

							$link = $this->Html->link(
							'<i class="fa fa-wrench"></i><span>'.__('Sectors/Jobs').'</span>',
							array('controller' => 'sectors', 'action' => 'index'),
							array('escape' => false, 'class' => ''));
							echo '<li class="sidebar_sectors">' . $link .'</li>';
						break;

						default:
							break;
					} ?>

					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:
						case 5:

							$link = $this->Html->link(
								'<i class="fa fa-group"></i><span>'.__('Interview').'</span>',
								array('controller' => 'interviews', 'action' => 'index'),
								array('escape' => false, 'class' => ''));
							echo '<li class="sidebar_interviews">' . $link .'</li>';
						break;

						default:

							break;
					} ?>


					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:
						case 4:
						case 5:
						case 6:

							$link = $this->Html->link(


							'<i class="fa fa-child"></i><span>'.__('Trainees').'</span>',
							array('controller' => 'trainees', 'action' => 'index'),
							array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_trainees">' . $link .'</li>';
						break;

						default:
							break;
					} ?>
					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:

							$link = $this->Html->link(


							'<i class="fa fa-building-o"></i><span>'.__('Agents').'</span>',
							array('controller' => 'agents', 'action' => 'index'),
							array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_agents">' . $link .'</li>';
						break;

						default:
							break;
					} ?>
					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:
						case 4:

							$link = $this->Html->link(


							'<i class="fa fa-building"></i><span>'.__('Companies').'</span>',
							array('controller' => 'companies', 'action' => 'index'),
							array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_companies">' . $link .'</li>';
						break;

						default:
							break;
					} ?>

					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:
						case 4:

							$link = $this->Html->link(


							'<i class="fa fa-institution"></i><span>'.__('Associations').'</span>',
							array('controller' => 'associations', 'action' => 'index'),
							array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_associations">' . $link .'</li>';
						break;

						default:
							break;
					} ?>
					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:

							$link = $this->Html->link(
							'<i class="fa fa-file"></i><span>'.__('Documents').'</span>',
							array('controller' => 'doc_names', 'action' => 'index'),
							array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_documents">' . $link .'</li>';
						break;

						default:
							break;
					} ?>


					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:
						case 5:

							$link = $this->Html->link(
							'<i class="fa fa-car"></i><span>'.__('Inspections').'</span>',
							array('controller' => 'inspections', 'action' => 'index'),
							array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_inspections">' . $link .'</li>';
						break;

						default:
							break;
					} ?>


					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:

							$link = $this->Html->link(
							'<i class="fa fa-map-marker"></i><span>'.__('Address List').'</span>',
							array('controller' => 'provinces', 'action' => 'index'),
							array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_address">' . $link .'</li>';
						break;

						default:
							break;
					} ?>


					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:
						case 4:
						case 6:

							$link = $this->Html->link(
							'<i class="fa fa-calendar"></i><span>'.__('Remaining Return').'</span>',
							array('controller' => 'trainees', 'action' => 'remaining_return'),
							array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_remaining_return">' . $link .'</li>';
						break;

						default:
							break;
					} ?>


					<?php switch ($user['role_id']) {
						case 1:
						case 2:
						case 3:

							$link = $this->Html->link(
							'<i class="fa fa-file-text-o"></i><span>'.__('Report').'</span>',
							array('controller' => 'reports', 'action' => 'passed_trainees'),
							array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_report">' . $link .'</li>';
						break;

						default:
							break;
					} ?>


					<?php switch ($user['role_id']) {
						case 1:
						case 2:


							$link = $this->Html->link(
								'<i class="fa fa-user"></i><span>'.__('Users').'</span>',
								array('controller' => 'users', 'action' => 'index'),
								array('escape' => false, 'class' => ''));

							echo '<li class="sidebar_user">' . $link .'</li>';
							break;

							default:
							break;
					} ?>

				</ul>
			</div>
		</div>
	</section
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
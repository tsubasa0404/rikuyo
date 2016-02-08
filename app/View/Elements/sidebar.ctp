<div id="nav-col">
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
							array('escape' => false, 'class' => '')
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
				</ul>
			</div>
		</div>
	</section>
	<div id="nav-col-submenu"></div>
</div>
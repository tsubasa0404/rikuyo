<header class="navbar no-print" id="header-navbar">
	<div class="container">
		<?php echo $this->Html->link(
			$this->Html->image('logo.png', array('class'=>'normal-log logo-white')),
			array('controller'=> 'pages', 'action' => 'display'),
			array('escape' => false, 'class' => 'navbar-brand', 'id' => 'logo')
		) ?>

		<div class="clearfix">
		<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="fa fa-bars"></span>
		</button>

		<div class="nav-no-collapse navbar-left pull-left">
			<ul class="nav navbar-nav pull-left">
				<li class="hidden-sm hidden-xs">
					<a class="btn" id="make-small-nav">
						<i class="fa fa-bars"></i>
					</a>
				</li>
				<li class="dropdown">
					<a class="btn dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell"></i>
						<span class="count"><?php echo count($notification_tasks); ?></span>
					</a>
					<ul class="dropdown-menu notifications-list">
						<li class="pointer">
							<div class="pointer-inner">
								<div class="arrow"></div>
							</div>
						</li>
						<li class="item-header"><?= __('Uncompleted Tasks') ?></li>
						<?php foreach ($notification_tasks as $task) : ?>
							<li class="item">
								<?php echo $this->Html->link(
									'<i class="fa fa-tasks"></i><p class="content">'.$task['Task']['task'].'</p><span class="time"><i class="fa fa-clock-o"></i>'.date('m/d', strtotime($task['Task']['expected_date'])).'</span>',
									array('controller' => 'tasks', 'action' => 'index'),
									array('escape' => false, 'class' => '')
								) ?>
							</li>
						<?php endforeach; ?>
						<li class="item-footer">
							<?php echo $this->Html->link(
								__('View All notifications'),
								array('controller' => 'tasks', 'action' => 'index'),
								array('escape' => false, 'class' => '')
							) ?>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="btn dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-money"></i>
						<span class="count"><?php echo count($notification_expenses); ?></span>
					</a>
					<ul class="dropdown-menu notifications-list">
						<li class="pointer">
							<div class="pointer-inner">
								<div class="arrow"></div>
							</div>
						</li>
						<li class="item-header"><?= __('Unpaid School Tuitions') ?></li>
						<?php foreach ($notification_expenses as $expense) : ?>
							<li class="item">
								<?php echo $this->Html->link(
									'<i class="fa fa-tasks"></i><p class="content">'.$expense['Trainee']['given_name_en']." ".$expense['Trainee']['family_name_en'].'</p><span class="time"><i class="fa fa-clock-o"></i>'.date('m/d', strtotime($expense['TraineeExpense']['expected_date'])).'</span>',
									array('controller' => 'trainees', 'action' => 'profile', $expense['Trainee']['id']),
									array('escape' => false, 'class' => '')
								) ?>
							</li>
						<?php endforeach; ?>
						<li class="item-footer">
							<?php echo $this->Html->link(
								__('View All notifications'),
								array('controller' => 'tasks', 'action' => 'index'),
								array('escape' => false, 'class' => '')
							) ?>
						</li>
					</ul>
				</li>

				<li class="dropdown">
					<a class="btn dropdown-toggle" data-toggle="dropdown">
						<?php echo $lang == 'ja' ? __('Japanese') : __('English'); ?>
						<i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li class="item">
							<?php echo $this->html->link(__('Japanese', true), $this->action.DS.'lang:ja');?>
						</li>
						<li class="item">
							<?php echo $this->html->link(__('English', true), $this->action.DS.'lang:en');?>
						</li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="nav-no-collapse pull-right" id="header-nav">
			<ul class="nav navbar-nav pull-right">
				<li class="hidden-xxs">
					<?php echo $this->Html->link(
						__('Logout'),
						array('controller' => 'users', 'action' => 'logout'),
						array('escape' => false, 'class' => 'btn')
					) ?>
				</li>
			</ul>
		</div>
		</div>
	</div>
</header>
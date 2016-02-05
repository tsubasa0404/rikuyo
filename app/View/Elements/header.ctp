<header class="navbar" id="header-navbar">
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
						<span class="count">8</span>
					</a>
					<ul class="dropdown-menu notifications-list">
						<li class="pointer">
							<div class="pointer-inner">
								<div class="arrow"></div>
							</div>
						</li>
						<li class="item-header">You have 6 new notificationsここのロジック考える</li>
						<li class="item">
							<a href="#">
								<i class="fa fa-comment"></i>
								<span class="content">New comment on ‘Awesome P...</span>
								<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
							</a>
						</li>
						<li class="item">
							<a href="#">
								<i class="fa fa-plus"></i>
								<span class="content">New user registration</span>
								<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
							</a>
						</li>
						<li class="item">
							<a href="#">
								<i class="fa fa-envelope"></i>
								<span class="content">New Message from George</span>
								<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
							</a>
						</li>
						<li class="item">
							<a href="#">
								<i class="fa fa-shopping-cart"></i>
								<span class="content">New purchase</span>
								<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
							</a>
						</li>
						<li class="item">
							<a href="#">
								<i class="fa fa-eye"></i>
								<span class="content">New order</span>
								<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
							</a>
						</li>
						<li class="item-footer">
							<a href="#">
								View all notifications
							</a>
						</li>
					</ul>
				</li>

				<li class="dropdown">
					<a class="btn dropdown-toggle" data-toggle="dropdown">
						Languages
						<i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li class="item">
							<?php echo $this->html->link(__('日本語', true), $this->action.DS.'lang:ja');?>
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
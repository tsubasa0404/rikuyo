<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard | Rikuyo TC</title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />

	<!--
	If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-rtl.min.css" />
	And add "rtl" class to <body> element - e.g. <body class="rtl">
	-->

	<!-- libraries -->
	<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css" />
	<link rel="stylesheet" type="text/css" href="css/libs/common.css" />

	<!-- this page specific styles -->
	<link rel="stylesheet" href="css/libs/footable.core.css" type="text/css" />
	<link rel="stylesheet" href="css/libs/select2.css" type="text/css" />
	<link rel="stylesheet" href="css/libs/datepicker.css" type="text/css" />


	<!-- Favicon -->
	<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />

	<!-- google font libraries -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body class="theme-white fixed-header">
	<div id="theme-wrapper">
		<header class="navbar" id="header-navbar">
			<div class="container">
				<a href="index.html" id="logo" class="navbar-brand">
					<img src="img/logo.png" alt="" class="normal-logo logo-white"/>
					<!-- <img src="img/logo-black.png" alt="" class="normal-logo logo-black"/>
					<img src="img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/> -->
				</a>

				<div class="clearfix">
				<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>

				<div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
					<ul class="nav navbar-nav pull-left">
						<li>
							<a class="btn" id="make-small-nav">
								<i class="fa fa-bars"></i>
							</a>
						</li>
						<li class="dropdown hidden-xs">
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

						<li class="dropdown hidden-xs">
							<a class="btn dropdown-toggle" data-toggle="dropdown">
								Languages
								<i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li class="item">
									<a href="#">
										Japanese
									</a>
								</li>
								<li class="item">
									<a href="#">
										English
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="nav-no-collapse pull-right" id="header-nav">
					<ul class="nav navbar-nav pull-right">
						<li class="hidden-xxs">
							<a class="btn">
								ログアウト
							</a>
						</li>
					</ul>
				</div>
				</div>
			</div>
		</header>
		<div id="page-wrapper" class="container">
			<div class="row">
				<div id="nav-col">
					<section id="col-left" class="col-left-nano">
						<div id="col-left-inner" class="col-left-nano-content">
							<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
								<div class="user-box">
									<span class="name">
											管理者 橋本
									</span>
								</div>
							</div>
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
								<ul class="nav nav-pills nav-stacked">
									<li class="nav-header nav-header-first hidden-sm hidden-xs">
										Menu
									</li>
									<li class="active">
										<a href="index.html">
											<i class="fa fa-home"></i>
											<span>ホーム</span>
										</a>
									</li>
									<li>
										<a href="trainee-db.html">
											<i class="fa fa-child"></i>
											<span>実習生リスト</span>
										</a>
									</li>
									<li>
										<a href="association-db.html">
											<i class="fa fa-institution"></i>
											<span>組合リスト</span>
										</a>
									</li>
									<li>
										<a href="company-db.html">
											<i class="fa fa-building"></i>
											<span>企業リスト</span>
										</a>
									</li>
									<li>
										<a href="agent-db.html">
											<i class="fa fa-building-o"></i>
											<span>送り出し機関リスト</span>
										</a>
									</li>
									<li>
										<a href="document-db.html">
											<i class="fa fa-file"></i>
											<span>書類リスト</span>
										</a>
									</li>
									<li>
										<a href="job-db.html">
											<i class="fa fa-wrench"></i>
											<span>業種・職種リスト</span>
										</a>
									</li>
									<li>
										<a href="interview.html" class="">
											<i class="fa fa-group"></i>
											<span>面接</span>
										</a>
										<!-- <ul class="submenu">
											<li>
												<a href="email-inbox.html">
													Inbox
												</a>
											</li>
											<li>
												<a href="email-detail.html">
													Detail
												</a>
											</li>
											<li>
												<a href="email-compose.html">
													Compose
												</a>
											</li>
										</ul> -->
								</ul>
							</div>
						</div>
					</section>
					<div id="nav-col-submenu"></div>
				</div>
				<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">

							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><a href="#">Home</a></li>
										<li class="active"><span>送り出し機関リスト</span></li>
									</ol>

									<h1>送り出し機関リスト</h1>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2 class="pull-left">送り出し機関一覧</h2>

											<div class="filter-block pull-right">
												<div class="form-group pull-left">
													<input type="text" id="filter" class="form-control" placeholder="Search...">
													<i class="fa fa-search search-icon"></i>
												</div>
												<a href="agent-register.html" class="btn btn-primary pull-right"><i class="fa fa-plus-circle fa-lg"></i> 新規送り出し機関登録</a>
											</div>
										</header>

										<div class="main-box-body clearfix">
											<table class="table footable toggle-circle-filled" data-page-size="50" data-filter="#filter" data-filter-text-only="true">
												<thead>
													<tr>
														<th>機関名</th>
														<th data-hide="" class="">電話番号</th>
														<th data-hide="" class="">業種</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<a href="agent-profile.html">Human Power Co.,Ltd</a>
														</td>
														<td>
															0291-36-5114
														</td>
														<td>
															食品加工業
														</td>
													</tr>
													<tr>
														<td>
															<a href="agent-profile.html">Human Power Co.,Ltd</a>
														</td>
														<td>
															0291-36-5114
														</td>
														<td>
															食品加工業
														</td>
													</tr>
													<tr>
														<td>
															<a href="agent-profile.html">Human Power Co.,Ltd</a>
														</td>
														<td>
															0291-36-5114
														</td>
														<td>
															食品加工業
														</td>
													</tr>
													<tr>
														<td>
															<a href="agent-profile.html">Human Power Co.,Ltd</a>
														</td>
														<td>
															0291-36-5114
														</td>
														<td>
															食品加工業
														</td>
													</tr>
												</tbody>
											</table>
											<ul class="pagination pull-right hide-if-no-paging"></ul>
										</div>
									</div>
								</div>
							</div>



						</div>
					</div>

					<footer id="footer-bar" class="row">
						<p id="footer-copyright" class="col-xs-12">
							Powered by Mangetsu Ltd.
						</p>
					</footer>
				</div>
			</div>
		</div>
	</div>


	<!-- global scripts -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.nanoscroller.min.js"></script>

	<!-- this page specific scripts -->
	<script src="js/footable.js"></script>
	<script src="js/footable.sort.js"></script>
	<script src="js/footable.paginate.js"></script>
	<script src="js/footable.filter.js"></script>

	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
	<script src="js/pace.min.js"></script>

	<!-- this page specific inline scripts -->
	<script type="text/javascript">
	$(document).ready(function() {
		$('.footable').footable();
	});
	</script>

</body>
</html>
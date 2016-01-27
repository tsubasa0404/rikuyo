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
	<link rel="stylesheet" href="css/libs/dropzone.css" type="text/css" />


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
										<li><a href="agent-db.html">送り出し機関リスト</a></li>
										<li class="active"><span>送り出し機関プロフィール</span></li>
									</ol>
									<h1>送り出し機関プロフィール</h1>
								</div>
							</div>

							<div class="row" id="company-profile">
								<div class="col-lg-6 col-md-8 col-sm-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2>Human Power Co.,Ltd.</h2>
												<a href="docs/html/organization_outline_en.html" class="btn btn-info pull-right" target="_blank"><i class="fa fa-print"></i> Outline_En</a>
										</header>

										<div class="main-box-body clearfix">

											<div class="company-profile-details">
												<div class="table-responsive">
													<form action="agent-profile/edit" class="form_agent_edit" method="post" accept-charset="utf-8">
														<table class="table table-bordered table-hover">
															<thead>
																<tr>
																	<th style="width:100px;"><span></span></th>
																	<th class="text-center"><span></span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		機関名
																	</td>
																	<td>
																		<input type="text" name="" value="Human Power Co.,Ltd" placeholder="機関名をアルファベットで入力してください" style="width: 100%;margin-bottom: 5px;"><br>
																		<input type="text" name="" value="ヒューマンパワー株式会社" placeholder="機関名を日本語で入力してください" style="width: 100%">
																	</td>
																</tr>
																<tr>
																	<td>
																		管理者
																	</td>
																	<td>
																		<input type="text" value="Leng" id="agentRepresentativeFamily" placeholder="Enter Family Name" style="width: 45%;">
																		<input type="text" value="Vichheka" id="associationRepresentativeGiven" placeholder="Enter Given Name" style="width: 45%;margin-bottom: 5px;"><br>
																		役職： <input type="text" name="" value="Executive Director" placeholder="Enter Position" style="width: 45%; margin-bottom:5px;"><br>
																		性別： <select name="" id="">
																			<option value="male">Male</option>
																			<option value="female">Female</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		設立年月日
																	</td>
																	<td>
																		<input type="date" name="" value="1987-05-05" class="date">
																		<span class="help-block">Year/Month/Day</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		資本金
																	</td>
																	<td>
																		リエル: <input type="number" name="capitalKh" id="capitalKh" value="" class="" style="margin-bottom:5px;"> (<span class="" name="capitalKhOut"></span>)<br>
																		日本円: <input type="number" name="capitalJp" id="capitalJp" value="" class=""> (<span class="" name="capitalJpOut"></span>)
																	</td>
																</tr>
																<tr>
																	<td>
																		売上げ<br>(直近年度)
																	</td>
																	<td>
																		リエル: <input type="number" name="salesKh" id="salesKh" value="" class="" style="margin-bottom:5px;"> (<span class="" name="salesKhOut"></span>)<br>
																		日本円: <input type="number" name="salesJp" id="salesJp" value="" class=""> (<span class="" name="salesJpOut"></span>)
																	</td>
																</tr>
																<tr>
																	<td>
																		常勤職員数
																	</td>
																	<td>
																		<input type="number" name="" value="11" class="">
																	</td>
																</tr>
																<tr>
																	<td>
																		主要貿易(取引)相手国
																	</td>
																	<td>
																		輸出先： <input type="text" name="" value="日本、タイ、マレーシア" class="" style="margin-bottom: 5px;width:80%;"><br>
																		輸入先： <input type="text" name="" value="特に無し" class="" style="width:80%;">
																	</td>
																</tr>

																<tr>
																	<td>
																		住所
																	</td>
																	<td>
																		<div class="form-group form-group-select2">
																			<label for="addressProvinceEn">Province</label>
																			<select  id="addressProvinceEn" name="addressProvinceEn" class="form-control">
																				<option value=""></option>
																				<option value="1">Banteay Meanchey</option>
																				<option value="2">Battambang</option>
																				<option value="3">Kampong Cham</option>
																				<option value="4">Kampong Chhnang</option>
																				<option value="5">Kampong Speu</option>
																				<option value="6">Kampong Thom</option>
																				<option value="7">Kampot</option>
																				<option value="8">Kandal</option>
																				<option value="9">Kep</option>
																				<option value="10">Koh Kong</option>
																				<option value="11">Kratie</option>
																				<option value="12">Mondol Kiri</option>
																				<option value="13">Otdar Meanchey</option>
																				<option value="14">Pailin</option>
																				<option value="15">Phnom Penh</option>
																				<option value="16">Preah Sihanouk</option>
																				<option value="17">Preah Vihear</option>
																				<option value="18">Prey Veng</option>
																				<option value="19">Pursat</option>
																				<option value="20">Ratanak Kiri</option>
																				<option value="21">Siem Reap</option>
																				<option value="22">Stung Treng</option>
																				<option value="23">Svay Rieng</option>
																				<option value="24">Takeo</option>
																				<option value="25">Tbong Khmum</option>
																			</select>
																		</div>
																		<div class="form-group form-group-select2">
																			<label for="addressDistrictEn">District</label>
																			<select id="addressDistrictEn" name="addressDistrictEn" class="form-control" >
																			</select>
																		</div>
																		<div class="form-group form-group-select2">
																			<label for="addressCommuneEn">Commune</label>
																			<select id="addressCommuneEn" name="addressCommuneEn" class="form-control" >
																			</select>
																		</div>
																		<div class="form-group">
																			<label for="addressKh">Address(No, Street, Village, Khmer)</label>
																			<input type="text" class="form-control" id="addressKh" placeholder="">
																		</div>
																		<div class="form-group">
																			<label for="addressEn">Address(No, Street, Village, English)</label>
																			<input type="text" class="form-control" id="addressEn" placeholder="">
																		</div>
																	</div>
																	</td>
																</tr>
																<tr>
																	<td rowspan="2">
																		連絡先
																	</td>
																	<td>
																		<div style="margin-bottom: 5px;">
																			電話番号1: <input type="text" id="phone1" value="092123456" minlength="10" maxlength="11" size="11" style="width:90px"> 担当者: <input type="text" id="name_phone1" value="Leng Vichheka" placeholder="" style="width:100px">
																		</div>
																		<div style="margin-bottom: 5px;">
																			電話番号2: <input type="text" id="phone2" placeholder="" minlength="10" maxlength="11" size="11" style="width:90px"> 担当者: <input type="text" id="name_phone2" placeholder="" style="width:100px">
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="td_first_block">
																		<div style="margin-bottom: 5px;border-bottom: 1px solid #e7ebee;padding-bottom: 5px;">
																			メール1: <input type="text" id="email1" value="yamamotokougyou@humanpower.com" style="margin-bottom: 5px;width:100%"> 担当者: <input type="text" id="name_email1" placeholder="" style="width:100px">
																		</div>
																		<div style="margin-bottom: 5px;border-bottom: 1px solid #e7ebee;padding-bottom: 5px;">
																			メール2: <input type="text" id="email2" placeholder="" style="margin-bottom: 5px;width:100%"> 担当者: <input type="text" id="name_email2" placeholder="" style="width:100px">
																		</div>

																	</td>

																</tr>
																<tr>
																	<td>
																		業種
																	</td>
																	<td>
																		<select class="form-control" multiple style="display: inline;" id="sel_job">
																			<option value=""></option>
																			<option value="1" selected>型枠</option>
																			<option value="2">縫製</option>
																			<option value="3" selected>建設</option>
																			<option value="4">寝具製作</option>
																		</select>
																		<a href="job-add.html" class="btn btn-primary pull-right" style="margin-top: 5px;">
																			<i class="fa fa-plus-circle fa-lg"></i>
																			業種を追加
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		備考
																	</td>
																	<td>
																		<textarea name="" rows="4" style="width: 100%;"></textarea>
																	</td>
																</tr>

															</tbody>
														</table>

													</form>

												</div>
											</div>
											<!-- <div class="center-block pull-left">
                          <a href="interview-order-detail.html" class="btn btn-default">
                            <i class="fa fa-long-arrow-left fa-lg"></i>
                            前のページに戻る
                          </a>
                      </div> -->

											<div class="profile-message-btn center-block text-right">
												<a href="#" class="btn btn-default">
													<i class="fa fa-pencil"></i>
													変更を保存
												</a>
											</div>
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
  <script src="js/select2.min.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/dropzone.min.js"></script>
	<script src="js/jquery.jpostal.js"></script>


	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
	<script src="js/pace.min.js"></script>

	<!-- this page specific inline scripts -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#capitalKh').on('click blur keydown keyup keypress change', function(){
				var inputPrice = $('#capitalKh').val();
				var	fmtPrice = Number(inputPrice).toLocaleString();
				var	jpPrice = Math.floor(inputPrice * 0.03);
				var	fmtJpPrice = jpPrice.toLocaleString();
						$('span[name="capitalKhOut"]').text(fmtPrice);
						$('#capitalJp').val(jpPrice);
						$('span[name="capitalJpOut"]').text(fmtJpPrice);
			});
			$('#capitalJp').on('click blur keydown keyup keypress change', function(){
				var inputPrice = $('#capitalJp').val();
				var	fmtPrice = Number(inputPrice).toLocaleString();
						$('span[name="capitalJpOut"]').text(fmtPrice);
			});

			$('#salesKh').on('click blur keydown keyup keypress change', function(){
				var inputPrice = $('#salesKh').val();
				var	fmtPrice = Number(inputPrice).toLocaleString();
				var	jpPrice = Math.floor(inputPrice * 0.03);
				var	fmtJpPrice = jpPrice.toLocaleString();
						$('span[name="salesKhOut"]').text(fmtPrice);
						$('#salesJp').val(jpPrice);
						$('span[name="salesJpOut"]').text(fmtJpPrice);
			});
			$('#salesJp').on('click blur keydown keyup keypress change', function(){
				var inputPrice = $('#salesJp').val();
				var	fmtPrice = Number(inputPrice).toLocaleString();
						$('span[name="salesJpOut"]').text(fmtPrice);
			});



		});

		$(document).ready(function() {
			$('.conversation-inner').slimScroll({
		        height: '340px'
		    });

			$('#sel_association').select2({
            placeholder: '所属組合を選択してください',
            allowClear: false
        });

			$('#sel_company').select2({
				placeholder: '加盟している企業を選択してください',
				allowClear: false
			});

			$('#sel_job').select2({
				placeholder: '業種を選択してください',
				allowClear: false
			});

			//nice select boxes( address Province)
		$('#addressProvinceEn').select2();

		//nice select boxes( address District)
		$('#addressDistrictEn').select2();

		//nice select boxes( address District)
		$('#addressCommuneEn').select2();

		//Select box - address Province will be changed, district will also be changed.
			var district = [
				{province:'1', district_code:'1', district:'Malai'},
				{province:'1', district_code:'2', district:'Mongkol Borei'},
				{province:'1', district_code:'3', district:'Ou Chrov'},
				{province:'1', district_code:'4', district:'Phnum Srok'},
				{province:'1', district_code:'5', district:'Preah Netr Preah'},
				{province:'1', district_code:'6', district:'Serei Saophoan'},
				{province:'1', district_code:'7', district:'Svay Chek'},
				{province:'1', district_code:'8', district:'Thma Puok'},
				{province:'2', district_code:'9', district:'Aek Phnum'},
				{province:'2', district_code:'10', district:'Banan'},
				{province:'2', district_code:'11', district:'Battambang'},
				{province:'2', district_code:'12', district:'Bavel'},
				{province:'2', district_code:'13', district:'Kamrieng'},
				{province:'2', district_code:'14', district:'Koas Krala'},
				{province:'2', district_code:'15', district:'Moung Ruessei'},
				{province:'2', district_code:'16', district:'Phnum Proek'},
				{province:'2', district_code:'17', district:'Rotanak Mondol'},
				{province:'2', district_code:'18', district:'Samlout'},
				{province:'2', district_code:'19', district:'Sampov Lun'},
				{province:'2', district_code:'20', district:'Sangkae'},
				{province:'2', district_code:'21', district:'Thma Koul'},
				{province:'3', district_code:'22', district:'Batheay'},
				{province:'3', district_code:'23', district:'Chamkar Leu'},
				{province:'3', district_code:'24', district:'Cheung Prey'},
				{province:'3', district_code:'25', district:'Kampong Cham'},
				{province:'3', district_code:'26', district:'Kampong Siem'},
				{province:'3', district_code:'27', district:'Kang Meas'},
				{province:'3', district_code:'28', district:'Kaoh Soutin'},
				{province:'3', district_code:'29', district:'Prey Chhor'},
				{province:'3', district_code:'30', district:'Srei Santhor'},
				{province:'3', district_code:'31', district:'Stueng Trang'},
				{province:'4', district_code:'32', district:'Baribour'},
				{province:'4', district_code:'33', district:'Chol Kiri'},
				{province:'4', district_code:'34', district:'Kampong Chhnang'},
				{province:'4', district_code:'35', district:'Kampong Leaeng'},
				{province:'4', district_code:'36', district:'Kampong Tralach'},
				{province:'4', district_code:'37', district:'Rolea B\'ier'},
				{province:'4', district_code:'38', district:'Sameakki Mean Chey'},
				{province:'4', district_code:'39', district:'Tuek Phos'},
				{province:'5', district_code:'40', district:'Aoral'},
				{province:'5', district_code:'41', district:'Basedth'},
				{province:'5', district_code:'42', district:'Chbar Mon'},
				{province:'5', district_code:'43', district:'Kong Pisei'},
				{province:'5', district_code:'44', district:'Odongk'},
				{province:'5', district_code:'45', district:'Phnum Sruoch'},
				{province:'5', district_code:'46', district:'Samraong Tong'},
				{province:'5', district_code:'47', district:'Thpong'},
				{province:'6', district_code:'48', district:'Baray'},
				{province:'6', district_code:'49', district:'Kampong Svay'},
				{province:'6', district_code:'50', district:'Prasat Balangk'},
				{province:'6', district_code:'51', district:'Prasat Sambour'},
				{province:'6', district_code:'52', district:'Sandan'},
				{province:'6', district_code:'53', district:'Santuk'},
				{province:'6', district_code:'54', district:'Stoung'},
				{province:'6', district_code:'55', district:'Stueng Saen'},
				{province:'7', district_code:'56', district:'Angkor Chey'},
				{province:'7', district_code:'57', district:'Banteay Meas'},
				{province:'7', district_code:'58', district:'Chhuk'},
				{province:'7', district_code:'59', district:'Chum Kiri'},
				{province:'7', district_code:'60', district:'Dang Tong'},
				{province:'7', district_code:'61', district:'Kampong Bay'},
				{province:'7', district_code:'62', district:'Kampong Trach'},
				{province:'7', district_code:'63', district:'Kampot'},
				{province:'8', district_code:'64', district:'Angk Snuol'},
				{province:'8', district_code:'65', district:'Kandal Stueng'},
				{province:'8', district_code:'66', district:'Kaoh Thum'},
				{province:'8', district_code:'67', district:'Khsach Kandal'},
				{province:'8', district_code:'68', district:'Kien Svay'},
				{province:'8', district_code:'69', district:'Leuk Daek'},
				{province:'8', district_code:'70', district:'Lvea Aem'},
				{province:'8', district_code:'71', district:'Mukh Kampul'},
				{province:'8', district_code:'72', district:'Ponhea Lueu'},
				{province:'8', district_code:'73', district:'S\'ang'},
				{province:'8', district_code:'74', district:'Ta Khmau'},
				{province:'9', district_code:'75', district:'Damnak Chang\'aeur'},
				{province:'9', district_code:'76', district:'Kaeb'},
				{province:'10', district_code:'77', district:'Botum Sakor'},
				{province:'10', district_code:'78', district:'Kampong Seila'},
				{province:'10', district_code:'79', district:'Kiri Sakor'},
				{province:'10', district_code:'80', district:'Koh Kong'},
				{province:'10', district_code:'81', district:'Mondol Seima'},
				{province:'10', district_code:'82', district:'Smach Mean Chey'},
				{province:'10', district_code:'83', district:'Srae Ambel'},
				{province:'10', district_code:'84', district:'Thma Bang'},
				{province:'11', district_code:'85', district:'Chhloung'},
				{province:'11', district_code:'86', district:'Kracheh'},
				{province:'11', district_code:'87', district:'Preaek Prasab'},
				{province:'11', district_code:'88', district:'Sambour'},
				{province:'11', district_code:'89', district:'Snuol'},
				{province:'12', district_code:'90', district:'Kaev Seima'},
				{province:'12', district_code:'91', district:'Kaoh Nheaek'},
				{province:'12', district_code:'92', district:'Ou Reang'},
				{province:'12', district_code:'93', district:'Pechr Chenda'},
				{province:'12', district_code:'94', district:'Saen Monourom'},
				{province:'13', district_code:'95', district:'Anlong Veaeng'},
				{province:'13', district_code:'96', district:'Banteay Ampil'},
				{province:'13', district_code:'97', district:'Chong Kal'},
				{province:'13', district_code:'98', district:'Samraong'},
				{province:'13', district_code:'99', district:'Trapeang Prasat'},
				{province:'14', district_code:'100', district:'Pailin'},
				{province:'14', district_code:'101', district:'Sala Krau'},
				{province:'15', district_code:'102', district:'Chamkar Mon'},
				{province:'15', district_code:'103', district:'Dangkao'},
				{province:'15', district_code:'104', district:'Doun Penh'},
				{province:'15', district_code:'105', district:'Mean Chey'},
				{province:'15', district_code:'106', district:'Prampi Makara'},
				{province:'15', district_code:'107', district:'Ruessei Kaev'},
				{province:'15', district_code:'108', district:'Tuol Kouk'},
				{province:'16', district_code:'109', district:'Mittakpheap'},
				{province:'16', district_code:'110', district:'Prey Nob'},
				{province:'16', district_code:'111', district:'Stueng Hav'},
				{province:'17', district_code:'112', district:'Chey Saen'},
				{province:'17', district_code:'113', district:'Chhaeb'},
				{province:'17', district_code:'114', district:'Choam Khsant'},
				{province:'17', district_code:'115', district:'Kuleaen'},
				{province:'17', district_code:'116', district:'Rovieng'},
				{province:'17', district_code:'117', district:'Sangkom Thmei'},
				{province:'17', district_code:'118', district:'Tbaeng Mean Chey'},
				{province:'18', district_code:'119', district:'Ba Phnum'},
				{province:'18', district_code:'120', district:'Kamchay Mear'},
				{province:'18', district_code:'121', district:'Kampong Leav'},
				{province:'18', district_code:'122', district:'Kampong Trabaek'},
				{province:'18', district_code:'123', district:'Kanhchriech'},
				{province:'18', district_code:'124', district:'Me Sang'},
				{province:'18', district_code:'125', district:'Peam Chor'},
				{province:'18', district_code:'126', district:'Peam Ro'},
				{province:'18', district_code:'127', district:'Pea Reang'},
				{province:'18', district_code:'128', district:'Preah Sdach'},
				{province:'18', district_code:'129', district:'Prey Veaeng'},
				{province:'18', district_code:'130', district:'Sithor Kandal'},
				{province:'19', district_code:'131', district:'Bakan'},
				{province:'19', district_code:'132', district:'Kandieng'},
				{province:'19', district_code:'133', district:'Krakor'},
				{province:'19', district_code:'134', district:'Phnum Kravanh'},
				{province:'19', district_code:'135', district:'Pursat'},
				{province:'19', district_code:'136', district:'Veal Veaeng'},
				{province:'20', district_code:'137', district:'Andoung Meas'},
				{province:'20', district_code:'138', district:'Ban Lung'},
				{province:'20', district_code:'139', district:'Bar Kaev'},
				{province:'20', district_code:'140', district:'Koun Mom'},
				{province:'20', district_code:'141', district:'Lumphat'},
				{province:'20', district_code:'142', district:'Ou Chum'},
				{province:'20', district_code:'143', district:'Ou Ya Dav'},
				{province:'20', district_code:'144', district:'Ta Veaeng'},
				{province:'20', district_code:'145', district:'Veun Sai'},
				{province:'21', district_code:'146', district:'Angkor Chum'},
				{province:'21', district_code:'147', district:'Angkor Thum'},
				{province:'21', district_code:'148', district:'Banteay Srei'},
				{province:'21', district_code:'149', district:'Chi Kraeng'},
				{province:'21', district_code:'150', district:'Kralanh'},
				{province:'21', district_code:'151', district:'Prasat Bakong'},
				{province:'21', district_code:'152', district:'Puok'},
				{province:'21', district_code:'153', district:'Siem Reap'},
				{province:'21', district_code:'154', district:'Soutr Nikom'},
				{province:'21', district_code:'155', district:'Srei Snam'},
				{province:'21', district_code:'156', district:'Svay Leu'},
				{province:'21', district_code:'157', district:'Varin'},
				{province:'22', district_code:'158', district:'Sesan'},
				{province:'22', district_code:'159', district:'Siem Bouk'},
				{province:'22', district_code:'160', district:'Siem Pang'},
				{province:'22', district_code:'161', district:'Stueng Traeng'},
				{province:'22', district_code:'162', district:'Thala Barivat'},
				{province:'23', district_code:'163', district:'Chantrea'},
				{province:'23', district_code:'164', district:'Kampong Rou'},
				{province:'23', district_code:'165', district:'Romeas Haek'},
				{province:'23', district_code:'166', district:'Rumduol'},
				{province:'23', district_code:'167', district:'Svay Chrum'},
				{province:'23', district_code:'168', district:'Svay Rieng'},
				{province:'23', district_code:'169', district:'Svay Teab'},
				{province:'24', district_code:'170', district:'Angkor Borei'},
				{province:'24', district_code:'171', district:'Bati'},
				{province:'24', district_code:'172', district:'Bourei Cholsar'},
				{province:'24', district_code:'173', district:'Doun Kaev'},
				{province:'24', district_code:'174', district:'Kaoh Andaet'},
				{province:'24', district_code:'175', district:'Kiri Vong'},
				{province:'24', district_code:'176', district:'Prey Kabbas'},
				{province:'24', district_code:'98', district:'Samraong'},
				{province:'24', district_code:'177', district:'Tram Kak'},
				{province:'24', district_code:'178', district:'Treang'},
				{province:'25', district_code:'179', district:'Dambae'},
				{province:'25', district_code:'180', district:'Krouch Chhmar'},
				{province:'25', district_code:'181', district:'Memot'},
				{province:'25', district_code:'182', district:'Ou Reang Ov'},
				{province:'25', district_code:'183', district:'Ponhea Kraek'},
				{province:'25', district_code:'184', district:'Tboung Khmum'}
			];
			$('#addressProvinceEn').change(function(){
				setDistrictSelect($(this).val());
			});

			function setDistrictSelect(s){
				$('#addressDistrictEn').find('option').remove();
				$(district).each(function(i){
					if(district[i].province == s){
						$('#addressDistrictEn').append($('<option></option>')
							.attr('province', district[i].province)
							.val(district[i].district_code)
							.text(district[i].district));
						}
					}
				);
			}
			setDistrictSelect('');

			var commune = [
				{province_code:'1', district_code:'1', commune_code:'1', commune:'Boeng Beng'},
				{province_code:'1', district_code:'1', commune_code:'2', commune:'Malai'},
				{province_code:'1', district_code:'1', commune_code:'3', commune:'Ou Sampor'},
				{province_code:'1', district_code:'1', commune_code:'4', commune:'Ou Sralau'},
				{province_code:'1', district_code:'1', commune_code:'5', commune:'Ta Kong'},
				{province_code:'1', district_code:'1', commune_code:'6', commune:'Tuol Pongro'},
				{province_code:'1', district_code:'2', commune_code:'7', commune:'Bantey Neang'},
				{province_code:'1', district_code:'2', commune_code:'8', commune:'Bat Trang'},
				{province_code:'1', district_code:'2', commune_code:'9', commune:'Chamnaom'},
				{province_code:'1', district_code:'2', commune_code:'10', commune:'Kouk Ballangk'},
				{province_code:'1', district_code:'2', commune_code:'11', commune:'Koy Maeng'},
				{province_code:'1', district_code:'2', commune_code:'12', commune:'Ou Prasat'},
				{province_code:'1', district_code:'2', commune_code:'13', commune:'Phnum Touch'},
				{province_code:'1', district_code:'2', commune_code:'14', commune:'Rohat Tuek'},
				{province_code:'1', district_code:'2', commune_code:'15', commune:'Ruessei Kraok'},
				{province_code:'1', district_code:'2', commune_code:'16', commune:'Sambuor'},
				{province_code:'1', district_code:'2', commune_code:'17', commune:'Soea'},
				{province_code:'1', district_code:'2', commune_code:'18', commune:'Srah Reang'},
				{province_code:'1', district_code:'2', commune_code:'19', commune:'Ta Lam'},
				{province_code:'1', district_code:'3', commune_code:'20', commune:'Changha'},
				{province_code:'1', district_code:'3', commune_code:'21', commune:'Koub'},
				{province_code:'1', district_code:'3', commune_code:'22', commune:'Kuttasat'},
				{province_code:'1', district_code:'3', commune_code:'23', commune:'Nimitt'},
				{province_code:'1', district_code:'3', commune_code:'24', commune:'Ou Bei Choan'},
				{province_code:'1', district_code:'3', commune_code:'25', commune:'Paoy Paet'},
				{province_code:'1', district_code:'3', commune_code:'26', commune:'Samraong'},
				{province_code:'1', district_code:'3', commune_code:'27', commune:'Soengh'},
				{province_code:'1', district_code:'3', commune_code:'28', commune:'Souphi'},
				{province_code:'1', district_code:'4', commune_code:'29', commune:'Nam Tau'},
				{province_code:'1', district_code:'4', commune_code:'30', commune:'Paoy Char'},
				{province_code:'1', district_code:'4', commune_code:'31', commune:'Phnum Dei'},
				{province_code:'1', district_code:'4', commune_code:'32', commune:'Ponley'},
				{province_code:'1', district_code:'4', commune_code:'33', commune:'Spean Sraeng'},
				{province_code:'1', district_code:'4', commune_code:'34', commune:'Srah Chik'},
				{province_code:'1', district_code:'5', commune_code:'35', commune:'Chhnuor Mean Chey'},
				{province_code:'1', district_code:'5', commune_code:'36', commune:'Chob Veari'},
				{province_code:'1', district_code:'5', commune_code:'37', commune:'Phnum Lieb'},
				{province_code:'1', district_code:'5', commune_code:'38', commune:'Prasat'},
				{province_code:'1', district_code:'5', commune_code:'39', commune:'Preah Netr Preah'},
				{province_code:'1', district_code:'5', commune_code:'40', commune:'Rohal'},
				{province_code:'1', district_code:'5', commune_code:'41', commune:'Tean Kam'},
				{province_code:'1', district_code:'5', commune_code:'42', commune:'Tuek Chour'},
				{province_code:'1', district_code:'6', commune_code:'43', commune:'Bos Sbov'},
				{province_code:'1', district_code:'6', commune_code:'44', commune:'Kampong Svay'},
				{province_code:'1', district_code:'6', commune_code:'45', commune:'Kaoh Pong Satv'},
				{province_code:'1', district_code:'6', commune_code:'46', commune:'Mkak'},
				{province_code:'1', district_code:'6', commune_code:'47', commune:'Ou Ambel'},
				{province_code:'1', district_code:'6', commune_code:'48', commune:'Phniet'},
				{province_code:'1', district_code:'6', commune_code:'49', commune:'Preah Ponlea'},
				{province_code:'1', district_code:'6', commune_code:'50', commune:'Tuek Thla'},
				{province_code:'1', district_code:'7', commune_code:'51', commune:'Phkoam'},
				{province_code:'1', district_code:'7', commune_code:'52', commune:'Roluos'},
				{province_code:'1', district_code:'7', commune_code:'53', commune:'Sarongk'},
				{province_code:'1', district_code:'7', commune_code:'54', commune:'Sla Kram'},
				{province_code:'1', district_code:'7', commune_code:'55', commune:'Svay Chek'},
				{province_code:'1', district_code:'7', commune_code:'56', commune:'Ta Baen'},
				{province_code:'1', district_code:'7', commune_code:'57', commune:'Ta Phou'},
				{province_code:'1', district_code:'7', commune_code:'58', commune:'Treas'},
				{province_code:'1', district_code:'8', commune_code:'59', commune:'Banteay Chhmar'},
				{province_code:'1', district_code:'8', commune_code:'60', commune:'Kouk Kakthen'},
				{province_code:'1', district_code:'8', commune_code:'61', commune:'Kouk Romiet'},
				{province_code:'1', district_code:'8', commune_code:'62', commune:'Kumru'},
				{province_code:'1', district_code:'8', commune_code:'63', commune:'Phum Thmei'},
				{province_code:'1', district_code:'8', commune_code:'64', commune:'Thma Puok'},
				{province_code:'2', district_code:'9', commune_code:'65', commune:'Kaoh Chiveang'},
				{province_code:'2', district_code:'9', commune_code:'66', commune:'Peam Aek'},
				{province_code:'2', district_code:'9', commune_code:'67', commune:'Preaek Khpob'},
				{province_code:'2', district_code:'9', commune_code:'68', commune:'Preaek Luong'},
				{province_code:'2', district_code:'9', commune_code:'69', commune:'Preaek Norint'},
				{province_code:'2', district_code:'9', commune_code:'70', commune:'Prey Chas'},
				{province_code:'2', district_code:'9', commune_code:'71', commune:'Samraong Knong'},
				{province_code:'2', district_code:'10', commune_code:'72', commune:'Bay Damram'},
				{province_code:'2', district_code:'10', commune_code:'73', commune:'Chaeng Mean Chey'},
				{province_code:'2', district_code:'10', commune_code:'74', commune:'Chheu Teal'},
				{province_code:'2', district_code:'10', commune_code:'75', commune:'Kantueu Muoy'},
				{province_code:'2', district_code:'10', commune_code:'76', commune:'Kantueu Pir'},
				{province_code:'2', district_code:'10', commune_code:'77', commune:'Phnum Sampov'},
				{province_code:'2', district_code:'10', commune_code:'78', commune:'Snoeng'},
				{province_code:'2', district_code:'10', commune_code:'79', commune:'Ta Kream'},
				{province_code:'2', district_code:'11', commune_code:'80', commune:'Chamkar Samraong'},
				{province_code:'2', district_code:'11', commune_code:'81', commune:'Kdol Doun Teav'},
				{province_code:'2', district_code:'11', commune_code:'82', commune:'Ou Char'},
				{province_code:'2', district_code:'11', commune_code:'83', commune:'Ou Mal'},
				{province_code:'2', district_code:'11', commune_code:'84', commune:'Preaek Preah Sdach'},
				{province_code:'2', district_code:'11', commune_code:'85', commune:'Rotanak'},
				{province_code:'2', district_code:'11', commune_code:'86', commune:'Sla Kaet'},
				{province_code:'2', district_code:'11', commune_code:'87', commune:'Svay Pao'},
				{province_code:'2', district_code:'11', commune_code:'88', commune:'Tuol Ta Aek'},
				{province_code:'2', district_code:'11', commune_code:'89', commune:'Voat Kor'},
				{province_code:'2', district_code:'12', commune_code:'90', commune:'Ampil Pram Daeum'},
				{province_code:'2', district_code:'12', commune_code:'91', commune:'Bavel'},
				{province_code:'2', district_code:'12', commune_code:'92', commune:'Kdol Tahen'},
				{province_code:'2', district_code:'12', commune_code:'93', commune:'Khnach Romeas'},
				{province_code:'2', district_code:'12', commune_code:'94', commune:'Lvea'},
				{province_code:'2', district_code:'12', commune_code:'95', commune:'Prey Khpos'},
				{province_code:'2', district_code:'13', commune_code:'96', commune:'Boeng Reang'},
				{province_code:'2', district_code:'13', commune_code:'97', commune:'Kamrieng'},
				{province_code:'2', district_code:'13', commune_code:'98', commune:'Ou Da'},
				{province_code:'2', district_code:'13', commune_code:'99', commune:'Ta Krai'},
				{province_code:'2', district_code:'13', commune_code:'100', commune:'Ta Saen'},
				{province_code:'2', district_code:'13', commune_code:'101', commune:'Trang'},
				{province_code:'2', district_code:'14', commune_code:'102', commune:'Chhnal Moan'},
				{province_code:'2', district_code:'14', commune_code:'103', commune:'Doun Ba'},
				{province_code:'2', district_code:'14', commune_code:'104', commune:'Hab'},
				{province_code:'2', district_code:'14', commune_code:'105', commune:'Koas Krala'},
				{province_code:'2', district_code:'14', commune_code:'106', commune:'Preah Phos'},
				{province_code:'2', district_code:'14', commune_code:'107', commune:'Thipakdei'},
				{province_code:'2', district_code:'15', commune_code:'108', commune:'Chrey'},
				{province_code:'2', district_code:'15', commune_code:'109', commune:'Kakaoh'},
				{province_code:'2', district_code:'15', commune_code:'110', commune:'Kear'},
				{province_code:'2', district_code:'15', commune_code:'111', commune:'Moung'},
				{province_code:'2', district_code:'15', commune_code:'112', commune:'Prek Chik'},
				{province_code:'2', district_code:'15', commune_code:'113', commune:'Prey Svay'},
				{province_code:'2', district_code:'15', commune_code:'114', commune:'Prey Touch'},
				{province_code:'2', district_code:'15', commune_code:'115', commune:'Prey Tralach'},
				{province_code:'2', district_code:'15', commune_code:'116', commune:'Robas Mongkol'},
				{province_code:'2', district_code:'15', commune_code:'117', commune:'Ruessei Krang'},
				{province_code:'2', district_code:'15', commune_code:'118', commune:'Ta Loas'},
				{province_code:'2', district_code:'16', commune_code:'119', commune:'Barang Thleak'},
				{province_code:'2', district_code:'16', commune_code:'120', commune:'Chakrei'},
				{province_code:'2', district_code:'16', commune_code:'121', commune:'Ou Rumduol'},
				{province_code:'2', district_code:'16', commune_code:'122', commune:'Pech Chenda'},
				{province_code:'2', district_code:'16', commune_code:'123', commune:'Phnum Proek'},
				{province_code:'2', district_code:'17', commune_code:'124', commune:'Andaeuk Haeb'},
				{province_code:'2', district_code:'17', commune_code:'125', commune:'Phlov Meas'},
				{province_code:'2', district_code:'17', commune_code:'126', commune:'Sdau'},
				{province_code:'2', district_code:'17', commune_code:'127', commune:'Traeng'},
				{province_code:'2', district_code:'18', commune_code:'128', commune:'Kampong Lpou'},
				{province_code:'2', district_code:'18', commune_code:'129', commune:'Mean Cheay'},
				{province_code:'2', district_code:'18', commune_code:'130', commune:'Ou Samrel'},
				{province_code:'2', district_code:'18', commune_code:'131', commune:'Samlout'},
				{province_code:'2', district_code:'18', commune_code:'132', commune:'Sung'},
				{province_code:'2', district_code:'18', commune_code:'133', commune:'Ta Sanh'},
				{province_code:'2', district_code:'18', commune_code:'134', commune:'Ta Taok'},
				{province_code:'2', district_code:'19', commune_code:'135', commune:'Angkor Ban'},
				{province_code:'2', district_code:'19', commune_code:'136', commune:'Chrey Sema'},
				{province_code:'2', district_code:'19', commune_code:'137', commune:'Sampou Lun'},
				{province_code:'2', district_code:'19', commune_code:'138', commune:'Santepheap'},
				{province_code:'2', district_code:'19', commune_code:'139', commune:'Serei Maen Cheay'},
				{province_code:'2', district_code:'19', commune_code:'140', commune:'Ta Sda'},
				{province_code:'2', district_code:'20', commune_code:'141', commune:'Anlong Vil'},
				{province_code:'2', district_code:'20', commune_code:'142', commune:'Kampong Preah'},
				{province_code:'2', district_code:'20', commune_code:'143', commune:'Kampong Preang'},
				{province_code:'2', district_code:'20', commune_code:'144', commune:'Norea'},
				{province_code:'2', district_code:'20', commune_code:'145', commune:'Ou Dambang Muoy'},
				{province_code:'2', district_code:'20', commune_code:'146', commune:'Ou Dambang Pir'},
				{province_code:'2', district_code:'20', commune_code:'147', commune:'Reang Kesei'},
				{province_code:'2', district_code:'20', commune_code:'148', commune:'Roka'},
				{province_code:'2', district_code:'20', commune_code:'149', commune:'Ta Pon'},
				{province_code:'2', district_code:'20', commune_code:'150', commune:'Voat Ta Muem'},
				{province_code:'2', district_code:'21', commune_code:'151', commune:'Anlong Run'},
				{province_code:'2', district_code:'21', commune_code:'152', commune:'Bansay Traeng'},
				{province_code:'2', district_code:'21', commune_code:'153', commune:'Boeng Pring'},
				{province_code:'2', district_code:'21', commune_code:'108', commune:'Chrey'},
				{province_code:'2', district_code:'21', commune_code:'154', commune:'Chrouy Sdau'},
				{province_code:'2', district_code:'21', commune_code:'155', commune:'Kouk Khmum'},
				{province_code:'2', district_code:'21', commune_code:'156', commune:'Ou Ta Ki'},
				{province_code:'2', district_code:'21', commune_code:'157', commune:'Rung Chrey'},
				{province_code:'2', district_code:'21', commune_code:'158', commune:'Ta Meun'},
				{province_code:'2', district_code:'21', commune_code:'159', commune:'Ta Pung'},
				{province_code:'3', district_code:'22', commune_code:'160', commune:'Batheay'},
				{province_code:'3', district_code:'22', commune_code:'161', commune:'Chbar Ampov'},
				{province_code:'3', district_code:'22', commune_code:'162', commune:'Chealea'},
				{province_code:'3', district_code:'22', commune_code:'163', commune:'Cheung Prey'},
				{province_code:'3', district_code:'22', commune_code:'164', commune:'Me Pring'},
				{province_code:'3', district_code:'22', commune_code:'165', commune:'Ph\'av'},
				{province_code:'3', district_code:'22', commune_code:'166', commune:'Sambour'},
				{province_code:'3', district_code:'22', commune_code:'167', commune:'Sandaek'},
				{province_code:'3', district_code:'22', commune_code:'168', commune:'Tang Krang'},
				{province_code:'3', district_code:'22', commune_code:'169', commune:'Tang Krasang'},
				{province_code:'3', district_code:'22', commune_code:'170', commune:'Trab'},
				{province_code:'3', district_code:'22', commune_code:'171', commune:'Tumnob'},
				{province_code:'3', district_code:'23', commune_code:'172', commune:'Bos Khnaor'},
				{province_code:'3', district_code:'23', commune_code:'173', commune:'Chamkar Andoung'},
				{province_code:'3', district_code:'23', commune_code:'174', commune:'Cheyyou'},
				{province_code:'3', district_code:'23', commune_code:'175', commune:'Lvea Leu'},
				{province_code:'3', district_code:'23', commune_code:'176', commune:'Spueu'},
				{province_code:'3', district_code:'23', commune_code:'177', commune:'Svay Teab'},
				{province_code:'3', district_code:'23', commune_code:'178', commune:'Ta Ong'},
				{province_code:'3', district_code:'23', commune_code:'179', commune:'Ta Prok'},
				{province_code:'3', district_code:'24', commune_code:'180', commune:'Khnaor Dambang'},
				{province_code:'3', district_code:'24', commune_code:'181', commune:'Kouk Rovieng'},
				{province_code:'3', district_code:'24', commune_code:'182', commune:'Phdau Chum'},
				{province_code:'3', district_code:'24', commune_code:'183', commune:'Prey Char'},
				{province_code:'3', district_code:'24', commune_code:'184', commune:'Pring Chrum'},
				{province_code:'3', district_code:'24', commune_code:'185', commune:'Sampong Chey'},
				{province_code:'3', district_code:'24', commune_code:'186', commune:'Sdaeung Chey'},
				{province_code:'3', district_code:'24', commune_code:'187', commune:'Soutip'},
				{province_code:'3', district_code:'24', commune_code:'188', commune:'Srama'},
				{province_code:'3', district_code:'24', commune_code:'189', commune:'Trapeang Kor'},
				{province_code:'3', district_code:'25', commune_code:'190', commune:'Boeng Kok'},
				{province_code:'3', district_code:'25', commune_code:'191', commune:'Kampong Cham'},
				{province_code:'3', district_code:'25', commune_code:'192', commune:'Sambuor Meas'},
				{province_code:'3', district_code:'25', commune_code:'193', commune:'Veal Vong'},
				{province_code:'3', district_code:'26', commune_code:'194', commune:'Ampil'},
				{province_code:'3', district_code:'26', commune_code:'195', commune:'Han Chey'},
				{province_code:'3', district_code:'26', commune_code:'196', commune:'Kaoh Mitt'},
				{province_code:'3', district_code:'26', commune_code:'197', commune:'Kaoh Roka'},
				{province_code:'3', district_code:'26', commune_code:'198', commune:'Kaoh Samraong'},
				{province_code:'3', district_code:'26', commune_code:'199', commune:'Kaoh Tontuem'},
				{province_code:'3', district_code:'26', commune_code:'200', commune:'Kien Chrey'},
				{province_code:'3', district_code:'26', commune_code:'201', commune:'Kokor'},
				{province_code:'3', district_code:'26', commune_code:'202', commune:'Krala'},
				{province_code:'3', district_code:'26', commune_code:'203', commune:'Ou Svay'},
				{province_code:'3', district_code:'26', commune_code:'204', commune:'Ro\'ang'},
				{province_code:'3', district_code:'26', commune_code:'205', commune:'Rumchek'},
				{province_code:'3', district_code:'26', commune_code:'206', commune:'Srak'},
				{province_code:'3', district_code:'26', commune_code:'207', commune:'Trean'},
				{province_code:'3', district_code:'26', commune_code:'208', commune:'Vihear Thum'},
				{province_code:'3', district_code:'27', commune_code:'135', commune:'Angkor Ban'},
				{province_code:'3', district_code:'27', commune_code:'209', commune:'Kang Ta Noeng'},
				{province_code:'3', district_code:'27', commune_code:'210', commune:'Khchau'},
				{province_code:'3', district_code:'27', commune_code:'211', commune:'Peam Chi Kang'},
				{province_code:'3', district_code:'27', commune_code:'212', commune:'Preaek Koy'},
				{province_code:'3', district_code:'27', commune_code:'213', commune:'Preaek Krabau'},
				{province_code:'3', district_code:'27', commune_code:'214', commune:'Reay Pay'},
				{province_code:'3', district_code:'27', commune_code:'215', commune:'Roka Ar'},
				{province_code:'3', district_code:'27', commune_code:'216', commune:'Roka Koy'},
				{province_code:'3', district_code:'27', commune_code:'126', commune:'Sdau'},
				{province_code:'3', district_code:'27', commune_code:'217', commune:'Sour Kong'},
				{province_code:'3', district_code:'28', commune_code:'218', commune:'Kampong Reab'},
				{province_code:'3', district_code:'28', commune_code:'219', commune:'Kaoh Soutin'},
				{province_code:'3', district_code:'28', commune_code:'220', commune:'Lve'},
				{province_code:'3', district_code:'28', commune_code:'221', commune:'Moha Khnhoung'},
				{province_code:'3', district_code:'28', commune_code:'222', commune:'Moha Leaph'},
				{province_code:'3', district_code:'28', commune_code:'223', commune:'Peam Prathnuoh'},
				{province_code:'3', district_code:'28', commune_code:'224', commune:'Pongro'},
				{province_code:'3', district_code:'28', commune_code:'225', commune:'Preaek Ta Nong'},
				{province_code:'3', district_code:'29', commune_code:'226', commune:'Baray'},
				{province_code:'3', district_code:'29', commune_code:'227', commune:'Boeng Nay'},
				{province_code:'3', district_code:'29', commune_code:'228', commune:'Chrey Vien'},
				{province_code:'3', district_code:'29', commune_code:'229', commune:'Khvet Thum'},
				{province_code:'3', district_code:'29', commune_code:'230', commune:'Kor'},
				{province_code:'3', district_code:'29', commune_code:'231', commune:'Krouch'},
				{province_code:'3', district_code:'29', commune_code:'94', commune:'Lvea'},
				{province_code:'3', district_code:'29', commune_code:'232', commune:'Mien'},
				{province_code:'3', district_code:'29', commune_code:'233', commune:'Prey Chhor'},
				{province_code:'3', district_code:'29', commune_code:'26', commune:'Samraong'},
				{province_code:'3', district_code:'29', commune_code:'234', commune:'Sour Saen'},
				{province_code:'3', district_code:'29', commune_code:'235', commune:'Srangae'},
				{province_code:'3', district_code:'29', commune_code:'236', commune:'Thma Pun'},
				{province_code:'3', district_code:'29', commune_code:'237', commune:'Tong Rong'},
				{province_code:'3', district_code:'29', commune_code:'238', commune:'Trapeang Preah'},
				{province_code:'3', district_code:'30', commune_code:'226', commune:'Baray'},
				{province_code:'3', district_code:'30', commune_code:'239', commune:'Chi Bal'},
				{province_code:'3', district_code:'30', commune_code:'240', commune:'Kaoh Andaet'},
				{province_code:'3', district_code:'30', commune_code:'241', commune:'Khnar Sa'},
				{province_code:'3', district_code:'30', commune_code:'242', commune:'Mean Chey'},
				{province_code:'3', district_code:'30', commune_code:'243', commune:'Pram Yam'},
				{province_code:'3', district_code:'30', commune_code:'244', commune:'Preaek Dambouk'},
				{province_code:'3', district_code:'30', commune_code:'245', commune:'Preaek Pou'},
				{province_code:'3', district_code:'30', commune_code:'246', commune:'Preaek Rumdeng'},
				{province_code:'3', district_code:'30', commune_code:'247', commune:'Pteah Kandal'},
				{province_code:'3', district_code:'30', commune_code:'248', commune:'Ruessei Srok'},
				{province_code:'3', district_code:'30', commune_code:'249', commune:'Svay Pou'},
				{province_code:'3', district_code:'30', commune_code:'250', commune:'Svay Sach Phnum'},
				{province_code:'3', district_code:'30', commune_code:'251', commune:'Tong Tralach'},
				{province_code:'3', district_code:'31', commune_code:'252', commune:'Areaks Tnaot'},
				{province_code:'3', district_code:'31', commune_code:'253', commune:'Dang Kdar'},
				{province_code:'3', district_code:'31', commune_code:'254', commune:'Khpob Ta Nguon'},
				{province_code:'3', district_code:'31', commune_code:'255', commune:'Me Sar Chrey'},
				{province_code:'3', district_code:'31', commune_code:'256', commune:'Ou Mlu'},
				{province_code:'3', district_code:'31', commune_code:'257', commune:'Peam Kaoh Sna'},
				{province_code:'3', district_code:'31', commune_code:'258', commune:'Preaek Bak'},
				{province_code:'3', district_code:'31', commune_code:'259', commune:'Preaek Kak'},
				{province_code:'3', district_code:'31', commune_code:'260', commune:'Preah Andoung'},
				{province_code:'3', district_code:'31', commune_code:'261', commune:'Soupheas'},
				{province_code:'3', district_code:'31', commune_code:'262', commune:'Tuol Preah Khleang'},
				{province_code:'3', district_code:'31', commune_code:'263', commune:'Tuol Sambuor'},
				{province_code:'4', district_code:'32', commune_code:'264', commune:'Anhchanh Rung'},
				{province_code:'4', district_code:'32', commune_code:'265', commune:'Chak'},
				{province_code:'4', district_code:'32', commune_code:'266', commune:'Chhnok Tru'},
				{province_code:'4', district_code:'32', commune_code:'267', commune:'Kampong Preah Kokir'},
				{province_code:'4', district_code:'32', commune_code:'268', commune:'Khon Rang'},
				{province_code:'4', district_code:'32', commune_code:'269', commune:'Melum'},
				{province_code:'4', district_code:'32', commune_code:'270', commune:'Pech Changvar'},
				{province_code:'4', district_code:'32', commune_code:'271', commune:'Phsar'},
				{province_code:'4', district_code:'32', commune_code:'32', commune:'Ponley'},
				{province_code:'4', district_code:'32', commune_code:'272', commune:'Popel'},
				{province_code:'4', district_code:'32', commune_code:'273', commune:'Trapeang Chan'},
				{province_code:'4', district_code:'33', commune_code:'274', commune:'Chol Sar'},
				{province_code:'4', district_code:'33', commune_code:'275', commune:'Kampong Os'},
				{province_code:'4', district_code:'33', commune_code:'276', commune:'Kaoh'},
				{province_code:'4', district_code:'33', commune_code:'277', commune:'Peam Chhkaok'},
				{province_code:'4', district_code:'33', commune_code:'278', commune:'Prey Kri'},
				{province_code:'4', district_code:'34', commune_code:'279', commune:'Kampong Chhnang'},
				{province_code:'4', district_code:'34', commune_code:'280', commune:'Khsam'},
				{province_code:'4', district_code:'34', commune_code:'281', commune:'Ph\'er'},
				{province_code:'4', district_code:'34', commune_code:'282', commune:'Phsar Chhnang'},
				{province_code:'4', district_code:'35', commune_code:'283', commune:'Chranouk'},
				{province_code:'4', district_code:'35', commune_code:'284', commune:'Dar'},
				{province_code:'4', district_code:'35', commune_code:'285', commune:'Kampong Hau'},
				{province_code:'4', district_code:'35', commune_code:'286', commune:'Phlov Tuk'},
				{province_code:'4', district_code:'35', commune_code:'287', commune:'Pou'},
				{province_code:'4', district_code:'35', commune_code:'288', commune:'Pralay Meas'},
				{province_code:'4', district_code:'35', commune_code:'289', commune:'Samraong Saen'},
				{province_code:'4', district_code:'35', commune_code:'290', commune:'Svay Rumpear'},
				{province_code:'4', district_code:'35', commune_code:'291', commune:'Trangel'},
				{province_code:'4', district_code:'36', commune_code:'292', commune:'Ampil Tuek'},
				{province_code:'4', district_code:'36', commune_code:'293', commune:'Chhuk Sa'},
				{province_code:'4', district_code:'36', commune_code:'294', commune:'Chres'},
				{province_code:'4', district_code:'36', commune_code:'295', commune:'Kampong Tralach'},
				{province_code:'4', district_code:'36', commune_code:'296', commune:'Longveaek'},
				{province_code:'4', district_code:'36', commune_code:'297', commune:'Ou Ruessei'},
				{province_code:'4', district_code:'36', commune_code:'298', commune:'Peani'},
				{province_code:'4', district_code:'36', commune_code:'299', commune:'Saeb'},
				{province_code:'4', district_code:'36', commune_code:'300', commune:'Ta Ches'},
				{province_code:'4', district_code:'36', commune_code:'301', commune:'Thma Edth'},
				{province_code:'4', district_code:'37', commune_code:'302', commune:'Andoung Snay'},
				{province_code:'4', district_code:'37', commune_code:'303', commune:'Banteay Preal'},
				{province_code:'4', district_code:'37', commune_code:'304', commune:'Cheung Kreav'},
				{province_code:'4', district_code:'37', commune_code:'305', commune:'Chrey Bak'},
				{province_code:'4', district_code:'37', commune_code:'306', commune:'Kouk Banteay'},
				{province_code:'4', district_code:'37', commune_code:'307', commune:'Krang Leav'},
				{province_code:'4', district_code:'37', commune_code:'224', commune:'Pongro'},
				{province_code:'4', district_code:'37', commune_code:'308', commune:'Prasneb'},
				{province_code:'4', district_code:'37', commune_code:'309', commune:'Prey Mul'},
				{province_code:'4', district_code:'37', commune_code:'310', commune:'Rolea B\'ier'},
				{province_code:'4', district_code:'37', commune_code:'311', commune:'Srae Thmei'},
				{province_code:'4', district_code:'37', commune_code:'312', commune:'Svay Chrum'},
				{province_code:'4', district_code:'37', commune_code:'313', commune:'Tuek Hout'},
				{province_code:'4', district_code:'38', commune_code:'314', commune:'Chhean Laeung'},
				{province_code:'4', district_code:'38', commune_code:'315', commune:'Khnar Chhmar'},
				{province_code:'4', district_code:'38', commune_code:'316', commune:'Krang Lvea'},
				{province_code:'4', district_code:'38', commune_code:'317', commune:'Peam'},
				{province_code:'4', district_code:'38', commune_code:'318', commune:'Sedthei'},
				{province_code:'4', district_code:'38', commune_code:'319', commune:'Svay'},
				{province_code:'4', district_code:'38', commune_code:'320', commune:'Svay Chuk'},
				{province_code:'4', district_code:'38', commune_code:'321', commune:'Tbaeng Khpos'},
				{province_code:'4', district_code:'38', commune_code:'322', commune:'Thlok Vien'},
				{province_code:'4', district_code:'39', commune_code:'323', commune:'Akphivoadth'},
				{province_code:'4', district_code:'39', commune_code:'324', commune:'Chaong Maong'},
				{province_code:'4', district_code:'39', commune_code:'325', commune:'Chieb'},
				{province_code:'4', district_code:'39', commune_code:'326', commune:'Kbal Tuek'},
				{province_code:'4', district_code:'39', commune_code:'327', commune:'Khlong Popok'},
				{province_code:'4', district_code:'39', commune_code:'328', commune:'Krang Skear'},
				{province_code:'4', district_code:'39', commune_code:'169', commune:'Tang Krasang'},
				{province_code:'4', district_code:'39', commune_code:'329', commune:'Toul Khpos'},
				{province_code:'5', district_code:'40', commune_code:'330', commune:'Haong Samnam'},
				{province_code:'5', district_code:'40', commune_code:'331', commune:'Reaksmei Sameakki'},
				{province_code:'5', district_code:'40', commune_code:'332', commune:'Sangkae Satob'},
				{province_code:'5', district_code:'40', commune_code:'333', commune:'Ta Sal'},
				{province_code:'5', district_code:'40', commune_code:'334', commune:'Trapeang Chour'},
				{province_code:'5', district_code:'41', commune_code:'335', commune:'Basedth'},
				{province_code:'5', district_code:'41', commune_code:'336', commune:'Kak'},
				{province_code:'5', district_code:'41', commune_code:'337', commune:'Kat Phluk'},
				{province_code:'5', district_code:'41', commune_code:'338', commune:'Nitean'},
				{province_code:'5', district_code:'41', commune_code:'339', commune:'Pheakdei'},
				{province_code:'5', district_code:'41', commune_code:'340', commune:'Pheari Mean Chey'},
				{province_code:'5', district_code:'41', commune_code:'341', commune:'Phong'},
				{province_code:'5', district_code:'41', commune_code:'342', commune:'Pou Angkrang'},
				{province_code:'5', district_code:'41', commune_code:'343', commune:'Pou Chamraeun'},
				{province_code:'5', district_code:'41', commune_code:'344', commune:'Pou Mreal'},
				{province_code:'5', district_code:'41', commune_code:'345', commune:'Preah Khae'},
				{province_code:'5', district_code:'41', commune_code:'346', commune:'Svay Chacheb'},
				{province_code:'5', district_code:'41', commune_code:'347', commune:'Svay Rumpea'},
				{province_code:'5', district_code:'41', commune_code:'348', commune:'Toul Ampil'},
				{province_code:'5', district_code:'41', commune_code:'349', commune:'Toul Sala'},
				{province_code:'5', district_code:'42', commune_code:'350', commune:'Chbar Mon'},
				{province_code:'5', district_code:'42', commune_code:'351', commune:'Kandaol Dom'},
				{province_code:'5', district_code:'42', commune_code:'352', commune:'Roka Thum'},
				{province_code:'5', district_code:'42', commune_code:'353', commune:'Sopoar Tep'},
				{province_code:'5', district_code:'42', commune_code:'354', commune:'Svay Kravan'},
				{province_code:'5', district_code:'43', commune_code:'355', commune:'Angk Popel'},
				{province_code:'5', district_code:'43', commune_code:'356', commune:'Chongruk'},
				{province_code:'5', district_code:'43', commune_code:'357', commune:'Moha Ruessei'},
				{province_code:'5', district_code:'43', commune_code:'358', commune:'Pechr Muni'},
				{province_code:'5', district_code:'43', commune_code:'359', commune:'Preah Nipean'},
				{province_code:'5', district_code:'43', commune_code:'360', commune:'Prey Nheat'},
				{province_code:'5', district_code:'43', commune_code:'361', commune:'Prey Vihear'},
				{province_code:'5', district_code:'43', commune_code:'362', commune:'Roka Kaoh'},
				{province_code:'5', district_code:'43', commune_code:'363', commune:'Sdok'},
				{province_code:'5', district_code:'43', commune_code:'364', commune:'Snam Krapeu'},
				{province_code:'5', district_code:'43', commune_code:'365', commune:'Srang'},
				{province_code:'5', district_code:'43', commune_code:'366', commune:'Tuek L\'ak'},
				{province_code:'5', district_code:'43', commune_code:'367', commune:'Veal'},
				{province_code:'5', district_code:'44', commune_code:'368', commune:'Chant Saen'},
				{province_code:'5', district_code:'44', commune_code:'369', commune:'Cheung Roas'},
				{province_code:'5', district_code:'44', commune_code:'370', commune:'Chumpu Proeks'},
				{province_code:'5', district_code:'44', commune_code:'371', commune:'Damnak Reang'},
				{province_code:'5', district_code:'44', commune_code:'372', commune:'Khsem Khsan'},
				{province_code:'5', district_code:'44', commune_code:'373', commune:'Krang Chek'},
				{province_code:'5', district_code:'44', commune_code:'242', commune:'Mean Chey'},
				{province_code:'5', district_code:'44', commune_code:'374', commune:'Peang Lvea'},
				{province_code:'5', district_code:'44', commune_code:'13', commune:'Phnum Touch'},
				{province_code:'5', district_code:'44', commune_code:'375', commune:'Preah Srae'},
				{province_code:'5', district_code:'44', commune_code:'376', commune:'Prey Krasang'},
				{province_code:'5', district_code:'44', commune_code:'377', commune:'Trach Tong'},
				{province_code:'5', district_code:'44', commune_code:'378', commune:'Veal Pung'},
				{province_code:'5', district_code:'44', commune_code:'379', commune:'Veang Chas'},
				{province_code:'5', district_code:'44', commune_code:'380', commune:'Yutth Sameakki'},
				{province_code:'5', district_code:'45', commune_code:'381', commune:'Chambak'},
				{province_code:'5', district_code:'45', commune_code:'382', commune:'Choam Sangkae'},
				{province_code:'5', district_code:'45', commune_code:'383', commune:'Dambouk Rung'},
				{province_code:'5', district_code:'45', commune_code:'384', commune:'Kiri Voan'},
				{province_code:'5', district_code:'45', commune_code:'385', commune:'Krang Dei Vay'},
				{province_code:'5', district_code:'45', commune_code:'386', commune:'Moha Sang'},
				{province_code:'5', district_code:'45', commune_code:'387', commune:'Ou'},
				{province_code:'5', district_code:'45', commune_code:'388', commune:'Prey Kmeng'},
				{province_code:'5', district_code:'45', commune_code:'389', commune:'Prey Rumduol'},
				{province_code:'5', district_code:'45', commune_code:'390', commune:'Tang Samraong'},
				{province_code:'5', district_code:'45', commune_code:'391', commune:'Tang Sya'},
				{province_code:'5', district_code:'45', commune_code:'392', commune:'Traeng Trayueng'},
				{province_code:'5', district_code:'46', commune_code:'393', commune:'Kahaeng'},
				{province_code:'5', district_code:'46', commune_code:'394', commune:'Khtum Krang'},
				{province_code:'5', district_code:'46', commune_code:'395', commune:'Krang Ampil'},
				{province_code:'5', district_code:'46', commune_code:'396', commune:'Pneay'},
				{province_code:'5', district_code:'46', commune_code:'397', commune:'Roleang Chak'},
				{province_code:'5', district_code:'46', commune_code:'398', commune:'Roleang Kreul'},
				{province_code:'5', district_code:'46', commune_code:'399', commune:'Saen Dei'},
				{province_code:'5', district_code:'46', commune_code:'166', commune:'Sambour'},
				{province_code:'5', district_code:'46', commune_code:'400', commune:'Samraong Tong'},
				{province_code:'5', district_code:'46', commune_code:'401', commune:'Skuh'},
				{province_code:'5', district_code:'46', commune_code:'402', commune:'Tang Krouch'},
				{province_code:'5', district_code:'46', commune_code:'403', commune:'Thommoda Ar'},
				{province_code:'5', district_code:'46', commune_code:'404', commune:'Trapeang Kong'},
				{province_code:'5', district_code:'46', commune_code:'405', commune:'Tumpoar Meas'},
				{province_code:'5', district_code:'46', commune_code:'406', commune:'Voa Sa'},
				{province_code:'5', district_code:'47', commune_code:'407', commune:'Amleang'},
				{province_code:'5', district_code:'47', commune_code:'408', commune:'Monourom'},
				{province_code:'5', district_code:'47', commune_code:'409', commune:'Prambei Mom'},
				{province_code:'5', district_code:'47', commune_code:'410', commune:'Rung Roeang'},
				{province_code:'5', district_code:'47', commune_code:'411', commune:'Toap Mean'},
				{province_code:'5', district_code:'47', commune_code:'412', commune:'Veal Pon'},
				{province_code:'5', district_code:'47', commune_code:'413', commune:'Yea Angk'},
				{province_code:'6', district_code:'48', commune_code:'414', commune:'Andoung Pou'},
				{province_code:'6', district_code:'48', commune_code:'415', commune:'Bak Sna'},
				{province_code:'6', district_code:'48', commune_code:'416', commune:'Ballangk'},
				{province_code:'6', district_code:'48', commune_code:'226', commune:'Baray'},
				{province_code:'6', district_code:'48', commune_code:'417', commune:'Boeng'},
				{province_code:'6', district_code:'48', commune_code:'418', commune:'Chaeung Daeung'},
				{province_code:'6', district_code:'48', commune_code:'419', commune:'Chhuk Khsach'},
				{province_code:'6', district_code:'48', commune_code:'420', commune:'Chong Doung'},
				{province_code:'6', district_code:'48', commune_code:'421', commune:'Chranieng'},
				{province_code:'6', district_code:'48', commune_code:'422', commune:'Chrolong'},
				{province_code:'6', district_code:'48', commune_code:'423', commune:'Kokir Thum'},
				{province_code:'6', district_code:'48', commune_code:'424', commune:'Krava'},
				{province_code:'6', district_code:'48', commune_code:'224', commune:'Pongro'},
				{province_code:'6', district_code:'48', commune_code:'425', commune:'Sou Young'},
				{province_code:'6', district_code:'48', commune_code:'426', commune:'Sralau'},
				{province_code:'6', district_code:'48', commune_code:'427', commune:'Svay Phleung'},
				{province_code:'6', district_code:'48', commune_code:'428', commune:'Tnaot Chum'},
				{province_code:'6', district_code:'48', commune_code:'429', commune:'Treal'},
				{province_code:'6', district_code:'49', commune_code:'430', commune:'Chey'},
				{province_code:'6', district_code:'49', commune_code:'431', commune:'Damrei Slab'},
				{province_code:'6', district_code:'49', commune_code:'432', commune:'Kampong Kou'},
				{province_code:'6', district_code:'49', commune_code:'44', commune:'Kampong Svay'},
				{province_code:'6', district_code:'49', commune_code:'433', commune:'Ni Pechr'},
				{province_code:'6', district_code:'49', commune_code:'434', commune:'Phat Sanday'},
				{province_code:'6', district_code:'49', commune_code:'435', commune:'San Kor'},
				{province_code:'6', district_code:'49', commune_code:'436', commune:'Tbaeng'},
				{province_code:'6', district_code:'49', commune_code:'437', commune:'Trapeang Ruessei'},
				{province_code:'6', district_code:'50', commune_code:'438', commune:'Doung'},
				{province_code:'6', district_code:'50', commune_code:'439', commune:'Kraya'},
				{province_code:'6', district_code:'50', commune_code:'440', commune:'Phan Nheum'},
				{province_code:'6', district_code:'50', commune_code:'441', commune:'Sa Kream'},
				{province_code:'6', district_code:'50', commune_code:'442', commune:'Sala Visai'},
				{province_code:'6', district_code:'50', commune_code:'443', commune:'Sameakki'},
				{province_code:'6', district_code:'50', commune_code:'444', commune:'Tuol Kreul'},
				{province_code:'6', district_code:'51', commune_code:'445', commune:'Chhuk'},
				{province_code:'6', district_code:'51', commune_code:'446', commune:'Koul'},
				{province_code:'6', district_code:'51', commune_code:'166', commune:'Sambour'},
				{province_code:'6', district_code:'51', commune_code:'447', commune:'Sraeung'},
				{province_code:'6', district_code:'51', commune_code:'448', commune:'Tang Krasau'},
				{province_code:'6', district_code:'52', commune_code:'74', commune:'Chheu Teal'},
				{province_code:'6', district_code:'52', commune_code:'449', commune:'Dang Kambet'},
				{province_code:'6', district_code:'52', commune_code:'450', commune:'Klaeng'},
				{province_code:'6', district_code:'52', commune_code:'242', commune:'Mean Chey'},
				{province_code:'6', district_code:'52', commune_code:'451', commune:'Mean Ritth'},
				{province_code:'6', district_code:'52', commune_code:'452', commune:'Ngan'},
				{province_code:'6', district_code:'52', commune_code:'453', commune:'Sandan'},
				{province_code:'6', district_code:'52', commune_code:'454', commune:'Sochet'},
				{province_code:'6', district_code:'52', commune_code:'455', commune:'Tum Ring'},
				{province_code:'6', district_code:'53', commune_code:'456', commune:'Boeng Lvea'},
				{province_code:'6', district_code:'53', commune_code:'457', commune:'Chroab'},
				{province_code:'6', district_code:'53', commune_code:'109', commune:'Kakaoh'},
				{province_code:'6', district_code:'53', commune_code:'458', commune:'Kampong Thma'},
				{province_code:'6', district_code:'53', commune_code:'439', commune:'Kraya'},
				{province_code:'6', district_code:'53', commune_code:'459', commune:'Pnov'},
				{province_code:'6', district_code:'53', commune_code:'38', commune:'Prasat'},
				{province_code:'6', district_code:'53', commune_code:'169', commune:'Tang Krasang'},
				{province_code:'6', district_code:'53', commune_code:'460', commune:'Ti Pou'},
				{province_code:'6', district_code:'54', commune_code:'461', commune:'Banteay Stoung'},
				{province_code:'6', district_code:'54', commune_code:'462', commune:'Chamnar Kraom'},
				{province_code:'6', district_code:'54', commune_code:'463', commune:'Chamnar Leu'},
				{province_code:'6', district_code:'54', commune_code:'464', commune:'Kampong Chen Cheung'},
				{province_code:'6', district_code:'54', commune_code:'465', commune:'Kampong Chen Tboung'},
				{province_code:'6', district_code:'54', commune_code:'466', commune:'Msar Krang'},
				{province_code:'6', district_code:'54', commune_code:'467', commune:'Peam Bang'},
				{province_code:'6', district_code:'54', commune_code:'468', commune:'Popok'},
				{province_code:'6', district_code:'54', commune_code:'469', commune:'Pralay'},
				{province_code:'6', district_code:'54', commune_code:'470', commune:'Preah Damrei'},
				{province_code:'6', district_code:'54', commune_code:'410', commune:'Rung Roeang'},
				{province_code:'6', district_code:'54', commune_code:'471', commune:'Samprouch'},
				{province_code:'6', district_code:'54', commune_code:'472', commune:'Trea'},
				{province_code:'6', district_code:'55', commune_code:'473', commune:'Achar Leak'},
				{province_code:'6', district_code:'55', commune_code:'474', commune:'Damrei Choan Khla'},
				{province_code:'6', district_code:'55', commune_code:'475', commune:'Kampong Krabau'},
				{province_code:'6', district_code:'55', commune_code:'476', commune:'Kampong Roteh'},
				{province_code:'6', district_code:'55', commune_code:'477', commune:'Kampong Thum'},
				{province_code:'6', district_code:'55', commune_code:'478', commune:'Kdei Doung'},
				{province_code:'6', district_code:'55', commune_code:'479', commune:'Ou Kanthor'},
				{province_code:'6', district_code:'55', commune_code:'480', commune:'Prey Kuy'},
				{province_code:'6', district_code:'55', commune_code:'481', commune:'Prey Ta Hu'},
				{province_code:'6', district_code:'55', commune_code:'482', commune:'Srayov'},
				{province_code:'6', district_code:'55', commune_code:'483', commune:'Tboung Krapeu'},
				{province_code:'7', district_code:'56', commune_code:'484', commune:'Angkor Chey'},
				{province_code:'7', district_code:'56', commune_code:'485', commune:'Angk Phnum Touch'},
				{province_code:'7', district_code:'56', commune_code:'486', commune:'Champei'},
				{province_code:'7', district_code:'56', commune_code:'487', commune:'Daeum Doung'},
				{province_code:'7', district_code:'56', commune_code:'488', commune:'Dambouk Khpos'},
				{province_code:'7', district_code:'56', commune_code:'489', commune:'Dan Koum'},
				{province_code:'7', district_code:'56', commune_code:'490', commune:'Mroum'},
				{province_code:'7', district_code:'56', commune_code:'491', commune:'Phnum Kong'},
				{province_code:'7', district_code:'56', commune_code:'492', commune:'Praphnum'},
				{province_code:'7', district_code:'56', commune_code:'493', commune:'Samlanh'},
				{province_code:'7', district_code:'56', commune_code:'494', commune:'Tani'},
				{province_code:'7', district_code:'57', commune_code:'495', commune:'Banteay Meas Khang Kaeut'},
				{province_code:'7', district_code:'57', commune_code:'496', commune:'Banteay Meas Khang Lech'},
				{province_code:'7', district_code:'57', commune_code:'497', commune:'Prey Tonle'},
				{province_code:'7', district_code:'57', commune_code:'498', commune:'Samraong Kraom'},
				{province_code:'7', district_code:'57', commune_code:'499', commune:'Samraong Leu'},
				{province_code:'7', district_code:'57', commune_code:'500', commune:'Sdach Kong Khang Cheung'},
				{province_code:'7', district_code:'57', commune_code:'501', commune:'Sdach Kong Khang Lech'},
				{province_code:'7', district_code:'57', commune_code:'502', commune:'Sdach Kong Khang Tboung'},
				{province_code:'7', district_code:'57', commune_code:'503', commune:'Tnaot Chong Srang'},
				{province_code:'7', district_code:'57', commune_code:'504', commune:'Trapeang Sala Khang Kaeut'},
				{province_code:'7', district_code:'57', commune_code:'505', commune:'Trapeang Sala Khang Lech'},
				{province_code:'7', district_code:'57', commune_code:'506', commune:'Tuk Meas Khang Kaeut'},
				{province_code:'7', district_code:'57', commune_code:'507', commune:'Tuk Meas Khang Lech'},
				{province_code:'7', district_code:'57', commune_code:'508', commune:'Voat Angk Khang Cheung'},
				{province_code:'7', district_code:'57', commune_code:'509', commune:'Voat Angk Khang Tboung'},
				{province_code:'7', district_code:'58', commune_code:'510', commune:'Baniev'},
				{province_code:'7', district_code:'58', commune_code:'511', commune:'Boeng Nimol'},
				{province_code:'7', district_code:'58', commune_code:'445', commune:'Chhuk'},
				{province_code:'7', district_code:'58', commune_code:'512', commune:'Doun Yay'},
				{province_code:'7', district_code:'58', commune_code:'513', commune:'Krang Sbov'},
				{province_code:'7', district_code:'58', commune_code:'514', commune:'Krang Snay'},
				{province_code:'7', district_code:'58', commune_code:'515', commune:'Lbaeuk'},
				{province_code:'7', district_code:'58', commune_code:'242', commune:'Mean Chey'},
				{province_code:'7', district_code:'58', commune_code:'516', commune:'Nareay'},
				{province_code:'7', district_code:'58', commune_code:'517', commune:'Satv Pong'},
				{province_code:'7', district_code:'58', commune_code:'518', commune:'Ta Kaen'},
				{province_code:'7', district_code:'58', commune_code:'519', commune:'Tramaeng'},
				{province_code:'7', district_code:'58', commune_code:'520', commune:'Trapeang Bei'},
				{province_code:'7', district_code:'58', commune_code:'521', commune:'Trapeang Plang'},
				{province_code:'7', district_code:'59', commune_code:'294', commune:'Chres'},
				{province_code:'7', district_code:'59', commune_code:'522', commune:'Chumpu Voan'},
				{province_code:'7', district_code:'59', commune_code:'523', commune:'Snay Anhchet'},
				{province_code:'7', district_code:'59', commune_code:'524', commune:'Srae Chaeng'},
				{province_code:'7', district_code:'59', commune_code:'525', commune:'Srae Knong'},
				{province_code:'7', district_code:'59', commune_code:'526', commune:'Srae Samraong'},
				{province_code:'7', district_code:'59', commune_code:'527', commune:'Trapeang Reang'},
				{province_code:'7', district_code:'60', commune_code:'528', commune:'Angkor Meas'},
				{province_code:'7', district_code:'60', commune_code:'529', commune:'Damnak Sokram'},
				{province_code:'7', district_code:'60', commune_code:'530', commune:'Dang Tong'},
				{province_code:'7', district_code:'60', commune_code:'531', commune:'Khcheay Khang Cheung'},
				{province_code:'7', district_code:'60', commune_code:'532', commune:'Khcheay Khang Tboung'},
				{province_code:'7', district_code:'60', commune_code:'533', commune:'L\'ang'},
				{province_code:'7', district_code:'60', commune_code:'451', commune:'Mean Ritth'},
				{province_code:'7', district_code:'60', commune_code:'534', commune:'Srae Chea Khang Cheung'},
				{province_code:'7', district_code:'60', commune_code:'535', commune:'Srae Chea Khang Tboung'},
				{province_code:'7', district_code:'60', commune_code:'536', commune:'Totung'},
				{province_code:'7', district_code:'61', commune_code:'537', commune:'Andoung Khmaer'},
				{province_code:'7', district_code:'61', commune_code:'538', commune:'Kampong Bay'},
				{province_code:'7', district_code:'61', commune_code:'539', commune:'Kampong Kandal'},
				{province_code:'7', district_code:'61', commune_code:'395', commune:'Krang Ampil'},
				{province_code:'7', district_code:'61', commune_code:'540', commune:'Traeuy Kaoh'},
				{province_code:'7', district_code:'62', commune_code:'541', commune:'Boeng Sala Khang Cheung'},
				{province_code:'7', district_code:'62', commune_code:'542', commune:'Boeng Sala Khang Tboung'},
				{province_code:'7', district_code:'62', commune_code:'543', commune:'Damnak Kantuot Khang Cheung'},
				{province_code:'7', district_code:'62', commune_code:'544', commune:'Damnak Kantuot Khang Tboung'},
				{province_code:'7', district_code:'62', commune_code:'545', commune:'Kampong Trach Khang Kaeut'},
				{province_code:'7', district_code:'62', commune_code:'546', commune:'Kampong Trach Khang Lech'},
				{province_code:'7', district_code:'62', commune_code:'547', commune:'Kanthaor Khang Cheung'},
				{province_code:'7', district_code:'62', commune_code:'548', commune:'Kanthaor Khang kaeut'},
				{province_code:'7', district_code:'62', commune_code:'549', commune:'Kanthaor Khang Lech'},
				{province_code:'7', district_code:'62', commune_code:'550', commune:'Preaek Kroes'},
				{province_code:'7', district_code:'62', commune_code:'551', commune:'Ruessei Srok Khang Kaeut'},
				{province_code:'7', district_code:'62', commune_code:'552', commune:'Ruessei Srok Khang Lech'},
				{province_code:'7', district_code:'62', commune_code:'553', commune:'Svay Tong Khang Cheung'},
				{province_code:'7', district_code:'62', commune_code:'554', commune:'Svay Tong Khang Tboung'},
				{province_code:'7', district_code:'63', commune_code:'555', commune:'Boeng Tuk'},
				{province_code:'7', district_code:'63', commune_code:'556', commune:'Chum Kriel'},
				{province_code:'7', district_code:'63', commune_code:'557', commune:'Kampong Kraeng'},
				{province_code:'7', district_code:'63', commune_code:'558', commune:'Kampong Samraong'},
				{province_code:'7', district_code:'63', commune_code:'559', commune:'Kandal'},
				{province_code:'7', district_code:'63', commune_code:'560', commune:'Kaoh Touch'},
				{province_code:'7', district_code:'63', commune_code:'561', commune:'Koun Satv'},
				{province_code:'7', district_code:'63', commune_code:'562', commune:'Meakprang'},
				{province_code:'7', district_code:'63', commune_code:'563', commune:'Preaek Tnaot'},
				{province_code:'7', district_code:'63', commune_code:'564', commune:'Prey Khmum'},
				{province_code:'7', district_code:'63', commune_code:'565', commune:'Prey Thnang'},
				{province_code:'7', district_code:'63', commune_code:'566', commune:'Stueng Kaev'},
				{province_code:'7', district_code:'63', commune_code:'567', commune:'Thmei'},
				{province_code:'7', district_code:'63', commune_code:'568', commune:'Trapeang Pring'},
				{province_code:'7', district_code:'63', commune_code:'569', commune:'Trapeang Sangkae'},
				{province_code:'7', district_code:'63', commune_code:'570', commune:'Trapeang Thum'},
				{province_code:'8', district_code:'64', commune_code:'571', commune:'Baek Chan'},
				{province_code:'8', district_code:'64', commune_code:'572', commune:'Boeng Thum'},
				{province_code:'8', district_code:'64', commune_code:'573', commune:'Chhak Chheu Neang'},
				{province_code:'8', district_code:'64', commune_code:'574', commune:'Damnak Ampil'},
				{province_code:'8', district_code:'64', commune_code:'575', commune:'Kamboul'},
				{province_code:'8', district_code:'64', commune_code:'576', commune:'Kantaok'},
				{province_code:'8', district_code:'64', commune_code:'577', commune:'Krang Mkak'},
				{province_code:'8', district_code:'64', commune_code:'578', commune:'Lumhach'},
				{province_code:'8', district_code:'64', commune_code:'46', commune:'Mkak'},
				{province_code:'8', district_code:'64', commune_code:'579', commune:'Ovlaok'},
				{province_code:'8', district_code:'64', commune_code:'580', commune:'Peuk'},
				{province_code:'8', district_code:'64', commune_code:'581', commune:'Ponsang'},
				{province_code:'8', district_code:'64', commune_code:'582', commune:'Prey Puok'},
				{province_code:'8', district_code:'64', commune_code:'499', commune:'Samraong Leu'},
				{province_code:'8', district_code:'64', commune_code:'583', commune:'Snao'},
				{province_code:'8', district_code:'64', commune_code:'584', commune:'Tuol Prech'},
				{province_code:'8', district_code:'65', commune_code:'585', commune:'Ampov Prey'},
				{province_code:'8', district_code:'65', commune_code:'586', commune:'Anlong Romiet'},
				{province_code:'8', district_code:'65', commune_code:'587', commune:'Barku'},
				{province_code:'8', district_code:'65', commune_code:'588', commune:'Boeng Khyang'},
				{province_code:'8', district_code:'65', commune_code:'589', commune:'Cheung Kaeub'},
				{province_code:'8', district_code:'65', commune_code:'590', commune:'Daeum Rues'},
				{province_code:'8', district_code:'65', commune_code:'591', commune:'Kandaok'},
				{province_code:'8', district_code:'65', commune_code:'592', commune:'Kong Noy'},
				{province_code:'8', district_code:'65', commune_code:'593', commune:'Kouk Trab'},
				{province_code:'8', district_code:'65', commune_code:'594', commune:'Preaek Kampis'},
				{province_code:'8', district_code:'65', commune_code:'595', commune:'Preaek Roka'},
				{province_code:'8', district_code:'65', commune_code:'596', commune:'Preaek Slaeng'},
				{province_code:'8', district_code:'65', commune_code:'597', commune:'Preah Putth'},
				{province_code:'8', district_code:'65', commune_code:'148', commune:'Roka'},
				{province_code:'8', district_code:'65', commune_code:'598', commune:'Roleang Kaen'},
				{province_code:'8', district_code:'65', commune_code:'52', commune:'Roluos'},
				{province_code:'8', district_code:'65', commune_code:'599', commune:'Siem Reab'},
				{province_code:'8', district_code:'65', commune_code:'600', commune:'Spean Thma'},
				{province_code:'8', district_code:'65', commune_code:'436', commune:'Tbaeng'},
				{province_code:'8', district_code:'65', commune_code:'567', commune:'Thmei'},
				{province_code:'8', district_code:'65', commune_code:'601', commune:'Tien'},
				{province_code:'8', district_code:'65', commune_code:'602', commune:'Trapeang Veaeng'},
				{province_code:'8', district_code:'65', commune_code:'472', commune:'Trea'},
				{province_code:'8', district_code:'66', commune_code:'603', commune:'Chheu Khmau'},
				{province_code:'8', district_code:'66', commune_code:'604', commune:'Chrouy Ta Kaev'},
				{province_code:'8', district_code:'66', commune_code:'605', commune:'Kampong Kong'},
				{province_code:'8', district_code:'66', commune_code:'606', commune:'Kaoh Thum Ka'},
				{province_code:'8', district_code:'66', commune_code:'607', commune:'Kaoh Thum Kha'},
				{province_code:'8', district_code:'66', commune_code:'608', commune:'Leuk Daek'},
				{province_code:'8', district_code:'66', commune_code:'609', commune:'Pouthi Ban'},
				{province_code:'8', district_code:'66', commune_code:'610', commune:'Preaek Chrey'},
				{province_code:'8', district_code:'66', commune_code:'611', commune:'Preaek Sdei'},
				{province_code:'8', district_code:'66', commune_code:'612', commune:'Preaek Thmei'},
				{province_code:'8', district_code:'66', commune_code:'613', commune:'Sampov Lun'},
				{province_code:'8', district_code:'67', commune_code:'614', commune:'Bak Dav'},
				{province_code:'8', district_code:'67', commune_code:'615', commune:'Chey Thum'},
				{province_code:'8', district_code:'67', commune_code:'616', commune:'Kampong Chamlang'},
				{province_code:'8', district_code:'67', commune_code:'617', commune:'Kaoh Chouram'},
				{province_code:'8', district_code:'67', commune_code:'618', commune:'Kaoh Oknha Tei'},
				{province_code:'8', district_code:'67', commune_code:'619', commune:'Preaek Ampil'},
				{province_code:'8', district_code:'67', commune_code:'68', commune:'Preaek Luong'},
				{province_code:'8', district_code:'67', commune_code:'620', commune:'Preaek Ta Kov'},
				{province_code:'8', district_code:'67', commune_code:'621', commune:'Preaek Ta Meak'},
				{province_code:'8', district_code:'67', commune_code:'622', commune:'Preah Prasab'},
				{province_code:'8', district_code:'67', commune_code:'623', commune:'Puk Ruessei'},
				{province_code:'8', district_code:'67', commune_code:'624', commune:'Roka Chonlueng'},
				{province_code:'8', district_code:'67', commune_code:'625', commune:'Sanlung'},
				{province_code:'8', district_code:'67', commune_code:'626', commune:'Sithor'},
				{province_code:'8', district_code:'67', commune_code:'312', commune:'Svay Chrum'},
				{province_code:'8', district_code:'67', commune_code:'627', commune:'Svay Romiet'},
				{province_code:'8', district_code:'67', commune_code:'628', commune:'Ta Aek'},
				{province_code:'8', district_code:'67', commune_code:'629', commune:'Vihear Suork'},
				{province_code:'8', district_code:'68', commune_code:'630', commune:'Banteay Daek'},
				{province_code:'8', district_code:'68', commune_code:'74', commune:'Chheu Teal'},
				{province_code:'8', district_code:'68', commune_code:'631', commune:'Dei Edth'},
				{province_code:'8', district_code:'68', commune_code:'44', commune:'Kampong Svay'},
				{province_code:'8', district_code:'68', commune_code:'632', commune:'Kbal Kaoh'},
				{province_code:'8', district_code:'68', commune_code:'633', commune:'Kokir'},
				{province_code:'8', district_code:'68', commune_code:'423', commune:'Kokir Thum'},
				{province_code:'8', district_code:'68', commune_code:'634', commune:'Phum Thum'},
				{province_code:'8', district_code:'68', commune_code:'635', commune:'Preaek Aeng'},
				{province_code:'8', district_code:'68', commune_code:'612', commune:'Preaek Thmei'},
				{province_code:'8', district_code:'68', commune_code:'636', commune:'Samraong Thum'},
				{province_code:'8', district_code:'68', commune_code:'637', commune:'Veal Sbov'},
				{province_code:'8', district_code:'69', commune_code:'638', commune:'Kampong Phnum'},
				{province_code:'8', district_code:'69', commune_code:'639', commune:'K\'am Samnar'},
				{province_code:'8', district_code:'69', commune_code:'640', commune:'Khpob ateav'},
				{province_code:'8', district_code:'69', commune_code:'641', commune:'Peam Reang'},
				{province_code:'8', district_code:'69', commune_code:'642', commune:'Preaek Dach'},
				{province_code:'8', district_code:'69', commune_code:'643', commune:'Preaek Tonloab'},
				{province_code:'8', district_code:'69', commune_code:'644', commune:'Sandar'},
				{province_code:'8', district_code:'70', commune_code:'645', commune:'Akreiy Ksatr'},
				{province_code:'8', district_code:'70', commune_code:'646', commune:'Barong'},
				{province_code:'8', district_code:'70', commune_code:'647', commune:'Boeng Krum'},
				{province_code:'8', district_code:'70', commune_code:'648', commune:'Kaoh Kaev'},
				{province_code:'8', district_code:'70', commune_code:'649', commune:'Kaoh Reah'},
				{province_code:'8', district_code:'70', commune_code:'650', commune:'Lvea Sa'},
				{province_code:'8', district_code:'70', commune_code:'651', commune:'Peam Oknha Ong'},
				{province_code:'8', district_code:'70', commune_code:'634', commune:'Phum Thum'},
				{province_code:'8', district_code:'70', commune_code:'652', commune:'Preaek Kmeng'},
				{province_code:'8', district_code:'70', commune_code:'653', commune:'Preaek Rey'},
				{province_code:'8', district_code:'70', commune_code:'654', commune:'Preaek Ruessei'},
				{province_code:'8', district_code:'70', commune_code:'16', commune:'Sambuor'},
				{province_code:'8', district_code:'70', commune_code:'655', commune:'Sarikakaev'},
				{province_code:'8', district_code:'70', commune_code:'656', commune:'Thma Kor'},
				{province_code:'8', district_code:'70', commune_code:'657', commune:'Tuek Khleang'},
				{province_code:'8', district_code:'71', commune_code:'658', commune:'Bak Khaeng'},
				{province_code:'8', district_code:'71', commune_code:'659', commune:'Kaoh Dach'},
				{province_code:'8', district_code:'71', commune_code:'660', commune:'Preaek Anhchanh'},
				{province_code:'8', district_code:'71', commune_code:'661', commune:'Preaek Dambang'},
				{province_code:'8', district_code:'71', commune_code:'662', commune:'Roka Kaong Muoy'},
				{province_code:'8', district_code:'71', commune_code:'663', commune:'Roka Kaong Pir'},
				{province_code:'8', district_code:'71', commune_code:'664', commune:'Ruessei Chrouy'},
				{province_code:'8', district_code:'71', commune_code:'192', commune:'Sambuor Meas'},
				{province_code:'8', district_code:'71', commune_code:'665', commune:'Svay Ampear'},
				{province_code:'8', district_code:'72', commune_code:'666', commune:'Chhveang'},
				{province_code:'8', district_code:'72', commune_code:'667', commune:'Chrey Loas'},
				{province_code:'8', district_code:'72', commune_code:'668', commune:'Kampong Luong'},
				{province_code:'8', district_code:'72', commune_code:'275', commune:'Kampong Os'},
				{province_code:'8', district_code:'72', commune_code:'669', commune:'Kaoh Chen'},
				{province_code:'8', district_code:'72', commune_code:'670', commune:'Phnum Bat'},
				{province_code:'8', district_code:'72', commune_code:'671', commune:'Phsar Daek'},
				{province_code:'8', district_code:'72', commune_code:'672', commune:'Ponhea Lueu'},
				{province_code:'8', district_code:'72', commune_code:'673', commune:'Ponhea Pon'},
				{province_code:'8', district_code:'72', commune_code:'674', commune:'Preaek Pnov'},
				{province_code:'8', district_code:'72', commune_code:'675', commune:'Preaek Ta Teaen'},
				{province_code:'8', district_code:'72', commune_code:'26', commune:'Samraong'},
				{province_code:'8', district_code:'72', commune_code:'676', commune:'Tumnob Thum'},
				{province_code:'8', district_code:'72', commune_code:'677', commune:'Vihear Luong'},
				{province_code:'8', district_code:'73', commune_code:'678', commune:'Kaoh Anlong Chen'},
				{province_code:'8', district_code:'73', commune_code:'679', commune:'Kaoh Khael'},
				{province_code:'8', district_code:'73', commune_code:'680', commune:'Kaoh Khsach Tonlea'},
				{province_code:'8', district_code:'73', commune_code:'681', commune:'Khpob'},
				{province_code:'8', district_code:'73', commune_code:'682', commune:'Krang Yov'},
				{province_code:'8', district_code:'73', commune_code:'38', commune:'Prasat'},
				{province_code:'8', district_code:'73', commune_code:'683', commune:'Preaek Ambel'},
				{province_code:'8', district_code:'73', commune_code:'212', commune:'Preaek Koy'},
				{province_code:'8', district_code:'73', commune_code:'684', commune:'Roka Khpos'},
				{province_code:'8', district_code:'73', commune_code:'685', commune:'S\'ang Phnum'},
				{province_code:'8', district_code:'73', commune_code:'686', commune:'Setbou'},
				{province_code:'8', district_code:'73', commune_code:'687', commune:'Svay Prateal'},
				{province_code:'8', district_code:'73', commune_code:'688', commune:'Svay Rolum'},
				{province_code:'8', district_code:'73', commune_code:'689', commune:'Ta Lon'},
				{province_code:'8', district_code:'73', commune_code:'690', commune:'Traeuy Sla'},
				{province_code:'8', district_code:'73', commune_code:'691', commune:'Tuek Vil'},
				{province_code:'8', district_code:'74', commune_code:'692', commune:'Daeum Mien'},
				{province_code:'8', district_code:'74', commune_code:'693', commune:'Kampong Samnanh'},
				{province_code:'8', district_code:'74', commune_code:'694', commune:'Preaek Hour'},
				{province_code:'8', district_code:'74', commune_code:'654', commune:'Preaek Ruessei'},
				{province_code:'8', district_code:'74', commune_code:'695', commune:'Ta Kdol'},
				{province_code:'8', district_code:'74', commune_code:'696', commune:'Ta Khmau'},
				{province_code:'9', district_code:'75', commune_code:'697', commune:'Angkaol'},
				{province_code:'9', district_code:'75', commune_code:'698', commune:'Ou Krasar'},
				{province_code:'9', district_code:'75', commune_code:'699', commune:'Pong Tuek'},
				{province_code:'9', district_code:'76', commune_code:'700', commune:'Kaeb'},
				{province_code:'9', district_code:'76', commune_code:'701', commune:'Prey Thum'},
				{province_code:'10', district_code:'77', commune_code:'702', commune:'Andoung Tuek'},
				{province_code:'10', district_code:'77', commune_code:'703', commune:'Kandaol'},
				{province_code:'10', district_code:'77', commune_code:'704', commune:'Ta Nuon'},
				{province_code:'10', district_code:'77', commune_code:'705', commune:'Thma Sa'},
				{province_code:'10', district_code:'78', commune_code:'706', commune:'Chamkar Luong'},
				{province_code:'10', district_code:'78', commune_code:'707', commune:'Kampong Seila'},
				{province_code:'10', district_code:'78', commune_code:'708', commune:'Ou Bak Roteh'},
				{province_code:'10', district_code:'78', commune_code:'709', commune:'Stueng Chhay'},
				{province_code:'10', district_code:'79', commune_code:'710', commune:'Kaoh Sdach'},
				{province_code:'10', district_code:'79', commune_code:'711', commune:'Phnhi Meas'},
				{province_code:'10', district_code:'79', commune_code:'712', commune:'Preaek Khsach'},
				{province_code:'10', district_code:'80', commune_code:'713', commune:'Chrouy Pras'},
				{province_code:'10', district_code:'80', commune_code:'714', commune:'Kaoh Kapi'},
				{province_code:'10', district_code:'80', commune_code:'715', commune:'Ta Tai Kraom'},
				{province_code:'10', district_code:'80', commune_code:'716', commune:'Trapeang Rung'},
				{province_code:'10', district_code:'81', commune_code:'717', commune:'Bak Khlang'},
				{province_code:'10', district_code:'81', commune_code:'718', commune:'Peam Krasaob'},
				{province_code:'10', district_code:'81', commune_code:'719', commune:'Tuol Kokir Leu'},
				{province_code:'10', district_code:'82', commune_code:'530', commune:'Dang Tong'},
				{province_code:'10', district_code:'82', commune_code:'720', commune:'Smach Mean Chey'},
				{province_code:'10', district_code:'82', commune_code:'721', commune:'Stueng Veaeng'},
				{province_code:'10', district_code:'83', commune_code:'722', commune:'Boeng Preav'},
				{province_code:'10', district_code:'83', commune_code:'723', commune:'Chi Kha Kraom'},
				{province_code:'10', district_code:'83', commune_code:'724', commune:'Chi Kha Leu'},
				{province_code:'10', district_code:'83', commune_code:'725', commune:'Chrouy Svay'},
				{province_code:'10', district_code:'83', commune_code:'726', commune:'Dang Peaeng'},
				{province_code:'10', district_code:'83', commune_code:'727', commune:'Srae Ambel'},
				{province_code:'10', district_code:'84', commune_code:'728', commune:'Chi Phat'},
				{province_code:'10', district_code:'84', commune_code:'729', commune:'Chumnoab'},
				{province_code:'10', district_code:'84', commune_code:'469', commune:'Pralay'},
				{province_code:'10', district_code:'84', commune_code:'730', commune:'Ruessei Chrum'},
				{province_code:'10', district_code:'84', commune_code:'731', commune:'Ta Tey Leu'},
				{province_code:'10', district_code:'84', commune_code:'732', commune:'Thmor Donpove'},
				{province_code:'11', district_code:'85', commune_code:'733', commune:'Chhloung'},
				{province_code:'11', district_code:'85', commune_code:'734', commune:'Damrei Phong'},
				{province_code:'11', district_code:'85', commune_code:'195', commune:'Han Chey'},
				{province_code:'11', district_code:'85', commune_code:'735', commune:'Kampong Damrei'},
				{province_code:'11', district_code:'85', commune_code:'736', commune:'Kanhchor'},
				{province_code:'11', district_code:'85', commune_code:'737', commune:'Khsach Andaet'},
				{province_code:'11', district_code:'85', commune_code:'224', commune:'Pongro'},
				{province_code:'11', district_code:'85', commune_code:'738', commune:'Preaek Saman'},
				{province_code:'11', district_code:'86', commune_code:'739', commune:'Bos Leav'},
				{province_code:'11', district_code:'86', commune_code:'740', commune:'Changkrang'},
				{province_code:'11', district_code:'86', commune_code:'284', commune:'Dar'},
				{province_code:'11', district_code:'86', commune_code:'741', commune:'Kantuot'},
				{province_code:'11', district_code:'86', commune_code:'742', commune:'Kaoh Chraeng'},
				{province_code:'11', district_code:'86', commune_code:'743', commune:'Kaoh Trong'},
				{province_code:'11', district_code:'86', commune_code:'744', commune:'Kou Loab'},
				{province_code:'11', district_code:'86', commune_code:'745', commune:'Krakor'},
				{province_code:'11', district_code:'86', commune_code:'746', commune:'Kratie'},
				{province_code:'11', district_code:'86', commune_code:'297', commune:'Ou Ruessei'},
				{province_code:'11', district_code:'86', commune_code:'747', commune:'Roka Kandal'},
				{province_code:'11', district_code:'86', commune_code:'748', commune:'Sambok'},
				{province_code:'11', district_code:'86', commune_code:'749', commune:'Thma Andaeuk'},
				{province_code:'11', district_code:'86', commune_code:'750', commune:'Thma Kreae'},
				{province_code:'11', district_code:'86', commune_code:'567', commune:'Thmei'},
				{province_code:'11', district_code:'87', commune_code:'381', commune:'Chambak'},
				{province_code:'11', district_code:'87', commune_code:'751', commune:'Chrouy Banteay'},
				{province_code:'11', district_code:'87', commune_code:'752', commune:'Kampong Kor'},
				{province_code:'11', district_code:'87', commune_code:'753', commune:'Kaoh Ta Suy'},
				{province_code:'11', district_code:'87', commune_code:'754', commune:'Preaek Prasab'},
				{province_code:'11', district_code:'87', commune_code:'755', commune:'Ruessei Keo'},
				{province_code:'11', district_code:'87', commune_code:'756', commune:'Saob'},
				{province_code:'11', district_code:'87', commune_code:'757', commune:'Ta Mau'},
				{province_code:'11', district_code:'88', commune_code:'758', commune:'Boeng Char'},
				{province_code:'11', district_code:'88', commune_code:'191', commune:'Kampong Cham'},
				{province_code:'11', district_code:'88', commune_code:'759', commune:'Kaoh Khnhaer'},
				{province_code:'11', district_code:'88', commune_code:'760', commune:'Kbal Damrei'},
				{province_code:'11', district_code:'88', commune_code:'761', commune:'Ou Krieng'},
				{province_code:'11', district_code:'88', commune_code:'762', commune:'Roluos Mean Chey'},
				{province_code:'11', district_code:'88', commune_code:'166', commune:'Sambour'},
				{province_code:'11', district_code:'88', commune_code:'453', commune:'Sandan'},
				{province_code:'11', district_code:'88', commune_code:'763', commune:'Srae Chis'},
				{province_code:'11', district_code:'88', commune_code:'764', commune:'Voadthonak'},
				{province_code:'11', district_code:'89', commune_code:'765', commune:'Khsuem'},
				{province_code:'11', district_code:'89', commune_code:'766', commune:'Pir Thnu'},
				{province_code:'11', district_code:'89', commune_code:'767', commune:'Snuol'},
				{province_code:'11', district_code:'89', commune_code:'768', commune:'Srae Char'},
				{province_code:'11', district_code:'89', commune_code:'769', commune:'Svay Chreah'},
				{province_code:'12', district_code:'90', commune_code:'770', commune:'Chong Phlah'},
				{province_code:'12', district_code:'90', commune_code:'771', commune:'Me Mang'},
				{province_code:'12', district_code:'90', commune_code:'772', commune:'Srae Chhuk'},
				{province_code:'12', district_code:'90', commune_code:'773', commune:'Srae Khtum'},
				{province_code:'12', district_code:'90', commune_code:'774', commune:'Srae Preah'},
				{province_code:'12', district_code:'91', commune_code:'775', commune:'Nang Khi Loek'},
				{province_code:'12', district_code:'91', commune_code:'776', commune:'Ou Buon Leu'},
				{province_code:'12', district_code:'91', commune_code:'777', commune:'Roya'},
				{province_code:'12', district_code:'91', commune_code:'778', commune:'Sokh Sant'},
				{province_code:'12', district_code:'91', commune_code:'779', commune:'Srae Huy'},
				{province_code:'12', district_code:'91', commune_code:'780', commune:'Srae Sangkom'},
				{province_code:'12', district_code:'92', commune_code:'781', commune:'Dak Dam'},
				{province_code:'12', district_code:'92', commune_code:'782', commune:'Saen Monourom'},
				{province_code:'12', district_code:'93', commune_code:'783', commune:'Bu Chri'},
				{province_code:'12', district_code:'93', commune_code:'784', commune:'Bu Sra'},
				{province_code:'12', district_code:'93', commune_code:'785', commune:'Krang Teh'},
				{province_code:'12', district_code:'93', commune_code:'786', commune:'Srae Ampum'},
				{province_code:'12', district_code:'94', commune_code:'408', commune:'Monourom'},
				{province_code:'12', district_code:'94', commune_code:'787', commune:'Romonea'},
				{province_code:'12', district_code:'94', commune_code:'788', commune:'Sokh Dom'},
				{province_code:'12', district_code:'94', commune_code:'789', commune:'Spean Mean Chey'},
				{province_code:'13', district_code:'95', commune_code:'790', commune:'Anlong Veaeng'},
				{province_code:'13', district_code:'95', commune_code:'791', commune:'Lumtong'},
				{province_code:'13', district_code:'95', commune_code:'792', commune:'Thlat'},
				{province_code:'13', district_code:'95', commune_code:'793', commune:'Trapeang Prei'},
				{province_code:'13', district_code:'95', commune_code:'794', commune:'Trapeang Tav'},
				{province_code:'13', district_code:'96', commune_code:'194', commune:'Ampil'},
				{province_code:'13', district_code:'96', commune_code:'795', commune:'Beng'},
				{province_code:'13', district_code:'96', commune_code:'796', commune:'Kouk Khpos'},
				{province_code:'13', district_code:'96', commune_code:'797', commune:'Kouk Mon'},
				{province_code:'13', district_code:'97', commune_code:'798', commune:'Cheung Tien'},
				{province_code:'13', district_code:'97', commune_code:'799', commune:'Chong Kal'},
				{province_code:'13', district_code:'97', commune_code:'800', commune:'Krasang'},
				{province_code:'13', district_code:'97', commune_code:'224', commune:'Pongro'},
				{province_code:'13', district_code:'98', commune_code:'801', commune:'Bansay Reak'},
				{province_code:'13', district_code:'98', commune_code:'43', commune:'Bos Sbov'},
				{province_code:'13', district_code:'98', commune_code:'802', commune:'Koun Kriel'},
				{province_code:'13', district_code:'98', commune_code:'803', commune:'Ou Smach'},
				{province_code:'13', district_code:'98', commune_code:'26', commune:'Samraong'},
				{province_code:'13', district_code:'99', commune_code:'804', commune:'Bak Anlung'},
				{province_code:'13', district_code:'99', commune_code:'203', commune:'Ou Svay'},
				{province_code:'13', district_code:'99', commune_code:'165', commune:'Ph\'av'},
				{province_code:'13', district_code:'99', commune_code:'805', commune:'Preah Pralay'},
				{province_code:'13', district_code:'99', commune_code:'806', commune:'Trapeang Prasat'},
				{province_code:'13', district_code:'99', commune_code:'807', commune:'Tumnob Dach'},
				{province_code:'14', district_code:'100', commune_code:'808', commune:'Ba Yakha'},
				{province_code:'14', district_code:'100', commune_code:'809', commune:'Ou Tavau'},
				{province_code:'14', district_code:'100', commune_code:'810', commune:'Pailin'},
				{province_code:'14', district_code:'100', commune_code:'811', commune:'Tuol Lvea'},
				{province_code:'14', district_code:'101', commune_code:'812', commune:'Ou Andoung'},
				{province_code:'14', district_code:'101', commune_code:'813', commune:'Sala Krau'},
				{province_code:'14', district_code:'101', commune_code:'814', commune:'Stueng Kach'},
				{province_code:'14', district_code:'101', commune_code:'815', commune:'Stueng Trang'},
				{province_code:'15', district_code:'102', commune_code:'816', commune:'Boeng Keng kang Bei'},
				{province_code:'15', district_code:'102', commune_code:'817', commune:'Boeng Keng Kang Muoy'},
				{province_code:'15', district_code:'102', commune_code:'818', commune:'Boeng Keng Kang Pir'},
				{province_code:'15', district_code:'102', commune_code:'819', commune:'Boeng Trabaek'},
				{province_code:'15', district_code:'102', commune_code:'820', commune:'Oulampik'},
				{province_code:'15', district_code:'102', commune_code:'821', commune:'Phsar Daeum Thkov'},
				{province_code:'15', district_code:'102', commune_code:'822', commune:'Tonle Basak'},
				{province_code:'15', district_code:'102', commune_code:'823', commune:'Tumnob Tuek'},
				{province_code:'15', district_code:'102', commune_code:'824', commune:'Tuol Svay Prey Muoy'},
				{province_code:'15', district_code:'102', commune_code:'825', commune:'Tuol Svay Prey Pir'},
				{province_code:'15', district_code:'102', commune_code:'826', commune:'Tuol Tumpung Muoy'},
				{province_code:'15', district_code:'102', commune_code:'827', commune:'Tuol Tumpung Pir'},
				{province_code:'15', district_code:'103', commune_code:'828', commune:'Chaom Chau'},
				{province_code:'15', district_code:'103', commune_code:'829', commune:'Cheung Aek'},
				{province_code:'15', district_code:'103', commune_code:'830', commune:'Dangkao'},
				{province_code:'15', district_code:'103', commune_code:'831', commune:'Kakab'},
				{province_code:'15', district_code:'103', commune_code:'832', commune:'Kouk Roka'},
				{province_code:'15', district_code:'103', commune_code:'833', commune:'Krang Pongro'},
				{province_code:'15', district_code:'103', commune_code:'834', commune:'Krang Thnong'},
				{province_code:'15', district_code:'103', commune_code:'835', commune:'Phleung Chheh Roteh'},
				{province_code:'15', district_code:'103', commune_code:'699', commune:'Pong Tuek'},
				{province_code:'15', district_code:'103', commune_code:'836', commune:'Prateah Lang'},
				{province_code:'15', district_code:'103', commune_code:'837', commune:'Prey Sa'},
				{province_code:'15', district_code:'103', commune_code:'838', commune:'Prey Veaeng'},
				{province_code:'15', district_code:'103', commune_code:'839', commune:'Sak Sampov'},
				{province_code:'15', district_code:'103', commune_code:'498', commune:'Samraong Kraom'},
				{province_code:'15', district_code:'103', commune_code:'840', commune:'Trapeang Krasang'},
				{province_code:'15', district_code:'104', commune_code:'96', commune:'Boeng Reang'},
				{province_code:'15', district_code:'104', commune_code:'841', commune:'Chakto Mukh'},
				{province_code:'15', district_code:'104', commune_code:'842', commune:'Chey Chumneah'},
				{province_code:'15', district_code:'104', commune_code:'843', commune:'Phsar Chas'},
				{province_code:'15', district_code:'104', commune_code:'844', commune:'Phsar Kandal Muoy'},
				{province_code:'15', district_code:'104', commune_code:'845', commune:'Phsar Kandal Pir'},
				{province_code:'15', district_code:'104', commune_code:'846', commune:'Phsar Thmei Bei'},
				{province_code:'15', district_code:'104', commune_code:'847', commune:'Phsar Thmei Muoy'},
				{province_code:'15', district_code:'104', commune_code:'848', commune:'Phsar Thmei Pir'},
				{province_code:'15', district_code:'104', commune_code:'849', commune:'Srah Chak'},
				{province_code:'15', district_code:'104', commune_code:'850', commune:'Voat Phnum'},
				{province_code:'15', district_code:'105', commune_code:'851', commune:'Boeng Tumpun'},
				{province_code:'15', district_code:'105', commune_code:'852', commune:'Chak Angrae Kraom'},
				{province_code:'15', district_code:'105', commune_code:'853', commune:'Chak Angrae Leu'},
				{province_code:'15', district_code:'105', commune_code:'854', commune:'Chbar Ampov Muoy'},
				{province_code:'15', district_code:'105', commune_code:'855', commune:'Chbar Ampov Pir'},
				{province_code:'15', district_code:'105', commune_code:'856', commune:'Nirouth'},
				{province_code:'15', district_code:'105', commune_code:'857', commune:'Preaek Pra'},
				{province_code:'15', district_code:'105', commune_code:'858', commune:'Stueng Mean Chey'},
				{province_code:'15', district_code:'106', commune_code:'859', commune:'Boeng Prolit'},
				{province_code:'15', district_code:'106', commune_code:'860', commune:'Mittakpheap'},
				{province_code:'15', district_code:'106', commune_code:'408', commune:'Monourom'},
				{province_code:'15', district_code:'106', commune_code:'861', commune:'Ou Ruessei Bei'},
				{province_code:'15', district_code:'106', commune_code:'862', commune:'Ou Ruessei Buon'},
				{province_code:'15', district_code:'106', commune_code:'863', commune:'Ou Ruessei Muoy'},
				{province_code:'15', district_code:'106', commune_code:'864', commune:'Ou Ruessei Pir'},
				{province_code:'15', district_code:'106', commune_code:'193', commune:'Veal Vong'},
				{province_code:'15', district_code:'107', commune_code:'865', commune:'Chrang Chamreh Muoy'},
				{province_code:'15', district_code:'107', commune_code:'866', commune:'Chrang Chamreh Pir'},
				{province_code:'15', district_code:'107', commune_code:'867', commune:'Chrouy Changva'},
				{province_code:'15', district_code:'107', commune_code:'868', commune:'Khmuonh'},
				{province_code:'15', district_code:'107', commune_code:'869', commune:'Kiloumaetr Lekh Prammuoy'},
				{province_code:'15', district_code:'107', commune_code:'870', commune:'Phnom Penh Thmei'},
				{province_code:'15', district_code:'107', commune_code:'871', commune:'Preaek Lieb'},
				{province_code:'15', district_code:'107', commune_code:'872', commune:'Preaek Ta Sek'},
				{province_code:'15', district_code:'107', commune_code:'755', commune:'Ruessei Keo'},
				{province_code:'15', district_code:'107', commune_code:'873', commune:'Svay Pak'},
				{province_code:'15', district_code:'107', commune_code:'50', commune:'Tuek Thla'},
				{province_code:'15', district_code:'107', commune_code:'874', commune:'Tuol Sangkae'},
				{province_code:'15', district_code:'108', commune_code:'875', commune:'Boeng Kak Muoy'},
				{province_code:'15', district_code:'108', commune_code:'876', commune:'Boeng Kak Pir'},
				{province_code:'15', district_code:'108', commune_code:'877', commune:'Boeng Salang'},
				{province_code:'15', district_code:'108', commune_code:'878', commune:'Phsar Daeum Kor'},
				{province_code:'15', district_code:'108', commune_code:'879', commune:'Phsar Depou Bei'},
				{province_code:'15', district_code:'108', commune_code:'880', commune:'Phsar Depou Muoy'},
				{province_code:'15', district_code:'108', commune_code:'881', commune:'Phsar Depou Pir'},
				{province_code:'15', district_code:'108', commune_code:'882', commune:'Tuek L\'ak Bei'},
				{province_code:'15', district_code:'108', commune_code:'883', commune:'Tuek L\'ak Muoy'},
				{province_code:'15', district_code:'108', commune_code:'884', commune:'Tuek L\'ak Pir'},
				{province_code:'16', district_code:'109', commune_code:'885', commune:'Kaoh Rung'},
				{province_code:'16', district_code:'109', commune_code:'886', commune:'Sangkat Bei'},
				{province_code:'16', district_code:'109', commune_code:'887', commune:'Sangkat Buon'},
				{province_code:'16', district_code:'109', commune_code:'888', commune:'Sangkat Muoy'},
				{province_code:'16', district_code:'109', commune_code:'889', commune:'Sangkat Pir'},
				{province_code:'16', district_code:'110', commune_code:'890', commune:'Andoung Thma'},
				{province_code:'16', district_code:'110', commune_code:'891', commune:'Bet Trang'},
				{province_code:'16', district_code:'110', commune_code:'892', commune:'Boeng Ta Prum'},
				{province_code:'16', district_code:'110', commune_code:'893', commune:'Cheung Kou'},
				{province_code:'16', district_code:'110', commune_code:'894', commune:'Ou Chrov'},
				{province_code:'16', district_code:'110', commune_code:'895', commune:'Ou Oknha Heng'},
				{province_code:'16', district_code:'110', commune_code:'896', commune:'Prey Nob'},
				{province_code:'16', district_code:'110', commune_code:'897', commune:'Ream'},
				{province_code:'16', district_code:'110', commune_code:'443', commune:'Sameakki'},
				{province_code:'16', district_code:'110', commune_code:'898', commune:'Samrong'},
				{province_code:'16', district_code:'110', commune_code:'366', commune:'Tuek L\'ak'},
				{province_code:'16', district_code:'110', commune_code:'50', commune:'Tuek Thla'},
				{province_code:'16', district_code:'110', commune_code:'899', commune:'Tuol Toetueng'},
				{province_code:'16', district_code:'110', commune_code:'900', commune:'Veal Renh'},
				{province_code:'16', district_code:'111', commune_code:'901', commune:'Kampenh'},
				{province_code:'16', district_code:'111', commune_code:'902', commune:'Ou Treh'},
				{province_code:'16', district_code:'111', commune_code:'903', commune:'Tumnob Rolok'},
				{province_code:'17', district_code:'112', commune_code:'904', commune:'Chrach'},
				{province_code:'17', district_code:'112', commune_code:'905', commune:'Khyang'},
				{province_code:'17', district_code:'112', commune_code:'906', commune:'Putrea'},
				{province_code:'17', district_code:'112', commune_code:'907', commune:'S\'ang'},
				{province_code:'17', district_code:'112', commune_code:'908', commune:'Tasu'},
				{province_code:'17', district_code:'112', commune_code:'909', commune:'Yhmea'},
				{province_code:'17', district_code:'113', commune_code:'910', commune:'Chhaeb Muoy'},
				{province_code:'17', district_code:'113', commune_code:'911', commune:'Chhaeb Pir'},
				{province_code:'17', district_code:'113', commune_code:'912', commune:'Kampong Sralau Muoy'},
				{province_code:'17', district_code:'113', commune_code:'913', commune:'Kampong Sralau Pir'},
				{province_code:'17', district_code:'113', commune_code:'914', commune:'Mlu Prey Muoy'},
				{province_code:'17', district_code:'113', commune_code:'915', commune:'Mlu Prey Pir'},
				{province_code:'17', district_code:'113', commune_code:'916', commune:'Sangkae Muoy'},
				{province_code:'17', district_code:'113', commune_code:'917', commune:'Sangkae Pir'},
				{province_code:'17', district_code:'114', commune_code:'918', commune:'Choam Ksant'},
				{province_code:'17', district_code:'114', commune_code:'741', commune:'Kantuot'},
				{province_code:'17', district_code:'114', commune_code:'919', commune:'Pring Thum'},
				{province_code:'17', district_code:'114', commune_code:'920', commune:'Rumdaoh Srae'},
				{province_code:'17', district_code:'114', commune_code:'921', commune:'Tuek Kraham'},
				{province_code:'17', district_code:'114', commune_code:'922', commune:'Yeang'},
				{province_code:'17', district_code:'115', commune_code:'923', commune:'Kuleaen Cheung'},
				{province_code:'17', district_code:'115', commune_code:'924', commune:'Kuleaen Tboung'},
				{province_code:'17', district_code:'115', commune_code:'925', commune:'Phnum Penh'},
				{province_code:'17', district_code:'115', commune_code:'926', commune:'Phnum Tbaeng Pir'},
				{province_code:'17', district_code:'115', commune_code:'927', commune:'Srayang'},
				{province_code:'17', district_code:'115', commune_code:'567', commune:'Thmei'},
				{province_code:'17', district_code:'116', commune_code:'928', commune:'Reaksa'},
				{province_code:'17', district_code:'116', commune_code:'929', commune:'Reaksmei'},
				{province_code:'17', district_code:'116', commune_code:'930', commune:'Rieb Roy'},
				{province_code:'17', district_code:'116', commune_code:'931', commune:'Rik Reay'},
				{province_code:'17', district_code:'116', commune_code:'932', commune:'Robieb'},
				{province_code:'17', district_code:'116', commune_code:'933', commune:'Rohas'},
				{province_code:'17', district_code:'116', commune_code:'934', commune:'Romoniy'},
				{province_code:'17', district_code:'116', commune_code:'935', commune:'Romtom'},
				{province_code:'17', district_code:'116', commune_code:'85', commune:'Rotanak'},
				{province_code:'17', district_code:'116', commune_code:'936', commune:'Rumdaoh'},
				{province_code:'17', district_code:'116', commune_code:'410', commune:'Rung Roeang'},
				{province_code:'17', district_code:'116', commune_code:'937', commune:'Ruos Roan'},
				{province_code:'17', district_code:'117', commune_code:'938', commune:'Chamraeun'},
				{province_code:'17', district_code:'117', commune_code:'939', commune:'Phnum Tbaeng Muoy'},
				{province_code:'17', district_code:'117', commune_code:'204', commune:'Ro\'ang'},
				{province_code:'17', district_code:'117', commune_code:'940', commune:'Ronak Ser'},
				{province_code:'17', district_code:'117', commune_code:'126', commune:'Sdau'},
				{province_code:'17', district_code:'118', commune_code:'941', commune:'Chhean Mukh'},
				{province_code:'17', district_code:'118', commune_code:'942', commune:'Kampong Pranak'},
				{province_code:'17', district_code:'118', commune_code:'943', commune:'Pal Hal'},
				{province_code:'17', district_code:'118', commune_code:'287', commune:'Pou'},
				{province_code:'17', district_code:'118', commune_code:'944', commune:'Prame'},
				{province_code:'17', district_code:'118', commune_code:'945', commune:'Preah Khleang'},
				{province_code:'18', district_code:'119', commune_code:'946', commune:'Boeng Preah'},
				{province_code:'18', district_code:'119', commune_code:'947', commune:'Cheung Phnum'},
				{province_code:'18', district_code:'119', commune_code:'948', commune:'Chheu Kach'},
				{province_code:'18', district_code:'119', commune_code:'949', commune:'Reaks Chey'},
				{province_code:'18', district_code:'119', commune_code:'950', commune:'Roung Damrei'},
				{province_code:'18', district_code:'119', commune_code:'951', commune:'Sdau Kaong'},
				{province_code:'18', district_code:'119', commune_code:'952', commune:'Spueu Ka'},
				{province_code:'18', district_code:'119', commune_code:'953', commune:'Spueu Kha'},
				{province_code:'18', district_code:'119', commune_code:'954', commune:'Theay'},
				{province_code:'18', district_code:'120', commune_code:'955', commune:'Cheach'},
				{province_code:'18', district_code:'120', commune_code:'956', commune:'Doun Koeng'},
				{province_code:'18', district_code:'120', commune_code:'957', commune:'Krabau'},
				{province_code:'18', district_code:'120', commune_code:'958', commune:'Kranhung'},
				{province_code:'18', district_code:'120', commune_code:'959', commune:'Seang Khveang'},
				{province_code:'18', district_code:'120', commune_code:'960', commune:'Smaong Cheung'},
				{province_code:'18', district_code:'120', commune_code:'961', commune:'Smaong Tboung'},
				{province_code:'18', district_code:'120', commune_code:'962', commune:'Trabaek'},
				{province_code:'18', district_code:'121', commune_code:'226', commune:'Baray'},
				{province_code:'18', district_code:'121', commune_code:'963', commune:'Cheung Tuek'},
				{province_code:'18', district_code:'121', commune_code:'964', commune:'Kampong Leav'},
				{province_code:'18', district_code:'121', commune_code:'965', commune:'Pou Rieng'},
				{province_code:'18', district_code:'121', commune_code:'966', commune:'Preaek Anteah'},
				{province_code:'18', district_code:'121', commune_code:'610', commune:'Preaek Chrey'},
				{province_code:'18', district_code:'121', commune_code:'967', commune:'Prey Kanlaong'},
				{province_code:'18', district_code:'121', commune_code:'968', commune:'Ta Kao'},
				{province_code:'18', district_code:'122', commune_code:'969', commune:'Ansaong'},
				{province_code:'18', district_code:'122', commune_code:'970', commune:'Cham'},
				{province_code:'18', district_code:'122', commune_code:'971', commune:'Cheang Daek'},
				{province_code:'18', district_code:'122', commune_code:'108', commune:'Chrey'},
				{province_code:'18', district_code:'122', commune_code:'972', commune:'Kampong Trabaek'},
				{province_code:'18', district_code:'122', commune_code:'973', commune:'Kansaom Ak'},
				{province_code:'18', district_code:'122', commune_code:'974', commune:'Kou Khchak'},
				{province_code:'18', district_code:'122', commune_code:'975', commune:'Peam Montear'},
				{province_code:'18', district_code:'122', commune_code:'38', commune:'Prasat'},
				{province_code:'18', district_code:'122', commune_code:'976', commune:'Pratheat'},
				{province_code:'18', district_code:'122', commune_code:'233', commune:'Prey Chhor'},
				{province_code:'18', district_code:'122', commune_code:'977', commune:'Prey Poun'},
				{province_code:'18', district_code:'122', commune_code:'978', commune:'Thkov'},
				{province_code:'18', district_code:'123', commune_code:'979', commune:'Chong Ampil'},
				{province_code:'18', district_code:'123', commune_code:'980', commune:'Kanhchriech'},
				{province_code:'18', district_code:'123', commune_code:'981', commune:'Kdoeang Reay'},
				{province_code:'18', district_code:'123', commune_code:'982', commune:'Kouk Kong Kaeut'},
				{province_code:'18', district_code:'123', commune_code:'983', commune:'Kouk Kong Lech'},
				{province_code:'18', district_code:'123', commune_code:'984', commune:'Preal'},
				{province_code:'18', district_code:'123', commune_code:'236', commune:'Thma Pun'},
				{province_code:'18', district_code:'123', commune_code:'985', commune:'Tnaot'},
				{province_code:'18', district_code:'124', commune_code:'986', commune:'Angkor Sar'},
				{province_code:'18', district_code:'124', commune_code:'987', commune:'Chi Phok'},
				{province_code:'18', district_code:'124', commune_code:'294', commune:'Chres'},
				{province_code:'18', district_code:'124', commune_code:'988', commune:'Prey Khnes'},
				{province_code:'18', district_code:'124', commune_code:'989', commune:'Prey Rumdeng'},
				{province_code:'18', district_code:'124', commune_code:'990', commune:'Prey Totueng'},
				{province_code:'18', district_code:'124', commune_code:'312', commune:'Svay Chrum'},
				{province_code:'18', district_code:'124', commune_code:'991', commune:'Trapeang Srae'},
				{province_code:'18', district_code:'125', commune_code:'992', commune:'Angkor Angk'},
				{province_code:'18', district_code:'125', commune_code:'993', commune:'Kampong Prasat'},
				{province_code:'18', district_code:'125', commune_code:'994', commune:'Kaoh Chek'},
				{province_code:'18', district_code:'125', commune_code:'197', commune:'Kaoh Roka'},
				{province_code:'18', district_code:'125', commune_code:'995', commune:'Kaoh Sampov'},
				{province_code:'18', district_code:'125', commune_code:'996', commune:'Krang Ta Yang'},
				{province_code:'18', district_code:'125', commune_code:'213', commune:'Preaek Krabau'},
				{province_code:'18', district_code:'125', commune_code:'997', commune:'Preaek Sambuor'},
				{province_code:'18', district_code:'125', commune_code:'248', commune:'Ruessei Srok'},
				{province_code:'18', district_code:'125', commune_code:'998', commune:'Svay Phluoh'},
				{province_code:'18', district_code:'126', commune_code:'999', commune:'Ba Baong'},
				{province_code:'18', district_code:'126', commune_code:'1000', commune:'Banlich Prasat'},
				{province_code:'18', district_code:'126', commune_code:'1001', commune:'Neak Loeang'},
				{province_code:'18', district_code:'126', commune_code:'1002', commune:'Peam Mean Chey'},
				{province_code:'18', district_code:'126', commune_code:'1003', commune:'Peam Ro'},
				{province_code:'18', district_code:'126', commune_code:'1004', commune:'Preaek Khsay Ka'},
				{province_code:'18', district_code:'126', commune_code:'1005', commune:'Preaek Khsay Kha'},
				{province_code:'18', district_code:'126', commune_code:'1006', commune:'Prey Kandieng'},
				{province_code:'18', district_code:'127', commune_code:'1007', commune:'Kampong Popil'},
				{province_code:'18', district_code:'127', commune_code:'1008', commune:'Kampong Prang'},
				{province_code:'18', district_code:'127', commune_code:'1009', commune:'Kampong Ruessei'},
				{province_code:'18', district_code:'127', commune_code:'1010', commune:'Kanhcham'},
				{province_code:'18', district_code:'127', commune_code:'1011', commune:'Mesa Prachan'},
				{province_code:'18', district_code:'127', commune_code:'1012', commune:'Preaek Ta Sar'},
				{province_code:'18', district_code:'127', commune_code:'1013', commune:'Prey Pnov'},
				{province_code:'18', district_code:'127', commune_code:'1014', commune:'Prey Sniet'},
				{province_code:'18', district_code:'127', commune_code:'1015', commune:'Prey Sralet'},
				{province_code:'18', district_code:'127', commune_code:'1016', commune:'Reab'},
				{province_code:'18', district_code:'127', commune_code:'148', commune:'Roka'},
				{province_code:'18', district_code:'128', commune_code:'1017', commune:'Angkor Reach'},
				{province_code:'18', district_code:'128', commune_code:'1018', commune:'Banteay Chakrei'},
				{province_code:'18', district_code:'128', commune_code:'1019', commune:'Boeng Daol'},
				{province_code:'18', district_code:'128', commune_code:'1020', commune:'Chey Kampok'},
				{province_code:'18', district_code:'128', commune_code:'1021', commune:'Kampong Soeng'},
				{province_code:'18', district_code:'128', commune_code:'1022', commune:'Krang Svay'},
				{province_code:'18', district_code:'128', commune_code:'94', commune:'Lvea'},
				{province_code:'18', district_code:'128', commune_code:'1023', commune:'Preah Sdach'},
				{province_code:'18', district_code:'128', commune_code:'1024', commune:'Reathor'},
				{province_code:'18', district_code:'128', commune_code:'205', commune:'Rumchek'},
				{province_code:'18', district_code:'128', commune_code:'1025', commune:'Seena Reach Otdam'},
				{province_code:'18', district_code:'129', commune_code:'1026', commune:'Angkor Tret'},
				{province_code:'18', district_code:'129', commune_code:'1027', commune:'Chea Khlang'},
				{province_code:'18', district_code:'129', commune_code:'108', commune:'Chrey'},
				{province_code:'18', district_code:'129', commune_code:'1028', commune:'Damrei Puon'},
				{province_code:'18', district_code:'129', commune_code:'1029', commune:'Me Bon'},
				{province_code:'18', district_code:'129', commune_code:'1030', commune:'Pean Roung'},
				{province_code:'18', district_code:'129', commune_code:'1031', commune:'Popueus'},
				{province_code:'18', district_code:'129', commune_code:'1032', commune:'Prey Khla'},
				{province_code:'18', district_code:'129', commune_code:'26', commune:'Samraong'},
				{province_code:'18', district_code:'129', commune_code:'1033', commune:'Svay Antor'},
				{province_code:'18', district_code:'129', commune_code:'50', commune:'Tuek Thla'},
				{province_code:'18', district_code:'130', commune_code:'1034', commune:'Ampil Krau'},
				{province_code:'18', district_code:'130', commune_code:'1035', commune:'Chrey Khmum'},
				{province_code:'18', district_code:'130', commune_code:'220', commune:'Lve'},
				{province_code:'18', district_code:'130', commune_code:'1036', commune:'Pnov Ti Muoy'},
				{province_code:'18', district_code:'130', commune_code:'1037', commune:'Pnov Ti Pir'},
				{province_code:'18', district_code:'130', commune_code:'1038', commune:'Pou Ti'},
				{province_code:'18', district_code:'130', commune_code:'1039', commune:'Preaek Changkran'},
				{province_code:'18', district_code:'130', commune_code:'1040', commune:'Prey Daeum Thnoeng'},
				{province_code:'18', district_code:'130', commune_code:'1041', commune:'Prey Tueng'},
				{province_code:'18', district_code:'130', commune_code:'1042', commune:'Ruessei Sanh'},
				{province_code:'18', district_code:'130', commune_code:'1043', commune:'Rumlech'},
				{province_code:'19', district_code:'131', commune_code:'1044', commune:'Boeng Bat Kandaol'},
				{province_code:'19', district_code:'131', commune_code:'1045', commune:'Boeng Khnar'},
				{province_code:'19', district_code:'131', commune_code:'1046', commune:'Khnar Totueng'},
				{province_code:'19', district_code:'131', commune_code:'1047', commune:'Me Tuek'},
				{province_code:'19', district_code:'131', commune_code:'1048', commune:'Ou Ta Paong'},
				{province_code:'19', district_code:'131', commune_code:'1043', commune:'Rumlech'},
				{province_code:'19', district_code:'131', commune_code:'1049', commune:'Snam Preah'},
				{province_code:'19', district_code:'131', commune_code:'1050', commune:'Svay Doun Keo'},
				{province_code:'19', district_code:'131', commune_code:'1051', commune:'Ta Lou'},
				{province_code:'19', district_code:'131', commune_code:'1052', commune:'Trapeang Chong'},
				{province_code:'19', district_code:'132', commune_code:'141', commune:'Anlong Vil'},
				{province_code:'19', district_code:'132', commune_code:'1053', commune:'Banteay Dei'},
				{province_code:'19', district_code:'132', commune_code:'1054', commune:'Kandieng'},
				{province_code:'19', district_code:'132', commune_code:'736', commune:'Kanhchor'},
				{province_code:'19', district_code:'132', commune_code:'1055', commune:'Reang Til'},
				{province_code:'19', district_code:'132', commune_code:'1056', commune:'Srae Sdok'},
				{province_code:'19', district_code:'132', commune_code:'1057', commune:'Svay Luong'},
				{province_code:'19', district_code:'132', commune_code:'1058', commune:'Sya'},
				{province_code:'19', district_code:'132', commune_code:'367', commune:'Veal'},
				{province_code:'19', district_code:'133', commune_code:'1059', commune:'Anlong Thnaot'},
				{province_code:'19', district_code:'133', commune_code:'1060', commune:'Ansa Chambak'},
				{province_code:'19', district_code:'133', commune_code:'1061', commune:'Boeng Kantuot'},
				{province_code:'19', district_code:'133', commune_code:'1062', commune:'Chheu Tom'},
				{province_code:'19', district_code:'133', commune_code:'668', commune:'Kampong Luong'},
				{province_code:'19', district_code:'133', commune_code:'1063', commune:'Kampong Po'},
				{province_code:'19', district_code:'133', commune_code:'1064', commune:'Kbal Trach'},
				{province_code:'19', district_code:'133', commune_code:'1065', commune:'O Sandan'},
				{province_code:'19', district_code:'133', commune_code:'1066', commune:'Sna Ansa'},
				{province_code:'19', district_code:'133', commune_code:'1067', commune:'Svay Sa'},
				{province_code:'19', district_code:'133', commune_code:'428', commune:'Tnaot Chum'},
				{province_code:'19', district_code:'134', commune_code:'1068', commune:'Bak Chenhchien'},
				{province_code:'19', district_code:'134', commune_code:'1069', commune:'Leach'},
				{province_code:'19', district_code:'134', commune_code:'1070', commune:'Phteah Rung'},
				{province_code:'19', district_code:'134', commune_code:'1071', commune:'Prongil'},
				{province_code:'19', district_code:'134', commune_code:'1072', commune:'Rokat'},
				{province_code:'19', district_code:'134', commune_code:'26', commune:'Samraong'},
				{province_code:'19', district_code:'134', commune_code:'1073', commune:'Santreae'},
				{province_code:'19', district_code:'135', commune_code:'1074', commune:'Chamraeun Phal'},
				{province_code:'19', district_code:'135', commune_code:'1075', commune:'Kaoh Chum'},
				{province_code:'19', district_code:'135', commune_code:'1076', commune:'Lolok Sa'},
				{province_code:'19', district_code:'135', commune_code:'1077', commune:'Phteah Prey'},
				{province_code:'19', district_code:'135', commune_code:'1078', commune:'Prey Nhi'},
				{province_code:'19', district_code:'135', commune_code:'1079', commune:'Roleab'},
				{province_code:'19', district_code:'135', commune_code:'1080', commune:'Svay at'},
				{province_code:'19', district_code:'136', commune_code:'1081', commune:'Anlong Reab'},
				{province_code:'19', district_code:'136', commune_code:'1082', commune:'Krapeu Pir'},
				{province_code:'19', district_code:'136', commune_code:'1083', commune:'Ou Saom'},
				{province_code:'19', district_code:'136', commune_code:'1084', commune:'Pramaoy'},
				{province_code:'19', district_code:'136', commune_code:'1085', commune:'Thma Da'},
				{province_code:'20', district_code:'137', commune_code:'1086', commune:'Malik'},
				{province_code:'20', district_code:'137', commune_code:'1087', commune:'Nhang'},
				{province_code:'20', district_code:'137', commune_code:'1088', commune:'Ta Lav'},
				{province_code:'20', district_code:'138', commune_code:'1089', commune:'Kachanh'},
				{province_code:'20', district_code:'138', commune_code:'1090', commune:'Labansiek'},
				{province_code:'20', district_code:'138', commune_code:'1091', commune:'Yeak Laom'},
				{province_code:'20', district_code:'139', commune_code:'336', commune:'Kak'},
				{province_code:'20', district_code:'139', commune_code:'1092', commune:'Ke Chong'},
				{province_code:'20', district_code:'139', commune_code:'1093', commune:'Laming'},
				{province_code:'20', district_code:'139', commune_code:'1094', commune:'Lung Khung'},
				{province_code:'20', district_code:'139', commune_code:'1095', commune:'Seung'},
				{province_code:'20', district_code:'139', commune_code:'1096', commune:'Ting Chak'},
				{province_code:'20', district_code:'140', commune_code:'1097', commune:'Serei Mongkol'},
				{province_code:'20', district_code:'140', commune_code:'1098', commune:'Srae Angkrong'},
				{province_code:'20', district_code:'140', commune_code:'1099', commune:'Ta Ang'},
				{province_code:'20', district_code:'140', commune_code:'1100', commune:'Toen'},
				{province_code:'20', district_code:'140', commune_code:'1101', commune:'Trapeang Chres'},
				{province_code:'20', district_code:'140', commune_code:'1102', commune:'Trapeang Kraham'},
				{province_code:'20', district_code:'141', commune_code:'1103', commune:'Chey Otdam'},
				{province_code:'20', district_code:'141', commune_code:'1104', commune:'Ka Laeng'},
				{province_code:'20', district_code:'141', commune_code:'1105', commune:'La Bang Muoy'},
				{province_code:'20', district_code:'141', commune_code:'1106', commune:'La Bang Pir'},
				{province_code:'20', district_code:'141', commune_code:'1107', commune:'Pa Tang'},
				{province_code:'20', district_code:'141', commune_code:'1108', commune:'Seda'},
				{province_code:'20', district_code:'142', commune_code:'1109', commune:'Aekakpheap'},
				{province_code:'20', district_code:'142', commune_code:'1110', commune:'Chan (Pouy)'},
				{province_code:'20', district_code:'142', commune_code:'1111', commune:'Cha Ung'},
				{province_code:'20', district_code:'142', commune_code:'1112', commune:'Kalai'},
				{province_code:'20', district_code:'142', commune_code:'1113', commune:'L\'ak'},
				{province_code:'20', district_code:'142', commune_code:'1114', commune:'Ou Chum'},
				{province_code:'20', district_code:'142', commune_code:'443', commune:'Sameakki'},
				{province_code:'20', district_code:'143', commune_code:'1115', commune:'Bar Kham'},
				{province_code:'20', district_code:'143', commune_code:'1116', commune:'Lum Choar'},
				{province_code:'20', district_code:'143', commune_code:'1117', commune:'Pak Nhai'},
				{province_code:'20', district_code:'143', commune_code:'1118', commune:'Pate'},
				{province_code:'20', district_code:'143', commune_code:'1119', commune:'Saom Thum'},
				{province_code:'20', district_code:'143', commune_code:'1120', commune:'Sesant'},
				{province_code:'20', district_code:'143', commune_code:'1121', commune:'Ya Tung'},
				{province_code:'20', district_code:'144', commune_code:'1122', commune:'Ta Veaeng Kraom'},
				{province_code:'20', district_code:'144', commune_code:'1123', commune:'Ta Veaeng Leu'},
				{province_code:'20', district_code:'145', commune_code:'1124', commune:'Ban Pong'},
				{province_code:'20', district_code:'145', commune_code:'1125', commune:'Hat Pak'},
				{province_code:'20', district_code:'145', commune_code:'1126', commune:'Ka Choun'},
				{province_code:'20', district_code:'145', commune_code:'1127', commune:'Kaoh Pang'},
				{province_code:'20', district_code:'145', commune_code:'1128', commune:'Kaoh Peak'},
				{province_code:'20', district_code:'145', commune_code:'1129', commune:'Kok Lak'},
				{province_code:'20', district_code:'145', commune_code:'1130', commune:'Pa Kalan'},
				{province_code:'20', district_code:'145', commune_code:'1131', commune:'Phnum Kok'},
				{province_code:'20', district_code:'145', commune_code:'1132', commune:'Veun Sai'},
				{province_code:'21', district_code:'146', commune_code:'1133', commune:'Char Chhuk'},
				{province_code:'21', district_code:'146', commune_code:'1134', commune:'Doun Peaeng'},
				{province_code:'21', district_code:'146', commune_code:'1135', commune:'Kouk Doung'},
				{province_code:'21', district_code:'146', commune_code:'446', commune:'Koul'},
				{province_code:'21', district_code:'146', commune_code:'1136', commune:'Nokor Pheas'},
				{province_code:'21', district_code:'146', commune_code:'1137', commune:'Srae Khvav'},
				{province_code:'21', district_code:'146', commune_code:'1138', commune:'Ta Saom'},
				{province_code:'21', district_code:'147', commune_code:'1139', commune:'Chob Ta Trav'},
				{province_code:'21', district_code:'147', commune_code:'1140', commune:'Leang Dai'},
				{province_code:'21', district_code:'147', commune_code:'1141', commune:'Peak Snaeng'},
				{province_code:'21', district_code:'147', commune_code:'55', commune:'Svay Chek'},
				{province_code:'21', district_code:'148', commune_code:'1142', commune:'Khnar Sanday'},
				{province_code:'21', district_code:'148', commune_code:'1143', commune:'Khun Ream'},
				{province_code:'21', district_code:'148', commune_code:'1144', commune:'Preak Dak'},
				{province_code:'21', district_code:'148', commune_code:'205', commune:'Rumchek'},
				{province_code:'21', district_code:'148', commune_code:'1145', commune:'Run Ta Aek'},
				{province_code:'21', district_code:'148', commune_code:'436', commune:'Tbaeng'},
				{province_code:'21', district_code:'149', commune_code:'1146', commune:'Anlong Samnar'},
				{province_code:'21', district_code:'149', commune_code:'1147', commune:'Chi Kraeng'},
				{province_code:'21', district_code:'149', commune_code:'1148', commune:'Kampong Kdei'},
				{province_code:'21', district_code:'149', commune_code:'1149', commune:'Khvav'},
				{province_code:'21', district_code:'149', commune_code:'1150', commune:'Kouk Thlok Kraom'},
				{province_code:'21', district_code:'149', commune_code:'1151', commune:'Kouk Thlok Leu'},
				{province_code:'21', district_code:'149', commune_code:'1152', commune:'Lveaeng Ruessei'},
				{province_code:'21', district_code:'149', commune_code:'1153', commune:'Pongro Kraom'},
				{province_code:'21', district_code:'149', commune_code:'1154', commune:'Pongro Leu'},
				{province_code:'21', district_code:'149', commune_code:'1155', commune:'Ruessei Lok'},
				{province_code:'21', district_code:'149', commune_code:'1156', commune:'Sangvaeuy'},
				{province_code:'21', district_code:'149', commune_code:'1157', commune:'Spean Tnaot'},
				{province_code:'21', district_code:'150', commune_code:'1158', commune:'Chonloas Dai'},
				{province_code:'21', district_code:'150', commune_code:'1159', commune:'Kampong Thkov'},
				{province_code:'21', district_code:'150', commune_code:'1160', commune:'Kralanh'},
				{province_code:'21', district_code:'150', commune_code:'1161', commune:'Krouch Kor'},
				{province_code:'21', district_code:'150', commune_code:'1162', commune:'Roung Kou'},
				{province_code:'21', district_code:'150', commune_code:'1163', commune:'Saen Sokh'},
				{province_code:'21', district_code:'150', commune_code:'16', commune:'Sambuor'},
				{province_code:'21', district_code:'150', commune_code:'767', commune:'Snuol'},
				{province_code:'21', district_code:'150', commune_code:'1164', commune:'Sranal'},
				{province_code:'21', district_code:'150', commune_code:'1165', commune:'Ta an'},
				{province_code:'21', district_code:'151', commune_code:'194', commune:'Ampil'},
				{province_code:'21', district_code:'151', commune_code:'1166', commune:'Bakong'},
				{province_code:'21', district_code:'151', commune_code:'416', commune:'Ballangk'},
				{province_code:'21', district_code:'151', commune_code:'1167', commune:'Kampong Phluk'},
				{province_code:'21', district_code:'151', commune_code:'1168', commune:'Kandaek'},
				{province_code:'21', district_code:'151', commune_code:'1169', commune:'Kantreang'},
				{province_code:'21', district_code:'151', commune_code:'242', commune:'Mean Chey'},
				{province_code:'21', district_code:'151', commune_code:'52', commune:'Roluos'},
				{province_code:'21', district_code:'151', commune_code:'570', commune:'Trapeang Thum'},
				{province_code:'21', district_code:'152', commune_code:'1170', commune:'Doun Keo'},
				{province_code:'21', district_code:'152', commune_code:'1171', commune:'Kdei Run'},
				{province_code:'21', district_code:'152', commune_code:'1172', commune:'Keo Poar'},
				{province_code:'21', district_code:'152', commune_code:'1173', commune:'Khnat'},
				{province_code:'21', district_code:'152', commune_code:'1174', commune:'Krabei Riel'},
				{province_code:'21', district_code:'152', commune_code:'94', commune:'Lvea'},
				{province_code:'21', district_code:'152', commune_code:'1175', commune:'Mukh Paen'},
				{province_code:'21', district_code:'152', commune_code:'1176', commune:'Pou Treay'},
				{province_code:'21', district_code:'152', commune_code:'1177', commune:'Prey Chruk'},
				{province_code:'21', district_code:'152', commune_code:'1178', commune:'Puok'},
				{province_code:'21', district_code:'152', commune_code:'1179', commune:'Reul'},
				{province_code:'21', district_code:'152', commune_code:'1180', commune:'Samraong Yea'},
				{province_code:'21', district_code:'152', commune_code:'1181', commune:'Sasar Sdam'},
				{province_code:'21', district_code:'152', commune_code:'1182', commune:'Trei Nhoar'},
				{province_code:'21', district_code:'152', commune_code:'691', commune:'Tuek Vil'},
				{province_code:'21', district_code:'152', commune_code:'922', commune:'Yeang'},
				{province_code:'21', district_code:'153', commune_code:'1183', commune:'Chong Khnies'},
				{province_code:'21', district_code:'153', commune_code:'1184', commune:'Chreav'},
				{province_code:'21', district_code:'153', commune_code:'1185', commune:'Kouk Chak'},
				{province_code:'21', district_code:'153', commune_code:'1186', commune:'Nokor Thum'},
				{province_code:'21', district_code:'153', commune_code:'1187', commune:'Sala Kamraeuk'},
				{province_code:'21', district_code:'153', commune_code:'16', commune:'Sambuor'},
				{province_code:'21', district_code:'153', commune_code:'1188', commune:'Siem Reap'},
				{province_code:'21', district_code:'153', commune_code:'54', commune:'Sla Kram'},
				{province_code:'21', district_code:'153', commune_code:'235', commune:'Srangae'},
				{province_code:'21', district_code:'153', commune_code:'1189', commune:'Svay Dangkum'},
				{province_code:'21', district_code:'154', commune_code:'1190', commune:'Chan Sar'},
				{province_code:'21', district_code:'154', commune_code:'1191', commune:'Dam Daek'},
				{province_code:'21', district_code:'154', commune_code:'1192', commune:'Dan Run'},
				{province_code:'21', district_code:'154', commune_code:'1193', commune:'Kampong Khleang'},
				{province_code:'21', district_code:'154', commune_code:'1194', commune:'Khchas'},
				{province_code:'21', district_code:'154', commune_code:'1195', commune:'Khnar Pou'},
				{province_code:'21', district_code:'154', commune_code:'1196', commune:'Kien Sangkae'},
				{province_code:'21', district_code:'154', commune_code:'272', commune:'Popel'},
				{province_code:'21', district_code:'154', commune_code:'26', commune:'Samraong'},
				{province_code:'21', district_code:'154', commune_code:'1197', commune:'Ta Yaek'},
				{province_code:'21', district_code:'155', commune_code:'1198', commune:'Chrouy Neang Nguon'},
				{province_code:'21', district_code:'155', commune_code:'1199', commune:'Klang Hay'},
				{province_code:'21', district_code:'155', commune_code:'111', commune:'Moung'},
				{province_code:'21', district_code:'155', commune_code:'1200', commune:'Prei'},
				{province_code:'21', district_code:'155', commune_code:'1201', commune:'Slaeng Spean'},
				{province_code:'21', district_code:'155', commune_code:'1202', commune:'Tram Sasar'},
				{province_code:'21', district_code:'156', commune_code:'1203', commune:'Boeng Mealea'},
				{province_code:'21', district_code:'156', commune_code:'741', commune:'Kantuot'},
				{province_code:'21', district_code:'156', commune_code:'1204', commune:'Khnang Phnum'},
				{province_code:'21', district_code:'156', commune_code:'1205', commune:'Svay Leu'},
				{province_code:'21', district_code:'156', commune_code:'1206', commune:'Ta Siem'},
				{province_code:'21', district_code:'157', commune_code:'1207', commune:'Lvea Krang'},
				{province_code:'21', district_code:'157', commune_code:'38', commune:'Prasat'},
				{province_code:'21', district_code:'157', commune_code:'1208', commune:'Srae Nouy'},
				{province_code:'21', district_code:'157', commune_code:'1067', commune:'Svay Sa'},
				{province_code:'21', district_code:'157', commune_code:'1209', commune:'Varin'},
				{province_code:'22', district_code:'158', commune_code:'1210', commune:'Kampun'},
				{province_code:'22', district_code:'158', commune_code:'1211', commune:'Kbal Romeas'},
				{province_code:'22', district_code:'158', commune_code:'1212', commune:'Phluk'},
				{province_code:'22', district_code:'158', commune_code:'1213', commune:'Samkhuoy'},
				{province_code:'22', district_code:'158', commune_code:'126', commune:'Sdau'},
				{province_code:'22', district_code:'158', commune_code:'1214', commune:'Srae Kor'},
				{province_code:'22', district_code:'158', commune_code:'1215', commune:'Ta Lat'},
				{province_code:'22', district_code:'159', commune_code:'1216', commune:'Kaoh Preah'},
				{province_code:'22', district_code:'159', commune_code:'1217', commune:'Kaoh Sampeay'},
				{province_code:'22', district_code:'159', commune_code:'1218', commune:'Kaoh Sralay'},
				{province_code:'22', district_code:'159', commune_code:'1219', commune:'Ou Mreah'},
				{province_code:'22', district_code:'159', commune_code:'1220', commune:'Ou Ruessei Kandal'},
				{province_code:'22', district_code:'159', commune_code:'1221', commune:'Siem Bouk'},
				{province_code:'22', district_code:'159', commune_code:'1222', commune:'Srae Krasang'},
				{province_code:'22', district_code:'160', commune_code:'1223', commune:'Preaek Meas'},
				{province_code:'22', district_code:'160', commune_code:'138', commune:'Santepheap'},
				{province_code:'22', district_code:'160', commune_code:'1224', commune:'Sekong'},
				{province_code:'22', district_code:'160', commune_code:'1225', commune:'Srae Sambour'},
				{province_code:'22', district_code:'160', commune_code:'1226', commune:'Thma Keo'},
				{province_code:'22', district_code:'161', commune_code:'1227', commune:'Preah Bat'},
				{province_code:'22', district_code:'161', commune_code:'443', commune:'Sameakki'},
				{province_code:'22', district_code:'161', commune_code:'1228', commune:'Srah Ruessei'},
				{province_code:'22', district_code:'161', commune_code:'1229', commune:'Stueng Traeng'},
				{province_code:'22', district_code:'162', commune_code:'1230', commune:'Anlong Chrey'},
				{province_code:'22', district_code:'162', commune_code:'1231', commune:'Anlong Phe'},
				{province_code:'22', district_code:'162', commune_code:'1232', commune:'Chamkar Leu'},
				{province_code:'22', district_code:'162', commune_code:'1233', commune:'Kang Cham'},
				{province_code:'22', district_code:'162', commune_code:'1234', commune:'Kaoh Snaeng'},
				{province_code:'22', district_code:'162', commune_code:'1235', commune:'Ou Rai'},
				{province_code:'22', district_code:'162', commune_code:'203', commune:'Ou Svay'},
				{province_code:'22', district_code:'162', commune_code:'1236', commune:'Preah Rumkel'},
				{province_code:'22', district_code:'162', commune_code:'1237', commune:'Sam\'ang'},
				{province_code:'22', district_code:'162', commune_code:'1238', commune:'Srae Ruessei'},
				{province_code:'22', district_code:'162', commune_code:'1239', commune:'Thala'},
				{province_code:'23', district_code:'163', commune_code:'1240', commune:'Bati'},
				{province_code:'23', district_code:'163', commune_code:'1241', commune:'Bavet'},
				{province_code:'23', district_code:'163', commune_code:'1242', commune:'Chantrea'},
				{province_code:'23', district_code:'163', commune_code:'294', commune:'Chres'},
				{province_code:'23', district_code:'163', commune_code:'1243', commune:'Me Sa Thngak'},
				{province_code:'23', district_code:'163', commune_code:'38', commune:'Prasat'},
				{province_code:'23', district_code:'163', commune_code:'1244', commune:'Prey Angkunh'},
				{province_code:'23', district_code:'163', commune_code:'1245', commune:'Prey Kokir'},
				{province_code:'23', district_code:'163', commune_code:'26', commune:'Samraong'},
				{province_code:'23', district_code:'163', commune_code:'1246', commune:'Tuol Sdei'},
				{province_code:'23', district_code:'164', commune_code:'1247', commune:'Banteay Krang'},
				{province_code:'23', district_code:'164', commune_code:'1248', commune:'Ksetr'},
				{province_code:'23', district_code:'164', commune_code:'1249', commune:'Nhor'},
				{province_code:'23', district_code:'164', commune_code:'49', commune:'Preah Ponlea'},
				{province_code:'23', district_code:'164', commune_code:'701', commune:'Prey Thum'},
				{province_code:'23', district_code:'164', commune_code:'1250', commune:'Reach Montir'},
				{province_code:'23', district_code:'164', commune_code:'1251', commune:'Samlei'},
				{province_code:'23', district_code:'164', commune_code:'1252', commune:'Samyaong'},
				{province_code:'23', district_code:'164', commune_code:'1253', commune:'Svay Ta Yean'},
				{province_code:'23', district_code:'164', commune_code:'1254', commune:'Svay Toea'},
				{province_code:'23', district_code:'164', commune_code:'567', commune:'Thmei'},
				{province_code:'23', district_code:'164', commune_code:'985', commune:'Tnaot'},
				{province_code:'23', district_code:'165', commune_code:'194', commune:'Ampil'},
				{province_code:'23', district_code:'165', commune_code:'414', commune:'Andoung Pou'},
				{province_code:'23', district_code:'165', commune_code:'1255', commune:'Andoung Trabaek'},
				{province_code:'23', district_code:'165', commune_code:'1256', commune:'Angk Prasrae'},
				{province_code:'23', district_code:'165', commune_code:'1257', commune:'Chantrei'},
				{province_code:'23', district_code:'165', commune_code:'1258', commune:'Chrey Thum'},
				{province_code:'23', district_code:'165', commune_code:'438', commune:'Doung'},
				{province_code:'23', district_code:'165', commune_code:'1259', commune:'Kampong Trach'},
				{province_code:'23', district_code:'165', commune_code:'633', commune:'Kokir'},
				{province_code:'23', district_code:'165', commune_code:'800', commune:'Krasang'},
				{province_code:'23', district_code:'165', commune_code:'1260', commune:'Mream'},
				{province_code:'23', district_code:'165', commune_code:'1261', commune:'Mukh Da'},
				{province_code:'23', district_code:'165', commune_code:'1262', commune:'Sambatt Mean Chey'},
				{province_code:'23', district_code:'165', commune_code:'16', commune:'Sambuor'},
				{province_code:'23', district_code:'165', commune_code:'1263', commune:'Trapeang Sdau'},
				{province_code:'23', district_code:'165', commune_code:'1264', commune:'Tras'},
				{province_code:'23', district_code:'166', commune_code:'1265', commune:'Bos Mon'},
				{province_code:'23', district_code:'166', commune_code:'265', commune:'Chak'},
				{province_code:'23', district_code:'166', commune_code:'1266', commune:'Chrung Popel'},
				{province_code:'23', district_code:'166', commune_code:'1267', commune:'Kampong Ampil'},
				{province_code:'23', district_code:'166', commune_code:'1268', commune:'Meun Chey'},
				{province_code:'23', district_code:'166', commune_code:'699', commune:'Pong Tuek'},
				{province_code:'23', district_code:'166', commune_code:'1269', commune:'Sangkae'},
				{province_code:'23', district_code:'166', commune_code:'55', commune:'Svay Chek'},
				{province_code:'23', district_code:'166', commune_code:'1270', commune:'Thmea'},
				{province_code:'23', district_code:'166', commune_code:'1271', commune:'Thna Thnong'},
				{province_code:'23', district_code:'167', commune_code:'1272', commune:'Angk Ta Sou'},
				{province_code:'23', district_code:'167', commune_code:'1273', commune:'Basak'},
				{province_code:'23', district_code:'167', commune_code:'381', commune:'Chambak'},
				{province_code:'23', district_code:'167', commune_code:'1274', commune:'Chamlang'},
				{province_code:'23', district_code:'167', commune_code:'1275', commune:'Chek'},
				{province_code:'23', district_code:'167', commune_code:'74', commune:'Chheu Teal'},
				{province_code:'23', district_code:'167', commune_code:'1276', commune:'Doun Sa'},
				{province_code:'23', district_code:'167', commune_code:'1277', commune:'Kouk Pring'},
				{province_code:'23', district_code:'167', commune_code:'1278', commune:'Kraol Kou'},
				{province_code:'23', district_code:'167', commune_code:'1279', commune:'Kruos'},
				{province_code:'23', district_code:'167', commune_code:'1280', commune:'Pouthi Reach'},
				{province_code:'23', district_code:'167', commune_code:'1281', commune:'Svay Angk'},
				{province_code:'23', district_code:'167', commune_code:'312', commune:'Svay Chrum'},
				{province_code:'23', district_code:'167', commune_code:'1282', commune:'Svay Thum'},
				{province_code:'23', district_code:'167', commune_code:'1283', commune:'Svay Yea'},
				{province_code:'23', district_code:'167', commune_code:'1284', commune:'Ta Suos'},
				{province_code:'23', district_code:'167', commune_code:'1285', commune:'Thlok'},
				{province_code:'23', district_code:'168', commune_code:'1286', commune:'Koy Trabaek'},
				{province_code:'23', district_code:'168', commune_code:'1287', commune:'Pou Ta Hao'},
				{province_code:'23', district_code:'168', commune_code:'1288', commune:'Prey Chhlak'},
				{province_code:'23', district_code:'168', commune_code:'1289', commune:'Svay Rieng'},
				{province_code:'23', district_code:'169', commune_code:'1290', commune:'Chrak Mtes'},
				{province_code:'23', district_code:'169', commune_code:'1291', commune:'Kandieng Reay'},
				{province_code:'23', district_code:'169', commune_code:'1292', commune:'Kokir Saom'},
				{province_code:'23', district_code:'169', commune_code:'408', commune:'Monourom'},
				{province_code:'23', district_code:'169', commune_code:'1293', commune:'Popeaek'},
				{province_code:'23', district_code:'169', commune_code:'1294', commune:'Prasout'},
				{province_code:'23', district_code:'169', commune_code:'1295', commune:'Prey Ta Ei'},
				{province_code:'23', district_code:'169', commune_code:'1296', commune:'Romeang Thkaol'},
				{province_code:'23', district_code:'169', commune_code:'16', commune:'Sambuor'},
				{province_code:'23', district_code:'169', commune_code:'1297', commune:'Sangkhoar'},
				{province_code:'23', district_code:'169', commune_code:'347', commune:'Svay Rumpea'},
				{province_code:'24', district_code:'170', commune_code:'1298', commune:'Angkor Borei'},
				{province_code:'24', district_code:'170', commune_code:'1299', commune:'Ba Srae'},
				{province_code:'24', district_code:'170', commune_code:'1300', commune:'Kouk Thlok'},
				{province_code:'24', district_code:'170', commune_code:'32', commune:'Ponley'},
				{province_code:'24', district_code:'170', commune_code:'1301', commune:'Preaek Phtoul'},
				{province_code:'24', district_code:'170', commune_code:'1302', commune:'Prey Phkoam'},
				{province_code:'24', district_code:'171', commune_code:'381', commune:'Chambak'},
				{province_code:'24', district_code:'171', commune_code:'486', commune:'Champei'},
				{province_code:'24', district_code:'171', commune_code:'438', commune:'Doung'},
				{province_code:'24', district_code:'171', commune_code:'1303', commune:'Kandoeng'},
				{province_code:'24', district_code:'171', commune_code:'1304', commune:'Komar Reachea'},
				{province_code:'24', district_code:'171', commune_code:'307', commune:'Krang Leav'},
				{province_code:'24', district_code:'171', commune_code:'834', commune:'Krang Thnong'},
				{province_code:'24', district_code:'171', commune_code:'1305', commune:'Lumpong'},
				{province_code:'24', district_code:'171', commune_code:'1306', commune:'Pea Ream'},
				{province_code:'24', district_code:'171', commune_code:'1307', commune:'Pot Sar'},
				{province_code:'24', district_code:'171', commune_code:'28', commune:'Souphi'},
				{province_code:'24', district_code:'171', commune_code:'1308', commune:'Tang Doung'},
				{province_code:'24', district_code:'171', commune_code:'985', commune:'Tnaot'},
				{province_code:'24', district_code:'171', commune_code:'840', commune:'Trapeang Krasang'},
				{province_code:'24', district_code:'171', commune_code:'1309', commune:'Trapeang Sab'},
				{province_code:'24', district_code:'172', commune_code:'1310', commune:'Bourei Cholsar'},
				{province_code:'24', district_code:'172', commune_code:'1311', commune:'Chey Chouk'},
				{province_code:'24', district_code:'172', commune_code:'1312', commune:'Doung Khpos'},
				{province_code:'24', district_code:'172', commune_code:'1313', commune:'Kampong Krasang'},
				{province_code:'24', district_code:'172', commune_code:'1314', commune:'Kouk Pou'},
				{province_code:'24', district_code:'173', commune_code:'226', commune:'Baray'},
				{province_code:'24', district_code:'173', commune_code:'1315', commune:'Roka Knong'},
				{province_code:'24', district_code:'173', commune_code:'1316', commune:'Roka Krau'},
				{province_code:'24', district_code:'174', commune_code:'1317', commune:'Krapum Chhuk'},
				{province_code:'24', district_code:'174', commune_code:'1318', commune:'Pech Sar'},
				{province_code:'24', district_code:'174', commune_code:'1032', commune:'Prey Khla'},
				{province_code:'24', district_code:'174', commune_code:'1319', commune:'Prey Yuthka'},
				{province_code:'24', district_code:'174', commune_code:'1320', commune:'Romenh'},
				{province_code:'24', district_code:'174', commune_code:'1321', commune:'Thlea Prachum'},
				{province_code:'24', district_code:'175', commune_code:'1322', commune:'Angk Prasat'},
				{province_code:'24', district_code:'175', commune_code:'1323', commune:'Kamnab'},
				{province_code:'24', district_code:'175', commune_code:'1324', commune:'Kampeaeng'},
				{province_code:'24', district_code:'175', commune_code:'1325', commune:'Kiri Chong Kaoh'},
				{province_code:'24', district_code:'175', commune_code:'1326', commune:'Kouk Prech'},
				{province_code:'24', district_code:'175', commune_code:'1327', commune:'Phnum Den'},
				{province_code:'24', district_code:'175', commune_code:'1328', commune:'Preah Bat Choan Chum'},
				{province_code:'24', district_code:'175', commune_code:'1329', commune:'Prey Ampok'},
				{province_code:'24', district_code:'175', commune_code:'989', commune:'Prey Rumdeng'},
				{province_code:'24', district_code:'175', commune_code:'1330', commune:'Ream Andaeuk'},
				{province_code:'24', district_code:'175', commune_code:'1331', commune:'Saom'},
				{province_code:'24', district_code:'175', commune_code:'1332', commune:'Ta Ou'},
				{province_code:'24', district_code:'176', commune_code:'1333', commune:'Angkanh'},
				{province_code:'24', district_code:'176', commune_code:'1334', commune:'Ban Kam'},
				{province_code:'24', district_code:'176', commune_code:'1335', commune:'Champa'},
				{province_code:'24', district_code:'176', commune_code:'1336', commune:'Char'},
				{province_code:'24', district_code:'176', commune_code:'1324', commune:'Kampeaeng'},
				{province_code:'24', district_code:'176', commune_code:'218', commune:'Kampong Reab'},
				{province_code:'24', district_code:'176', commune_code:'1337', commune:'Kdanh'},
				{province_code:'24', district_code:'176', commune_code:'1338', commune:'Pou Rumchak'},
				{province_code:'24', district_code:'176', commune_code:'1339', commune:'Prey Kabbas'},
				{province_code:'24', district_code:'176', commune_code:'1340', commune:'Prey Lvea'},
				{province_code:'24', district_code:'176', commune_code:'1341', commune:'Prey Phdau'},
				{province_code:'24', district_code:'176', commune_code:'583', commune:'Snao'},
				{province_code:'24', district_code:'176', commune_code:'1342', commune:'Tang Yab'},
				{province_code:'24', district_code:'98', commune_code:'1343', commune:'Boeng Tranh Khang Cheung'},
				{province_code:'24', district_code:'98', commune_code:'1344', commune:'Boeng Tranh Khang Tboung'},
				{province_code:'24', district_code:'98', commune_code:'1345', commune:'Cheung Kuon'},
				{province_code:'24', district_code:'98', commune_code:'1346', commune:'Chumreah Pen'},
				{province_code:'24', district_code:'98', commune_code:'1149', commune:'Khvav'},
				{province_code:'24', district_code:'98', commune_code:'1347', commune:'Lumchang'},
				{province_code:'24', district_code:'98', commune_code:'1348', commune:'Rovieng'},
				{province_code:'24', district_code:'98', commune_code:'26', commune:'Samraong'},
				{province_code:'24', district_code:'98', commune_code:'1349', commune:'Sla'},
				{province_code:'24', district_code:'98', commune_code:'1350', commune:'Soeng'},
				{province_code:'24', district_code:'98', commune_code:'472', commune:'Trea'},
				{province_code:'24', district_code:'177', commune_code:'1351', commune:'Angk Ta Saom'},
				{province_code:'24', district_code:'177', commune_code:'1352', commune:'Cheang Tong'},
				{province_code:'24', district_code:'177', commune_code:'1353', commune:'Kus'},
				{province_code:'24', district_code:'177', commune_code:'1354', commune:'Leay Bour'},
				{province_code:'24', district_code:'177', commune_code:'1355', commune:'Nhaeng Nhang'},
				{province_code:'24', district_code:'177', commune_code:'1356', commune:'Otdam Souriya'},
				{province_code:'24', district_code:'177', commune_code:'1357', commune:'Ou Saray'},
				{province_code:'24', district_code:'177', commune_code:'272', commune:'Popel'},
				{province_code:'24', district_code:'177', commune_code:'26', commune:'Samraong'},
				{province_code:'24', district_code:'177', commune_code:'1358', commune:'Srae Ronoung'},
				{province_code:'24', district_code:'177', commune_code:'1359', commune:'Ta Phem'},
				{province_code:'24', district_code:'177', commune_code:'1360', commune:'Tram Kak'},
				{province_code:'24', district_code:'177', commune_code:'1361', commune:'Trapeang Kranhung'},
				{province_code:'24', district_code:'177', commune_code:'1362', commune:'Trapeang Thum Khang Cheung'},
				{province_code:'24', district_code:'177', commune_code:'1363', commune:'Trapeang Thum Khang Tboung'},
				{province_code:'24', district_code:'178', commune_code:'1333', commune:'Angkanh'},
				{province_code:'24', district_code:'178', commune_code:'1364', commune:'Angk Keo'},
				{province_code:'24', district_code:'178', commune_code:'1365', commune:'Angk Khnaor'},
				{province_code:'24', district_code:'178', commune_code:'1366', commune:'Chi Khmar'},
				{province_code:'24', district_code:'178', commune_code:'1149', commune:'Khvav'},
				{province_code:'24', district_code:'178', commune_code:'409', commune:'Prambei Mom'},
				{province_code:'24', district_code:'178', commune_code:'1367', commune:'Prey Sloek'},
				{province_code:'24', district_code:'178', commune_code:'1368', commune:'Roneam'},
				{province_code:'24', district_code:'178', commune_code:'16', commune:'Sambuor'},
				{province_code:'24', district_code:'178', commune_code:'625', commune:'Sanlung'},
				{province_code:'24', district_code:'178', commune_code:'1369', commune:'Smaong'},
				{province_code:'24', district_code:'178', commune_code:'235', commune:'Srangae'},
				{province_code:'24', district_code:'178', commune_code:'1285', commune:'Thlok'},
				{province_code:'24', district_code:'178', commune_code:'1370', commune:'Tralach'},
				{province_code:'25', district_code:'179', commune_code:'1371', commune:'Chong Cheach'},
				{province_code:'25', district_code:'179', commune_code:'1372', commune:'Dambae'},
				{province_code:'25', district_code:'179', commune_code:'1373', commune:'Kouk Srok'},
				{province_code:'25', district_code:'179', commune_code:'1374', commune:'Neang Teut'},
				{province_code:'25', district_code:'179', commune_code:'1108', commune:'Seda'},
				{province_code:'25', district_code:'179', commune_code:'568', commune:'Trapeang Pring'},
				{province_code:'25', district_code:'179', commune_code:'1375', commune:'Tuek Chrov'},
				{province_code:'25', district_code:'180', commune_code:'445', commune:'Chhuk'},
				{province_code:'25', district_code:'180', commune_code:'1376', commune:'Chumnik'},
				{province_code:'25', district_code:'180', commune_code:'1377', commune:'Kampong Treas'},
				{province_code:'25', district_code:'180', commune_code:'1378', commune:'Kaoh Pir'},
				{province_code:'25', district_code:'180', commune_code:'1379', commune:'Krouch Chhmar'},
				{province_code:'25', district_code:'180', commune_code:'1380', commune:'Peus Muoy'},
				{province_code:'25', district_code:'180', commune_code:'1381', commune:'Peus Pir'},
				{province_code:'25', district_code:'180', commune_code:'1382', commune:'Preaek a Chi'},
				{province_code:'25', district_code:'180', commune_code:'1383', commune:'Roka Khnaor'},
				{province_code:'25', district_code:'180', commune_code:'1384', commune:'Svay Khleang'},
				{province_code:'25', district_code:'180', commune_code:'472', commune:'Trea'},
				{province_code:'25', district_code:'180', commune_code:'1385', commune:'Tuol Snuol'},
				{province_code:'25', district_code:'181', commune_code:'1386', commune:'Chan Mul'},
				{province_code:'25', district_code:'181', commune_code:'1387', commune:'Choam'},
				{province_code:'25', district_code:'181', commune_code:'1388', commune:'Choam Kravien'},
				{province_code:'25', district_code:'181', commune_code:'1389', commune:'Choam Ta Mau'},
				{province_code:'25', district_code:'181', commune_code:'284', commune:'Dar'},
				{province_code:'25', district_code:'181', commune_code:'1390', commune:'Kampoan'},
				{province_code:'25', district_code:'181', commune_code:'633', commune:'Kokir'},
				{province_code:'25', district_code:'181', commune_code:'1391', commune:'Memong'},
				{province_code:'25', district_code:'181', commune_code:'1392', commune:'Memot'},
				{province_code:'25', district_code:'181', commune_code:'205', commune:'Rumchek'},
				{province_code:'25', district_code:'181', commune_code:'1393', commune:'Rung'},
				{province_code:'25', district_code:'181', commune_code:'1394', commune:'Tonlung'},
				{province_code:'25', district_code:'181', commune_code:'1395', commune:'Tramung'},
				{province_code:'25', district_code:'181', commune_code:'1396', commune:'Treak'},
				{province_code:'25', district_code:'182', commune_code:'1397', commune:'Ampil Ta Pok'},
				{province_code:'25', district_code:'182', commune_code:'265', commune:'Chak'},
				{province_code:'25', district_code:'182', commune_code:'1398', commune:'Damrel'},
				{province_code:'25', district_code:'182', commune_code:'1399', commune:'Kong Chey'},
				{province_code:'25', district_code:'182', commune_code:'232', commune:'Mien'},
				{province_code:'25', district_code:'182', commune_code:'1400', commune:'Preah Theat'},
				{province_code:'25', district_code:'182', commune_code:'1401', commune:'Tuol Sophi'},
				{province_code:'25', district_code:'183', commune_code:'1402', commune:'Doun Tei'},
				{province_code:'25', district_code:'183', commune_code:'336', commune:'Kak'},
				{province_code:'25', district_code:'183', commune_code:'1403', commune:'Kandaol Chrum'},
				{province_code:'25', district_code:'183', commune_code:'1404', commune:'Kaong Kang'},
				{province_code:'25', district_code:'183', commune_code:'1405', commune:'Kraek'},
				{province_code:'25', district_code:'183', commune_code:'272', commune:'Popel'},
				{province_code:'25', district_code:'183', commune_code:'1406', commune:'Trapeang Phlong'},
				{province_code:'25', district_code:'183', commune_code:'1407', commune:'Veal Mlu'},
				{province_code:'25', district_code:'184', commune_code:'1408', commune:'Anhchaeum'},
				{province_code:'25', district_code:'184', commune_code:'1409', commune:'Boeng Pruol'},
				{province_code:'25', district_code:'184', commune_code:'1410', commune:'Chikor'},
				{province_code:'25', district_code:'184', commune_code:'1411', commune:'Chirou Muoy'},
				{province_code:'25', district_code:'184', commune_code:'1412', commune:'Chirou Pir'},
				{province_code:'25', district_code:'184', commune_code:'1413', commune:'Chub'},
				{province_code:'25', district_code:'184', commune_code:'230', commune:'Kor'},
				{province_code:'25', district_code:'184', commune_code:'1414', commune:'Lngieng'},
				{province_code:'25', district_code:'184', commune_code:'1415', commune:'Moung Riev'},
				{province_code:'25', district_code:'184', commune_code:'1416', commune:'Peam Chileang'},
				{province_code:'25', district_code:'184', commune_code:'1417', commune:'Roka Po Pram'},
				{province_code:'25', district_code:'184', commune_code:'1418', commune:'Sralab'},
				{province_code:'25', district_code:'184', commune_code:'1419', commune:'Suong'},
				{province_code:'25', district_code:'184', commune_code:'1420', commune:'Tonle Bet'},
				{province_code:'25', district_code:'184', commune_code:'677', commune:'Vihear Luong'}
			];
			$('#addressDistrictEn').change(function(){
				setCommuneSelect($(this).val());
			});

			function setCommuneSelect(s){
				$('#addressCommuneEn').find('option').remove();
				$(commune).each(function(i){
					if(commune[i].district_code == s){
						$('#addressCommuneEn').append($('<option></option>')
							.attr('district_code', commune[i].district_code)
							.val(commune[i].commune_code)
							.text(commune[i].commune));
						}
					}
				);
			}
			setCommuneSelect('');
		});

		$(function() {
			$(document).ready(function() {
				$('#documents .story-images').magnificPopup({
					type: 'image',
					delegate: 'a',
					gallery: {
						enabled: true
				    }
				});
			});
		});

		$(function() {
			$(document).ready(function() {
				$('#documents .story-images').magnificPopup({
					type: 'image',
					delegate: 'a',
					gallery: {
						enabled: true
				    }
				});
			});
		});

	</script>

</body>
</html>
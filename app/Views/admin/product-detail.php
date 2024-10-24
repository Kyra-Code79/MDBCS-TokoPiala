<?php
$session = session();

// Retrieve the username and role from the session
$username = $session->get('username');
$role = $session->get('role');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
	<meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
	<meta name="author" content="PIXINVENT">
	<title>TRPL - Shop | Product Detail</title>
	<link rel="apple-touch-icon" href="../../../app-assets/images/ico/TRPL.png">
	<link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/TRPL.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
	<!-- BEGIN VENDOR CSS-->
	<link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
	<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
	<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
	<!-- END VENDOR CSS-->
	<!-- BEGIN MODERN CSS-->
	<link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
	<!-- END MODERN CSS-->
	<!-- BEGIN Page Level CSS-->
	<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
	<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
	<link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/ecommerce-cart.css">
	<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/checkboxes-radios.css">
	<!-- END Page Level CSS-->
	<!-- BEGIN Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
	<!-- END Custom CSS-->
	<!-- Include Toastify CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.css">

	<!-- Include Toastify JS -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
	<script>
		// Function to show toast notifications
		function showToast(message) {
			Toastify({
				text: message,
				duration: 3000, // Duration in milliseconds
				gravity: "top", // `top` or `bottom`
				position: 'right', // `left`, `center` or `right`
				backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
			}).showToast();
		}

		// Check for query parameters
		const urlParams = new URLSearchParams(window.location.search);
		const message = urlParams.get('message');

		if (message) {
			switch (message) {
				case 'insert_data_success':
					showToast('Insert data success!.');
					break;
				case 'insert_data_failed':
					showToast('Insert data failed!. Please try again.');
					break;
			}
		}
	</script>
</head>

<body class="vertical-layout vertical-menu-modern 2-columns ecommerce-cart content-head-image  menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

	<!-- fixed-top-->
	<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
		<div class="navbar-wrapper">
			<div class="navbar-header">
				<ul class="nav navbar-nav flex-row position-relative">
					<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
					<li class="nav-item mr-auto"> <a class="navbar-brand" href="dashboard"><img
								class="brand-logo"
								alt="modern admin logo"
								src="../app-assets/images/ico/TRPL.png" />
							<h5 class="brand-text">TRPL SHOP | Shop Owner</h4>
						</a>
					</li>
					<li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
				</ul>
			</div>
			<div class="navbar-container content">
				<div class="collapse navbar-collapse" id="navbar-mobile">
					<ul class="nav navbar-nav mr-auto float-left">
						<li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
						<li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
							<ul class="mega-dropdown-menu dropdown-menu row">
								<li class="col-md-2">
									<h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i> News</h6>
									<div id="mega-menu-carousel-example">
										<div><img class="rounded img-fluid mb-1" src="../../../app-assets/images/slider/slider-2.png" alt="First slide"><a class="news-title mb-0" href="#">Poster Frame PSD</a>
											<p class="news-content"><span class="font-small-2">January 26, 2018</span></p>
										</div>
									</div>
								</li>
								<li class="col-md-3">
									<h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i> Drill down menu</h6>
									<ul class="drilldown-menu">
										<li class="menu-list">
											<ul>
												<li><a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i> Page layouts & Templates</a></li>
												<li><a href="#"><i class="ft-align-left"></i> Multi level menu</a>
													<ul>
														<li><a class="dropdown-item" href="#"><i class="la la-bookmark-o"></i> Second level</a></li>
														<li><a href="#"><i class="la la-lemon-o"></i> Second level menu</a>
															<ul>
																<li><a class="dropdown-item" href="#"><i class="la la-heart-o"></i> Third level</a></li>
																<li><a class="dropdown-item" href="#"><i class="la la-file-o"></i> Third level</a></li>
																<li><a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Third level</a></li>
																<li><a class="dropdown-item" href="#"><i class="la la-clock-o"></i> Third level</a></li>
															</ul>
														</li>
														<li><a class="dropdown-item" href="#"><i class="la la-hdd-o"></i> Second level, third link</a></li>
														<li><a class="dropdown-item" href="#"><i class="la la-floppy-o"></i> Second level, fourth link</a></li>
													</ul>
												</li>
												<li><a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color palette system</a></li>
												<li><a class="dropdown-item" href="sk-2-columns.html"><i class="ft-edit"></i> Page starter kit</a></li>
												<li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
												<li><a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="la la-life-ring"></i> Customer support center</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="col-md-3">
									<h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Accordion</h6>
									<div id="accordionWrap" role="tablist" aria-multiselectable="true">
										<div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
											<div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
											<div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
												<div class="card-content">
													<p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
												</div>
											</div>
											<div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>
											<div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
												<div class="card-content">
													<p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
												</div>
											</div>
											<div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>
											<div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
												<div class="card-content">
													<p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="col-md-4">
									<h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i> Contact Us</h6>
									<form class="form form-horizontal">
										<div class="form-body">
											<div class="form-group row">
												<label class="col-sm-3 form-control-label" for="inputName1">Name</label>
												<div class="col-sm-9">
													<div class="position-relative has-icon-left">
														<input class="form-control" type="text" id="inputName1" placeholder="John Doe">
														<div class="form-control-position pl-1"><i class="la la-user"></i></div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
												<div class="col-sm-9">
													<div class="position-relative has-icon-left">
														<input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
														<div class="form-control-position pl-1"><i class="la la-envelope-o"></i></div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
												<div class="col-sm-9">
													<div class="position-relative has-icon-left">
														<textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
														<div class="form-control-position pl-1"><i class="la la-commenting-o"></i></div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 mb-1">
													<button class="btn btn-info float-right" type="button"><i class="la la-paper-plane-o"></i> Send </button>
												</div>
											</div>
										</div>
									</form>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
							<div class="search-input">
								<input class="input" type="text" placeholder="Explore Modern...">
							</div>
						</li>
					</ul>
					<ul class="nav navbar-nav float-right">
						<li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1">Hello,<span class="user-name text-bold-700"><?= esc($username) ?></span></span><span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
							<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
							</div>
						</li>
						<li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
							<div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
						</li>
						<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span></a>
							<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
								<li class="dropdown-menu-header">
									<h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
								</li>
								<li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
										<div class="media">
											<div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
											<div class="media-body">
												<h6 class="media-heading">You have new order!</h6>
												<p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
													<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
											</div>
										</div>
									</a><a href="javascript:void(0)">
										<div class="media">
											<div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
											<div class="media-body">
												<h6 class="media-heading red darken-1">99% Server load</h6>
												<p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
													<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
											</div>
										</div>
									</a><a href="javascript:void(0)">
										<div class="media">
											<div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
											<div class="media-body">
												<h6 class="media-heading yellow darken-3">Warning notifixation</h6>
												<p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
													<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
											</div>
										</div>
									</a><a href="javascript:void(0)">
										<div class="media">
											<div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
											<div class="media-body">
												<h6 class="media-heading">Complete the task</h6><small>
													<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
											</div>
										</div>
									</a><a href="javascript:void(0)">
										<div class="media">
											<div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
											<div class="media-body">
												<h6 class="media-heading">Generate monthly report</h6><small>
													<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
											</div>
										</div>
									</a></li>
								<li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
							<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
								<li class="dropdown-menu-header">
									<h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
								</li>
								<li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
										<div class="media">
											<div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
											<div class="media-body">
												<h6 class="media-heading">Margaret Govan</h6>
												<p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
													<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
											</div>
										</div>
									</a><a href="javascript:void(0)">
										<div class="media">
											<div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
											<div class="media-body">
												<h6 class="media-heading">Bret Lezama</h6>
												<p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
													<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
											</div>
										</div>
									</a><a href="javascript:void(0)">
										<div class="media">
											<div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
											<div class="media-body">
												<h6 class="media-heading">Carie Berra</h6>
												<p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
													<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
											</div>
										</div>
									</a><a href="javascript:void(0)">
										<div class="media">
											<div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
											<div class="media-body">
												<h6 class="media-heading">Eric Alsobrook</h6>
												<p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
													<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
											</div>
										</div>
									</a></li>
								<li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!-- ////////////////////////////////////////////////////////////////////////////-->


	<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
		<div class="main-menu-content">
			<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
				<li class="nav-item">
					<a href="dashboard"><i class="la la-home"></i><span class="menu-title" data-i18n=""> Admin Dashboard</span></a>
				</li>
				<li class="active"><a href="admin-product-detail"><i class="la la-list"></i><span class="menu-title" data-i18n="">Product</span></a>
					<ul class="menu-content">
						<li><a class="menu-item" href="/admin-product-detail" data-i18n="nav.invoice.invoice_template">Daftar Produk</a>
						</li>
						<li><a class="menu-item" href="<?= base_url('/admin-add-product') ?>" data-i18n="nav.invoice.invoice_list">Tambah Produk</a>
						</li>
					</ul>
				</li>
				<li class=" nav-item"><a href="#"><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.invoice.main">Invoice</span></a>
					<ul class="menu-content">
						<li><a class="menu-item" href="invoice-template.html" data-i18n="nav.invoice.invoice_template">Invoice Template</a>
						</li>
						<li><a class="menu-item" href="invoice-list.html" data-i18n="nav.invoice.invoice_list">Invoice List</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<div class="app-content content">
		<div class="content-wrapper">
			<div class="content-header row">
				<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
					<h3 class="content-header-title mb-0 d-inline-block">Product</h3>
					<div class="row breadcrumbs-top d-inline-block">
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">Home</a>
								</li>
								<li class="breadcrumb-item active">Product
								</li>
							</ol>
						</div>
					</div>
				</div>
				<div class="content-header-right col-md-6 col-12">
					<div class="btn-group float-md-right">
						<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
						<div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
							<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
						</div>
					</div>
				</div>
			</div>
			<div class="content-body">
				<div class="shopping-cart">
					<div class="tab-content pt-1">
						<div class="tab-pane active" id="shop-cart-tab" aria-labelledby="shopping-cart">
							<div class="card">
								<div class="card-content">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-borderless mb-0">
												<thead>
													<tr>
														<th>Product</th>
														<th>Details</th>
														<th>Harga per Item</th>
														<th>Stok</th>
														<th>Total</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($products as $product): ?>
														<tr>
															<td>
																<div class="product-img d-flex align-items-center" style="width: 100px; height: 100px; overflow: hidden;">
																	<img class="img-fluid product-img" src="data:image/jpeg;base64,<?= $product['image']; ?>" alt="Product image">
																</div>
															</td>
															<td>
																<div class="product-title"><?= $product['nama_produk']; ?></div>
															</td>
															<td>
																<div class="product-price">Rp. <?= number_format($product['harga'], 2); ?></div>
															</td>
															<td>
																<div class="product-size"><strong><?= $product['stok'] ?></strong></div>
															</td>
															<td>
																<div class="total-price">Rp. Rp. <?= number_format($product['harga'] * $product['stok'], 2); ?></div>
															</td>
															<td>
																<div class="product-action">
																	<a href="#"><i class="ft-trash-2"></i></a>
																</div>
															</td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->


	<footer class="footer footer-static footer-light navbar-border navbar-shadow">
		<p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
	</footer>

	<!-- BEGIN VENDOR JS-->
	<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
	<!-- BEGIN VENDOR JS-->
	<!-- BEGIN PAGE VENDOR JS-->
	<script src="../../../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
	<script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
	<!-- END PAGE VENDOR JS-->
	<!-- BEGIN MODERN JS-->
	<script src="../../../app-assets/js/core/app-menu.js"></script>
	<script src="../../../app-assets/js/core/app.js"></script>
	<!-- END MODERN JS-->
	<!-- BEGIN PAGE LEVEL JS-->
	<script src="../../../app-assets/js/scripts/pages/ecommerce-cart.js"></script>
	<!-- END PAGE LEVEL JS-->
</body>

</html>
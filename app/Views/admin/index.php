<?php
$session = session();

// Retrieve the username and role from the session
$username = $session->get('username');
$role = $session->get('role');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta
    name="description"
    content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard." />
  <meta
    name="keywords"
    content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard" />
  <meta name="author" content="PIXINVENT" />
  <title>
    TRPL - Shop | Admin Dashboard
  </title>
  <link
    rel="apple-touch-icon"
    href="../app-assets/images/ico/TRPL.png" />
  <link
    rel="shortcut icon"
    type="image/x-icon"
    href="../app-assets/images/ico/TRPL.png" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
    rel="stylesheet" />
  <!-- BEGIN VENDOR CSS-->
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/css/vendors.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/vendors/css/weather-icons/climacons.min.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/fonts/meteocons/style.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/vendors/css/charts/morris.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/vendors/css/charts/chartist.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/vendors/css/charts/chartist-plugin-tooltip.css" />
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css" />
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/css/core/menu/menu-types/vertical-menu-modern.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/css/core/colors/palette-gradient.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/fonts/simple-line-icons/style.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/css/core/colors/palette-gradient.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/css/pages/timeline.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="../app-assets/css/pages/dashboard-ecommerce.css" />
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
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
        case 'login_success':
          showToast('Login successful! Welcome back.');
          break;
        case 'invalid_password':
          showToast('Invalid password. Please try again.');
          break;
        case 'username_not_found':
          showToast('Username not found. Please check your credentials.');
          break;
      }
    }
  </script>
</head>

<body
  class="vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar"
  data-open="click"
  data-menu="vertical-menu-modern"
  data-col="2-columns">
  <!-- fixed-top-->
  <nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
          <li class="nav-item mobile-menu d-md-none mr-auto">
            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
          </li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand" href="dashboard"><img
                class="brand-logo"
                alt="modern admin logo"
                src="../app-assets/images/ico/TRPL.png" />
              <h5 class="brand-text">TRPL SHOP | Shop Owner</h4>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a
              class="nav-link open-navbar-container"
              data-toggle="collapse"
              data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block">
              <a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a>
            </li>
            <li class="dropdown nav-item mega-dropdown">
              <a
                class="dropdown-toggle nav-link"
                href="#"
                data-toggle="dropdown">Mega</a>
              <ul class="mega-dropdown-menu dropdown-menu row">
                <li class="col-md-2">
                  <h6 class="dropdown-menu-header text-uppercase mb-1">
                    <i class="la la-newspaper-o"></i> News
                  </h6>
                  <div id="mega-menu-carousel-example">
                    <div>
                      <img
                        class="rounded img-fluid mb-1"
                        src="../app-assets/images/slider/slider-2.png"
                        alt="First slide" /><a class="news-title mb-0" href="#">Poster Frame PSD</a>
                      <p class="news-content">
                        <span class="font-small-2">January 26, 2018</span>
                      </p>
                    </div>
                  </div>
                </li>
                <li class="col-md-3">
                  <h6 class="dropdown-menu-header text-uppercase">
                    <i class="la la-random"></i> Drill down menu
                  </h6>
                  <ul class="drilldown-menu">
                    <li class="menu-list">
                      <ul>
                        <li>
                          <a
                            class="dropdown-item"
                            href="layout-2-columns.html"><i class="ft-file"></i> Page layouts &
                            Templates</a>
                        </li>
                        <li>
                          <a href="#"><i class="ft-align-left"></i> Multi level menu</a>
                          <ul>
                            <li>
                              <a class="dropdown-item" href="#"><i class="la la-bookmark-o"></i> Second
                                level</a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-lemon-o"></i> Second level
                                menu</a>
                              <ul>
                                <li>
                                  <a class="dropdown-item" href="#"><i class="la la-heart-o"></i> Third
                                    level</a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#"><i class="la la-file-o"></i> Third
                                    level</a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Third
                                    level</a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#"><i class="la la-clock-o"></i> Third
                                    level</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#"><i class="la la-hdd-o"></i> Second level,
                                third link</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#"><i class="la la-floppy-o"></i> Second level,
                                fourth link</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="color-palette-primary.html"><i class="ft-camera"></i> Color palette system</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="sk-2-columns.html"><i class="ft-edit"></i> Page starter kit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="https://pixinvent.ticksy.com/"><i class="la la-life-ring"></i> Customer support
                            center</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="col-md-3">
                  <h6 class="dropdown-menu-header text-uppercase">
                    <i class="la la-list-ul"></i> Accordion
                  </h6>
                  <div
                    id="accordionWrap"
                    role="tablist"
                    aria-multiselectable="true">
                    <div
                      class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                      <div
                        class="card-header p-0 pb-2 border-0"
                        id="headingOne"
                        role="tab">
                        <a
                          data-toggle="collapse"
                          data-parent="#accordionWrap"
                          href="#accordionOne"
                          aria-expanded="true"
                          aria-controls="accordionOne">Accordion Item #1</a>
                      </div>
                      <div
                        class="card-collapse collapse show"
                        id="accordionOne"
                        role="tabpanel"
                        aria-labelledby="headingOne"
                        aria-expanded="true">
                        <div class="card-content">
                          <p class="accordion-text text-small-3">
                            Caramels dessert chocolate cake pastry jujubes
                            bonbon. Jelly wafer jelly beans. Caramels
                            chocolate cake liquorice cake wafer jelly beans
                            croissant apple pie.
                          </p>
                        </div>
                      </div>
                      <div
                        class="card-header p-0 pb-2 border-0"
                        id="headingTwo"
                        role="tab">
                        <a
                          class="collapsed"
                          data-toggle="collapse"
                          data-parent="#accordionWrap"
                          href="#accordionTwo"
                          aria-expanded="false"
                          aria-controls="accordionTwo">Accordion Item #2</a>
                      </div>
                      <div
                        class="card-collapse collapse"
                        id="accordionTwo"
                        role="tabpanel"
                        aria-labelledby="headingTwo"
                        aria-expanded="false">
                        <div class="card-content">
                          <p class="accordion-text">
                            Sugar plum bear claw oat cake chocolate jelly
                            tiramisu dessert pie. Tiramisu macaroon muffin
                            jelly marshmallow cake. Pastry oat cake chupa
                            chups.
                          </p>
                        </div>
                      </div>
                      <div
                        class="card-header p-0 pb-2 border-0"
                        id="headingThree"
                        role="tab">
                        <a
                          class="collapsed"
                          data-toggle="collapse"
                          data-parent="#accordionWrap"
                          href="#accordionThree"
                          aria-expanded="false"
                          aria-controls="accordionThree">Accordion Item #3</a>
                      </div>
                      <div
                        class="card-collapse collapse"
                        id="accordionThree"
                        role="tabpanel"
                        aria-labelledby="headingThree"
                        aria-expanded="false">
                        <div class="card-content">
                          <p class="accordion-text">
                            Candy cupcake sugar plum oat cake wafer marzipan
                            jujubes lollipop macaroon. Cake dragée jujubes
                            donut chocolate bar chocolate cake cupcake
                            chocolate topping.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-4">
                  <h6 class="dropdown-menu-header text-uppercase mb-1">
                    <i class="la la-envelope-o"></i> Contact Us
                  </h6>
                  <form class="form form-horizontal">
                    <div class="form-body">
                      <div class="form-group row">
                        <label
                          class="col-sm-3 form-control-label"
                          for="inputName1">Name</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <input
                              class="form-control"
                              type="text"
                              id="inputName1"
                              placeholder="John Doe" />
                            <div class="form-control-position pl-1">
                              <i class="la la-user"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label
                          class="col-sm-3 form-control-label"
                          for="inputEmail1">Email</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <input
                              class="form-control"
                              type="email"
                              id="inputEmail1"
                              placeholder="john@example.com" />
                            <div class="form-control-position pl-1">
                              <i class="la la-envelope-o"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label
                          class="col-sm-3 form-control-label"
                          for="inputMessage1">Message</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <textarea
                              class="form-control"
                              id="inputMessage1"
                              rows="2"
                              placeholder="Simple Textarea"></textarea>
                            <div class="form-control-position pl-1">
                              <i class="la la-commenting-o"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 mb-1">
                          <button
                            class="btn btn-info float-right"
                            type="button">
                            <i class="la la-paper-plane-o"></i> Send
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-search">
              <a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input
                  class="input"
                  type="text"
                  placeholder="Explore Modern..." />
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a
                class="dropdown-toggle nav-link dropdown-user-link"
                href="#"
                data-toggle="dropdown"><span class="mr-1">Hello,<span class="user-name text-bold-700"><?= esc($username) ?></span></span><span class="avatar avatar-online"><img
                    src="../app-assets/images/portrait/small/avatar-s-19.png"
                    alt="avatar" /><i></i></span></a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('/logoutAdmin') ?>"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
            <li class="dropdown dropdown-language nav-item">
              <a
                class="dropdown-toggle nav-link"
                id="dropdown-flag"
                href="#"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
              </div>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a
                class="nav-link nav-link-label"
                href="#"
                data-toggle="dropdown"><i class="ficon ft-bell"></i><span
                  class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span></a>
              <ul
                class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                  </h6>
                  <span
                    class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                </li>
                <li class="scrollable-container media-list w-100">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i class="ft-plus-square icon-bg-circle bg-cyan"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">You have new order!</h6>
                        <p class="notification-text font-small-3 text-muted">
                          Lorem ipsum dolor sit amet, consectetuer elit.
                        </p>
                        <small>
                          <time
                            class="media-meta text-muted"
                            datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i
                          class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading red darken-1">
                          99% Server load
                        </h6>
                        <p class="notification-text font-small-3 text-muted">
                          Aliquam tincidunt mauris eu risus.
                        </p>
                        <small>
                          <time
                            class="media-meta text-muted"
                            datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i
                          class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">
                          Warning notifixation
                        </h6>
                        <p class="notification-text font-small-3 text-muted">
                          Vestibulum auctor dapibus neque.
                        </p>
                        <small>
                          <time
                            class="media-meta text-muted"
                            datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i class="ft-check-circle icon-bg-circle bg-cyan"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6>
                        <small>
                          <time
                            class="media-meta text-muted"
                            datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i class="ft-file icon-bg-circle bg-teal"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Generate monthly report</h6>
                        <small>
                          <time
                            class="media-meta text-muted"
                            datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer">
                  <a
                    class="dropdown-item text-muted text-center"
                    href="javascript:void(0)">Read all notifications</a>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a
                class="nav-link nav-link-label"
                href="#"
                data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
              <ul
                class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Messages</span>
                  </h6>
                  <span
                    class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                </li>
                <li class="scrollable-container media-list w-100">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span
                          class="avatar avatar-sm avatar-online rounded-circle"><img
                            src="../app-assets/images/portrait/small/avatar-s-19.png"
                            alt="avatar" /><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Margaret Govan</h6>
                        <p class="notification-text font-small-3 text-muted">
                          I like your portfolio, let's start.
                        </p>
                        <small>
                          <time
                            class="media-meta text-muted"
                            datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span
                          class="avatar avatar-sm avatar-busy rounded-circle"><img
                            src="../app-assets/images/portrait/small/avatar-s-2.png"
                            alt="avatar" /><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Bret Lezama</h6>
                        <p class="notification-text font-small-3 text-muted">
                          I have seen your work, there is
                        </p>
                        <small>
                          <time
                            class="media-meta text-muted"
                            datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span
                          class="avatar avatar-sm avatar-online rounded-circle"><img
                            src="../app-assets/images/portrait/small/avatar-s-3.png"
                            alt="avatar" /><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Carie Berra</h6>
                        <p class="notification-text font-small-3 text-muted">
                          Can we have call in this week ?
                        </p>
                        <small>
                          <time
                            class="media-meta text-muted"
                            datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span
                          class="avatar avatar-sm avatar-away rounded-circle"><img
                            src="../app-assets/images/portrait/small/avatar-s-6.png"
                            alt="avatar" /><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Eric Alsobrook</h6>
                        <p class="notification-text font-small-3 text-muted">
                          We have project party this saturday.
                        </p>
                        <small>
                          <time
                            class="media-meta text-muted"
                            datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer">
                  <a
                    class="dropdown-item text-muted text-center"
                    href="javascript:void(0)">Read all messages</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <div
    class="main-menu menu-fixed menu-dark menu-accordion menu-shadow"
    data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul
        class="navigation navigation-main"
        id="main-menu-navigation"
        data-menu="menu-navigation">
        <li class="active">
          <a href="dashboard"><i class="la la-home"></i><span class="menu-title" data-i18n=""> Admin Dashboard</span></a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/admin-product-detail') ?>"><i class="la la-list"></i><span class="menu-title" data-i18n="">Product</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="/admin-product-detail" data-i18n="nav.invoice.invoice_template">Daftar Produk</a>
            </li>
            <li><a class="menu-item" href="<?= base_url('/admin-add-product') ?>" data-i18n="nav.invoice.invoice_list">Tambah Produk</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#"><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.invoice.main">Invoice</span></a>
          <ul class="menu-content">
            <li>
              <a
                class="menu-item"
                href="invoice-template.html"
                data-i18n="nav.invoice.invoice_template">Invoice Template</a>
            </li>
            <li>
              <a
                class="menu-item"
                href="invoice-list.html"
                data-i18n="nav.invoice.invoice_list">Invoice List</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"></div>
      <div class="content-body">
        <!-- eCommerce statistic -->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">850</h3>
                      <h6>Products Sold</h6>
                    </div>
                    <div>
                      <i
                        class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div
                      class="progress-bar bg-gradient-x-info"
                      role="progressbar"
                      style="width: 80%"
                      aria-valuenow="80"
                      aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">$748</h3>
                      <h6>Net Profit</h6>
                    </div>
                    <div>
                      <i
                        class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div
                      class="progress-bar bg-gradient-x-warning"
                      role="progressbar"
                      style="width: 65%"
                      aria-valuenow="65"
                      aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">146</h3>
                      <h6>New Customers</h6>
                    </div>
                    <div>
                      <i
                        class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div
                      class="progress-bar bg-gradient-x-success"
                      role="progressbar"
                      style="width: 75%"
                      aria-valuenow="75"
                      aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">99.89 %</h3>
                      <h6>Customer Satisfaction</h6>
                    </div>
                    <div>
                      <i
                        class="icon-heart danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div
                      class="progress-bar bg-gradient-x-danger"
                      role="progressbar"
                      style="width: 85%"
                      aria-valuenow="85"
                      aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ eCommerce statistic -->

        <!-- Products sell and New Orders -->
        <div class="row match-height">
          <div class="col-xl-8 col-12" id="ecommerceChartView">
            <div class="card card-shadow">
              <div class="card-header card-header-transparent py-20">
                <div class="btn-group dropdown">
                  <a
                    href="#"
                    class="text-body dropdown-toggle blue-grey-700"
                    data-toggle="dropdown">PRODUCTS SALES</a>
                  <div class="dropdown-menu animate" role="menu">
                    <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">profit</a>
                  </div>
                </div>
                <ul
                  class="nav nav-pills nav-pills-rounded chart-action float-right btn-group"
                  role="group">
                  <li class="nav-item">
                    <a
                      class="active nav-link"
                      data-toggle="tab"
                      href="#scoreLineToDay">Day</a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-toggle="tab"
                      href="#scoreLineToWeek">Week</a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-toggle="tab"
                      href="#scoreLineToMonth">Month</a>
                  </li>
                </ul>
              </div>
              <div class="widget-content tab-content bg-white p-20">
                <div
                  class="ct-chart tab-pane active scoreLineShadow"
                  id="scoreLineToDay"></div>
                <div
                  class="ct-chart tab-pane scoreLineShadow"
                  id="scoreLineToWeek"></div>
                <div
                  class="ct-chart tab-pane scoreLineShadow"
                  id="scoreLineToMonth"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">New Orders</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li>
                      <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div id="new-orders" class="media-list position-relative">
                  <div class="table-responsive">
                    <table
                      id="new-orders-table"
                      class="table table-hover table-xl mb-0">
                      <thead>
                        <tr>
                          <th class="border-top-0">Product</th>
                          <th class="border-top-0">Customers</th>
                          <th class="border-top-0">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-truncate">iPhone X</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="John Doe"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-19.png"
                                  alt="Avatar" />
                              </li>
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Katherine Nichols"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-18.png"
                                  alt="Avatar" />
                              </li>
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Joseph Weaver"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-17.png"
                                  alt="Avatar" />
                              </li>
                              <li class="avatar avatar-sm">
                                <span class="badge badge-info">+4 more</span>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$8999</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">Pixel 2</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Alice Scott"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-16.png"
                                  alt="Avatar" />
                              </li>
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Charles Miller"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-15.png"
                                  alt="Avatar" />
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$5550</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">OnePlus</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Christine Ramos"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-11.png"
                                  alt="Avatar" />
                              </li>
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Thomas Brewer"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-10.png"
                                  alt="Avatar" />
                              </li>
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Alice Chapman"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-9.png"
                                  alt="Avatar" />
                              </li>
                              <li class="avatar avatar-sm">
                                <span class="badge badge-info">+3 more</span>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$9000</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">Galaxy</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Ryan Schneider"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-14.png"
                                  alt="Avatar" />
                              </li>
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Tiffany Oliver"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-13.png"
                                  alt="Avatar" />
                              </li>
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Joan Reid"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-12.png"
                                  alt="Avatar" />
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$7500</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">Moto Z2</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Kimberly Simmons"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-8.png"
                                  alt="Avatar" />
                              </li>
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Willie Torres"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-7.png"
                                  alt="Avatar" />
                              </li>
                              <li
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-original-title="Rebecca Jones"
                                class="avatar avatar-sm pull-up">
                                <img
                                  class="media-object rounded-circle"
                                  src="../app-assets/images/portrait/small/avatar-s-6.png"
                                  alt="Avatar" />
                              </li>
                              <li class="avatar avatar-sm">
                                <span class="badge badge-info">+1 more</span>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$8500</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Products sell and New Orders -->

        <!-- Recent Transactions -->
        <div class="row">
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Transactions</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li>
                      <a
                        class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                        href="invoice-summary.html"
                        target="_blank">Invoice Summary</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table
                    id="recent-orders"
                    class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Invoice#</th>
                        <th class="border-top-0">Customer Name</th>
                        <th class="border-top-0">Products</th>
                        <th class="border-top-0">Categories</th>
                        <th class="border-top-0">Shipping</th>
                        <th class="border-top-0">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate">
                          <i
                            class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                          Paid
                        </td>
                        <td class="text-truncate">
                          <a href="#">INV-001001</a>
                        </td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img
                              class="box-shadow-2"
                              src="../app-assets/images/portrait/small/avatar-s-4.png"
                              alt="avatar" />
                          </span>
                          <span>Elizabeth W.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Kimberly Simmons"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-1.jpg"
                                alt="Avatar" />
                            </li>
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Willie Torres"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-2.jpg"
                                alt="Avatar" />
                            </li>
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Rebecca Jones"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-4.jpg"
                                alt="Avatar" />
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+1 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button
                            type="button"
                            class="btn btn-sm btn-outline-danger round">
                            Food
                          </button>
                        </td>
                        <td>
                          <div
                            class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div
                              class="progress-bar bg-gradient-x-danger"
                              role="progressbar"
                              style="width: 25%"
                              aria-valuenow="25"
                              aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">
                          <i
                            class="la la-dot-circle-o danger font-medium-1 mr-1"></i>
                          Declined
                        </td>
                        <td class="text-truncate">
                          <a href="#">INV-001002</a>
                        </td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img
                              class="box-shadow-2"
                              src="../app-assets/images/portrait/small/avatar-s-5.png"
                              alt="avatar" />
                          </span>
                          <span>Doris R.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Kimberly Simmons"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-5.jpg"
                                alt="Avatar" />
                            </li>
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Willie Torres"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-6.jpg"
                                alt="Avatar" />
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+2 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button
                            type="button"
                            class="btn btn-sm btn-outline-warning round">
                            Electronics
                          </button>
                        </td>
                        <td>
                          <div
                            class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div
                              class="progress-bar bg-gradient-x-warning"
                              role="progressbar"
                              style="width: 45%"
                              aria-valuenow="45"
                              aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1850.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">
                          <i
                            class="la la-dot-circle-o warning font-medium-1 mr-1"></i>
                          Pending
                        </td>
                        <td class="text-truncate">
                          <a href="#">INV-001003</a>
                        </td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img
                              class="box-shadow-2"
                              src="../app-assets/images/portrait/small/avatar-s-6.png"
                              alt="avatar" />
                          </span>
                          <span>Megan S.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Kimberly Simmons"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-2.jpg"
                                alt="Avatar" />
                            </li>
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Willie Torres"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-5.jpg"
                                alt="Avatar" />
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button
                            type="button"
                            class="btn btn-sm btn-outline-success round">
                            Groceries
                          </button>
                        </td>
                        <td>
                          <div
                            class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div
                              class="progress-bar bg-gradient-x-success"
                              role="progressbar"
                              style="width: 75%"
                              aria-valuenow="75"
                              aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 3200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">
                          <i
                            class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                          Paid
                        </td>
                        <td class="text-truncate">
                          <a href="#">INV-001004</a>
                        </td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img
                              class="box-shadow-2"
                              src="../app-assets/images/portrait/small/avatar-s-7.png"
                              alt="avatar" />
                          </span>
                          <span>Andrew D.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Kimberly Simmons"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-6.jpg"
                                alt="Avatar" />
                            </li>
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Willie Torres"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-1.jpg"
                                alt="Avatar" />
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+1 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button
                            type="button"
                            class="btn btn-sm btn-outline-info round">
                            Apparels
                          </button>
                        </td>
                        <td>
                          <div
                            class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div
                              class="progress-bar bg-gradient-x-info"
                              role="progressbar"
                              style="width: 65%"
                              aria-valuenow="65"
                              aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 4500.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">
                          <i
                            class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                          Paid
                        </td>
                        <td class="text-truncate">
                          <a href="#">INV-001005</a>
                        </td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img
                              class="box-shadow-2"
                              src="../app-assets/images/portrait/small/avatar-s-9.png"
                              alt="avatar" />
                          </span>
                          <span>Walter R.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Kimberly Simmons"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-5.jpg"
                                alt="Avatar" />
                            </li>
                            <li
                              data-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-original-title="Willie Torres"
                              class="avatar avatar-sm pull-up">
                              <img
                                class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="../app-assets/images/portfolio/portfolio-3.jpg"
                                alt="Avatar" />
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button
                            type="button"
                            class="btn btn-sm btn-outline-danger round">
                            Food
                          </button>
                        </td>
                        <td>
                          <div
                            class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div
                              class="progress-bar bg-gradient-x-danger"
                              role="progressbar"
                              style="width: 35%"
                              aria-valuenow="35"
                              aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1500.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Recent Transactions -->

        <!--Recent Orders & Monthly Sales -->
        <div class="row match-height">
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-content">
                <div
                  id="cost-revenue"
                  class="height-250 position-relative"></div>
              </div>
              <div class="card-footer">
                <div class="row mt-1">
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Products</h6>
                    <h2 class="block font-weight-normal">18.6 k</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div
                        class="progress-bar bg-gradient-x-info"
                        role="progressbar"
                        style="width: 70%"
                        aria-valuenow="70"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Sales</h6>
                    <h2 class="block font-weight-normal">64.54 M</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div
                        class="progress-bar bg-gradient-x-warning"
                        role="progressbar"
                        style="width: 60%"
                        aria-valuenow="60"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Cost</h6>
                    <h2 class="block font-weight-normal">24.38 B</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div
                        class="progress-bar bg-gradient-x-danger"
                        role="progressbar"
                        style="width: 40%"
                        aria-valuenow="40"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Revenue</h6>
                    <h2 class="block font-weight-normal">36.72 M</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div
                        class="progress-bar bg-gradient-x-success"
                        role="progressbar"
                        style="width: 90%"
                        aria-valuenow="90"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body sales-growth-chart">
                  <div id="monthly-sales" class="height-250"></div>
                </div>
              </div>
              <div class="card-footer">
                <div class="chart-title mb-1 text-center">
                  <h6>Total monthly Sales.</h6>
                </div>
                <div class="chart-stats text-center">
                  <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a>
                  <span class="text-muted">for the last year.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/Recent Orders & Monthly Sales -->

        <!-- Basic Horizontal Timeline -->
        <div class="row match-height">
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Basic Card</h4>
              </div>
              <div class="card-content">
                <img
                  class="img-fluid"
                  src="../app-assets/images/carousel/05.jpg"
                  alt="Card image cap" />
                <div class="card-body">
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div
                class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">3 hours ago</span>
                <span class="float-right">
                  <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Horizontal Timeline</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li>
                      <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="card-text">
                    <section class="cd-horizontal-timeline">
                      <div class="timeline">
                        <div class="events-wrapper">
                          <div class="events">
                            <ol>
                              <li>
                                <a
                                  href="#0"
                                  data-date="16/01/2015"
                                  class="selected">16 Jan</a>
                              </li>
                              <li>
                                <a href="#0" data-date="28/02/2015">28 Feb</a>
                              </li>
                              <li>
                                <a href="#0" data-date="20/04/2015">20 Mar</a>
                              </li>
                              <li>
                                <a href="#0" data-date="20/05/2015">20 May</a>
                              </li>
                              <li>
                                <a href="#0" data-date="09/07/2015">09 Jul</a>
                              </li>
                              <li>
                                <a href="#0" data-date="30/08/2015">30 Aug</a>
                              </li>
                              <li>
                                <a href="#0" data-date="15/09/2015">15 Sep</a>
                              </li>
                            </ol>
                            <span
                              class="filling-line"
                              aria-hidden="true"></span>
                          </div>
                          <!-- .events -->
                        </div>
                        <!-- .events-wrapper -->
                        <ul class="cd-timeline-navigation">
                          <li><a href="#0" class="prev inactive">Prev</a></li>
                          <li><a href="#0" class="next">Next</a></li>
                        </ul>
                        <!-- .cd-timeline-navigation -->
                      </div>
                      <!-- .timeline -->
                      <div class="events-content">
                        <ol>
                          <li class="selected" data-date="16/01/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img
                                    class="media-object img-xl mr-1"
                                    src="../app-assets/images/portrait/small/avatar-s-5.png"
                                    alt="Generic placeholder image" />
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the
                                  head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">
                                Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla
                              adipisci? Consequuntur aspernatur at.
                            </p>
                          </li>
                          <li data-date="28/02/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img
                                    class="media-object img-xl mr-1"
                                    src="../app-assets/images/portrait/small/avatar-s-6.png"
                                    alt="Generic placeholder image" />
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the
                                  head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">
                                Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla
                              adipisci? Consequuntur aspernatur at.
                            </p>
                          </li>
                          <li data-date="20/04/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img
                                    class="media-object img-xl mr-1"
                                    src="../app-assets/images/portrait/small/avatar-s-7.png"
                                    alt="Generic placeholder image" />
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the
                                  head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">
                                Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla
                              adipisci? Consequuntur aspernatur at.
                            </p>
                          </li>
                          <li data-date="20/05/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img
                                    class="media-object img-xl mr-1"
                                    src="../app-assets/images/portrait/small/avatar-s-8.png"
                                    alt="Generic placeholder image" />
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the
                                  head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">
                                Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla
                              adipisci? Consequuntur aspernatur at.
                            </p>
                          </li>
                          <li data-date="09/07/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img
                                    class="media-object img-xl mr-1"
                                    src="../app-assets/images/portrait/small/avatar-s-9.png"
                                    alt="Generic placeholder image" />
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the
                                  head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">
                                Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla
                              adipisci? Consequuntur aspernatur at.
                            </p>
                          </li>
                          <li data-date="30/08/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img
                                    class="media-object img-xl mr-1"
                                    src="../app-assets/images/portrait/small/avatar-s-6.png"
                                    alt="Generic placeholder image" />
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the
                                  head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">
                                Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla
                              adipisci? Consequuntur aspernatur at.
                            </p>
                          </li>
                          <li data-date="15/09/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img
                                    class="media-object img-xl mr-1"
                                    src="../app-assets/images/portrait/small/avatar-s-7.png"
                                    alt="Generic placeholder image" />
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the
                                  head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">
                                Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla
                              adipisci? Consequuntur aspernatur at.
                            </p>
                          </li>
                        </ol>
                      </div>
                      <!-- .events-content -->
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Basic Horizontal Timeline -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <footer
    class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018
        <a
          class="text-bold-800 grey darken-2"
          href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
          target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>

  <!-- BEGIN VENDOR JS-->
  <script src="../app-assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../app-assets/vendors/js/charts/chartist.min.js"></script>
  <script src="../app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
  <script src="../app-assets/vendors/js/charts/raphael-min.js"></script>
  <script src="../app-assets/vendors/js/charts/morris.min.js"></script>
  <script src="../app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../app-assets/js/core/app-menu.js"></script>
  <script src="../app-assets/js/core/app.js"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
  <!-- END PAGE LEVEL JS-->
</body>

</html>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif;

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Login with Background Image - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard
    </title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/TRPL.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/TRPL.png">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- Include Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.css">

    <!-- Include Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" rel="stylesheet">
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
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

<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image menu-expanded blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <?php if (session()->getFlashdata('success')): ?>
                <script>
                    Toastify({
                        text: "<?= session()->getFlashdata('success') ?>",
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                        duration: 3000,
                        close: true,
                        position: "topRight",
                    }).showToast();
                </script>
            <?php elseif (session()->getFlashdata('error')): ?>
                <script>
                    Toastify({
                        text: "<?= session()->getFlashdata('error') ?>",
                        backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc3a0)",
                        duration: 3000,
                        close: true,
                        position: "topRight",
                    }).showToast();
                </script>
            <?php endif; ?>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img src="../../../app-assets/images/ico/TRPL.png" alt="branding logo"
                                            width="100px" height="auto">
                                    </div>
                                    <?php
                                    if (session()->getFlashdata('msg')): ?>
                                        <div><?php session()->getFlashdata('msg') ?></div>
                                    <?php endif; ?>
                                    <!-- <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login</span></h6> -->
                                    <div class="card-body">
                                        <form class="form-horizontal" action="<?= base_url('/login/auth') ?>"
                                            method="POST" validate>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" name="username" id="user-name"
                                                    placeholder="Your Username" required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" name="password"
                                                    id="user-password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-sm-left">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> Remember Me</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-12 text-center text-sm-right">
                                                    <a href="recover-password" class="card-link">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-info btn-block"><i
                                                    class="ft-unlock"></i> Login</button>
                                        </form>
                                    </div>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    <span>New to TRPL Shop ?</span>
                                </p>
                                <div class="card-body">
                                    <a href="/auth/register" class="btn btn-outline-danger btn-block"><i
                                            class="ft-user"></i> Register</a>
                                    <a href="/" class="btn btn-outline-info btn-block">Back to Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

        </div>
    </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- Toast JS -->
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/forms/form-login-register.js"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>
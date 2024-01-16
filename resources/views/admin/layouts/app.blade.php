<!doctype html>
<html lang="en" dir="ltr"> <!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->

<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:07:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

    <!-- TITLE -->
    <title>Noa - Laravel Bootstrap 5 Admin & Dashboard Template</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="admin-assets/images/brand/favicon.ico" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="admin-assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="admin-assets/css/style.css" rel="stylesheet" />
    <link href="admin-assets/css/skin-modes.css" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="admin-assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="admin-assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="admin-assets/switcher/demo.css" rel="stylesheet">

</head>

<body class="ltr app sidebar-mini">

<!-- Switcher-->
<!-- Switcher -->
@include('admin.include.rightside')
<!-- End Switcher -->
<!-- Switcher-->

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="admin-assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
    @include('admin.include.header')
    <!-- /app-Header -->

        <!--APP-SIDEBAR-->
    @include('admin.include.sidebar')
    <!--/APP-SIDEBAR-->

        <!--app-content open-->
        @yield('body')
        <!-- CONTAINER CLOSED -->
    </div>

    <!-- FOOTER -->
@include('admin.include.footer')
<!-- FOOTER CLOSED -->

</div>
<!-- page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

@include('admin.include.js')

</body>


<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:08:40 GMT -->
</html>

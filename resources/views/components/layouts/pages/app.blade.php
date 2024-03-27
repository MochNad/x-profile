<!DOCTYPE html>
<html lang="en">

<head>
  <!--  Title -->
  <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>
  <!--  Required Meta Tag -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="Mordenize" />
  <meta name="author" content="" />
  <meta name="keywords" content="Mordenize" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('dist/images/logos/favicon.ico') }}" />
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{ asset('dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/libs/sweetalert2/dist/sweetalert2.min.css') }}">

  <!-- Core Css -->
  <link rel="stylesheet" href="{{ asset('dist/libs/prismjs/themes/prism-okaidia.min.css') }}">
  <link id="themeColors" rel="stylesheet" href="{{ asset('dist/css/style.min.css') }}" />
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="{{ asset('dist/images/logos/favicon.ico') }}" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <!-- Preloader -->
  <div class="preloader">
    <img src="{{ asset('dist/images/logos/favicon.ico') }}" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" class="dark-logo" width="180" alt="" />
          </a>
          <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8 text-muted"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <x-layouts.pages.partials.navbar :menus="$menus" />
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <x-layouts.pages.partials.header />
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        {{ $slot }}
      </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <div class="dark-transparent sidebartoggler"></div>
  </div>

  <!--  Customizer -->
  <!--  Import Js Files -->
  <script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
  <script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!--  core files -->
  <script src="{{ asset('dist/js/app.min.js') }}"></script>
  <script src="{{ asset('dist/js/app.init.js') }}"></script>
  <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
  <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>

  <script src="{{ asset('dist/js/custom.js') }}"></script>
  <!--  current page js files -->
  <script src="{{ asset('dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('dist/libs/sweetalert2/dist/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('dist/js/components/sweet-alert.js') }}"></script>
  @stack('scripts')
</body>

</html>
<!DOCTYPE html>
<html lang="hr">
<head>
  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('dashplex/img/brand/favicon.ico') }}" type="image/x-icon"/>
  
  <!-- Title -->
  <title>Praćenje materijala - Hofer</title>
  
  <!-- Bootstrap css-->
  <link id="style" href="{{ asset('dashplex/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  
  <!-- Icons css-->
  <link href="{{ asset('dashplex/web-fonts/icons.css') }}" rel="stylesheet"/>
  <link href="{{ asset('dashplex/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dashplex/web-fonts/plugin.css') }}" rel="stylesheet"/>
  
  <!-- Style css-->
  <link href="{{ asset('dashplex/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('dashplex/css/plugins.css') }}" rel="stylesheet">
  
</head>

<body class="main-body leftmenu ltr light-theme dark-menu">
  
  <!-- Loader -->
  <div id="global-loader">
    <img src="{{ asset('dashplex/img/loader.svg') }}" class="loader-img" alt="Loader">
  </div>
  <!-- End Loader -->
  
  
  <!-- Page -->
  <div class="page">
    
    <!-- Main Header-->
    <div class="main-header side-header sticky">
      <div class="main-container container-fluid">
        <div class="main-header-left">
          <a class="main-header-menu-icon" href="javascript:;" id="mainSidebarToggle">
            <svg class="header-menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M2.5,10.5h11c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-11C2.223877,9.5,2,9.723877,2,10S2.223877,10.5,2.5,10.5z M2.5,6.5h19C21.776123,6.5,22,6.276123,22,6s-0.223877-0.5-0.5-0.5h-19C2.223877,5.5,2,5.723877,2,6S2.223877,6.5,2.5,6.5z M21.8446045,9.3519897C21.609314,9.0689697,21.189209,9.0303345,20.90625,9.265625l-2.6660156,2.2226562c-0.0315552,0.0261841-0.0606079,0.0552368-0.086792,0.086792c-0.2346802,0.2826538-0.1958008,0.7019653,0.086792,0.9366455L20.90625,14.734375c0.1194458,0.1005249,0.2706299,0.1555176,0.4267578,0.1552734c0.1973267-0.0002441,0.3843994-0.0878906,0.5109253-0.2393188c0.236145-0.2826538,0.1984863-0.7032471-0.0841675-0.9393921L19.7080078,12l2.0517578-1.7109375C22.0414429,10.0534668,22.0794067,9.6343384,21.8446045,9.3519897z M2.5,14.5h11c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-11C2.223877,13.5,2,13.723877,2,14S2.223877,14.5,2.5,14.5z M21.5,17.5h-19C2.223877,17.5,2,17.723877,2,18s0.223877,0.5,0.5,0.5h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17.5,21.5,17.5z"/></svg>
          </a>
          <div class="hor-logo">
            <a class="main-logo" href="index.html">
              <img src="{{ asset('dashplex/img/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
              <img src="{{ asset('dashplex/img/brand/logo-light.png') }}" class="header-brand-img desktop-logo-dark" alt="logo">
            </a>
          </div>
        </div>
        <div class="main-header-center">
          <div class="responsive-logo">
            <a href="index.html"><img src="{{ asset('dashplex/img/brand/logo.png') }}" class="mobile-logo" alt="logo"></a>
            <a href="index.html"><img src="{{ asset('dashplex/img/brand/logo-light.png') }}" class="mobile-logo-dark" alt="logo"></a>
          </div>
        
        </div>
        <div class="main-header-right">
          <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="header-icons navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12,7c1.1040039-0.0014038,1.9985962-0.8959961,2-2c0-1.1045532-0.8954468-2-2-2s-2,0.8954468-2,2S10.8954468,7,12,7z M12,4c0.552124,0.0003662,0.9996338,0.447876,1,1c0,0.5523071-0.4476929,1-1,1s-1-0.4476929-1-1S11.4476929,4,12,4z M12,10c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C14,10.8954468,13.1045532,10,12,10z M12,13c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C13,12.5523071,12.5523071,13,12,13z M12,17c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C14,17.8954468,13.1045532,17,12,17z M12,20c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C13,19.5523071,12.5523071,20,12,20z"/></svg>
          </button>
       
        </div>
      </div>
    </div>
    <!-- End Main Header-->
    
    <!-- Sidemenu -->
    <div class="sticky">
      <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1 active">
          <div class="sidemenu-logo">
            <a class="main-logo" href="index.html">
              <img src="{{ asset('dashplex/img/brand/logo-light.png') }}" class="header-brand-img desktop-logo-dark" alt="logo">
              <img src="{{ asset('dashplex/img/brand/icon-light.png') }}" class="header-brand-img icon-logo-dark" alt="logo">
              <img src="{{ asset('dashplex/img/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
              <img src="{{ asset('dashplex/img/brand/icon.png') }}" class="header-brand-img icon-logo" alt="logo">
            </a>
          </div>
          <div class="main-sidebar-body main-body-1">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
            <ul class="menu-nav nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                  <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"/></svg>
                  <span class="sidemenu-label">Naslovnica</span>
                </a>
               </li>
               <li class="nav-item">
                <a class="nav-link" href="{{ url('discs') }}">
                  <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"/></svg>
                  <span class="sidemenu-label">Ploče</span>
                </a>
               </li>
               <li class="nav-item">
                <a class="nav-link" href="{{ url('grades') }}">
                  <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"/></svg>
                  <span class="sidemenu-label">Materijali</span>
                </a>
               </li>
               <li class="nav-item">
                <a class="nav-link" href="{{ url('manufacturers') }}">
                  <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"/></svg>
                  <span class="sidemenu-label">Dobavljači</span>
                </a>
               </li>
               <li class="nav-item">
                <a class="nav-link" href="{{ url('products') }}">
                  <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"/></svg>
                  <span class="sidemenu-label">Proizvodi</span>
                </a>
               </li>

               <li class="nav-item">
                <a class="nav-link" href="{{ url('work_orders') }}">
                  <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"/></svg>
                  <span class="sidemenu-label">Radni nalozi</span>
                </a>
               </li>
           
             
                  </ul>
                  <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Sidemenu -->
          
          <!-- Main Content-->
          @yield('content')
          <!-- End Main Content-->
          
          <!-- Main Footer-->
          <div class="main-footer text-center">
            <div class="container">
              <div class="row row-sm">
                <div class="col-md-12">
                  <span>Copyright © 2022 <a href="javascript:void(0);">Dashplex</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
                </div>
              </div>
            </div>
          </div>
          <!--End Footer-->
   
          
        </div>
        <!-- End Page -->
        
        <!-- Back-to-top -->
        <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
        
        <!-- Jquery js-->
        <script src="{{ asset('dashplex/plugins/jquery/jquery.min.js') }}"></script>
        
        <!-- Bootstrap js-->
        <script src="{{ asset('dashplex/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('dashplex/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        
        <!-- Perfect-scrollbar js -->
        <script src="{{ asset('dashplex/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('dashplex/plugins/perfect-scrollbar/pscroll1.js') }}"></script>
        
        <!-- Sidemenu js -->
        <script src="{{ asset('dashplex/plugins/sidemenu/sidemenu.js') }}"></script>
        
        <!-- Sidebar js -->
        <script src="{{ asset('dashplex/plugins/sidebar/sidebar.js') }}"></script>
        
        <!-- Select2 js-->
        <script src="{{ asset('dashplex/plugins/select2/js/select2.min.js') }}"></script>
        
        <!-- Color Them js -->
        <script src="{{ asset('dashplex/js/themeColors.js') }}"></script>
        
        <!-- Sticky js -->
        <script src="{{ asset('dashplex/js/sticky.js') }}"></script>
        
        <!-- swither styles js -->
        <script src="{{ asset('dashplex/js/swither-styles.js') }}"></script>
        @yield('scripts')
        
        <!-- Custom js -->
        <script src="{{ asset('dashplex/js/custom.js') }}"></script>
        
      </body>
      </html>
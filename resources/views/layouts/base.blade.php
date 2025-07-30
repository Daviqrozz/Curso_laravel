<!doctype html>
<html lang="en">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    @vite('resources/scss/app.scss')
  </head>

  <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  
    <div class="app-wrapper">
      
        @include('parts.header')
  
        <div class="container-fluid">
          
          @include('parts.navbar')
            @include('parts.message')
          
            <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
              </a>
            </li>
           
              @include('parts.usermenu')
           
          </ul>
        
        </div>
     
      </nav>
     
      @include('parts.sidebar')
       
        <div class="sidebar-brand">
         
          <a href="./index.html" class="brand-link">
            
            <img
              src={{Vite::asset('resources/images/img/AdminLTELogo.png')}}
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <span class="brand-text fw-light">AdminLTE 4</span>
           
          </a>
         
        </div>
  
        <div class="sidebar-wrapper">
          <nav class="mt-2">
           
            @include('parts.sidebarmenu')
           
          </nav>
        </div>
        
      </aside>
    
      <main class="app-main">
      
        <div class="app-content-header">
          @include('parts.content-header')
        </div>
      
        <div class="app-content">
          <div class="container-fluid">
            @yield('content')
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      @include('parts.footer')
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2025&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    
    @vite('resources/js/app.js')
  </body>
  <!--end::Body-->
</html>

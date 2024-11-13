<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @include('layouts.admin.inc.asset')
</head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- Sidebar -->
  @include('layouts.admin.inc.asidebar')
  <!-- Close Sidebar -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.admin.inc.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @yield('content')

      @include('layouts.admin.inc.footer')

      

    </div>
  </main>
  </div>

  @include('layouts.admin.inc.script')

</body>

</html>
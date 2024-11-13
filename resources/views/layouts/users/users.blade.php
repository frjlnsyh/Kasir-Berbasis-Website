<!doctype html>
<html lang="en">
  <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.users.inc.asset')
  </head>
  <body>
      @include('layouts.users.inc.navbar')

      @yield('content')

      @include('layouts.users.inc.nav-bottom')
      </div>
  @include('layouts.users.inc.script')
  </body>
</html>
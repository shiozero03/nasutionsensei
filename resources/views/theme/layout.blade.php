<!DOCTYPE html>
<html lang="en">

<head>
  @include('theme.metadata')
</head>

<body class="g-sidenav-show   bg-gray-100" id="body">
  <div class="min-height-300 bg-danger position-absolute w-100"></div>
  <style type="text/css">
    .sidenav::-webkit-scrollbar {
      display: none;
    }
  </style>
  <aside class=" sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    @include('theme.aside')
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      @include('theme.header')
    </nav>
    <div class="container-fluid py-4">
      @yield('content')
      @include('theme.footer')
    </div>
  </main>

  
  
  @include('theme.script')
  @yield('script')
</body>

</html>
  
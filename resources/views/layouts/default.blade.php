<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body class=" 1-column undefined  page-animated svg-wrapper" data-menu-open="hover" data-menu="" style="background:white;">
   <header class="row">
       @include('includes.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
@include('frontend.templates.partials.head')
<body>
@include('frontend.templates.partials.nav')
    <!--content-->
  <div class="container">
  @yield('content')
  </div>


@include('frontend.templates.partials.scripts')
@include('frontend.templates.partials.toast')
</body>
</html>
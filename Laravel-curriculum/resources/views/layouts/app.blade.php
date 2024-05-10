@include('front/partials/head')
<body>
  @include('front/partials/header')
  <main>
    <div class="main">
      @yield('content')
    </div>
  </main>
  @include('front/partials/footer')
</body>
</html>

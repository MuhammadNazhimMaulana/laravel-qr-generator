<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link untuk font-awesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Link menuju CSS -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Bootstrap CSS -->
    {{-- <link href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>App</title>
  </head>
  <body class="bg-secondary text-white">

    <div id="app">
      {{-- Navbar --}}
      {{-- @include('layout.partials.navbar') --}}

      {{-- Content --}}
      <main class="py-4 d-flex align-items-center vh-100">
          @yield('content')
      </main>
    </div>

</section>

  
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script> --}}
    
    {{-- Jquery --}}
    {{-- <script src="{{ asset('/public/JS/javascript.js') }}" defer></script> --}}

    {{-- Content --}} 
    @yield('script')
  </body>
</html>
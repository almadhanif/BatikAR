<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;700&family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/iconhead.png') }}" type="image/gif" sizes="5x5" />
  </head>
  <body
    {{-- style="background-image: url(aset/footer-bg.png)" --}}
    style="background-image: url('{{ asset('images/footer-bg.png') }}');"
    class="sm:bg-cover sm:bg-no-repeat h-full w-full rounded-md border border-gray-100"
  >
    @yield('content')
  </body>
</html>

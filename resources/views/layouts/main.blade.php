<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="./src/img/nero.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Comics | @yield('title')</title>

{{--CDNS--}}
@yield('cdns')

{{--Assets vite--}}
@vite('resources/js/app.js')

</head>

<body>
{{--HEADER--}}
@include('includes.header')

{{--MAIN--}}
<main class="">
   <section id="@yield('section-id')">
   </section>
</main>

{{--FOOTER--}}
  <footer></footer>

{{--scripts--}}
@yield('scripts')
</body>

</html>

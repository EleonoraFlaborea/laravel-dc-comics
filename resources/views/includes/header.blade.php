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
 <header>
      <div class="navbar">
        <div class="logo"> 
          <img class="cover narrow" src="{{asset('images/dc-logo.png')}}" alt="logo" class="img-fluid">

        </div>
        <div class="links">
          <ul>
            <li><a class="@if(Route::is('home')) active @endif" href="{{ route('home')}}">HOME</a></li>
            <li><a class="@if(Route::is('comics.index')) active @endif" href="{{ route('comics.index')}}">COMICS</a></li>
             
           
          </ul>
        </div>
      </div>
    </header>

    {{--jumbotron--}}
   <div class="jumbotron">
   </div>

</body>

</html>

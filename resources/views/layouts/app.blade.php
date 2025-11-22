<!DOCTYPE html>
 <html lang="en">
 <head >
     @vite('resources/css/app.css')
     @vite('resources/js/app.js')
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title', 'HomeDome')</title>
     <link rel="stylesheet" href="resources/css/app.css">
 </head>
<body>
 @include('partials.header')

  <main>
        @yield('content')
    </main>


</body>
@include('partials.footer')

</html>

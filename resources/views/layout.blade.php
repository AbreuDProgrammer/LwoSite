<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>{{$title}}</title>
</head>
<body class="h-full bg-black/95 text-white">
  <nav class="fixed top-0 left-0 h-16 grid grid-cols-4 content-center w-full px-96">
    <div class="text-center">
      <h5><a href="{{route('welcome')}}">@lang('Home')</a></h5>
    </div>
    <div class="text-center">
      <h5><a href="{{route('about')}}">@lang('About')</a></h5>
    </div>
    <div class="text-center">
      <h5><a href="{{route('projects')}}">@lang('Projects')</a></h5>
    </div>
    <div class="flex justify-center space-x-6">
      <h5><a href="{{route('lang', ['lang' => 'en'])}}">En</a></h5>
      <h5><a href="{{route('lang', ['lang' => 'pt'])}}">Pt</a></h5>
    </div>
  </nav>
  <main class="pt-24 px-72">
    @yield('body')
  </main>
  <footer class="h-12 w-full flex items-center justify-start p-4 text-white bottom-0 absolute">
    <h6>@lang('Made by Leonardo')</h6>
  </footer>
</body>
</html>

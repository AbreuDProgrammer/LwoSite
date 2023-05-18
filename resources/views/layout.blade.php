<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>@lang($title)</title>
</head>
<body class="bg-theme text-white relative w-full h-full">

  <nav class="fixed bg-theme top-0 left-0 h-16 grid grid-cols-4 content-center w-full xl:px-96">
    <div class="text-center @if($current['home']) underline @endif">
      <h5><a href="{{route('welcome')}}">@lang('Home')</a></h5>
    </div>
    <div class="text-center @if($current['about']) underline @endif">
      <h5><a href="{{route('about')}}">@lang('About')</a></h5>
    </div>
    <div class="text-center @if($current['projects']) underline @endif">
      <h5><a href="{{route('projects')}}">@lang('Projects')</a></h5>
    </div>
    <div class="flex justify-center items-center space-x-4">
      @if ($lang == 'en')
        <a href="{{route('lang', ['lang' => 'pt'])}}">
          <img src="{{asset('images/br.jpg')}}" alt="Brazil flag" class="object-contain rounded h-7">
        </a>
      @else
        <a href="{{route('lang', ['lang' => 'en'])}}">
          <img src="{{asset('images/uk.jpg')}}" alt="USA flag" class="object-contain rounded h-6">
        </a>          
      @endif
    </div>
  </nav>

  <main class="pt-24 pb-12 xl:px-72">
    @yield('body')
  </main>

  <footer class="h-12 w-full flex items-center justify-start p-4 text-white absolute bottom-0">
    <h6>@lang('Made by Leonardo')</h6>
  </footer>

</body>
</html>

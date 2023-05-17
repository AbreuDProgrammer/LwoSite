<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>{{$title}}</title>
</head>
<body class="h-full">
  <nav class="fixed top-0 left-0 w-full h-12 grid grid-cols-4 content-center px-6 bg-white">
    <div>
      <h4><a href="{{route('welcome')}}">Homepage</a></h4>
    </div>
    <div>
      <h4><a href="{{route('about.me')}}">About me</a></h4>
    </div>
    <div>
      <h4><a href="{{route('projects')}}">Projects</a></h4>
    </div>
    <div class="flex items-center justify-end text-3xl">
      <a href="">&#x2630;</a>
    </div>
  </nav>
  <main class="pt-12">
    @yield('body')
  </main>
  <footer class="h-12 w-full bg-black flex items-center justify-start p-4 text-white bottom-0 absolute">
    <h6>Made by Leonardo</h6>
  </footer>
</body>
</html>

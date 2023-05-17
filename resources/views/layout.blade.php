<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>{{$title}}</title>
</head>
<body>
  <nav class="fixed top-0 left-0 w-full h-12 bg-black text-white grid grid-cols-1 content-center px-4">
    <div class="flex items-center justify-end text-3xl">
      <a href="">&#x2630;</a>
    </div>
  </nav>
  <main class="pt-12">
    @yield('body')
  </main>
</body>
</html>

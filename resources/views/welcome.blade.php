@extends('layout')
@section('body')
  <div class="grid gap-6">
    <nav class="w-full text-white">
      <div class="bg-sky-900 w-full h-80 grid grid-cols-2 px-4 rounded-xl">
        <div class="flex flex-col items-center justify-center p-4 italic">
          <h1 class="text-8xl">Software</h1>
          <h1 class="pl-64 text-8xl">Engineer</h1>
        </div>
        <img src="{{asset('images/me.png')}}" alt="Me" class="object-none object-top w-full h-80">
      </div>
    </nav>
  </div>
@endsection

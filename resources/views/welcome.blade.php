@extends('layout')
@section('body')
  <nav class="bg-sky-900 w-full h-64 grid grid-cols-2 px-4">
    <div class="text-center p-4 italic">
      <h1 class="text-8xl">Software</h1>
      <h1 class="pl-64 text-8xl">Engineer</h1>
    </div>
    <img src="{{asset('images/me.png')}}" alt="Me" class="object-none object-top w-full h-64">
  </nav>
@endsection

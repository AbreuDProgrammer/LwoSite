@extends('layout')
@section('body')
  <nav class="bg-sky-900 w-full h-80 grid grid-cols-2 px-4">
    <div class="flex flex-col items-center justify-center p-4 italic">
      <h1 class="text-8xl">Software</h1>
      <h1 class="pl-64 text-8xl">Engineer</h1>
    </div>
    <img src="{{asset('images/me.png')}}" alt="Me" class="object-none object-top w-full h-80">
  </nav>
  <div>
    <div class="w-full p-4 bg-slate-900 space-y-12">
      <h1>Projects:</h1>
      <div class="grid grid-cols-4 gap-4">
        <x-project/>
        <x-project/>
        <x-project/>
        <x-project/>
      </div>
    </div>
  </div>
@endsection

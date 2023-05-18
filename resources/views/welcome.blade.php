@extends('layout')
@section('body')
  <div class="grid">
    <div class="bg-sky-900 w-full xl:h-80 grid xl:grid-cols-2 px-4 rounded-xl">
      <div class="flex flex-col items-center justify-center p-4 italic">
        <h1 class="xl:text-8xl">Software</h1>
        <h1 class="xl:pl-64 pl-4 xl:text-8xl">Engineer</h1>
      </div>
      <img src="{{asset('images/me.png')}}" alt="Me" class="object-none object-top w-full h-80">
    </div>
  </div>
@endsection

@extends('layout')
@section('body')
<div class="bg-slate-900 p-4 grid grid-cols-3">
    <div class="w-full flex items-end justify-center">
      <img src="{{asset('images/alsome.jpg')}}" alt="Me again" class="max-w-lg rounded">
    </div>
    <div class="flex flex-col items-start justify-start space-y-4 p-12 col-span-2">
      <h1>My name is Leonardo</h1>
      <h2>I work at Nearsoft</h2>
    </div>
  </div>
@endsection

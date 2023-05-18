@extends('layout')
@section('body')
  <div class="w-full">
    <h3 class="pb-6">All of my projects:</h3>
    <div class="grid grid-cols-3 gap-4">
      <x-project/>
      <x-project/>
      <x-project/>
      <x-project/>
      <x-project/>
      <x-project/>
      <x-project/>
    </div>
  </div>
@endsection
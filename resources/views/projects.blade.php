@extends('layout')
@section('body')
  <div class="w-full p-4 bg-slate-900 space-y-12">
    <h1>Projects:</h1>
    <div class="grid grid-cols-4 gap-4">
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
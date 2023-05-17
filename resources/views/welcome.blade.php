@extends('layout')
@section('body')

  <nav class="w-full p-6 text-white">
    <div class="bg-sky-900 w-full h-80 grid grid-cols-2 px-4 rounded-xl">
      <div class="flex flex-col items-center justify-center p-4 italic">
        <h1 class="text-8xl">Software</h1>
        <h1 class="pl-64 text-8xl">Engineer</h1>
      </div>
      <img src="{{asset('images/me.png')}}" alt="Me" class="object-none object-top w-full h-80">
    </div>
  </nav>

  <div class="p-6 pt-0">

    <div class="grid grid-cols-2 gap-4 py-6">

      <div class="rounded-xl border-2 border-black p-4 grid grid-cols-2">
        <div>
          <h2><a href="https://nearsoft.pt/">Nearsoft</a></h2>
          <h3>Computer programmer</h3>
        </div>
        <div class="flex flex-row items-center justify-end">
          <img src="{{asset('images/nearsoft.jpg')}}" alt="Nearsoft logo" class="rounded-full object-contain h-24">
        </div>
      </div>

      <div class="rounded-xl border-2 border-black p-4 grid grid-cols-2">
        <div>
          <h2><a href="https://www.dimmersions.com/">Dimmersions</a></h2>
          <h3>Computer programmer</h3>
        </div>
        <div class="flex flex-row items-center justify-end">
          <img src="{{asset('images/dimmersions.jpg')}}" alt="Nearsoft logo" class="rounded-full object-contain h-24">
        </div>
      </div>

    </div>

    <div class="w-full">
      <div class="rounded-xl border-2 border-black p-4">
        <h2><a href="https://epcc.pt/">Escola Profissional Crstóvão Colombo</a></h2>
        <h3>Curso Técnico Programador de Informática</h3>
      </div>
    </div>

  </div>
@endsection

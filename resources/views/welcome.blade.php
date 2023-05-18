@extends('layout')
@section('body')
  <nav class="w-full text-white">
    <div class="bg-sky-900 w-full h-80 grid grid-cols-2 px-4 rounded-xl">
      <div class="flex flex-col items-center justify-center p-4 italic">
        <h1 class="text-8xl">Software</h1>
        <h1 class="pl-64 text-8xl">Engineer</h1>
      </div>
      <img src="{{asset('images/me.png')}}" alt="Me" class="object-none object-top w-full h-80">
    </div>
  </nav>
  <div class="">
    <h3 class="py-4">@lang('Skills:')</h3>
    <div class="grid grid-cols-2 gap-6">
      
      <div>
        <div class="pb-6 flex items-end justify-start space-x-6">
          <h2>PHP</h2>
          <h4>95%</h4>
        </div>
        <div class="w-full bg-slate-800 rounded-xl h-4">
          <div class="h-full bg-green-600 rounded-xl" style="width: 95%"></div>
        </div>
      </div>
      
      <div>
        <div class="pb-6 flex items-end justify-start space-x-6">
          <h2>Javascript</h2>
          <h4>90%</h4>
        </div>
        <div class="w-full bg-slate-800 rounded-xl h-4">
          <div class="h-full bg-green-600 rounded-xl" style="width: 90%"></div>
        </div>
      </div>

      <div>
        <div class="pb-6 flex items-end justify-start space-x-6">
          <h2>Java</h2>
          <h4>70%</h4>
        </div>
        <div class="w-full bg-slate-800 rounded-xl h-4">
          <div class="h-full bg-green-600 rounded-xl" style="width: 70%"></div>
        </div>
      </div>

      <div>
        <div class="pb-6 flex items-end justify-start space-x-6">
          <h2>React</h2>
          <h4>85%</h4>
        </div>
        <div class="w-full bg-slate-800 rounded-xl h-4">
          <div class="h-full bg-green-600 rounded-xl" style="width: 85%"></div>
        </div>
      </div>

      <div>
        <div class="pb-6 flex items-end justify-start space-x-6">
          <h2>Java</h2>
          <h4>95%</h4>
        </div>
        <div class="w-full bg-slate-800 rounded-xl h-4">
          <div class="h-full bg-green-600 rounded-xl" style="width: 95%"></div>
        </div>
      </div>

    </div>
  </div>
@endsection

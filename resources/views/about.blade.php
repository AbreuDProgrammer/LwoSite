@extends('layout')
@section('body')
<div class="grid grid-cols-3 py-6">
    <div class="w-full flex items-end justify-center">
      <img src="{{asset('images/alsome.jpg')}}" alt="Me again" class="rounded">
    </div>
    <div class="flex flex-col items-start justify-start space-y-4 px-12 col-span-2">
      <h1>My name is Leonardo</h1>
      <p class="text-xl">
        Eu nasci em dezembro de 2005 no Brasil, me mudei para
        Portugal em 2019 quando terminei o 8º ano, e comecei a 
        estudar como programador de informática em 2020. <br><br>
        Atualmente já estagiei em duas influentes empresas em Portugal,
        participei do Immerse Global Summit da europa em 2022
        e estou contratado para trabalhar em uma das empresas que estagiei. <br><br>
        Para o futuro vou terminar meu projeto final de curso, 
        começar a trabalhar na empresa e pretendo depois fazer a universidade
        de engenheiro de informática.
      </p>
    </div>
  </div>
@endsection

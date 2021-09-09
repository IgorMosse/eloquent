@extends('layouts.app')

@section('content')
   <div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Criar Pessoa
        </h1>
    </div>
   </div>

   <div class="flex justify-center pt-20">
       <form action="/pessoa/{{ $pessoa->id }}" method="POST">
        @csrf
        @method('PUT')
           <div class="block">
               Nome Completo<br>
               <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="Nome Completo" value="{{ $pessoa->nome }}"><br>
               Email<br>
               <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="email" value="{{ $pessoa->email }}"><br>
               <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase bold">
                   Salvar
               </button>
           </div>
       </form>

   </div>

@endsection

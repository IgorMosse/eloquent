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
       <form action="/pessoa" method="POST">
        @csrf
           <div class="block">
               Nome Completo<br>
               <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="Nome Completo" placeholder="Nome pessoa..."><br>
               Email<br>
               <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="email" placeholder="Email pessoa..."><br>
               <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase bold">
                   Salvar
               </button>
           </div>
       </form>

   </div>

@endsection

@extends('layouts.app')
@section('content')
<h1 class="product-title">lista de empleados</h1>
<div class="container-buttoms">
    <button class="button-default">
        <a href="{{route('empleado.create')}}">
            Añadir
        </a>
    </button>
</div>
<br><br>
<div class="container-empleados">
   <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($empleados as $empleado)
            <li class="list-empleado">
                <div class="container-empleados_imagen">
                    <picture>
                        <img class="empleados_imagen" src="{{asset('images').'/'.$empleado->photo}}" alt="Neil image">
                    </picture>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            {{$empleado->first_name}} {{$empleado->first_lastName}} {{$empleado->second_lastName}}
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            {{$empleado->email}}
                        </p>
                    </div>
                    <form method="post" action="{{route('empleado.destroy', ['empleado'=> $empleado])}}" >
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"  onclick="return confirm('¿realmente quieres borrar este empleado?')" 
                        class="button-delet" / >
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
   </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
    <h1 class="product-title">Editar Productos</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div>
        @if(session()->has('succes'))
        <div>
            {{session('succes')}}
        </div>
        @endif
    </div>
    <div class="container-form">
    <form class="w-full max-w-lg"method="post" action="{{route('product.update',['product'=>$product])}}"">
        @csrf <!-- Esto es para Laravel, agrega un campo oculto con el token CSRF -->
        @method('put')
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="container-inputs">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" id="name" name="name"  value="{{$product->name}}" autocomplete required/>
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            </div>
            <div class="container-inputs">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Descripción
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="description" type="text" placeholder="Doe"  value="{{$product->description}}" name="description"/>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="container-inputs">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    disponible
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="avalible"
                        name="avalible"
                        value='{{$product->avalible}}'
                    >
                        <option value="1">si</option>
                        <option value="0">no</option>
                    </select>
                </div>
            </div>
            <div class="container-inputs">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                    Cantidad
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="number" id="cantidad" name="cantidad" min="0" value="{{$product->cantidad}}" required placeholder="90">
            </div>
            <div class="container-inputs">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                    Valor
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="number" id="value" name="value" step="0.01" value="{{$product->value}}" min="0" required
                    placeholder="90.210">
            </div>
        </div>
        <div class="container-boton_form">
            <button class="button-default" type="submit">Guardar</button>
        </div> 
    </form>
</div>
@endsection
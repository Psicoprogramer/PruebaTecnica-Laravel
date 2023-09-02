@extends('layouts.app')
@section('content')
<h1 class="title-products">Lista de Productos</h1>
<div class="main-container">
        @foreach($products as $product)
        <div class="container-products">
            <div>
            <h2 class="product-title">{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <span class="{{ $product->available ? 'text-green-600' : 'text-red-600' }}">
                {{ $product->available ? 'No disponible' : 'Disponible' }}
            </span>
            </div>
            <div>
            <p >Cantidad: {{ $product->cantidad }}</p>
            <p >Valor: {{ $product->value }}</p>
            </div>
            <div class="container-buttoms">
                <button class="button-default">
                    <a href="{{route('product.edit',['product' => $product])}}">
                        editar
                    </a>
                </button>
                <form method="post" action="{{route('product.destroy', ['product'=> $product])}}" >
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete"  onclick="return confirm('¿realmente quieres borrar este articulo?')" 
                    class="button-delet" / >
                </form>
            </div>
        </div>
        @endforeach

</div>
@endsection
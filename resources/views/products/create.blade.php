@extends('layouts.app')
@section('content')
    <h1 class="product-title">Formulario de Producto</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    @include('parciales.form');
   
    
@endsection

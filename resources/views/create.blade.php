@extends('layouts.app')

@section('content')
<h1>Agregar Producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </div>

    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection

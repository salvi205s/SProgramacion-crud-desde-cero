@extends('plantilla')

@section('content')
    <h1 class="text-center m-3">Productos</h1>
    <div class="table-responsive">
        <table class="table table-light mx-auto w-75">
            <thead>
                <tr class="table">
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descipción</th>
                    <th scope="colspan=2">Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($productos as $producto)
                    <tr class="">
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>
                            <form action="{{ route('productos.destroy', $producto) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro??')">
                                    Delete
                                </button>
                            </form>
                        </td>
                        <td>
                            {{-- <form action="{{ route('productos.update', $producto) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

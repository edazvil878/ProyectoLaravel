@extends('usuario.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Usuarios</div>
            <div class="card-body">
                <a href="{{ route('usuario.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Nuevo usuario</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <th scope="row">{{ $usuario->id }}</th>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <form action="{{ route('usuario.destroy', $usuario->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('usuario.show', $usuario->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Ver</a>

                                    <a href="{{ route('usuario.edit', $usuario->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar este producto?');"><i class="bi bi-trash"></i> Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>

            </div>
        </div>
    </div>    
</div>
    
@endsection
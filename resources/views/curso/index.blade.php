@extends('curso.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">cursos</div>
            <div class="card-body">
                <a href="{{ route('curso.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Nuevo curso</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">descripcion</th>
                        <th scope="col">dificultad</th>
                        <th scope="col">duracion</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                        <tr>
                            <th scope="row">{{ $curso->id }}</th>
                            <td>{{ $curso->nombre }}</td>
                            <td>{{ $curso->descripcion }}</td>
                            <td>{{ $curso->dificultad }}</td>
                            <td>{{ $curso->duracion }}</td>
                            <td>
                                <form action="{{ route('curso.destroy', $curso->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('curso.show', $curso->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Ver</a>

                                    <a href="{{ route('curso.edit', $curso->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>   

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
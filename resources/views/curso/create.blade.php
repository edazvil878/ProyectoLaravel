@extends('curso.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Añadir curso
                </div>
                <div class="float-end">
                    <a href="{{ route('curso.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('curso.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}">
                            @if ($errors->has('nombre'))
                                <span class="text-danger">{{ $errors->first('nombre') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end text-start">descripcion</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
                            @if ($errors->has('descripcion'))
                                <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="dificultad" class="col-md-4 col-form-label text-md-end text-start">dificultad</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('dificultad') is-invalid @enderror" id="dificultad" name="dificultad" value="{{ old('descripcion') }}">
                            @if ($errors->has('dificultad'))
                                <span class="text-danger">{{ $errors->first('dificultad') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="duracion" class="col-md-4 col-form-label text-md-end text-start">duracion</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('duracion') is-invalid @enderror" id="duracion" name="duracion" value="{{ old('descripcion') }}">
                            @if ($errors->has('duracion'))
                                <span class="text-danger">{{ $errors->first('duracion') }}</span>
                            @endif
                        </div>
                    </div>

                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Añadir curso">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
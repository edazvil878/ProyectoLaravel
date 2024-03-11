@extends('usuario.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información del Usuario
                </div>
                <div class="float-end">
                    <a href="{{ route('usuario.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $usuarios->nombre }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $usuarios->email }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection
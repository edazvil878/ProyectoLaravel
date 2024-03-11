@extends('curso.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información del curso
                </div>
                <div class="float-end">
                    <a href="{{ route('curso.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">

            <?php if ($leccion != ""): ?>
                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            
                        <?php    echo $leccion["id"];?>


                        </div>
                    </div>      

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Titulo:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                        
                        <?php    echo $leccion["titulo"];?>


                        </div>
                    </div>

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Contenido:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                        
                        <?php    echo $leccion["contenido"];?>
    

                        </div>
                    </div>

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Orden:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                        
    <?php    echo $leccion["orden"];?>

                        </div>
                    </div>
                    <?php else:?>
                        <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>No hay lecciones asociadas a este curso</strong></label>

                        </div>

                    <?php endif; ?>

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cursos->nombre }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end text-start"><strong>descripcion:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cursos->descripcion }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="dificultad" class="col-md-4 col-form-label text-md-end text-start"><strong>dificultad:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cursos->dificultad }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="duracion" class="col-md-4 col-form-label text-md-end text-start"><strong>duracion:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $cursos->duracion }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>

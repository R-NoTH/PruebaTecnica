<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('head')

<body>
    <div class="flex-center position-ref full-height">

        <div class="container mt-5">
            <h3>Importar alumnos</h3>

            @if ($errors->any())

                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                </div>
            @endif

            @if (isset($numRows))
                <div class="alert alert-sucess">
                    Se importaron {{ $numRows }} registros.
                </div>
            @endif

            <form action="{{ route('imports') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-3">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="alumnos">
                            <label class="custom-file-label" for="alumnos">Seleccionar archivo</label>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Importar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('head')

<body>
    <div class="flex-center position-ref full-height">

        <div class="container mt-5">

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
            <div class="row">

                <form action="{{ route('importClientes') }}" method="post" enctype="multipart/form-data">
                    <h3>Importar Clientes</h3>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-9">
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
                <form action="{{ route('importPagos') }}" method="post" enctype="multipart/form-data">
                    <h3>Importar pagos</h3>

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-9">
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
                <form action="{{ route('updatePagos') }}" method="post" enctype="multipart/form-data">
                    <h3>Actualizar pagos</h3>

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-9">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="alumnos">
                                <label class="custom-file-label" for="alumnos">Seleccionar archivo</label>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-9">
                        <a href="{{ route('exports') }}">Exportar Sabada De Datos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

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
                    <div class="container pt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Ultima fecha de actualización del archivo Base_pagos</th>

                                </tr>
                            </thead>
                            <tbody>

                                @if ($updateImports == null)

                                    <tr>
                                        <td>No hay Registros</td>
                                        <td></td>

                                    </tr>

                                @else
                                    <tr>
                                        <td>{{ $updateImports->id }}</td>
                                        <td>{{ $updateImports->registroActualizacion }}</td>

                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
            <div class="row">

                <div class="col-6">
                    <a href="{{ route('exports') }}" class="btn btn-dark">Exportar Sabada De Datos</a>
                </div>

                <div class="col-6">
                    <a href="{{ route('frecuanciaBaseCliente') }}" class="btn btn-dark">Frecuencia de existencia de
                        cada
                        cliente</a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>

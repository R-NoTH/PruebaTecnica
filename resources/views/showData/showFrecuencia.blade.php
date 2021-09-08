<!DOCTYPE html>
<html lang="en">

@extends('head')

<head>

    <title>Show Frecuancia</title>
</head>

<body>
    <div class="container pt-5">
        <div style="text-align: center;">

            <h3>Frecuencia con la que existe cada cliente en Base_cliente</h3>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">DNI</th>
                    <th scope="col">Cantidad de veces en la que se repite</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($arrayConsulta))

                    @foreach ($arrayConsulta as $valor)

                        <tr>
                            <td>{{ $valor->dni }}</td>
                            <td>{{ $valor->{'COUNT(*)'} }}</td>

                        </tr>

                    @endforeach

                @endif
            </tbody>
        </table>
        <div style="text-align: center;">

            <a href="{{ route('importForm') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>

</body>

</html>

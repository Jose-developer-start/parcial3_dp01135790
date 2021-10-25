@extends('layout.app')
@section('title','Nota - calificaciones')
@section('content')
<div class="container">
    <h1>Apartado de notas</h1>
    <table class="table table-responsive-sm table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Asignatura</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Parcial</th>
                <th>Promedio</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $nota)
                
            <tr>
                <td>{{ $nota->id }}</td>
                <td>{{ $nota->nombreCurso }}</td>
                <td>{{ $nota->nota1 }}</td>
                <td>{{ $nota->nota2 }}</td>
                <td>{{ $nota->nota3 }}</td>
                <td>{{ $nota->nota4 }}</td>
                <td>{{ $nota->parcial }}</td>
                <td>{{ $nota->promedio }}</td>
                <td>
                    @if (6 < $nota->promedio)
                        Aprobado
                    @else
                        Reprobado
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
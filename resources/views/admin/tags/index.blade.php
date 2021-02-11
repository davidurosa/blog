
@extends('adminlte::page')

@section('title', 'admin')

@section('content_header')
<a class="btn btn-primary float-right btn-sm" href="{{route('admin.tags.create')}}">Crear etiquetas</a>
    <h1>mostrar listado de etiquetas </h1>
@stop

@section('content')

@section('content')

@if (session('info'))

<div class="alert alert-success">

    <strong>
        {{session('info')}}
    </strong>
</div>

@endif

        <div class="card">

            <div class="card-body">
                <table class="table table-stripe">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)

                            <tr>
                                <td>
                                    {{$tag->id}}
                                </td>
                                <td>
                                    {{$tag->name}}
                                </td>



                                <td width="10px">
                                    <a class="btn btn-success btn-sm" href="{{route('admin.tags.edit',$tag)}}">Editar</a>
                                </td>

                                <td width="10px">
                                    <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                                        @csrf
                                         @method('delete')
                                        <button class="btn btn-danger btn-sm"  type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@stop


@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="{{route('rol/show')}}" method="post" novalidate class="form-inline">
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Buscar</button>
                        <a href="{{route('rol.index')}}" class="btn btn-primary">Todo</a>
                        <a href="{{route('rol.create')}}" class="btn btn-primary">Crear</a>
                    </div>
                </form>
            </article>

            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $rol)
                        <tr>
                            <td>{{$rol->name}}</td>
                            <td>{{$rol->status->name}}</td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('rol.edit',['id' => $rol->id]) }}">Editar</a>
                                <a class="btn btn-danger btn-xs" href="{{route('rol.destroy',['id' => $rol->id]) }}">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        </div>  
    </section>
@endsection
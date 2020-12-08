@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="{{route('rentail/show')}}" method="post" novalidate class="form-inline">
                    @csrf
                    

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Buscar</button>
                        <a href="{{route('rentail.index')}}" class="btn btn-primary">Todo</a>
                        <a href="{{route('rentail.create')}}" class="btn btn-primary">Crear</a>
                    </div>
                </form>
            </article>

            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Fecha entrega</th>
                            <th>Fecha Devolucion</th>
                            <th>Total</th>
                            <th>Usuario</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rentails as $rentail)
                        <tr>
                            <td>{{$rentail->star_date}}</td>
                            <td>{{$rentail->end_date}}</td>
                            <td>{{$rentail->total}}</td>
                            <td>{{$rentail->user->name}}</td>
                            <td>{{$rentail->status->name}}</td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{route('rentail.edit',['id' => $rentail->id]) }}">Editar</a>
                                <a class="btn btn-danger btn-xs" href="{{route('rentail.destroy',['id' => $rentail->id]) }}">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        </div>  
    </section>
@endsection
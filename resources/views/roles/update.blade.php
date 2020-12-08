@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('rol/update', ['id' => $rol->id])}}" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required value="{{$rol->name}}">
                    </div>

                    <div class="form-group">
						<label>Estado</label>
						<select name="status_id" class="form-control" requered value="{{$rol->status_id}}">
                            <option value="">Seleccione...</option>
                            <?php foreach($statuses as $status): ?>
                                <option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
                            <?php endforeach ?>
                        </select>
					</div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">Enviar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
@endsection
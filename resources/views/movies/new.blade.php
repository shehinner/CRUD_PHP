@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="{{route('movie.store')}}" method="post" novalidate>
                @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" name="description" class="form-control" required>
                    </div>

                     <div class="form-group">
                    
						<label>Estado</label>
						<select id='select' name="status_id"  class="form-control">
                            <option selected disabled readonly>Seleccione...</option>
                            @foreach($statuses as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                            @endforeach
                        </select>
                        
					</div>
                    <div class="form-group">
                    
						<label>Usuarios</label>
						<select id='select' name="user_id"  class="form-control">
                            <option selected disabled readonly>Seleccione...</option>
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
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

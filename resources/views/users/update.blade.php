@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('user/update', ['id' => $user->id])}}" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" name="email" class="form-control" required value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" required value="{{$user->password}}">
                    </div>

                    <div class="form-group">
                    
						<label>Estado</label>
						<select id='select' name="status_id"  class="form-control" required value="{{$user->status_id}}">
                            <option selected disabled readonly>Seleccione...</option>
                            @foreach($statuses as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                            @endforeach
                        </select>
                        
					</div>
                    <div class="form-group">
                    
						<label>Roles</label>
						<select id='select' name="role_id"  class="form-control" required value="{{$user->role_id}}">
                            <option selected disabled readonly>Seleccione...</option>
                            @foreach($roles as $rol)
                            <option value="{{$rol->id}}">{{$rol->name}}</option>
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
@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
            <form action="{{route('rentail/update', ['id' => $rentail->id])}}" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <label>Fecha entrega</label>
                        <input type="date" name="star_date" class="form-control" required value="{{$rentail->star_date}}" >
                    </div>
                    
                    <div class="form-group">
                        <label>Fecha devolucion</label>
                        <input type="date" name="end_date" class="form-control" required value="{{$rentail->end_date}}">
                    </div>
                    <div class="form-group">
                        <label>Tolal</label>
                        <input type="number" name="total" class="form-control" required value="{{$rentail->total}}">
                    </div>
                    <div class="form-group">
                    
						<label>Estado</label>
						<select id='select' name="status_id"  class="form-control" required value="{{$rentail->status_id}}">
                            <option selected disabled readonly>Seleccione...</option>
                            @foreach($statuses as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                            @endforeach
                        </select>
                        
					</div>
                    <div class="form-group">
                    
						<label>Usuarios</label>
						<select id='select' name="user_id"  class="form-control" required value="{{$rentail->user_id}}">
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
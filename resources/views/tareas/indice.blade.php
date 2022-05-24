@extends('app')

@section('content')
      <div class= "container w-25 border p-4" >
        <form>
                <div class="mb-3">
                <label for="title" class="form-label">Título Tarea</label>
                <input type="text" name="titlle" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
                </form>

      </div>
@endsection
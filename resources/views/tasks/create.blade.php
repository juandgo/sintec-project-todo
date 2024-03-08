@extends('layouts.app')

@section('content')
    <h1>Nueva Tarea</h1>
    <form action="/tasks" method="POST">
        <div class="form-group">
            {{-- @csrf --}}
            <label for="description">Descripción de la tarea</label>
            <input class="form-control" name="description">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Crear Tarea</button>
        </div>
    </form>
@endsection

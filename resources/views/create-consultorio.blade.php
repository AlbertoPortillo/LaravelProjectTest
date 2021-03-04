@extends('layouts.inside')
@section('behind')
<h1 class="text-center">Crear Consultorio</h1>
<div class="row">
    <div class="col text-center">
        <form action="/consultorio-crear" method="post">
            @csrf
            <div class="col mt-5">
                <label for='doctor_name'>Nombre del Doctor</label>
                <input id="doctor_name" name="doctor_name" type="text" class="form-control">
                {!! $errors->first('doctor_name', '<span>:message</span>') !!}                   
            </div>
            <div class="col mt-5">
                <label for="telefono">Telefono</label>
                <input id="telefono" name="telefono" type="tel" class="form-control">
                {!! $errors->first('telefono', '<span>:message</span>') !!}                   
            </div>
            <div class="col mt-5">
                <button class="btn btn-primary" type="submit">Crear</button>
            </div>
        </form>
    </div>
</div>
@endsection
@extends('layouts.inside')
@section('behind')
<div class="row">
    <div class="col"></div>
    <div class="col-6 text-center">
        <h1 class="mb-5">Registrar Pacientes</h1>
        <form class="border" method="POST" action="/create-pacient">
            @csrf
            <div class="col mt-3">
                <label for="InputName" class="form-label">Name</label>
                <input class="form-control" name="name" type="text" id="InputName">
                @if ($errors->any())
                    {!! $errors->first('name', '<span>:message</span>') !!}                   
                @endif
            </div>
            <div class="col mt-5">
                <label for="InputEmail1" class="form-label">Email address</label>
                <input class="form-control" type="email" name="email" id="InputEmail1">
                @if ($errors->any())
                    {!! $errors->first('email', '<span>:message</span>') !!}                   
                @endif
            </div>
            <div class="col mt-5">
                <label for="Inputphone" class="form-label">Phone</label>
                <input class="form-control" type="tel" name="telefono" id="Inputphone">
                @if ($errors->any())
                    {!! $errors->first('telefono', '<span>:message</span>') !!}                   
                @endif
            </div>
            <div class="col mt-5 mb-3">
                <button type="submit" class="btn btn-primary w-75" >Crear</button>
            </div>

        </form>
    </div>
    <div class="col"></div>
</div>
@endsection
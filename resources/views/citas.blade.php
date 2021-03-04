@extends('layouts.inside')
@section('behind')
    <div class="row">
        <div class="col"></div>
        <div class="col-6 text-center">
            <h1>Citas</h1>
            @if(isset($citas))
            
            
                
            @else
                <p class="text-uppercase fs-1"> No hay citas del usuario</p>
                <a href="">
                    <p class="text-uppercase fs-3"> Solicitar primera cita </p>
                </a>
            @endif
        </div>
        <div class="col"></div>
    </div>
@endsection
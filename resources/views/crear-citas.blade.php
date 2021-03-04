@extends('layouts.inside')
@section('behind')
    <div class="row">
        <div class="col"></div>
        <div class="col-6 text-center">
            <h1>Crear citas</h1>
            <form class="border border-2 m-3 h-100" method="POST" action="{{ route('create-citas', $id) }}">
                @csrf
                <div class="col mt-5">
                    @if(isset($consultorios))
                        <select name="consultorio" class="w-100 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            @foreach ($consultorios as $consultorio)
                                <option value="{{$consultorio->id}}">{{$consultorio->doctor_name}}</option>
                            @endforeach
                            
                        </select>
                        {!! $errors->first('consultorio', '<span>:message</span>') !!}
                    @else
                        <p class="text-uppercase fs-1"> No hay Consultorios</p>
                        <a href="{{ route('crear-consultorio') }}">
                            <p class="text-uppercase fs-3"> Crea un consultorio </p>
                        </a>
                    @endif
                </div>
                <div class="col mt-5">
                    <input name="date" type="date" class="form-control">
                    {!! $errors->first('date', '<span>:message</span>') !!}                   

                </div>
                <div class="col mt-5">
                    <input name="hour" type="time" class="form-control">
                    {!! $errors->first('hour', '<span>:message</span>') !!}                   

                </div>
                <div class="col mt-5">
                    <button class="btn btn-primary" type="submit">Crear</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
@endsection
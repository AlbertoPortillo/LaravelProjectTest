@extends('layouts.inside')
@section('behind')
    <div class="row">
        <div class="col"></div>
        <div class="col-6 text-center">
            <h1>Citas</h1>
            @if(isset($citas))
                <a href="{{ route('crear-citas', $id) }}">
                    <p class="text-uppercase fs-3"> Solicitar una cita </p>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">fecha</th>
                          <th scope="col">hora</th>
                          <th scope="col">doctor</th>
                          <th scope="col">Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($citas as $cita)
                        <tr>
                            <th scope="row">{{$cita->id}}</th>
                            <td>{{$cita->fecha}}</td>
                            <td>{{$cita->hora}}</td>
                            <td>{{$cita->doctor_name}}</td>
                            <td> 
                                <div class="row">
                                    <div class="col">
                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar Cita" onclick="return confirm('Seguro que desas eliminar esta cita?')" href="{{ route('borrar-citas', ['id'=>$id, 'cita'=>$cita->id]) }}">
                                            <i class="fa fa-trash"></i> 
                                        </a>
                                    </div>    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>

                
            @else
                <p class="text-uppercase fs-1"> No hay citas del usuario</p>
                <a href="{{ route('crear-citas', $id) }}">
                    <p class="text-uppercase fs-3"> Solicitar primera cita </p>
                </a>
            @endif
        </div>
        <div class="col"></div>
    </div>
@endsection
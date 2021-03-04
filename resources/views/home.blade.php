@extends('layouts.inside')
@section('behind')
<div class="row flex ">
    <div class="col-3"></div>
    <div class="col-6 text-center">
        <div class="">
            <div class="">
                <h1>Home</h1>

                <h4 class="mt-3">Pacientes</h4>
                @if(isset($users))
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">name</th>
                          <th scope="col">email</th>
                          <th scope="col">telefono</th>
                          <th scope="col">Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->telefono}}</td>
                            <td> 
                                <div class="row">
                                    <div class="col">
                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar usuario" onclick="return confirm('Seguro que desas eliminar este usuario?')" href="{{ route('delete-paciente', $user->id) }}">
                                        <i class="fa fa-trash"></i> 
                                    </a>
                                    </div>
                                    <div class="col">
                                    <a class="tooltiptext" data-bs-toggle="tooltip" data-bs-placement="top" title="Agendar una cita" href="{{ route('citas', $user->id) }}">
                                        <i class="fa fa-calendar"></i> 
                                    </a>
                                    </div>
                                    <div class="col">
                                        <a class="tooltiptext" title="Editar Usuario" href="{{ route('delete-paciente', $user->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
                @else
                    <p class="fs-1 text-uppercase"> Not user Registered </p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>
@endsection
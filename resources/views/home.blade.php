@extends('layouts.inside')
@section('behind')
<h1 class="text-center">Home</h1>
<div class="row flex ">
    <div class="col border border-2 text-center">
        <h4 class="mt-3">Consultorios</h4>
        <a href="{{ route('crear-consultorio') }}">
            <i class="fa fa-plus"></i>
        </a>
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Doctor</th>
                  <th scope="col">telefono</th>
                  <th scope="col">Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($consultorios as $consultorio)
                <tr>
                    <th scope="row">{{$consultorio->id}}</th>
                    <td>{{$consultorio->doctor_name}}</td>
                    <td>{{$consultorio->telefono}}</td>
                    <td> 
                        <div class="row">
                            <div class="col">
                                <a class="tooltiptext" title="Editar Consultorio" href="{{ route('edit-consultorio', $consultorio->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </div>

                        </div>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>

    </div>
    <div class="col border border-2 text-center">
        <div class="">
            <div class="">

                <h4 class="mt-3">Pacientes</h4>
                <a href="{{  url('/create-pacient')  }}">
                    <i class="fa fa-plus"></i>
                </a>
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
                                        <a class="tooltiptext" title="Editar Usuario" href="{{ route('edit-paciente', $user->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
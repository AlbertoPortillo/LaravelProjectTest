@extends('layouts.outside')
@section('behind')
    <div class="DivRegister">
        <h1>Register</h1>
        <form method="POST" action='/register'> 
            @csrf
            <input name="name" placeholder="Nombre"/>
            <input name="email" type="email" placeholder="Email"/>
            <input name="username" placeholder="Username"/>
            <input name="password" type="password" placeholder="Password"/>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="errorLi">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button class="buttonRegister" type="submit">Enviar</button>
        </form>
    </div>
@endsection
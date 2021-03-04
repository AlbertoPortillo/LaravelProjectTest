@extends('layouts.outside')
@section('behind')
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 text-center">
            <h1 class="tittle">Login</h1>
            <form class="border border-2 m-3 h-100" method="POST" action='/login'> 
                @csrf
                <div class="col mt-5">
                    <input class="form-control" name="email" placeholder="Email" value="{{ old('email') }}"/>
                    @if ($errors->any())
                        {!! $errors->first('email', '<span>:message</span>') !!}                   
                    @endif
                </div>
                <div class="col mt-3">
                    <input class="form-control" name="password" placeholder="Password"/>
                    @if ($errors->any())
                        {!! $errors->first('password', '<span>:message</span>') !!}                   
                    @endif
                </div>
                <div class="col mt-3 ">
                    <button class="btn  btn-primary mt-3" type="submit">Enviar</button>
                </div>
            </form>
        </div> 
    </div>
@endsection
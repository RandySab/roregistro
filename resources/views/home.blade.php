@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rocky Open 2021 - REGISTRO DE EQUIPOS Y JUGADORES') }}
                    <br>
                    <br>
                    Para comenzar haz clic en Equipos en el Menú superior e ingresa los equipos que representas. Posteriormente agrega los jugadores.

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    BIENVENIDO {{ $user->name }}, ahora estás logeado !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

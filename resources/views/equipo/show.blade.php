@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? 'Show Equipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">MOSTRAR EQUIPO</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <!-- <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $equipo->user_id }}
                        </div> -->
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $equipo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Rama:</strong>
                            {{ $equipo->rama }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $equipo->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $equipo->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $equipo->pais }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('adminlte::page')

@section('title', config('adminlte.title') . ' | Panel')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Panel de Control</h3>
                        </div>
                        <div class="card-body">
                            <!-- Contenido del dashboard -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
@stop

@section('js')
    <script>
        console.log('Dashboard cargado');
    </script>
@stop

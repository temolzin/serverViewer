@extends('adminlte::page')

@section('title',' Detalles del Servidor')

@section('content')
<section class="content">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Detalles del Servidor</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="miTabla" class="table table-striped display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Hostname</th>
                                        <th>Tiempo de actividad</th>
                                        <th>Versión del kernel</th>
                                        <th>Estado</th>
                                        <th>Número de CPU</th>
                                        <th>Almacenamiento total</th>
                                        <th>Direcciones IP</th>
                                        <th>Tipo de SO</th>
                                        <th>Versión de SO</th>
                                        <th>Sistemas de archivos</th>
                                        <th>Usuarios</th>
                                        <th>Grupos</th>
                                        <th>Versión de Python</th>
                                        <th>IP principal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#miTabla').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print'],
            processing: true,
            serverSide: false,
            ajax: '{{ route("serverDetail.getData") }}',
            columns: [
                { data: 'hostName' },
                { data: 'uptime' },
                { data: 'kernelVersion' },
                { data: 'status' },
                { data: 'cpuCount' },
                { data: 'storageTotal' },
                { data: 'ipAddresses' },
                { data: 'osType' },
                { data: 'osVersion' },
                { data: 'filesystemInfo' },
                { data: 'users' },
                { data: 'groups' },
                { data: 'pythonVersion' },
                { data: 'mainIp' }
            ]
        });
    });
</script>
@endsection

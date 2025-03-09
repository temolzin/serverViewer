<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable con Laravel</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body>

    <table id="miTabla" class="display">
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
    </table>

    <script>
        $(document).ready(function() {
            $('#miTabla').DataTable({
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

</body>
</html>

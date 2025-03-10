@extends('adminlte::page')

@section('title', config('adminlte.title') . ' | Usuarios')

@section('content')
<section class="content">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Usuarios</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="users" class="table table-striped display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>EMAIL</th>
                                        <th>OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($users) <= 0)
                                    <tr>
                                        <td colspan="4">No hay resultados</td>
                                    </tr>
                                    @else
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Opciones">
                                                <button type="button" class="btn btn-info mr-2" data-toggle="modal" title="Ver Detalles" data-target="#view{{$user->id}}">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <!-- Agrega más botones aquí si es necesario -->
                                            </div>
                                        </td>
                                    </tr>
                                    @include('users.show', ['user' => $user])
                                    @endforeach
                                    @endif
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
        $('#users').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print'],
            processing: false,
            serverSide: false,
        });
    });
</script>
@endsection

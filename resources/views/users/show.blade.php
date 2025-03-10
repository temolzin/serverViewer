<div class="modal fade" id="view{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel{{ $user->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-info">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Información del Usuario</h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input type="text" disabled class="form-control" value="{{ $user->id }}" />
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" disabled class="form-control" value="{{ $user->name }}" />
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" disabled class="form-control" value="{{ $user->email }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="mt-4">
                    <label class="form-label">Buscar participante</label>
                    <input wire:model="search" type="number" class="form-control" placeholder="Ingresar DNI">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                @if ($participantes->count() != 0)
                    <ol class="list-group">
                    @foreach ($participantes as $participante)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                {{ $participante->dni }}
                                <h6>{{ $participante->fullname }}</h6>
                                <p>{{ $participante->email }}</p>
                                @if(!is_null($participante->asistencia))
                                    Asistencia registrada a las {{ $participante->asistencia }}
                                @endif
                            </div>
                            @if (is_null($participante->asistencia))
                                <span class="badge bg-success rounded-pill" wire:click="marcarAsistencia({{$participante->id}})">marcar asistencia</span>
                            @endif
                        </li>
                    @endforeach
                    </ol>
                @else
                    <div class="text-center">
                        <img src="assets/images/empty.png" width="50%" alt="empty">
                        <p>No se econtraron resultados</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

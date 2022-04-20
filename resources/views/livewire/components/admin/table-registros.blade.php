<div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-start">
            <button type="button" class="btn btn-danger" wire:click='showQuestionTruncateRegistros'>
                Limpar registros
            </button>
            <button type="button" class="btn btn-primary" style="margin-left: 10px;" wire:click="$emit('registros-reload')">
                <i class="fa-solid fa-arrows-rotate"></i>
            </button>
        </div>
    </div>
    {{-- Success is as dangerous as failure. --}}
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($registros as $value)
                    <tr>
                        <td>{{$value->nome}}</td>
                        <td>{{$value->telefone}}</td>
                        <td>{{date('d/m/Y', strtotime($value->created_at))}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center" style="font-weight: bolder">N/A</td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-center">
                         {{\App\Models\Registro::count()}} / {{\App\Models\Configuracao::find(1)->limite_registros}}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
            <div style="overflow-x: auto">
                {{$registros->links()}}
            </div>
        </div>
    </div>

    <script>
        $(function(){
            Livewire.on('components.admin.table-registros_showQuestionDelete', (titulo,infomation) => {
                let cleanTableRegistros = () => {
                    Livewire.emit('truncateRegistros');
                }
                showQuestion(titulo, infomation, cleanTableRegistros)
            });
        });
    </script>
</div>

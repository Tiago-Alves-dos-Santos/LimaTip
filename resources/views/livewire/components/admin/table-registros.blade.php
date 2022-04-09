<div>
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
        </table>
    </div>
</div>

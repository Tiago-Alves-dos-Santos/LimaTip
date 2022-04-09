<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <form method="POST" enctype="multipart/form-data" class="needs-validation">
        @csrf
        <div class="row">
            <div class="col-md-4 align-self-end">
                <label for="">Limite de registros</label>
                <input type="number" step="1" class="form-control @error('disponibilidade') is-invalid @enderror" min="0" wire:model.defer="limite_registros">
            </div>
            <div class="col-md-4 align-self-end">
                <label for="">Valor do pix</label>
                <input type="text" class="form-control" wire:model.defer="valor_pix">
            </div>
            <div class="col-md-4 align-self-end">
                <label for="">Chave pix</label>
                <input type="text" class="form-control" wire:model.defer="chave_pix">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="fileResult" class="form-label">Resultado</label>
                <input class="form-control" type="file" id="fileResult" wire:model.defer="document">
            </div>
            <div class="col-md-6">
                <label for="fileTerm" class="form-label">Termos de Uso</label>
                <input class="form-control" type="file" id="fileTerm" wire:model.defer="document_term">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 d-flex justify-content-start">
                <button class="btn btn-primary">
                    Salvar
                    <div class="spinner-border text-warning spinner-border-sm ml-1" role="status" wire:loading>
                        <span class="visually-hidden ml-1">Loading...</span>
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>

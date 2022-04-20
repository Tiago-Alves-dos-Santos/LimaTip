<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <form wire:submit.prevent='save' method="POST" enctype="multipart/form-data" class="needs-validation">
        @csrf
        <div class="row">
            <div class="col-md-3 align-self-end">
                <label for="">Limite de registros</label>
                <input type="number" step="1" class="form-control @error('limite_registros') is-invalid @enderror" min="0" wire:model.defer="limite_registros">
            </div>
            <div class="col-md-3 align-self-end">
                <label for="">Mostrar por pagina</label>
                <input type="number" step="1" class="form-control @error('mostrar_por_pagina') is-invalid @enderror" min="0" wire:model.defer="mostrar_por_pagina">
            </div>
            <div class="col-md-3 align-self-end">
                <label for="">Valor do pix</label>
                <input type="text" class="form-control maskMoney @error('valor_pix') is-invalid @enderror" wire:model.defer="valor_pix">
            </div>
            <div class="col-md-3 align-self-end">
                <label for="">Chave pix</label>
                <input type="text" class="form-control @error('chave_pix') is-invalid @enderror" wire:model.defer="chave_pix">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="fileResult" class="form-label">Resultado</label>
                @if (!empty($document_string))
                    <a href="{{asset("storage/document/config/$document_string")}}" download>
                        <i class="fa-solid fa-download"></i>
                    </a>
                @endif
                <input class="form-control @error('document') is-invalid @enderror" type="file" id="fileResult" wire:model.defer="document" accept=".txt, .doc, .docx, .pdf, .xls, .xlt, .xlsx">
                <div class="invalid-feedback">
                    @error('document')
                        {{$message}}
                    @enderror
                </div>

            </div>
            <div class="col-md-6">
                <label for="fileTerm" class="form-label">Termos de Uso</label>
                @if (!empty($document_term_string))
                    <a href="{{asset("storage/document/config/$document_term_string")}}" download>
                        <i class="fa-solid fa-download"></i>
                    </a>
                @endif
                <input class="form-control @error('document_term') is-invalid @enderror" type="file" id="fileTerm" wire:model.defer="document_term" accept=".txt, .doc, .docx, .pdf">
                <div class="invalid-feedback">
                    @error('document_term')
                        {{$message}}
                    @enderror
                </div>
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

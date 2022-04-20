<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit.prevent='save' class="needs-validation" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="">
                    Até dia
                    @if ($disponivel_status == 'sim')
                        <span class="text-success">(Disponível)</span>
                    @else
                        <span class="text-danger">(Indisponível) <br/>
                            Motivo: Prazo de data atingido e(ou) limite de registros antigido!
                        </span>
                    @endif
                </label>
                <input type="datetime-local" class="form-control @error('disponibilidade') is-invalid @enderror" wire:model.defer="disponibilidade"
                >
            </div>
            <div class="col-md-6">
                <label for="">Já saiu a boa de hoje?</label>
                <div class="form-check">
                    <input class="form-check-input @error('disponivel') is-invalid @enderror" type="radio" name="dispo"
                        id="radioYes" wire:model.defer="disponivel" value="sim">
                    <label class="form-check-label" for="radioYes">
                        SIM
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input @error('disponivel') is-invalid @enderror" type="radio" name="dispo"
                        id="radioNo" wire:model.defer="disponivel" value="nao">
                    <label class="form-check-label" for="radioNo">
                        NÃO
                    </label>
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

<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent='save' method="POST" class="needs-validation">
        <div class="row">
            <div class="col-md-6">
                <label for="">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.defer="name">
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model.defer="email">
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Nova Senha</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" wire:model.defer="password">
                @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="">Confirmar Senha</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" wire:model.defer="password_confirmation">
                @error('password_confirmation')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
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

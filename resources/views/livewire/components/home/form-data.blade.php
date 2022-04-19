<div>
    {{-- Be like water. --}}
    <form wire:submit.prevent='save' method="POST" class="needs-validation" style="background-color: white; padding: 20px 30px">
        <div class="row">
            <div class="col-md-12">
                <label for="">Nome completo do pix enviado:</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" wire:model.defer="nome">
                @error('nome')
                <div class="invalid-feedback">
                        {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="">Telefone:</label>
                <input type="text" class="form-control maskPhone @error('telefone') is-invalid @enderror" wire:model.defer="telefone">
                @error('telefone')
                <div class="invalid-feedback">
                        {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input @error('term_accepeted') is-invalid @enderror" type="checkbox" value="1" id="flexCheckDefault" wire:model.defer="term_accepeted" required>
                    <label class="form-check-label" for="flexCheckDefault">
                      Li e aceito os <a href="{{asset("storage/document/config/$term_name")}}" target="_blank">Termos de uso!</a>
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" required>
                    <label class="form-check-label" for="flexCheckDefault1">
                      Tenho mais de +21 anos
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <button class="btn btn-success">
                    Pedir dica!
                    <div class="spinner-border text-warning spinner-border-sm ml-1" role="status" wire:loading>
                        <span class="visually-hidden ml-1">Loading...</span>
                    </div>
                </button>
            </div>
        </div>
    </form>


</div>

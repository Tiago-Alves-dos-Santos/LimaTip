@extends('layout.admin')
@section('content')
<div class="container-fluid page-content" id="admin-home" data-page="profile">
{{-- configuração de horarios --}}
<div class="row mt-3">
    <div class="col-md-12">
        @component('components.sectionTitle', [
            'title' => 'Meus Dados',
            ])
        @endcomponent
    </div>
    <div class="col-md-12 mt-3">
        @component('components.card', [
            'title' => 'Login',
            ])
            <div class="container-form">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Nome</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Nova Senha</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Confirmar Senha</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 d-flex justify-content-start">
                            <button class="btn btn-primary">
                                Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @endcomponent
    </div>
</div>
{{-- fim configuração de horarios --}}



</div>
@endsection

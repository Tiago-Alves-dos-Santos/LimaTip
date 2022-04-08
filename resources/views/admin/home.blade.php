@extends('layout.admin')
@section('content')
    <div class="container-fluid page-content" id="admin-home" data-page="inicio">
        {{-- tabela de pix feito --}}
        <div class="row mt-3">
            <div class="col-md-12">
                @component('components.sectionTitle', [
                    'title' => 'Registros',
                    ])
                @endcomponent
            </div>
            <div class="col-md-12 mt-3">
                @component('components.card', [
                    'title' => 'Pix enviados',
                    ])
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endcomponent
            </div>
        </div>
        {{-- fim tabela de pix --}}
        {{-- configuração de horarios --}}
        <div class="row mt-3">
            <div class="col-md-12">
                @component('components.sectionTitle', [
                    'title' => 'Disponibilidade',
                    ])
                @endcomponent
            </div>
            <div class="col-md-12 mt-3">
                @component('components.card', [
                    'title' => 'Horário',
                    ])
                    <div class="container-form">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Até dia</label>
                                    <input type="datetime-local" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Já saiu a boa de hoje?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioDisabled">
                                        <label class="form-check-label" for="flexRadioDisabled">
                                            SIM
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioCheckedDisabled" checked>
                                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                                            NÃO
                                        </label>
                                    </div>
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

        {{-- configuração de de registros e termos --}}
        <div class="row mt-3">
            <div class="col-md-12">
                @component('components.sectionTitle', [
                    'title' => 'Geral',
                    ])
                @endcomponent
            </div>
            <div class="col-md-12 mt-3 mb-3">
                @component('components.card', [
                    'title' => 'Configuração',
                    ])
                    <div class="container-form">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Limite de registros</label>
                                    <input type="number" step="1" class="form-control" min="0">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Valor do pix</label>
                                    <input type="text" class="form-control">
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
        {{-- fim onfiguração de de registros e termos --}}
    </div>
@endsection

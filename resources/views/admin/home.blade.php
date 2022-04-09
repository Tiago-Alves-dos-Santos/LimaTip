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
                    <livewire:components.admin.table-registros>
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
                        <livewire:components.admin.form-disponibilidade>
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
                        <livewire:components.admin.form-config>
                    </div>
                @endcomponent
            </div>
        </div>
        {{-- fim onfiguração de de registros e termos --}}
    </div>
@endsection

@extends('layout.admin')
@section('content')
    <div class="container-fluid page-content" id="admin-home" data-page="inicio">
        {{-- tabela de pix feito --}}
        <div class="row mt-3">
            <div class="col-md-12">
                <x-section-title title="Registros"/>
            </div>
            <div class="col-md-12 mt-3">
                <x-card title='Pix enviados'>
                    <livewire:components.admin.table-registros>
                </x-card>
            </div>
        </div>
        {{-- fim tabela de pix --}}
        {{-- configuração de horarios --}}
        <div class="row mt-3">
            <div class="col-md-12">
                <x-section-title title="Disponibilidade"/>
            </div>
            <div class="col-md-12 mt-3">
                <x-card title='Horário'>
                    <div class="container-form">
                        <livewire:components.admin.form-disponibilidade>
                    </div>
                </x-card>
            </div>
        </div>
        {{-- fim configuração de horarios --}}

        {{-- configuração de de registros e termos --}}
        <div class="row mt-3">
            <div class="col-md-12">
                <x-section-title title="Geral"/>
            </div>
            <div class="col-md-12 mt-3 mb-3">
                <x-card title='Configuração'>
                    <div class="container-form">
                        <livewire:components.admin.form-config>
                    </div>
                </x-card>
            </div>
        </div>
        {{-- fim onfiguração de de registros e termos --}}
    </div>
@endsection

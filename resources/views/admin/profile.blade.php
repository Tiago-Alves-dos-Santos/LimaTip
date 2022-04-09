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
                <livewire:components.admin.form-my-data>
            </div>
        @endcomponent
    </div>
</div>
{{-- fim configuração de horarios --}}



</div>
@endsection

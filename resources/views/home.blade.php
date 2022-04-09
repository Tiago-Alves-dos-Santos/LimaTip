@extends('layout.default')
@section('content')
<div class="container-fluid" id="home">
    <div class="row home-advertising">
        <div class="col-md-12">
            <div class="home-conatiner-title">
                <h1>
                    <span>
                        Limas<span>Tips</span>
                    </span>

                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 info-play">
            <div>
                <h1>Já saiu a boa de hj?</h1>
            </div>
            <div class="info-opcoes">
                <div class="@if($disponibilidade->disponivel == 'sim') active @endif">
                    <h2>
                        SIM
                    </h2>
                </div>

                <div class="@if($disponibilidade->disponivel == 'nao') active @endif">
                    <h2>NÃO</h2>
                </div>
            </div>
        </div>
    </div>
    @if ($disponibilidade->disponivel == 'sim')
    <div class="row mb-3">
        <div class="col-md-12 winner">
            <img src="{{asset('img/winner.gif')}}" alt="">
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12 view-doc">

            {{-- <iframe src ="{{ asset('storage/documents/exel.pdf') }}" width="1000px" height="600px"></iframe> --}}
            <iframe src="https://docs.google.com/spreadsheets/d/1J8-eRtOKkQ7o41zeGu10Ba1yowgDIV_nHd5zMYTcKWU/edit#gid=2118056571&embedded=true" frameborder="0"></iframe>

            {{-- <iframe src="https://docs.google.com/gview?url={{ asset('storage/documents/Terms/'.$documentTerm->document) }}&embedded=true" frameborder="0"></iframe> --}}
        </div>
    </div>

    <div class="row" style="background-color: #147350;">
        <div class="col-md-12 title-form">
            <h1 class="text-center mt-3">PEÇA JÁ SUA DICA!<br> ATÉ ÀS
                <span style="color: #F2E41B">
                    {{date('H:i', strtotime($disponibilidade->disponibilidade))}}
                </span>
                DO DIA
                <span style="color: #F2E41B">
                    {{date('d/m/Y', strtotime($disponibilidade->disponibilidade))}}
                </span>!
            </h1>
        </div>
    </div>
    <div class="row" style="background-color: #147350;">
        <div class="col-md-12" style="padding: 20px; display: flex; justify-content: center; align-content:center; align-items:center">
            <div style="width: 500px">
                <livewire:components.home.form-data :term_name='$configuracao->document_term'>
            </div>
        </div>
    </div>


</div>
@endsection

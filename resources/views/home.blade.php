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
                <h1>Já saiu a boa de hoje?</h1>
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
            <img src="{{asset('img/winner_two.gif')}}" alt="">
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12 view-doc">
            @if($disponibilidade->disponivel == 'sim')
            <iframe src="https://docs.google.com/gview?url={{ asset('storage/documents/Terms/'.$configuracao->document) }}&embedded=true" frameborder="0"></iframe>
            @else
            <div class="text-not-document" style="color: white">
                <h1 class="icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                </h1>
                <h1 class="text-data">
                    VOLTE NOVAMENTE MAIS TARDE, PARA RECEBER AS DICAS DE HOJE!
                </h1>
            </div>
            @endif
        </div>
    </div>
    @if ($disponibilidade->disponivel_status == 'sim')
    <div class="row info-pix" style="background-color: #713c2d;">
        <div class="col-md-12">
            <div class="titles" style="border:1px solid white">
                <h1 class="animate-title">
                    CHAVE PIX E VALOR
                </h1>
                <h2 style="width: 100%; text-align: center">
                    TRANSFIRA
                    <span style="color: #ff670f">
                        R$ {{number_format($configuracao->valor_pix, 2 ,',','.');}}
                    </span>
                    PARA CHAVE
                    <span style="color: #ff670f">
                        {{$configuracao->chave_pix}}</span>.
                </h2>
                <h3>
                    MEU NOME COMPLETO:
                    <span style="color: #ff670f">
                    {{\App\Models\User::find(1)->name}}</span>.
                </h3>
            </div>
        </div>
    </div>
    @endif
    <div class="row" style="background-color: #147350;">
        <div class="col-md-12 title-form">
            @if ($disponibilidade->disponivel_status == 'sim')
            <h1 class="text-center mt-3">FAÇA SUA APOSTA!<br> ATÉ ÀS
                <span style="color: #F2E41B">
                    {{date('H:i', strtotime($disponibilidade->disponibilidade))}}
                </span>
                DO DIA
                <span style="color: #F2E41B">
                    {{date('d/m/Y', strtotime($disponibilidade->disponibilidade))}}
                </span>!
            </h1>
            @else
            <h1 class="text-center mt-3">HORÁRIO FINALIZADO!<br> ÀS
                <span style="color: #820000">
                    {{date('H:i', strtotime($disponibilidade->disponibilidade))}}
                </span>
                DO DIA
                <span style="color: #820000">
                    {{date('d/m/Y', strtotime($disponibilidade->disponibilidade))}}
                </span>
                <br/>
                VOLTE NOVAMENTE AMANHÃ!
            </h1>
            @endif
        </div>
    </div>
    @if ($disponibilidade->disponivel_status == 'sim')
    <div class="row" style="background-color: #147350;">
        <div class="col-md-12" style="padding: 20px; display: flex; justify-content: center; align-content:center; align-items:center">
            <div style="width: 500px">
                <livewire:components.home.form-data :term_name='$configuracao->document_term'>
            </div>
        </div>
    </div>
    @endif


</div>
@endsection

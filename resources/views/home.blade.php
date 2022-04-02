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
                <div class="active">
                    <h2>
                        SIM
                    </h2>
                </div>

                <div>
                    <h2>NÃO</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 winner">
            <img src="{{asset('img/winner.gif')}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 view-doc">

            {{-- <iframe src ="{{ asset('storage/documents/exel.pdf') }}" width="1000px" height="600px"></iframe> --}}
            <iframe src="https://docs.google.com/spreadsheets/d/1J8-eRtOKkQ7o41zeGu10Ba1yowgDIV_nHd5zMYTcKWU/edit#gid=2118056571&embedded=true" frameborder="0"></iframe>

            {{-- <iframe src="https://docs.google.com/gview?url={{ asset('storage/documents/Terms/'.$documentTerm->document) }}&embedded=true" frameborder="0"></iframe> --}}
        </div>
    </div>

    <div class="row" style="background-color: #147350;">
        <div class="col-md-12 title-form">
            <h1 class="text-center mt-3">PEÇA JÁ SUA DICA!<br> ATÉ ÀS <span style="color: #F2E41B">16:25</span> DO DIA <span style="color: #F2E41B">22/03/2022</span>!</h1>
        </div>
    </div>
    <div class="row" style="background-color: #147350;">
        <div class="col-md-12" style="padding: 20px; display: flex; justify-content: center; align-content:center; align-items:center">
            <div style="width: 500px">
                <form action="" method="POST" style="background-color: white; padding: 20px 30px">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Nome:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Telefone:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Li e aceito os <a href="{{asset('storage/documents/exel.pdf')}}" target="_blank">Termos de uso!</a>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button class="btn btn-success">
                                Pedir dica!
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

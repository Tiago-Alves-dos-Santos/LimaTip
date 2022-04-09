<div>
    {{-- Be like water. --}}
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
                      Li e aceito os <a href="{{asset("storage/document/config/$term_name")}}" target="_blank">Termos de uso!</a>
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

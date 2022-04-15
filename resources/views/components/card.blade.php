<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      {{$title}}
      @if ($component == 'table-home')
        <button type="button" class="btn btn-danger">
            Limpar registros
        </button>
      @endif
    </div>
    <div class="card-body">
      {{$slot}}
    </div>
</div>

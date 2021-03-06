<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.header')
<body>
{{-- navbar --}}
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LimasTips</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-sm-flex justify-content-sm-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('view.admin.home')}}" id="page_inicio">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('view.admin.profile')}}" id="page_profile">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="{{route('index')}}">Site</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('controller.logout')}}">Sair</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
        </ul>
      </div>
    </div>
</nav>
{{-- fim navbar --}}
    @yield('content')
@include('includes.footer')

<script>
function checkPage(){
    let page = $(".page-content").attr('data-page');
    $('.nav-link').removeClass('active');
    $("#page_"+page).addClass('active');
}
$(function(){
    checkPage();
});
</script>
</body>
</html>

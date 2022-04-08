<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>LimaTips</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="{{mix('css/login.css')}}">
    @livewireStyles()
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>SEJA BEM VINDO!</h3>

        <label for="username">Email:</label>
        <input type="text" placeholder="" id="username" >

        <label for="password">Senha:</label>
        <input type="password" placeholder="" id="password">

        <button>Entrar</button>
        {{-- <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div> --}}
        @if (session()->has('msg_login'))
        <div class="login-erro-msg">
            <h4>Erro!</h4>
            <p>{{session('msg_login')}}</p>
        </div>
        @php
            session()->forget('msg_login');
        @endphp
        @endif
    </form>

    @livewireScripts()
</body>
</html>

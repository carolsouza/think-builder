<!-- <nav class="navbar navbar-expand-lg navbar-dark navbar-light navbar-transparente" style="background-color: #3A99D8 !important"> 
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/thidsnk-builder-logo-m.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/usuarios">Monte seu computador</a>
                </li>

                <li class="nav-item">
                    <a href="quem-somos.html" class="nav-link">Quem Somos</a>
                </li>

                <li class="nav-item">
                    <a href="contato.html" class="nav-link">Contato</a>
                </li>

                <li class="nav-item divisor"></li>

                <li class="nav-item">
                    <a href="login.html" class="nav-link">Login | Criar conta</a>
                </li>

                <li class="nav-item">
                    <button class="btn btn-dark" type="carrinho" style="border-radius: 0px;">
                        <i class="fas fa-shopping-cart"></i> Carrinho
                    </button>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
             Authentication Links 

            </ul>
        </div>
    </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light navbar-transparente">
    <a class="navbar-brand" href="/">
        <img src="img/think-builder-logo-m.png" width="145" />
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Monte seu computador <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="#">Contato</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item active">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Entre') }}</a>
                </li>

                @if (Route::has('register'))
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown active">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            <!-- <li class="nav-item">
                <a href="login.html" class="nav-link text-white">Entre | Cadastre-se</a>
            </li> -->

            <li class="nav-item text-white">
                <button class="btn btn-outline-secondary my-2 my-sm-0 text-white" type="button"><i class="fas fa-shopping-cart"></i> Carrinho</button>
            </li>
        </ul>
    </div>
</nav>
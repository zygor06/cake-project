<div class="container">
    <div class="navbar-header visible-xs">
        <button class="navbar-toggle toggle-cake show-menu"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand navbar-cake" href="#"><img alt="Logo-Cupcakes" src="{{asset('images/logo-100.png')}}"></a>
    </div>
    <nav>
        <ul class="header-nav hidden-xs">
            <li>
                <a href="{{url('/')}}">Home</a>
            </li>
            <li>
                <a href="{{url('loja')}}">Loja</a>
            </li>
            <li class="pad-top-0i">
                <img alt="Logo-Cupcakes" src="{{asset('images/logo-150.png')}}">
            </li>
            <li>
                <a class="show-menu" href="javascript:void(0);">Serviços</a>
            </li>
            <li>
                <a href="{{url('blog')}}">Blog</a>
            </li>
        </ul>
    </nav>
    <!-- Start Mega Menu Cake -->
    <div class="mega-menu hide">
        <div class="tittle-mega">
            <h4>
                - Nossos Serviços -
            </h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <ul class="list-mega">
                        <li class="bottom-red-border">
                            Blog
                        </li>
                        <li>
                            <a href="{{url('blog')}}">Blog</a>
                        </li>
                        @auth
                            <li>
                                <a href="{{url('produtos/add')}}">Adicionar produto</a>
                            </li>
                            <li>
                                <a href="{{url('post/add')}}">Adicionar post</a>
                            </li>
                            <li>
                                <a href="{{url('categoria/add')}}">Adicionar categoria</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Sair
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endauth
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="list-mega">
                        <li class="bottom-red-border">
                            Galeria
                        </li>
                        <li>
                            <a href="{{url('galeria')}}">Galeria com texto</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="list-mega">
                        <li class="bottom-red-border">
                            Outras Páginas
                        </li>
                        <li>
                            <a href="{{url('tabela')}}">Tabelas</a>
                        </li>
                        <li>
                            <a href="{{url('detalhes')}}">Detalhes</a>
                        </li>
                        <li>
                            <a href="{{url('politica')}}">Politicas de Privacidade</a>
                        </li>
                        <li>
                            <a href="{{url('termos')}}">Termos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="div text-center">
                <button class="btn btn-pink-cake mar-top-20 close-menu">Fechar lista</button>
            </div>
        </div>
    </div>
    <!-- End Mega Menu Cake -->
</div>
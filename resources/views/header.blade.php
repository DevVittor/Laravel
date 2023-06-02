<header>
    <div class="container-menu">
        <div class="logo">
            <a href="/">
                <h1>ABRIME</h1>
            </a>
        </div>
        <div class="menu">
            <div class="list-menu">
                <nav>
                    <ul>
                        <li><a href="/">Início</a></li>
                        <li><a href="#">Lojas</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/events/create">Criar Evento</a></li>
                        @auth
                        <li><a href="/dashboard">Painel</a></li> 
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <a href="/logout" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                            </form>
                        </li>  
                        @endauth
                        
                        @guest
                        <li><a href="/login">Login</a></li>
                        @endguest
                       
                    </ul>
                </nav>
            </div>
            @guest
            <div class="account">
                <a href="/register">Criar Conta</a>
            </div>
            @endguest
        </div>
    </div>
</header>
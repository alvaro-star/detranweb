<header class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <a class="navbar-brand" href="<?= URL ?>">WEB 2</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>" data-tooltip="tooltip" title="Página Inicial">Home</a>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/carros/tbcarro" data-tooltip="tooltip" title="Carro">Carro</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/infracoes/tbinfracao" data-tooltip="tooltip" title="Infracao">Infracao</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/multas/tbmulta" data-tooltip="tooltip" title="Multa">Multa</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/paginas/tabelas" data-tooltip="tooltip" title="Sobre nós">Tabelas</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a class="btn btn-info" href="<?= URL ?>/Usuarios/cadastrar" data-tooltip="tooltip" title="Não tem uma conta? Cadastre-se">Cadastre-se</a>
                    <a class="btn btn-info" href="<?= URL ?>/Usuarios/login" data-tooltip="tooltip" title="Tem uma conta? Faça login">Entrar</a>
                </span>
            </div>
        </nav>
    </div>
</header>
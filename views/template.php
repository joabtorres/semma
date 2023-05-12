<script src="<?php echo BASE_URL ?>assets/js/script.js"></script>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/gif" href="<?php echo BASE_URL ?>assets/imagens/icon.png" sizes="32x32" />
    <meta property="ogg:title" content="<?php echo NAME_PROJECT ?>">
    <meta property="ogg:description" content="<?php echo NAME_PROJECT ?>">
    <title>
        <?php echo NAME_PROJECT ?>
    </title>
    <link href="<?php echo BASE_URL ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>assets/css/lightbox.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>assets/css/estilo.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>assets/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>assets/css/solid.min.css" rel="stylesheet">
    <script src="<?php echo BASE_URL ?>assets/js/bootstrap.bundle.min.js"></script>
    <!-- Our Date datepicker 2 -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/select2.min.css">
    <!-- select2 JS -->
    <script defer src="<?php echo BASE_URL ?>assets/js/select2.min.js"></script>
    <?php echo '<script> var base_url = "' . BASE_URL . '"</script>' ?>
</head>

<body>
    <!--div comunicado-->
    <div class="navbar fixed-top bg-pmc-1 pt-0 pb-0">
        <div class="container aviso-topo">
            <div class="navbar-text mt-2 mb-2 "> Atendimento: segunda a sexta, das 8h às 14h</div>
            <ul class="list-inline text-end mb-2 mt-2">
                <li class="list-inline-item"><a href="https://castanhal.cr2transparencia.com.br/portal-da-transparencia/fale-conosco/" target="_blank">FALE CONOSCO</a>
                <li class="list-inline-item"><a href="http://www2.castanhal.pa.gov.br/ouvidoria" target="_blank">OUVIDORIA</a>
                <li class="list-inline-item"><a href="https://castanhal.cr2transparencia.com.br/" target="_blank">TRANSPARÊNCIA</a>
                <li class="list-inline-item"><a href="https://sites.google.com/view/fala-br-sic-castanhal/sic-castanhal?authuser=2" target="_blank">SIC-CASTANHAL</a>
                <li class="list-inline-item"><a href="https://www.facebook.com/prefeituradecastanhal" target="_blank"><i class="fa-brands fa-facebook-square fa-2xl"></i></a>
                <li class="list-inline-item"><a href="https://www.instagram.com/prefeituradecastanhal" target="_blank"><i class="f fa-brands fa-instagram-square fa-2xl"></i></a>
                <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCWHZ0VPQs9neylkl0bvRhiw" target="_blank"><i class="fa-brands fa-youtube-square fa-2xl"></i></a>
            </ul>
        </div>
    </div>
    </div>
    <!--div comunicado-->
    <!--banner-->
    <div id="banner-topo"></div>
    <!--banner-->
    <!--MENU DE NAVEGAÇÃO-->
    <nav class="navbar navbar-expand-lg bg-cinza">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL ?>"><i class="fa fa-home"></i> Página Inícial</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-institution"></i> Secretaria
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>secretaria">Secretaria</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>secretaria/estrutura_organizacional"> Estrutura
                                    Organizacional</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-scale-unbalanced-flip"></i> Legislação
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>legislacao/decretos">Decretos</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>legislacao/instrucoes_normativas">Instruções
                                    normativas</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>legislacao/leis_complementares">Leis Complementares</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>legislacao/leis">Leis</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>legislacao/portarias">Portarias</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>legislacao/resolucoes">Resoluções</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-people-group"></i> Licenciamento
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cla">Coordenadoria de Licenciamento
                                    Ambiental</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cla/formularios">Formulários</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cla/termos_de_referencia">Termos de
                                    Referência</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cla/licencas_emitidas">Licenças
                                    Emitidas</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cla/enquadramento">Simulador de
                                    Taxa de Licença</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-people-group"></i> Fiscalização
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cofisc">Coordenadoria de
                                    Fiscalização Ambiental</a></li>
                            <li>
                                <a class="dropdown-item" href="<?php echo BASE_URL ?>cofisc/formularios">Formulários</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo BASE_URL ?>cofisc/denuncia">Denúncia Ambiental</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-people-group"></i> Recursos Naturais
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cprn">Coordenadoria de Proteção de Recursos Naturais e Educação Ambiental</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cprn/formularios">Formulários</a> </li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cprn/educacao">Educação
                                    Ambiental</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL ?>cprn/car">Cadastro Ambiental Rural
                                    (CAR)</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--FIM MENU DE NAVEGAÇÃO-->
    <?php $this->loadViewInTemplate($viewName, $viewData) ?>

    <!--Iniciando o rodape-->
    <footer class="bg-cinza mt-5">
        <div class="container">
            <div class="row pt-3 pb-3">
                <div class="col-md-12 text-center">
                    <div class="text-strong"> Secretaria Municipal de Meio Ambiente – SEMMA CASTANHAL</div>
                    <div> <i class="fa fa-map-location text-pmc-2"></i> Rua Major Wilson, nº 84 - Nova Olinda -
                        CEP: 68742-190 – Castanhal – Pará</div>
                    <div><i class="fa fa-phone text-pmc-2"></i> (91) 3711-5959 | <i class="fa fa-mail-bulk text-pmc-2"></i> protocolo.semma@castanhal.pa.gov.br</div>
                    <div></div>
                </div>
            </div>
        </div>
    </footer>
    <!--finalizando rodape-->

    <script src="<?php echo BASE_URL ?>assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/js/script.js"></script>
</body>

</html>
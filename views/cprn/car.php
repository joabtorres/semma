<!--container-->
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mb-0"><?php echo!empty($name_page) ? $name_page : '' ?></h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>">Página Inicial</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>cprn">Coordenadoria de Proteção dos Recursos Naturais e Educação Ambienta</a></li>
                    <li class="breadcrumb-item active"><?php echo!empty($name_page) ? $name_page : '' ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <!--row-->
    <div class="row">
        <div class="col-12 mt-3">
            <p>É um sistema de identificação que reúne informações ambientais dos imóveis rurais. Sendo este um documento obrigatório e válido em todos os estados do brasil e pode ser feito por qualquer pessoa física ou jurídica, mesmo que ainda não tenha o título definitivo do imóvel.</p>

            <h3>Vantagens:</h3>
            <img src="<?php echo BASE_URL?>assets/imagens/agricultores-01.png"  class="img-fluid float-end"/>
            <ul class="list-unstyled">
                <li> Facilita o licenciamento do imóvel</li>
                <li>  Viabiliza a concessão de Crédito Rural</li>
                <li>  Melhora a sua produtividade</li>
                <li>  Dá início à regularização fundiária</li>
                <li>   Possibilita acesso a novos mercados</li>
                <li>  Comprova que você está em dia com a Legislação Ambiental</li>
            </ul>
        </div>
    </div>
    <!--row-->
</div>
<!--container-->
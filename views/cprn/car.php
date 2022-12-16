<!--container-->
<div class="container mt-3">
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

            <h3 class="text-pmc-1">Vantagens:</h3>
            <img src="<?php echo BASE_URL ?>assets/imagens/agricultores-01.jpg"  class="img-responsive float-md-end"/>
            <ul class="list-unstyled">
                <li><i class="fa-solid fa-check text-pmc-2"></i> Facilita o licenciamento do imóvel;</li>
                <li>  <i class="fa-solid fa-check text-pmc-2"></i> Viabiliza a concessão de Crédito Rural;</li>
                <li> <i class="fa-solid fa-check text-pmc-2"></i> Melhora a sua produtividade;</li>
                <li> <i class="fa-solid fa-check text-pmc-2"></i> Dá início à regularização fundiária;</li>
                <li> <i class="fa-solid fa-check text-pmc-2"></i>  Possibilita acesso a novos mercados;</li>
                <li> <i class="fa-solid fa-check text-pmc-2"></i> Comprova que você está em dia com a Legislação Ambiental.</li>
            </ul>
            <h3>Documentos necessários:</h3>
            <img src="<?php echo BASE_URL ?>assets/imagens/agricultor-02.jpg"  class="img-responsive float-md-end center"/>
            <ul class="list-unstyled">
                <li><i class="fa-solid fa-check text-pmc-2"></i> Cópia do RG e CPF;</li>
                <li><i class="fa-solid fa-check text-pmc-2"></i> Cópia da documentação do imóvel (recibo de compra e venda, autodeclaração de posse ou título definitivo);</li>
                <li><i class="fa-solid fa-check text-pmc-2"></i> Cópia do comprovante de residência;</li>
                <li><i class="fa-solid fa-check text-pmc-2"></i> Ter tamanho de até 220 hectares (4 módulos fiscais);</li>
                <li><i class="fa-solid fa-check text-pmc-2"></i> Certidão de Casamento, RG e CPF do cônjuge.</li>
            </ul>
        </div>
    </div>
    <!--row-->
</div>
<!--container-->
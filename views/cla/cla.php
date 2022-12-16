<!--container-->
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3 class="mb-0">Coordenadoria de Licenciamento Ambiental</h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>">Página Inicial</a></li>
                    <li class="breadcrumb-item active">Coordenadoria de Licenciamento Ambiental</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--row-->
    <div class="row">
        <div class="col-12 mt-3"></div>
        <div class="col-md-12">
            <p class="mb-0"><b>À Coordenadoria de Licenciamento Ambiental</b>, compete:</p>
            <ul class="list-unstyled">
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i> Planejar, coordenar, executar e orientar o licenciamento ambiental e os demais atos autorizativos de empreendimentos ou atividades industriais, minerárias, de obras civis, de infraestrutura urbanísticas, de saneamento, de comércio, serviços, aproveitamento e disposição de resíduos, de atividades agrossilvipastoris, fauna, aquicultura, pesca e demais atividades consideradas efetiva ou potencialmente poluidoras e/ou degradadoras do meio ambiente; </li>       
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i> 	Coordenar as atividades de apoio ao ordenamento ambiental visando à regularização das propriedades rurais e prevenção e combate ao desmatamento; </li>       
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i> 	Apoiar a pesquisa e a implementação de outros instrumentos de gestão ambiental, visando o cumprimento da legislação e o atendimento das metas de controle e qualidade ambiental; </li>       
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i> 	Coordenar a elaboração de normas, padrões, critérios e procedimentos de licenciamento ambiental no âmbito do Município.</li>       
            </ul>
        </div>
        <div class="col-md-12">
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <a class="rounded img-responsive example-image-link " href="<?php echo BASE_URL ?>uploads/galeria/cla/<?php echo sprintf("%02d", $i) ?>.jpg" data-lightbox="example-set" data-title=""><img class="rounded mb-1 lightbox-image " src="<?php echo BASE_URL ?>uploads/galeria/cla/min/<?php echo sprintf("%02d", $i) ?>.jpg" alt="Coordenadoria de Licenciamento Ambiental"/></a>
                <?php endfor; ?>
        </div>
    </div>
    <!--row-->

</div>
<!--container-->
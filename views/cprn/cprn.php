<!--container-->
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3 class="mb-0">Coordenadoria de Proteção dos Recursos Naturais e Educação Ambiental</h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>">Página Inicial</a></li>
                    <li class="breadcrumb-item active">Coordenadoria de Proteção dos Recursos Naturais e Educação Ambiental</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--row-->
    <div class="row">
        <div class="col-12 mt-3"></div>
        <div class="col-md-12">
            <p class="mb-0"><b>À Coordenadoria de Proteção dos Recursos Naturais e Educação Ambiental</b>, compete:</p>
            <ul class="list-unstyled">
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i> 	Planejar, coordenar, supervisionar e promover a execução de planos, programas e projetos relativos à educação ambiental, à arborização municipal, à gestão integrada da destinação de resíduos sólidos, à preservação e recuperação de bacias e micro bacias hidrográficos;</li>       
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i> 	Desenvolver ações de preservação, proteção e conservação da biodiversidade, apoiando a realização de pesquisas; </li>       
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i> 	Planejar, coordenar, supervisionar e implementar, nos termos da legislação pertinente, os processos de implantação, conservação e gestão das Unidades de Conservação.</li>       
            </ul>
        </div>
        <div class="col-md-12">
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <a class="rounded img-responsive example-image-link " href="<?php echo BASE_URL ?>uploads/galeria/cprn/<?php echo sprintf("%02d", $i) ?>.jpg" data-lightbox="example-set" data-title=""><img class="rounded mb-1 lightbox-image " src="<?php echo BASE_URL ?>uploads/galeria/cprn/min/<?php echo sprintf("%02d", $i) ?>.jpg" alt="Coordenadoria de Proteção dos Recursos Naturais e Educação Ambiental"/></a>
                <?php endfor; ?>
        </div>
    </div>
    <!--row-->

</div>
<!--container-->
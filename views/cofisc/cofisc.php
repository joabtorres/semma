<!--container-->
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3 class="mb-0">Coordenadoria de Fiscalização Ambiental</h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>">Página Inicial</a></li>
                    <li class="breadcrumb-item active">Coordenadoria de Fiscalização Ambiental</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--row-->
    <div class="row">
        <div class="col-12 mt-3"></div>
        <div class="col-md-12">
            <p class="mb-0"><b>À Coordenadoria de Fiscalização Ambiental</b>, compete:</p>
            <ul class="list-unstyled">
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i>  	Planejar, coordenar, acompanhar, avaliar e supervisionar as ações de fiscalização em empreendimentos e atividades efetiva ou potencialmente poluidoras e/ou degradadoras do meio ambiental e do uso ou exploração dos recursos naturais; </li>       
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i> 	Combater os crimes contra fauna, de forma articulada com Organizações Públicas integrantes do Sistema Municipal de Meio Ambiente e Sociedade Civil Organizada, em conformidade com a legislação ambiental em vigor; </li>       
                <li class="mt-1"><i class="fa-solid fa-check text-pmc-2"></i>  	Fiscalizar o cumprimento das condicionantes, exigências e restrições estabelecidas no licenciamento ambiental, bem como das obrigações ambientais impostas através de Termos de Ajustamento de Condutas, Planos de Recuperação de Áreas Degradadas, dentre outros.</li>       
            </ul>
        </div>
        <div class="col-md-12">
            <?php for ($i = 1; $i <= 8; $i++): ?>
                <a class="rounded img-responsive example-image-link " href="<?php echo BASE_URL ?>uploads/galeria/cofisc/<?php echo sprintf("%02d", $i) ?>.jpg" data-lightbox="example-set" data-title=""><img class="rounded mb-1 lightbox-image " src="<?php echo BASE_URL ?>uploads/galeria/cofisc/min/<?php echo sprintf("%02d", $i) ?>.jpg" alt="Coordenadoria de Fiscalização Ambiental"/></a>
                <?php endfor; ?>
        </div>
        
    </div>
    <!--row-->

</div>
<!--container-->
<!--container-->
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3 class="mb-0">
                <?php echo !empty($name_page) ? $name_page : '' ?>
            </h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>">Página Inicial</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>parque/sobre">Parque Natural Municipal de Castanhal</a></li>
                    <li class="breadcrumb-item active">
                        <?php echo !empty($name_page) ? $name_page : '' ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!--row-->
    <div class="row">
        <div class="col-12 mt-3">
            <p>Para solicitar visita ao Parque Natural Municipal de Castanhal, é necessário baixar o “<a href="<?php echo BASE_URL ?>cprn/formularios" title="Formulário de Solicitação de Visitas ao Parque Natural Municipal de Castanhal">Formulário de Solicitação de Visitas ao Parque Natural Municipal de Castanhal (PNMC)</a>“, preencher as informações, descrevendo o nome da instituição, objetivo da visita, público alvo, faixa etária, quantidade de participantes, data, horário e endereço.</p>

            <p>Após o preenchimento do formulário, a solicitação deverá ser enviada por e-mail (protocolo.semma@castanhal.pa.gov.br) ou de modo presencial nesta secretaria.</p>


            <p class="text-danger p-4 border border-danger">Observação: A solicitação deverá ser realizada com 10 dias de antecedência, para que a coordenadoria responsável verifique se há disponibilidade e planeje as atividades. </p>


            <p>Confira abaixo algumas das ações realizadas: </p>

        </div>
        <div class="col-md-12">
            <?php for ($i = 1; $i <= 12; $i++) : ?>
                <a class="rounded img-responsive example-image-link" href="<?php echo BASE_URL ?>uploads/galeria/parque_visita/<?= $i ?>.jpg" data-lightbox="example-set" data-title=""><img class="rounded mb-1 lightbox-image " src="<?php echo BASE_URL ?>uploads/galeria/parque_visita/min/<?= $i ?>.jpg" alt="Solicitação de Visita" /></a>
            <?php endfor; ?>
        </div>
    </div>
    <!--row-->
</div>
<!--container-->
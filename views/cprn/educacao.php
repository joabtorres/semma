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
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>cprn">Coordenadoria de Proteção de
                            Recursos Naturais e Educação Ambiental</a></li>
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
            <figure>
                <blockquote class="blockquote">
                    <p>Entendem-se por educação ambiental os processos por meio dos quais o indivíduo e a coletividade constroem valores sociais, conhecimentos, habilidades, atitudes e competências voltadas para a conservação do meio ambiente, bem de uso comum do povo, essencial à sadia qualidade de vida e sua sustentabilidade.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                Política Nacional de Educação Ambiental -  <cite title="Source Title">Lei nº 9795/1999, Art 1º</cite>.
                </figcaption>
            </figure>
            <p>Para solicitar palestras e oficinas de educação ambiental à Secretaria Municipal de Meio Ambiente de Castanhal, é necessário baixar o “<a href="<?php echo BASE_URL?>cprn/formularios" target="_blank">Formulário de Solicitação de Palestras e Oficinas de Educação Ambiental</a>“, preencher as informações, descrevendo o nome da instituição, tema da palestra, público alvo, faixa etária, quantidade de participantes, data, horário e endereço.</p>

            <p>Após o preenchimento do formulário, a solicitação deverá ser enviada por e-mail (protocolo.semma@castanhal.pa.gov.br) ou de modo presencial nesta secretaria.</p>


            <p class="text-danger p-4 border border-danger">Observação: A solicitação deverá ser realizada com 10 dias de antecedência, para que a coordenadoria verifique se há disponibilidade e planeje as atividades solicitadas. </p>


            <p>Confira abaixo algumas das ações realizadas: </p>

        </div>
        <div class="col-md-12">
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <a class="rounded img-responsive example-image-link " href="<?php echo BASE_URL ?>uploads/galeria/educacao_ambiental/<?php echo sprintf("%02d", $i) ?>.jpg" data-lightbox="example-set" data-title=""><img class="rounded mb-1 lightbox-image " src="<?php echo BASE_URL ?>uploads/galeria/educacao_ambiental/min/<?php echo sprintf("%02d", $i) ?>.jpg" alt="Coordenadoria de Proteção de Recursos Naturais e Educação Ambiental"/></a>
                <?php endfor; ?>
        </div>
    </div>
    <!--row-->
</div>
<!--container-->
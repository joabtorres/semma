<!--container-->
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mb-0"><?php echo!empty($name_page) ? $name_page : '' ?></h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>">Página Inicial</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>cla">Coordenadoria de Licenciamento Ambiental</a></li>
                    <li class="breadcrumb-item active"><?php echo!empty($name_page) ? $name_page : '' ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <!--row-->
    <div class="row">
        <div class="col-12 mt-3">
            <?php if (isset($licencas) & is_array($licencas) & !empty($licencas)): ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered  align-middle">
                        <thead>
                            <tr class="bg-pmc-1">
                                <td class="small">TIPO DE LICENÇA</td>
                                <td class="small">ANO</td>
                                <td class="small" width="150px">Nº LICENÇA</td>
                                <td class="small" width="150px">Nº PROTOCOLO</td>
                                <td class="small">EMPREENDIMENTO</td>
                                <td class="small">DETALHE</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($licencas as $index) : ?>
                                <tr>
                                    <td class="small"><?php echo!empty($index['licenca']) ? $index['licenca'] : ''; ?></td>
                                    <td class="small"><?php echo!empty($index['ano']) ? $index['ano'] : ''; ?></td>
                                    <td class="small"><?php echo!empty($index['n_licenca']) ? $this->formataLicenca($index['n_licenca']) : '' ?></td>
                                    <td class="small"><?php echo!empty($index['n_protocolo']) ? $this->formataProtocolo($index['n_protocolo']) : '' ?></td>
                                    <td class="small"><?php echo!empty($index['empreendimento']) ? $index['empreendimento'] : '' ?></td>
                                    <td class="small text-center">
                                        <button type="button" class="btn bg-pmc-1 btn-sm" data-bs-toggle="modal" data-bs-target="#modal_detalhe_<?php echo md5($index['cod']) ?>"><i class="fa-solid fa-eye fa-2x"></i></button>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php
            else:
                echo 'Nenhum registro encontrado!';
            endif;
            ?>



        </div>
    </div>
    <!--row-->

</div>
<!--container-->

<?php
if (isset($licencas) && is_array($licencas)) :
    foreach ($licencas as $indice) :
        ?>        
        <section class="modal fade" id="modal_detalhe_<?php echo md5($indice['cod']) ?>" tabindex="-1" aria-labelledby="modal_detalhe_Label_<?php echo md5($indice['cod']) ?>" aria-hidden="true">
            <article class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <section class="modal-content">
                    <header class="modal-header bg-pmc-1">
                        <h5 class="modal-title">Licença Emitida</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </header>
                    <article class="modal-body">

                        <table class="table table-bordered  align-middle">
                            <?php if (!empty($indice['licenca'])) : ?>
                                <tr>
                                    <td width="200px" class="bg-light">Tipo da Licença:</td>
                                    <td><?php echo $indice['licenca'] ?></td>
                                </tr>
                                <?php
                            endif;
                            if (!empty($indice['ano'])) :
                                ?>
                                <tr>
                                    <td width="200px" class="bg-light">Ano:</td>
                                    <td><?php echo $indice['ano'] ?></td>
                                </tr>
                                <?php
                            endif;
                            if (!empty($indice['n_licenca'])) :
                                ?>
                                <tr>
                                    <td width="200px" class="bg-light">Número da Licença:</td>
                                    <td><?php echo $this->formataLicenca($indice['n_licenca']) ?></td>
                                </tr>
                                <?php
                            endif;
                            if (!empty($indice['n_protocolo'])) :
                                ?>
                                <tr>
                                    <td width="200px" class="bg-light">Número do Protocolo:</td>
                                    <td><?php echo $this->formataProtocolo($indice['n_protocolo']) ?></td>
                                </tr>
                                <?php
                            endif;
                            if (!empty($indice['data_emissao'])) :
                                ?>
                                <tr>
                                    <td width="200px" class="bg-light">Data de Emissão:</td>
                                    <td><?php echo $indice['data_emissao'] ?></td>
                                </tr>
                                <?php
                            endif;
                            if (!empty($indice['data_validade'])) :
                                ?>
                                <tr>
                                    <td width="200px" class="bg-light">Data de Validade:</td>
                                    <td><?php echo $indice['data_validade'] ?></td>
                                </tr>
                                <?php
                            endif;
                            if (!empty($indice['empreendimento'])) :
                                ?>
                                <tr>
                                    <td width="200px" class="bg-light">Empreendimento:</td>
                                    <td><?php echo $indice['empreendimento'] ?></td>
                                </tr>
                                <?php
                            endif;
                            if (!empty($indice['tipologia'])) :
                                ?>
                                <tr>
                                    <td width="200px" class="bg-light">Tipologia:</td>
                                    <td><?php echo $indice['tipologia'] ?></td>
                                </tr>
                                <?php
                            endif;
                            ?>
                        </table>
                    </article>
                    <footer class="modal-footer">
                        <button class="btn btn-default" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                    </footer>
                </section>
            </article>
        </section>
        <?php
    endforeach;
endif;
?>
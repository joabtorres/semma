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
        <div class="col-md-12 mt-3">
            <section class="card">
                <header class="card-header bg-pmc-2">
                    <a data-toggle="collapse" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false">
                        <h4 class="card-title h6 mb-1 mt-1 text-white"><i class="fa fa-search pull-left"></i> Painel de busca <i class="fa fa-eye float-end"></i></h4>
                    </a>
                </header>
                <div class="collapse" id="collapseExample">
                    <article class="card-body">
                        <form method="GET" action="<?php echo BASE_URL ?>cla/licencas_emitidas/1" name="formSearch">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for='itipo'>Tipo de Licença: </label><br/>
                                    <select class="form-select" name="nTipo" id="itipo" onchange="selectTipoProtocolo(this.value)">
                                        <option value="" selected="selected">Todos</option>
                                        <?php
                                        foreach ($tipo_licencas as $indice) {
                                            if (isset($chamado['licenca']) && $indice['licenca'] == $chamado['licenca']) {
                                                echo '<option value = "' . $indice['licenca'] . '" selected = "selected">' . $indice['licenca'] . '</option>';
                                            } else {
                                                echo '<option value = "' . $indice['licenca'] . '">' . $indice['licenca'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">Informe o setor</div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for='iAno'> Ano: </label><br/>
                                    <select class="form-select" name="nAno" id="iAno" >
                                        <option value="" selected="selected">Todos</option>
                                        <?php
                                        foreach ($anos as $indice) {
                                            if (isset($chamado['ano']) && $indice['ano'] == $chamado['ano']) {
                                                echo '<option value = "' . $indice['ano'] . '" selected = "selected">' . $indice['ano'] . '</option>';
                                            } else {
                                                echo '<option value = "' . $indice['ano'] . '">' . $indice['ano'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Informe o usuário solicitante
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for='iSelectBuscar'>Por: </label><br/>
                                    <select class="form-select" name="nSelectBuscar" id="iSelectBuscar" >
                                        <option value="" selected="selected" disabled="disabled">Selecione</option>
                                        <option value="n_protocolo">Nº de Protocolo</option>
                                        <option value="n_licenca">Nº da Licença</option>
                                        <option value="empreendimento">Empreendimento</option>
                                    </select>
                                    <div class="invalid-feedback">Informe o setor</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="iCampo">Campo:  </label>
                                    <input type="text" class="form-control" name="nCampo" id="iCampo"/>
                                    <div class="invalid-feedback">
                                        Informe nome / email do usuário
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-2 mb-3">
                                    <button type="submit" name="nBuscarBT" value="BuscarBT" class="btn btn-danger"><i class="fa fa-search pull-left"></i> Buscar</button>
                                </div>
                            </div>
                        </form>
                    </article>
                </div>
            </section>
        </div>
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
                                        <a type="button" class="" data-bs-toggle="modal" data-bs-target="#modal_detalhe_<?php echo md5($index['cod']) ?>"><i class="fa-solid fa-eye fa-2x"></i></a>
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


    <!--inicio da paginação-->
    <?php
    if (ceil($paginas) > 1) {
        ?>
        <div class="container-fluid">
            <div class = "row">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class = "pagination">
                            <?php
                            echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "cla/licencas_emitidas/1" . $metodo_buscar . "'><span aria-hidden='true'>&laquo;</span></a></li>";
                            $pg = ceil($paginas);
                            $limite = 3;
                            $pgprev = ($pagina_atual - $limite) > 0 ? $pagina_atual - $limite : 0;
                            $pgnext = ($pagina_atual + $limite) < $pg ? $pagina_atual + $limite : $pg;
                            if ($pg > $pgprev && $pgprev >= $limite) {
                                echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "cla/licencas_emitidas/1" . $metodo_buscar . "'><span aria-hidden='true'>1</span></a></li>";
                                if ($pgprev >= $limite) {
                                    echo "<li class='page-space'>...</li>";
                                }
                            }
                            for ($p = 0; $p < $pg; $p++) {
                                if ($pagina_atual == ($p + 1)) {
                                    echo "<li class='page-item active'><a class='page-link' href='" . BASE_URL . "cla/licencas_emitidas/" . ($p + 1) . $metodo_buscar . "'>" . ($p + 1) . "</a></li>";
                                } else {
                                    if ($pgprev <= ($p + 1) && ($p + 1) < $pagina_atual) {
                                        echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "cla/licencas_emitidas/" . ($p + 1) . $metodo_buscar . "'>" . ($p + 1) . "</a></li>";
                                    }
                                    if (($p + 1) > $pagina_atual && $pgnext >= ($p + 1)) {
                                        echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "cla/licencas_emitidas/" . ($p + 1) . $metodo_buscar . "'>" . ($p + 1) . "</a></li>";
                                    }
                                }
                            }
                            if ($pg > $pgnext && $pgnext >= $limite) {
                                if ($pgnext >= $limite) {
                                    echo "<li class='page-space'>...</li>";
                                }
                                echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "cla/licencas_emitidas/" . ceil($paginas) . $metodo_buscar . "'><span aria-hidden='true'>" . ceil($paginas) . "</span></a></li>";
                            }
                            echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "cla/licencas_emitidas/" . ceil($paginas) . $metodo_buscar . "'>&raquo;</a></li>";
                            ?>
                        </ul>
                    </nav>
                </div> 
            </div> 
        </div>
    <?php }
    ?>
    <!--fim da paginação-->

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
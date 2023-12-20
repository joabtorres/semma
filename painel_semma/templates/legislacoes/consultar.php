<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <h4 class="mb-1 ms-2">Legislações</h4>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb p-2 rounded">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo BASE_URL ?>"> <i class="fa-solid fa-mug-hot me-1"></i>Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-landmark me-1"></i>
                        Legislações</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row" id="painel_de_consulta">
        <div class="col">
            <section class="card">
                <header class="card-header bg-primary text-white">
                    <a data-bs-toggle="collapse" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" class="text-white text-decoration-none">
                        <h4 class="card-title h6 mb-1 mt-1"><i class="fa fa-search pull-left"></i> Painel de busca <i class="fa fa-eye float-end"></i></h4>
                    </a>
                </header>
                <div class="collapse" id="collapseExample">
                    <article class="card-body">
                        <form method="GET" name="formLegislacaoSearch" action="<?php echo BASE_URL ?>legislacao/1">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for='iCategoria' class="form-label">Categoria: </label><br />
                                    <select class="form-select" name="nCategoria" id="iCategoria">
                                        <option value="" selected="selected" disabled="disabled">Selecione</option>
                                        <option value="">Todos</option>
                                        <?php
                                        foreach ($categoria as $indice) {
                                            echo '<option value = "' . $indice['categoria'] . '">' . $indice['categoria'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for='iEsfera' class="form-label"> Esfera: </label><br />
                                    <select class="form-select" name="nEsfera" id="iEsfera">
                                        <option value="" selected="selected" disabled="disabled">Selecione</option>
                                        <option value="">Todos</option>
                                        <?php
                                        foreach ($esfera as $indice) {
                                            echo '<option value = "' . $indice['esfera'] . '">' . $indice['esfera'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for='iSelectBuscar' class="form-label">Por: </label><br />
                                    <select class="form-select" name="nSelectBuscar" id="iSelectBuscar">
                                        <option value="" selected="selected" disabled="disabled">Selecione</option>
                                        <option value="numero">Número</option>
                                        <option value="ano">Ano</option>
                                        <option value="data">Data</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="iCampo" class="form-label">Campo: </label>
                                    <input type="text" class="form-control" name="nCampo" id="iCampo" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-2 mb-3">
                                    <button type="submit" name="nBuscarBT" value="BuscarBT" class="btn btn-outline-success"><i class="fa fa-search pull-left"></i>
                                        Buscar</button>
                                </div>
                            </div>
                        </form>
                    </article>
                </div>
            </section>
        </div>
    </div>
    <!--<div class="row" id="painel_de_consulta">-->
    <?php
    if (!empty($legislacoes)) {
    ?>
        <div class="row">
            <div class="col mb-2 mt-2">
                <section class="card">
                    <header class="card-header bg-light text-black">
                        <h1 class="card-title h6 mb-1 mt-1"><i class="fa-solid fa-magnifying-glass"></i> Total: <?php echo !empty($total_registro) ? $total_registro : '0'; ?> registros encontrados</h1>
                    </header>
                    <div class="table-responsive">
                        <!--table-->
                        <table class="table table-striped table-bordered table-sm table-hover mb-0 align-middle">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Esfera</th>
                                    <th scope="col">Númro</th>
                                    <th scope="col">Ano</th>
                                    <th scope="col">Data</th>
                                    <th scope="col" style="width: 150px;">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qtd = 1;
                                foreach ($legislacoes as $indice) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $qtd ?></td>
                                        <td>
                                            <?php echo !empty($indice['categoria']) ? $indice['categoria'] : ''; ?>
                                        </td>
                                        <td><?php echo !empty($indice['esfera']) ? $indice['esfera'] : ''; ?></td>
                                        <td>
                                            <?php echo !empty($indice['numero']) ? $indice['numero'] : ''; ?>
                                        </td>
                                        <td>
                                            <?php echo !empty($indice['ano']) ? $indice['ano'] : ''; ?>
                                        </td>
                                        <td>
                                            <?php echo !empty($indice['data']) ? $indice['data'] : ''; ?>
                                        </td>
                                        <td class="table-acao text-center">
                                            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_vizualizar_<?php echo md5($indice['cod']) ?>" title="Visualizar"><i class="fa fa-eye"></i></button>
                                            <a class="btn btn-outline-primary btn-sm" href="<?php echo BASE_URL . 'legislacao/editar/' . md5($indice['cod']); ?>" title="Editar"><i class="fa fa-pencil-alt"></i></a>
                                            <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_relatorio_<?php echo md5($indice['cod']) ?>" title="Excluir"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php
                                    $qtd++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                        <!--table-->
                    </div>
                </section>

            </div>
        </div>
    <?php } else {
    ?>
        <!--<div class="row">-->
        <div class="row">
            <div class="col mt-2 mb-2">
                <div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
                    <div id="resposta"> <i class="fa fa-times"></i> Desculpe, não foi possível localizar nenhum registro !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row">-->
    <?php } ?>


    <!--inicio da paginação-->
    <?php
    if (ceil($paginas) > 1) {
    ?>
        <div class="row">
            <div class="col">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                        echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "legislacao/1" . $parametros . "'><span aria-hidden='true'>&laquo;</span></a></li>";
                        $pg = ceil($paginas);
                        $limite = 3;
                        $pgprev = ($pagina_atual - $limite) > 0 ? $pagina_atual - $limite : 0;
                        $pgnext = ($pagina_atual + $limite) < $pg ? $pagina_atual + $limite : $pg;
                        if ($pg > $pgprev && $pgprev >= $limite) {
                            echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "legislacao/1" . $parametros . "'><span aria-hidden='true'>1</span></a></li>";
                            if ($pgprev >= $limite) {
                                echo "<li class='page-space'>...</li>";
                            }
                        }
                        for ($p = 0; $p < $pg; $p++) {
                            if ($pagina_atual == ($p + 1)) {
                                echo "<li class='page-item active'><a class='page-link' href='" . BASE_URL . "legislacao/" . ($p + 1) . $parametros . "'>" . ($p + 1) . "</a></li>";
                            } else {
                                if ($pgprev <= ($p + 1) && ($p + 1) < $pagina_atual) {
                                    echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "legislacao/" . ($p + 1) . $parametros . "'>" . ($p + 1) . "</a></li>";
                                }
                                if (($p + 1) > $pagina_atual && $pgnext >= ($p + 1)) {
                                    echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "legislacao/" . ($p + 1) . $parametros . "'>" . ($p + 1) . "</a></li>";
                                }
                            }
                        }
                        if ($pg > $pgnext && $pgnext >= $limite) {
                            if ($pgnext >= $limite) {
                                echo "<li class='page-space'>...</li>";
                            }
                            echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "legislacao/" . ceil($paginas) . $parametros . "'><span aria-hidden='true'>" . ceil($paginas) . "</span></a></li>";
                        }
                        echo "<li class='page-item'><a class='page-link' href='" . BASE_URL . "legislacao/" . ceil($paginas) . $parametros . "'>&raquo;</a></li>";
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    <?php }
    ?>
    <!--fim da paginação-->

</div>
<?php
if (isset($legislacoes) && is_array($legislacoes)) :
    foreach ($legislacoes as $indice) :
?>
        <!--MODAL - ESTRUTURA BÁSICA-->
        <section class="modal fade" id="modal_relatorio_<?php echo md5($indice['cod']) ?>" tabindex="-1" role="dialog">
            <article class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <section class="modal-content">
                    <header class="modal-header bg-danger text-while">
                        <h5 class="modal-title text-white">Deseja remover este registro?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </header>
                    <article class="modal-body p-1">
                        <table class="table align-middle m-0">
                            <tr>
                                <td class="bg-light" width="150px">Categoria:</td>
                                <td><?php echo !empty($indice['categoria']) ? $indice['categoria'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Esfera:</td>
                                <td><?php echo !empty($indice['esfera']) ? $indice['esfera'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Número:</td>
                                <td><?php echo !empty($indice['numero']) ? $indice['numero'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Ano:</td>
                                <td><?php echo !empty($indice['ano']) ? $indice['ano'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Data:</td>
                                <td><?php echo !empty($indice['data']) ? $indice['data'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Ementa:</td>
                                <td><?php echo !empty($indice['ementa']) ? $indice['ementa'] : '' ?></td>
                            </tr>
                        </table>
                        <p class="text-justify text-danger m-2"><span class="font-bold">OBS : </span> Ao clicar em "Excluir", este registro e todos registos relacionados ao mesmo deixaram de existir no sistema.</p>
                    </article>
                    <footer class="modal-footer">
                        <a class="btn btn-outline-danger pull-left" href="<?php echo BASE_URL . 'legislacao/excluir/' . md5($indice['cod']) ?>"> <i class="fa fa-trash"></i> Excluir</a>
                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                    </footer>
                </section>
            </article>
        </section>
        <section class="modal fade" id="modal_vizualizar_<?php echo md5($indice['cod']) ?>" tabindex="-1" role="dialog">
            <article class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <section class="modal-content">
                    <header class="modal-header bg-primary">
                        <h5 class="modal-title text-white"><i class="fa-solid fa-landmark me-1"></i>
                            Legislações</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </header>
                    <article class="modal-body p-1">
                        <table class="table align-middle m-0">
                            <tr>
                                <td class="bg-light" width="150px">Categoria:</td>
                                <td><?php echo !empty($indice['categoria']) ? $indice['categoria'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Esfera:</td>
                                <td><?php echo !empty($indice['esfera']) ? $indice['esfera'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Número:</td>
                                <td><?php echo !empty($indice['numero']) ? $indice['numero'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Ano:</td>
                                <td><?php echo !empty($indice['ano']) ? $indice['ano'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Data:</td>
                                <td><?php echo !empty($indice['data']) ? $indice['data'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Ementa:</td>
                                <td><?php echo !empty($indice['ementa']) ? $indice['ementa'] : '' ?></td>
                            </tr>
                            <tr>
                                <td class="bg-light">Diário:</td>
                                <td>
                                    <?php if (file_exists('../' . $indice['diario'])) : ?>
                                        <?php echo !empty($indice['diario']) ? '<a href="' . BASE_URL_SITE . $indice['diario'] . '" target="_blank" class="text-primary btn"><i class="fa fa-download"></i> Visualizar</a>' : ''; ?>
                                    <?php else : ?>
                                        <?php echo !empty($indice['diario']) ? '<a href="' . $indice['diario'] . '" target="_blank" class="text-primary btn"><i class="fa fa-download"></i> Visualizar</a>' : ''; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light">Anexo:</td>
                                <td>
                                    <?php
                                    if (file_exists('../' . $indice['anexo'])) : ?>
                                        <?php echo !empty($indice['anexo']) ? '<a href="' . BASE_URL_SITE . $indice['anexo'] . '" target="_blank" class="text-danger btn"><i class="fa fa-download"></i> Visualizar</a>' : ''; ?>
                                    <?php else : ?>
                                        <?php echo !empty($indice['anexo']) ? '<a href="' . $indice['anexo'] . '" target="_blank" class="text-danger btn"><i class="fa fa-download"></i> Visualizar</a>' : ''; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </article>
                    <footer class="modal-footer">
                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                    </footer>
                </section>
            </article>
        </section>
<?php
    endforeach;
endif;
?>
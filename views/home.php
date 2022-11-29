<div class="container-fluid" id="section-container">
    <div class="row" >
        <div class="col" id="pagina-header">
            <h5>Página Inicial</h5>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="<?php echo BASE_URL ?>home"><i class="fa fa-tachometer-alt"></i> Inicial</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mb-3" id="painel_de_consulta">
        <div class="col">
            <section class="card">
                <header class="card-header bg-success">
                    <a data-toggle="collapse" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false">
                        <h4 class="card-title h6 mb-1 mt-1"><i class="fa fa-search pull-left"></i> Consultar tramitação de protocolo <i class="fa fa-eye pull-right"></i></h4>
                    </a>
                </header>
                <div class="collapse show" id="collapseExample">
                    <article class="card-body">
                        <form method="GET" action="<?php echo BASE_URL ?>protocolo/consultar/1" name="formPROTOCOLOSearch">
                            <div class="form-row">
                                <div class="col-md-2 mb-3">
                                    <label for='itipo'>Tipo do Protocolo: </label><br/>
                                    <select class="custom-select" name="nTipo" id="itipo" onchange="selectTipoProtocolo(this.value)">
                                        <option value="" selected="selected">Todos</option>
                                        <?php
                                        foreach ($protocolo_tipo as $indice) {
                                            if (isset($chamado['setor_id']) && $indice['id'] == $chamado['setor_id']) {
                                                echo '<option value = "' . $indice['id'] . '" selected = "selected">' . $indice['tipo'] . '</option>';
                                            } else {
                                                echo '<option value = "' . $indice['id'] . '">' . $indice['tipo'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">Informe o setor</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for='iObjetivo'> Objetivo do Pedido: </label><br/>
                                    <select class="custom-select" name="nObjeito" id="iObjetivo" >
                                        <option value="" selected="selected">Todos</option>
                                        <?php
                                        foreach ($protocolo_objetivo as $indice) {
                                            if (isset($chamado['usuario_id']) && $indice['id'] == $chamado['usuario_id']) {
                                                echo '<option value = "' . $indice['id'] . '" selected = "selected">' . $indice['objetivo'] . '</option>';
                                            } else {
                                                echo '<option value = "' . $indice['id'] . '">' . $indice['objetivo'] . '</option>';
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
                                    <select class="custom-select" name="nSelectBuscar" id="iSelectBuscar" >
                                        <option value="" selected="selected" disabled="disabled">Selecione</option>
                                        <option value="protoco">Nº de Protocolo</option>
                                        <option value="interessado">Interessado</option>
                                        <option value="cpf_cpnj">CPF/CNPJ</option>
                                        <option value="data">Data</option>
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
                                    <button type="submit" name="nBuscarBT" value="BuscarBT" class="btn btn-warning"><i class="fa fa-search pull-left"></i> Buscar</button>
                                </div>
                            </div>
                        </form>
                    </article>
                </div>
            </section>
        </div>
    </div>
    <!--<div class="row" id="painel_de_consulta">-->

    <div class="row">
        <div class="col-md-3">
            <section class="card">
                <header class="card-header bg-info text-white">
                    <h6 class="card-title mt-1 mb-1">
                        <a data-toggle="collapse" data-toggle="collapse" href="#totaldeRegistros" role="button" aria-expanded="false">
                            <h4 class="card-title h6 mb-1 mt-1"><i class="fa fa-database pull-left"></i> Protocolo <i class="fa fa-eye pull-right"></i></h4>
                        </a>
                    </h6>
                </header>
                <div class="collapse" id="totaldeRegistros">
                    <article class="card-body pt-0 pb-0">
                        <div class="chart-container mt-2 mb-2" style="height:auto">
                            <canvas id="grafico_tipo_protocolo"></canvas>
                        </div>
                        <?php if (isset($tramitacoes) && !empty($tramitacoes)):
                            ?>
                            <table class="table mt-0 mb-0">
                                <tr>
                                    <th>Categoria</th>
                                    <th width="80px"><abbr title="Quantidade" class="text-decoration-none">QTD</abbr></th>
                                </tr>
                                <?php foreach ($tramitacoes as $index): ?>
                                    <tr>
                                        <td><?php echo!empty($index['label']) ? $index['label'] : '' ?></td>
                                        <td><?php echo!empty($index['data']) ? $index['data'] : '0' ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php else : ?>
                            <p class="mt-2 mb-2"> Nenhum registro foi encontrado!</p>
                        <?php endif; ?>
                    </article>
                </div>
            </section>
        </div>
        <div class="col-md-3">
            <section class="card">
                <header class="card-header bg-warning text-white">
                    <h6 class="card-title mt-1 mb-1">
                        <a data-toggle="collapse" data-toggle="collapse" href="#totaldeRegistros" role="button" aria-expanded="false">
                            <h4 class="card-title h6 mb-1 mt-1"><i class="fa fa-database pull-left"></i> Fiscalização <i class="fa fa-eye pull-right"></i></h4>
                        </a>
                    </h6>
                </header>
                <div class="collapse" id="totaldeRegistros">
                    <article class="card-body pt-0 pb-0">
                        <div class="chart-container mt-2 mb-2" style="height:auto">
                            <canvas id="grafico_tipo_fiscalizacoes"></canvas>
                        </div>
                        <?php if (isset($fiscalizacoes) && !empty($fiscalizacoes)):
                            ?>
                            <table class="table mt-0 mb-0">
                                <tr>
                                    <th>Categoria</th>
                                    <th width="80px"><abbr title="Quantidade" class="text-decoration-none">QTD</abbr></th>
                                </tr>
                                <?php foreach ($fiscalizacoes as $index): ?>
                                    <tr>
                                        <td><?php echo!empty($index['label']) ? $index['label'] : '' ?></td>
                                        <td><?php echo!empty($index['data']) ? $index['data'] : '0' ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php else : ?>
                            <p class="mt-2 mb-2"> Nenhum registro foi encontrado!</p>
                        <?php endif; ?>
                    </article>
                </div>
            </section>
        </div>
        <div class="col-md-3">
            <section class="card">
                <header class="card-header bg-success text-white">
                    <h6 class="card-title mt-1 mb-1">
                        <a data-toggle="collapse" data-toggle="collapse" href="#totaldeRegistros" role="button" aria-expanded="false">
                            <h4 class="card-title h6 mb-1 mt-1"><i class="fa fa-database pull-left"></i> Recursos Naturais <i class="fa fa-eye pull-right"></i></h4>
                        </a>
                    </h6>
                </header>
                <div class="collapse" id="totaldeRegistros">

                    <article class="card-body pt-0 pb-0">

                        <?php if (isset($recursos_naturais) && !empty($recursos_naturais)):
                            ?>
                            <div class="chart-container mt-2 mb-2" style="height:auto">
                                <canvas id="grafico_tipo_recursosnaturais"></canvas>
                            </div>
                            <table class="table mt-0 mb-0">
                                <tr>
                                    <th>Categoria</th>
                                    <th width="80px"><abbr title="Quantidade" class="text-decoration-none">QTD</abbr></th>
                                </tr>
                                <?php foreach ($recursos_naturais as $index): ?>
                                    <tr>
                                        <td><?php echo!empty($index['label']) ? $index['label'] : '' ?></td>
                                        <td><?php echo!empty($index['data']) ? $index['data'] : '0' ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php else : ?>
                            <p class="mt-2 mb-2"> Nenhum registro foi encontrado!</p>
                        <?php endif; ?>
                    </article>
                </div>
            </section>
        </div>
        <div class="col-md-3">
            <section class="card">
                <header class="card-header bg-danger text-white">
                    <h6 class="card-title mt-1 mb-1">
                        <a data-toggle="collapse" data-toggle="collapse" href="#totaldeRegistros" role="button" aria-expanded="false">
                            <h4 class="card-title h6 mb-1 mt-1"><i class="fa fa-database pull-left"></i> Licenciamento <i class="fa fa-eye pull-right"></i></h4>
                        </a>
                    </h6>
                </header>
                <div class="collapse" id="totaldeRegistros">
                    <article class="card-body pt-0 pb-0">
                        <?php if (isset($licenciamentos) && !empty($licenciamentos)):
                            ?>

                            <div class="chart-container mt-2 mb-2" style="height:auto">
                                <canvas id="grafico_tipo_licenciamento"></canvas>
                            </div>
                            <table class="table mt-0 mb-0">
                                <tr>
                                    <th>Categoria</th>
                                    <th width="80px"><abbr title="Quantidade" class="text-decoration-none">QTD</abbr></th>
                                </tr>
                                <?php foreach ($licenciamentos as $index): ?>
                                    <tr>
                                        <td><?php echo!empty($index['label']) ? $index['label'] : '' ?></td>
                                        <td><?php echo!empty($index['data']) ? $index['data'] : '0' ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php else : ?>
                            <p class="mt-2 mb-2"> Nenhum registro foi encontrado!</p>
                        <?php endif; ?>
                    </article>
                </div>
            </section>
        </div>

    </div>


</div>
<!-- /#section-container -->


<script src="<?php echo BASE_URL ?>assets/js/chart.min.js"></script>
<script src="<?php echo BASE_URL ?>assets/js/graficos.js"></script>

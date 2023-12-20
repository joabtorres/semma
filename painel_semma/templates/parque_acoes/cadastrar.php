<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <h4 class="mb-1 ms-2"></i>
                Cadastrar ações realizadas no parque</h4>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb p-2 rounded">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo BASE_URL ?>"> <i class="fa-solid fa-mug-hot me-1"></i>Página Inicial</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo BASE_URL ?>parque_acao/1"> <i class="fa-solid fa-tree me-1"></i>
                            Parque Ações Realizadas </a></li>
                    <li class="breadcrumb-item " aria-current="page "><i class="fa-regular fa-square-plus me-1"></i>
                        Cadastrar </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <?php
        if (!empty($error)) { ?>
            <div class="col">
                <div class="alert <?php echo $error['class'] ?> text-white alert-dismissible fade show" role="alert">
                    <?php echo $error['msg'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        <?php } ?>
        <form method="POST" name="nFormParqueAcoes" enctype="multipart/form-data">
            <input type="hidden" id="iCod" value="<?php echo (!empty($arrayCad['cod'])) ? $arrayCad['cod'] : ''; ?>" name="nCod">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><i class="fa-solid fa-tree me-1"></i> Parque Ações Realizadas</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12 mt-1">
                                        <label for="iAcao" class="form-label">Tipo:</label>
                                        <input type="text" class="form-control" id="iAcao" name="nAcao" placeholder="Exemplo: Limpeza do parque" required value="<?php echo (!empty($arrayCad['nome'])) ? $arrayCad['nome'] : 'Limpeza do parque 2023'; ?>">
                                        <div class="invalid-feedback">
                                            Informe o tipo
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label for="iSlug" class="form-label">Slug:</label>
                                        <input type="text" class="form-control" id="iSlug" name="nSlug" placeholder="Exmplo: limpeza-do-parque" required value="<?php echo (!empty($arrayCad['slug'])) ? $arrayCad['slug'] : 'limpeza-do-parque-2023'; ?>">
                                        <div class="invalid-feedback">
                                            Informe o slug
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label for="iData" class="form-label">Data:</label>
                                        <input type="text" class="form-control" id="iData" name="nData" placeholder="Exmplo: 23 de Janeiro de 2023" required value="<?php echo (!empty($arrayCad['data'])) ? $arrayCad['data'] : 'Setembro/2023'; ?>">
                                        <div class="invalid-feedback">
                                            Informe a data
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label for="iStatus" class="form-label">Status:</label>
                                        <select class="form-select" name="nStatus" id="iStatus">
                                            <?php
                                            $array = array(0 => 'Desativado', 1 => 'Ativo');
                                            for ($i = 0; $i < count($array); $i++) {
                                                if ($i == $arrayCad['status']) {
                                                    echo '<option value="' . $i . '" selected="true">' . $array[$i] . '</option>';
                                                } else {
                                                    echo '<option value="' . $i . '" >' . $array[$i] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label for="iDescricao" class="form-label">Descrição:</label>
                                        <textarea name="nDescricao" id="iDescricao" rows="4" class="form-control" required><?php echo (!empty($arrayCad['descricao'])) ? $arrayCad['descricao'] : '222'; ?></textarea>
                                        <div class="invalid-feedback">
                                            Informe a descrição
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="col-md-12 mt-1">
                                    <label for="iLinkAnexo" class="form-label">Anexo:</label>
                                    <br>
                                    <div class="col-md-12 mt-1 text-center">
                                        <div class="img-thumbnail mt-1 mt-md-5" id="imagemAcaoParque" style="<?= (!empty($arrayCad['anexo'])) ? 'background-image: url(' . BASE_URL . $arrayCad['anexo'] . ');' : ''; ?>"></div>
                                        <div>Dimensão: 250px (largura) x 167px (altura) </div>
                                    </div>
                                    <br>
                                    <input type="text" class="form-control" id="iLinkAnexo" name="nLinkAnexo" placeholder="Exemplo: https://drive.google.com/file/d/1ClJTUgAh7EeBlDvoQxOYVAn7HCT72GI1/view" value="<?php echo (!empty($arrayCad['anexo'])) ? $arrayCad['anexo'] : ''; ?>">
                                </div>
                                <div class="col-md-12 mt-1">
                                    <input type="file" class="form-control" name="nAnexo" id="iAnexoAcao">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-outline-success me-2" name="nSalvar" value="Salvar" onclick="validarFormParqueAcoes()"><i class="fa-solid fa-check"></i> Salvar</button>
                            <a class="btn btn-outline-danger" href="<?php echo BASE_URL ?>"> <i class="fa-solid fa-xmark"></i> Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
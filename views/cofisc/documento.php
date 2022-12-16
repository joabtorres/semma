<!--container-->
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3 class="mb-0"><?php echo!empty($name_page) ? $name_page : '' ?></h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>">Página Inicial</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>cofisc">Coordenadoria de Fiscalização Ambiental</a></li>
                    <li class="breadcrumb-item active"><?php echo!empty($name_page) ? $name_page : '' ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <!--row-->
    <div class="row">
        <div class="col-12 mt-3">
            <?php if (isset($termos_de_referencia) & is_array($termos_de_referencia) & !empty($termos_de_referencia)): ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered  align-middle">
                        <thead>
                            <tr class="bg-pmc-1">
                                <td>CATEGORIA</td>
                                <td width="170px">ULTIMA ALTERAÇÃO</td>
                                <td>DESCRIÇÃO</td>
                                <td width="50">ANEXO</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($termos_de_referencia as $index) : ?>
                                <tr>
                                    <td><?php echo!empty($index['tipo']) ? $index['tipo'] : ''; ?></td>
                                    <td><?php echo!empty($index['data']) ? $index['data'] : ''; ?></td>
                                    <td><?php echo!empty($index['descricao']) ? $index['descricao'] : '' ?></td>
                                    <td><?php echo!empty($index['anexo']) ? '<a href="' . BASE_URL . $index['anexo'] . '" target="_blank" class="btn text-danger"><i class="fa-solid fa-file-lines fa-2x"></i></a>' : '' ?></td>
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
<!--container-->
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mb-0"><?php echo !empty($name_page) ? $name_page : ''?></h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>">Página Inicial</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>legislacao">Legislação</a></li>
                    <li class="breadcrumb-item active"><?php echo !empty($name_page) ? $name_page : ''?></li>
                </ol>
            </nav>
        </div>
    </div>

    <!--row-->
    <div class="row">
        <div class="col-12 mt-3">
            <?php if (isset($decretos) & is_array($decretos) & !empty($decretos)): ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered  align-middle">
                        <thead>
                            <tr class="bg-pmc-1">
                                <td>CATEGORIA</td>
                                <td>NÚMERO</td>
                                <td>ANO</td>
                                <td>DATA</td>
                                <td>EMENTA</td>
                                <td>DIÁRIO</td>
                                <td>ANÉXO</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($decretos as $index) : ?>
                                <tr>
                                    <td><?php echo!empty($index['esfera']) ? $index['esfera'] : ''; ?></td>
                                    <td><?php echo!empty($index['numero']) ? $index['numero'] : ''; ?></td>
                                    <td><?php echo!empty($index['ano']) ? $index['ano'] : '' ?></td>
                                    <td><?php echo!empty($index['data']) ? $index['data'] : '' ?></td>
                                    <td><?php echo!empty($index['ementa']) ? $index['ementa'] : '' ?></td>
                                    <td><?php echo!empty($index['diario']) ? '<a href="' . $index['diario'] . '" target="_blank" class="btn btn-primary text-white"><i class="fa-solid fa-file-pdf fa-2x"></i></a>' : '' ?></td>
                                    <td><?php echo!empty($index['anexo']) ? '<a href="' . $index['anexo'] . '" target="_blank" class="btn btn-danger text-white"><i class="fa-solid fa-file-pdf fa-2x"></i></a>' : '' ?></td>
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
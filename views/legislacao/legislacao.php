<!--container-->
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3 class="mb-0"><?php echo!empty($name_page) ? $name_page : '' ?></h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>">Página Inicial</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>legislacao">Legislação</a></li>
                    <li class="breadcrumb-item active"><?php echo!empty($name_page) ? $name_page : '' ?></li>
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
                                <td>ANEXO</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($decretos as $index): ?>
                                <tr>
                                    <td><?php echo!empty($index['esfera']) ? $index['esfera'] : ''; ?></td>
                                    <td><?php echo!empty($index['numero']) ? $index['numero'] : ''; ?></td>
                                    <td><?php echo!empty($index['ano']) ? $index['ano'] : '' ?></td>
                                    <td><?php echo!empty($index['data']) ? $index['data'] : '' ?></td>
                                    <td><?php echo!empty($index['ementa']) ? $index['ementa'] : '' ?></td>
                                    <?php if (file_exists($index['diario'])): ?>
                                        <td><?php echo!empty($index['diario']) ? '<a href="' . BASE_URL . $index['diario'] . '" target="_blank" class="text-primary btn"><i class="fa-solid fa-file-pdf fa-2x"></i></a>' : ''; ?></td>
                                    <?php else: ?>
                                        <td><?php echo!empty($index['diario']) ? '<a href="' . $index['diario'] . '" target="_blank" class="text-primary btn"><i class="fa-solid fa-file-pdf fa-2x"></i></a>' : ''; ?></td>
                                    <?php endif; ?>                            
                                    <?php if (file_exists($index['anexo'])): ?>
                                        <td><?php echo!empty($index['anexo']) ? '<a href="' . BASE_URL . $index['anexo'] . '" target="_blank" class="text-danger btn"><i class="fa-solid fa-file-pdf fa-2x"></i></a>' : ''; ?>
                                        <?php else: ?>
                                        <td><?php echo!empty($index['anexo']) ? '<a href="' . $index['anexo'] . '" target="_blank" class="text-danger btn"><i class="fa-solid fa-file-pdf fa-2x"></i></a>' : ''; ?>
                                        <?php endif; ?>
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
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
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>parque/acoes">Ações Realizadas</a></li>
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

            <p><?= $action['texto'] ?> </p>

            <p>Imagens da ação: </p>

        </div>
        <div class="col-md-12">
            <?php if (!empty($action['galery']) && is_array($action['galery'])) : ?>
                <?php foreach ($action['galery'] as $index) : ?>
                    <a class=" rounded img-responsive example-image-link" href="<?= BASE_URL . "{$index['imagem']}" ?>" data-lightbox="example-set" data-title=""><img class="rounded mb-1 lightbox-image " src="<?= BASE_URL . "{$index['thumbnail']}" ?>" alt="<?= ($name_page ?? '') ?>" /></a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!--row-->
</div>
<!--container-->
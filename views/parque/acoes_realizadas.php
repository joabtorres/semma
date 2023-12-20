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

        </div>
    </div>
    <!--row-->
    <!--row-->
    <div class="row">
        <?php if (!empty($actions) && is_array($actions)) : ?>
            <?php foreach ($actions as $index) : ?>
                <div class="col-lg-3">
                    <figure class="figure">
                        <a href="<?= BASE_URL . "parque/acoes_realizadas/" . ($index['slug'] ?? '')  ?>">
                            <img src="<?= BASE_URL . ($index['imagem'] ?? '') ?>" class="figure-img img-fluid rounded img-thumbnail mb-0 pb-0 d-block mx-auto" alt="...">
                        </a>
                        <figcaption class="text-center"><strong><?= ($index['nome'] ?? '') ?></strong>
                            <br><small class="text-black"><?= ($index['data'] ?? '') ?></small>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <!--row-->
</div>
<!--container-->
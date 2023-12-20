<?php

router::get('grafico/visitantes', function ($arg) {
    $user = usuarioController::getInstance();
    if ($user->checkUser()) {
        $crud = crudModel::getInstance();
        $resultado = $crud->read("SELECT mes as label, COUNT(*) as data, data as fulldate FROM visitantes GROUP BY DATE_FORMAT(fulldate, '%Y-%m') DESC LIMIT 0,11");
        echo json_encode($resultado, JSON_UNESCAPED_UNICODE);
    }
});
router::get('grafico/licencas_emitidas', function ($arg) {
    $user = usuarioController::getInstance();
    if ($user->checkUser()) {
        $crud = crudModel::getInstance();
        $resultado = $crud->read("SELECT ano as label, COUNT(ano) as data FROM licencas_emitidas GROUP BY ano;");
        echo json_encode($resultado, JSON_UNESCAPED_UNICODE);
    }
});

<?php

router::get('parque_acao/cadastrar', function ($arg) {
    $user = usuarioController::getInstance();
    if ($user->checkUser()) {
        $view = template::getInstance();
        $dados = array();
        if (isset($_SESSION['historico_acao']) && !empty($_SESSION['historico_acao'])) {
            $_SESSION['historico_acao'] = false;
            $dados['error'] = array('class' => 'bg-success', 'msg' => "Cadastro realizado com sucesso.");
        }
        $view->loadTemplate('parque_acoes/cadastrar', $dados);
    }
});

router::post('parque_acao/cadastrar', function ($arg) {
    $user = usuarioController::getInstance();
    if ($user->checkUser()) {
        $view = template::getInstance();
        $dados = array('id' => '0');
        if (isset($_POST['nSalvar'])) {
            $controller = parqueController::getInstance();
            $dados['error'] = $controller->cadastrarAcao();
        }
        $view->loadTemplate("parque_acoes/cadastrar", $dados);
    }
});

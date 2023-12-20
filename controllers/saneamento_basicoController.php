<?php

class saneamento_basicoController extends controller
{

    public function index()
    {
        $dados = array();
        $viewName = 'saneamento/saneamento-basico';

        $crudModel = new crud_db();
        $dados['name_page'] = "Saneamento Básico";
        $dados['decretos'] = $crudModel->read('SELECT * FROM saneamentos ORDER BY ano ASC');
        $this->loadTemplate($viewName, $dados);
    }
}

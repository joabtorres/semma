<?php

class claController extends controller {

    public function index() {
        $dados = array();
        $viewName = 'cla/cla';
        $this->loadTemplate($viewName, $dados);
    }

    public function termos_de_referencia() {
        $dados = array();
        $viewName = 'cla/documento';

        $crudModel = new crud_db();
        $dados['name_page'] = "Termos de Referência";
        $dados['termos_de_referencia'] = $crudModel->read('SELECT * FROM termos_de_referencia');
        $this->loadTemplate($viewName, $dados);
    }

    public function formularios() {
        $dados = array();
        $viewName = 'cla/documento';
        $crudModel = new crud_db();
        $dados['name_page'] = "Formulários";
        $dados['termos_de_referencia'] = $crudModel->read('SELECT * FROM formularios WHERE coordenacao="cla"');
        $this->loadTemplate($viewName, $dados);
    }

}

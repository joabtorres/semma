<?php

class cprnController extends controller {

    public function index() {
        $dados = array();
        $viewName = 'cla/cla';
        $this->loadTemplate($viewName, $dados);
    }


    public function formularios() {
        $dados = array();
        $viewName = 'cprn/documento';
        $crudModel = new crud_db();
        $dados['name_page'] = "Formulários";
        $dados['termos_de_referencia'] = $crudModel->read('SELECT * FROM formularios WHERE coordenacao="cprn"');
        $this->loadTemplate($viewName, $dados);
    }

}

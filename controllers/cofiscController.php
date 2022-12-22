<?php

class cofiscController extends controller {

    public function index() {
        $dados = array();
        $viewName = 'cofisc/cofisc';
        $this->loadTemplate($viewName, $dados);
    }


    public function formularios() {
        $dados = array();
        $viewName = 'cofisc/documento';
        $crudModel = new crud_db();
        $dados['name_page'] = "Formulários";
        $dados['termos_de_referencia'] = $crudModel->read('SELECT * FROM formularios WHERE coordenacao="cofisc"');
        $this->loadTemplate($viewName, $dados);
    }

    public function denuncia(){
        $dados = array();
        $viewName = 'cofisc/denuncia';
        $dados['name_page'] = "Denúncia Ambiental";
        $this->loadTemplate($viewName, $dados);
    }

}

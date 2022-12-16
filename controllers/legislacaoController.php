<?php

class legislacaoController extends controller {

    public function index() {
        $dados = array();
        $viewName = 'legislacao/legislacao';

        $crudModel = new crud_db();
        $dados['name_page'] = "Legislação";
        $dados['decretos'] = $crudModel->read('SELECT * FROM legislacoes ORDER BY categoria, esfera, ano, numero ASC');
        $this->loadTemplate($viewName, $dados);
    }

    public function decretos() {
        $dados = array();
        $viewName = 'legislacao/legislacao';

        $crudModel = new crud_db();
        $dados['name_page'] = "Decretos";
        $dados['decretos'] = $crudModel->read('SELECT * FROM legislacoes WHERE categoria=:legislacao ORDER BY categoria, esfera, ano, numero ASC', array('legislacao' => $dados['name_page']));
        $this->loadTemplate($viewName, $dados);
    }

    public function leis_complementares() {
        $dados = array();
        $viewName = 'legislacao/legislacao';

        $crudModel = new crud_db();
        $dados['name_page'] = "Leis Complementares";
        $dados['decretos'] = $crudModel->read('SELECT * FROM legislacoes WHERE categoria=:legislacao ORDER BY categoria, esfera, ano, numero ASC', array('legislacao' => $dados['name_page']));
        $this->loadTemplate($viewName, $dados);
    }

    public function leis() {
        $dados = array();
        $viewName = 'legislacao/legislacao';

        $crudModel = new crud_db();
        $dados['name_page'] = "Leis";
        $dados['decretos'] = $crudModel->read('SELECT * FROM legislacoes WHERE categoria=:legislacao ORDER BY categoria, esfera, ano, numero ASC', array('legislacao' => $dados['name_page']));
        $this->loadTemplate($viewName, $dados);
    }

    public function instrucoes_normativas() {
        $dados = array();
        $viewName = 'legislacao/legislacao';

        $crudModel = new crud_db();
        $dados['name_page'] = "Instruções normativas";
        $dados['decretos'] = $crudModel->read('SELECT * FROM legislacoes WHERE categoria=:legislacao ORDER BY categoria, esfera, ano, numero ASC', array('legislacao' => $dados['name_page']));
        $this->loadTemplate($viewName, $dados);
    }

    public function portarias() {
        $dados = array();
        $viewName = 'legislacao/legislacao';

        $crudModel = new crud_db();
        $dados['name_page'] = "Portarias";
        $dados['decretos'] = $crudModel->read('SELECT * FROM legislacoes WHERE categoria=:legislacao ORDER BY categoria, esfera, ano, numero ASC', array('legislacao' => $dados['name_page']));
        $this->loadTemplate($viewName, $dados);
    }

    public function resolucoes() {
        $dados = array();
        $viewName = 'legislacao/legislacao';

        $crudModel = new crud_db();
        $dados['name_page'] = "Resoluções";
        $dados['decretos'] = $crudModel->read('SELECT * FROM legislacoes WHERE categoria=:legislacao ORDER BY categoria, esfera, ano, numero ASC', array('legislacao' => $dados['name_page']));
        $this->loadTemplate($viewName, $dados);
    }

}

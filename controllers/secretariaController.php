<?php

class secretariaController extends controller {

    public function index() {
        $dados = array();
        $viewName = 'secretaria/secretaria';
        $this->loadTemplate($viewName, $dados);
    }
    public function estrutura_organizacional(){
        $dados = array();
        $viewName = 'secretaria/estrutura';
        $this->loadTemplate($viewName, $dados);
    }

}

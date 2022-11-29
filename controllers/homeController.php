<?php

class homeController extends controller {

    public function index() {
        $dados = array();
        $viewName = 'home';
        $this->loadTemplate($viewName, $dados);
    }

}

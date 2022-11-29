<?php

/**
 * A classe 'controller' é responsável por fazer o carregamento das views, concebe paginação e verifica nível de usuário
 * 
 * @author Joab Torres <joabtorres1508@gmail.com>
 * @version 1.0
 * @copyright  (c) 2019, Joab Torres Alencar - Analista de Sistemas 
 * @access public
 * @package core
 * @example classe controller
 */
class controller {

    /**
     * Está função é responsável para carrega uma view;
     * @param String viewName - nome da view;
     * @param array $viewData - Dados para serem carregados na view
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . ".php";
    }

    /**
     * Está função é responsável para carrega um template estático, a onde ela chama chama uma função lo;
     * @param String viewName - nome da view;
     * @param array $viewData - Dados para serem carregados na view
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function loadTemplate($viewName, $viewData = array()) {
        include 'views/template.php';
    }

    /**
     * Está função é responsável para carrega uma view dinamica dentro de um template estático
     * @param String viewName - nome da view;
     * @param array $viewData - Dados para serem carregados na view
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . ".php";
    }
}

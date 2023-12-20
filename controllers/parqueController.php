<?php
class parqueController extends controller
{
    public function index()
    {
    }
    public function sobre()
    {
        $dados = array();
        $viewName = 'parque/sobre';
        $this->loadTemplate($viewName, $dados);
    }
    public function acoes()
    {
        $dados = array();
        $crudModel = new crud_db();
        $viewName = 'parque/acoes_realizadas';
        $dados['name_page'] = "Ações Realizadas";
        $dados['actions'] = $crudModel->read('SELECT * FROM parque_acoes WHERE status=:status ORDER BY id DESC', ['status' => 1]);
        $this->loadTemplate($viewName, $dados);
    }
    public function acoes_realizadas($slug)
    {
        $dados = array();
        $dados['action'] = (new crud_db())->read_specific("SELECT * FROM parque_acoes WHERE slug=:slug", ['slug' => $slug]);
        $dados['action']['galery'] = (new crud_db())->read("SELECT * FROM parque_acoes_imagens WHERE acao_id={$dados['action']['id']}");
        $viewName = 'parque/acao';
        $dados['name_page'] = $dados['action']['nome'];
        $this->loadTemplate($viewName, $dados);
    }
    public function visita()
    {
        $dados = array();
        $viewName = 'parque/visita';
        $dados['name_page'] = "Solicitação de Visita";
        $this->loadTemplate($viewName, $dados);
    }
}

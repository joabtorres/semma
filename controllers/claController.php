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

    public function licencas_emitidas($page = 1) {
        $dados = array();
        $viewName = 'cla/licencas';
        $crudModel = new crud_db();
        $dados['name_page'] = "Licenças Emitidas";
        $dados['tipo_licencas'] = $crudModel->read('SELECT DISTINCT(licenca) FROM licencas_emitidas');
        $dados['anos'] = $crudModel->read('SELECT DISTINCT(ano) FROM licencas_emitidas');
        $sql = 'SELECT * FROM licencas_emitidas WHERE cod>1 ';
        $arrayForm = array();
        $licencas_emitidas = array();
        if (isset($_GET['nBuscarBT'])) {
            $_GET['nSelectBuscar'] = !empty($_GET['nSelectBuscar']) ? $_GET['nSelectBuscar'] : '';
            $parametros = "?nTipo=" . $_GET['nTipo'] . "&nAno=" . $_GET['nAno'] . "&nSelectBuscar=" . $_GET['nSelectBuscar'] . "&nCampo=" . $_GET['nCampo'] . "&nBuscarBT=BuscarBT";
            //nTipo
            if (!empty($_GET['nTipo'])) {
                $sql .= " AND licenca=:licenca ";
                $arrayForm['licenca'] = addslashes($_GET['nTipo']);
            }
            //nAno
            if (!empty($_GET['nAno'])) {
                $sql .= " AND ano=:ano ";
                $arrayForm['ano'] = addslashes($_GET['nAno']);
            }
            //nSelectBuscar
            if (!empty($_GET['nSelectBuscar'])) {
                $opcaoSelecionada = $_GET['nSelectBuscar'];
                $campo = $_GET['nCampo'];
                switch ($opcaoSelecionada) {
                    case 'protoco':
                        $sql .= " AND n_protocolo LIKE '%" . $campo . "%' ";
                        break;
                    case 'empreendimento':
                        $sql .= " AND empreendimento LIKE '%" . $campo . "%' ";
                        break;
                    case 'n_licenca':
                        $sql .= " AND n_licenca LIKE '%" . $campo . "%' ";
                        break;
                }
            }
            //paginacao
            $limite = 30;
            $total_registro = $crudModel->read($sql, $arrayForm);
            $total_registro = empty($total_registro) ? array() : $total_registro;
            $paginas = count($total_registro) / $limite;
            $indice = 0;
            $pagina_atual = (isset($page) && !empty($page)) ? addslashes($page) : 1;
            $indice = ($pagina_atual - 1) * $limite;
            $dados["paginas"] = $paginas;
            $dados["pagina_atual"] = $pagina_atual;
            $dados['metodo_buscar'] = $parametros;
            $sql .= "  ORDER BY ano ASC LIMIT $indice,$limite ";
            $licencas_emitidas = $crudModel->read($sql, $arrayForm);
        } else {
            //paginacao
            $limite = 30;
            $total_registro = $crudModel->read_specific("SELECT COUNT(cod) AS qtd FROM licencas_emitidas");
            $paginas = $total_registro['qtd'] / $limite;
            $indice = 0;
            $pagina_atual = (isset($page) && !empty($page)) ? addslashes($page) : 1;
            $indice = ($pagina_atual - 1) * $limite;
            $dados["paginas"] = $paginas;
            $dados["pagina_atual"] = $pagina_atual;
            $dados['metodo_buscar'] = "";
            $sql .= " ORDER BY ano ASC LIMIT $indice,$limite";
            $licencas_emitidas = $crudModel->read($sql);
        }
        $dados['licencas'] = $licencas_emitidas;
        $this->loadTemplate($viewName, $dados);
    }

}

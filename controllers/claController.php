<?php

class claController extends controller
{

    public function index()
    {
        $dados = array();
        $viewName = 'cla/cla';
        $this->loadTemplate($viewName, $dados);
    }

    public function termos_de_referencia()
    {
        $dados = array();
        $viewName = 'cla/documento';

        $crudModel = new crud_db();
        $dados['name_page'] = "Termos de Referência";
        $dados['termos_de_referencia'] = $crudModel->read('SELECT * FROM termos_de_referencia WHERE status=1');
        $this->loadTemplate($viewName, $dados);
    }

    public function formularios()
    {
        $dados = array();
        $viewName = 'cla/documento';
        $crudModel = new crud_db();
        $dados['name_page'] = "Formulários";
        $dados['termos_de_referencia'] = $crudModel->read('SELECT * FROM formularios WHERE coordenacao="cla"');
        $this->loadTemplate($viewName, $dados);
    }


    public function get_enquadramento()
    {
        if (isset($_POST) && is_array($_POST) && !empty($_POST)) {
            $crudModel = new crud_db();
            $cod = addslashes($_POST['cod']);
            $resultado = $crudModel->read_specific("SELECT * FROM lic_enquadramento WHERE cod=:cod", array('cod' => $cod));
            echo json_encode($resultado, JSON_UNESCAPED_UNICODE);
        }
    }

    public function enquadramento()
    {
        $viewName = "cla/enquadramento";
        $dados = array();
        $dados['name_page'] = "Simulador de Taxa de Licença";
        $crudModel = new crud_db();
        $dados['tipologias'] = $crudModel->read("SELECT * FROM lic_enquadramento ORDER BY tipologia ASC");
        // cadastro
        if (isset($_POST['nSalvar']) && !empty($_POST['nSalvar'])) {
            $cadForm = array();
            //id
            if (!empty($_POST['nId'])) {
                $cadForm['cod'] = addslashes($_POST['nId']);
            }
            $cadForm['medida'] = addslashes($_POST['nLimite']);
            $resultado = $crudModel->read_specific("SELECT p.porte, p.limite_minimo, p.limite_maximo, e.* FROM lic_enquadramento as e INNER JOIN lic_enquadramento_porte as p WHERE e.cod=p.cod_enquadramento AND p.cod_enquadramento=:cod AND ((p.limite_minimo<:medida and p.limite_maximo>=:medida) OR (p.limite_minimo<:medida and p.limite_maximo=0)) LIMIT 1", $cadForm);
            if (is_array($resultado)) {
                $resultado['medida'] = $cadForm['medida'];
                $resultado['valor_taxa'] = $crudModel->read("SELECT * FROM lic_enquadramento_valor_taxa WHERE porte=:porte and potencial=:potencial", array('porte' => $resultado['porte'], 'potencial' => $resultado['potencial']));
            }

            $dados['resultado_enquadramento'] = $resultado;
        }
        $this->loadTemplate($viewName, $dados);
    }

    public function licencas_emitidas($page = 1)
    {
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
                    case 'n_protocolo':
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

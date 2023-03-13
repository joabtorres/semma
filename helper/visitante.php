<?php
class visitante
{
    private $ip, $mes, $data, $hora, $limite, $crudModel;

    public function __construct()
    {
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->data = date("Y-m-d");
        $this->mes = $this->getMes(date("Y-n"));
        $this->hora = date("H:i");
        $this->limite = 60 * 30; //30 minutos
        $this->crudModel = new crud_db;
    }

    public function verificaVisitante()
    {
        $array = array('ip' => $this->ip, 'data' => $this->data);
        $visitante = $this->crudModel->read_specific("SELECT * FROM  visitantes where ip=:ip and data=:data order by id desc", $array);
        if ($this->crudModel->getNumRows() == 0) {
            $this->inserirvisitante();
            $_SESSION['visitante'] = true;
        } else {
            if (!isset($_SESSION['visitante'])) {
                $horarioDB = strtotime($visitante['hora']);
                $horarioatual = strtotime($this->hora);
                $horariosubtracao = $horarioatual - $horarioDB;
                if ($horariosubtracao > $this->limite) {
                    $this->inserirvisitante();
                }
            }
        }
    }
    public function getMes($data)
    {
        $array = explode('-', $data);
        $meses = array(1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
        return $meses[$array[1]] . ' de ' . $array[0];
    }
    public function inserirVisitante()
    {
        $arrayCad = array(
            'ip' => $this->ip,
            'mes' => $this->mes,
            'data' => $this->data,
            'hora' => $this->hora
        );
        $this->crudModel->create('INSERT INTO visitantes (ip, mes, data, hora) VALUES (:ip, :mes, :data, :hora)', $arrayCad);
    }
}

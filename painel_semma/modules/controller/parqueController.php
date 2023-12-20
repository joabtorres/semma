
<?php
class parqueController
{
    private function __construct()
    {
    }
    public static function getInstance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new parqueController();
        }
        return $inst;
    }
    public function cadastrarAcao()
    {
        $arrayCad = $this->validarFormAcao();
        if (isset($arrayCad['error']) && !empty($arrayCad['error'])) {
            return $arrayCad['error'];
        } else {
            $crudModel = crudModel::getInstance();
            $cadHistorico = $crudModel->create("INSERT INTO parque_acoes (slug, nome, data, imagem, texto, status) VALUES (:slug, :nome, :data, :imagem, :texto, :status)", $arrayCad);
            if ($cadHistorico) {
                $_SESSION['historico_acao'] = true;
                $url = BASE_URL . "parque_acao/cadastrar";
                header("Location: {$url}");
            }
        }
    }

    private function validarFormAcao()
    {
        $arrayCad = array(
            'nome' => filter_input(INPUT_POST, 'nAcao', FILTER_SANITIZE_SPECIAL_CHARS),
            'slug' => filter_input(INPUT_POST, 'nSlug', FILTER_SANITIZE_SPECIAL_CHARS),
            'data' => filter_input(INPUT_POST, 'nData', FILTER_SANITIZE_SPECIAL_CHARS),
            'status' => filter_input(INPUT_POST, 'nStatus', FILTER_VALIDATE_INT),
            'texto' => filter_input(INPUT_POST, 'nDescricao', FILTER_SANITIZE_SPECIAL_CHARS),
        );
        $arrayCad['imagem'] = $this->imagemMiniatura($_FILES['nAnexo'], filter_input(INPUT_POST, 'nLinkAnexo'), $arrayCad['slug']);
        if (isset($arrayCad['anexo']['error'])) {
            $arrayCad['error'] = $arrayCad['anexo']['error'];
        }
        return $arrayCad;
    }

    private function imagemMiniatura(array $arquivo, string $url_file, string $slug)
    {
        if (!empty($arquivo['tmp_name'])) {
            if ($arquivo['type'] == 'image/png' || $arquivo['type'] == 'image/jpeg') {
                $imagem = array();
                $largura = 250;
                $altura = 167;
                $imagem['temp'] = $arquivo['tmp_name'];
                $imagem['extensao'] = explode(".", $arquivo['name']);
                $imagem['extensao'] = strtolower(end($imagem['extensao']));
                $imagem['name'] = md5(rand(0, 900000) . time()) . '.' . $imagem['extensao'];
                $imagem['diretorio'] = "uploads/parque/acoes_realizadas/{$slug}/";

                if (!is_dir("../{$imagem['diretorio']}")) {
                    mkdir("../{$imagem['diretorio']}", 0777, TRUE);
                }

                list($larguraOriginal, $alturaOriginal) = getimagesize($imagem['temp']);

                $ratio = max($largura / $larguraOriginal, $altura / $alturaOriginal);
                $alturaOriginal = $altura / $ratio;
                $x = ($larguraOriginal - $largura / $ratio) / 2;
                $larguraOriginal = $largura / $ratio;
                //$ratio = $larguraOriginal / $alturaOriginal;
                /*//para redimencionar 
                if ($largura / $altura > $ratio) {
                    $largura = $altura * $ratio;
                } else {
                    $altura = $largura / $ratio;
                }

                //para recortar
                if ($largura / $altura < $ratio) {
                    $y = $altura * $ratio / 2 - $altura;
                    $x = 0;
                } else {
                    $x = $largura * $ratio / 2 - $largura;
                    $y = 0;
                }*/
                $imagem_final = imagecreatetruecolor($largura, $altura);

                if ($imagem['extensao'] == 'jpg' || $imagem['extensao'] == 'jpeg') {
                    $imagem_original = imagecreatefromjpeg($imagem['temp']);
                    imagecopyresampled($imagem_final, $imagem_original,  0, 0, 0, $x, $largura, $altura, $larguraOriginal, $alturaOriginal);
                    imagejpeg($imagem_final, "../{$imagem['diretorio']}{$imagem['name']}", 90);
                } else if ($imagem['extensao'] == 'png') {
                    $imagem_original = imagecreatefrompng($imagem['temp']);
                    imagecopyresampled($imagem_final, $imagem_original, 0, 0, 0, $x, $largura, $altura, $larguraOriginal, $alturaOriginal);
                    imagepng($imagem_final, "../{$imagem['diretorio']}{$imagem['name']}");
                }
                $url_arquivo = $imagem['diretorio'] . $imagem['name'];

                if (!empty($url_file)) {
                    if (file_exists($url_file)) {
                        unlink($url_file); //arquivo removido 
                    }
                }
                return $url_arquivo;
            } else {
                return array('error' => 'Só é permitido carregar arquivos em: .JPG, .JPEG ou .PNG.');
            }
        } else {
            return $url_file;
        }
    }
}

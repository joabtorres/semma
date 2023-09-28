<?php

/*
 * config.php  - Este arquivo contem informações referente a: Conexão com banco de dados e URL Pádrão
 */

require 'environment.php';
$config = array();

//nome do projeto
define("NAME_PROJECT", "SEMMA - Secretaria Municipal de Meio Ambiente de Castanhal");
if (ENVIRONMENT == 'development') {
    //Raiz
    define("BASE_URL", "https://localhost/semma/");
    //Nome do banco
    $config['dbname'] = 'semma';
    //host
    $config['host'] = 'localhost';
    //usuario
    $config['dbuser'] = 'root';
    //senha
    $config['dbpass'] = '';
} else {
     //Raiz
    define("BASE_URL", "https://localhost/sispam/");
    //Nome do banco
    $config['dbname'] = 'NOMEDOBANCO';
    //host
    $config['host'] = 'localhost';
    //usuario
    $config['dbuser'] = 'root';
    //senha
    $config['dbpass'] = '';
}
?>

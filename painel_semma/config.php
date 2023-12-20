<?php
/*
 * Environment - define o ambiente que desejo acessa
 * 	development - desenvolvimento
 * 	prodution - repositório web
 */
define("ENVIRONMENT", "development");

//nome do projeto
define("NAME_PROJECT", "Painel Adminstrativo da Secretaria Múnicipal de Meio Ambiente de Castanhal");

$config = array();
//Raiz
define("BASE_URL", "https://localhost/semma/painel_semma/");
define("BASE_URL_SITE", "https://localhost/semma/");

if (ENVIRONMENT == 'development') {
    //Nome do banco
    $config['db']['dbname'] = 'semma';
    //host
    $config['db']['host'] = 'localhost';
    //usuario
    $config['db']['user'] = 'root';
    //senha
    $config['db']['pass'] = '';
} else {
	//Nome do banco
    $config['db']['dbname'] = 'semma';
    //host
    $config['db']['host'] = 'localhost';
    //usuario
    $config['db']['user'] = 'root';
    //senha
    $config['db']['pass'] = '';
};
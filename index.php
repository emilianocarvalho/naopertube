<?php

    // ----- importa arquivo de configuração de sistema -----
    include ('config.php');

    define('TITLE', 'Não Pertube');
    define('INFO_PF', 'Pessoa Física');
    define('INFO_PJ', 'Pessoa Jurídica');
    define('KEY_WORDS', "Procon pb, Não Pertube, Bloqueiar Telemarketing");

    $PATH_CSS_BOOTSTRAP = 'views/assets/bootstrap/css/bootstrap.min.css';
    $PATH_CSS_STYLE = 'views/assets/css/style.css';

    $PATH_IMG_LOGO = 'views/assets/img/procon.png';

    $PATH_LINK_LOGIN = 'controller/login.php?action=login';
    $PATH_LINK_REGISTER = 'controller/validarFormulario.php?action=save';

    $PATH_JS_JAQUERY = 'views/assets/js/jquery-1.8.2.min.js';
    $PATH_JS_BOOTSTRAP = 'views/assets/bootstrap/js/bootstrap.min.js';
    $PATH_JS = 'views/assets/js/scripts.js';

    // ----- importar o head do html -----
    include('views/tampletes/header.tpl');
    // ----- importar o conteudo html -----
    include('views/tampletes/contenter.tpl');



/*// ----- verificar instacia de classe -----
echo "Teste classe";
include('controller/include/classe_teste.php');
$classe = new Classe();
echo $classe->getTxt()."<br>";
var_dump($classe);
*/

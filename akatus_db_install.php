<?php

#Configuração da loja Opencart
require_once('config.php');
   
#Inicialização
require_once(DIR_SYSTEM . 'startup.php');

#banco de dados 
$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (script_already_executed($db)) {

    header("HTTP/1.0 404 Not Found");

} else {

    $query = $db->query("SELECT COUNT( * ) AS `Registros` , `language_id` FROM `" . DB_PREFIX. "order_status` GROUP BY `language_id` ORDER BY `language_id`");

    foreach ($query->rows as $reg) {
        $db->query("INSERT INTO `" . DB_PREFIX . "order_status` (`order_status_id`, `language_id`, `name`) VALUES
        (10200, " . $reg['language_id'] . ", 'Aguardando Pagamento'),
        (10201, " . $reg['language_id'] . ", 'Em Analise'),
        (10202, " . $reg['language_id'] . ", 'Aprovado'),
        (10203, " . $reg['language_id'] . ", 'Cancelado'),
        (10204, " . $reg['language_id'] . ", 'Completo'),
        (10205, " . $reg['language_id'] . ", 'Devolvido'),
        (10206, " . $reg['language_id'] . ", 'Estornado');");
    }

    echo "Os status das transacoes da Akatus foram inseridos com sucesso!";
}

function script_already_executed($db) {
    $result = $db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id >= 10200");

    if (! empty($result->rows)) {
        return true;
    }

    return false;
 }

?>

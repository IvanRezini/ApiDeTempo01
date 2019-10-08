
<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

$baseUrl = 'http://api.openweathermap.org';
$appid = '91053a894f38e61bf8173867de57bf7f';
$id = '3468879';

try {
    $client = new Client(array('base_uri' => $baseUrl));
    $response = $client->get('/data/2.5/weather', array(
        'query' => array('appid' => $appid, 'id' => $id)
    ));
    $tempo = json_decode($response->getBody());
    //serializa os dados.
    $dadosSerializados = serialize($tempo);
    
//printa o objeto
//print_r($tempo);
//
//printa  instancias do objeto
    //echo 'Temperatura atual: ', $tempo->main->temp - 273;
   // echo '<br/>';
   // echo 'Presão: ', $tempo->main->pressure;
   // echo '<br/>';
   // echo 'Temperatura Maxima: ', $tempo->main->temp_max - 273;
   // echo '<br/>';
   // echo 'Temperatura Minima: ', $tempo->main->temp_min - 273;
   // echo '<br/>';
   // echo 'Umidade: ', $tempo->main->humidity ;
   // echo '<br/>';
    
  
} catch (ClientException $e) {

    echo 'Falha ao obter informações';
}
?>

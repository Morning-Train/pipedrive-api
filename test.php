<?php

require 'vendor/autoload.php';

require 'pipedrive/PipedriveApi.php';

define('PIPEDRIVE_API_KEY', '068f7f3e64b280a092216fc6e88d7afaada21f38');

$pipedrive_client = new PipedriveApi(PIPEDRIVE_API_KEY);


echo '<pre>';

// $result = $pipedrive_client->getDeals([ 
// 	'filter_id' => '5',
// 	'start' => '45',
// 	'limit' => '10',
// 	'sort' => null,
// 	'owned_by_you' => '1'
// 	]);

// $result = $pipedrive_client->getDealById(1);

// $result = $pipedrive_client->getDealFollowers(1);

$result = $pipedrive_client->getDealProducts(1, [ 
	'start' => '45',
	'limit' => '10',
	'include_product_data' => '1'
	]);



if(isset($result)){
	var_dump($result);
}

echo '</pre>';
?>
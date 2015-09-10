<?php

require 'vendor/autoload.php';

require 'pipedrive/PipedriveApi.php';

define('PIPEDRIVE_API_KEY', '068f7f3e64b280a092216fc6e88d7afaada21f38');

$pipedrive_client = new PipedriveApi(PIPEDRIVE_API_KEY);


echo '<pre>';

// $result = $pipedrive_client->getDeals([ 
// 	'filter_id' => null,
// 	'start' => '0',
// 	'limit' => '10',
// 	'sort' => null,
// 	'owned_by_you' => '1'
// 	]);

// $result = $pipedrive_client->getDealById(1);

// $result = $pipedrive_client->getDealFollowers(1);

// $result = $pipedrive_client->getDealProducts(1, [ 
// 	'start' => '1',
// 	'limit' => '10',
// 	'include_product_data' => '1'
// 	]);

// $result = $pipedrive_client->getDealActivities(1, [ 
// 	'start' => '1',
// 	'limit' => '10',
// 	'done' => '1',
// 	'exclude' => null
// 	]);

// $result = $pipedrive_client->getDealUpdates(1, [ 
// 	'start' => '1',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getDealParticipants(1, [ 
// 	'start' => '1',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getDealFiles(1, [ 
// 	'start' => '1',
// 	'limit' => '10',
// 	'include_deleted_files' => '0',
// 	'sort' => null
// 	]);

// $result = $pipedrive_client->getDealPermittedUsers(1, 3);

// $result = $pipedrive_client->getDealEmailMessages(1, [ 
// 	'start' => '1',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getDealsByName([ 
// 	'term' => 'awesome deal',
// 	'person_id' => '10',
// 	'org_id' => '12'
// 	]);

$result = $pipedrive_client->getDealsTimeline([ 
	'start_date' => '2015-05-13',
	'interval' => 'day',
	'amount' => '12',
	'field_key' => 'add_time',
	'user_id' => null,
	'pipeline_id' => null,
	'filter_id' => null,
	'exclude_deals' => null,
	'totals_convert_currency' => null
	]);

if(isset($result)){
	var_dump($result);
}

echo '</pre>';
?>
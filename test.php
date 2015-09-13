<?php

require 'vendor/autoload.php';

require 'pipedrive/PipedriveApi.php';

define('PIPEDRIVE_API_KEY', '068f7f3e64b280a092216fc6e88d7afaada21f38');

$pipedrive_client = new PipedriveApi(PIPEDRIVE_API_KEY);


echo '<pre>';

/* DEALS */

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

// $result = $pipedrive_client->getDealsTimeline([ 
// 	'start_date' => '2015-05-13',
// 	'interval' => 'day',
// 	'amount' => '12',
// 	'field_key' => 'add_time',
// 	'user_id' => null,
// 	'pipeline_id' => null,
// 	'filter_id' => null,
// 	'exclude_deals' => null,
// 	'totals_convert_currency' => null
// 	]);

/* ORGANIZATIONS */

// $result = $pipedrive_client->getOrganizations([ 
// 	'filter_id' => null,
// 	'start' => '0',
// 	'limit' => '10',
// 	'sort' => null
// 	]);

// $result = $pipedrive_client->getOrganizationById(1);

// $result = $pipedrive_client->getOrganizationFiles(1, [ 
// 	'start' => '1',
// 	'limit' => '10',
// 	'include_deleted_files' => '0',
// 	'sort' => null
// 	]);

// $result = $pipedrive_client->getOrganizationEmailMessages(1, [ 
// 	'start' => '1',
// 	'limit' => '12'
// 	]);

// $result = $pipedrive_client->getOrganizationFollowers(1);

// $result = $pipedrive_client->getOrganizationPersons(1, [ 
// 	'start' => '1',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getOrganizationDeals(1, [ 
// 	'start' => '1',
// 	'limit' => '10',
// 	'status' => 'all_not_deleted',
// 	'sort' => null,
// 	'only_primary_association' => null
// 	]);

// $result = $pipedrive_client->getOrganizationActivities(1, [ 
// 	'start' => '1',
// 	'limit' => '12',
// 	'done' => null,
// 	'exclude' => null
// 	]);

// $result = $pipedrive_client->getOrganizationUpdates(1, [ 
// 	'start' => '1',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getOrganizationPermittedUsers(1, 3);

// $result = $pipedrive_client->getOrganizationsByName([
// 	'term' => 'mohamed',
// 	'start' => '1',
// 	'limit' => '10'
// 	]);

/* PERSONS */

// $result = $pipedrive_client->getPersons([ 
// 	'filter_id' => null,
// 	'start' => '0',
// 	'limit' => '10',
// 	'sort' => null
// 	]);

// $result = $pipedrive_client->getPersonById(1);

// $result = $pipedrive_client->getPersonFiles(1, [ 
// 	'start' => '0',
// 	'limit' => '10',
// 	'include_deleted_files' => '1',
// 	'sort' => null
// 	]);

// $result = $pipedrive_client->getPersonFiles(1, [ 
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getPersonEmailMessages(1, [ 
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getPersonFollowers(1);

// $result = $pipedrive_client->getPersonProducts(1, [ 
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getPersonDeals(1, [
// 	'start' => '0',
// 	'limit' => '10',
// 	'status' => null,
// 	'sort' => null
// 	]);

// $result = $pipedrive_client->getPersonUpdates(1, [ 
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getPersonActivities(1, [ 
// 	'start' => '0',
// 	'limit' => '10',
// 	'done' => null,
// 	'exclude' => null
// 	]);

// $result = $pipedrive_client->getPersonPermittedUsers(1, 3);

// $result = $pipedrive_client->getPersonsByName([
// 	'term' => 'mohamed',
// 	'org_id' => null,
// 	'start' => '1',
// 	'limit' => '10',
// 	'search_by_email' => null
// 	]);

/* PIPELINES */

// $result = getAllPipelines();

// $result = getPipelineById(1);

// $result = $pipedrive_client->getPipelineDeals(1, [
// 	'filter_id' => null,
// 	'user_id' => null,
// 	'everyone' => null,
// 	'stage_id' => null,
// 	'start' => '1',
// 	'limit' => '10',
// 	'get_summary' => null,
// 	'total_convert_currency' => null
// 	]);

// $result = $pipedrive_client->getPipelineConversionRatesStats(1, [
// 	'start_date' => '2015-05-12',
// 	'end_date' => '2015-09-12',
// 	'user_id' => null
// 	]);

// $result = $pipedrive_client->getPipelineMovementsStats(1, [
// 	'start_date' => '2015-05-12',
// 	'end_date' => '2015-09-12',
// 	'user_id' => null
// 	]);



if(isset($result)){
	var_dump($result);
}

echo '</pre>';
?>
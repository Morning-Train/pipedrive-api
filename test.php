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

// $result = $pipedrive_client->createDeal([
// 	'title' => 'Created by API',
// 	'value' => '6000',
// 	'currency' => 'DKK',
// 	'user_id' => '825469',
// 	'person_id' => null,
// 	'org_id' => null,
// 	'stage_id' => null,
// 	'status' => null,
// 	'lost_reason' => null,
// 	'add_time' => null,
// 	'visible_to' => null
// 	]);

// $result = $pipedrive_client->updateDeal(3, [
// 	'title' => 'Updated by API',
// 	'value' => '6000',
// 	'currency' => 'DKK',
// 	'user_id' => '825469',
// 	'person_id' => null,
// 	'org_id' => null,
// 	'stage_id' => null,
// 	'status' => null,
// 	'lost_reason' => null,
// 	'add_time' => null,
// 	'visible_to' => null
// 	]);

// $result = $pipedrive_client->deleteDeal(5);

// $result = $pipedrive_client->deleteMultipleDeals([
// 	'ids' => '6,7,8'
// 	]);

// $result = $pipedrive_client->duplicateDeal(3);

// $result = $pipedrive_client->mergeDeal(4, [
// 	'merge_with_id' => 9
// 	]);

// $result = $pipedrive_client->followDeal(3, [
// 	'user_id' => 825469
// 	]);

// $result = $pipedrive_client->getDealFollowers(3);

// $result = $pipedrive_client->unfollowDeal(3, 825469);

// $result = $pipedrive_client->getDealProducts(1, [ 
// 	'start' => '1',
// 	'limit' => '10',
// 	'include_product_data' => '1'
// 	]);

// $result = $pipedrive_client->addProductToDeal(3, [
// 	'product_id' => 825469,
// 	'item_price' => 200,
// 	'quantity' => 5,
// 	'discount_percentage' => null,
// 	'duration' => null,
// 	'product_variation_id' => null,
// 	'comment' => null,
// 	'enabled_flag' => null
// 	]);

// $result = $pipedrive_client->updateDealProduct(3, 825469, [
// 	'item_price' => 200,
// 	'quantity' => 5,
// 	'discount_percentage' => null,
// 	'duration' => null,
// 	'product_variation_id' => null,
// 	'comment' => null,
// 	'enabled_flag' => null
// 	]);

// $result = $pipedrive_client->removeProductFromDeal(3, [
// 	'product_attachment_id' => 1,
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

// $result = $pipedrive_client->addParticipantToDeal(3, [
// 	'person_id' => 1,
// 	]);

// $result = $pipedrive_client->getDealParticipants(1, [ 
// 	'start' => '1',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->removeParticipantFromDeal(3, 1);

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

// $result = $pipedrive_client->createOrganization([ 
// 	'name' => 'org created by the API',
// 	'owner_id' => null,
// 	'visible_to' => null,
// 	'add_time' => null
// 	]);

// $result = $pipedrive_client->updateOrganization(1, [ 
// 	'name' => 'org created by the API',
// 	'owner_id' => null,
// 	'visible_to' => null,
// 	]);

// $result = $pipedrive_client->deleteOrganization(1);

// $result = $pipedrive_client->deleteMultipleOrganizations([
// 	'ids' => '1,2,3'
// 	]);

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

// $result = $pipedrive_client->followOrganization(1, [
// 	'user_id' => 825469
// 	]);

// $result = $pipedrive_client->getOrganizationFollowers(1);

// $result = $pipedrive_client->unfollowOrganization(1, 825469);

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

// $result = $pipedrive_client->getOrganizationPermittedUsers(1, [
// 	'access_level' => '3'
// 	]);

// $result = $pipedrive_client->mergeOrganization(1, [
// 	'merge_with_id' => '3'
// 	]);

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

// $result = $pipedrive_client->createPerson([ 
// 	'name' => 'Mohamed Api',
// 	'owner_id' => null,
// 	'org_id' => null,
// 	'email' => null,
// 	'phone' => null,
// 	'visible_to' => null,
// 	'add_time' => null
// 	]);

// $result = $pipedrive_client->updatePerson(1, [ 
// 	'name' => 'Mohamed Api',
// 	'owner_id' => null,
// 	'org_id' => null,
// 	'email' => null,
// 	'phone' => null,
// 	'visible_to' => null,
// 	]);

// $result = $pipedrive_client->deletePerson(1);

// $result = $pipedrive_client->deleteMultiplePersons([
// 	'ids' => '1,2,3'
// 	]);

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

// $result = $pipedrive_client->followPerson(1, [ 
// 	'user_id' => '04545'
// 	]);

// $result = $pipedrive_client->getPersonFollowers(1);

// $result = $pipedrive_client->unfollowPerson(1, 548798);

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

// $result = $pipedrive_client->getPersonPermittedUsers(1, [
// 	'access_level' => '3'
// 	]);

// $result = $pipedrive_client->mergePerson(1, [
// 	'merge_with_id' => '3'
// 	]);

// $result = $pipedrive_client->getPersonsByName([
// 	'term' => 'mohamed',
// 	'org_id' => null,
// 	'start' => '1',
// 	'limit' => '10',
// 	'search_by_email' => null
// 	]);

// $result = $pipedrive_client->addPersonPicture(1, [
// 	'file' => 'me.jpg',
// 	'crop_x' => null,
// 	'crop_y' => null,
// 	'crop_width' => null,
// 	'crop_height' => null
// 	]);

// $result = $pipedrive_client->deletePersonPicture(1);

/* PIPELINES */

// $result = $pipedrive_client->getAllPipelines();

// $result = $pipedrive_client->getPipelineById(1);

// $result = $pipedrive_client->createPipeline([
// 	'name' => 'Created by API',
// 	'order_nr' => null,
// 	'active' => null
// 	]);

// $result = $pipedrive_client->updatePipeline(1, [
// 	'name' => 'Updated by API',
// 	'order_nr' => null,
// 	'active' => 1
// 	]);

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

// $result = $pipedrive_client->deletePipeline(2);

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

/* PRODUCTS */

// $result = $pipedrive_client->getAllProducts([
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getProductById(1);

// $result = $pipedrive_client->getProductDeals(1, [
// 	'start' => '0',
// 	'limit' => '10',
// 	'status' => null
// 	]);

// $result = $pipedrive_client->getProductFiles(1, [
// 	'start' => '0',
// 	'limit' => '10',
// 	'include_deleted_files' => null,
// 	'sort' => null
// 	]);

// $result = $pipedrive_client->getProductPermittedUsers(1, [
// 	'access_level' => '3'
// 	]);

// $result = $pipedrive_client->getProductsByName([
// 	'term' => '12',
// 	'currency' => 'DKK',
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

/* PUSH NOTIFICATIONS */

// $result = $pipedrive_client->getAllPushNotifications();

// $result = $pipedrive_client->getPushNotificationById(1);

/* STAGES */

// $result = $pipedrive_client->getStages([
// 	'pipeline_id' => null
// 	]);

// $result = $pipedrive_client->getStageById(1);

// $result = $pipedrive_client->getStageDeals(1, [
// 	'filter_id' => null,
// 	'user_id' => null,
// 	'everyone' => null,
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

/* USERS */

// $result = $pipedrive_client->getAllUsers();

// $result = $pipedrive_client->getUserById(825469);

// $result = $pipedrive_client->getUserActivities(825469, [
// 	'due_date' => null,
// 	'type' => null,
// 	'start' => '0',
// 	'limit' => '10',
// 	'done' => null
// 	]);

// $result = $pipedrive_client->getUserFollowers(825469);

// $result = $pipedrive_client->getUserUpdates(825469, [
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getUserPermissionSetAssignments(825469, [
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getUserRoleAssignments(825469, [
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getUserRoleSettings(825469);

// $result = $pipedrive_client->getUserPermissions(825469);

// $result = $pipedrive_client->getUserPermittedItems(825469, [
// 	'access_level' => null
// 	]);

// $result = $pipedrive_client->getUsersByName([
// 	'term' => 'mohamed'
// 	]);

//$result = $pipedrive_client->getUserBlacklistedEmails(825469);

if(isset($result)){
	var_dump($result);
}

echo '</pre>';
?>
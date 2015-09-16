<?php

require 'vendor/autoload.php';

require 'pipedrive/PipedriveApi.php';

define('PIPEDRIVE_API_KEY', '068f7f3e64b280a092216fc6e88d7afaada21f38');

$pipedrive_client = new PipedriveApi(PIPEDRIVE_API_KEY);


echo '<pre>';

/* ACTIVITIES */

// $result = $pipedrive_client->getActivities([ 
// 	'user_id' => null,
// 	'type' => null,
// 	'start' => '1',
// 	'limit' => '10',
// 	'start_date' => null,
// 	'end_date' => null,
// 	'done' => null
// 	]);

// $result = $pipedrive_client->getActivityById(1);

// $result = $pipedrive_client->createActivity([ 
// 	'subject' => 'created by API',
// 	'done' => null,
// 	'type' => 'type_1',
// 	'due_date' => null,
// 	'due_time' => null,
// 	'duration' => null,
// 	'user_id' => null,
// 	'deal_id' => null,
// 	'person_id' => null,
// 	'org_id' => null,
// 	'note' => null,
// 	]);

// $result = $pipedrive_client->updateActivity(1, [ 
// 	'subject' => 'created by API',
// 	'done' => null,
// 	'type' => 'type_1',
// 	'due_date' => null,
// 	'due_time' => null,
// 	'duration' => null,
// 	'user_id' => null,
// 	'deal_id' => null,
// 	'person_id' => null,
// 	'org_id' => null,
// 	'note' => null,
// 	]);

// $result = $pipedrive_client->deleteActivity(1);

// $result = $pipedrive_client->deleteMultipleActivities([
// 	'ids' => '1,2,3'
// 	]);

/* ACTIVITY TYPES */

// $result = $pipedrive_client->getActivityTypes();

// $result = $pipedrive_client->createActivityType([
// 	'name' => 'type_1',
// 	'icon_key' => 'task',
// 	'color' => 'red'
// 	]);

// $result = $pipedrive_client->updateActivityType(1, [
// 	'name' => 'type_1',
// 	'icon_key' => 'task',
// 	'color' => 'red',
// 	'order_nr' => 1
// 	]);

// $result = $pipedrive_client->deleteActivityType(1);

// $result = $pipedrive_client->deleteMultipleActivityTypes([
// 	'ids' => '1,2,3'
// 	]);

/* AUTHORIZATIONS */

// $result = $pipedrive_client->getAuthorizations([
// 	'email' => 'foo@bar.com',
// 	'password' => '123456'
// 	]);

/* CURRENCIES */

// $result = $pipedrive_client->getCurrencies([
// 	'term' => null
// 	]);

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

/* DEAL FIELDS */

// $result = $pipedrive_client->getAllDealFields();

// $result = $pipedrive_client->getDealFieldById(1);

// $result = $pipedrive_client->createDealField([
// 	'name' => 'created by API',
// 	'field_type' => 'text',
// 	'options' => null
// 	]);

// $result = $pipedrive_client->updateDealField(12466, [
// 	'name' => 'updated by API',
// 	'options' => null
// 	]);

// $result = $pipedrive_client->deleteDealField(12466);

// $result = $pipedrive_client->deleteMultipleDealFields([
// 	'ids' => '1,2,3'
// 	]);

/* EMAIL MESSAAGES */

// $result = $pipedrive_client->getEmailMessageById(1, [
// 	'include_body' => '1'
// 	]);

// $result = $pipedrive_client->updateEmailMessage(1, [
// 	'read_flag' => '1'
// 	]);

// $result = $pipedrive_client->deleteEmailMessage(1);

// $result = $pipedrive_client->deleteMultipleEmailMessages([
// 	'ids' => '1,2,3'
// 	]);

/* EMAIL THREADS */

// $result = $pipedrive_client->getEmailThreads([
// 	'label' => '',
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->getEmailThreadById(1);

// $result = $pipedrive_client->updateEmailThread(1, [
// 	'deal_id' => null,
// 	'shared_flag' => 1,
// 	'labels' => null,
// 	'org_ids' => null
// 	]);

// $result = $pipedrive_client->deleteEmailThread(1);

// $result = $pipedrive_client->deleteMultipleEmailThreads([
// 	'ids' => '1,2,3'
// 	]);

// $result = $pipedrive_client->getEmailThreadMessages(1, [
// 	'include_body' => '',
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

/* FILES */

// $result = $pipedrive_client->getFiles([
// 	'start' => 0,
// 	'limit' => 10,
// 	'include_deleted_files' => null,
// 	'sort' => null
// 	]);

// $result = $pipedrive_client->getFileById(1);

// $result = $pipedrive_client->downloadFile(1);

// $result = $pipedrive_client->addFiles([
// 	'file' => 'pic.png',
// 	'deal_id' => null,
// 	'person_id' => null,
// 	'org_id' => null,
// 	'product_id' => null,
// 	'activity_id' => null,
// 	'note_id' => null
// 	]);

// $result = $pipedrive_client->createRemoteFile([
// 	'file_type' => 'gdoc',
// 	'title' => 'created by API',
// 	'item_type' => 'deal',
// 	'item_id' => 1,
// 	'remote_location' => 'googledrive'
// 	]);

// $result = $pipedrive_client->linkRemoteFileToItem([
// 	'item_type' => 'deal',
// 	'item_id' => 1,
// 	'remote_id' => 2,
// 	'remote_location' => 'googledrive'
// 	]);

// $result = $pipedrive_client->updateFile(1, [
// 	'id' => '1',
// 	'name' => 'updated by Api',
// 	'description' => 'bla bla bla',
// 	]);

// $result = $pipedrive_client->deleteFile(1);

/* FILTERS */

// $result = $pipedrive_client->getFilters([
// 	'type' => null
// 	]);

// $result = $pipedrive_client->getFilterById(1);

// $conditions = [
// 	'condition' => [
// 		'glue' => 'and',
// 		'conditions' => [
// 			[
// 				'glue' => 'and',
// 				'conditions' =>[
// 					'object' => 'deal',
//                     'field_id' => '12443',
//                     'operator' => '=',
//                     'value' => 'lost',
//                     'extra_value' => null
// 				]
// 			],
// 			[
// 				'glue' => 'or',
// 				'conditions' =>[]
// 			]
// 		]
// 	]
// ];

// $result = $pipedrive_client->createFilter([
// 	'name' => 'created by Id',
// 	'conditions' => json_encode($conditions),
// 	'type' => 'deals'
// 	]);

// $conditions = [
// 	'condition' => [
// 		'glue' => 'and',
// 		'conditions' => [
// 			[
// 				'glue' => 'and',
// 				'conditions' =>[
// 					'object' => 'deal',
//                     'field_id' => '12443',
//                     'operator' => '=',
//                     'value' => 'lost',
//                     'extra_value' => null
// 				]
// 			],
// 			[
// 				'glue' => 'or',
// 				'conditions' =>[]
// 			]
// 		]
// 	]
// ];

// $result = $pipedrive_client->updateFilter(15, [
// 	'name' => 'updated by Id',
// 	'conditions' => json_encode($conditions),
// 	'type' => 'deals'
// 	]);

// $result = $pipedrive_client->deleteFilter(15);

// $result = $pipedrive_client->deleteMultipleFilters([
// 	'ids' => '1,2,3'
// 	]);

/* GLOBAL MESSAGES */

// $result = $pipedrive_client->getGlobalMessages([
// 	'limit' => 10
// 	]);

// $result = $pipedrive_client->deleteGlobalMessage(1);

/* GOALS */

// $result = $pipedrive_client->getGoals([
// 	'user_id' => null,
// 	'everyone' => null
// 	]);

// $result = $pipedrive_client->getGoalById(1);

// $result = $pipedrive_client->createGoal([
// 	'goal_type' => 'stage',
// 	'expected_type' => 'expected_num',
// 	'user_id' => null,
// 	'stage_id' => '1',
// 	'period' => 'week',
// 	'expected' => 1000,
// 	'currency' => null,
// 	'pipeline_id' => null
// 	]);

// $result = $pipedrive_client->updateGoal(1, [
// 	'goal_type' => 'stage',
// 	'expected_type' => 'expected_num',
// 	'user_id' => null,
// 	'stage_id' => 1,
// 	'period' => 'week',
// 	'expected' => 1000,
// 	'currency' => null,
// 	'pipeline_id' => null
// 	]);

// $result = $pipedrive_client->deleteGoal(1);

// $result = $pipedrive_client->getGoalResults(1, [
// 	'period_start' => null,
// 	'period_end' => null
// 	]);

/* NOTES */

// $result = $pipedrive_client->getAllNotes();

// $result = $pipedrive_client->getNoteById(1);

// $result = $pipedrive_client->createNote([
// 	'content' => '',
// 	'deal_id' => null,
// 	'person_id' => null,
// 	'org_id' => null,
// 	'pinned_to_deal_flag' => null,
// 	'pinned_to_organization_flag' => null,
// 	'pinned_to_person_flag' => null
// 	]);

// $result = $pipedrive_client->updateNote(1, [
// 	'content' => '',
// 	'deal_id' => null,
// 	'person_id' => null,
// 	'org_id' => null,
// 	'pinned_to_deal_flag' => null,
// 	'pinned_to_organization_flag' => null,
// 	'pinned_to_person_flag' => null
// 	]);

// $result = $pipedrive_client->deleteNote(1);

/* ORGANIZATION FIELDS */

// $result = $pipedrive_client->getAllOrganizationFields();

// $result = $pipedrive_client->getOrganizationFieldById(3992);

// $result = $pipedrive_client->createOrganizationField([
// 	'name' => 'created by API',
// 	'field_type' => 'varchar',
// 	'option' => null
// 	]);

// $result = $pipedrive_client->updateOrganizationField(4011, [
// 	'name' => 'updated by API',
// 	'option' => null
// 	]);

// $result = $pipedrive_client->deleteOrganizationField(4011);

// $result = $pipedrive_client->deleteMultipleOrganizationFields([
// 	'ids' => '1,2,3'
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

/* ORGANIZATION RELATIONSHIPS */

// $result = $pipedrive_client->getOrganizationRelationships([
// 	'org_id' => '1'
// 	]);

// $result = $pipedrive_client->getOrganizationRelationshipById(1, [
// 	'org_id' => '1'
// 	]);

// $result = $pipedrive_client->createOrganizationRelationship([
// 	'org_id' => '1',
// 	'type' => 'parent',
// 	'rel_owner_org_id' => '2',
// 	'rel_linked_org_id' => '3'
// 	]);

// $result = $pipedrive_client->updateOrganizationRelationship(1, [
// 	'org_id' => '1',
// 	'type' => 'parent',
// 	'rel_owner_org_id' => '1',
// 	'rel_linked_org_id' => '2'
// 	]);

// $result = $pipedrive_client->deleteOrganizationRelationship(1);

/* PERMISSION SETS */

// $result = $pipedrive_client->getAllPermissionSets();

// $result = $pipedrive_client->getPermissionSetById(1);

// $result = $pipedrive_client->updatePermissionSet(1, [
// 	'comment' => 'bla bla bla'
// 	]);

// $result = $pipedrive_client->getPermissionSetAssignments(1, [
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->addPermissionSetAssignment(1, [
// 	'user_id' => '1'
// 	]);

// $result = $pipedrive_client->deletePermissionSetAssignment(1, [
// 	'user_id' => '1'
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

/* PERSON FIELDS */

// $result = $pipedrive_client->getAllPersonFields();

// $result = $pipedrive_client->getPersonFieldById(9028);

// $result = $pipedrive_client->addPersonField([
// 	'name' => 'age',
// 	'field_type' => 'double',
// 	'options' => null
// 	]);

// $result = $pipedrive_client->updatePersonField(9047, [
// 	'name' => 'age',
// 	'options' => null
// 	]);

// $result = $pipedrive_client->deletePersonField(9047);

// $result = $pipedrive_client->deleteMultiplePersonFields([
// 	'ids' => '9047,9029,9030'
// 	]);

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

// $result = $pipedrive_client->createProduct([
// 	'name' => 'created by api',
// 	'code' => null,
// 	'unit' => null,
// 	'tax' => null,
// 	'active_flag' => 1,
// 	'visible_to' => null,
// 	'owner_id' => null,
// 	]);

// $result = $pipedrive_client->updateProduct(1, [
// 	'name' => 'created by api',
// 	'code' => null,
// 	'unit' => null,
// 	'tax' => null,
// 	'active_flag' => 1,
// 	'visible_to' => null,
// 	'owner_id' => null,
// 	'prices' => null
// 	]);

// $result = $pipedrive_client->deleteProduct(1);

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

/* PRODUCT FIELDS */

// $result = $pipedrive_client->getAllproductFields();

// $result = $pipedrive_client->getProductFieldById(13);

// $result = $pipedrive_client->addProductField([
// 	'name' => 'Created by API',
// 	'field_type' => 'text',
// 	'options' => null
// 	]);

// $result = $pipedrive_client->updateProductField(22, [
// 	'name' => 'Updated by API',
// 	'options' => null
// 	]);

// $result = $pipedrive_client->deleteProductField(22);

// $result = $pipedrive_client->deleteMultipleProductFields([
// 	'ids' => '23,24,25'
// 	]);

/* PUSH NOTIFICATIONS */

// $result = $pipedrive_client->getAllPushNotifications();

// $result = $pipedrive_client->getPushNotificationById(1);

// $result = $pipedrive_client->createPushNotification([
// 	'user_id' => 825469,
// 	'subscription_url' => 'google.com',
// 	'event' => 'message',
// 	'http_auth_user' => null,
// 	'http_auth_password' => null
// 	]);

// $result = $pipedrive_client->deletePushNotification(1);

/* RECENT */

// $result = $pipedrive_client->getRecents([
// 	'since_timestamp' => '2015-08-01 00:00:00',
// 	'items' => 'deal',
// 	'start' => 0,
// 	'limit' => 10
// 	]);

/* ROLES */

// $result = $pipedrive_client->getAllRoles([
// 	'start' => 0,
// 	'limit' => 10
// 	]);

// $result = $pipedrive_client->getRoleById(1);

// $result = $pipedrive_client->createRole([
// 	'parent_role_id' => null,
// 	'name' => 'role created by API'
// 	]);

// $result = $pipedrive_client->updateRole(1, [
// 	'parent_role_id' => null,
// 	'name' => 'role updated by API'
// 	]);

// $result = $pipedrive_client->deleteRole(1);

// $result = $pipedrive_client->getSubRoles(1, [
// 	'start' => 0,
// 	'limit' => 10
// 	]);

// $result = $pipedrive_client->getRoleAssignments(1, [
// 	'start' => 0,
// 	'limit' => 10
// 	]);

// $result = $pipedrive_client->assignRole(1, [
// 	'user_id' => 1,
// 	]);

// $result = $pipedrive_client->unassignRole(1, [
// 	'user_id' => 1,
// 	]);

// $result = $pipedrive_client->getRoleSettings(1);

// $result = $pipedrive_client->addRoleSetting(1, [
// 	'setting_key' => 'org_access_level',
// 	'value' => 0
// 	]);

/* SEARCH RESULTS */

// $result = $pipedrive_client->search([
// 	'term' => 'deal',
// 	'term_type' => null,
// 	'start' => 0,
// 	'limit' => 10
// 	]);

// $result = $pipedrive_client->searchField([
// 	'term' => 'name',
// 	'exact_match' => null,
// 	'field_type' => 'dealField',
// 	'field_key' => 548787,
// 	'return_field_key' => null,
// 	'return_item_ids' => null,
// 	'start' => 0,
// 	'limit' => 10
// 	]);

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

// $result = $pipedrive_client->createStage([
// 	'name' => 'Stage created by Api',
// 	'pipeline_id' => 1,
// 	'deal_probability' => null,
// 	'rotten_flag' => null,
// 	'rotten_days' => null
// 	]);

// $result = $pipedrive_client->updateStage(7, [
// 	'name' => 'Stage updated by Api',
// 	'pipeline_id' => 1,
// 	'order_nr' => null,
// 	'deal_probability' => null,
// 	'rotten_flag' => null,
// 	'rotten_days' => null
// 	]);

// $result = $pipedrive_client->deleteStage(8);

// $result = $pipedrive_client->deleteMultipleStages([
// 	'ids' => '9,10'
// 	]);

/* USERS */

// $result = $pipedrive_client->getAllUsers();

// $result = $pipedrive_client->getUserById(825469);

// $result = $pipedrive_client->createUser([
// 	'name' => 'User Create_by_api',
// 	'email' => 'alex@api.com',
// 	'active_flag' => 1
// 	]);

// $result = $pipedrive_client->updateUser(831833, [
// 	'active_flag' => 1
// 	]);

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

// $result = $pipedrive_client->assignPermissionSetToUser(831833, [
// 	'permission_set_id' => '1'
// 	]);

// $result = $pipedrive_client->removePermissionSetFromUser(825469,[
// 	'permission_set_id' => '1'
// 	]);

// $result = $pipedrive_client->getUserRoleAssignments(825469, [
// 	'start' => '0',
// 	'limit' => '10'
// 	]);

// $result = $pipedrive_client->assignRoleToUser(825469, [
// 	'role_id' => '1'
// 	]);

// $result = $pipedrive_client->removeRoleFromUser(825469, [
// 	'role_id' => '1'
// 	]);

// $result = $pipedrive_client->getUserRoleSettings(825469);

// $result = $pipedrive_client->getUserPermissions(825469);

// $result = $pipedrive_client->getUserPermittedItems(825469, [
// 	'access_level' => null
// 	]);

// $result = $pipedrive_client->getUsersByName([
// 	'term' => 'mohamed'
// 	]);

// $result = $pipedrive_client->getUserBlacklistedEmails(825469);

// $result = $pipedrive_client->addBlacklistedEmailsToUser(825469, [
// 	'address' => 'foo@bar.com'
// 	]);

/* USER CONNECTIONS */

// $result = $pipedrive_client->getAllUserConnections();

/* USER SETTINGS */

// $result = $pipedrive_client->getUserSettings();

if(isset($result)){
	var_dump($result);
}

echo '</pre>';
?>
<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class PipedriveApi{

	protected $api_token = '';
	
	protected $client;

	public function __construct($api_token) {
		$this->api_token = $api_token;
		$this->client = new Client([
			'base_uri' => 'https://api.pipedrive.com/v1/'
			]);		
	}


	private function GET($endpoint, $query = []){
		try {
			$query['api_token'] = $this->api_token;
			$response = $this->client->request('GET', $endpoint,[
				'query' => $query
				]);
			return $this->checkResponse($response);
		} catch (ClientException $e) {
			echo '<h1>Error!!!</h1>';
			echo '<h3>Message:</h3>';
			echo $e->getMessage();
			echo '<h3>Request Uri:</h3>';
			echo $e->getRequest()->getUri();
			echo '<h3>Response body:</h3>';
			echo $e->getResponse()->getBody();
		}
	}

	private function POST($endpoint, $args = []){		
		try {
			$query['api_token'] = $this->api_token;
			$response = $this->client->request('POST', $endpoint,[
				'query' => $query,
				'json' => $args
				]);
			return $this->checkResponse($response);
		} catch (ClientException $e) {
			echo '<h1>Error!!!</h1>';
			echo '<h3>Message:</h3>';
			echo $e->getMessage();
			echo '<h3>Request Uri:</h3>';
			echo $e->getRequest()->getUri();
			echo '<h3>Request Body:</h3>';
			echo $e->getRequest()->getBody();
			echo '<h3>Response body:</h3>';
			echo $e->getResponse()->getBody();
			return false;
		}
	}

	private function PUT($endpoint, $args = []){		
		try {
			$query['api_token'] = $this->api_token;
			$response = $this->client->request('PUT', $endpoint,[
				'query' => $query,
				'json' => $args
				]);
			return $this->checkResponse($response);
		} catch (ClientException $e) {
			echo '<h1>Error!!!</h1>';
			echo '<h3>Message:</h3>';
			echo $e->getMessage();
			echo '<h3>Request Uri:</h3>';
			echo $e->getRequest()->getUri();
			echo '<h3>Request Body:</h3>';
			echo $e->getRequest()->getBody();
			echo '<h3>Response body:</h3>';
			echo $e->getResponse()->getBody();
			return false;
		}
	}

	private function DELETE($endpoint, $args = []){		
		try {
			$query['api_token'] = $this->api_token;
			$response = $this->client->request('DELETE', $endpoint,[
				'query' => $query,
				'json' => $args
				]);
			return $this->checkResponse($response);
		} catch (ClientException $e) {
			echo '<h1>Error!!!</h1>';
			echo '<h3>Message:</h3>';
			echo $e->getMessage();
			echo '<h3>Request Uri:</h3>';
			echo $e->getRequest()->getUri();
			echo '<h3>Request Body:</h3>';
			echo $e->getRequest()->getBody();
			echo '<h3>Response body:</h3>';
			echo $e->getResponse()->getBody();
			return false;
		}
	}	
	
	private function checkResponse($response) {
		$success = [200, 201];
		$statusCode = $response->getStatusCode();
		if(in_array($statusCode, $success)) {
			$data = json_decode($response->getBody());
			if(is_object($data) && isset($data->data)){
				$data = $data->data;
			}
			return $data;
		}
		return false;
	}

	/* ACTIVITIES */

	public function getActivities($query = []){
		return $this->GET('activities', $query);
	}

	public function getActivityById($id){
		return $this->GET('activities/'.$id);
	}

	public function createActivity($query = []){
		return $this->POST('activities', $query);
	}

	public function updateActivity($id, $query = []){
		return $this->PUT('activities/'.$id, $query);
	}

	public function deleteActivity($id){
		return $this->DELETE('activities/'.$id);
	}

	public function deleteMultipleActivities($args){
		return $this->DELETE('activities', $args);
	}

	/* ACTIVITY TYPES */

	public function getActivityTypes($query = []){
		return $this->GET('activityTypes', $query);
	}

	public function createActivityType($query = []){
		return $this->POST('activityTypes', $query);
	}

	public function updateActivityType($id, $query = []){
		return $this->PUT('activityTypes/'.$id, $query);
	}

	public function deleteActivityType($id){
		return $this->DELETE('activityTypes/'.$id);
	}

	public function deleteMultipleActivityTypes($args){
		return $this->DELETE('activityTypes', $args);
	}

	/* AUTHORIZATIONS */

	public function getAuthorizations($args){
		return $this->POST('authorizations', $args);
	}

	/* CURRENCIES */

	public function getCurrencies($query){
		return $this->GET('currencies', $query);
	}

	/* DEALS */

	public function getDeals($query = []){
		return $this->GET('deals', $query);
	}

	public function getDealById($id){
		return $this->GET('deals/'.$id);
	}

	public function createDeal($args){
		return $this->POST('deals', $args);
	}

	public function updateDeal($id, $args){
		return $this->PUT('deals/'.$id, $args);
	}

	public function deleteDeal($id){
		return $this->DELETE('deals/'.$id);
	}

	public function deleteMultipleDeals($args){
		return $this->DELETE('deals', $args);
	}

	public function duplicateDeal($id){
		return $this->POST('deals/'.$id.'/duplicate');
	}

	public function mergeDeal($id, $args){
		return $this->PUT('deals/'.$id.'/merge', $args);
	}

	public function followDeal($id, $args){
		return $this->POST('deals/'.$id.'/followers', $args);
	}

	public function getDealFollowers($id){
		return $this->GET('deals/'.$id.'/followers');
	}

	public function unfollowDeal($id, $followerId){
		return $this->DELETE('deals/'.$id.'/followers/'.$followerId);
	}

	public function getDealProducts($id, $query = []){
		return $this->GET('deals/'.$id.'/products', $query);
	}

	public function addProductToDeal($id, $args){
		return $this->POST('deals/'.$id.'/products', $args);
	}

	public function updateDealProduct($id, $dealProductId, $args){
		return $this->PUT('deals/'.$id.'/products/'.$dealProductId, $args);
	}

	public function removeProductFromDeal($id, $args){
		return $this->DELETE('deals/'.$id.'/products/', $args);
	}

	public function getDealActivities($id, $query = []){
		return $this->GET('deals/'.$id.'/activities', $query);
	}

	public function getDealUpdates($id, $query = []){
		return $this->GET('deals/'.$id.'/updates', $query);
	}

	public function addParticipantToDeal($id, $args){
		return $this->POST('deals/'.$id.'/participants', $args);
	}

	public function getDealParticipants($id, $query = []){
		return $this->GET('deals/'.$id.'/participants', $query);
	}

	public function removeParticipantFromDeal($id, $dealParticipantId){
		return $this->DELETE('deals/'.$id.'/participants/'.$dealParticipantId);
	}

	public function getDealFiles($id, $query = []){
		return $this->GET('deals/'.$id.'/files', $query);
	}

	public function getDealPermittedUsers($id, $accessLevel){
		$query['access_level'] = $accessLevel;
		return $this->GET('deals/'.$id.'/permittedUsers', $query);
	}

	public function getDealEmailMessages($id, $query = []){
		return $this->GET('deals/'.$id.'/emailMessages', $query);
	}

	public function getDealsByName($query = []){
		return $this->GET('deals/find', $query);
	}

	public function getDealsTimeline($query = []){
		return $this->GET('deals/timeline', $query);
	}

	/* DEAL FIELDS */

	public function getAllDealFields(){
		return $this->GET('dealFields');
	}

	public function getDealFieldById($id){
		return $this->GET('dealFields/'.$id);
	}

	public function createDealField($args){
		return $this->POST('dealFields', $args);
	}

	public function updateDealField($id, $args){
		return $this->PUT('dealFields/'.$id, $args);
	}

	public function deleteDealField($id){
		return $this->DELETE('dealFields/'.$id);
	}

	public function deleteMultipleDealFields($args){
		return $this->DELETE('dealFields', $args);
	}

	/* EMAIL MESSAGES */

	public function getEmailMessageById($id){
		return $this->GET('emailMessages/'.$id);
	}

	public function updateEmailMessage($id){
		return $this->PUT('emailMessages/'.$id);
	}

	public function deleteEmailMessage($id){
		return $this->DELETE('emailMessages/'.$id);
	}

	public function deleteMultipleEmailMessages($args){
		return $this->DELETE('emailMessages', $args);
	}

	/* EMAIL THREADS */

	public function getEmailThreads($args){
		return $this->GET('emailThreads', $args);
	}

	public function getEmailThreadById($id){
		return $this->GET('emailThreads/'.$id);
	}

	public function updateEmailThread($id, $args){
		return $this->PUT('emailThreads/'.$id, $args);
	}

	public function deleteEmailThread($id){
		return $this->DELETE('emailThreads/'.$id);
	}

	public function deleteMultipleEmailThreads($arg){
		return $this->DELETE('emailThreads',$arg);
	}

	public function getEmailThreadMessages($id, $args){
		return $this->GET('emailThreads/'.$id.'/messages', $args);
	}

	/* FILES */

	public function getFiles($args){
		return $this->GET('files', $args);
	}

	public function getFileById($id){
		return $this->GET('files/'.$id);
	}

	public function downloadFile($id){
		return $this->GET('files/'.$id.'/download');
	}

	public function addFiles($args){
		return $this->POST('files', $args);
	}

	public function createRemoteFile($args){
		return $this->POST('files/remote', $args);
	}

	public function linkRemoteFileToItem($args){
		return $this->POST('files/remoteLink', $args);
	}

	public function updateFile($id, $args){
		return $this->PUT('files/'.$id, $args);
	}

	public function deleteFile($id){
		return $this->DELETE('files/'.$id);
	}

	/* FILTERS */

	public function getFilters($args){
		return $this->GET('filters', $args);
	}

	public function getFilterById($id){
		return $this->GET('filters/'.$id);
	}

	public function createFilter($args){
		return $this->POST('filters', $args);
	}

	public function updateFilter($id, $args){
		return $this->PUT('filters/'.$id, $args);
	}

	public function deleteFilter($id){
		return $this->DELETE('filters/'.$id);
	}

	public function deleteMultipleFilters($args){
		return $this->DELETE('filters', $args);
	}

	/* GLOBAL MESSAGES */

	public function getGlobalMessages($args){
		return $this->GET('globalMessages', $args);
	}

	public function deleteGlobalMessage($id){
		return $this->DELETE('globalMessages/'.$id);
	}

	/* GOALS */

	public function getGoals($args){
		return $this->GET('goals', $args);
	}

	public function getGoalById($id){
		return $this->GET('goals/'.$id);
	}

	public function createGoal($args){
		return $this->POST('goals', $args);
	}

	public function updateGoal($id, $args){
		return $this->PUT('goals/'.$id, $args);
	}

	public function deleteGoal($id){
		return $this->DELETE('goals/'.$id);
	}

	public function getGoalResults($id, $query){
		return $this->GET('goals/'.$id.'/results', $query);
	}

	/* NOTES */

	public function getAllNotes(){
		return $this->GET('notes');
	}

	public function getNoteById($id){
		return $this->GET('notes/'.$id);
	}

	public function createNote($args){
		return $this->POST('notes', $args);
	}

	public function updateNote($id, $args){
		return $this->PUT('notes/'.$id, $args);
	}

	public function deleteNote($id){
		return $this->DELETE('notes/'.$id);
	}

	/* ORGANIZATION FIELDS */

	public function getAllOrganizationFields(){
		return $this->GET('organizationFields');
	}

	public function getOrganizationFieldById($id){
		return $this->GET('organizationFields/'.$id);
	}

	public function createOrganizationField($args){
		return $this->POST('organizationFields', $args);
	}

	public function updateOrganizationField($id, $args){
		return $this->PUT('organizationFields/'.$id, $args);
	}

	public function deleteOrganizationField($id){
		return $this->DELETE('organizationFields/'.$id);
	}

	public function deleteMultipleOrganizationFields($args){
		return $this->DELETE('organizationFields', $args);
	}

	/* ORGANIZATIONS */

	public function getOrganizations($query = []){
		return $this->GET('organizations', $query);
	}

	public function getOrganizationById($id){
		return $this->GET('organizations/'.$id);
	}

	public function createOrganization($args){
		return $this->POST('organizations', $args);
	}

	public function updateOrganization($id, $args){
		return $this->PUT('organizations/'.$id, $args);
	}

	public function deleteOrganization($id){
		return $this->DELETE('organizations/'.$id);
	}

	public function deleteMultipleOrganizations($args){
		return $this->DELETE('organizations', $args);
	}

	public function getOrganizationFiles($id, $query = []){
		return $this->GET('organizations/'.$id.'/files', $query);
	}

	public function getOrganizationEmailMessages($id, $query = []){
		return $this->GET('organizations/'.$id.'/emailMessages', $query);
	}

	public function followOrganization($id, $args){
		return $this->POST('organizations/'.$id.'/followers', $args);
	}

	public function getOrganizationFollowers($id){
		return $this->GET('organizations/'.$id.'/followers');
	}

	public function unfollowOrganization($id, $followerId){
		return $this->DELETE('organizations/'.$id.'/followers/'.$followerId);
	}

	public function getOrganizationPersons($id, $query = []){
		return $this->GET('organizations/'.$id.'/persons', $query);
	}

	public function getOrganizationDeals($id, $query = []){
		return $this->GET('organizations/'.$id.'/deals', $query);
	}

	public function getOrganizationActivities($id, $query = []){
		return $this->GET('organizations/'.$id.'/activities', $query);
	}

	public function getOrganizationUpdates($id, $query = []){
		return $this->GET('organizations/'.$id.'/updates', $query);
	}

	public function getOrganizationPermittedUsers($id, $query = []){
		return $this->GET('organizations/'.$id.'/permittedUsers', $query);
	}

	public function mergeOrganization($id, $args){
		return $this->PUT('organizations/'.$id.'/merge', $args);
	}

	public function getOrganizationsByName($query = []){
		return $this->GET('organizations/find', $query);
	}

	/* ORGANIZATION RELATIONSHIPS */

	public function getOrganizationRelationships($query){
		return $this->GET('organizationRelationships', $query);
	}

	public function getOrganizationRelationshipById($id, $query){
		return $this->GET('organizationRelationships/'.$id, $query);
	}

	public function createOrganizationRelationship($args){
		return $this->POST('organizationRelationships', $args);
	}

	public function updateOrganizationRelationship($id, $args){
		return $this->PUT('organizationRelationships/'.$id, $args);
	}

	public function deleteOrganizationRelationship($id){
		return $this->DELETE('organizationRelationships/'.$id);
	}

	/* PERMISSION SETS */

	public function getAllPermissionSets(){
		return $this->GET('permissionSets');
	}

	public function getPermissionSetById($id){
		return $this->GET('permissionSets/'.$id);
	}

	public function updatePermissionSet($id, $args){
		return $this->PUT('permissionSets/'.$id, $args);
	}

	public function getPermissionSetAssignments($id, $query){
		return $this->GET('permissionSets/'.$id.'/assignments', $args);
	}

	public function addPermissionSetAssignment($id, $args){
		return $this->POST('permissionSets/'.$id.'/assignments', $args);
	}

	public function deletePermissionSetAssignment($id, $args){
		return $this->DELETE('permissionSets/'.$id.'/assignments', $args);
	}

	/* PERSONS */

	public function getPersons($query = []){
		return $this->GET('persons', $query);
	}

	public function getPersonById($id){
		return $this->GET('persons/'.$id);
	}

	public function createPerson($args){
		return $this->POST('persons/', $args);
	}

	public function updatePerson($id, $args){
		return $this->PUT('persons/'.$id, $args);
	}

	public function deletePerson($id){
		return $this->DELETE('persons/'.$id);
	}

	public function deleteMultiplePersons($args){
		return $this->DELETE('persons', $args);
	}

	public function getPersonFiles($id, $query = []){
		return $this->GET('persons/'.$id.'/files', $query);
	}

	public function getPersonEmailMessages($id, $query = []){
		return $this->GET('persons/'.$id.'/emailMessages', $query);
	}

	public function followPerson($id, $args){
		return $this->POST('persons/'.$id.'/followers', $args);
	}

	public function getPersonFollowers($id){
		return $this->GET('persons/'.$id.'/followers');
	}

	public function unfollowPerson($id, $followerId){
		return $this->DELETE('persons/'.$id.'/followers/'.$followerId);
	}

	public function getPersonProducts($id, $query = []){
		return $this->GET('persons/'.$id.'/products', $query);
	}

	public function getPersonDeals($id, $query = []){
		return $this->GET('persons/'.$id.'/deals', $query);
	}

	public function getPersonActivities($id, $query = []){
		return $this->GET('persons/'.$id.'/activities', $query);
	}

	public function getPersonPermittedUsers($id, $query = []){
		return $this->GET('persons/'.$id.'/permittedUsers', $query);
	}

	public function mergePerson($id, $args){
		return $this->PUT('persons/'.$id.'/merge', $args);
	}

	public function getPersonsByName($query = []){
		return $this->GET('persons/find', $query);
	}

	public function addPersonPicture($id, $args){
		return $this->POST('persons/'.$id.'/picture', $args);
	}

	public function deletePersonPicture($id){
		return $this->DELETE('persons/'.$id.'/picture');
	}

	/* PERSON FIELDS */

	public function getAllPersonFields(){
		return $this->GET('personFields');
	}

	public function getPersonFieldById($id){
		return $this->GET('personFields/'.$id);
	}

	public function addPersonField($args){
		return $this->POST('personFields', $args);
	}

	public function updatePersonField($id, $args){
		return $this->PUT('personFields/'.$id, $args);
	}

	public function deletePersonField($id){
		return $this->DELETE('personFields/'.$id);
	}

	public function deleteMultiplePersonFields($args){
		return $this->DELETE('personFields/', $args);
	}

	/* PIPELINES */

	public function getAllPipelines(){
		return $this->GET('pipelines');
	}

	public function getPipelineById($id){
		return $this->GET('pipelines/'.$id);
	}

	public function createPipeline($args){
		return $this->POST('pipelines', $args);
	}

	public function updatePipeline($id, $args){
		return $this->PUT('pipelines/'.$id, $args);
	}

	public function getPipelineDeals($id, $query = []){
		return $this->GET('pipelines/'.$id.'/deals', $query);
	}

	public function deletePipeline($id){
		return $this->DELETE('pipelines/'.$id);
	}

	public function getPipelineConversionRatesStats($id, $query = []){
		return $this->GET('pipelines/'.$id.'/conversion_statistics', $query);
	}

	public function getPipelineMovementsStats($id, $query = []){
		return $this->GET('pipelines/'.$id.'/movement_statistics', $query);
	}

	/* PRODUCTS */

	public function getAllProducts($query = []){
		return $this->GET('products', $query);
	}

	public function getProductById($id){
		return $this->GET('products/'.$id);
	}

	public function getProductDeals($id, $query = []){
		return $this->GET('products/'.$id.'/deals', $query);
	}

	public function createProduct($args){
		return $this->POST('products', $args);
	}

	public function updateProduct($id, $args){
		return $this->PUT('products/'.$id, $args);
	}

	public function deleteProduct($id){
		return $this->DELETE('products/'.$id);
	}

	public function getProductFiles($id, $query = []){
		return $this->GET('products/'.$id.'/files', $query);
	}

	public function getProductPermittedUsers($id, $query = []){
		return $this->GET('products/'.$id.'/permittedUsers', $query);
	}

	public function getProductsByName($query = []){
		return $this->GET('products/find', $query);
	}

	/*PUSH NOTIFICATIONS*/

	public function getAllPushNotifications(){
		return $this->GET('pushNotifications');
	}

	public function getPushNotificationById($id){
		return $this->GET('pushNotifications/'.$id);
	}

	public function createPushNotification($args){
		return $this->POST('pushNotifications', $args);
	}

	public function deletePushNotification($id){
		return $this->DELETE('pushNotifications/'.$id);
	}

	/* STAGES */

	public function getStages($query = []){
		return $this->GET('stages', $query);
	}

	public function getStageById($id){
		return $this->GET('stages/'.$id);
	}

	public function getStageDeals($id, $query = []){
		return $this->GET('stages/'.$id.'/deals', $query);
	}

	public function createStage($args){
		return $this->POST('stages', $args);
	}

	public function updateStage($id, $args){
		return $this->PUT('stages/'.$id, $args);
	}

	public function deleteStage($id){
		return $this->DELETE('stages/'.$id);
	}

	public function deleteMultipleStages($args){
		return $this->DELETE('stages', $args);
	}

	/* USERS */

	public function getAllUsers(){
		return $this->GET('users');
	}

	public function getUserById($id){
		return $this->GET('users/'.$id);
	}

	public function createUser($args){
		return $this->POST('users', $args);
	}

	public function updateUser($id, $args){
		return $this->PUT('users/'.$id, $args);
	}

	public function getUserActivities($id, $query = []){
		return $this->GET('users/'.$id.'/activities', $query);
	}

	public function getUserFollowers($id){
		return $this->GET('users/'.$id.'/followers');
	}

	public function getUserUpdates($id, $query = []){
		return $this->GET('users/'.$id.'/updates', $query);
	}

	public function getUserPermissionSetAssignments($id, $query = []){
		return $this->GET('users/'.$id.'/permissionSetAssignments', $query);
	}

	public function assignPermissionSetToUser($id, $args){
		return $this->POST('users/'.$id.'/permissionSetAssignments', $args);
	}

	public function removePermissionSetFromUser($id, $args){
		return $this->DELETE('users/'.$id.'/permissionSetAssignments', $args);
	}

	public function getUserRoleAssignments($id, $query = []){
		return $this->GET('users/'.$id.'/roleAssignments', $query);
	}

	public function assignRoleToUser($id, $args){
		return $this->POST('users/'.$id.'/roleAssignments', $args);
	}

	public function removeRoleFromUser($id, $args){
		return $this->POST('users/'.$id.'/roleAssignments', $args);
	}

	public function getUserRoleSettings($id){
		return $this->GET('users/'.$id.'/roleSettings');
	}

	public function getUserPermissions($id){
		return $this->GET('users/'.$id.'/permissions');
	}

	public function getUserPermittedItems($id, $query = []){
		return $this->GET('users/'.$id.'/permittedItems', $query);
	}

	public function getUsersByName($query = []){
		return $this->GET('users/find', $query);
	}

	public function getUserBlacklistedEmails($id){
		return $this->GET('users/'.$id.'/blacklistedEmails');
	}

	public function addBlacklistedEmailsToUser($id, $args){
		return $this->POST('users/'.$id.'/blacklistedEmails', $args);
	}

	/* USER CONNECTIONS */

	public function getAllUserConnections(){
		return $this->GET('userConnections');
	}

	/* USER SETTINGS */

	public function getUserSettings(){
		return $this->GET('userSettings');
	}

}

?>
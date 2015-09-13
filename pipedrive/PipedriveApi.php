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
			echo $e->getMessage();
		}
	}
	
	
	private function checkResponse($response) {
		if($response->getStatusCode() == 200) {
			$data = json_decode($response->getBody());
			if(is_object($data) && isset($data->data)){
				$data = $data->data;
			}
			return $data;
		}
		return false;
	}

	/* DEALS */

	public function getDeals($query = []){
		return $this->GET('deals', $query);
	}

	public function getDealById($id){
		return $this->GET('deals/'.$id);
	}

	public function getDealFollowers($id){
		return $this->GET('deals/'.$id.'/followers');
	}

	public function getDealProducts($id, $query = []){
		return $this->GET('deals/'.$id.'/products', $query);
	}

	public function getDealActivities($id, $query = []){
		return $this->GET('deals/'.$id.'/activities', $query);
	}

	public function getDealUpdates($id, $query = []){
		return $this->GET('deals/'.$id.'/updates', $query);
	}

	public function getDealParticipants($id, $query = []){
		return $this->GET('deals/'.$id.'/participants', $query);
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

	/* ORGANIZATIONS */

	public function getOrganizations($query = []){
		return $this->GET('organizations', $query);
	}

	public function getOrganizationById($id){
		return $this->GET('organizations/'.$id);
	}

	public function getOrganizationFiles($id, $query = []){
		return $this->GET('organizations/'.$id.'/files', $query);
	}

	public function getOrganizationEmailMessages($id, $query = []){
		return $this->GET('organizations/'.$id.'/emailMessages', $query);
	}

	public function getOrganizationFollowers($id){
		return $this->GET('organizations/'.$id.'/followers');
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

	public function getOrganizationPermittedUsers($id, $accessLevel){
		$query['access_level'] = $accessLevel;
		return $this->GET('organizations/'.$id.'/permittedUsers', $query);
	}

	public function getOrganizationsByName($query = []){
		return $this->GET('organizations/find', $query);
	}

	/* PERSONS */

	public function getPersons($query = []){
		return $this->GET('persons', $query);
	}

	public function getPersonById($id){
		return $this->GET('persons/'.$id);
	}

	public function getPersonFiles($id, $query = []){
		return $this->GET('persons/'.$id.'/files', $query);
	}

	public function getPersonEmailMessages($id, $query = []){
		return $this->GET('persons/'.$id.'/emailMessages', $query);
	}

	public function getPersonFollowers($id){
		return $this->GET('persons/'.$id.'/followers');
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

	public function getPersonPermittedUsers($id, $accessLevel){
		$query['access_level'] = $accessLevel;
		return $this->GET('persons/'.$id.'/permittedUsers', $query);
	}

	public function getPersonsByName($query = []){
		return $this->GET('persons/find', $query);
	}
}

?>
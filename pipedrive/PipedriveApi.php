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

	//Deals Endpoints:

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
}

?>
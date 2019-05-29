<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class Marketo {
	public $client;
  private $access_token;
	private $baseUri; // marketo API url
	private $clientId; // Marketo client id
	private $clientSecret; // Marketo client secret

	function __construct ($baseUri = null, $clientId = null, $clientSecret = null){

		if ($baseUri === null || $clientId === null || $clientSecret === null) {
			throw new Exception('Marketo credentials missing.');
			return false;
		}

		$this->baseUri = $baseUri;
		$this->clientId = $clientId;
		$this->clientSecret = $clientSecret;

		$this->client = new Client([
        'base_uri' => $this->baseUri . '/rest/v1/',
        'headers' => [ 'Content-Type' => 'application/json' ]
    ]);

    if (get_option( 'marketo_access_token_expires', 0 ) - time() <= 0) {
      $this->getAccessToken();
    }

    $this->access_token = get_option('marketo_access_token');
	}

  private function getAccessToken() {
    $client = new Client([
      'base_uri' => $this->baseUri . '/identity/'
    ]);

    $response = $client->request('get', 'oauth/token', [
      'query' => [
        'grant_type' => 'client_credentials',
        'client_id' => $this->clientId,
        'client_secret' => $this->clientSecret
      ]
    ]);

    $result = json_decode($response->getBody()->getContents());

    update_option( 'marketo_access_token_expires', (time() + $result->expires_in));
    update_option( 'marketo_access_token', $result->access_token);
  }

  public function pushLead($leadData, $programName) {
    if (!isset($leadData['email']) || $leadData['email'] === '')
      return false;

    $response = $this->client->request('POST', 'leads/push.json',
      [
        'query' => ['access_token' => $this->access_token],
        'body' => json_encode(array(
          'action' => 'createOrUpdate',
          'programName' => $programName,
          'lookupField' => 'email',
          'input' => array($leadData)
        )),
      ]);

      $result = json_decode($response->getBody()->getContents(), true);

      return array('success' => $result['success'], 'result' =>$result['result'][0]);
  }

  public function setProgramStatus($leadId = null, $programId = null, $status = '') {

    if ($leadId === null)
      return array('success' => 0, 'errors' => array('leadId not specified'));

    if ($programId === null)
      return array('success' => 0, 'errors' => array('programId not specified'));

    if ($status === '')
      return array('success' => 0, 'errors' => array('programStatus not specified'));

    $response = $this->client->request('POST', 'leads/programs/' . $programId . '/status.json',
      [
        'query' => ['access_token' => $this->access_token],
        'body' => json_encode(array(
          'input' => array(array(
            'id' => $leadId
          )),
          'status' => $status
        ))
      ]);
      $result = json_decode($response->getBody()->getContents(), true);
      return array('success' => $result['success'], 'result' =>$result['result'][0]);
  }
}

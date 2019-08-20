<?php
/**
 * Created by PhpStorm.
 * User: Tim Joosten
 * Date: 4-7-2019
 * Time: 14:22
 */
namespace Tjoosten\BolClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class BolClient {
	private $client;
	private $clientId;
	private $clientSecret;
	private $token;
	private $apiUrl;
	private $transformer;

	public function __construct( $clientId, $clientSecret ) {
		$this->apiUrl       = 'https://api.bol.com/retailer';
		$this->client       = new Client( [] );
		$this->clientId     = 'ea1488ea-42fd-4ded-a883-fc332349738f'; // $clientId;
		$this->clientSecret = 'AK3tFvQXFI0FT29lzMtvisbtgBZYaNkPg6vzP651O8RxYdyITW3HRP2UXm3ICf4SPXNrIzRJzbf7fQ7OHLBlGhs'; // $clientSecret;
		$this->transformer  = new BolTransformer();
		$this->token        = $this->getToken();
	}

	private function getToken() {
		try {
			$response = $this->client->request( 'POST', 'https://login.bol.com/token?grant_type=client_credentials',
				[
					'auth'    => [
						$this->clientId,
						$this->clientSecret
					],
					'headers' => [
						'Accept' => 'application/json'
					]
				] );

			$result = json_decode( $response->getBody()->getContents() );

			return $result->access_token;
		} catch ( GuzzleException $e ) {
			throw $e;
		}
	}

	public function getOrders( $page = 1, $fulfilmentMethod = 'FBR' ) {
		try {
			$response = $this->client->request( 'GET', $this->apiUrl . '/orders?page=' . $page . '&fulfilment-method=' . $fulfilmentMethod,
				[
					'headers' => [
						'Authorization' => 'Bearer ' . $this->token,
						'Accept'        => 'application/vnd.retailer.v3+json',
					]
				]
			);

			$data            = json_decode( $response->getBody() );
			$orders = $this->transformer->transformCollection($data->orders, 'BolOrder');

			return $orders;
		} catch ( GuzzleException $e ) {
			throw $e;
		}
	}

	public function getOrder( $orderId ) {
		try {
			$response = $this->client->request( 'GET', $this->apiUrl . '/orders/' . $orderId,
				[
					'headers' => [
						'Authorization' => 'Bearer ' . $this->token,
						'Accept'        => 'application/vnd.retailer.v3+json',
					]
				]
			);

			$data = json_decode( $response->getBody() );
			$order = $this->transformer->transformToEntity($data, 'BolOrder');

			return $order;
		} catch ( GuzzleException $e ) {
			throw $e;
		}
	}
}
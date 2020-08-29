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
		$this->clientId     = $clientId;
		$this->clientSecret = $clientSecret;
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

			$data   = json_decode( $response->getBody() );
			if (!isset($data->orders)) {
			    return [];
            }

			$orders = $this->transformer->transformCollection( $data->orders, 'BolOrder' );

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

			$data  = json_decode( $response->getBody() );
			$order = $this->transformer->transformToEntity( $data, 'BolOrder' );

			return $order;
		} catch ( GuzzleException $e ) {
			return [null, $e];
		}
	}

	public function shipOrderItem( $orderItemId, array $data ) {
		try {
			$response = $this->client->request( 'PUT', $this->apiUrl . '/orders/' . $orderItemId . '/shipment',
				[
					'headers' => [
						'Authorization' => 'Bearer ' . $this->token,
						'Accept'        => 'application/vnd.retailer.v3+json',
						'Content-Type'  => 'application/vnd.retailer.v3+json'
					],
					'json'    => $data
				]
			);

			$data = json_decode($response->getBody());
			return $this->transformer->transformToEntity($data, 'BolProcessStatus');

		} catch ( GuzzleException $e ) {
			return [null, $e];
		}
	}

    public function getShipment($orderId) {
	    try {
            $response = $this->client->request( 'GET', $this->apiUrl . '/shipments?order-id=' . $orderId,
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->token,
                        'Accept'        => 'application/vnd.retailer.v3+json',
                    ],
                ]
            );
            $data  = json_decode( $response->getBody() );
            if (!property_exists($data, 'shipments')) {
                return null;
            }
            $shipment = $this->transformer->transformCollection( $data->shipments, 'BolShipment' );

            return $shipment;
        } catch ( GuzzleException $e ) {
            return [null, $e];
        }
    }

    public function updateTransport($transportId, array $data) {
        try {
            $response = $this->client->request( 'PUT', $this->apiUrl . '/transports/' . $transportId,
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->token,
                        'Accept'        => 'application/vnd.retailer.v3+json',
                        'Content-Type'  => 'application/vnd.retailer.v3+json'
                    ],
                    'json'    => $data
                ]
            );

            $data = json_decode($response->getBody());
            return $this->transformer->transformToEntity($data, 'BolProcessStatus');

        } catch ( GuzzleException $e ) {
            return [null, $e];
        }
    }
}
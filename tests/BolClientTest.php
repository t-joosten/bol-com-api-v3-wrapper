<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 4-7-2019
 * Time: 14:44
 */

use PHPUnit\Framework\TestCase;
use Tjoosten\BolClient\BolClient;

class BolClientTest extends TestCase {
	private function instantiateBolClient() {
		$clientId = getenv('BOL_CLIENT_ID');
		$clientSecret = getenv('BOL_CLIENT_SECRET');
		$client = new BolClient($clientId, $clientSecret);
		return $client;
	}

	public function testUnauthorized() {
		$client = new BolClient('fake', 'fake');
		$res = $client->getOrders();
		$this->assertEquals(400, $res->getCode());
	}

	public function testGetOrders() {
		$client = $this->instantiateBolClient();
		$res = $client->getOrders();
		$this->assertTrue(true);
	}

	public function testGetOrder() {
		$client = $this->instantiateBolClient();
		$res = $client->getOrder(2495433280 );
		$this->assertTrue(true);
	}
}

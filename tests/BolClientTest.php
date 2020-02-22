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
		$this->assertEquals(401, $res->getCode());
	}

	public function testGetOrders() {
		$client = $this->instantiateBolClient();
		$res = $client->getOrders();
		$this->assertTrue(true);
	}

	public function testGetOrder() {
		$client = $this->instantiateBolClient();
		$res = $client->getOrder(2495728860 );
		$this->assertTrue(true);
	}

    public function testGetShipment() {
        $client = $this->instantiateBolClient();
        $res = $client->getShipment(2774167840 );
        var_dump($res);
        $this->assertTrue(true);
    }

    public function testPutTransport() {
        $client = $this->instantiateBolClient();
        $res = $client->updateTransport(2495728860, [
            "transporterCode" => "TNT_BRIEF",
            "trackAndTrace" => "12392S34234"
        ] );
        $this->assertTrue(true);
    }
}

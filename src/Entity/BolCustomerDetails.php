<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:13
 */

namespace Tjoosten\BolClient\Entity;

class BolCustomerDetails extends BolBaseModel {
	public $attributes = [
	];

	public $childEntities = [];

	public $nestedEntities = [
		'shipmentDetails' => 'BolShipmentDetails',
		'billingDetails' => 'BolBillingDetails'
	];
}
<?php

namespace Tjoosten\BolClient\Entity;

/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 4-7-2019
 * Time: 14:27
 */

class BolOrder extends BolBaseModel {
	public $orderId;
	public $dateTimeOrderPlaced;
	public $customerDetails;
	public $orderItems;

	public $attributes = [
		'orderId',
		'dateTimeOrderPlaced',
	];

	public $nestedEntities = [
		'customerDetails' => 'BolCustomerDetails'
	];

	public $childEntities = [
		'orderItems' => 'BolOrderItem'
	];

	public function __construct() {
	}
}
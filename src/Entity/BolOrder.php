<?php

namespace Tjoosten\BolClient\Entity;

/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 4-7-2019
 * Time: 14:27
 */

/**
 * Class BolOrder
 * @package Tjoosten\BolClient\Entity
 *
 * @param $orderId
 * @param $dateTimeOrderPlaced
 * @param $orderItems
 * @param $customerDetails
 *
 */

class BolOrder extends BolBaseModel {
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
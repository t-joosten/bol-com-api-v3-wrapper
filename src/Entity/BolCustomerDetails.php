<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:13
 */

namespace Tjoosten\BolClient\Entity;

/**
 * Class BolCustomerDetails
 * @package Tjoosten\BolClient\Entity
 *
 * @param $shipmentDetails
 * @param $billingDetails
 */

class BolCustomerDetails extends BolBaseModel {
	protected $attributes = [];

	protected $childEntities = [];

	protected $nestedEntities = [
		'shipmentDetails' => 'BolShipmentDetails',
		'billingDetails' => 'BolBillingDetails'
	];

	public function __construct() {
		parent::__construct();
	}
}
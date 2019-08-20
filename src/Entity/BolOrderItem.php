<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 4-7-2019
 * Time: 14:27
 */

namespace Tjoosten\BolClient\Entity;

class BolOrderItem extends BolBaseModel {
	public $orderItemId;
	public $ean;
	public $offerPrice;
	public $cancelRequest;

	public $attributes = [
		'orderItemId',
		'ean',
		'quantity',
		'cancelRequest',
		'offerReference',
		'title',
		'offerPrice',
		'transactionFee',
		'latestDeliveryDate',
		'offerCondition',
		'fulfilmentMethod',
	];

	public function __construct( ) {
	}
}
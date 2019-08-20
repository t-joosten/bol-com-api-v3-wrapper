<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 4-7-2019
 * Time: 14:27
 */

namespace Tjoosten\BolClient\Entity;

/**
 * Class BolOrderItem
 * @package Tjoosten\BolClient\Entity
 *
 * @param $orderItemId
 * @param $ean
 * @param $quantity
 * @param $cancelRequest
 * @param $offerReference
 * @param $title
 * @param $offerPrice
 * @param $transactionFee
 * @param $latestDeliveryDate
 * @param $offerCondition
 * @param $fulfilmentMethod
 *
 */

class BolOrderItem extends BolBaseModel {
	protected $attributes = [
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
}
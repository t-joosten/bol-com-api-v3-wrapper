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

class BolShipment extends BolBaseModel {
	protected $attributes = [
		'shipmentId',
        'shipmentDate',
        'shipmentReference',
	];

	public $childEntities = [
        'shipmentItems' => 'BolShipmentItem',
    ];

	public $nestedEntities = [
        'transport' => 'BolTransport'
    ];
}
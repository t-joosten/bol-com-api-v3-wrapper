<?php

namespace Tjoosten\BolClient\Entity;

/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 4-7-2019
 * Time: 14:27
 */

/**
 * Class BolShipmentOrder
 * @param $orderId
 * @param $orderPlacedDateTime
 * @param $shipmentDetails
 * @param $billingDetails
 * @param $orderItems
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolShipmentOrder extends BolBaseModel
{
    public $attributes = [
        'orderId',
        'orderPlacedDateTime',
    ];

    public $nestedEntities = [
        'shipmentDetails' => 'BolShipmentDetails',
        'billingDetails' => 'BolBillingDetails'
    ];

    public $childEntities = [
        'orderItems' => 'BolOrderItem'
    ];
}
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
 * @param $orderId
 * @param $orderPlacedDateTime
 * @param $orderItems
 * @param $shipmentDetails
 * @param $billingDetails
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolOrder extends BolBaseModel
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
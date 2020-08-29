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
 * @param $orderItemId
 * @param $orderId
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolShipmentItem extends BolBaseModel
{
    protected $childEntities = [];

    protected $attributes = [
        'orderItemId',
        'orderId'
    ];

    protected $nestedEntities = [];
}
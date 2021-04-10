<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 4-7-2019
 * Time: 14:27
 */

namespace Tjoosten\BolClient\Entity;

/**
 * Class BolShipmentItem
 * @param $orderItemId
 * @param $order
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolShipmentItem extends BolBaseModel
{
    protected $childEntities = [];

    protected $attributes = [
        'orderItemId',
    ];

    public $nestedEntities = [
        'order' => 'BolShipmentOrder'
    ];
}
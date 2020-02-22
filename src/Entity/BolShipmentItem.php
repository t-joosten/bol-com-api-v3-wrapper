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
 * @param $orderId
 */

class BolShipmentItem extends BolBaseModel {
    protected $childEntities = [];

    protected $attributes = [
        'orderItemId',
        'orderId'
    ];

    protected $nestedEntities = [];

    public function __construct() {
        parent::__construct();
    }
}
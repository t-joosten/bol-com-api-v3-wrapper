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
 * @param $shipmentDetails
 * @param $billingDetails
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolCustomerDetails extends BolBaseModel
{
    protected $attributes = [];

    protected $childEntities = [];

    protected $nestedEntities = [
        'shipmentDetails' => 'BolShipmentDetails',
        'billingDetails' => 'BolBillingDetails'
    ];
}
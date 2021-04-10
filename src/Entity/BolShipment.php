<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 4-7-2019
 * Time: 14:27
 */

namespace Tjoosten\BolClient\Entity;

/**
 * Class BolShipment
 * @param $shipmentId
 * @param $shipmentDateTime
 * @param $shipmentReference
 * @param $shipmentItems
 * @param $transport
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolShipment extends BolBaseModel
{
    protected $attributes = [
        'shipmentId',
        'shipmentDateTime',
        'shipmentReference',
    ];

    public $childEntities = [
        'shipmentItems' => 'BolShipmentItem',
    ];

    public $nestedEntities = [
        'transport' => 'BolTransport'
    ];
}
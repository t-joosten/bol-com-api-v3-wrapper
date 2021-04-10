<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:14
 */

namespace Tjoosten\BolClient\Entity;

/**
 * Class BolFulfilment
 * @param $method
 * @param $latestDeliveryDate
 * @param $distributionParty
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolFulfilment extends BolBaseModel
{
    protected $attributes = [
        'method',
        'latestDeliveryDate',
        'distributionParty',
    ];
}
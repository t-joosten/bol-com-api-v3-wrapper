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
 * @param $transportId
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolTransport extends BolBaseModel
{
    protected $attributes = [
        'transportId',
    ];
}
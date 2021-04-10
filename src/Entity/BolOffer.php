<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:14
 */

namespace Tjoosten\BolClient\Entity;

/**
 * Class BolOffer
 * @param $offerId
 * @param $reference
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolOffer extends BolBaseModel
{
    protected $attributes = [
        'offerId',
        'reference'
    ];
}
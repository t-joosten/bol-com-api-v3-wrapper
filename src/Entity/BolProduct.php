<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:14
 */

namespace Tjoosten\BolClient\Entity;

/**
 * Class BolProduct
 * @param $ean
 * @param $title
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolProduct extends BolBaseModel
{
    protected $attributes = [
        'ean',
        'title',
    ];
}
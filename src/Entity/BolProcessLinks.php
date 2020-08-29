<?php


namespace Tjoosten\BolClient\Entity;

/**
 * Class BolProcessLinks
 * @param $rel
 * @param $href
 * @param $method
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolProcessLinks extends BolBaseModel
{
    protected $attributes = [
        'rel',
        'href',
        'method',
    ];
}
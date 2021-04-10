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
 * @param $quantity
 * @param $commission
 * @param $fulfilment
 * @param $quantityShipped
 * @param $quantityCancelled
 * @param $unitPrice
 * @param $totalPrice
 * @param $offer
 * @param $product
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolOrderItem extends BolBaseModel
{
    protected $attributes = [
        'orderItemId',
        'quantity',
        'commission',
        'quantityShipped',
        'quantityCancelled',
        'unitPrice',
        'totalPrice',
    ];

    public $nestedEntities = [
        'fulfilment' => 'BolFulfilment',
        'offer' => 'BolOffer',
        'product' => 'BolProduct',
    ];
}
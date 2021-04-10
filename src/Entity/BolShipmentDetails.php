<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:13
 */

namespace Tjoosten\BolClient\Entity;

/**
 * Class BolShippingDetails
 * @param $salutation
 * @param $firstName
 * @param $surname
 * @param $streetName
 * @param $houseNumber
 * @param $houseNumberExtension
 * @param $extraAddressInformation
 * @param $zipCode
 * @param $city
 * @param $countryCode
 * @param $email
 * @param $company
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolShipmentDetails extends BolBaseModel
{
    protected $attributes = [
        'salutation',
        'firstName',
        'surname',
        'streetName',
        'houseNumber',
        'houseNumberExtension',
        'extraAddressInformation',
        'zipCode',
        'city',
        'countryCode',
        'email',
        'company',
    ];
}
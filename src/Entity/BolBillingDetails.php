<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:14
 */

namespace Tjoosten\BolClient\Entity;

/**
 * Class BolBillingDetails
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
 * @param $vatNumber
 *
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolBillingDetails extends BolBaseModel
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
        'vatNumber',
    ];
}
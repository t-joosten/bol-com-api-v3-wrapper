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
 * @package Tjoosten\BolClient\Entity
 *
 * @param $salutationCode
 * @param $firstName
 * @param $surName
 * @param $streetName
 * @param $houseNumber
 * @param $houseNumberExtended
 * @param $addressSupplement
 * @param $extraAddressInformation
 * @param $zipCode
 * @param $city
 * @param $countryCode
 * @param $email
 * @param $company
 * @param $vatNumber
 * @param $deliveryPhoneNumber
 *
 */

class BolShipmentDetails extends BolBaseModel {
	protected $attributes = [
		'salutationCode',
		'firstName',
		'surName',
		'streetName',
		'houseNumber',
		'houseNumberExtended',
		'addressSupplement',
		'extraAddressInformation',
		'zipCode',
		'city',
		'countryCode',
		'email',
		'company',
		'vatNumber',
		'deliveryPhoneNumber',
	];
}
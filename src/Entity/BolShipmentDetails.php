<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:13
 */

namespace Tjoosten\BolClient\Entity;

class BolShipmentDetails extends BolBaseModel {
	public $attributes = [
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
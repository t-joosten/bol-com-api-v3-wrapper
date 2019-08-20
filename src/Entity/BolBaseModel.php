<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:13
 */

namespace Tjoosten\BolClient\Entity;

abstract class BolBaseModel {
	protected $attributes = [];

	protected $childEntities = [];

	protected $nestedEntities = [];
}
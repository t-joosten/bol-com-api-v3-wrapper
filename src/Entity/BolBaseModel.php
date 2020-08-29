<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 14:13
 */

namespace Tjoosten\BolClient\Entity;

abstract class BolBaseModel
{
    protected $attributes = [];

    protected $childEntities = [];

    protected $nestedEntities = [];

    public function __construct()
    {
        foreach ($this->attributes as $attribute) {
            $this->$attribute = '';
        }
    }

    public function getChildEntityNameByKey($key)
    {
        return $this->childEntities[$key];
    }

    public function getNestedEntityNameByKey($key)
    {
        return $this->nestedEntities[$key];
    }

    public function keyExistsInAttributes($key)
    {
        return in_array($key, $this->attributes);
    }

    public function keyExistsInNestedEntities($key)
    {
        return key_exists($key, $this->nestedEntities);
    }

    public function keyExistsInChildEntities($key)
    {
        return key_exists($key, $this->childEntities);
    }
}
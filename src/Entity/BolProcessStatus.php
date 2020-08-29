<?php


namespace Tjoosten\BolClient\Entity;

/**
 * Class BolProcessStatus
 * @param $id
 * @param $entityId
 * @param $eventType
 * @param $description
 * @param $status
 * @param $errorMessage
 * @param $createTimestamp
 * @param $links
 * @package Tjoosten\BolClient\Entity
 *
 */
class BolProcessStatus
{
    protected $attributes = [
        'id',
        'entityId',
        'eventType',
        'description',
        'status',
        'errorMessage',
        'createTimestamp',
    ];

    public $childEntities = [
        'links' => 'BolProcessLinks',
    ];
}
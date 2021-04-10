<?php


namespace Tjoosten\BolClient\Entity;

/**
 * Class BolProcessStatus
 * @param $processStatusId
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
class BolProcessStatus extends BolBaseModel
{
    protected $attributes = [
        'processStatusId',
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
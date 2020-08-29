<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 13:00
 */

namespace Tjoosten\BolClient;

class BolTransformer
{
    public function transformCollection($data, string $entityName)
    {
        $collection = [];

        foreach ($data as $value) {
            $collection[] = $this->transformToEntity($value, $entityName);
        }

        return $collection;
    }

    public function transformToEntity($stdClass, string $entityName)
    {
        $model = $this->createModelByEntityName($entityName);

        foreach ($stdClass as $key => $value) {

            if ($model->keyExistsInAttributes($key)) {
                $model->$key = $value;
            } else if ($model->keyExistsInNestedEntities($key)) {
                $model->$key = $this->transformToEntity($value, $model->getNestedEntityNameByKey($key));
            } else if ($model->keyExistsInChildEntities($key)) {
                $model->$key = $this->transformCollection($value, $model->getChildEntityNameByKey($key));
            }
        }

        return $model;
    }

    private function createModelByEntityName(string $entityName)
    {
        $entityClass = 'Tjoosten\\BolClient\\Entity\\' . $entityName;
        return new $entityClass;
    }
}
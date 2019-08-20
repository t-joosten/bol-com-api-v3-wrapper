<?php
/**
 * Created by PhpStorm.
 * User: Joosten
 * Date: 15-8-2019
 * Time: 13:00
 */

namespace Tjoosten\BolClient;

class BolTransformer {
	public function transformCollection( $data, string $entityName ) {
		$collection = [];

		foreach ( $data as $value ) {
			$collection[] = $this->transformToEntity( $value, $entityName );
		}

		return $collection;
	}

	public function transformToEntity( $stdClass, string $entityName ) {
		$model = $this->createModelByEntityName( $entityName );

		foreach ( $stdClass as $key => $value ) {
			if ( $this->keyExistsInEntitiesAttributes( $key, $model ) ) {
				$model->$key = $value;
			} else if ( $this->keyExistsInEntitiesNestedEntities( $key, $model ) ) {
				$model->$key = $this->transformToEntity( $value, $model->nestedEntities[ $key ] );
			} else if ( $this->keyExistsInEntitiesChildEntities( $key, $model ) ) {
				$model->$key = $this->transformCollection( $value, $model->childEntities[ $key ] );
			}
		}

		return $model;
	}

	private function createModelByEntityName( string $entityName ) {
		$entityClass = 'Tjoosten\\BolClient\\Entity\\' . $entityName;
		return new $entityClass;
	}

	private function keyExistsInEntitiesAttributes( $key, $model ) {
		return in_array( $key, $model->attributes );
	}

	private function keyExistsInEntitiesNestedEntities( $key, $model ) {
		return key_exists( $key, $model->childEntities );
	}

	private function keyExistsInEntitiesChildEntities( $key, $model ) {
		return key_exists( $key, $model->nestedEntities );
	}
}
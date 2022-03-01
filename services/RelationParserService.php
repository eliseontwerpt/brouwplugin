<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Services;

use Model;
use October\Rain\Database\Collection;

class RelationParserService
{

    protected $intialModelName = '';

    public function getSortingOptions(string $modelName): array
    {
        if ($this->intialModelName === '') {
            $this->intialModelName = $modelName;
        }
        $model = $modelName::find(1);
        $modelData = $this->getModelData( $model);
        $relationData = $this->getRelationData($model);
        if (count($relationData) > 1) {
            $relationData = $this->flattenRelationData($relationData);
            $modelData = array_merge($modelData, $relationData);
        }
        return $modelData;
    }

    protected function flattenRelationData(array $relationData): array
    {
        $model = key($relationData);
        $values = [];
        $modelData = reset($relationData);
        foreach($modelData as $key => $data) {
            $values[$model . "." . $key] = $model . "." . $data ;
        }
        return $values;
    }

    public function getRelationData(\Model $model): array
    {
        $relationDefinitions = $model::find(1)->getRelationDefinitions();
        $values = [];
        foreach ($relationDefinitions as $key => $relationDefinition) {
            if (count($relationDefinition) > 0) {
                $values = array_merge($values, $this->getRelationDataFields($relationDefinition));
            }
        }
        return $values;
    }

    protected function getRelationDataFields(array $relation): array
    {
        $attributes = [];
        foreach ($relation as $key => $relationModel) {
        $modelName  = reset($relationModel);
        if ($modelName === $this->intialModelName || !$modelName) {
            return [];
        }
        $attributes = [
                $key => $this->getSortingOptions($modelName)
            ];
        }
        return $attributes;
    }

    protected function getModelData(\Model $model): array
    {
        $modelData = array_keys($model->getAttributes());
        $values = array_map('ucfirst', $modelData);
        $result = array_combine(preg_replace('/_/', ' ', $values), $modelData);
        return $result;
    }
}

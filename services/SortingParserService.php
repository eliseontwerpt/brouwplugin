<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Services;

use October\Rain\Database\Model;

class SortingParserService
{

    /**
     * @var string[]
     */
    public array $parsedModels = [];

    public function getSortingOptions(string $modelName, bool $nesting = false): array
    {
        if (in_array($modelName, $this->parsedModels)) {
            return [];
        }

        $this->parsedModels[] = $modelName;
        $model = $modelName::find(1);
        if ($model === null) {
            return [];
        }
        $modelData = $this->getModelData($model);
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

    public function getRelationData(\Model $model): ?array
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
            if (!$modelName) {
                return [];
            }
            $attributes = [
                    $key => $this->getSortingOptions($modelName, true)
            ];
        }
        return $attributes;
    }

    protected function getModelData(\Model $model): array
    {
        $modelData = array_keys($model->getAttributes());
        $values = array_map('lcfirst', $modelData);
        $result = array_combine(preg_replace('/_/', ' ', $values), $modelData);
        return $result;
    }
}

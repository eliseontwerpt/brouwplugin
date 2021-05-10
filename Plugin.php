<?php namespace Hjp\Brouwerbouwer;

use System\Classes\PluginBase;


class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'hjp.brouwerbouwer::lang.component.name',
            'description' => 'hjp.brouwerbouwer::lang.component.description',
            'author' => 'Harm Jan Plat',
            'icon' => 'icon-beer'
        ];
    }   

    public function registerComponents()
    {
        return [
            'Hjp\Brouwerbouwer\Components\Recipes' => 'BrewRecipes',
            'Hjp\Brouwerbouwer\Components\BjcpGuide' => 'BeerStyles',
            'Hjp\Brouwerbouwer\Components\Hops' => 'HopsList',
            'Hjp\Brouwerbouwer\Components\Brewday' => 'BrewDay'
        ];
    }

    public function registerListColumnTypes()
    {
        return [
            'hoptype' => function($value) {
                $map = [
                    0 => 'flowers',       
                    1 => 'pellets',       
                ];
            return $map[$value];
            },
            'dryhop' => function($value) {
                $map = [
                    0 => 'regular',       
                    1 => 'add as dryhop',       
                ];
            return $map[$value];
            }
    ];
    }
}


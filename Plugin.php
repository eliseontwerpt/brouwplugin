<?php namespace Eliseontwerpt\Brouwerbouwer;

use System\Classes\PluginBase;


class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'eliseontwerpt.brouwerbouwer::lang.component.name',
            'description' => 'eliseontwerpt.brouwerbouwer::lang.component.description',
            'author' => 'Eliseontwerpt',
            'icon' => 'icon-beer'
        ];
    }   

    public function registerComponents()
    {
        return [
            'Eliseontwerpt\Brouwerbouwer\Components\Recipes' => 'BrewRecipes',
            'Eliseontwerpt\Brouwerbouwer\Components\BjcpGuide' => 'BeerStyles',
            'Eliseontwerpt\Brouwerbouwer\Components\Hops' => 'HopsList',
            'Eliseontwerpt\Brouwerbouwer\Components\Brewday' => 'BrewDay'
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


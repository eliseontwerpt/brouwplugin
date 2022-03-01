<?php namespace EliseOntwerpt\Brouwerbouwer;

use EliseOntwerpt\Brouwerbouwer\Components\BjcpCategoriesGuide;
use EliseOntwerpt\Brouwerbouwer\Components\BjcpStyleGuide;
use EliseOntwerpt\Brouwerbouwer\Components\Brewday;
use EliseOntwerpt\Brouwerbouwer\Components\ListOfHops;
use EliseOntwerpt\Brouwerbouwer\Components\Recipes;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'eliseontwerpt.brouwerbouwer::lang.component.name',
            'description' => 'eliseontwerpt.brouwerbouwer::lang.component.description',
            'author' => 'EliseOntwerpt',
            'icon' => 'icon-beer'
        ];
    }

    public function registerComponents()
    {
        return [
            BjcpCategoriesGuide::class => 'BJCPBeerCategories',
            BjcpStyleGuide::class => 'BJCPBeerStyles',
            ListOfHops::class => 'Hops',
            Brewday::class => 'BrewDay',
            Recipes::class => 'BrewRecipes',
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


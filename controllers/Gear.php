<?php namespace EliseOntwerpt\Brouwerbouwer\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Gear extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Eliseontwerpt.Brouwerbouwer', 'main-menu-item');
    }
}

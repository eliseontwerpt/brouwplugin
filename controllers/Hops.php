<?php namespace Hjp\Brouwerbouwer\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Hops extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Hjp.Brouwerbouwer', 'main-menu-item');
    }
    public function beforeUpdate()
{
    if ($this->title != $this->original['title']) {
        $this->ibu = 55;
    }
}
    
}

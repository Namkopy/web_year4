<?php
use models\system\Systema;

class Controller
{
    protected $system;
    public function __construct()
    {
        $this->system= new Systema();
    }
    public function model($model)
    {
        require_once "app/models/{$model}.php";
        return new $model();
    }
    public function submodel($part, $model)
    {
        require_once "app/models/{$part}/{$model}.php";
        return new $model();
    }
    public function view($view, $data=array())
    {
        require_once "app/views/{$view}.php";
    }
    public function errors()
    {
        $this->view('layouts/header');
        $this->view('layouts/navbarhead');
        $this->view('contents/error');
        $this->view('layouts/footer');
    }
}

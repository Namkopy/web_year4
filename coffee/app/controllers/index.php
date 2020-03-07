<?php
use models\publics\Publics;

class index extends Controller
{
    protected $page;
    protected $menuid;
    protected $model;
    public function __construct()
    {
        parent::__construct();
        $this->page = 'index';
        // $this->model = new Publics();
        // $this->menus = $this->model->getMenus(1,'');
        //===========================
        // self::vistorCounter();
        // $this->visitors = $this->model->getAllVisitors();
    }
    public function error()
    {
        parent::errors();
    }

     
    public function index()
    {
        if (isset($_REQUEST['type'])) {
            self::mainpage();
        }
    }
    public function mainpage()
    {
        $this->menuid = 1;

        $this->view('layouts/header');
        $this->view('layouts/navbarhead');
        $this->view('tamplates/bodyindex');
        $this->view('layouts/footer');
    }
}

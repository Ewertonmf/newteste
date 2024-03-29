<?php

class Controller
{

    protected $request;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->request = new Request();
    }

    /**
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        $this->loadTemplate('notFound');
    }

    /**
     * Carrega uma view fora do Template,
     * podendo ou não receber dados
     * @param $viewName
     * @param array $viewData
     */
    public function loadView($viewName, $viewData = array())
    {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    /**
     * Carrega o arquivo de Template,
     * @param $viewName
     * @param array $viewData
     */
    public function loadTemplate($viewName, $viewData = array(), $templateName = 'template')
    {
        include "views/{$templateName}.php";
    }

    /**
     * Carrega as views dentro do Template,
     * podendo ou não receber dados
     * @param $viewName
     * @param $viewData
     */
    public function loadViewInTemplate($viewName, $viewData)
    {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

}

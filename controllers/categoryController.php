<?php

class categoryController extends Controller {

    /**
     * Construtor da classe
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Exibe uma listagem do recurso
     *
     * @return View
     */
    public function index() {
        $data = [];
        $data["title"] = "index";
        $this->loadTemplate("category/index", $data);
    }

    /**
     * Exibe o formulario para criar um novo recurso.
     *
     * @return View
     */
    public function create() {
        $data = [];
        $data["title"] = "create";
        $this->loadTemplate("category/create", $data);
    }

    /**
     * Captura os dados do formulario para manipular
     *
     * @return msg/redirect
     */
    public function store() {
        
    }

    /**
     * Exibe um recurso especifico.
     *
     * @param  int $id
     * @return View
     */
    public function show($id) {
        $data = [];
        $data["title"] = "show";
        $this->loadTemplate("category/show", $data);
    }

    /**
     * Exibe o formulario para editar um recurso especifico.
     *
     * @param  int $id
     * @return View
     */
    public function edit($id) {
        $data = [];
        $data["title"] = "edit";
        $this->loadTemplate("category/edit", $data);
    }

    /**
     * Atualiza um recurso especifico.
     *
     * @param  int $id
     * @return msg/redirect
     */
    public function update($id) {
        
    }

    /**
     * Exclui um recurso especifico.
     *
     * @param  int $id
     * @return msg/redirect
     */
    public function delete($id) {
        
    }

}

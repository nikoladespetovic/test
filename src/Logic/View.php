<?php

namespace App\Logic;

use Exception;

class View {
    private $data;
    private $renderLayout;
    private $renderView;
    public $content;


    public function __construct(string $layoutName, string $viewName) {
        $this->data = array();
        $layout     = 'templates/layouts/' . $layoutName . '.php';
        $layout2    = '../templates/layouts/' . $layoutName . '.php';
        $view       = 'templates/' . $viewName . '.php';
        $view2      = '../templates/' . $viewName . '.php';
        if(file_exists($layout)){
            $this->renderLayout = $layout;
        }
        elseif(file_exists($layout2)) {
            $this->renderLayout = $layout2;
        }
        else {
            throw new Exception('Layout ' . $layoutName . ' not found!');
            exit();
        }

        if(file_exists($view)){
            $this->renderView = $view;
        }
        elseif(file_exists($view2)) {
            $this->renderView = $view2;
        }
        else {
            throw new Exception('View ' . $viewName . ' not found!');
            exit();
        }

    }

    public function assignVariable($variableName, $variableValue) {
        $this->data[ $variableName ] = $variableValue;
    }

    public function renderView() {
        ob_start();
        extract($this->data);
        include_once($this->renderView);
        $this->content = ob_get_contents();
        ob_get_clean();
    }


    public function __destruct() {
        extract($this->data);
        $this->renderView();
        include_once($this->renderLayout);
    }
}
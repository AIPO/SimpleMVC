<?php

class Controller {

    public function model($model) {

        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data =[]) { //$data turi buti aprasytas array
        require_once '../app/views/'. $view. '.php'; //pataisytas slashas
    }

}

<?php
class Home extends Controller{
    public function index($name= '') {
        
        $user = $this->model('User');
        $user->name = $name; 
// pasiprasem user modelio ir per parametra perduodam reiksme is paspausdina.      
        echo $user->name;
    }
}

